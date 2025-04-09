@extends('dashboard.user.layouts.app')

@section('user_title', 'لوحة تحكم المستخدم')
@section('user_styles')
    <style>
        .fe-arrow-left {
            font-size: 25px;
        }

        .icon-tool {
            font-size: 30px;
        }

        .soon::after {
            content: 'قريبا';
            position: absolute;
            left: 5px;
            bottom: 5px;
            background: rgb(255 68 0 / 97%);
            font-size: 15px;
            border-radius: 5px;
            padding: 5px;

        }
    </style>
@endsection
@section('user_main')
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="text-center mb-4">
                        <h1 class="display-4 font-weight-bold">كابتن AthlosX</h1>
                        <p class="lead text-muted">مساعدك الذكي الذي سيمهد لك الطريق للأخذ بيد فريقك للفوز مع حزمة متقدمة من
                            أدوات الذكاء الصنعي</p>
                    </div>



                    <div class="row">

                        <!-- محرك التنبؤ -->
                        <div class="col-md-4 col-sm-6 mb-4">
                            <div class="card h-100 shadow-sm">
                                <div class="card-body">
                                    <i class="bi bi-eye-fill icon-tool"></i>
                                    <h5 class="card-title">محرك التنبؤ</h5>
                                    <p class="card-text">يتوقع نتائج المباريات بناءً على تحليل الإحصائيات التاريخية
                                        والبيانات الحية، مما يساعد الفرق على الاستعداد بشكل أفضل و يستند في توقعاته الى
                                        تحليلات دقيقة</p>
                                    <a href="{{ route('user.ai-tools.prediction-engine.index') }}" class="">
                                        <i class="fe fe-arrow-left "></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- منشئ التكتيكات -->
                        <div class="col-md-4 col-sm-6 mb-4">
                            <div class="card h-100 shadow-sm">
                                <div class="card-body">
                                    <i class="bi bi-bar-chart-line-fill icon-tool"></i>
                                    <h5 class="card-title soon">منشئ التكتيكات</h5>
                                    <p class="card-text"> يقوم بتحليل بيانات المباريات السابقة واقتراح خطط لعب محسّنة بناءً
                                        على أساليب اللعب الفردية والجماعية للوصول الى اعلى انسجام بين اللاعبين .</p>
                                    <a href="#" class="">
                                        <i class="fe fe-arrow-left "></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- متتبع الأداء -->
                        <div class="col-md-4 col-sm-6 mb-4">
                            <div class="card h-100 shadow-sm">
                                <div class="card-body">
                                    <i class="bi bi-fast-forward-fill icon-tool"></i>
                                    <h5 class="card-title soon">متتبع الأداء</h5>
                                    <p class="card-text">يراقب الحالة البدنية والفنية للاعبين باستخدام البيانات الحيوية
                                        والفيديوهات، لتقديم توصيات تحسّن أدائهم مع تقليل مخاطر الإصابات.</p>
                                    <a href="#" class="">
                                        <i class="fe fe-arrow-left "></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- محلل المنافسين -->
                        <div class="col-md-4 col-sm-6 mb-4">
                            <div class="card h-100 shadow-sm">
                                <div class="card-body">
                                    <i class="bi bi-people-fill icon-tool"></i>
                                    <h5 class="card-title soon">محلل المنافسين</h5>
                                    <p class="card-text">يدرس أسلوب لعب الفرق المنافسة، ويحدد نقاط القوة والضعف، مما يساعد
                                        المدربين على وضع خطط فعالة قبل المباريات لسد نقاط ضعف الفريق و استغلال نقاط القوة .
                                    </p>
                                    <a href="#" class="">
                                        <i class="fe fe-arrow-left "></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- نظام الكشافة الذكي -->
                        <div class="col-md-4 col-sm-6 mb-4">
                            <div class="card h-100 shadow-sm">
                                <div class="card-body">
                                    <i class="bi bi-database-fill icon-tool"></i>
                                    <h5 class="card-title soon">نظام الكشافة الذكي</h5>
                                    <p class="card-text">يعتمد على قاعدة بيانات ضخمة لترشيح أفضل اللاعبين للتعاقد معهم بناءً
                                        على أدائهم في البطولات المختلفة حيث يتم تحديث قاعدة البيانات بشكل مستمر .</p>
                                    <a href="#" class="">
                                        <i class="fe fe-arrow-left "></i>
                                    </a>
                                </div>
                            </div>
                        </div>


                        <!-- الذكاء التفسيري -->
                        <div class="col-md-4 col-sm-6 mb-4">
                            <div class="card h-100 shadow-sm">
                                <div class="card-body">
                                    <i class="bi bi-chat-left-dots-fill icon-tool"></i>
                                    <h5 class="card-title soon">الذكاء التفسيري</h5>
                                    <p class="card-text">يوفر تحليلاً عميقاً لبيانات الفريق والمنافسين باستخدام تقنيات
                                        التفسير الذكي، مما يساعد على فهم أفضل لأداء اللاعبين واستراتيجيات اللعب.</p>
                                    <a href="#" class="">
                                        <i class="fe fe-arrow-left "></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
