@extends("admin.parties.template",['titre'=>"Gestio user"])

@push("style")

@endpush
@section("content")
<!-- .app-main -->
<main class="app-main">
    <!-- .wrapper -->
    <div class="wrapper">
        <!-- .page -->
        <div class="page has-sidebar has-sidebar-fluid has-sidebar-expand-xl">
            <!-- .page-inner -->
            <div class="page-inner page-inner-fill position-relative">
                <header class="shadow-sm page-navs bg-light">
                    <!-- .input-group -->
                    <div class="input-group has-clearable">
                        <button type="button" class="close" aria-label="Close">
                            <span aria-hidden="true"><i class="fa fa-times-circle"></i></span>
                        </button>
                        <label class="input-group-prepend" for="searchClients">
                            <span class="input-group-text"><span class="oi oi-magnifying-glass"></span>
                            </span></label> <input type="text" class="form-control" id="searchClients"
                            data-filter=".board .list-group-item" placeholder="Trouvez un membre">
                    </div><!-- /.input-group -->
                </header>
                {{-- <button type="button" class="btn btn-primary btn-floated position-absolute" data-toggle="modal"
                    data-target="#clientNewModal" title="Add new client"><i class="fa fa-plus"></i></button> --}}
                <!-- board -->
                <div class="p-0 board perfect-scrollbar">
                    <!-- .list-group -->
                    <div class="list-group list-group-flush list-group-divider border-top" data-toggle="radiolist">
                        <!-- .list-group-item -->
                        @forelse ($users as $m)
                        <div class="list-group-item {{ $loop->first?" active":"" }}" data-toggle="sidebar"
                            data-sidebar="show" onclick="active('{{$m->email}}')">
                            <a href="{{ " #".$m->email }}" data-toggle="tab" class="stretched-link"></a>
                            <!-- .list-group-item-figure -->
                            <div class="list-group-item-figure">
                                <div class="tile tile-circle bg-blue"> {{ substr($m->name,0,1) }} </div>
                            </div><!-- /.list-group-item-figure -->
                            <!-- .list-group-item-body -->
                            <div class="list-group-item-body">
                                <h4 class="list-group-item-title"> {{ $m->name." ".$m->prenom }} </h4>
                                <p class="list-group-item-text">{{ $m->email }} </p>
                            </div><!-- /.list-group-item-body -->
                        </div>
                        @empty

                        @endforelse
                        <!-- /.list-group-item -->
                    </div><!-- /.list-group -->
                </div><!-- /board -->
            </div><!-- /.page-inner -->
            @forelse ($users as $m)
            <!-- .page-sidebar -->
            <div class="tab-pane fade {{ $loop->first?" show active":"" }} element" id="{{$m->email}}" role="tabpanel"
                aria-labelledby="{{$m->email."-tab" }}">
                <div class="page-sidebar bg-light">
                    <!-- .sidebar-header -->
                    <header class="sidebar-header d-xl-none">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active">
                                    <a href="#" onclick="Looper.toggleSidebar()"><i
                                            class="mr-2 breadcrumb-icon fa fa-angle-left"></i>Back</a>
                                </li>
                            </ol>
                        </nav>
                    </header>
                    <!-- /.sidebar-header -->
                    <!-- .sidebar-section -->
                    <div class="sidebar-section sidebar-section-fill">
                        <div class="text-center">
                            <a href="user-profile.html" class="user-avatar user-avatar-xl">
                                <img src="{{$m->profil!=""?asset("storage/".$m->profil):asset('assets/admin/images/default.jpg') }}" alt="">
                            </a>
                            <h2 class="h4 mt-2 mb-0">{{$m->name." ".$m->prenom}} </h2>
                            <div class="my-1">
                                <i class="fa fa-star text-yellow"></i> <i class="fa fa-star text-yellow"></i> <i
                                    class="fa fa-star text-yellow"></i> <i class="fa fa-star text-yellow"></i> <i
                                    class="far fa-star text-yellow"></i>
                            </div>
                            <p class="text-muted">{{$m->email}} </p>
                            <p>{{$m->biographie??"Pas des biographie disponible"}} </p>
                        </div><!-- .cover-controls -->

                        <div class="nav-scroller border-bottom">
                            <!-- .nav-tabs -->
                            <ul class="nav nav-tabs">
                                <li class="nav-item active show">
                                    <a class="nav-link" data-toggle="tab" href="{{"#client-expenses".$m->id}}">Parametres</a>
                                </li>
                            </ul><!-- /.nav-tabs -->
                        </div><!-- /.nav-scroller -->
                        <!-- .tab-content -->
                        <div class="tab-content pt-4" id="clientDetailsTabs">
                            <!-- .tab-pane -->
                            <div class="tab-pane fade active show" id="{{"client-expenses".$m->id }}" role="tabpanel"
                                aria-labelledby="client-expenses-tab">
                                @include("admin.pages.students.compteUser")
                            </div><!-- /.tab-pane -->
                        </div><!-- /.tab-content -->
                    </div>
                </div><!-- /.page-sidebar -->

            </div>
            @empty

            @endforelse
            <!-- Keep in mind that modals should be placed outsite of page sidebar -->
        </div><!-- /.page -->
    </div><!-- /.wrapper -->
</main><!-- /.app-main -->
@endsection

@push("script")
<script>
    function active(id){
    var elements = document.querySelectorAll('.element');
    var activeElement = document.querySelector('.element.active');

    // Trouver l'index de l'élément actif
    var currentIndex = Array.from(elements).indexOf(activeElement);

    // Trouver l'index de l'élément à activer
    var nextIndex = Array.from(elements).findIndex(element => element.id === id);

    // Retirer la classe 'active show' de tous les éléments
    elements.forEach(element => {
        element.classList.remove('active', 'show');
    });

    // Ajouter la classe 'active show' à l'élément spécifié par son ID
    elements[nextIndex].classList.add('active', 'show');
  }

</script>
@endpush