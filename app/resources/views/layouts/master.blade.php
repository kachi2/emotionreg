<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="js">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="">
    <title>@yield('title', 'Dashboard')</title>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/apps.css?ver=1.0.0') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/skins/theme-')}}">
<script async src="https://www.googletagmanager.com/gtag/js?id="></script>
<script>
    window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()));
</script>
</head>
<body class="nk-body npc-cryptlite has-sidebar has-sidebar-fat">
<div class="nk-app-root">
    <div class="nk-main">
        @include('layouts.sidebar')
        <div class="nk-wrap">
            @include('layouts.header')
            <div class="nk-content nk-content-fluid">
                <div class="container-xl wide-lg">
                    {{-- @include('misc.notices') --}}
                    @yield('content')
                </div>
            </div>
            @include('layouts.footer')
        </div>
    </div>
</div>

@stack('modal')
<link rel="stylesheet" href="{{ asset('/css/custom.css') }}">
<script src="{{ asset('/assets/js/bundle.js') }}"></script>
<script src="{{ asset('/assets/js/app.js') }}"></script>
<script src="{{ asset('/assets/js/charts.js') }}"></script>
<script type="text/javascript">
    const updateSetting = "", getTnxDetails = "";
</script>
@stack('scripts')
</body>
</html>