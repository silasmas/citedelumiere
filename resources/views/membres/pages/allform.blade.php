@extends('client.connecte.templates.main_template', ['titre' => 'Toutes les conférence'])

@section('content')
    <section class="category-header-area" style="background-image: url('../assets/images/system/course_page_banner.png');">
        <div class="image-placeholder-1"></div>
        <div class="container-lg breadcrumb-container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item display-6 fw-bold">
                        <a href="{{ route('dashboard') }}"> Accueil </a>
                    </li>
                    <li class="breadcrumb-item active text-light display-6 fw-bold">
                        Toutes les formations
                    </li>
                </ol>
            </nav>
        </div>
    </section>

    <section class="category-course-list-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 filter-area">
                    <div class="card border-0 radius-10">
                        <div id="collapseFilter" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#accordion">
                            <div class="card-body p-0">
                                <div class="filter_type px-4 pt-4">
                                    <h5 class="fw-700 mb-4">Filtrer</h5>
                                    <ul>
                                        <li class="">
                                            <div class="text-15px fw-700">
                                                <a href="">
                                                    <input type="radio" id="category_all" name="sub_category"
                                                        class="categories custom-radio" value="all"
                                                        {{ session()->has('formBy') ? '' : 'checked' }}
                                                        onclick="event.preventDefault(); $(location).attr('href', 'formBy/{{ session()->get('titlem') }}&CADO');" />
                                                    <label for="category_all">Toutes conférences</label>
                                                    <span class="float-end">({{ $formations->count() }})</span>

                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <hr />
                                <div class="filter_type px-4">
                                    <div class="form-group">
                                        <h5 class="fw-700 mb-3">Catégorie</h5>
                                        <ul>
                                            @forelse ($parCategorie as $fr)
                                                <li>
                                                    <div class="">
                                                        <input type="radio" id="category-{{ $fr->categorie }}" name="sub_category"
                                                            class="categories custom-radio" value="{{ $fr->categorie }}"
                                                            data-categorie="{{ $fr->categorie }}"
                                                            onclick="event.preventDefault(); redirectionAvecVidage('formBy/categorie',this)"
                                                            {{ session()->has('formBy') && session()->get('formBy')['select'][0] == 'categorie' && session()->get('formBy')['select'][1] == $fr->categorie ? 'checked' : '' }} />
                                                        <label for="category-{{ $fr->categorie }}">
                                                            {{ $fr->categorie }}
                                                        </label>
                                                        <span class="float-end">({{ $fr->count }})</span>

                                                    </div>
                                                </li>
                                            @empty
                                            @endforelse
                                        </ul>
                                    </div>
                                </div>
                                <hr />
                                <div class="filter_type px-4">
                                    <div class="form-group">
                                        <h5 class="fw-700 mb-3">Disponibilité</h5>
                                        <ul>
                                            @forelse ($parAccess as $ac)
                                                <li>
                                                    <div class="">
                                                        <input type="radio" id="category-{{ $ac->access }}"
                                                            name="sub_category" class="access custom-radio"
                                                            value="{{ $ac->access }}" data-categorie="{{ $ac->access }}"
                                                            {{ session()->has('formBy') && session()->get('formBy')['select'][0] == 'access' && session()->get('formBy')['select'][1] == $ac->access ? 'checked' : '' }}
                                                            onclick="event.preventDefault(); redirectionAvecVidage('formBy/access',this)"/>
                                                            <label for="category-{{ $ac->access }}">{{ $ac->access == 0 ? 'Pas disponible' : 'Disponile'  }}</label>
                                                        <span class="float-end">({{ $ac->count }})</span>
                                                    </div>
                                                </li>
                                            @empty
                                            @endforelse
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @switch(session()->get('titlem'))
                    @case('verticale')
                        @include('client.connecte.pages.verticale')
                    @break

                    @case('horizontale')
                        @include('client.connecte.pages.horizontale')
                    @break

                    @default
                @endswitch
            </div>
        </div>
    </section>

    <script type="text/javascript">
        function showToggle(elem, selector) {
            $("." + selector).slideToggle(20);
            if ($(elem).text() === "Show more") {
                $(elem).text("Show less");
            } else {
                $(elem).text("Show more");
            }
        }
        function redirectionAvecVidage(route, element) {
            // Vider le contenu de la page
            document.body.innerHTML = '';
            // Récupérer la valeur depuis l'attribut data-categorie
            var categorie = element.getAttribute('data-categorie');

            // Rediriger vers la nouvelle URL avec les paramètres
            window.location.href = '/' + route + '&' + categorie;
        }
    </script>
@endsection
