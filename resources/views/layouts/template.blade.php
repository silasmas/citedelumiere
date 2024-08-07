<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <!-- metas -->
    <meta charset="utf-8">
    <meta name="author" content="{{ config('app.name') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description"
        content="{{ config('app.name') }} est un portail numérique pour avoir accès programme de l'église">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- title  -->
    <title>{{ config('app.name') }} | {{ isset($titre)?$titre:"" }}</title>

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/logos/favicon.png') }} ">
    <link rel="apple-touch-icon" href="{{ asset('assets/img/logos/apple-touch-icon-57x57.png') }} ">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/img/logos/apple-touch-icon-72x72.png') }} ">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/img/logos/apple-touch-icon-114x114.png') }} ">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('assets/admin/custom/sweetalert2/dist/sweetalert2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/parsley/parsley.css') }}">

    <!-- plugins -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }} ">

    <!-- search css -->
    <link rel="stylesheet" href="{{ asset('assets/search/search.css') }} ">

    <!-- quform css -->
    <link rel="stylesheet" href="{{ asset('assets/quform/css/base.css') }} ">

    <!-- theme core css -->
    <link href="{{ asset('assets/css/styles.css') }} " rel="stylesheet">

    <!-- custom css -->
    <link href="{{ asset('assets/css/custom.css') }} " rel="stylesheet">

</head>

<body>

    <!-- PAGE LOADING
    ================================================== -->
    <div id="preloader"></div>

    <!-- MAIN WRAPPER
    ================================================== -->
    <div class="main-wrapper">

        <!-- HEADER
        ================================================== -->
        @include("parties.menu")

        @yield("content")

        <!-- FOOTER
        ================================================== -->
        @include("parties.footer")
        @if (Route::current()->getName()=="home" && $live!=null)
        @include("parties.modaleLive")
        @endif
    </div>

    <!-- SCROLL TO TOP
    ================================================== -->
    <a href="#!" class="scroll-to-top"><i class="fas fa-angle-up" aria-hidden="true"></i></a>

    <!-- all js include start -->

    <!-- jquery -->
    <script src="{{ asset('assets/js/jquery.min.js') }} "></script>

    <!-- popper js -->
    <script src="{{ asset('assets/js/popper.min.js') }} "></script>

    <!-- bootstrap -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }} "></script>

    <!-- navigation -->
    <script src="{{ asset('assets/js/nav-menu.js') }} "></script>

    <!-- serch -->
    <script src="{{ asset('assets/search/search.js') }} "></script>

    <!-- owl carousel -->
    <script src="{{ asset('assets/js/owl.carousel.js') }} "></script>

    <!-- thumbs js -->
    <script src="{{ asset('assets/js/owl.carousel.thumbs.js') }} "></script>

    <!-- tab -->
    <script src="{{ asset('assets/js/easy.responsive.tabs.js') }} "></script>

    <!-- jquery.counterup.min -->
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }} "></script>

    <!-- stellar js -->
    <script src="{{ asset('assets/js/jquery.stellar.min.js') }} "></script>

    <!-- waypoints js -->
    <script src="{{ asset('assets/js/waypoints.min.js') }} "></script>

    <!-- countdown js -->
    <script src="{{ asset('assets/js/countdown.js') }} "></script>

    <!-- jquery.magnific-popup js -->
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }} "></script>

    <!-- lightgallery js -->
    <script src="{{ asset('assets/js/lightgallery-all.js') }} "></script>

    <!-- mousewheel js -->
    <script src="{{ asset('assets/js/jquery.mousewheel.min.js') }} "></script>

    <!-- isotope.pkgd.min js -->
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }} "></script>

    <!-- animated headline js -->
    <script src="{{ asset('assets/js/animated-headline.js') }} "></script>

    <!-- wow js -->
    <script src="{{ asset('assets/js/wow.js') }} "></script>

    <!-- lettering js -->
    <script src="{{ asset('assets/js/jquery.lettering.js') }} "></script>

    <!-- textillate js -->
    <script src="{{ asset('assets/js/jquery.textillate.js') }} "></script>

    <!-- tilt js -->
    <script src="{{ asset('assets/js/tilt.js') }} "></script>

    <!--  clipboard js -->
    <script src="{{ asset('assets/js/clipboard.min.js') }} "></script>

    <!--  prism js -->
    <script src="{{ asset('assets/js/prism.js') }} "></script>

    <!-- custom scripts -->
    <script src="{{ asset('assets/js/main.js') }} "></script>

    <!-- form plugins js -->
    <script src="{{ asset('assets/quform/js/plugins.js') }} "></script>
<!-- Inclure Parsley.js depuis un CDN -->
<script defer src="https://cdn.jsdelivr.net/npm/parsleyjs/dist/parsley.min.js"></script>

<!-- Inclure la localisation française de Parsley.js -->
<script defer src="https://cdn.jsdelivr.net/npm/parsleyjs/dist/i18n/fr.js"></script>
<script  src="{{ asset('assets/admin/custom/sweetalert2/dist/sweetalert2.all.min.js') }}"></script>

    <!-- form scripts js -->
    {{-- <script src="{{ asset('assets/quform/js/scripts.js') }} "></script> --}}

    <!-- all js include end -->

    @if (Route::current()->getName()=="detail")
    <script>
        function whatsappShared(){
        var LinkTextToShare = 'https://wa.me/?text=' + encodeURIComponent(window.location.href) ;
        window.open(LinkTextToShare,"_blank");
            }
            function facebookShared(){
                var LinkTextToShare = 'https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(document.URL) + '&t=' + encodeURIComponent(document.URL) ;
                window.open(LinkTextToShare,"_blank");

            }
    </script>
    @endif
    <script>
        window.onload = function() {
            var myModal = new bootstrap.Modal(document.getElementById('scrollableLive'));
            myModal.show();
        };
        function close(){
            var myModal = new bootstrap.Modal(document.getElementById('scrollableLive'));
            myModal.close();
        }

        function contact(form, mothode, url) {
                    var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
                     var f = form;
                    // var idform = idf;
                    Swal.fire({
                        title: 'Merci de patienter...',
                        icon: 'info'
                    })
                        console.log(form)
                    $.ajax({
                        url: url,
                        method: mothode,
                        data: $(f).serialize(),
                        headers: {
                            'X-CSRF-TOKEN': csrfToken
                        },
                        success: function (data) {

                            if (!data.reponse) {
                                Swal.fire({
                                    title: data.msg,
                                    icon: 'error'
                                })
                            } else {
                                Swal.fire({
                                    title: data.msg,
                                    icon: 'success'
                                })

                                $(form)[0].reset();

                            }

                        },
                        error: function(xhr, status, error){
                            // alrte("ok")
                            var errors = xhr.responseJSON.errors;
                            var errorMessage = '';
                            $.each(errors, function(key, value){
                                errorMessage += value + '<br>';
                            });
                             // Afficher les erreurs de validation à l'utilisateur
                                Swal.fire({
                                    title: xhr.msg,
                                    html: errorMessage,
                                        icon: 'error'
                                    })
                            }
                    });
                }
                //
                function actualiser() {
                    location.reload();
                }
    </script>

</body>

</html>
