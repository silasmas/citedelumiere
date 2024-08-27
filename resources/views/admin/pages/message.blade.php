@extends("admin.template",['titre'=>"Message"])

@push("style")
<link rel="stylesheet" href="{{ asset('assets/admin/vendor/select2/css/select2.min.css') }}">
@endpush
@section("content")

<main class="app-main">
    <!-- .wrapper -->
    <div class="wrapper">
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
                        @forelse ($messages as $m)
                        <div class="list-group-item {{ $loop->first?" active":"" }}" data-toggle="sidebar"
                            data-sidebar="show" onclick="active('{{$m->email}}')">
                            <a href="{{ " #".$m->email }}" data-toggle="tab" class="stretched-link"></a>
                            <!-- .list-group-item-figure -->
                            <div class="list-group-item-figure">
                                <div class="tile tile-circle bg-blue"> {{ substr($m->nom,0,1) }} </div>
                            </div><!-- /.list-group-item-figure -->
                            <!-- .list-group-item-body -->
                            <div class="list-group-item-body">
                                <h4 class="list-group-item-title"> {{ $m->nom }}
                                    <span class="badge badge-pill badge-danger">{{ $m->total_messages }}</span>
                                </h4>
                                <p class="list-group-item-text">{{ $m->email }} </p>
                            </div><!-- /.list-group-item-body -->
                        </div>
                        @empty
                        <div class="list-group-item active" data-toggle="sidebar"
                            data-sidebar="show">
                            <a href="{{ " #".$m->email }}" data-toggle="tab" class="stretched-link"></a>
                            
                            <!-- .list-group-item-body -->
                            <div class="list-group-item-body">
                                <h4 class="list-group-item-title">Aucun message pour le moment</h4>
                            </div><!-- /.list-group-item-body -->
                        </div>
                        @endforelse
                        <!-- /.list-group-item -->
                    </div><!-- /.list-group -->
                </div><!-- /board -->
            </div><!-- /.page-inner -->
            @forelse ($messages as $m)
            <!-- .page-sidebar -->
            <div class="tab-pane fade {{ $loop->first?" show active":"" }} element" id="{{$m->email}}" role="tabpanel"
                aria-labelledby="{{$m->email." -tab" }}">
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
                                <img src="{{asset('assets/admin/images/default.jpg') }}" alt="">
                            </a>
                            <h2 class="h4 mt-2 mb-0">{{$m->nom}} </h2>
                            <div class="my-1">
                                <i class="fa fa-star text-yellow"></i> <i class="fa fa-star text-yellow"></i> <i
                                    class="fa fa-star text-yellow"></i> <i class="fa fa-star text-yellow"></i> <i
                                    class="far fa-star text-yellow"></i>
                            </div>
                            <p class="text-muted">Téléphone : <a href="tel:{{$m->phone}}">{{$m->phone}}</a> </p>
                        </div>
                        <div class="nav-scroller border-bottom">
                            <!-- .nav-tabs -->
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active show" data-toggle="tab" href="{{"
                                        #client-billing-contact".$m->id }}">Messages</a>
                                </li>
                            </ul><!-- /.nav-tabs -->
                        </div><!-- /.nav-scroller -->
                        <!-- .tab-content -->
                        <div class="tab-content pt-4" id="clientDetailsTabs">
                            <!-- .tab-pane -->
                            <div class="tab-pane fade active show" id="{{" client-billing-contact".$m->id }}"
                                role="tabpanel" aria-labelledby="client-billing-contact-tab">
                                <div class="row">
                                    @php
                                    // Récupérer chaque message séparément
                                    $individualMessages = explode("; ", $m->messages);
                                    @endphp
                                    @foreach ($individualMessages as $fr)
                                    <div class="col-lg-6">
                                        <div class="alert alert-primary has-icon" role="alert">
                                            <div class="alert-icon">
                                                <span class="fa fa-envelope-open"></span>
                                            </div>
                                            <h4 class="alert-heading">{{ $m->objet }}</h4>
                                            {{ $fr }}<a href="#" class="alert-link">an example</a>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
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
<script src="{{ asset('assets/admin/vendor/select2/js/select2.min.js') }}"></script>
<script src="{{ asset('assets/admin/javascript/pages/select2-demo.js') }}"></script>

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