import pandas as pd
import numpy as np
from datetime import datetime, timedelta
import random

teams = ["TeamA", "TeamB", "TeamC", "TeamD", "TeamE", "TeamF", "TeamG", "TeamH", "TeamI", "TeamJ"]

def random_date(start_year=2020, end_year=2025):
    start_date = datetime(start_year, 1, 1)
    end_date = datetime(end_year, 12, 31)
    delta = end_date - start_date
    random_days = random.randint(0, delta.days)
    return start_date + timedelta(days=random_days)

data = {
    "team": [], "opponent": [], "date": [], "shots": [], "shots_on_target": [], 
    "possession": [], "passes": [], "pass_accuracy": [], "fouls": [], 
    "yellow_cards": [], "red_cards": [], "offsides": [], "corners": [], "result": []
}

for _ in range(1000):
    team = random.choice(teams)
    opponent = random.choice([t for t in teams if t != team])
    match_date = random_date()
    
    # إحصائيات الفريق
    shots = random.randint(5, 25)
    shots_on_target = random.randint(0, shots)
    possession = random.randint(30, 70)
    passes = random.randint(200, 600)
    pass_accuracy = random.randint(60, 95)
    fouls = random.randint(5, 20)
    yellow_cards = random.randint(0, 5)
    red_cards = random.randint(0, 2)
    offsides = random.randint(0, 6)
    corners = random.randint(2, 12)
    
    opp_shots = random.randint(5, 25)
    opp_shots_on_target = random.randint(0, opp_shots)
    
    if shots_on_target > opp_shots_on_target + 2:
        result = 1 
    elif abs(shots_on_target - opp_shots_on_target) <= 2:
        result = 0 
    else:
        result = -1 
    
    data["team"].append(team)
    data["opponent"].append(opponent)
    data["date"].append(match_date)
    data["shots"].append(shots)
    data["shots_on_target"].append(shots_on_target)
    data["possession"].append(possession)
    data["passes"].append(passes)
    data["pass_accuracy"].append(pass_accuracy)
    data["fouls"].append(fouls)
    data["yellow_cards"].append(yellow_cards)
    data["red_cards"].append(red_cards)
    data["offsides"].append(offsides)
    data["corners"].append(corners)
    data["result"].append(result)

df = pd.DataFrame(data)
df = df.sort_values(by="date")
df.to_csv("matches.csv", index=False)
print("تم توليد 1000 مباراة وحفظها في matches.csv")