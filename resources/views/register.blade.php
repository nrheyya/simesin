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
    <link href="{{ url('public/assets/css/pace.min.css') }}" rel="stylesheet" />
    <script src="{{ url('public/assets/js/pace.min.js') }}"></script>
    <!--favicon-->
    <link rel="icon" href="{{ url('public/assets/images/mesin.png') }}" type="image/x-icon">
    <!-- Bootstrap core CSS-->
    <link href="{{ url('public/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <!-- animate CSS-->
    <link href="{{ url('public/assets/css/animate.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons CSS-->
    <link href="{{ url('public/assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
    <!-- Custom Style-->
    <link href="{{ url('public/assets/css/app-style.css') }}" rel="stylesheet" />

</head>

<body class="bg-theme bg-theme1">

    <!-- start loader -->
    <div id="pageloader-overlay" class="visible incoming">
        <div class="loader-wrapper-outer">
            <div class="loader-wrapper-inner">
                <div class="loader"></div>
            </div>
        </div>
    </div>
    <!-- end loader -->

    <!-- Start wrapper-->
    <div id="wrapper">
        <div class="card card-authentication1 mx-auto my-5">
            <div class="card">
                <div class="card-body">
                    <div class="border p-4 rounded">
                        <div class="card-content p-2">
                            <div class="text-center">
                                <img src="{{ url('public/assets/images/mesin.png') }}" width="100" height="100"
                                    alt="logo icon">
                            </div>
                            <div class="card-title text-uppercase text-center py-3">Sign Up</div>
                            <form>
                                <div class="form-group">
                                    <div class="col-12">
                                        <label for="inputname" class="form-label">Nama</label>
                                        <div class="position-relative has-icon-right">
                                            <input type="text" class="form-control" id="inputname"
                                                placeholder="Enter Your Name" name="nama">
                                            <div class="form-control-position">
                                                <i class="icon-user"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="inputname" class="form-label">Email</label>
                                        <div class="position-relative has-icon-right">
                                            <input type="email" class="form-control" id="inputemail"
                                                placeholder="Enter Your email" name="email">
                                            <div class="form-control-position">
                                                <i class="icon-envelope-open"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="inputname" class="form-label">Password</label>
                                        <div class="position-relative has-icon-right">
                                            <input type="password" class="form-control" id="inputpassword"
                                                placeholder="Enter Your password" name="password">
                                            <div class="form-control-position">
                                                <i class="icon-lock"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="icheck-material-white">
                                        <input type="checkbox" id="user-checkbox" checked="" />
                                        <label for="user-checkbox">I Agree With Terms & Conditions</label>
                                    </div>
                                </div>
                            </form>

                            <div class="card-footer text-center py-3">
                                <p class="text-warning mb-0">Already have an account? <a href="{{ url('login') }}">
                                        Login Here</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Start Back To Top Button-->
        <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
        <!--End Back To Top Button-->

        <!--start color switcher-->
        @include('utils.theme')
        <!--end color switcher-->

    </div><!--wrapper-->

    <!-- Bootstrap core JavaScript-->
    <script src="{{ url('public/assets/js/jquery.min.js') }}"></script>
    <script src="{{ url('public/assets/js/popper.min.js') }}"></script>
    <script src="{{ url('public/assets/js/bootstrap.min.js') }}"></script>

    <!-- sidebar-menu js -->
    <script src="{{ url('public/assets/js/sidebar-menu.js') }}"></script>

    <!-- Custom scripts -->
    <script src="{{ url('public/assets/js/app-script.js') }}"></script>

</body>

</html>
