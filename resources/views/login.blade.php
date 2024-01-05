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
    <link rel="icon" href="{{ url('public/assets/images/Politap.png') }}" type="image/x-icon">
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

        <div class="loader-wrapper">
            <div class="lds-ring">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <div class="card card-authentication1 mx-auto my-5">
            <div class="card">
                <div class="card-body">
                    <div class="border p-4 rounded">
                        <div class="mb-4 text-center">
                            <img src="{{ url('public') }}/assets/images/Politap.png" width="100" alt="" />
                        </div>
                        <div class="card-title text-uppercase text-center py-3">Login</div>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    {{ $error }}
                                @endforeach
                            </div>
                        @endif
                        <form action="{{ url('login') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail" class="sr-only">Email</label>
                                <div class="position-relative has-icon-right">
                                    <input type="email" name="email" id="floatingInput"
                                        class="form-control input-shadow" placeholder="Enter Email">
                                    <div class="form-control-position">
                                        <i class="icon-envelope-open"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="floatingPassword" class="sr-only">Password</label>
                                <div class="position-relative has-icon-right">
                                    <input type="password" name="password" id="floatingPassword"
                                        class="form-control input-shadow" placeholder="Enter Password">
                                    <div class="form-control-position">
                                        <i class="icon-lock"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-6">
                                    <div class="icheck-material-white">
                                        <input type="checkbox" id="user-checkbox" checked="" />
                                        <label for="user-checkbox">Remember me</label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-light btn-block">Login</button>
                        </form>
                        {{-- <div class="card-footer text-center py-3">
                            <p class="text-warning mb-0">Do not have an account? <a href="{{ url('register') }}">
                                    Registrasion
                                    Here</a></p>
                        </div> --}}
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
