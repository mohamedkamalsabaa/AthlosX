@extends('web.layouts.app')

@section('title')
    AthlosX - الصفحة الرئيسية
@endsection

@section('description')
    AthlosX هو نظام متكامل يعتمد على الذكاء الاصطناعي لتحليل المباريات، تحسين أداء اللاعبين، وتقديم استراتيجيات متقدمة
    للمدربين. يوفر أدوات ذكية لمراقبة الفرق، دراسة المنافسين، والتنبؤ بالنتائج لتحقيق أقصى استفادة من البيانات الرياضية.
@endsection

@section('content')
    <section
        class="hero-section tw-relative tw-mt-20 tw-flex tw-min-h-[100vh] tw-w-full tw-max-w-[100vw] tw-flex-col tw-overflow-hidden max-lg:tw-mt-[100px]"
        id="hero-section">

        <!-- video container -->
        <div class="tw-fixed tw-bg-[#000000af] dark:tw-bg-[#80808085] tw-top-0 tw-left-1/2 tw--translate-x-1/2 tw-z-20 tw-transition-opacity
        tw-duration-300 tw-scale-0 tw-opacity-0 tw-p-2
        tw-w-full tw-h-full tw-flex tw-place-content-center tw-place-items-center"
            id="video-container-bg">

            <div class="tw-max-w-[80vw] max-lg:tw-max-w-full max-lg:tw-w-full tw-scale-0 tw-transition-transform tw-duration-500 tw-p-6 tw-rounded-xl  max-lg:tw-px-2 tw-w-full tw-gap-2 tw-shadow-md 
                    tw-h-[90vh] max-lg:tw-h-auto max-lg:tw-min-h-[400px] tw-bg-white dark:tw-bg-[#16171A] tw-max-h-full
                    "
                id="video-container">
                <div class="tw-w-full tw-flex">
                    <button type="button" onclick="closeVideo()" class="tw-ml-auto tw-text-xl" title="close">
                        <i class="bi bi-x-circle-fill"></i>
                    </button>
                </div>
                <div
                    class="tw-flex tw-w-full  tw-rounded-xl tw-px-[5%] max-md:tw-px-2 tw-min-h-[300px] tw-max-h-[90%] tw-h-full">

                    <div class="tw-relative tw-bg-black tw-min-w-full tw-min-h-full tw-overflow-clip tw-rounded-md">
                        <!-- add your youtube video link here -->
                        <iframe
                            class="tw-absolute tw-top-[50%] tw--translate-y-[50%] tw-left-[50%] tw--translate-x-[50%] tw-w-full tw-h-full"
                            src="https://www.youtube.com/embed/oL0BNUhaYnY"
                            title="Launch of #AILeague At LEAP 2025 |  انطلاقة #دوري_الذكاء_الاصطناعي في ليپ ٢٠٢٥"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>

                </div>
            </div>
        </div>

        <div
            class="hero-bg-gradient tw-relative tw-flex tw-h-full tw-min-h-[100vh] tw-w-full tw-flex-col tw-place-content-center tw-gap-6 tw-p-[5%] max-xl:tw-place-items-center max-lg:tw-p-4">

            <div
                class="purple-bg-grad  reveal-up tw-absolute tw-left-1/2 tw--translate-1/2 tw-top-[10%] tw-h-[120px] tw-w-[120px]">
            </div>

            <div class="tw-flex tw-flex-col tw-min-h-[60vh] tw-place-content-center tw-items-center">
                <h2
                    class="reveal-up tw-text-center tw-text-7xl tw-font-semibold tw-uppercase tw-leading-[90px] max-lg:tw-text-4xl max-md:tw-leading-snug">
                    <span class=""> الحل الذكي </span>
                    <br />
                    <span class="tw-font-thin tw-font-serif"> لتحليل الأداء الرياضي </span>
                </h2>
                <div class="reveal-up tw-mt-8 tw-max-w-[450px] tw-text-lg max-lg:tw-text-base tw-p-2 tw-text-center
                tw-text-gray-800 dark:tw-text-white max-lg:tw-max-w-full"
                    dir="rtl">
                    <!-- Test, Develop and Deploy all your AI models in one place, with Pixa seamless playground interface -->
                    طور استراتيجيتك، تفوق على المنافسين !
                </div>

                <div class="reveal-up tw-mt-10 max-md:tw-flex-col tw-flex tw-place-items-center tw-gap-4">

                    <button onclick="openVideo()"
                        class="btn !tw-w-[170px] max-lg:!tw-w-[160px] !tw-rounded-xl !tw-py-4 max-lg:!tw-py-2 tw-flex tw-gap-2 tw-group !tw-bg-transparent !tw-text-black dark:!tw-text-white tw-transition-colors 
                                tw-duration-[0.3s] tw-border-[1px] tw-border-black dark:tw-border-white"
                        id="video-button">

                        <div class="tw-relative tw-flex tw-place-items-center tw-place-content-center tw-w-6 tw-h-6">
                            <div class="tw-absolute tw-inset-0 tw-top-0 tw-left-0 tw-scale-0 tw-duration-300 group-hover:tw-scale-100 tw-border-2
                                     tw-border-gray-600 dark:tw-border-gray-200 tw-rounded-full tw-w-full tw-h-full"
                                id="video"></div>
                            <span class="bi bi-play-circle-fill"></span>
                        </div>
                        <span>شاهد الشرح</span>
                    </button>

                    <a class="btn tw-group max-lg:!tw-w-[160px] tw-flex tw-gap-2 tw-shadow-lg !tw-w-[170px] !tw-rounded-xl !tw-py-4 max-lg:!tw-py-2 tw-transition-transform tw-duration-[0.3s] hover:tw-scale-x-[1.03]"
                        href="#">
                        <i class="bi bi-arrow-left group-hover:tw-translate-x-1 tw-duration-300"></i>
                        <span>اشترك الآن</span>
                    </a>

                </div>
            </div>

            <!-- prompt container -->
            <div class="reveal-up  tw-relative tw-mt-8 tw-flex tw-w-full tw-place-content-center tw-place-items-center"
                id="dashboard-container" dir="rtl">
                <div
                    class="purple-bg-grad  reveal-up tw-absolute tw-left-1/2 tw--translate-x-1/2 tw-top-[5%] tw-h-[200px] tw-w-[200px]">
                </div>

                <div class="tw-relative tw-max-w-[80%] tw-bg-white dark:tw-bg-black tw-border-[1px] dark:tw-border-[#36393c] lg:tw-w-[1024px]
                        lg:tw-h-[650px]  tw-flex tw-shadow-xl max-lg:tw-h-[450px] max-lg:tw-w-full
                        tw-overflow-hidden
                        tw-min-w-[320px] md:tw-w-full tw-min-h-[450px] tw-rounded-xl tw-bg-transparent max-md:tw-max-w-full"
                    id="dashboard">

                    <div
                        class="purple-bg-grad tw-max-w-[80%] reveal-up tw-absolute tw-left-1/2 tw--translate-x-1/2 tw-top-[0%] lg:tw-max-w-[1000px] tw-h-full tw-w-full">
                    </div>
                    <div class="animated-border tw-w-full tw-h-full tw-p-[2px]">
                        <div class="tw-w-full tw-h-full tw-rounded-xl tw-overflow-hidden tw-flex">

                            <div
                                class="tw-min-w-[250px] max-lg:tw-hidden tw-p-2 tw-gap-2 tw-flex tw-flex-col tw-bg-gray-100 
                                    dark:tw-bg-[#171717] tw-h-full">
                                <!-- <h3 class="tw-text-xl tw-uppercase">
                                    Pixa
                                </h3> -->
                                <div class="tw-h-[30px] tw-w-fit tw-max-w-[100px]" id="api-logo">
                                    <img src="{{asset('public/web/assets/logo/logo.png')}}" alt="logo"
                                        class="tw-object-contain tw-opacity-80 tw-h-full tw-w-full dark:tw-invert" />
                                </div>

                                <div class="tw-flex tw-mt-2 tw-gap-2 tw-flex-col">
                                    <a href="#sample"
                                        class="tw-flex tw-rounded-sm tw-gap-2 tw-p-2 dark:hover:tw-bg-[#2d2d2ddb] hover:tw-bg-gray-200">
                                        <i class="bi bi-house-door"></i>
                                        <span>الرئيسية</span>
                                    </a>
                                    <a href="#sample"
                                        class="tw-flex tw-rounded-sm tw-gap-2 tw-p-2 dark:hover:tw-bg-[#2d2d2ddb] hover:tw-bg-gray-200">
                                        <i class="bi bi-people"></i>
                                        <span>الفرق</span>
                                    </a>
                                    <a href="#sample"
                                        class="tw-flex tw-rounded-sm tw-gap-2 tw-p-2 dark:hover:tw-bg-[#2d2d2ddb] hover:tw-bg-gray-200">
                                        <i class="bi bi-graph-down"></i>
                                        <span>التحليل</span>
                                    </a>
                                    <a href="#sample"
                                        class="tw-flex tw-rounded-sm tw-group tw-gap-2 tw-p-2 dark:hover:tw-bg-[#2d2d2ddb] hover:tw-bg-gray-200">
                                        <span>عرض الكل</span>
                                        <i
                                            class="bi bi-arrow-left tw-transform tw-transition-transform tw-duration-300 group-hover:tw-translate-x-1"></i>
                                    </a>
                                </div>

                                <div class="tw-mt-auto tw-w-full tw-flex tw-px-6 tw-place-content-center">
                                    <a href="#sample"
                                        class="btn !tw-w-full !tw-bg-transparent tw-duration-[0.3s] 
                                                        hover:!tw-bg-black hover:!tw-text-white
                                                        dark:hover:!tw-bg-white dark:hover:!tw-text-black
                                                        !tw-border-[1px] !tw-border-black !tw-text-black
                                                        dark:!tw-border-white dark:!tw-text-white
                                                        "
                                        style="margin-bottom: 12px;">
                                        تسجيل الدخول
                                    </a>
                                </div>

                            </div>

                            <div class="tw-flex tw-w-full tw-p-4 tw-bg-white dark:tw-bg-black tw-h-full tw-flex-col"
                                id="pixa-playground">
                                <div class="tw-relative tw-w-full tw-flex tw-place-content-center tw-h-full">
                                    <div class="prompt-container tw-overflow-y-auto tw-px-[5%] max-lg:tw-px-2 scrollbar max-lg:tw-max-h-[80%] tw-max-h-[550px] 
                                            max-lg:tw-mt-12 tw-w-full tw-h-full tw-z-10 tw-flex tw-flex-col"
                                        id="prompt-container">
                                        <div class="tw-w-full tw-flex tw-text-center tw-flex-col tw-place-content-center">
                                            <h2 class="tw-text-2xl max-md:tw-text-xl max-md:tw-mt-3 tw-opacity-80">
                                                AthlosX
                                            </h2>
                                            <div class="tw-inline tw-mt-6 max-md:tw-mt-3">
                                                <span id="prompts-sample"></span>
                                            </div>
                                        </div>

                                        <div class="tw-w-full tw-flex tw-text-center tw-flex-col tw-place-content-center">
                                            <img src="assets/images/team.png" alt="Team">
                                        </div>
                                    </div>

                                </div>

                                <form action="" id="prompt-form" onsubmit="return false;"
                                    class="tw-place-content-center tw-mt-auto tw-h-[50px] tw-p-1 tw-place-items-center 
                                        tw-justify-around tw-flex tw-gap-1 tw-bottom-2 tw-w-full tw-rounded-md tw-bg-[#f3f4f6] dark:tw-bg-[#171717]">
                                    <div class="tw-min-w-[140px] tw-min-h-[80px] max-lg:tw-absolute tw-z-10 tw-top-1 tw-left-1/2 max-lg:tw--translate-x-1/2 
                                            tw-flex tw-flex-col tw-text-sm tw-gap-1 tw-place-content-center"
                                        id="dropdown1-out">
                                        <div class="dropdown tw-p-2 tw-rounded-md  tw-bg-[#f3f4f6] dark:tw-bg-[#171717]"
                                            id="dropdown1">
                                            <!-- store the value of the dropdown-->
                                            <input type="hidden" class="dropdown-input">
                                            <button type="button" class="dropdown-toggle tw-flex tw-gap-5">
                                                <span class="tw-flex tw-w-fit tw-gap-2 tw-place-items-center">
                                                    <span class="dropdown-select-text">النموذج المطلوب</span>
                                                </span>
                                                <i class="bi bi-chevron-down tw-ml-auto lg:tw-hidden"></i>
                                                <i class="bi bi-chevron-up tw-ml-auto lg:tw-block tw-hidden"></i>
                                            </button>
                                            <ul
                                                class="dropdown-menu tw-shadow-md tw-bottom-[50px] max-lg:tw-top-[105%] max-lg:tw-bottom-[unset]">
                                                <li class="tw-flex tw-gap-2 tw-place-items-center">
                                                    <span class="dropdown-text">الاستراتيجية 🎯</span>
                                                </li>
                                                <li class="tw-flex tw-gap-2 tw-place-items-center">
                                                    <span class="dropdown-text">التحليلات 📊</span>
                                                </li>
                                                <li class="tw-flex tw-gap-2 tw-place-items-center">
                                                    <span class="dropdown-text">التوقعات ⚡</span>
                                                </li>
                                                <li class="tw-flex tw-gap-2 tw-place-items-center">
                                                    <span class="dropdown-text">التفسير 🧠</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section
        class="tw-relative tw-flex tw-w-full tw-max-w-[100vw] tw-flex-col tw-place-content-center tw-place-items-center tw-overflow-hidden tw-p-8">

        <div class="reveal-up carousel-container">
            <div
                class="carousel max-md:tw-flex-col lg:w-place-content-center tw-mt-10 tw-flex tw-w-full tw-gap-5 max-md:tw-gap-2">
                <!-- add the brands using your app  -->

                <div class="carousel-img tw-h-[30px] tw-w-[150px]">
                    <img src="{{asset('public/web/assets/images/brand-logos/SDAIA.png')}}" alt="SDAIA"
                        class="tw-h-full tw-w-full tw-object-contain tw-grayscale tw-transition-colors hover:tw-grayscale-0"
                        srcset="" />
                </div>
                <div class="carousel-img tw-h-[30px] tw-w-[150px]">
                    <img src="{{asset('public/web/assets/images/brand-logos/league.png')}}" alt="Ai league"
                        class="tw-h-full tw-w-full tw-object-contain tw-grayscale tw-transition-colors hover:tw-grayscale-0"
                        srcset="" />
                </div>
                <div class="carousel-img tw-h-[30px] tw-w-[150px]">
                    <img src="{{asset('public/web/assets/images/brand-logos/tuwaiq.png')}}" alt="tuwaiq"
                        class="tw-h-full tw-w-full tw-object-contain tw-grayscale tw-transition-colors hover:tw-grayscale-0"
                        srcset="" />
                </div>
            </div>
        </div>
    </section>

    <section
        class="tw-mt-20 tw-relative tw-flex tw-max-w-[100vw] tw-flex-col tw-place-content-center tw-place-items-center tw-overflow-hidden"
        dir="rtl" id="services">


        <div class="tw-mt-8 tw-flex tw-flex-col tw-w-full tw-h-full tw-place-items-center tw-gap-5">
            <div class="reveal-up tw-mt-5 tw-flex tw-flex-col tw-gap-3 tw-text-center">
                <h2 class="tw-text-5xl tw-font-medium max-md:tw-text-3xl tw-p-2">
                    اكتشف خدماتنا المبتكرة ✨
                </h2>
            </div>
            <div
                class="tw-mt-4 tw-flex tw-flex-col tw-max-w-[1150px] max-lg:tw-max-w-full tw-h-full 
                    tw-p-4 max-lg:tw-place-content-center tw-gap-8 ">

                <div class="reveal-up tw-mt-10 tw-flex tw-flex-wrap tw-place-content-center tw-gap-8 max-lg:tw-flex-col">
                    <div class="reveal-up tw-w-[350px] tw-h-[480px] tw-flex max-md:tw-w-full">
                        <a href="#"
                            class=" tw-relative tw-p-10 tw-transition-all tw-duration-300 tw-group/card  tw-gap-5 tw-flex 
                        tw-flex-col tw-w-full tw-h-full  tw-bg-[#f6f7fb] dark:tw-bg-[#171717] tw-rounded-3xl 
                        hover:tw-scale-[1.02]">
                            <div
                                class="tw-w-full tw-flex tw-place-contet-center tw-min-h-[180px] tw-h-[180px] tw-rounded-xl tw-overflow-hidden">
                                <img src="{{asset('public/web/assets/images/home/analysis.png')}}"
                                    class="tw-w-full tw-object-contain tw-h-auto " alt="...">
                                <!-- <i class="bi bi-grid-1x2-fill"></i> -->
                            </div>
                            <h2 class="tw-text-3xl max-md:tw-text-2xl tw-font-medium">تحليل المباريات المتقدم</h2>
                            <p class="tw-text-base tw-leading-normal tw-text-gray-800 dark:tw-text-gray-200">
                                تحليل شامل للمباريات السابقة لكشف نقاط القوة والضعف لدى فريقك والمنافس، مع تقديم
                                استراتيجيات مخصصة لكل مباراة.
                            </p>

                        </a>
                    </div>


                    <div class="reveal-up tw-w-[350px] tw-h-[480px] tw-flex max-md:tw-w-full">
                        <a href="#"
                            class=" tw-relative tw-p-10 tw-transition-all tw-duration-300 tw-group/card  tw-gap-5 tw-flex 
                        tw-flex-col tw-w-full tw-h-full  tw-bg-[#f6f7fb] dark:tw-bg-[#171717] tw-rounded-3xl 
                        hover:tw-scale-[1.02]">
                            <div
                                class="tw-w-full tw-flex tw-place-contet-center tw-min-h-[180px] tw-h-[180px] tw-rounded-xl tw-overflow-hidden">
                                <img src="{{asset('public/web/assets/images/home/rating.png')}}" class="tw-w-full tw-object-contain tw-h-auto "
                                    alt="...">
                                <!-- <i class="bi bi-grid-1x2-fill"></i> -->
                            </div>
                            <h2 class="tw-text-3xl max-md:tw-text-2xl tw-font-medium">منظومة التوصيات الذكية</h2>
                            <p class="tw-leading-normal tw-text-gray-800 dark:tw-text-gray-200">
                                اقتراح لاعبين جدد للتعاقد معهم، تحديد أساليب اللعب الفعالة، وتوصيات تدريبية محسّنة بناءً
                                على قاعدة بيانات محدثة باستمرار.
                            </p>
                        </a>
                    </div>


                    <div class="reveal-up tw-w-[350px] tw-h-[480px] tw-flex max-md:tw-w-full">
                        <a href="#"
                            class=" tw-relative tw-p-10 tw-transition-all tw-duration-300 tw-group/card  tw-gap-5 tw-flex 
                        tw-flex-col tw-w-full tw-h-full  tw-bg-[#f6f7fb] dark:tw-bg-[#171717] tw-rounded-3xl 
                        hover:tw-scale-[1.02]">
                            <div
                                class="tw-w-full tw-flex tw-place-contet-center tw-min-h-[180px] tw-h-[180px] tw-rounded-xl tw-overflow-hidden">
                                <img src="{{asset('public/web/assets/images/home/goal.png')}}" class="tw-w-full tw-object-contain tw-h-auto "
                                    alt="...">
                            </div>
                            <h2 class="tw-text-3xl max-md:tw-text-2xl tw-font-medium">استراتيجيات التفسير والتنبؤ</h2>
                            <p class="tw-leading-normal tw-text-gray-800 dark:tw-text-gray-200">
                                تحليل بيانات الفريق المنافس والتنبؤ بحركته القادمة، واقتراح خطط لعب تضمن أفضلية فريقك
                                على أرض الملعب، بالإضافة الى استراتيجيات تفسير النتائج المطروحة.
                            </p>
                        </a>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <section
        class="tw-relative tw-mt-10 tw-flex tw-min-h-[100vh] tw-w-full tw-max-w-[100vw] tw-flex-col tw-place-items-center lg:tw-p-6"
        dir="rtl" id="tools">

        <div
            class="reveal-up tw-mt-[5%] tw-flex tw-h-full tw-w-full tw-place-content-center 
                tw-gap-2 tw-p-4 max-lg:tw-max-w-full max-lg:tw-flex-col">

            <div
                class="tw-relative tw-flex tw-max-w-[30%] max-lg:tw-max-w-full tw-flex-col 
                    tw-place-items-start tw-gap-4  tw-p-2 max-lg:tw-place-items-center 
                    max-lg:tw-place-content-center max-lg:tw-w-full">
                <div class="tw-top-40 tw-flex tw-flex-col lg:tw-sticky tw-place-items-center tw-max-h-fit tw-max-w-[850px] max-lg:tw-max-h-fit max-lg:tw-max-w-[320px] tw-overflow-hidden"
                    style="padding-top: 8px;">
                    <h2 class="tw-text-5xl tw-font-serif tw-text-center tw-font-medium  max-md:tw-text-3xl">
                        أدوات الذكاء الاصطناعي المدعومة
                    </h2>

                    <a
                        class="btn !tw-mt-8 !tw-bg-transparent !tw-text-black 
                                        !tw-border-[1px] !tw-border-black 
                                        dark:!tw-border-white dark:!tw-text-white">
                        اختر الأداة
                    </a>

                </div>

            </div>

            <div
                class="tw-flex tw-flex-col tw-gap-6 tw-h-full tw-max-w-1/2 max-lg:tw-max-w-full tw-px-[10%]
                    max-lg:tw-px-4 max-lg:tw-gap-3 max-lg:tw-w-full lg:tw-top-[20%]
                    tw-place-items-center
                    ">
                <div class="reveal-up tw-w-[450px] max-md:tw-w-full">
                    <a href="#"
                        class="tw-flex tw-w-full tw-h-full tw-gap-8 tw-rounded-xl 
                            hover:tw-shadow-lg dark:tw-shadow-[#171717] tw-duration-300 tw-transition-all
                            tw-p-8 tw-group/card">
                        <div class="tw-text-4xl max-md:tw-text-2xl">
                            <i class="bi bi-bar-chart-line-fill"></i>
                        </div>

                        <div class="tw-flex tw-flex-col tw-gap-4">
                            <h3 class="tw-text-2xl max-md:tw-text-xl">
                                منشئ التكتيكات
                            </h3>
                            <p class="tw-text-gray-800 dark:tw-text-gray-100 max-md:tw-text-sm">
                                يقوم بتحليل بيانات المباريات السابقة واقتراح خطط لعب محسّنة بناءً على أساليب اللعب
                                الفردية والجماعية.
                            </p>

                        </div>
                    </a>
                </div>

                <div class="reveal-up tw-w-[450px] max-md:tw-w-full">
                    <a href="#"
                        class="tw-flex tw-w-full tw-h-full tw-gap-8 tw-rounded-xl
                            hover:tw-shadow-lg dark:tw-shadow-[#171717] tw-duration-300 tw-transition-all tw-p-8 tw-group/card">
                        <div class="tw-text-4xl max-md:tw-text-2xl">
                            <i class="bi bi-fast-forward-fill"></i>
                        </div>

                        <div class="tw-flex tw-flex-col tw-gap-4">
                            <h3 class="tw-text-2xl max-md:tw-text-xl">
                                متتبع الأداء
                            </h3>
                            <p class="tw-text-gray-800 dark:tw-text-gray-100 max-md:tw-text-sm">
                                يراقب الحالة البدنية والفنية للاعبين باستخدام البيانات الحيوية والفيديوهات، لتقديم
                                توصيات تحسّن أدائهم مع تقليل مخاطر الإصابات.
                            </p>

                        </div>
                    </a>
                </div>

                <div class="reveal-up tw-w-[450px] max-md:tw-w-full">
                    <a href="#"
                        class="tw-flex tw-w-full tw-h-full tw-gap-8 tw-rounded-xl hover:tw-shadow-lg tw-duration-300 
                        tw-transition-all dark:tw-shadow-[#171717] tw-p-8 tw-group/card">
                        <div class="tw-text-4xl max-md:tw-text-2xl">
                            <i class="bi bi-people-fill"></i>
                        </div>

                        <div class="tw-flex tw-flex-col tw-gap-4">
                            <h3 class="tw-text-2xl max-md:tw-text-xl">
                                محلل المنافسين
                            </h3>
                            <p class="tw-text-gray-800 dark:tw-text-gray-100 max-md:tw-text-sm">
                                يدرس أسلوب لعب الفرق المنافسة، ويحدد نقاط القوة والضعف، مما يساعد المدربين على وضع خطط
                                فعالة قبل المباريات.
                            </p>

                        </div>
                    </a>
                </div>

                <div class="reveal-up tw-w-[450px] max-md:tw-w-full">
                    <a href="#"
                        class="tw-flex tw-w-full dark:tw-shadow-[#171717] tw-h-full tw-gap-8 tw-rounded-xl  hover:tw-shadow-lg tw-duration-300 
                    tw-transition-all tw-p-8 tw-group/card">
                        <div class="tw-text-4xl max-md:tw-text-2xl">
                            <i class="bi bi-database-fill"></i>
                        </div>

                        <div class="tw-flex tw-flex-col tw-gap-4">
                            <h3 class="tw-text-2xl max-md:tw-text-xl">
                                نظام الكشافة الذكي
                            </h3>
                            <p class="tw-text-gray-800 dark:tw-text-gray-100 max-md:tw-text-sm">
                                يعتمد على قاعدة بيانات ضخمة لترشيح أفضل اللاعبين للتعاقد معهم بناءً على أدائهم في
                                البطولات المختلفة.
                            </p>

                        </div>
                    </a>
                </div>

                <div class="reveal-up tw-w-[450px] max-md:tw-w-full">
                    <a href="#"
                        class="tw-flex tw-w-full tw-h-full tw-gap-8 tw-rounded-xl dark:tw-shadow-[#171717] hover:tw-shadow-lg tw-duration-300 
                        tw-transition-all tw-p-8 tw-group/card">
                        <div class="tw-text-4xl max-md:tw-text-2xl">
                            <i class="bi bi-eye-fill"></i>
                        </div>

                        <div class="tw-flex tw-flex-col tw-gap-4">
                            <h3 class="tw-text-2xl max-md:tw-text-xl">
                                محرك التنبؤ
                            </h3>
                            <p class="tw-text-gray-800 dark:tw-text-gray-100 max-md:tw-text-sm">
                                يتوقع نتائج المباريات بناءً على تحليل الإحصائيات التاريخية والبيانات الحية، مما يساعد
                                الفرق على الاستعداد بشكل أفضل.
                            </p>

                        </div>
                    </a>
                </div>

                <div class="reveal-up tw-w-[450px] max-md:tw-w-full">
                    <a href="#"
                        class="tw-flex tw-w-full tw-h-full tw-gap-8 tw-rounded-xl 
                            hover:tw-shadow-lg dark:tw-shadow-[#171717] tw-duration-300 tw-transition-all tw-p-8 tw-group/card">
                        <div class="tw-text-4xl max-md:tw-text-2xl">
                            <i class="bi bi-chat-left-dots-fill"></i>
                        </div>

                        <div class="tw-flex tw-flex-col tw-gap-4">
                            <h3 class="tw-text-2xl max-md:tw-text-xl">
                                الذكاء التفسيري
                            </h3>
                            <p class="tw-text-gray-800 dark:tw-text-gray-100 max-md:tw-text-sm">
                                يوفر تحليلاً عميقاً لبيانات الفريق والمنافسين باستخدام تقنيات التفسير الذكي، مما يساعد
                                على فهم أفضل لأداء اللاعبين واستراتيجيات اللعب لتوجيه القرارات الهامة.
                            </p>

                        </div>
                    </a>
                </div>

            </div>


        </div>
    </section>

    <section
        class="tw-mt-10 tw-flex tw-min-h-[100vh] tw-w-full tw-flex-col tw-place-content-center tw-place-items-center tw-p-[2%]"
        dir="rtl">
        <h3 class="reveal-up tw-text-4xl tw-font-medium tw-text-center max-md:tw-text-2xl">
            انضم إلى المحترفين
        </h3>
        <!-- Testimonials -->
        <div class="tw-mt-20 tw-gap-10 tw-space-y-8  max-md:tw-columns-1 lg:tw-columns-2 xl:tw-columns-3">
            <div
                class="reveal-up tw-flex tw-h-fit tw-w-[350px] tw-break-inside-avoid 
                tw-flex-col tw-gap-4 tw-rounded-lg tw-border-[1px] 
                tw-bg-[#f6f7fb] dark:tw-bg-[#080808] dark:tw-border-[#1f2123] tw-p-4 max-lg:tw-w-[320px]">

                <div class="tw-flex tw-place-items-center tw-gap-3">
                    <div class="tw-h-[50px] tw-w-[50px] tw-overflow-hidden tw-rounded-full">
                        <img src="{{asset('public/web/assets/images/people/man-1.png')}}" class="tw-h-full tw-w-full tw-object-cover"
                            alt="man" />
                    </div>
                    <div class="tw-flex tw-flex-col tw-gap-1">
                        <div class="tw-font-semibold">عبد الله المطيري</div>
                        <div class="tw-text-gray-700 dark:tw-text-gray-300">مدرب محترف</div>
                    </div>
                </div>

                <p class="tw-mt-4 tw-text-gray-800 dark:tw-text-gray-200">
                    AthlosX غير طريقة تحضيرنا للمباريات تمامًا، أصبح لدينا رؤية أوضح عن استراتيجيات الفرق المنافسة!
                </p>
            </div>

            <div
                class="reveal-up tw-flex tw-h-fit tw-w-[350px] tw-break-inside-avoid 
                tw-flex-col tw-gap-4 tw-rounded-lg tw-border-[1px] 
                tw-bg-[#f6f7fb] dark:tw-bg-[#080808] dark:tw-border-[#1f2123] tw-p-4 max-lg:tw-w-[320px]">

                <div class="tw-flex tw-place-items-center tw-gap-3">
                    <div class="tw-h-[50px] tw-w-[50px] tw-overflow-hidden tw-rounded-full">
                        <img src="{{asset('public/web/assets/images/people/man.png')}}" class="tw-h-full tw-w-full tw-object-cover"
                            alt="women" />
                    </div>
                    <div class="tw-flex tw-flex-col tw-gap-1">
                        <div class="tw-font-semibold">سامي القحطاني</div>
                        <div class="tw-text-gray-700 dark:tw-text-gray-300">محلل أداء رياضي</div>
                    </div>
                </div>

                <p class="tw-mt-4 tw-text-gray-800 dark:tw-text-gray-200">
                    الدقة في تحليل البيانات وتقديم التوصيات الفورية جعلتنا أكثر كفاءة في اتخاذ القرارات التكتيكية.
                </p>
            </div>

            <div
                class="reveal-up tw-flex tw-h-fit tw-w-[350px] tw-break-inside-avoid 
                tw-flex-col tw-gap-4 tw-rounded-lg tw-border-[1px] 
                tw-bg-[#f6f7fb] dark:tw-bg-[#080808] dark:tw-border-[#1f2123] tw-p-4 max-lg:tw-w-[320px]">

                <div class="tw-flex tw-place-items-center tw-gap-3">
                    <div class="tw-h-[50px] tw-w-[50px] tw-overflow-hidden tw-rounded-full">
                        <img src="{{asset('public/web/assets/images/people/man-2.png')}}" class="tw-h-full tw-w-full tw-object-cover"
                            alt="man" />
                    </div>
                    <div class="tw-flex tw-flex-col tw-gap-1">
                        <div class="tw-font-semibold">فيصل الدوسري</div>
                        <div class="tw-text-gray-700 dark:tw-text-gray-300">مدرب لياقة بدنية</div>
                    </div>
                </div>

                <p class="tw-mt-4 tw-text-gray-800 dark:tw-text-gray-200">
                    خاصية مراقبة الحالة الحيوية للاعبين ساعدتني على تقليل الإصابات وتحسين أداء اللاعبين في التدريبات
                    والمباريات.
                </p>
            </div>

            <div
                class="reveal-up tw-flex tw-h-fit tw-w-[350px] tw-break-inside-avoid 
                tw-flex-col tw-gap-4 tw-rounded-lg tw-border-[1px] 
                tw-bg-[#f6f7fb] dark:tw-bg-[#080808] dark:tw-border-[#1f2123] tw-p-4 max-lg:tw-w-[320px]">

                <div class="tw-flex tw-place-items-center tw-gap-3">
                    <div class="tw-h-[50px] tw-w-[50px] tw-overflow-hidden tw-rounded-full">
                        <img src="{{asset('public/web/assets/images/people/woman.png')}}" class="tw-h-full tw-w-full tw-object-cover"
                            alt="man" />
                    </div>
                    <div class="tw-flex tw-flex-col tw-gap-1">
                        <div class="tw-font-semibold">نوف العتيبي </div>
                        <div class="tw-text-gray-700 dark:tw-text-gray-300">إدارية نادي رياضي</div>
                    </div>
                </div>

                <p class="tw-mt-4 tw-text-gray-800 dark:tw-text-gray-200">
                    ميزة ترشيح اللاعبين وفرت علينا الكثير من الوقت والجهد في البحث عن المواهب المناسبة لفريقنا.
                </p>
            </div>

            <div
                class="reveal-up tw-flex tw-h-fit tw-w-[350px] tw-break-inside-avoid 
                tw-flex-col tw-gap-4 tw-rounded-lg tw-border-[1px] 
                tw-bg-[#f6f7fb] dark:tw-bg-[#080808] dark:tw-border-[#1f2123] tw-p-4 max-lg:tw-w-[320px]">

                <div class="tw-flex tw-place-items-center tw-gap-3">
                    <div class="tw-h-[50px] tw-w-[50px] tw-overflow-hidden tw-rounded-full">
                        <img src="{{asset('public/web/assets/images/people/man.png')}}" class="tw-h-full tw-w-full tw-object-cover"
                            alt="women" />
                    </div>
                    <div class="tw-flex tw-flex-col tw-gap-1">
                        <div class="tw-font-semibold">محمد الزهراني</div>
                        <div class="tw-text-gray-700 dark:tw-text-gray-300">لاعب محترف</div>
                    </div>
                </div>

                <p class="tw-mt-4 tw-text-gray-800 dark:tw-text-gray-200">
                    أصبح لدي فهم أعمق لنقاط قوتي وضعفي، مما ساعدني على تطوير مستواي وتحسين أدائي بشكل ملحوظ.
                </p>
            </div>

            <div
                class="reveal-up tw-flex tw-h-fit tw-w-[350px] tw-break-inside-avoid 
                tw-flex-col tw-gap-4 tw-rounded-lg tw-border-[1px] 
                tw-bg-[#f6f7fb] dark:tw-bg-[#080808] dark:tw-border-[#1f2123] tw-p-4 max-lg:tw-w-[320px]">

                <div class="tw-flex tw-place-items-center tw-gap-3">
                    <div class="tw-h-[50px] tw-w-[50px] tw-overflow-hidden tw-rounded-full">
                        <img src="{{asset('public/web/assets/images/people/man.png')}}" class="tw-h-full tw-w-full tw-object-cover"
                            alt="man" />
                    </div>
                    <div class="tw-flex tw-flex-col tw-gap-1">
                        <div class="tw-font-semibold">راكان الشمري</div>
                        <div class="tw-text-gray-700 dark:tw-text-gray-300">محلل بيانات رياضية</div>
                    </div>
                </div>

                <p class="tw-mt-4 tw-text-gray-800 dark:tw-text-gray-200">
                    أدوات الذكاء الاصطناعي في AthlosX رفعت مستوى تحليل المباريات لدينا، وأعطتنا نتائج دقيقة تساعدنا في
                    الفوز!
                </p>
            </div>

        </div>
    </section>

    <section
        class="tw-mt-5 tw-flex tw-min-h-[80vh] tw-w-full tw-flex-col tw-place-content-center tw-place-items-center tw-p-[2%] max-lg:tw-p-3"
        dir="rtl" id="blog">
        <h3 class="reveal-up tw-text-4xl tw-font-medium max-md:tw-text-2xl tw-mt-10">
            اقرأ الموارد التي كتبها الخبراء
        </h3>
        <!-- articles -->

        <div class="reveal-up tw-mt-10 tw-flex tw-flex-wrap tw-place-content-center tw-gap-10 max-lg:tw-flex-col">
            <a href="#"
                class="tw-flex tw-h-[500px] tw-w-[400px] tw-flex-col tw-gap-2 tw-overflow-clip tw-rounded-lg tw-p-4 max-lg:tw-w-[350px]">
                <div class="tw-h-[350px] tw-min-h-[350px] tw-w-full tw-overflow-hidden tw-rounded-2xl">
                    <img src="{{asset('public/web/assets/images/home/article1.png')}}" alt="article image"
                        class="tw-h-full tw-w-full tw-object-cover tw-transition-transform tw-duration-700 hover:tw-scale-[1.3]"
                        srcset="" />
                </div>

                <div class="tw-text-gray-600 dark:tw-text-gray-300 tw-justify-between tw-flex tw-gap-2">
                    <div class="tw-text-gray-800 dark:tw-text-gray-200">
                        تحليل رياضي
                    </div>
                    <div class="tw-text-gray-600 dark:tw-text-gray-400">
                        Mar, 14, 2025
                    </div>
                </div>
                <h3 class="tw-mt-1 tw-font-medium tw-text-xl max-md:tw-text-xl">
                    تحليل البيانات الرياضية
                </h3>

            </a>

            <a href="#"
                class="tw-flex tw-h-[500px] tw-w-[400px] tw-flex-col tw-gap-2 tw-overflow-clip tw-rounded-lg tw-p-4 max-lg:tw-w-[350px]">
                <div class="tw-h-[350px] tw-min-h-[350px] tw-w-full tw-overflow-hidden tw-rounded-2xl">
                    <img src="{{asset('public/web/assets/images/home/article2.png')}}" alt="article image"
                        class="tw-h-full tw-w-full tw-object-cover tw-transition-transform tw-duration-700 hover:tw-scale-[1.3]"
                        srcset="" />
                </div>

                <div class="tw-text-gray-600 dark:tw-text-gray-300 tw-justify-between tw-flex tw-gap-2">
                    <div class="tw-text-gray-800 dark:tw-text-gray-200">
                        تخطيط تكتيكي
                    </div>
                    <div class="tw-text-gray-600 dark:tw-text-gray-400">
                        Mar, 22, 2025
                    </div>
                </div>
                <h3 class="tw-mt-1 tw-font-medium tw-text-xl max-md:tw-text-xl">
                    أفضل استراتيجيات اللعب الحديثة
                </h3>

            </a>

            <a href="#"
                class="tw-flex tw-h-[500px] tw-w-[400px] tw-flex-col tw-gap-2 tw-overflow-clip tw-rounded-lg tw-p-4 max-lg:tw-w-[350px]">
                <div class="tw-h-[350px] tw-min-h-[350px] tw-w-full tw-overflow-hidden tw-rounded-2xl">
                    <img src="{{asset('public/web/assets/images/home/article3.png')}}" alt="article image"
                        class="tw-h-full tw-w-full tw-object-cover tw-transition-transform tw-duration-700 hover:tw-scale-[1.3]"
                        srcset="" />
                </div>

                <div class="tw-text-gray-600 dark:tw-text-gray-300 tw-justify-between tw-flex tw-gap-2">
                    <div class="tw-text-gray-800 dark:tw-text-gray-200">
                        التحليل الإحصائي والتنبؤات
                    </div>
                    <div class="tw-text-gray-600 dark:tw-text-gray-400">
                        Mar, 27, 2025
                    </div>
                </div>
                <h3 class="tw-mt-1 tw-font-medium tw-text-xl max-md:tw-text-xl">
                    كيف يمكن للتنبؤ الذكي تحسين أداء الفرق؟
                </h3>

            </a>

        </div>
    </section>

    <section
        class="tw-relative tw-flex tw-w-full tw-flex-col tw-place-content-center tw-place-items-center tw-gap-[10%] tw-p-[5%] tw-px-[10%]"
        dir="rtl">


        <h3 class="tw-text-4xl tw-font-medium max-md:tw-text-2xl tw-mt-10">
            الأسئلة الشائعة
        </h3>
        <div class="tw-mt-5 tw-flex tw-min-h-[300px] tw-w-full tw-max-w-[850px] tw-flex-col tw-gap-4">
            <div class="faq tw-w-full">
                <h4 class="faq-accordion tw-flex tw-w-full tw-select-none tw-text-xl max-md:tw-text-lg">
                    <span>كيف يعمل AthlosX؟</span>
                    <i
                        class="bi bi-plus tw-text-xl tw-origin-center tw-duration-300 tw-transition-transform 
                            tw-mr-auto tw-font-semibold"></i>
                </h4>
                <div class="content max-lg:tw-text-sm">
                    يستخدم الذكاء الاصطناعي لتحليل بيانات المباريات، اقتراح استراتيجيات لعب، وتقديم توصيات تدريبية
                    محسّنة.
                </div>
            </div>
            <hr>
            <div class="faq tw-w-full">
                <h4 class="faq-accordion tw-flex tw-w-full tw-select-none tw-text-xl max-md:tw-text-lg">
                    <span>هل يحتاج النظام إلى أجهزة استشعار خاصة؟</span>
                    <i
                        class="bi bi-plus tw-text-xl tw-origin-center tw-duration-300 tw-transition-transform 
                            tw-mr-auto tw-font-semibold"></i>
                </h4>
                <div class="content max-lg:tw-text-sm">
                    لا، يمكنه العمل مع البيانات المتوفرة مثل الفيديوهات والإحصائيات، لكنه يدعم أيضًا التكامل مع أجهزة
                    الاستشعار الحيوية.
                </div>
            </div>
            <hr>
            <div class="faq tw-w-full">
                <h4 class="faq-accordion tw-flex tw-w-full tw-select-none tw-text-xl max-md:tw-text-lg">
                    <span>هل يمكن استخدام النظام لجميع الفرق والمستويات؟</span>
                    <i
                        class="bi bi-plus tw-text-xl tw-origin-center tw-duration-300 tw-transition-transform 
                            tw-mr-auto tw-font-semibold"></i>
                </h4>
                <div class="content max-lg:tw-text-sm">
                    نعم، AthlosX مصمم ليخدم الأندية المحترفة والهواة، ويوفر تحليلات مخصصة لكل مستوى.
                </div>
            </div>
            <hr>
            <div class="faq tw-w-full">
                <h4 class="faq-accordion tw-flex tw-w-full tw-select-none tw-text-xl max-md:tw-text-lg">
                    <span>هل يتم تحديث البيانات وتحسين التوصيات باستمرار؟</span>
                    <i
                        class="bi bi-plus tw-text-xl tw-origin-center tw-duration-300 tw-transition-transform 
                            tw-mr-auto tw-font-semibold"></i>
                </h4>
                <div class="content max-lg:tw-text-sm">بالتأكيد! يعتمد AthlosX على قاعدة بيانات ديناميكية يتم تحديثها
                    بشكل دوري لضمان دقة التحليلات والتوصيات.</div>
            </div>
            <hr>

        </div>
        <div
            class="purple-bg-grad max-md:tw-hidden reveal-up tw-absolute tw-bottom-14 tw-right-[20%] 
                         tw-h-[150px] tw-w-[150px] tw-rounded-full">
        </div>

    </section>

    <section
        class="tw-flex tw-w-full tw-flex-col tw-place-content-center tw-place-items-center tw-gap-[10%] tw-p-[5%] tw-px-[10%] max-md:tw-px-2"
        dir="rtl">
        <div
            class="tw-flex tw-w-full tw-max-w-[80%] tw-place-content-center tw-place-items-center tw-justify-between tw-gap-3 
                tw-rounded-lg tw-bg-[#F6F7FB] dark:tw-bg-[#171717] tw-p-6 max-md:tw-max-w-full max-md:tw-flex-col">
            <div class="tw-flex tw-flex-col max-lg:tw-text-center tw-gap-1">
                <h2 class="tw-text-2xl tw-text-gray-800 dark:tw-text-gray-200 max-md:tw-text-xl">
                    انضم إلى نشرتنا البريدية
                </h2>
                <div class="tw-text-gray-700 dark:tw-text-gray-300">احصل على آخر الأخبار والتحديثات.</div>
            </div>

            <div class="tw-flex tw-h-[60px] tw-place-items-center tw-gap-2 tw-overflow-hidden tw-p-2">
                <input type="email" class="input tw-h-full tw-w-full !tw-border-gray-600 tw-p-2 tw-outline-none"
                    placeholder="البريد الإلكتروني" />
                <a class="btn !tw-rounded-full !tw-border-[1px] !tw-text-black !tw-border-solid !tw-border-black  dark:!tw-text-white
                    dark:!tw-border-gray-300 !tw-bg-transparent tw-transition-colors tw-duration-[0.3s]"
                    href="">
                    تسجيل
                </a>
            </div>
        </div>
    </section>
@endsection
