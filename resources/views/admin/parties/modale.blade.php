<div class="modal modal-drawer fade" id="modalCulte" tabindex="-1" role="dialog" aria-labelledby="modalCulteTitle"
    aria-hidden="true">
    <!-- .modal-dialog -->
    <div class="modal-dialog modal-drawer-right" role="document">
        <!-- .modal-content -->
        <div id="modalContentLayer1" class="modal-content">
            <!-- .modal-header -->
            <div class="modal-header">
                <h5 id="modalCulteTitle" class="modal-title">
                    Formulaire pour enregistrer un culte
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div><!-- /.modal-header -->
            <!-- .modal-body -->
            <div class="modal-body">
                <form method="POST" id="formCulte" enctype="multipart/form-data">
                    @csrf
                    <!-- .fieldset -->
                    <fieldset>
                        <div class="form-group" hidden id="couv">
                            <img src="" id="imgCover" alt="" width="200">
                        </div>
                        <input name="id" id="idCulte" type="text" class="form-control" placeholder="" value="" hidden>
                        <div class="form-group">
                            <label>Titre
                                <i tabindex="0" class="fa fa-info-circle text-gray" data-toggle="tooltip"
                                    data-container="body" title="Le titre qui va s'afficher au publique"></i>
                            </label>
                            <input name="titre" id="titre" type="text" class="form-control" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Type
                                <i tabindex="0" class="fa fa-info-circle text-gray" data-toggle="tooltip"
                                    data-container="body" title="Le type de culte enseignement,prière,adoration ou séminaire"></i>
                            </label>
                            {{-- <input type="text" name="type" id="type" class="form-control" required
                            placeholder="EX : enseignement,priere,adoration,seminaire"> --}}

                            <select id="subtitle" name="subtitle" class="custom-select d-block w-100" required>
                                <option value=""> Choisissez... </option>
                                <option value="enseignement"> Enseignement </option>
                                <option value="priere"> Prière </option>
                                <option value="adoration"> Adoration </option>
                                <option value="seminaire"> Séminaire </option>
                          </select>
                        </div>

                        <div class="form-group">
                            <label>Est un live ?
                                <i tabindex="0" class="fa fa-info-circle text-gray" data-toggle="tooltip"
                                    data-container="body"
                                    title="Ici vous mettrez le lien du compte instagram du professeur"></i>
                            </label>
                            <div class="list-group-item d-flex justify-content-between align-items-center">
                                 <!-- .switcher-control -->
                                 <label class="switcher-control switcher-control-success switcher-control-lg">
                                    <input type="checkbox" id="is_live" name="is_live" class="switcher-input" >
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
                        <div class="hidden form-group" id="divLienVideo" hidden>
                            <label>Le lien du culte
                                <i tabindex="0" class="fa fa-info-circle text-gray" data-toggle="tooltip"
                                    data-container="body" title="Le lien du live, (Facebook, youtube)"></i>
                            </label>
                            <input name="urlvideo" id="urlvideo" type="text" class="form-control" placeholder=""
                                value="">
                        </div>
                        <div class="form-group">
                            <label class="form-control-label" for="profil">Cover
                                <i tabindex="0" class="fa fa-info-circle text-gray" data-toggle="tooltip"
                                    data-container="body"
                                    title="Ici vous devez uploader une image qui sera la couverture du culte"></i>
                            </label>
                            <div class="custom-file">
                                <input name="cover" type="file" class="custom-file-input is-invalid" id="culteCoverFile" multiple>
                                <label class="custom-file-label" id="selectFile" for="profil">choisissez le fichier</label>
                                <div class="invalid-feedback">
                                    <i class="fa fa-exclamation-circle fa-fw"></i> Désolé, le cover doit avoir la taille
                                    501X501 px et la taiile moins de 1Mb.
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description">Description du culte
                                <i tabindex="0" class="fa fa-info-circle text-gray" data-toggle="tooltip"
                                    data-container="body" title="un texte qui decrit le culte"></i>
                            </label>
                            <textarea name="description" id="description" class="form-control" rows="3" required>

                        </textarea>

                        </div>
                        <!-- /.form-group -->
                        <button type="submit" id="btnCullte" class="btn btn-primary">Enregistrer</button>
                    </fieldset><!-- /.fieldset -->
                </form>
            </div><!-- /.modal-body -->
        </div><!-- .modal-content -->
    </div><!-- /.modal-dialog -->
</div>
