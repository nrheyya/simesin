<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>Sistem Informasi Perawatan Dan Perbaikan Mesin</title>

    <!-- Fav Icon -->
    <link rel="icon" href="{{ url('/assets/images/favicon.ico') }}" type="image/x-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">

    <!-- Stylesheets -->
    <link href="{{ url('public')}}/assets/css/font-awesome-all.css" rel="stylesheet">
    <link href="{{ url('public')}}/style.css" rel="stylesheet">
    <link href="{{ url('public')}}/assets/css/flaticon.css" rel="stylesheet">
    <link href="{{ url('public')}}/assets/css/owl.css" rel="stylesheet">
    <link href="{{ url('public')}}/assets/css/bootstrap.css" rel="stylesheet">
    <link href="{{ url('public')}}/assets/css/jquery.fancybox.min.css" rel="stylesheet">
    <link href="{{ url('public')}}/assets/css/animate.css" rel="stylesheet">
    <link href="{{ url('public')}}/assets/css/nice-select.css" rel="stylesheet">
    <link href="{{ url('public')}}/assets/css/color.css" rel="stylesheet">
    <link href="{{ url('public')}}/assets/css/style.css" rel="stylesheet">
    <link href="{{ url('public')}}/assets/css/responsive.css" rel="stylesheet">

</head>


<!-- page wrapper -->

<body>

    <div class="boxed_wrapper">

        <!-- main header -->
        @include('section.front.header')
        <!-- main-header end -->

        @yield('content')

        <!-- main-footer -->
        @include('section.front.footer')
        <!-- main-footer end -->


        <!--Scroll to top-->
        <button class="scroll-top scroll-to-target" data-target="html">
            <span class="flaticon-up-arrow"></span>
        </button>
    </div>


    <!-- jequery plugins -->
    <script src="{{ url('public/assets/js/jquery.js') }}"></script>
    <script src="{{ url('public/assets/js/popper.min.js') }}"></script>
    <script src="{{ url('public/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('public/assets/js/owl.js') }}"></script>
    <script src="{{ url('public/assets/js/wow.js') }}"></script>
    <script src="{{ url('public/assets/js/validation.js') }}"></script>
    <script src="{{ url('public/assets/js/jquery.fancybox.js') }}"></script>
    <script src="{{ url('public/assets/js/appear.js') }}"></script>
    <script src="{{ url('public/assets/js/jquery.countTo.js') }}"></script>
    <script src="{{ url('public/assets/js/scrollbar.js') }}"></script>
    <script src="{{ url('public/assets/js/jquery.nice-select.min.js') }}"></script>

    <!-- main-js -->
    <script src="{{url('public')}}/assets/js/script.js"></script>

</body><!-- End of .page_wrapper -->

</html>
