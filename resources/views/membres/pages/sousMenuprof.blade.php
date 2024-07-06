
<section class="page-header-area my-course-area">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="page-title print-hidden"> {{ session()->has('titlem') ? session()->get('titlem') : '' }}</h1>
                <ul class="print-hidden">
                    <li class="{{ session()->get('titlem')=="Liste des professeurs"?"active":"" }}"><a href="{{ route('gestionprof') }}">Liste professeurs</a></li>

                    <li class="{{ session()->get('titlem')=="Liste des etudiants"?"active":"" }}"><a href="{{ route('gestionstudent') }}">Liste etudiants</a></li>

                    {{-- <li class="{{ session()->get('titlem')=="Mon historique d'achats"?"active":"" }}"><a href="">Historique d'achat</a></li> --}}

                    <li class="{{ session()->get('titlem')=="Liste des roles"?"active":"" }}"><a href="{{ route('gestionrole') }}">Gestion rôles</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
