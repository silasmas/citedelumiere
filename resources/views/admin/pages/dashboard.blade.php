@extends("admin.template",['titre'=>"Home"])

@push("style")
<link rel="stylesheet" href="{{ asset('assets/admin/vendor/photoswipe/photoswipe.css') }} ">
<link rel="stylesheet" href="{{ asset('assets/admin/vendor/photoswipe/default-skin/default-skin.css') }} ">
<link rel="stylesheet" href="{{ asset('assets/admin/vendor/plyr/plyr.css') }}">
<link rel="stylesheet" href="{{ asset('assets/admin/stylesheets/dataTables/datatables.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/admin/vendor/simplemde/simplemde.min.css') }}">
{{-- <link rel="stylesheet" href="{{ asset('assets/admin/vendor/plyr/plyr.css') }}"> --}}
<link rel="stylesheet" href="https://cdn.plyr.io/3.6.8/plyr.css">
@endpush
@section("content")

        <main class="app-main">
            <!-- .wrapper -->
            <div class="wrapper">
                <!-- .page -->
                <div class="py-0 page">
                    {{-- <div class="page has-sidebar has-sidebar-expand-xl"> --}}
                        <!-- .page-inner -->
                        <div class="page-inner">
                            <!-- .page-title-bar -->
                            <header class="page-title-bar">
                                <!-- grid row -->
                                <div class="text-center row text-sm-left">
                                    <!-- grid column -->
                                    <div class="mb-2 col-sm-auto col-12">
                                        <!-- .has-badge -->
                                        <div class="has-badge has-badge-bottom">
                                            <a href="#" class="user-avatar user-avatar-xl"><img
                                                    src="{{ asset('assets/admin/images/default.jpg') }}" alt=""></a>
                                            <span class="tile tile-circle tile-xs" data-toggle="tooltip"
                                                title="Public"><i class="fas fa-globe"></i></span>
                                        </div><!-- /.has-badge -->
                                    </div><!-- /grid column -->
                                    <!-- grid column -->
                                    <div class="col">
                                        <h1 class="page-title"> Panel administration</h1>
                                        <p class="text-muted">Dans cette page vous avez la possibilité de géré les
                                            informations
                                            du site </p>
                                    </div><!-- /grid column -->
                                </div><!-- /grid row -->
                                <!-- .nav-scroller -->
                                <div class="nav-scroller border-bottom">
                                    <!-- .nav -->
                                    <div class="nav nav-tabs">
                                        <a class="nav-link {{Route::current()->getName()=="dashboard"?"active":"" }}"
                                            href="{{ route('dashboard') }}">Dashboard</a>
                                        <a class="nav-link {{ Route::current()->getName()=="admin_culte"?"active":""
                                            }}" href="{{ route('admin_culte') }}">Cultes</a>
                                        <a class="nav-link {{ Route::current()->getName()=="admin_sermon"?"active":"" }}"
                                            href="{{ route('admin_sermon') }}">Prédications</a>
                                        <a class="nav-link {{ Route::current()->getName()=="admin_form"?"active":""
                                            }}" href="{{ route('admin_form') }}">Formations</a>
                                        <a class="nav-link {{ Route::current()->getName()=="admin_neswsletter"?"active":"" }}"
                                            href="">News letter</a>
                                        <a class="nav-link {{ Route::current()->getName()=="admin_temoignage"?"active":"" }}"
                                            href="">Temoignages</a>
                                    </div><!-- /.nav -->
                                </div><!-- /.nav-scroller -->
                            </header><!-- /.page-title-bar -->
                            <!-- .page-section -->
                            @switch(Route::current()->getName())
                            @case("dashboard")
                            @include("admin.pages.gestion")
                            @break
                            @case("admin_culte")
                            @include("admin.pages.culte")
                            @include("admin.parties.modale")
                            @break
                            @case("admin_sermon")
                            @include("admin.pages.predication")
                            @break
                            @case("admin_form")
                            @include("admin.pages.formations")
                            @break
                            @case("admin_profs")
                            @include("admin.pages.prof")
                            @include("admin.parties.modale")
                            @include("admin.parties.modalemsg")
                            @break
                            @case("admin_neswsletter")
                            @include("admin.pages.newsletter")
                            @break
                            @case("admin_temoignage")
                            @include("admin.pages.temoignages")
                            @include("admin.parties.modaleTemoignage")
                            @break

                            @default

                            @endswitch
                        </div><!-- /.page-inner -->
                    </div><!-- /.page -->
                </div><!-- /.wrapper -->
        </main><!-- /.app-main -->

@endsection

@push("script")
<!-- BEGIN PLUGINS JS -->
<script src="{{ asset('assets/admin/vendor/photoswipe/photoswipe.min.js') }}"></script>
<script src="{{ asset('assets/admin/vendor/photoswipe/photoswipe-ui-default.min.js') }}"></script>
{{-- <script src="{{ asset('assets/admin/vendor/plyr/plyr.min.js') }}"></script> --}}
{{-- <script src="{{ asset('assets/admin/vendor/plyr/plyr.min.js') }}"></script> --}}
<script src="https://cdn.plyr.io/3.6.8/plyr.js"></script>
<script src="{{ asset('assets/admin/javascript/pages/photoswipe-demo.js') }} "></script>
<script src="{{asset('assets/admin/javascript/dataTables/datatables.min.js')}}"></script>


@stack('scripts')
@endpush
