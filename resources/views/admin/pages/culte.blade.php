<div class="page-section">
    <!-- .section-block -->
    <div class="section-block">
        <button type="button" hidden id="btnrond2" class="btn btn-success btn-floated" data-toggle="modal"
            data-target="#modalBoardConfig2">
            <span id="spanbtnrond2" class="fa fa-plus"></span>
        </button>
        <button type="button" id="btnrond" class="btn btn-success btn-floated" data-toggle="modal"
            data-target="#modalCulte">
            <span id="spanbtnrond" class="fa fa-plus"></span>
        </button>
            <div class="row">
                @forelse ($cultes as $a)
                <!-- grid column -->
                <div class="col-lg-4">
                    <!-- .card -->
                    <div class="card">
                        <!-- .card-header -->
                        <div class="card-header">
                            @if ($a->is_live=='1')
                            <p>
                                <span class="badge badge-lg badge-danger" style="background: red !important;">
                                    <span class="oi oi-media-record pulse mr-1"> <b>Culte en Live</b></span>
                                </span>
                            </p>
                            @else
                            <p>
                                <span class="badge badge-lg badge-success">
                                    <span class="oi oi-media-record mr-1"> <b>Le live est fini</b></span>
                                </span>
                                <time datetime="02-12-2018">{{\Carbon\Carbon::parse($a->created_at)->isoFormat('LLLL') }} </time>
                            </p>
                            @endif
                        </div><!-- .card-body -->
                        <div class="card-body">
                            <h5 class="card-title"> {{$a->titre}}</h5>
                            <h6 class="card-subtitle text-muted"> {{$a->type}} </h6>
                        </div><!-- /.card-body -->
                        <!-- 16:9 aspect ratio -->
                        <figure class="embed-responsive embed-responsive-16by9 mb-0">
                            <img class="embed-responsive-item" src="{{ asset('storage/'.$a->cover) }}" alt="Card image">
                        </figure><!-- /.embed-responsive -->
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
                                <button onclick="event.preventDefault();editeCulte({{ $a->id }},'editeCulte')" type="button"
                                    class="btn btn-reset text-nowrap text-muted"><i class="fa fa-fw fa-edit"></i>
                                    Modifier</button>
                            </div>
                            <div class="card-footer-item">
                                <button type="button" onclick="event.preventDefault();deleted({{ $a->id }},'deleteCulte')"
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
                        </div>Info <br>. Aucun culte trouvé. <br><a href="#" class="alert-link">Actualiser</a>
                    </div>
                </div>
                @endforelse

            </div>

    </div><!-- /.section-block -->
</div><!-- /.page-section -->

@push('scripts')
<script>
        remplirFile("culteCoverFile","selectFile")
        document.addEventListener('DOMContentLoaded', function() {
            chekBoks('is_live','divLienVideo')
        });

    $("#formCulte").on("submit", function (e) {
        e.preventDefault();
        var formElement = document.getElementById('formCulte');
        // Sélectionner le checkbox en utilisant son identifiant
        // Créer un objet FormData à partir de l'élément de formulaire
                var formData = new FormData(formElement);
                var isLiveValue = document.getElementById('is_live').checked?'1':"0";
                formData.append('is_live', isLiveValue);
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
             add(formData, 'POST', 'addCulte',"#formCulte")
        });

        $(document).on("submit","#formCultEdite", function (e) {
            e.preventDefault();
                                // Sélectionner le formulaire par son ID
            var formElement = document.getElementById('formCultEdite');
                    // Créer un objet FormData à partir de l'élément de formulaire
             var formData = new FormData(formElement);
             var isLiveValue = document.getElementById('is_live').checked?"1":"0";
             formData.append('is_live', isLiveValue);
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
                    add(formData, 'post', 'updateCulte','#formCultEdite')
        });


        function editeCulte(id,root) {
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
                            $('#urlvideo').val(data.data.urlvideo);
                            $('#is_live').prop('checked', data.data.is_live=='1'?true:false);
                            $('#description').val(data.data.description);
                            $('#type').val(data.data.type);
                            $('#idCulte').val(data.data.id);
                            $('#imgCover').attr('src', "../storage/"+data.data.cover);
                            $('.form-group#couv').removeAttr('hidden');

                            // Changer le texte du bouton
                            $('#btnCullte').text('Modifier');
                            $("#formCulte").off("submit");
                            $('#formCulte').attr('id', 'formCultEdite');
                            // Sélectionner le bouton qui déclenche l'ouverture du modal
                            var button = $('#btnrond');
                                // Simuler un clic sur le bouton pour ouvrir le modal
                            button.click();
                            $('#modalCulteTitle').text("Formulaire pour modifier les info d'un culte");
                                Swal.fire({
                                    title: data.msg,
                                    icon: 'success'
                                })
                                // actualiser();
                            }
                        },
                    });
        }
</script>
@endpush
