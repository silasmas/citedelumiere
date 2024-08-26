</div><!-- /.app -->
<!-- BEGIN BASE JS -->
<script src="{{ asset('assets/admin/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/admin/vendor/popper.js/umd/popper.min.js') }}"></script>
<script src="{{ asset('assets/admin/vendor/bootstrap/js/bootstrap.min.js') }}"></script> <!-- END BASE JS -->
<!-- BEGIN PLUGINS JS -->
<script src="{{ asset('assets/admin/vendor/pace-progress/pace.min.js') }}"></script>
{{-- <script src="{{ asset('assets/admin/vendor/stacked-menu/js/stacked-menu.min.js') }}"></script> --}}
<script src="{{ asset('assets/admin/vendor/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('assets/admin/vendor/sortablejs/Sortable.min.js') }}"></script>

<script src="{{ asset('assets/admin/javascript/theme.min.js') }}"></script>

<script src="{{ asset('assets/admin/vendor/simplemde/simplemde.min.js') }}"></script>
{{--
<script src="{{ asset('assets/admin/vendor/easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
<script src="{{ asset('assets/admin/vendor/chart.js/Chart.min.js') }}"></script> <!-- END PLUGINS JS --> --}}
<script  src="{{ asset('assets/admin/custom/sweetalert2/dist/sweetalert2.all.min.js') }}"></script>
<script src="{{ asset('assets/admin/vendor/summernote/summernote-bs4.min.js') }} "></script>
<script src="{{ asset('assets/admin/vendor/highlightjs/highlight.pack.min.js') }}"></script>
<script src="{{ asset('assets/admin/javascript/pages/summernote-demo.js') }} "></script>
<script src="{{ asset('assets/admin/javascript/pages/ace-demo.js') }} "></script>
<script src="{{ asset('assets/admin/javascript/pages/select2-demo.js') }}"></script>

<!-- Inclure Parsley.js depuis un CDN -->
<script defer src="https://cdn.jsdelivr.net/npm/parsleyjs/dist/parsley.min.js"></script>

<!-- Inclure la localisation française de Parsley.js -->
<script defer src="https://cdn.jsdelivr.net/npm/parsleyjs/dist/i18n/fr.js"></script>
<!-- BEGIN PAGE LEVEL JS -->
{{-- <script src="{{ asset('assets/admin/javascript/pages/dashboard-demo.js') }}"></script> <!-- END PAGE LEVEL JS --> --}}
<script>
    var skin = localStorage.getItem('skin') || 'default';
    var isCompact = JSON.parse(localStorage.getItem('hasCompactMenu'));
    var disabledSkinStylesheet = document.querySelector('link[data-skin]:not([data-skin="' + skin + '"])');
    // Disable unused skin immediately
    disabledSkinStylesheet.setAttribute('rel', '');
    disabledSkinStylesheet.setAttribute('disabled', true);
    // add flag class to html immediately
    if (isCompact == true) document.querySelector('html').classList.add('preparing-compact-menu');
  </script>
  <script>
    /**
     * Keep in mind that your scripts may not always be executed after the theme is completely ready,
     * you might need to observe the `theme:load` event to make sure your scripts are executed after the theme is ready.
     */
    $(document).on('theme:init', () =>{
    //   particlesJS.load(@dom-id, @path-json, @callback (optional));
    //   particlesJS.load('announcement', '../assets/admin/javascript/pages/particles.json');
    })
  </script>
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
                            if (xhr.responseJSON) {
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

                                    } else {
                                Swal.fire({
                                    title: xhr.msg,
                                    html: "Erreure",
                                        icon: 'error'
                                    })

                            }
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
@stack("script")
</body>
</html>
