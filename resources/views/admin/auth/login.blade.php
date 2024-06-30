<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="favicon.ico">
        <title>{{ __('keywords.dashborad') }} - {{ __('keywords.login') }}</title>
        <!-- Simple bar CSS -->
        <link rel="stylesheet" href="{{ asset('admin-assets') }}/css/simplebar.css">
        <!-- Fonts CSS -->
        <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <!-- Icons CSS -->
        <link rel="stylesheet" href="{{ asset('admin-assets') }}/css/feather.css">
        <!-- Date Range Picker CSS -->
        <link rel="stylesheet" href="{{ asset('admin-assets') }}/css/daterangepicker.css">
        <!-- App CSS -->
        <link rel="stylesheet" href="{{ asset('admin-assets') }}/css/app-light.css" id="lightTheme">
        <link rel="stylesheet" href="{{ asset('admin-assets') }}/css/app-dark.css" id="darkTheme" disabled>
    </head>

    <body class="light ">
        <div class="wrapper vh-100">
        <div class="row align-items-center h-100">
            <form class="col-lg-3 col-md-4 col-10 mx-auto text-center" method="POST" action="{{ route('admin.login') }}">
                @csrf
                <a class="navbar-brand mx-auto mt-2 flex-fill text-center">
                    <svg version="1.1" id="logo" class="navbar-brand-img brand-md" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
                    <g>
                        <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                        <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                        <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
                    </g>
                    </svg>
                </a>
                <h1 class="h6 mb-3">{{ __('keywords.login') }}</h1>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <div class="form-group">
                    <label  class="sr-only"for="email" :value="__('Email')">Email address</label>
                    <input type="email" id="email" class="form-control form-control-lg" placeholder="Email address" autofocus name="email" value="{{ old('email') }}">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />

                </div>
                <div class="form-group">
                    <label class="sr-only" for="password" :value="__('Password')">Password</label>
                    <input id="password" class="form-control form-control-lg" placeholder="Password" type="password"
                    name="password"
                    autocomplete="current-password">
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <div class="checkbox mb-3">
                    <label>
                    <input type="checkbox" value="remember-me" name="remember">{{ __('keywords.remember') }}</label>
                </div>

                <button class="btn btn-lg btn-primary btn-block" type="submit">{{ __('keywords.login') }}</button>
                {{-- <p class="mt-5 mb-3 text-muted">© 2024</p> --}}
                @include('admin.partials.language')
            </form>
        </div>
        </div>
        <script src="{{ asset('admin-assets') }}/js/jquery.min.js"></script>
        <script src="{{ asset('admin-assets') }}/js/popper.min.js"></script>
        <script src="{{ asset('admin-assets') }}/js/moment.min.js"></script>
        <script src="{{ asset('admin-assets') }}/js/bootstrap.min.js"></script>
        <script src="{{ asset('admin-assets') }}/js/simplebar.min.js"></script>
        <script src='{{ asset('admin-assets') }}/js/daterangepicker.js'></script>
        <script src='{{ asset('admin-assets') }}/js/jquery.stickOnScroll.js'></script>
        <script src="{{ asset('admin-assets') }}/js/tinycolor-min.js"></script>
        <script src="{{ asset('admin-assets') }}/js/config.js"></script>
        <script src="{{ asset('admin-assets') }}/js/apps.js"></script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];

        function gtag()
        {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-56159088-1');
        </script>
    </body>
</html>
</body>
</html>