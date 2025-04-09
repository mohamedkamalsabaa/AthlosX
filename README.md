# AthlosX - وثائق بنية الملفات

![Logo](athlosx-fullstack/public/admin/assets/images/logo1.png)

هذه الصفحة توضح بنية الملفات لمشروع **AthlosX**، وهو مشروع متعدد الأقسام يوفر أدوات مساعدة مدعمة بالذكاء الاصطناعي لتحسين استراتيجيات اللعب.

## مجلدات المشروع الرئيسية

### 1. **athlosx-fullstack**  
📁 يحتوي على النظام كاملاً، بما في ذلك الواجهة الأمامية والخلفية.

- Laravel system مع ملفات PHP، قواعد البيانات، والواجهات.

---

### 2. **backend-services-ai**  
📁 يحتوي على خدمات الخلفية المرتبطة بالذكاء الاصطناعي.

- **`api.py`**: ملف FastAPI لتوفير واجهة برمجة تطبيقات لتوقع نتائج المباريات باستخدام نموذج مدرب.
- **`match_predictor_model.pkl`**: ملف النموذج المدرب باستخدام `RandomForestClassifier`.
- **`matches.csv`**: ملف بيانات المباريات (حقيقية أو وهمية) يحتوي على إحصائيات مثل التسديدات، الحيازة، والنتائج.
- **`Procfile`**: ملف لتحديد كيفية تشغيل التطبيق على خادم (مثل Heroku)، يحتوي على الأمر: 
- **`requirements.txt`**: يحتوي على متطلبات Python التالية:
- fastapi
- uvicorn
- pandas
- numpy
- joblib

---

### 3. **model-ai**  
📁 يحتوي على ملفات تدريب نموذج الذكاء الاصطناعي وبيانات وهمية.

- **`training.py`**: 
- استيراد مكتبات مثل `pandas`, `numpy`, `sklearn`, `mlflow`, و `joblib`.
- استخدام `RandomForestClassifier` لتدريب نموذج التنبؤ.
- تسجيل التجارب باستخدام `mlflow` على Dagshub.
- حفظ النموذج في `match_predictor_model.pkl`.

- **`data_generator.py`**:  
- توليد 1000 مباراة وهمية باستخدام فرق عشوائية وإحصائيات مثل التسديدات والحيازة (رغم أنها وهمية إلا أنها منطقية).
- حفظ البيانات في `matches.csv`.

- **`match_predictor_model.pkl`**: النموذج المدرب الناتج عن التدريب.

- **`matches.csv`**: ملف البيانات الوهمية الناتج عن التوليد.

---

## ملاحظات

- **`backend-services-ai`** يعتمد على `match_predictor_model.pkl` و `matches.csv` من **`model-ai`**.
- المشروع يجمع بين **Laravel** و **FastAPI** لخدمات الذكاء الاصطناعي.
