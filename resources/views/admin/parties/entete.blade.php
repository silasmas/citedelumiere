<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!-- End Required meta tags -->
    <!-- Begin SEO tag -->
    <title> {{config('app.name') }} | {{isset($titre)?$titre:""}}</title>
    <meta property="og:title" content="Dashboard">
    <meta name="author" content="Praxis">
    <meta property="og:locale" content="fr_FR">
    <meta name="description" content="La partie admin de la plateforme Praxis">
    <meta property="og:description" content="La partie admin de la plateforme Praxis">
    <link rel="canonical" href="https://Praxis.cd">
    <meta property="og:url" content="https://Praxis.cd">
    <meta property="og:site_name" content="Praxis">
    <script type="application/ld+json">
      {
        "name": "Praxis - Dasboard",
        "description": "La partie admin de la plateforme Praxis",
        "author":
        {
          "@type": "Person",
          "name": "Silas Masimango"
        },
        "@type": "WebSite",
        "url": "praxis.cd",
        "headline": "Dashboard",
        "@context": "http://Praxis.cd"
      }
    </script><!-- End SEO tag -->
    <!-- FAVICONS -->
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/admin/images/three.png') }}">
    <link rel="shortcut icon" href="{{ asset('assets/admin/images/three.png') }}">
    <meta name="theme-color" content="#3063A0"><!-- End FAVICONS -->
    {{-- <meta name="apiUrl" content="{{ getApiURL() }}"> --}}
    {{-- <meta name="csrf" content="{{ csrf_token() }}"> --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet"><!-- End GOOGLE FONT -->
    <!-- BEGIN PLUGINS STYLES -->
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/open-iconic/font/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/flatpickr/flatpickr.min.css') }}"><!-- END PLUGINS STYLES -->
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/summernote/summernote-bs4.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/simplemde/simplemde.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/select2/css/select2.min.css') }}">
    <!-- BEGIN THEME STYLES -->
    <link rel="stylesheet" href="{{ asset('assets/admin/stylesheets/theme.min.css') }}" data-skin="default">
    <link rel="stylesheet" href="{{ asset('assets/admin/stylesheets/theme-dark.min.css') }}" data-skin="dark">
    <link rel="stylesheet" href="{{ asset('assets/admin/stylesheets/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/custom/sweetalert2/dist/sweetalert2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/parsley/parsley.css') }}">
    @stack("style")

    <script>
        var skin = localStorage.getItem('skin') || 'default';
        var isCompact = JSON.parse(localStorage.getItem('hasCompactMenu'));
        var disabledSkinStylesheet = document.querySelector('link[data-skin]:not([data-skin="' + skin + '"])');
        // Disable unused skin immediately
        disabledSkinStylesheet.setAttribute('rel', '');
        disabledSkinStylesheet.setAttribute('disabled', true);
        // add flag class to html immediately
        if (isCompact == true) document.querySelector('html').classList.add('preparing-compact-menu');
      </script>
    <!-- END THEME STYLES -->
  </head>
  <body>
     <!-- .app -->
     <div class="app">
