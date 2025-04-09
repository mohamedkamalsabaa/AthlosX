<!doctype html>
<html lang="ar" class="tw-dark">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')" />
    <link rel="shortcut icon" href="{{ asset('public/web/assets/logo/logo.png') }}" type="image/x-icon" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cairo:wght@650&family=Noto+Sans+Arabic:wght@100..900&display=swap"
        rel="stylesheet">

    <!-- <link rel="stylesheet" href="css/tailwind-runtime.css" /> -->
    <link rel="stylesheet" href="{{ asset('public/web/css/tailwind-build.css') }}">
    <link rel="stylesheet" href="{{ asset('public/web/css/index2.css') }}" />

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css"
        integrity="sha512-dPXYcDub/aeb08c63jRq/k6GaKccl256JQy/AnOq7CAnEZ9FzSL9wSbcZkMp4R26vBsMLFYH4kQ67/bbV8XaCQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body class="tw-flex tw-min-h-[100vh] tw-flex-col tw-bg-[#fcfcfc] tw-text-black dark:tw-bg-black  dark:tw-text-white">

    <header
        class="lg:tw-px-4 tw-max-w-[100vw] tw-max-w-lg:tw-mr-auto max-lg:tw-top-0 tw-fixed tw-top-4 lg:tw-left-1/2 lg:tw--translate-x-1/2 tw-z-20 tw-flex tw-h-[60px] tw-w-full 
                    tw-text-gray-700 tw-bg-white dark:tw-text-gray-200 dark:tw-bg-[#17181b] tw-px-[3%] tw-rounded-md lg:tw-max-w-5xl tw-shadow-md dark:tw-shadow-gray-700
                    lg:tw-justify-around lg:!tw-backdrop-blur-lg lg:tw-opacity-[0.99]"
        dir="rtl">
        <a class="tw-flex tw-p-[4px] tw-gap-2 tw-place-items-center" href="{{route('home')}}">


            <div class="tw-h-[30px] tw-max-w-[100px]" id="logo">
                <img src="{{ asset('public/web/assets/logo/logo.png') }}" alt="logo"
                    class="tw-object-contain tw-h-full tw-w-full dark:tw-invert" />
            </div>
        </a>
        <div class="collapsible-header animated-collapse max-lg:tw-shadow-md" id="collapsed-header-items">
            <nav
                class="tw-relative tw-flex tw-h-full max-lg:tw-h-max tw-w-max tw-gap-5 tw-text-base max-lg:tw-mt-[30px] max-lg:tw-flex-col 
                                max-lg:tw-gap-5 lg:tw-mx-auto tw-place-items-center">
                <a class="header-links" href="{{ route('home') }}"> الرئيسية </a>
                <a class="header-links" href="#services"> الخدمات </a>
                <a class="header-links" href="#tools"> الأدوات </a>
                <a class="header-links" href="#blog"> المدونة </a>

                <div class="tw-relative tw-flex tw-flex-col tw-place-items-center" style="display: none;">
                    <div id="nav-dropdown-toggle-0"
                        class="max-lg:tw-max-w-fit tw-flex header-links tw-gap-1  tw-place-items-center">
                        <span class=""> Features </span>
                        <i class="tw-text-sm bi bi-chevron-down"></i>
                    </div>
                    <nav id="nav-dropdown-list-0" data-open="false"
                        class="tw-scale-0 tw-opacity-0  lg:tw-fixed tw-flex lg:tw-top-[80px] lg:tw-left-1/2 lg:tw--translate-x-1/2 
                                    tw-w-[90%] tw-rounded-lg max-lg:tw-h-0 max-lg:tw-w-0
                                    lg:tw-h-[450px] tw-overflow-hidden
                                     tw-bg-white dark:tw-bg-[#17181B] tw-duration-300 
                                     tw-transition-opacity tw-transition-height tw-shadow-lg tw-p-4">
                        <div
                            class="tw-grid max-xl:tw-flex max-xl:tw-flex-col tw-justify-around tw-grid-cols-2 tw-w-full">
                            <a class="header-links tw-flex tw-text-left tw-gap-4 !tw-p-4" href="#">
                                <div class="tw-font-semibold tw-text-3xl">
                                    <i class="bi bi-list-columns-reverse"></i>
                                </div>
                                <div class="tw-flex tw-flex-col tw-gap-2">
                                    <div class="tw-text-lg tw-text-black dark:tw-text-white tw-font-medium">Prompt
                                        library </div>
                                    <p>Comes packed with pre-made prompt templates</p>
                                </div>
                            </a>

                            <a class="header-links tw-flex tw-text-left tw-gap-4 !tw-p-4" href="#">
                                <div class="tw-font-semibold tw-text-3xl">
                                    <i class="bi bi-grid-1x2-fill"></i>
                                </div>
                                <div class="tw-flex tw-flex-col tw-gap-2">
                                    <div class="tw-text-lg tw-text-black dark:tw-text-white tw-font-medium">Unified
                                        Interface </div>
                                    <p class="">Test multiple AI models in one interface</p>
                                </div>
                            </a>

                            <a class="header-links tw-flex tw-text-left tw-gap-4 !tw-p-4" href="#">
                                <div class="tw-font-semibold tw-text-3xl">
                                    <i class="bi bi-globe"></i>
                                </div>
                                <div class="tw-flex tw-flex-col tw-gap-2">
                                    <div class="tw-text-lg tw-text-black dark:tw-text-white tw-font-medium">Realtime web
                                        search </div>
                                    <p class="">Search the internet in realtime</p>
                                </div>
                            </a>

                            <a class="header-links tw-flex tw-text-left tw-gap-4 !tw-p-4" href="#">
                                <div class="tw-font-semibold tw-text-3xl">
                                    <i class="bi bi-image-fill"></i>
                                </div>
                                <div class="tw-flex tw-flex-col tw-gap-2">
                                    <div class="tw-text-lg tw-text-black dark:tw-text-white tw-font-medium">
                                        Image generation
                                    </div>
                                    <p class="">Generate images from prompts</p>
                                </div>
                            </a>

                            <a class="header-links tw-flex tw-text-left tw-gap-4 !tw-p-4" href="#">
                                <div class="tw-font-semibold tw-text-3xl">
                                    <i class="bi bi-calendar-range"></i>
                                </div>
                                <div class="tw-flex tw-flex-col tw-gap-2">
                                    <div class="tw-text-lg tw-text-black dark:tw-text-white tw-font-medium">
                                        History
                                    </div>
                                    <p class="">Continue from where you left off</p>
                                </div>
                            </a>

                            <a class="header-links tw-flex tw-text-left tw-gap-4 !tw-p-4" href="#">
                                <div class="tw-font-semibold tw-text-3xl">
                                    <i class="bi bi-translate"></i>
                                </div>
                                <div class="tw-flex tw-flex-col tw-gap-2">
                                    <div class="tw-text-lg tw-text-black dark:tw-text-white tw-font-medium">
                                        Multilingual
                                    </div>
                                    <p class="">Converse in multiple languages</p>
                                </div>
                            </a>
                        </div>
                    </nav>
                </div>

                <a class="header-links"> API </a>

            </nav>
            <div
                class="lg:tw-mx-4 tw-flex tw-place-items-center tw-gap-[20px] tw-text-base max-md:tw-w-full 
                            max-md:tw-flex-col max-md:tw-place-content-center">

                @if (!Auth::guard('web')->check() && !Auth::guard('admin')->check())
                    <a href="{{ route('login') }}"
                        class="header-links tw-bg-blue-500 tw-text-white tw-px-4 tw-py-2 tw-rounded-md">
                        دخول
                    </a>
                @elseif (Auth::guard('web')->check())
                    <a href="{{ route('user.home') }}"
                        class="header-links tw-bg-green-500 tw-text-white tw-px-4 tw-py-2 tw-rounded-md">
                        لوحة التحكم
                    </a>
                @elseif (Auth::guard('admin')->check())
                    <a href="{{ route('admin.home') }}"
                        class="header-links tw-bg-green-500 tw-text-white tw-px-4 tw-py-2 tw-rounded-md">
                        لوحة التحكم المشرف
                    </a>
                @endif

                <button type="button" onclick="toggleMode()"
                    class="header-links tw-text-gray-600 dark:tw-text-gray-300" title="العرض" id="theme-toggle">
                    <i class="bi bi-sun" id="toggle-mode-icon"></i>
                </button>

            </div>
        </div>
        <button class="bi bi-list tw-absolute tw-top-3 tw-z-50 tw-text-3xl tw-text-gray-500 lg:tw-hidden"
            onclick="toggleHeader()" aria-label="menu" id="collapse-btn"></button>
    </header>

    @yield('content')

    <footer
        class="tw-mt-auto tw-flex tw-flex-col tw-w-full tw-gap-4 tw-text-sm tw-pt-[5%] tw-pb-10 tw-px-[10%] 
                    tw-text-black dark:tw-text-white max-md:tw-flex-col"
        dir="rtl">
        <div class="tw-flex max-md:tw-flex-col max-md:tw-gap-6 tw-gap-3 tw-w-full tw-place-content-around">
            <div class="tw-flex tw-h-full tw-w-[250px] tw-flex-col tw-place-items-center tw-gap-6 max-md:tw-w-full">
                <a href="{{route('home')}}" class="tw-w-full tw-place-items-center tw-flex tw-flex-col tw-gap-6">
                    <img src="{{ asset('public/web/assets/logo/logo.png') }}" alt="logo" srcset=""
                        class="tw-max-w-[120px] dark:tw-invert" />
                    <div class="tw-max-w-[120px] tw-text-center tw-text-3xl tw-h-fit">
                        AthlosX
                    </div>
                </a>
                <div class="tw-flex tw-gap-4 tw-text-lg">
                    <a href="https://github.com" aria-label="Github">
                        <i class="bi bi-github"></i>
                    </a>
                    <a href="https://x.com" aria-label="x">
                        <i class="bi bi-twitter-x"></i>
                    </a>

                    <a href="https://www.linkedin.com" aria-label="Linkedin">
                        <i class="bi bi-linkedin"></i>
                    </a>
                </div>

            </div>

            <div class="tw-flex max-md:tw-flex-col tw-flex-wrap tw-gap-6 tw-h-full tw-w-full tw-justify-around">
                <div class="tw-flex tw-h-full tw-w-[200px] tw-flex-col tw-gap-4">
                    <h2 class="tw-text-xl">الأساسية</h2>
                    <div class="tw-flex tw-flex-col tw-gap-3">
                        <a href="#services" class="footer-link">الخدمات</a>
                        <a href="#tools" class="footer-link">الأدوات</a>
                        <a href="#blog" class="footer-link">المدونة</a>
                        <a href="#" class="footer-link">API</a>
                    </div>
                </div>


                <div class="tw-flex tw-h-full tw-w-[200px] tw-flex-col tw-gap-4">
                    <h2 class="tw-text-xl">التواصل</h2>
                    <div class="tw-flex tw-flex-col tw-gap-3">
                        <a href="#" class="footer-link">الدعم الفني</a>
                        <a href="#" class="footer-link">البريد الإلكتروني</a>
                        <a href="#" class="footer-link">التلغرام</a>
                    </div>
                </div>

                <div class="tw-flex tw-h-full tw-w-[200px] tw-flex-col tw-gap-4">
                    <h2 class="tw-text-xl">أخرى</h2>
                    <div class="tw-flex tw-flex-col tw-gap-3">
                        <a href="#" class="footer-link">شروط الخدمة</a>
                        <a href="#" class="footer-link">سياسة الخصوصية</a>
                    </div>
                </div>
            </div>
        </div>

        <hr class="tw-mt-8">
        <div
            class="tw-mt-2 tw-flex tw-gap-2 tw-flex-col tw-text-gray-700 dark:tw-text-gray-300 tw-place-items-center 
                    tw-text-[12px] tw-w-full tw-text-center tw-place-content-around">
            <span>AthlosX &#169; 2025</span>
            <span>جميع الحقوق محفوظة</span>
        </div>

    </footer>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.0/gsap.min.js"
    integrity="sha512-B1lby8cGcAUU3GR+Fd809/ZxgHbfwJMp0jLTVfHiArTuUt++VqSlJpaJvhNtRf3NERaxDNmmxkdx2o+aHd4bvw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.0/ScrollTrigger.min.js"
    integrity="sha512-AY2+JxnBETJ0wcXnLPCcZJIJx0eimyhz3OJ55k2Jx4RtYC+XdIi2VtJQ+tP3BaTst4otlGG1TtPJ9fKrAUnRdQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.10/typed.min.js"
    integrity="sha512-hIlMpy2enepx9maXZF1gn0hsvPLerXoLHdb095CmRY5HG3bZfN7XPBZ14g+TUDH1aGgfLyPHmY9/zuU53smuMw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="{{ asset('public/web/scripts/components2.js') }}"></script>
<script src="{{ asset('public/web/index2.js') }}"></script>

</html>
