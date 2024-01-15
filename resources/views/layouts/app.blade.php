<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <meta charset="utf-8" />
        <title>Patints Information System</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Eddy" name="description" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Layout config Js -->
        <script src="{{asset('assets/js/layout.js')}}"></script>

        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />

        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />

        {{-- <link rel="stylesheet" href="{{asset('assets/css/neon-core.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/neon-theme.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/neon-forms.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}"> --}}

        <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- custom Css-->
        <link href="{{asset('assets/css/custom.min.css')}}" rel="stylesheet" type="text/css" />


    </head>

<body>
    <div class="auth-page-wrapper pt-5">

        <div class="auth-one-bg-position auth-one-bg" id="auth-particles">
            <div class="bg-overlay"></div>

            <div class="shape">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1440 120">
                    <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
                </svg>
            </div>
        </div>

        <div class="auth-page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mt-sm-5 mb-4 text-white-50">
                            <div>
                                <a href="{{ route('login')}}" class="d-inline-block auth-logo">
                                    <img src="{{asset('assets/images/logo.png')}}" alt="Logo" height="50">
                                </a>
                            </div>
                            <p class="mt-3 fs-15 fw-semibold">Patints Information System</p>
                        </div>
                    </div>
                </div>
                  @yield('content')

            </div>
            <!-- end container -->
        </div>


    </div>


    <script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('assets/libs/node-waves/waves.min.js')}}"></script>
    <script src="{{asset('assets/libs/feather-icons/feather.min.js')}}"></script>
    <script src="{{asset('assets/libs/pages/plugins/lord-icon-2.1.0.js')}}"></script>
    <script src="{{asset('assets/js/plugins.js')}}"></script>
    <script src="{{asset('assets/libs/particles.js/particles.js')}}"></script>
    <script src="{{asset('assets/js/pages/particles.app.js')}}"></script>
</body>
</html>
