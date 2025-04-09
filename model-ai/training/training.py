import pandas as pd
import numpy as np
from sklearn.ensemble import RandomForestClassifier
from sklearn.model_selection import train_test_split
from sklearn.metrics import accuracy_score
import mlflow
import mlflow.sklearn
import dagshub
from datetime import datetime
import joblib

dagshub.init(repo_owner="mamountabak64", repo_name="match_predictor")
mlflow.set_tracking_uri("https://dagshub.com/mamountabak64/match_predictor.mlflow")

data = pd.read_csv("matches.csv")
data['date'] = pd.to_datetime(data['date'])  

def get_team_features(team, match_date, data, n_matches=20):
    team_matches = data[((data['team'] == team) | (data['opponent'] == team)) & 
                        (data['date'] < match_date)].sort_values(by='date', ascending=False).head(n_matches)
    
    if len(team_matches) < n_matches:
        raise ValueError(f"غير كافٍ من المباريات لـ {team} قبل {match_date}")
    
    features = {}
    for col in ['shots', 'shots_on_target', 'possession', 'passes', 'pass_accuracy', 
                'fouls', 'yellow_cards', 'red_cards', 'offsides', 'corners']:
        features[f'avg_{col}'] = team_matches.apply(
            lambda row: row[col] if row['team'] == team else row[col], axis=1).mean()
    
    wins = len(team_matches[team_matches['result'] == 1])
    features['win_rate'] = wins / n_matches
    return list(features.values())

def prepare_training_data(match_team, match_opponent, match_date, data):
    match = data[(data['team'] == match_team) & 
                 (data['opponent'] == match_opponent) & 
                 (data['date'] == match_date)]
    
    if match.empty:
        raise ValueError("المباراة غير موجودة في البيانات")
    
    team_features = get_team_features(match_team, match_date, data)
    opponent_features = get_team_features(match_opponent, match_date, data)
    
    result = match['result'].values[0]
    return team_features + opponent_features, result

X = []
y = []
for idx, row in data.iterrows():
    try:
        features, result = prepare_training_data(row['team'], row['opponent'], row['date'], data)
        X.append(features)
        y.append(result)
    except ValueError as e:
        print(f"تخطي المباراة: {e}")
        continue

X = np.array(X)
y = np.array(y)

if len(X) == 0 or len(y) == 0:
    raise ValueError("لا توجد بيانات كافية للتدريب بعد المعالجة")

X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.2, random_state=42)

with mlflow.start_run():
    model = RandomForestClassifier(n_estimators=100, random_state=42)
    model.fit(X_train, y_train)
    
    y_pred = model.predict(X_test)
    accuracy = accuracy_score(y_test, y_pred)
    
    mlflow.log_param("n_estimators", 100)
    mlflow.log_param("random_state", 42)
    mlflow.log_metric("accuracy", accuracy)
    
    mlflow.sklearn.log_model(model, "random_forest_model")
    
    print(f"Accuracy on test set: {accuracy:.2f}")

joblib.dump(model, "match_predictor_model.pkl")
print("تم حفظ النموذج بنجاح في match_predictor_model.pkl")