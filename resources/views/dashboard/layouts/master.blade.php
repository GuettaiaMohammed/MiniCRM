<!doctype html>
<html lang="en" dir="ltr">

<head>
    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sash – Bootstrap 5  Admin & Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords"
        content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin/assets/images/brand/favicon.ico') }}" />

    <!-- TITLE -->
    <title>MiniCRM - Dashboard</title>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{ 'admin/assets/plugins/bootstrap/css/bootstrap.min.css' }}" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="{{ asset('admin/assets/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/assets/css/dark-style.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/assets/css/transparent-style.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/css/skin-modes.css') }}" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="{{ asset('admin/assets/css/icons.css') }}" rel="stylesheet" />

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all"
        href="{{ asset('admin/assets/colors/color1.css') }}" />
    @notifyCss

</head>

<body class="app sidebar-mini ltr light-mode">

    <x-notify::notify />
    @notifyJs

    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="{{ asset('admin/assets/images/loader.svg') }}" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOBAL-LOADER -->

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

            <!--APP-SIDEBAR-->
            @include('dashboard.partials._side')

            <!--app-content open-->
            <div class="main-content app-content mt-0">
                <div class="side-app">
                    @yield('content')
                </div>
            </div>
            <!--app-content close-->
        </div>

        <!-- FOOTER -->
        @include('dashboard.partials._footer')
        <!-- FOOTER END -->
    </div>

    <script src="https://kit.fontawesome.com/09ee636c06.js" crossorigin="anonymous"></script>
    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>


    <!-- JQUERY JS -->
    <script src="{{ asset('admin/assets/js/jquery.min.js') }}"></script>

    <!-- BOOTSTRAP JS -->
    <script src="{{ asset('admin/assets/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- SPARKLINE JS-->
    <script src="{{ asset('admin/assets/js/jquery.sparkline.min.js') }}"></script>

    <!-- Sticky js -->
    <script src="{{ asset('admin/assets/js/sticky.js') }}"></script>

    <!-- CHART-CIRCLE JS-->
    <script src="{{ asset('admin/assets/js/circle-progress.min.js') }}"></script>

    <!-- PIETY CHART JS-->
    <script src="{{ asset('admin/assets/plugins/peitychart/jquery.peity.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/peitychart/peitychart.init.js') }}"></script>

    <!-- SIDEBAR JS -->
    <script src="{{ asset('admin/assets/plugins/sidebar/sidebar.js') }}"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="{{ asset('admin/assets/plugins/p-scroll/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/p-scroll/pscroll.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/p-scroll/pscroll-1.js') }}"></script>

    <!-- INTERNAL CHARTJS CHART JS-->
    <script src="{{ asset('admin/assets/plugins/chart/Chart.bundle.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/chart/rounded-barchart.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/chart/utils.js') }}"></script>

    <!-- INTERNAL SELECT2 JS -->
    <script src="{{ asset('admin/assets/plugins/select2/select2.full.min.js') }}"></script>

    <!-- INTERNAL Data tables js-->
    <script src="{{ asset('admin/assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/datatable/js/dataTables.bootstrap5.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/datatable/dataTables.responsive.min.js') }}"></script>

    <!-- INTERNAL APEXCHART JS -->
    <script src="{{ asset('admin/assets/js/apexcharts.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/apexchart/irregular-data-series.js') }}"></script>

    <!-- INTERNAL Flot JS -->
    <script src="{{ asset('admin/assets/plugins/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/flot/jquery.flot.fillbetween.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/flot/chart.flot.sampledata.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/flot/dashboard.sampledata.js') }}"></script>

    <!-- INTERNAL Vector js -->
    <script src="{{ asset('admin/assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>

    <!-- SIDE-MENU JS-->
    <script src="{{ asset('admin/assets/plugins/sidemenu/sidemenu.js') }}"></script>

    <!-- TypeHead js -->
    <script src="{{ asset('admin/assets/plugins/bootstrap5-typehead/autocomplete.js') }}"></script>
    <script src="{{ asset('admin/assets/js/typehead.js') }}"></script>

    <!-- INTERNAL INDEX JS -->
    <script src="{{ asset('admin/assets/js/index1.js') }}"></script>

    <!-- Color Theme js -->
    <script src="{{ asset('admin/assets/js/themeColors.js') }}"></script>

    <!-- CUSTOM JS -->
    <script src="{{ asset('admin/assets/js/custom.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/formwizard/jquery.smartWizard.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/formwizard/fromwizard.js') }}"></script>
    <!-- DATEPICKER JS -->
    <script src="{{ asset('admin/assets/plugins/date-picker/date-picker.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/date-picker/jquery-ui.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/input-mask/jquery.maskedinput.js') }}"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top',
            showConfirmButton: false,
            showCloseButton: true,
            timer: 5000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        });

        window.addEventListener('alert', ({
            detail: {
                type,
                message
            }
        }) => {
            Toast.fire({
                icon: type,
                title: message
            })
        })
    </script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        window.addEventListener('swal:modal', event => {
            swal({
                title: event.detail.message,
                text: event.detail.text,
                icon: event.detail.type,
            });
        });
    </script>
    @livewireScripts()

    <script src="https://cdn.jsdelivr.net/gh/livewire/sortable@v0.x.x/dist/livewire-sortable.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js"></script>

</body>

</html>
