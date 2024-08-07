
<section class="page-header-area my-course-area">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="page-title print-hidden"> {{ session()->has('titlem') ? session()->get('titlem') : '' }}</h1>
                <ul class="print-hidden">
                    <li class="{{ session()->get('titlem')=="Mes formations"?"active":"" }}"><a href="{{ route('mesFormations') }}">@lang('infos.menu.mesCours')</a></li>

                    <li class="{{ session()->get('titlem')=="Mes favories"?"active":"" }}"><a href="{{ route('favories') }}">@lang('infos.menu.mesFavoris')</a></li>

                    {{-- <li class="{{ session()->get('titlem')=="Mon historique d'achats"?"active":"" }}"><a href="">Historique d'achat</a></li> --}}

                    <li class="{{ session()->get('titlem')=="Mon Profil"|| session()->get('titlem')=="Mon Compte"|| session()->get('titlem')=="Photo"?"active":"" }}"><a href="{{ route('profil') }}">Mon profil</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
