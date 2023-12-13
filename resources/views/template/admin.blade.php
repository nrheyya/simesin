<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Jurusan Teknik Mesin</title>
    <!-- loader-->
    <link href="{{ url('public/assetss/css/pace.min.css') }}" rel="stylesheet" />
    <script src="{{ url('public/assetss/js/pace.min.js') }}"></script>
    <!--favicon-->
    <link rel="icon" href="{{ url('public/assetss/images/mesin.png') }}" type="image/x-icon">
    <!-- Vector CSS -->
    <link href="{{ url('public/assetss/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />
    <!-- simplebar CSS-->
    <link href="{{ url('public/assetss/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <!-- Bootstrap core CSS-->
    <link href="{{ url('public/assetss/css/bootstrap.min.css') }}" rel="stylesheet" />
    <!-- animate CSS-->
    <link href="{{ url('public/assetss/css/animate.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons CSS-->
    <link href="{{ url('public/assetss/css/icons.css') }}" rel="stylesheet" type="text/css" />
    <!-- Sidebar CSS-->
    <link href="{{ url('public/assetss/css/sidebar-menu.css') }}" rel="stylesheet" />
    <!-- Custom Style-->
    <link href="{{ url('public/assetss/css/app-style.css') }}" rel="stylesheet" />
    <link href="{{ url('public/assetss/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
    @stack('style')
</head>

<body class="bg-theme bg-theme1">

    <!-- Start wrapper-->
    <div id="wrapper">

        <!--Start sidebar-wrapper-->
        @include('section.admin.sidebar')
        <!--End sidebar-wrapper-->

        <!--Start topbar header-->
        @include('section.admin.header')
        <!--End topbar header-->

        <div class="clearfix"></div>

        <div class="content-wrapper">
            <div class="container-fluid">
                <!--Start Dashboard Content-->
                @yield('content')
                <!--End Dashboard Content-->
                <!--start overlay-->
                <div class="overlay toggle-menu"></div>
                <!--end overlay-->
            </div>
            <!-- End container-fluid-->

        </div><!--End content-wrapper-->
        <!--Start Back To Top Button-->
        <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
        <!--End Back To Top Button-->

        <!--Start footer-->
        @include('section.admin.footer')
        <!--End footer-->

        <!--start color switcher-->
        @include('utils.theme')
        <!--end color switcher-->

    </div><!--End wrapper-->

    <!-- Bootstrap core JavaScript-->
    <script src="{{ url('public/assetss/js/jquery.min.js') }}"></script>
    <script src="{{ url('public/assetss/js/popper.min.js') }}"></script>
    <script src="{{ url('public/assetss/js/bootstrap.min.js') }}"></script>
    {{-- <script src="{{ url('public/assetss/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script> --}}
    <!-- simplebar js -->
    <script src="{{ url('public/assetss/plugins/simplebar/js/simplebar.js') }}"></script>
    <!-- sidebar-menu js -->
    <script src="{{ url('public/assetss/js/sidebar-menu.js') }}"></script>
    <!-- loader scripts -->
    <script src="{{ url('public/assetss/js/jquery.loading-indicator.js') }}"></script>
    <!-- Custom scripts -->
    <script src="{{ url('public/assetss/js/app-script.js') }}"></script>
    <!-- Chart js -->

    <script src="{{ url('public/assetss/plugins/Chart.js/Chart.min.js') }}"></script>

    <!-- Index js -->
    <script src="{{ url('public/assetss/js/index.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    @stack('script')
</body>

</html>
