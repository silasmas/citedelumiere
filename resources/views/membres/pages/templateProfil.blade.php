@extends('membres.templates.main_template', ['titre' => 'Profil'])

@section('autres_style')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/membres/parsley/parsley.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/membres/css/aos.css') }}">
@endsection
@section('content')
    @include('membres.pages.sousMenu')

    <section class="user-dashboard-area">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="user-dashboard-box">
                        <div class="user-dashboard-sidebar">
                            <div class="user-box">
                                <img src="{{ asset(profil(Auth::user()->id)) }}" alt="" class="img-fluid" />
                               
                                <div class="name">{{ Auth::user()->prenom . ' ' . Auth::user()->name }}</div>
                            </div>
                            <div class="user-dashboard-menu" id="list-tab" role="tablist">
                                <ul>
                                    <li data-filter="profil"
                                        class="link-nav {{ session()->get('titlem') == 'Mon Profil' ? 'active' : '' }}">
                                        <a href="{{ route('profil') }}">Profile</a>
                                    </li>

                                    <li data-filter="compte" class="{{ session()->get('titlem') == 'Mon Compte' ? 'active' : '' }}">
                                        <a href="{{ route('compte') }}">Mon compte</a>
                                    </li>
                                    <li data-filter="photo" class="{{ session()->get('titlem') == 'Photo' ? 'active' : '' }}">
                                        <a href="{{ route('photo') }}">Photo</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="user-dashboard-content">
                            @switch(session()->get('titlem'))
                                @case('Mon Profil')
                                    @include('membres.pages.profil')
                                @break

                                @case('Photo')
                                    @include('membres.pages.photo')
                                @break

                                @case('Mon Compte')
                                    @include('membres.pages.compte')
                                @break
                            @endswitch
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('autres_script')
    <script src="{{ asset('assets/js/aos.js') }}"></script>
    <script src="{{ asset('assets/parsley/js/parsley.js') }}"></script>
    <script src="{{ asset('assets/parsley/i18n/fr.js') }}"></script>
    <script>
        function editCompte(val) {
            event.preventDefault()
            edite(val, "../editCompte")
        }

        function edite(form, url) {

            $.ajax({
                url: url,
                method: "POST",
                data: $(form).serialize(),
                success: function(data) {
                    if (!data.reponse) {
                        swal({
                            title: data.msg,
                            icon: 'error'
                        })
                    } else {
                        swal({
                            title: data.msg,
                            icon: 'success'
                        })
                        actualiser()
                    }

                },
            });

        }
    </script>
@endsection
