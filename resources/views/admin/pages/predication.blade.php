@push("style")
<link rel="stylesheet" href="{{ asset('assets/admin/vendor/flatpickr/flatpickr.min.css') }}">
<link href="{{ asset('assets/admin/vendor/summernote/summernote-bs4.min.css') }}" rel="stylesheet">


@endpush
<div class="page-section">
    <!-- .section-block -->
    <div class="section-block">
        <button type="button" hidden id="btnrond2" class="btn btn-success btn-floated" data-toggle="modal"
            data-target="#modalBoardConfig2">
            <span id="spanbtnrond2" class="fa fa-plus"></span>
        </button>
        <button type="button" id="btnrond" class="btn btn-success btn-floated" data-toggle="modal"
            data-target="#modalPreach">
            <span id="spanbtnrond" class="fa fa-plus"></span>
        </button>
        <div class="col-xl-4 col-sm-6">
            <!-- .card -->
            {{-- <div class="card">
              <video data-toggle="plyr" controls="" crossorigin="" playsinline="" poster="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.jpg">
                <!-- Video files -->
                <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4" type="video/mp4" size="576">
                <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-720p.mp4" type="video/mp4" size="720">
                <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-1080p.mp4" type="video/mp4" size="1080">
                <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-1440p.mp4" type="video/mp4" size="1440"> <!-- Caption files -->
                <track kind="captions" label="English" srclang="en" src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.en.vtt" default="">
                <track kind="captions" label="Français" srclang="fr" src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.fr.vtt"><!-- Fallback for browsers that don't support the <video> element -->
                <a href="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4" download="">Download</a></video> <!-- /#video -->
            </div><!-- /.card --> --}}
            {{-- <div class="card">
                <!-- youtube -->
                <div data-toggle="plyr" data-plyr-provider="youtube"
                    data-plyr-embed-id="QYQYT-Hl_DE">
                </div><!-- /youtube -->
            </div><!-- /.card -->--}}
          </div>
        <div class="row">
            @forelse ($preach as $a)
            <!-- grid column -->
            <div class="col-lg-4">
                <!-- .card -->
                <div class="card">
                    <!-- .card-header -->
                    <div class="card-header">

                        <time datetime="02-12-2018">{{$a->predicateur }} </time>
                        <span class="badge {{ badge($a->subtitle??"seminaire") }} right">{{datas($a->subtitle)}}</span>

                    </div><!-- .card-body -->
                    <div class="card-body">
                        <h5 class="card-title"> {{$a->titre}}</h5>
                        <h6 class="card-subtitle text-muted"> {{\Carbon\Carbon::parse($a->date)->isoFormat('LLLL')}}
                        </h6>
                    </div><!-- /.card-body -->
                    <!-- 16:9 aspect ratio -->
                    @if ($a->is_video)
                    {{-- <div class="col-xl-4 col-sm-6"> --}}
                        <!-- .card -->
                        <div class="card">
                            <!-- youtube -->
                            <div data-toggle="plyr" data-plyr-provider="youtube"
                                data-plyr-embed-id="{{ $a->video_id }}">
                            </div><!-- /youtube -->
                        </div><!-- /.card -->
                    {{-- </div> --}}
                    @else
                    <figure class="mb-0 embed-responsive embed-responsive-16by9">
                        <img class="embed-responsive-item" src="{{ asset('storage/'.$a->cover) }}" alt="Card image">
                    </figure><!-- /.embed-responsive -->
                    @endif
                    <!-- .card-body -->
                    <div class="card-body">
                        <p class="card-text">
                            {{strlen($a->description)>200?Str::limit($a->description, 200, '...'):$a->description}}
                            <br>

                        </p>
                    </div><!-- /.card-body -->
                    <!-- .card-footer -->
                    <div class="card-footer">
                        <div class="card-footer-item">
                            <button onclick="event.preventDefault();editePreach({{ $a->id }},'editePreach')"
                                type="button" class="btn btn-reset text-nowrap text-muted"><i
                                    class="fa fa-fw fa-edit"></i>
                                Modifier</button>
                        </div>
                        <div class="card-footer-item">
                            <button type="button" onclick="event.preventDefault();deleted({{ $a->id }},'deletePreach')"
                                class="btn btn-reset text-nowrap text-muted">
                                <i class="fa fa-fw fa-trash"></i> Supprimer</button>
                        </div>
                    </div><!-- /.card-footer -->
                </div><!-- /.card -->
            </div><!-- /grid column -->
            @empty
            <div class="col-lg-4">
                <div class="alert alert-primary has-icon" role="alert">
                    <div class="alert-icon">
                        <span class="oi oi-info"></span>
                    </div>Info <br>. Aucune Sermon disponible. <br><a href="#" class="alert-link">Actualiser</a>
                </div>
            </div>
            @endforelse

        </div>

    </div><!-- /.section-block -->
</div><!-- /.page-section -->
@include("admin.parties.modalePredication")
@push('scripts')
<script src="{{ asset('assets/admin/vendor/simplemde/simplemde.min.js') }}"></script>
<script src="{{ asset('assets/admin/vendor/flatpickr/flatpickr.min.js') }} "></script>
<script src="{{ asset('assets/admin/vendor/flatpickr/plugins/monthSelect/index.js') }}"></script>

<script src="{{ asset('assets/admin/vendor/popper.js/umd/popper.min.js') }}"></script>
<script src="{{ asset('assets/admin/vendor/summernote/summernote-bs4.min.js') }}"></script>


<script>
    remplirFile("profilPredicateur","selectFile")
        remplirFile("CoverPreach","selectFileCover")
        document.addEventListener('DOMContentLoaded', function() {
            // $('#modalPreach').on('shown.bs.modal', function () {
            // $('#formPreach').parsley().reset();
            // console.log("ok on shown")
            // });
            chekBoks('is_video','divLienVideo')
            chekBoks('is_video','divIdVideo')
        });


    $("#formPreach").on("submit", function (e) {

        var formElement = document.getElementById('formPreach');
        // Sélectionner le checkbox en utilisant son identifiant
        // Créer un objet FormData à partir de l'élément de formulaire

        if ($('#formPreach').parsley().isValid()) {
            e.preventDefault();
                // Le formulaire est valide, soumettez-le

                var formData = new FormData(formElement);
                var isLiveValue1 = document.getElementById('is_video').checked?'1':"0";
                formData.append('is_video', isLiveValue1);
                var isLiveValue2 = document.getElementById('is_seminary').checked?'1':"0";
                formData.append('is_seminary', isLiveValue2);
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
                                 add(formData, 'POST', 'addPreach',"#formPreach")
            } else {
                // La validation a échoué, ne soumettez pas le formulaire
                e.preventDefault();
                console.log('validation errure')
            }
        });

        $(document).on("submit","#formPreachEdite", function (e) {
            e.preventDefault();
                                // Sélectionner le formulaire par son ID
                var formElement = document.getElementById('formPreachEdite');
                    // Créer un objet FormData à partir de l'élément de formulaire
                var formData = new FormData(formElement);
                var isLiveValue1 = document.getElementById('is_video').checked?'1':"0";
                formData.append('is_video', isLiveValue1);
                var isLiveValue2 = document.getElementById('is_seminary').checked?'1':"0";
                formData.append('is_seminary', isLiveValue2);
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
                    add(formData, 'post', 'updatePreach','#formPreachEdite')
        });


        function editePreach(id,root) {
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
                            $('#titre').val(data.data.titre);
                            $('#idPreach').val(data.data.id);
                            $('#flatpickr02').val(data.data.date);
                            $('#predicateur').val(data.data.predicateur);
                            $('#is_seminary').prop('checked', data.data.is_seminary=='1'?true:false);
                            $('#is_video').prop('checked', data.data.is_video=='1'?true:false);
                            $('#urlvideo').val(data.data.url_video);
                            $('#video_id').val(data.data.video_id);
                            $('#description').val(data.data.description);
                            $('#subtitle').val(data.data.subtitle);
                            $('#imgCover').attr('src', "../storage/"+data.data.cover);
                            $('.form-group#couv').removeAttr('hidden');
                            $('#imgProfil').attr('src', "../storage/"+data.data.profil);
                            $('.form-group#couvP').removeAttr('hidden');

                            // Changer le texte du bouton
                            $('#btnPreach').text('Modifier');
                            $("#formPreach").off("submit");
                            $('#formPreach').attr('id', 'formPreachEdite');
                            // Sélectionner le bouton qui déclenche l'ouverture du modal
                            var button = $('#btnrond');
                                // Simuler un clic sur le bouton pour ouvrir le modal
                            button.click();
                            $('#modalPreachTitle').text("Formulaire pour modifier les info d'un culte");
                                Swal.fire({
                                    title: data.msg,
                                    icon: 'success'
                                })
                                chekBoks('is_video','divLienVideo')
                                chekBoks('is_video','divIdVideo')
                                // actualiser();
                            }
                        },
                    });
        }
</script>
@endpush
