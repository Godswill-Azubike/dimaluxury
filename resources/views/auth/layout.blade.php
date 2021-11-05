
<!DOCTYPE html>
<html lang="en">

<!-- auth-login.html  Tue, 07 Jan 2020 03:39:47 GMT -->
<head>
<meta charset="UTF-8">
<meta name="theme-color" content="#ff7b79;" />
<meta name="msapplication-TileColor" content="#ff7b79;"/>
<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
<title>@yield('title')</title>


<!-- General CSS Files -->
<link rel="stylesheet" href="{{ asset('auth/assets/modules/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('auth/assets/modules/fontawesome/css/all.min.css') }}">

<!-- CSS Libraries -->
<link rel="stylesheet" href="{{ asset('auth/assets/modules/bootstrap-social/bootstrap-social.css') }}">

<!-- Template CSS -->
<link rel="stylesheet" href="{{ asset('auth/assets/css/style.min.css') }}">
<link rel="stylesheet" href="{{ asset('auth/assets/css/components.min.css') }}">

<!-- website Favicons -->
<link href="{{ url('assets/img/favicon.png') }}" rel="icon">
<link href="{{ url('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

</head>

<body class="layout-4">

    <!-- Page Loader -->
<div class="page-loader-wrapper">
    <span class="loader"><span class="loader-inner"></span></span>
</div>

<div id="app">
    <section class="section">
        <div class="container mt-5">
            <div class="row justify-content-center">

                    @yield('componet')

            </div>
        </div>
    </section>
</div>

<!-- General JS Scripts -->
<script src="{{ asset('auth/assets/bundles/lib.vendor.bundle.js') }}"></script>
<script src="{{ ('auth/js/CodiePie.js') }}"></script>

<!-- JS Libraies -->

<!-- Page Specific JS File -->

<!-- Template JS File -->
<script src="{{ ('auth/js/scripts.js') }}"></script>
<script src="{{ ('auth/js/custom.js') }}"></script>
</body>

<!-- auth-login.html  Tue, 07 Jan 2020 03:39:47 GMT -->
</html>
