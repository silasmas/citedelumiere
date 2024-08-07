<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
         <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }} | {{ isset($titre) ? $titre : '' }}</title>
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}

        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="author" content="SovWare" />
        <meta name="description" content="price ever!" />

        <link rel="shortcut icon" href="{{ asset('assets/img/logos/favicon.png') }} ">
        <link rel="apple-touch-icon" href="{{ asset('assets/img/logos/apple-touch-icon-57x57.png') }} ">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/img/logos/apple-touch-icon-72x72.png') }} ">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/img/logos/apple-touch-icon-114x114.png') }} ">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="{{ asset('assets/membres/css/jquery.webui-popover.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/membres/css/slick.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/membres/css/slick-theme.css') }}" />

        <!-- font awesome 5 -->
        <link rel="stylesheet" href="{{ asset('assets/membres/css/fontawesome-all.min.css') }}" />

        <link rel="stylesheet" href="{{ asset('assets/membres/css/bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/membres/css/main.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/membres/css/responsive.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/membres/css/custom.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/membres/css/mystyle.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/admin/custom/sweetalert2/dist/sweetalert2.min.css') }}">
        <script src="{{ asset('assets/membres/js/jquery-3.3.1.min.js') }}"></script>

        @yield("autres_style")
    </head>
    <body class="gray-bg">
