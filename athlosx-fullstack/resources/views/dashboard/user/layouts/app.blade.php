<!doctype html>
<html lang="ar">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="{{ asset('public/images/assent/favicon.webp') }}" rel="icon">
    <link href="{{ asset('public/images/assent/apple-touch-icon.webp') }}" rel="apple-touch-icon">
    <title>@yield('user_title')</title>
    <link rel="shortcut icon" href="{{ asset('public/web/assets/logo/logo1.png') }}" type="image/x-icon" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Mada:wght@200..900&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Mada:wght@200..900&display=swap"
        rel="stylesheet">
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="{{ asset('public/user/css/simplebar.css') }}">
    <!-- Fonts CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cairo:wght@650&family=Noto+Sans+Arabic:wght@100..900&display=swap"
        rel="stylesheet">
    <!-- Icons CSS -->
    
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css"
        integrity="sha512-dPXYcDub/aeb08c63jRq/k6GaKccl256JQy/AnOq7CAnEZ9FzSL9wSbcZkMp4R26vBsMLFYH4kQ67/bbV8XaCQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('public/user/css/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('public/user/css/select2.css') }}">
    <link rel="stylesheet" href="{{ asset('public/user/css/dropzone.css') }}">
    <link rel="stylesheet" href="{{ asset('public/user/css/uppy.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/user/css/jquery.steps.css') }}">
    <link rel="stylesheet" href="{{ asset('public/user/css/jquery.timepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('public/user/css/quill.snow.css') }}">
    
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="{{ asset('public/user/css/daterangepicker.css') }}">
    <!-- App CSS -->
    <link rel="stylesheet" href="{{ asset('public/user/css/app-dark.css') }}" id="darkTheme">
    <link rel="stylesheet" href="{{ asset('public/user/css/style.css') }}">
    @yield('user_styles')
</head>
<style>
   
    .btn-danger {
        color: #dc3545;
        background-color: transparent;
        border-color: #dc3545;
        font-weight: bold;
    }

    .btn-warning {
        color: #eea303;
        background-color: transparent;
        border-color: #eea303;
        font-weight: bold;
    }

    .btn-info {
        color: #17a2b8;
        background-color: transparent;
        border-color: #17a2b8;
        font-weight: bold;
    }
</style>

<body class="vertical  dark rtl">
    <div class="wrapper">
        @include('dashboard.user.layouts.header')
        @include('dashboard.user.layouts.sidebar')

        @yield('user_main')
    </div>

    {{-- Scripts --}}
    <script src="{{ asset('public/user/js/jquery.min.js') }}"></script>
    <script src="{{ asset('public/user/js/popper.min.js') }}"></script>
    <script src="{{ asset('public/user/js/moment.min.js') }}"></script>
    <script src="{{ asset('public/user/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/user/js/simplebar.min.js') }}"></script>
    <script src='{{ asset('public/user/js/daterangepicker.js') }}'></script>
    <script src='{{ asset('public/user/js/jquery.stickOnScroll.js') }}'></script>
    <script src="{{ asset('public/user/js/tinycolor-min.js') }}"></script>
    <script src="{{ asset('public/user/js/config.js') }}"></script>
    <script src="{{ asset('public/user/js/d3.min.js') }}"></script>
    <script src="{{ asset('public/user/js/topojson.min.js') }}"></script>
    <script src="{{ asset('public/user/js/datamaps.all.min.js') }}"></script>
    <script src="{{ asset('public/user/js/datamaps-zoomto.js') }}"></script>
    <script src="{{ asset('public/user/js/datamaps.custom.js') }}"></script>
    <script src="{{ asset('public/user/js/Chart.min.js') }}"></script>

    <script>
        /* defind global options */
        Chart.defaults.global.defaultFontFamily = base.defaultFontFamily;
        Chart.defaults.global.defaultFontColor = colors.mutedColor;
    </script>

    <script src="{{ asset('public/user/js/gauge.min.js') }}"></script>
    <script src="{{ asset('public/user/js/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('public/user/js/apexcharts.min.js') }}"></script>
    <script src="{{ asset('public/user/js/apexcharts.custom.js') }}"></script>
    <script src="{{ asset('public/user/js/apps.js') }}"></script>
    <script src='{{ asset('public/user/js/jquery.mask.min.js') }}'></script>
    <script src='{{ asset('public/user/js/select2.min.js') }}'></script>
    <script src='{{ asset('public/user/js/jquery.steps.min.js') }}'></script>
    <script src='{{ asset('public/user/js/jquery.validate.min.js') }}'></script>
    <script src='{{ asset('public/user/js/jquery.timepicker.js') }}'></script>
    <script src='{{ asset('public/user/js/dropzone.min.js') }}'></script>
    <script src='{{ asset('public/user/js/uppy.min.js') }}'></script>
    <script src='{{ asset('public/user/js/quill.min.js') }}'></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>

    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-56159088-1');
    </script>

    <script>
        $('.select2').select2({
            theme: 'bootstrap4',
        });
        $('.select2-multi').select2({
            multiple: true,
            theme: 'bootstrap4',
        });
        $('.drgpicker').daterangepicker({
            singleDatePicker: true,
            timePicker: false,
            showDropdowns: true,
            locale: {
                format: 'MM/DD/YYYY'
            }
        });
        $('.time-input').timepicker({
            'scrollDefault': 'now',
            'zindex': '9999' /* fix modal open */
        });
        /** date range picker */
        if ($('.datetimes').length) {
            $('.datetimes').daterangepicker({
                timePicker: true,
                startDate: moment().startOf('hour'),
                endDate: moment().startOf('hour').add(32, 'hour'),
                locale: {
                    format: 'M/DD hh:mm A'
                }
            });
        }
        var start = moment().subtract(29, 'days');
        var end = moment();

        function cb(start, end) {
            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
        $('#reportrange').daterangepicker({
            startDate: start,
            endDate: end,
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf(
                    'month')]
            }
        }, cb);
        cb(start, end);
        $('.input-placeholder').mask("00/00/0000", {
            placeholder: "__/__/____"
        });
        $('.input-zip').mask('00000-000', {
            placeholder: "____-___"
        });
        $('.input-money').mask("#.##0,00", {
            reverse: true
        });
        $('.input-phoneus').mask('(000) 000-0000');
        $('.input-mixed').mask('AAA 000-S0S');
        $('.input-ip').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
            translation: {
                'Z': {
                    pattern: /[0-9]/,
                    optional: true
                }
            },
            placeholder: "___.___.___.___"
        });
        // editor
        var editor = document.getElementById('editor');
        if (editor) {
            var toolbarOptions = [
                [{
                    'font': []
                }],
                [{
                    'header': [1, 2, 3, 4, 5, 6, false]
                }],
                ['bold', 'italic', 'underline', 'strike'],
                ['blockquote', 'code-block'],
                [{
                        'header': 1
                    },
                    {
                        'header': 2
                    }
                ],
                [{
                        'list': 'ordered'
                    },
                    {
                        'list': 'bullet'
                    }
                ],
                [{
                        'script': 'sub'
                    },
                    {
                        'script': 'super'
                    }
                ],
                [{
                        'indent': '-1'
                    },
                    {
                        'indent': '+1'
                    }
                ], // outdent/indent
                [{
                    'direction': 'rtl'
                }], // text direction
                [{
                        'color': []
                    },
                    {
                        'background': []
                    }
                ], // dropdown with defaults from theme
                [{
                    'align': []
                }],
                ['clean'] // remove formatting button
            ];
            var quill = new Quill(editor, {
                modules: {
                    toolbar: toolbarOptions
                },
                theme: 'snow'
            });
        }
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
                .
            }, false);
        })();
    </script>

    <script>
        var uptarg = document.getElementById('drag-drop-area');
        if (uptarg) {
            var uppy = Uppy.Core().use(Uppy.Dashboard, {
                inline: true,
                target: uptarg,
                proudlyDisplayPoweredByUppy: false,
                theme: 'dark',
                width: 770,
                height: 210,
                plugins: ['Webcam']
            }).use(Uppy.Tus, {
                endpoint: 'https://master.tus.io/files/'
            });
            uppy.on('complete', (result) => {
                console.log('Upload complete! We’ve uploaded these files:', result.successful)
            });
        }
    </script>

    @yield('user_scripts')
</body>

</html>
