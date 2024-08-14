<div class="modal modal-drawer fade" id="modalPreach" tabindex="-1" role="dialog" aria-labelledby="modalCulteTitle"
    aria-hidden="true">
    <!-- .modal-dialog -->
    <div class="modal-dialog modal-drawer-right" role="document">
        <!-- .modal-content -->
        <div id="modalContentLayer1" class="modal-content">
            <!-- .modal-header -->
            <div class="modal-header">
                <h5 id="modalPreachTitle" class="modal-title">
                    Formulaire pour enregistrer une formation
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div><!-- /.modal-header -->
            <!-- .modal-body -->
            <div class="modal-body">
                <form method="POST" id="formFormation" enctype="multipart/form-data" data-parsley-validate>
                    @csrf
                    <!-- .fieldset -->
                    <fieldset>
                        <div class="form-group" hidden id="couv">
                            <h2>COVER</h2>
                            <img src="" id="imgCover" alt="" width="200">
                        </div>
                        <div class="form-group" hidden id="couvP">
                            <h2>PDF</h2>
                            {{-- <img src="" id="imgProfil" alt="" width="200"> --}}
                           <div class="row">
                            <div class="col-xl-6 col-lg-12 col-sm-6">
                                <!-- .card -->
                                <div class="card card-figure">
                                    <!-- .card-figure -->
                                    <figure class="figure">
                                        <!-- .figure-img -->
                                        <div class="figure-attachment">
                                            <span class="fa-stack fa-lg"><i
                                                    class="fa fa-square fa-stack-2x text-primary"></i> <i
                                                    class="fa fa-file-pdf fa-stack-1x fa-inverse"></i></span>
                                        </div><!-- /.figure-img -->
                                        <figcaption class="figure-caption">
                                            <ul class="list-inline d-flex text-muted mb-0">
                                                <li class="list-inline-item text-truncate mr-auto">
                                                    <span class="fa fa-file-pdf-o"></span> Attachment.pdf
                                                </li>
                                                <li class="list-inline-item">
                                                    <button type="button" id="" class="btn btn-reset text-muted btnDowloadPdf"
                                                        title="Download" onclick="downloadPdf(this.id)"><span
                                                            class="oi oi-data-transfer-download"></span></button>
                                                </li>
                                                <li class="list-inline-item">
                                                    <button type="button" class="btn btn-reset text-muted"
                                                        title="More actions"><span
                                                            class="oi oi-caret-bottom"></span></button>
                                                </li>
                                            </ul>
                                        </figcaption>
                                    </figure><!-- /.card-figure -->
                                </div><!-- /.card -->
                            </div><!-- /grid column -->
                           </div>
                        </div>
                        <input name="id" id="idformation" type="text" class="form-control" placeholder="" value=""
                            hidden>
                        <div class="form-group">
                            <label>Cursus
                                <i tabindex="0" class="fa fa-info-circle text-gray" data-toggle="tooltip"
                                    data-container="body"
                                    title="Preciser si la formation est dans quel cursus ou niveau"></i>
                            </label>
                            <select id="cursusse" name="cursusse" class="custom-select d-block w-100">
                                <option value=""> Choisissez </option>
                                @forelse ($cursus as $cat)
                                <option value="{{ $cat->id}}"> {{ $cat->titre }} </option>
                                @empty
                                @endforelse
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Titre
                                <i tabindex="0" class="fa fa-info-circle text-gray" data-toggle="tooltip"
                                    data-container="body" title="Le titre de la formation"></i>
                            </label>
                            <input name="title" id="title" type="text" class="form-control" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label>Catégorie
                                <i tabindex="0" class="fa fa-info-circle text-gray" data-toggle="tooltip"
                                    data-container="body"
                                    title="Preciser si la formation est dans quelle catégorie"></i>
                            </label>
                            <select id="catgorie" name="catgorie" class="custom-select d-block w-100">
                                <option value=""> Choisissez </option>
                                @forelse ($categoriesform as $ca)
                                <option value="{{$cat->id}}">{{ $ca->nom}} </option>
                                @empty
                                @endforelse
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Professeur
                                <i tabindex="0" class="fa fa-info-circle text-gray" data-toggle="tooltip"
                                    data-container="body" title="Preciser le formateur qui va dispenser"></i>
                            </label>
                            <select id="prof" name="prof" class="custom-select d-block w-100">
                                <option value=""> Choisissez </option>
                                @forelse ($profs as $p)
                                <option value="{{$p->id }}"> {{ $p->name." ". $p->prenom }} </option>
                                @empty
                                @endforelse
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Activer ?
                                <i tabindex="0" class="fa fa-info-circle text-gray" data-toggle="tooltip"
                                    data-container="body"
                                    title="Preciser si cette formation doit etre acive donc rempli les normes"></i>
                            </label>
                            <div class="list-group-item d-flex justify-content-between align-items-center">
                                <!-- .switcher-control -->
                                <label class="switcher-control switcher-control-success switcher-control-lg">
                                    <input type="checkbox" id="is_active" name="is_active" class="switcher-input">
                                    <span class="switcher-indicator"></span>
                                    <span class="switcher-label-on">
                                        <i class="fas fa-check"></i>
                                    </span>
                                    <span class="switcher-label-off">
                                        <i class="fas fa-times"></i>
                                    </span>
                                </label> <!-- /.switcher-control -->
                            </div>
                            <div class="form-group">
                                <label>Accessible ?
                                    <i tabindex="0" class="fa fa-info-circle text-gray" data-toggle="tooltip"
                                        data-container="body" title="Preciser si la formation peut etre validé"></i>
                                </label>
                                <div class="list-group-item d-flex justify-content-between align-items-center">
                                    <!-- .switcher-control -->
                                    <label class="switcher-control switcher-control-success switcher-control-lg">
                                        <input type="checkbox" id="access" name="access" class="switcher-input">
                                        <span class="switcher-indicator"></span>
                                        <span class="switcher-label-on">
                                            <i class="fas fa-check"></i>
                                        </span>
                                        <span class="switcher-label-off">
                                            <i class="fas fa-times"></i>
                                        </span>
                                    </label> <!-- /.switcher-control -->
                                </div>
                            </div>
                            <div class="form-group" id="divLienVideo">
                                <label>Le lien de la vidéo
                                    <i tabindex="0" class="fa fa-info-circle text-gray" data-toggle="tooltip"
                                        data-container="body"
                                        title="Le lien de la vide de présentation, (Facebook, youtube) si ça existe"></i>
                                </label>
                                <input name="video" id="video" type="text" class="form-control" placeholder="" value="">
                            </div>
                            <div class="form-group" id="divIdVideo">
                                <label>L'identifiant de la vidéo
                                    <i tabindex="0" class="fa fa-info-circle text-gray" data-toggle="tooltip"
                                        data-container="body" title="Juste l'identifiant de la video youtube"></i>
                                </label>
                                <input name="video_id" id="video_id" type="text" class="form-control" placeholder=""
                                    value="">
                            </div>

                            <div class="form-group">
                                <label class="form-control-label" for="profil">Formation en PDF
                                    <i tabindex="0" class="fa fa-info-circle text-gray" data-toggle="tooltip"
                                        data-container="body"
                                        title="Ici vous devez uploader le fichier PDF de la formation (optionel)"></i>
                                </label>
                                <div class="custom-file">
                                    <input name="pdf" type="file" class="custom-file-input is-invalid" id="pdf"
                                        multiple>
                                    <label class="custom-file-label" id="selectFilePdf" for="profil">choisissez le
                                        fichier</label>
                                    <div class="invalid-feedback">
                                        <i class="fa fa-exclamation-circle fa-fw"></i> Désolé, le cover doit avoir la
                                        taiile moins de 1Mb.
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="profil">Cover
                                    <i tabindex="0" class="fa fa-info-circle text-gray" data-toggle="tooltip"
                                        data-container="body"
                                        title="Ici vous devez uploader une image qui sera la couverture de la formation"></i>
                                </label>
                                <div class="custom-file">
                                    <input name="cover" type="file" class="custom-file-input is-invalid"
                                        id="CoverFormation" multiple>
                                    <label class="custom-file-label" id="selectFileCover" for="profil">choisissez le
                                        fichier</label>
                                    <div class="invalid-feedback">
                                        <i class="fa fa-exclamation-circle fa-fw"></i> Désolé, le cover doit avoir la
                                        taille
                                        501X501 px et la taiile moins de 1Mb.
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="description">Description de la formation
                                    <i tabindex="0" class="fa fa-info-circle text-gray" data-toggle="tooltip"
                                        data-container="body" title="un texte qui va decrire la vidéo"></i>
                                </label>
                                <textarea name="description" id="description" class="form-control" rows="3" required
                                    data-toggle="summernote" data-placeholder="Write here..." data-height="200">

                        </textarea>

                            </div>
                            <!-- /.form-group -->
                            <button id="btnFormation" class="btn btn-primary">Enregistrer</button>
                    </fieldset><!-- /.fieldset -->
                </form>


            </div><!-- /.modal-body -->
        </div><!-- .modal-content -->
    </div><!-- /.modal-dialog -->
</div>
