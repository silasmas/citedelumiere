@extends("admin.template",['titre'=>"Home"])

@push("style")
<link rel="stylesheet" href="{{ asset('assets/admin/vendor/select2/css/select2.min.css') }}">
@endpush
@section("content")

<main class="app-main">
    <!-- .wrapper -->
    <div class="wrapper">

        <!-- .page -->
        <div class="page has-sidebar">
            <!-- .page-inner -->
            <div class="page-inner">
                <!-- .page-cover -->
                <header class="page-cover mb-3">
                    <img class="cover-img" src="{{ asset('assets/img/banner/banniere.jpg') }}" alt="">
                </header><!-- /.page-cover -->
                <!-- .page-title-bar -->
                <header class="page-title-bar">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active">
                                <a href="{{ route('dashboard') }}" data-toggle="sidebar"><i
                                        class="breadcrumb-icon fa fa-angle-left mr-2"></i>Dashboard</a>
                            </li>
                        </ol>
                    </nav>
                    <h1 class="page-title">
                        <i class="far fa-building text-muted mr-2"></i> Gestion des formations
                    </h1><button class="btn btn-danger btn-floated d-xl-none" type="button" data-toggle="sidebar"><i
                            class="fa fa-th-list"></i></button>
                </header><!-- /.page-title-bar -->
                <!-- .page-section -->
                <div class="page-section">
                    <!-- .nav-scroller -->
                    <div class="nav-scroller border-bottom">
                        <!-- .nav-tabs -->
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active show" data-toggle="tab" href="#tab-formation">Formations
                                    <span class="badge badge-pill badge-info">{{ count($allformations) }}</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab-chapitre">Chapitres
                                    <span class="badge badge-pill badge-success">{{ count($chapitres) }}</span>
                                </a>
                            </li>
                        </ul><!-- /.nav-tabs -->
                    </div><!-- /.nav-scroller -->
                    <div class="tab-content pt-4" id="clientDetailsTabs">
                        <div class="tab-pane fade active show" id="tab-formation" role="tabpanel"
                            aria-labelledby="client-billing-contact-tab">
                            <button type="button" id="btnrond" class="btn btn-success btn-floated" data-toggle="modal"
                                data-target="#modalPreach">
                                <span id="spanbtnrond" class="fa fa-plus"></span>
                            </button>
                            <div class="row mt-4">
                                <!-- grid column -->
                                @forelse ($allformations as $f)
                                <div class="col-lg-4">
                                    <!-- .card -->
                                    <div class="card">
                                        <!-- .card-header -->
                                        <div class="card-header border-0">
                                            <div class="d-flex justify-content-between align-items-center">
                                                {{-- <span class="badge bg-muted" data-toggle="tooltip"
                                                    data-placement="bottom" title="Deadline"><span
                                                        class="sr-only">Deadline</span> <i
                                                        class="fa fa-calendar-alt text-muted mr-1"></i> 07 Aug
                                                    2018</span> --}}
                                                <span class="badge bg-muted" data-toggle="tooltip"
                                                    data-placement="bottom" title="Finished">
                                                    <span class="sr-only">Finished</span> <i
                                                        class="fa fa-fw fa-check-circle text-teal"></i></span>
                                                <div class="dropdown">
                                                    <button type="button" class="btn btn-icon btn-light"
                                                        data-toggle="dropdown" aria-expanded="false"><i
                                                            class="fa fa-ellipsis-v"></i></button>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <div class="dropdown-arrow"></div>
                                                        <a href="#"
                                                            onclick="event.preventDefault();editeFormation({{ $f->id }},'editeFromation')"
                                                            class="dropdown-item">Modifier</a>
                                                        <a href="#"
                                                            onclick="event.preventDefault();deleted({{ $f->id }}, 'deleteFormation')"
                                                            class="dropdown-item">Supprimer</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- /.card-header -->
                                        <!-- .card-body -->
                                        <div class="card-body text-center">
                                            <!-- avatars -->
                                            <a href="page-project.html" class="tile tile-lg bg-purple mb-2">{{
                                                getInitials($f->title) }}</a>
                                            <!-- /avatars -->
                                            <!-- /.media -->
                                            <h5 class="card-title">
                                                <a href="page-project.html">{{ $f->title }}</a>
                                            </h5>
                                            <p class="card-subtitle text-muted">
                                                {!! Str::limit($f->description, 100, '...') !!}
                                            </p>
                                            <!-- .my-3 -->
                                            <div class="my-3">
                                                <strong>Prof :</strong><br>
                                                <!-- team members -->
                                                <div class="avatar-group">
                                                    @forelse ($f->formateur as $fr)
                                                    <a href="{{ route('admin_prof') }}"
                                                        class="user-avatar user-avatar-sm" data-toggle="tooltip"
                                                        title="Andrew Kim"><img src="{{$fr->profil!=""?asset("
                                                            storage/".$fr->profil):asset('assets/admin/images/default.jpg')
                                                        }}"
                                                        alt=""></a>
                                                    @empty
                                                    <span class="badge badge-subtle badge-danger">Pas d'inscrit</span>
                                                    @endforelse
                                                    @if(count($f->user)>20)
                                                    <a href="#" class="tile tile-sm tile-circle" data-toggle="modal"
                                                        data-target="#membersModal">+20</a>

                                                    @endif
                                                </div><!-- /team members -->
                                            </div><!-- /.my-3 -->
                                            <!-- .my-3 -->
                                            <div class="my-3">
                                                <strong>Etudiants :</strong>
                                                <!-- team members -->
                                                <div class="avatar-group">
                                                    @forelse ($f->user as $fr)
                                                    <a href="{{ route('admin_student') }}"
                                                        class="user-avatar user-avatar-sm" data-toggle="tooltip"
                                                        title="Andrew Kim"><img src="{{$fr->profil!=""?asset("
                                                            storage/".$fr->profil):asset('assets/admin/images/default.jpg')
                                                        }}"
                                                        alt=""></a>
                                                    @empty
                                                    <span class="badge badge-subtle badge-danger">Pas d'inscrit</span>
                                                    @endforelse
                                                    @if(count($f->user)>20)
                                                    <a href="#" class="tile tile-sm tile-circle" data-toggle="modal"
                                                        data-target="#membersModal">+20</a>

                                                    @endif
                                                </div><!-- /team members -->
                                            </div><!-- /.my-3 -->
                                            <!-- grid row -->
                                            {{-- <div class="row">
                                                <!-- grid column -->
                                                <div class="col">
                                                    <strong></strong> <span class="d-block"></span>
                                                </div><!-- /grid column -->
                                                <!-- grid column -->
                                                <div class="col">
                                                    <strong></strong> <span class="d-block"></span>
                                                </div><!-- /grid column -->
                                            </div><!-- /grid row --> --}}

                                            <!-- .card-footer -->
                                            <div class="card-footer">
                                                <a href="#"
                                                    class="card-footer-item card-footer-item-bordered text-muted">
                                                    <strong>{{ count($f->user) }}</strong> <span
                                                        class="d-block">Inscrit</span>
                                                    {{-- </a> <a href="#"
                                                    class="card-footer-item card-footer-item-bordered text-muted"><strong>6</strong>
                                                    <span class="d-block">On Going</span></a> --}}
                                                <a href="#"
                                                    class="card-footer-item card-footer-item-bordered text-muted"><strong>{{
                                                        count(nbrByChapitre($f->id)) }}</strong>
                                                    <span class="d-block">Chapitres</span></a>
                                            </div><!-- /.card-footer -->
                                        </div><!-- /.card-body -->
                                        <!-- .progress -->
                                        <div class="progress progress-xs" data-toggle="tooltip" title="74%">
                                            <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="2181"
                                                aria-valuemin="0" aria-valuemax="100" style="width: 74%">
                                                <span class="sr-only">74% Complete</span>
                                            </div>
                                        </div><!-- /.progress -->
                                    </div><!-- /.card -->
                                </div><!-- /grid column -->
                                @empty

                                @endforelse
                                <!-- grid column -->
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-chapitre" role="tabpanel" aria-labelledby="chapitre-tab">
                            <div class="row mt-4">

                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.page-section -->
            </div><!-- /.page-inner -->

        </div><!-- /.page -->
    </div><!-- /.wrapper -->
</main><!-- /.app-main -->

@include("admin.pages.modals.modaleFormation")
@endsection

@push("script")
<script src="{{ asset('assets/admin/vendor/select2/js/select2.min.js') }}"></script>
<script src="{{ asset('assets/admin/javascript/pages/select2-demo.js') }}"></script>

<script>
    remplirFile("pdf","selectFilePdf")
    remplirFile("CoverFormation","selectFileCover")
    document.addEventListener('DOMContentLoaded', function() {
            chekBoks('is_active','divLienVideo')
            chekBoks('is_active','divIdVideo')
        });
        $("#formFormation").on("submit", function (e) {

        var formElement = document.getElementById('formFormation');
    // Sélectionner le checkbox en utilisant son identifiant
    // Créer un objet FormData à partir de l'élément de formulaire

        if ($('#formFormation').parsley().isValid()) {
        e.preventDefault();
        // Le formulaire est valide, soumettez-le

        var formData = new FormData(formElement);
        var isLiveValue1 = document.getElementById('is_active').checked?'1':"0";
        formData.append('is_active', isLiveValue1);
        var isLiveValue2 = document.getElementById('access').checked?'1':"0";
        formData.append('access', isLiveValue2);
            // Accéder au champ de type file
            var fileInput = formElement.querySelector('input[type="file"]');
            // Vérifier si un fichier a été sélectionné
                    if (fileInput.files.length > 0) {
                        var file = fileInput.files[0];
                        console.log("Nom du fichier : " + file.name);
                        console.log("Taille du fichier : " + file.size);
                        console.log("Type MIME du fichier : " + file.type);

                        // Ajouter le champ de type file à l'objet FormData
                        formData.append('file', file);
                        console.log("for : " + formData);
                    }
                         add(formData, 'POST', 'addFormation',"#formFormation")
    } else {
        // La validation a échoué, ne soumettez pas le formulaire
        e.preventDefault();
        console.log('validation errure')
    }
});

$(document).on("submit","#formFormationEdite", function (e) {
            e.preventDefault();
                                // Sélectionner le formulaire par son ID
                var formElement = document.getElementById('formFormationEdite');
                    // Créer un objet FormData à partir de l'élément de formulaire
                var formData = new FormData(formElement);
                var isLiveValue1 = document.getElementById('is_active').checked?'1':"0";
                formData.append('is_active', isLiveValue1);
                var isLiveValue2 = document.getElementById('access').checked?'1':"0";
                formData.append('access', isLiveValue2);
                    // Accéder au champ de type file
                    var fileInput = formElement.querySelector('input[type="file"]');

                    // Vérifier si un fichier a été sélectionné
                            if (fileInput.files.length > 0) {
                                var file = fileInput.files[0];
                                console.log("Nom du fichier : " + file.name);
                                console.log("Taille du fichier : " + file.size);
                                console.log("Type MIME du fichier : " + file.type);

                                // Ajouter le champ de type file à l'objet FormData
                                formData.append('file', file);
                                console.log("for : " + formData);
                            }
                    add(formData, 'post', 'updateFormation','#formFormationEdite')
        });


        function editeFormation(id,root) {
                    Swal.fire({
                        title: 'Merci de patienter...',
                        icon: 'info'
                    })

                    $.ajax({
                        url:root+'/'+ id,
                        method: "GET",
                        success: function(data) {
                            if (!data.reponse) {
                                Swal.fire({
                                    title: data.msg,
                                    icon: 'error'
                                })
                            } else {
                                // Remplir les champs du formulaire avec les données reçues
                                console.log(data.data)
                                console.log( data.data.formateur)
                            $('#title').val(data.data.title);
                            $('#idformation').val(data.data.id);
                            $('#description').val(data.data.description);
                            $('#description').summernote('code', data.data.description);
                            $('#cursusse').val(data.data.cursuse_id);
                            $('#catgorie').val(data.data.categorie_id);
                            let formateurs = data.data.formateur; // Ceci est un tableau d'objets User

                            // Exemple d'accès à un formateur spécifique
                            if (formateurs.length > 0) {
                                let premierFormateur = formateurs[0];
                                console.log(premierFormateur.id)
                                $('#prof').val(premierFormateur.id); // Remplacez 'nom' par le champ que vous souhaitez
                            }
                            $('#access').prop('checked', data.data.access=='1'?true:false);
                            $('#is_active').prop('checked', data.data.is_active=='1'?true:false);
                            $('#video').val(data.data.video);
                            $('#video_id').val(data.data.subtitle);
                            $('#imgCover').attr('src', "../storage/"+data.data.cover);
                            $('.form-group#couv').removeAttr('hidden');
                            if(data.data.pdf!=null){
                                $('.form-group#couvP').removeAttr('hidden');
                                $('.btnDowloadPdf').attr('id', data.data.id);
                            }

                            // Changer le texte du bouton
                            $('#btnFormation').text('Modifier');
                            $("#formFormation").off("submit");
                            $('#formFormation').attr('id', 'formFormationEdite');
                            // Sélectionner le bouton qui déclenche l'ouverture du modal
                            var button = $('#btnrond');
                                // Simuler un clic sur le bouton pour ouvrir le modal
                            button.click();
                            $('#modalPreachTitle').text("Formulaire pour modifier une formation");
                                Swal.fire({
                                    title: data.msg,
                                    icon: 'success'
                                })
                                chekBoks('is_active','divLienVideo')
                                chekBoks('is_active','divIdVideo')
                                // actualiser();
                            }
                        },
                    });
        }
        function downloadPdf(id) {
            // Créez un lien temporaire pour le téléchargement
            var link = document.createElement('a');
            link.href = '/admin/download-pdf/' + id; // URL de votre route
            link.target = '_blank'; // Ouvrir dans un nouvel onglet
            document.body.appendChild(link);
            link.click(); // Simulez le clic sur le lien
            document.body.removeChild(link); // Supprimez le lien après le clic
        }
</script>
@endpush
