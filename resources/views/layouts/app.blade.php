{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html> --}}


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<!-- index.html  Tue, 07 Jan 2020 03:35:33 GMT -->
<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="theme-color" content="#142440" />
<meta name="msapplication-TileColor" content="#142440"/>

<title>{{ config('app.name') }} -- Dashboard -- @ {{ Auth::user()->name }}</title>

<!-- General CSS Files -->
<link rel="stylesheet" href="{{ asset('auth/assets/modules/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('auth/font-awesome/css/all.min.css') }}">

<!-- CSS Libraries -->
<link rel="stylesheet" href="{{ asset('auth/assets/modules/jqvmap/dist/jqvmap.min.css') }}">
<link rel="stylesheet" href="{{ asset('auth/assets/modules/summernote/summernote-bs4.css') }}">
<link rel="stylesheet" href="{{ asset('auth/assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('auth/assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css') }}">

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
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>

        <!-- Start app top navbar -->
        <nav class="navbar navbar-expand-lg main-navbar">


            <form class="form-inline mr-auto">
                <ul class="navbar-nav mr-3">
                    <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                    <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
                </ul>
                <div class="search-element">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
                    <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                    <div class="search-backdrop"></div>
                    <div class="search-result">
                    </div>
                </div>
            </form>

            <ul class="navbar-nav navbar-right">

                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                        <div class="d-lg-inline-block">{{ Auth::user()->name }}</div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-divider"></div>
                        <a href="{{ route('logout') }}" class="dropdown-item has-icon text-danger" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i> {{ __('Logout')}}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </nav>

        <!-- Start main left sidebar menu -->
        <div class="main-sidebar sidebar-style-2">
            <aside id="sidebar-wrapper">
                <div class="sidebar-brand">
                    <a href="{{ route('dashboard') }}">
                        <img src="{{ asset('logo2.png') }}" alt="" height="35">
                    </a>
                </div>
                <div class="sidebar-brand sidebar-brand-sm">
                    <a href="{{ route('dashboard') }}">
                        <img src="{{ url('assets/img/favicon.png') }}" alt="" height="35">
                    </a>
                </div>
                <ul class="sidebar-menu">
                    <li class="menu-header">Dashboard</li>
                    <li class="dropdown active">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-home"></i><span>Dashboard</span></a>
                        <ul class="dropdown-menu">
                            <li class="active"><a class="nav-link" href="{{ route('dashboard') }}">Home</a></li>
                        </ul>
                    </li>
                    @if (Auth::user()->is_admin == 1)
                    <li class="menu-header">Administration</li>
                    {{-- <li><a class="nav-link" href="{{ route('allpackage') }}"><i class="fa fa-tasks"></i> <span>All shipment</span></a></li>
                    <li><a class="nav-link" href="{{ route('addpackage') }}"><i class="fa fa-tasks"></i> <span>Add shipment</span></a></li> --}}
                    @endif

                    <li class="menu-header">My Account</li>
                </ul>
                <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button class="btn btn-primary btn-lg btn-block btn-icon-split"><i class="fas fa-sign-out-alt"></i> Logout</button>
                    </form>
                </div>
            </aside>
        </div>

        <!-- Start app main Content -->
        <div class="main-content">
            <section class="section">
                @yield('row-contents')
            </section>
        </div>
    </div>
</div>
@yield('modals')

@if (Auth::user()->is_admin == 0)
{{-- <script src="//code.jivosite.com/widget/4LelClvhAF" async></script> --}}
@endif


<!-- General JS Scripts -->
<script src="{{ asset('auth/assets/bundles/lib.vendor.bundle.js') }}"></script>
<script src="{{ asset('auth/js/CodiePie.js') }}"></script>

<!-- JS Libraies -->
<script src="{{ asset('auth/assets/modules/cleave-js/dist/cleave.min.js') }}"></script>
<script src="{{ asset('auth/assets/modules/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('auth/assets/modules/chart.min.js') }}"></script>
<script src="{{ asset('auth/assets/modules/owlcarousel2/dist/owl.carousel.min.js') }}"></script>
<script src="{{ asset('auth/assets/modules/summernote/summernote-bs4.js') }}"></script>
<script src="{{ asset('auth/assets/modules/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>

<!-- Page Specific JS File -->
<script src="{{ asset('auth/js/page/index.js') }}"></script>
<script>
    var cleaveD = new Cleave('.datemask', {
    date: true,
    datePattern: ['Y', 'm', 'd']
    });
</script>

<!-- Template JS File -->
<script src="{{ asset('auth/js/scripts.js') }}"></script>
<script src="{{ asset('auth/js/custom.js') }}"></script>
</body>

<!-- index.html  Tue, 07 Jan 2020 03:35:33 GMT -->
</html>
