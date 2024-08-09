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

<script>
    // $(document).ready(function () {
    //     $('.dataTables-example').DataTable({
    //         language: {
    //             processing: "Traitement en cours...",
    //             search: "Rechercher&nbsp;:",
    //             lengthMenu: "Afficher _MENU_ &eacute;l&eacute;ments",
    //             info: "Affichage de l'&eacute;lement _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
    //             infoEmpty: "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
    //             infoFiltered: "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
    //             infoPostFix: "",
    //             loadingRecords: "Chargement en cours...",
    //             zeroRecords: "Aucun &eacute;l&eacute;ment &agrave; afficher",
    //             emptyTable: "Aucune donnée disponible dans le tableau",
    //             paginate: {
    //                 first: "Premier",
    //                 pagingType: "full_numbers", // Afficher tous les boutons de pagination
    //                 previous: "Pr&eacute;c&eacute;dent",
    //                 next: "Suivant",
    //                 last: "Dernier"
    //             },
    //             aria: {
    //                 sortAscending: ": activer pour trier la colonne par ordre croissant",
    //                 sortDescending: ": activer pour trier la colonne par ordre décroissant"
    //             }
    //         },
    //         pageLength: 25,
    //         responsive: true,
    //         dom: '<"html5buttons"B>lTfgitp',
    //         buttons: [{
    //                 extend: 'copy'
    //             },
    //             {
    //                 extend: 'csv'
    //             },
    //             {
    //                 extend: 'excel',
    //                 title: 'NewsLetter'
    //             },
    //             {
    //                 extend: 'pdf',
    //                 title: 'NewsLetter'
    //             },

    //             {
    //                 extend: 'print',
    //                 customize: function (win) {
    //                     $(win.document.body).addClass('white-bg');
    //                     $(win.document.body).css('font-size', '10px');

    //                     $(win.document.body).find('table')
    //                         .addClass('compact')
    //                         .css('font-size', 'inherit');
    //                 }
    //             }
    //         ],"columnDefs": [
    //         { "width": "700px", "targets": 2 }, // Définir une largeur de 100 pixels pour la première colonne
    //         { "width": "200px", "targets": 3 }, // Définir une largeur de 100 pixels pour la première colonne
    //         { "width": "200px", "targets": 1 }, // Définir une largeur de 150 pixels pour la deuxième colonne
    //         // Ajouter d'autres colonnes avec leurs largeurs respectives
    //     ]
    //     });
    // });


    function remplirFile(idFile,idText){
        document.getElementById(idFile).addEventListener('change', function() {
            console.log(this.files[0].name)
            const selectedFile = document.getElementById(idText);
            if (this.files.length > 0) {
                selectedFile.textContent = 'Fichier sélectionné : ' + this.files[0].name;
            } else {
                selectedFile.textContent = '';
            }
        });
    }
    function chekBoks(idCheck,idDivChamp){
            const checkbox = document.getElementById(idCheck);
            const champFormulaire = document.getElementById(idDivChamp);

            if (checkbox.checked) {
                champFormulaire.removeAttribute('hidden');
                champFormulaire.removeAttribute('required');
            } else {
                champFormulaire.setAttribute('hidden',true);
                champFormulaire.setAttribute('required',true);
            }

            checkbox.addEventListener('change', function() {
                if (this.checked) {
                    champFormulaire.removeAttribute('hidden');
                } else {
                    champFormulaire.setAttribute('hidden',true);
                }
            });
        }

                function addAll(form, mothode, url,idf) {
                    var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
                    var f = form;
                    var u = url;
                    var idform = idf;
                    Swal.fire({
                        title: 'Merci de patienter...',
                        icon: 'info'
                    })
                        //  console.log($(form).serialize())
                    $.ajax({
                        url: u,
                        method: mothode,
                        data: $(f).serialize(),
                        headers: {
                            'X-CSRF-TOKEN': csrfToken
                        },
                        success: function (data) {
                            if (!data.reponse) {
                                var errorMessage = '';
                            $.each(data.errors, function(key, value){
                                errorMessage += value + '<br>';
                            });
                                Swal.fire({
                                    title: data.msg+" : "+errorMessage,
                                    icon: 'error'
                                })
                            } else {
                                Swal.fire({
                                    title: data.msg,
                                    icon: 'success'
                                })

                                $(idform)[0].reset();
                                actualiser();
                            }

                        },
                        error: function(xhr, status, error){
                            // alerte("ok")
                            var errors = xhr.responseJSON.errors;
                            var errorMessage = '';
                            $.each(errors, function(key, value){
                                errorMessage += value + '<br>';
                            });
                             // Afficher les erreurs de validation à l'utilisateur
                                Swal.fire({
                                    title: xhr.msg,
                                    html: errorMessage,
                                        icon: 'error'
                                    })
                            }
                    });
                }

                function add(form, mothode, url,idf) {
                    var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
                    var f = form;
                    var u = url;
                    var idform = idf;
                    Swal.fire({
                        title: 'Merci de patienter...',
                        icon: 'info'
                    })
                        console.log(form)
                    $.ajax({
                        url: u,
                        method: mothode,
                        data: form,
                        processData: false,
                        contentType: false,
                        headers: {
                            'X-CSRF-TOKEN': csrfToken
                        },
                        success: function (data) {

                            if (!data.reponse) {
                                Swal.fire({
                                    title: data.msg,
                                    icon: 'error'
                                })
                            } else {
                                Swal.fire({
                                    title: data.msg,
                                    icon: 'success'
                                })

                                $(idform)[0].reset();
                                actualiser();
                            }

                        },
                        error: function(xhr, status, error){
                            // alrte("ok")
                            var errors = xhr.responseJSON.errors;
                            var errorMessage = '';
                            $.each(errors, function(key, value){
                                errorMessage += value + '<br>';
                            });
                             // Afficher les erreurs de validation à l'utilisateur
                                Swal.fire({
                                    title: xhr.msg,
                                    html: errorMessage,
                                        icon: 'error'
                                    })
                            }
                    });
                }
                //
                function actualiser() {
                    location.reload();
                }

                function supprimerPopup(id) {
                    var popup = document.getElementById(id); // Identifier l'élément du pop-up
                    if (popup) {
                        popup.remove(); // Supprimer l'élément du DOM
                    }
                }
                function deleted(id, url) {
                    Swal.fire({
                        title: "Attention Suppression",
                        text: "Êtes-vous sûr de vouloir supprimer cette information?",
                        icon: 'warning',
                        inputAttributes: {
                            autocapitalize: "off"
                        },
                        showCancelButton: true,
                        confirmButtonText: "OUI",
                        cancelButtonText: "NON",
                        showLoaderOnConfirm: true,
                        preConfirm: async (login) => {
                            // alert('alert')
                        },
                        allowOutsideClick: () => !Swal.isLoading()
                    }).then((result) => {
                        if (result.isConfirmed) {
                            Swal.fire({
                                title: 'Merci de patienter...',
                                icon: 'info'
                            })
                            $.ajax({
                                url: url + '/' + id,
                                method: "GET",
                                success: function (data) {
                                    if (!data.reponse) {
                                        Swal.fire({
                                            title: data.msg,
                                            icon: 'error'
                                        })
                                    } else {
                                        Swal.fire({
                                            title: data.msg,
                                            icon: 'success'
                                        })
                                        actualiser();
                                    }
                                },
                            });
                        }
                    });
                }



</script>
@stack('scripts')
@endpush
