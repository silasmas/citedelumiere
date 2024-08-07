<script src="{{ asset('assets/membres/js/vendor/modernizr-3.5.0.min.js') }}"></script>
<script src="{{ asset('assets/membres/js/vendor/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('assets/membres/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/membres/js/bootstrap.min.js') }}"></script>

<script src="{{ asset('assets/membres/js/slick.min.js') }}"></script>
<script src="{{ asset('assets/membres/js/jquery.webui-popover.min.js') }}"></script>

<script src="{{ asset('assets/membres/js/main.js') }}"></script>
<script src="{{ asset('assets/membres/js/jquery.form.min.js') }}"></script>
<script src="{{ asset('assets/admin/custom/sweetalert2/dist/sweetalert2.all.min.js') }}"></script>
<script>
    function isTouchDevice() {
        return "ontouchstart" in window || navigator.maxTouchPoints > 0 || navigator.msMaxTouchPoints > 0;
    }

    //Event call after loading page
    document.addEventListener(
        "DOMContentLoaded",
        function() {
            setTimeout(function() {
                $(".animated-loader").hide();
                $(".shown-after-loading").show();
            });
        },
        false
    );


    function handleWishList2(id,url) {
        event.preventDefault()
        deleteFavorie(id.id,url);
    }

    function handleWishList3(id) {
        event.preventDefault()
        add(id.id, 'autre', "addFavori");
    }
    function handleWishList4(id) {
        event.preventDefault()
        swal.fire({
            title: 'Connectez-vous afin d\'avoir la possibilité de mettre dans les favoris',
            icon: 'info'
        })
    }

    function handleWishList(id,url) {
        event.preventDefault();
        add(id.id, "", url);
    }
    function confirmPlace(id) {
        addCard(id.id, "autre", "confirmPlace");
    }

    function addToCard(id) {
        event.preventDefault()
        addCard(id.id, "", "addCard");
    }

    function annulReservation(id) {
        event.preventDefault()
        swal.fire({
            title: "Annuler la réservation",
            text: "êtes-vous sûre de vouloir annuler votre réservation?",
            icon: 'warning',
            dangerMode: true,
            buttons: {
                cancel: 'Non',
                delete: 'OUI'
            }
        }).then(function(willDelete) {
            if (willDelete) {
                addCard(id.id, "", "removeCard");
            } else {

            }

        });
    }
    function removeFromCartList(id) {
        event.preventDefault()
        swal.fire.fire({
            title: "Supprimer du panier",
            text: "êtes-vous sûre de supprimer cette formation du panier?",
            icon: 'warning',
            dangerMode: true,
            buttons: {
                cancel: 'Non',
                delete: 'OUI'
            }
        }).then(function(willDelete) {
            if (willDelete) {
                addCard(id.id, "", "removeCard");
            } else {

            }

        });
    }

    function addCard(form, idLoad, url) {
        event.preventDefault()
        var autre = idLoad == '' ? '' : '../';
        swal.fire({
            title: 'Merci de patienter...',
            icon: 'info'
        })
        $.ajax({
            url: '../' + url + '/' + form,
            method: "GET",
            data: {
                idform: form
            },
            success: function(data) {
                if (!data.reponse) {
                    swal.fire({
                        title: data.msg,
                        icon: 'error'
                    })
                } else {
                    swal.fire({
                        title: data.msg,
                        icon: 'success'
                    })
                    actualiser();
                }
            },
        });

    }

    function add(form, idLoad, url) {
        var autre ="";
        // var autre = idLoad == '' ? '' : '../';
        swal.fire({
            title: 'Merci de patienter...',
            icon: 'info'
        })
        $.ajax({
            url:  url + '/' + form,
            method: "GET",
            data: {
                idform: form
            },
            success: function(data) {
                //alert(data);
                console.log(data);
                if (!data.reponse) {
                    deleteFavorie(form, 'membres/deleteFavorie/');

                } else {
                    swal.fire({
                        title: data.msg,
                        icon: 'success'
                    })
                    actualiser();
                }
            },
        });

    }


    function deleteFavorie(form, url) {
        swal.fire({
            title: "Supprimer de vos favories",
            text: "Cette formation fait partie de vos favories, voulez-vous la supprimée?",
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
                            try {

                            } catch (error) {

                            }
                },allowOutsideClick: () => !Swal.isLoading()
                }).then((result) => {
                        if (result.isConfirmed) {
                            $.ajax({
                    url: url +"/"+ form,
                    method: "GET",
                    data: {
                        idform: form
                    },
                    success: function(data) {
                        // console.log(data);
                        if (!data.reponse) {
                            swal.fire({
                                title: data.msg,
                                icon: 'warning'
                            })
                        } else {
                            swal.fire({
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

    function page(name,id) {
        alert("ok")
        var urls=name+'?id='+id;
        window.location.href=urls;
    }
    function actualiser() {
        location.reload();
    }
</script>

@yield("autres_script")
</body>

</html>
