<div class="modal modal-drawer fade" id="modalPreach" tabindex="-1" role="dialog" aria-labelledby="modalCulteTitle"
    aria-hidden="true">
    <!-- .modal-dialog -->
    <div class="modal-dialog modal-drawer-right" role="document">
        <!-- .modal-content -->
        <div id="modalContentLayer1" class="modal-content">
            <!-- .modal-header -->
            <div class="modal-header">
                <h5 id="modalPreachTitle" class="modal-title">
                    Formulaire pour enregistrer une prédication
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div><!-- /.modal-header -->
            <!-- .modal-body -->
            <div class="modal-body">
                <form method="POST" id="formPreach" enctype="multipart/form-data" data-parsley-validate>
                    @csrf
                    <!-- .fieldset -->
                    <fieldset>
                        <div class="form-group" hidden id="couv">
                            <h2>COVER</h2>
                            <img src="" id="imgCover" alt="" width="200">
                        </div>
                        <div class="form-group" hidden id="couvP">
                            <h2>Profil</h2>
                            <img src="" id="imgProfil" alt="" width="200">
                        </div>
                        <input name="id" id="idPreach" type="text" class="form-control" placeholder="" value="" hidden>
                        <div class="form-group">
                            <label >Titre
                                <i tabindex="0" class="fa fa-info-circle text-gray" data-toggle="tooltip"
                                    data-container="body" title="Le thème de la prédication"></i>
                            </label>
                            <input name="titre" id="titre" type="text" class="form-control" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label for="flatpickr02">Date
                                <i tabindex="0" class="fa fa-info-circle text-gray" data-toggle="tooltip"
                                    data-container="body" title="La date où ce message était précher"></i>
                            </label>
                             <input id="flatpickr02" name="date" required type="date" class="form-control" data-toggle="flatpickr"
                             data-enable-time="true" data-date-format="Y-m-d H:i">

                        </div>
                        <div class="form-group">
                            <label>Type de culte
                                <i tabindex="0" class="fa fa-info-circle text-gray" data-toggle="tooltip"
                                    data-container="body" title="Preciser si ceci était quel type de culte"></i>
                            </label>
                            <select id="subtitle" name="subtitle" class="custom-select d-block w-100">
                                  <option value=""> Choose... </option>
                                  <option value="enseignement"> Enseignement </option>
                                  <option value="priere"> Prière </option>
                                  <option value="adoration"> Adoration </option>
                            </select>

                        </div>
                        <div class="form-group">
                            <label>Prédicateur
                                <i tabindex="0" class="fa fa-info-circle text-gray" data-toggle="tooltip"
                                    data-container="body" title="Le nom et le prenom du prédicateur"></i>
                            </label>
                            <input name="predicateur" id="predicateur" type="text" class="form-control" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label" for="profil">Photo du prédicateur
                                <i tabindex="0" class="fa fa-info-circle text-gray" data-toggle="tooltip"
                                    data-container="body"
                                    title="Une photo de profil du prédicateur"></i>
                            </label>
                            <div class="custom-file">
                                <input name="profil" type="file" class="custom-file-input is-invalid" id="profilPredicateur" multiple>
                                <label class="custom-file-label" id="selectFile" for="profil">choisissez le fichier</label>
                                <div class="invalid-feedback">
                                    <i class="fa fa-exclamation-circle fa-fw"></i> Désolé, le cover doit avoir la taille
                                    501X501 px et la taiile moins de 1Mb.
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>C'était un seminaire ?
                                <i tabindex="0" class="fa fa-info-circle text-gray" data-toggle="tooltip"
                                    data-container="body"
                                    title="Preciser si c'étais un seminaire ou pas"></i>
                            </label>
                            <div class="list-group-item d-flex justify-content-between align-items-center">
                                 <!-- .switcher-control -->
                                 <label class="switcher-control switcher-control-success switcher-control-lg">
                                    <input type="checkbox" id="is_seminary" name="is_seminary" class="switcher-input" >
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
                            <label>Il y a la vidéo ?
                                <i tabindex="0" class="fa fa-info-circle text-gray" data-toggle="tooltip"
                                    data-container="body"
                                    title="Preciser si la vidéo existe"></i>
                            </label>
                            <div class="list-group-item d-flex justify-content-between align-items-center">
                                 <!-- .switcher-control -->
                                 <label class="switcher-control switcher-control-success switcher-control-lg">
                                    <input type="checkbox" id="is_video" name="is_video" class="switcher-input" >
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
                                    data-container="body" title="Le lien du live, (Facebook, youtube) si ça existe"></i>
                            </label>
                            <input name="urlvideo" id="urlvideo" type="text" class="form-control" placeholder=""
                                value="">
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
                            <label class="form-control-label" for="profil">Cover
                                <i tabindex="0" class="fa fa-info-circle text-gray" data-toggle="tooltip"
                                    data-container="body"
                                    title="Ici vous devez uploader une image qui sera la couverture du culte"></i>
                            </label>
                            <div class="custom-file">
                                <input name="cover"  type="file" class="custom-file-input is-invalid" id="CoverPreach" multiple>
                                <label class="custom-file-label" id="selectFileCover" for="profil">choisissez le fichier</label>
                                <div class="invalid-feedback">
                                    <i class="fa fa-exclamation-circle fa-fw"></i> Désolé, le cover doit avoir la taille
                                    501X501 px et la taiile moins de 1Mb.
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description">Description du message
                                <i tabindex="0" class="fa fa-info-circle text-gray" data-toggle="tooltip"
                                    data-container="body" title="un texte qui decrit le culte"></i>
                            </label>
                            <textarea name="description" id="description" class="form-control" rows="3" required
                            data-toggle="summernote" data-placeholder="Write here..." data-height="200">

                        </textarea>

                        </div>
                        <!-- /.form-group -->
                        <button  id="btnPreach" class="btn btn-primary">Enregistrer</button>
                    </fieldset><!-- /.fieldset -->
                </form>


            </div><!-- /.modal-body -->
        </div><!-- .modal-content -->
    </div><!-- /.modal-dialog -->
</div>


