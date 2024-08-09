<div class="page-section">
    <!-- grid row -->
    <div class="row">
        <!-- grid column -->
        <div class="col-lg-4">
            <!-- .card -->
            <div class="card card-fluid">
                <h6 class="card-header"> Votre Details </h6><!-- .nav -->
                <nav class="nav nav-tabs flex-column border-0">
                    <a data-toggle="tab" href="{{'#userProfil'.$m->id}}" class="nav-link active">Profile</a>
                    <a data-toggle="tab" href="{{'#userCompte'.$m->id}}" class="nav-link">Compte</a>
                    <a data-toggle="tab" href="{{'#userDiplome'.$m->id}}" class="nav-link">Diplôme</a>
                    <a data-toggle="tab" href="{{'#userProf'.$m->id}}" class="nav-link">Notifications</a>
                </nav><!-- /.nav -->
            </div><!-- /.card -->
        </div><!-- /grid column -->
        <!-- grid column -->
        <div class="col-lg-8" >
            <div class="tab-content">
                <div class="tab-pane fade pt-0 active show " id="{{'userProfil'.$m->id}}" role="tabpanel"
                    aria-labelledby="userProfil-tab">
                    <!-- .card -->
                    <div class="card card-fluid">
                        <h6 class="card-header"> Public Profile </h6><!-- .card-body -->
                        <div class="card-body">
                            <!-- .media -->
                            <div class="media mb-3">
                                <!-- avatar -->
                                <div class="user-avatar user-avatar-xl fileinput-button">
                                    <div class="fileinput-button-label"> Changer photo </div><img
                                        src="{{$m->profil!=""?asset("storage/".$m->profil):asset('assets/admin/images/default.jpg') }}" alt=""> <input
                                        id="fileupload-avatar" type="file" name="avatar">
                                </div><!-- /avatar -->
                                <!-- .media-body -->
                                <div class="media-body pl-3">
                                    <h3 class="card-title"> Public avatar </h3>
                                    <h6 class="card-subtitle text-muted"> Cliquez sur l'avatar actuel pour changer votre
                                        photo. </h6>
                                    <p class="card-text">
                                        <small>JPG, GIF or PNG 400x400, &lt; 2 MB.</small>
                                    </p><!-- The avatar upload progress bar -->
                                    <div id="progress-avatar" class="progress progress-xs fade">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success"
                                            role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div><!-- /avatar upload progress bar -->
                                </div><!-- /.media-body -->
                            </div><!-- /.media -->
                            <!-- form -->
                            <form method="post">
                                <!-- form row -->
                                <div class="form-row">
                                    <!-- form column -->
                                    <label for="input01" class="col-md-3">Cover image</label> <!-- /form column -->
                                    <!-- form column -->
                                    <div class="col-md-9 mb-3">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="input01" multiple> <label
                                                class="custom-file-label" for="input01">Choose cover</label>
                                        </div><small class="text-muted">Upload a new cover image, JPG 1200x300</small>
                                    </div><!-- /form column -->
                                </div><!-- /form row -->
                                <!-- form row -->
                                <div class="form-row">
                                    <!-- form column -->
                                    <label for="input02" class="col-md-3">Company</label> <!-- /form column -->
                                    <!-- form column -->
                                    <div class="col-md-9 mb-3">
                                        <input type="text" class="form-control" id="input02" value="CreativeDivision">
                                    </div><!-- /form column -->
                                </div><!-- /form row -->
                                <!-- form row -->
                                <div class="form-row">
                                    <!-- form column -->
                                    <label for="input03" class="col-md-3">Titre du profil</label> <!-- /form column -->
                                    <!-- form column -->
                                    <div class="col-md-9 mb-3">
                                        <textarea class="form-control"
                                            id="input03">{{ $m->biographie }}</textarea>
                                        <small class="text-muted">ceci apparaîtra sur votre page de profil, 300 caractères maximum.</small>
                                    </div><!-- /form column -->
                                </div><!-- /form row -->
                                <!-- form row -->
                                <div class="form-row">
                                    <!-- form column -->
                                    <label for="input04" class="col-md-3">Available for hire?</label> <!-- /form column -->
                                </div><!-- /form row -->
                                <hr>
                                <!-- .form-actions -->
                                <div class="form-actions">
                                    <button type="submit" class="btn btn-primary ml-auto">Modifier Profile</button>
                                </div><!-- /.form-actions -->
                            </form><!-- /form -->
                        </div><!-- /.card-body -->
                    </div><!-- /.card -->
                </div>
                <div class="tab-pane fade pt-0" id="{{'userCompte'.$m->id}}" role="tabpanel" aria-labelledby="userCompte-tab">
                        <!-- .card -->
                        <div class="card card-fluid">
                            <h6 class="card-header"> Compte </h6><!-- .card-body -->
                            <div class="card-body">
                                <!-- form -->
                                <form method="post">
                                    <!-- form row -->
                                    <div class="form-row">
                                        <!-- form column -->
                                        <div class="col-md-6 mb-3">
                                            <label for="input01">Nom</label> <input type="text" class="form-control"
                                                id="input01" value="{{ $m->name }}">
                                        </div><!-- /form column -->
                                        <!-- form column -->
                                        <div class="col-md-6 mb-3">
                                            <label for="input02">Prenom</label> <input type="text" class="form-control"
                                                id="input02" value="{{ $m->prenom }}">
                                        </div><!-- /form column -->
                                    </div><!-- /form row -->
                                    <!-- .form-group -->
                                    <div class="form-group">
                                        <label for="input03">Email</label> <input type="email" class="form-control" id="input03"
                                            value="{{ $m->email }}">
                                    </div><!-- /.form-group -->
                                    <div class="form-row">
                                        <!-- form column -->
                                        <div class="col-md-6 mb-3">
                                            <label for="input01">Sexe</label>
                                            <input type="text" class="form-control"
                                                id="input01" value="{{ $m->sexe }}">
                                                <small class="text-muted">M pour Homme et F pour femme</small>
                                        </div><!-- /form column -->
                                        <!-- form column -->
                                        <div class="col-md-6 mb-3">
                                            <label for="input02">Lieu de naissance</label> <input type="text" class="form-control"
                                                id="input02" value="{{ $m->lieu }}">
                                        </div><!-- /form column -->
                                        <div class="col-md-6 mb-3">
                                            <label for="input02">Date de naissance</label> <input type="date" class="form-control"
                                                id="input02" value="{{ $m->datenaissance }}">
                                        </div><!-- /form column -->
                                        <div class="col-md-6 mb-3">
                                            <label for="input02">Ville de residence</label> <input type="text" class="form-control"
                                                id="input02" value="{{ $m->ville }}">
                                        </div><!-- /form column -->
                                    </div>
                                    <!-- .form-group -->
                                    <div class="form-group">
                                        <label for="input04">Nouveau mot de passe</label> <input type="password" class="form-control"
                                            id="input04" value="secret">
                                    </div><!-- /.form-group -->
                                    <div class="col-md-12 mb-3">
                                        <label for="input02">Votre adresse</label>
                                        <textarea class="form-control"
                                            id="input03">{{ $m->adresse }}</textarea>
                                        <small class="text-muted">ceci apparaîtra sur votre page de profil, 300 caractères maximum.</small>
                                    </div>
                                    <hr>
                                    <!-- .form-actions -->
                                    <div class="form-actions">
                                        <!-- enable submit btn when user type their current password -->
                                        <input type="password" class="form-control mr-3" id="input06"
                                            placeholder="Mot de passe actuel" required=""> <button type="submit"
                                            class="btn btn-primary text-nowrap ml-auto" disabled>Modifier le compte</button>
                                    </div><!-- /.form-actions -->
                                </form><!-- /form -->
                            </div><!-- /.card-body -->
                        </div><!-- /.card -->
                </div>
                <div class="tab-pane fade pt-0" id="{{'userDiplome'.$m->id}}" role="tabpanel" aria-labelledby="userDiplome-tab">

                        <h1>Diplome</h1>
                </div>
                <div class="tab-pane fade pt-0" id="{{'userProf'.$m->id}}" role="tabpanel" aria-labelledby="userProf-tab">
                    <div>
                        <h1>Norif</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- /grid column -->
    </div><!-- /grid row -->
</div>
