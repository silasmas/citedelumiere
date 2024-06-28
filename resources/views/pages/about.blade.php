@extends("layouts.template",['titre'=>'A propos'])


@section("content")
@include("parties.bannier")
<section>
    <div class="container">
        <div class="row mt-2-9">
            <section class="md">
                <div class="container">

                    <div class="row wow fadeIn" data-wow-delay="200ms">
                        <div class="col-12">
                            <div class="horizontaltab tab-style1">
                                <ul class="resp-tabs-list hor_1">
                                    <li class="tab1 ml-1-9"><span
                                            class="count display-1 alt-font font-weight-700">01</span>
                                        <div class="tab-box">
                                            <h6>Qui</h6><span>Nous sommes</span>
                                        </div>
                                    </li>
                                    <li class="tab2 ml-1-9"><span
                                            class="count display-1 alt-font font-weight-700">02</span>
                                        <div class="tab-box">
                                            <h6>Pour </h6><span>La petite histoire</span>
                                        </div>
                                    </li>
                                    {{-- <li class="tab3"><span
                                            class="count display-1 alt-font font-weight-700">03</span>
                                        <div class="tab-box">
                                            <h6>Growth</h6><span>Start to growth</span>
                                        </div>
                                    </li> --}}
                                </ul>
                                <div class="bg-white resp-tabs-container box-shadow-large hor_1">
                                    <div class="first">

                                        <div class="bg-white rounded box-shadow-large p-2-5">
                                            <div class="row">
                                                <div class="col-md-11 col-lg-6 mb-2-9 mb-lg-0 position-relative">
                                                    <div class="row">
                                                        <div class="col-6 mt-n2-9">
                                                            <img src="{{asset('assets/img/sante/about.jpg')}}"
                                                                class="border-radius-10 wow fadeInUp tilt" alt=""
                                                                data-wow-delay="200ms">
                                                        </div>
                                                        <div class="col-6">
                                                            <img src="{{asset('assets/img/sante/aboutHomeform.jpg')}}"
                                                                class="border-radius-10 wow fadeInUp tilt" alt=""
                                                                data-wow-delay="400ms">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 mt-lg-0 wow fadeIn" data-wow-delay="200ms">
                                                    <div class="ps-lg-3 ps-xl-5">
                                                        <div class="title-style2 text-start">
                                                            <span class="sub-title">Parlons de nous</span>
                                                        </div>
                                                        <h2 class="h1 mb-1-9 fw-bold">GLODEMAP</h2>
                                                        <p class="mb-1-9">
                                                            GLODEMAP est une société de droit congolais existant depuis
                                                            2017.
                                                            La société intègre des pratiques durables dans ses
                                                            opérations et des valeurs
                                                            contribuant ainsi positivement aux activités de ses
                                                            partenaires.
                                                            GLODEMAP propose 3 services : l'agence de douane, le
                                                            transport,
                                                            ainsi que la santé, et compte plus de 150 agents. Basée à
                                                            Kinshasa,
                                                            GLODEMAP possède différents bureaux en RD Congo, notamment à
                                                            Matadi, Kimpese,
                                                            Lufu, ainsi qu'à Pointe-Noire au Congo Brazzaville, et à
                                                            Luanda en Angola.
                                                            Nous plaçons les besoins et les désirs des clients au cœur
                                                            des décisions
                                                            commerciales garantit la satisfaction de la clientèle et
                                                            favorise la fidélité
                                                            à long terme.
                                                        </p>
                                                        {{-- <div class="mb-1-9">
                                                            <span>Call us 24/7. We can answer for <strong
                                                                    class="lead font-weight-600">all your
                                                                    questions.</strong></span>
                                                        </div> --}}
                                                        <div class="border-bottom mb-1-9 pb-1-9">
                                                            <h5 class="mb-0 d-inline-block h6 me-4">(+243) 898552773
                                                            </h5>
                                                            <div class="align-top d-inline-block me-4"><strong
                                                                    class="font-weight-700 text-primary">ou</strong>
                                                            </div>
                                                            <h5 class="mb-0 d-inline-block h6"><a
                                                                    href="#!">ptuzitana@gmail.com</a></h5>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <p class="mb-0"><span
                                                                    class="font-weight-700 d-block">TUZITANA KAZOLA
                                                                    Patsheley</span>CEO de la compagnie</p>
                                                            <div>
                                                                <img src="{{asset('assets/img/content/sign.png') }}"
                                                                    alt="...">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="second">

                                        <div class="bg-white rounded box-shadow-large p-2-5">
                                            <div class="row">
                                                <div class="col-md-11 col-lg-6 mb-2-9 mb-lg-0 position-relative">
                                                    <div class="row">
                                                        <div class="col-6 mt-n2-9">
                                                            <img src="{{asset('assets/img/sante/aboutceo.JPG')}}"
                                                                class="border-radius-10 wow fadeInUp tilt" alt=""
                                                                data-wow-delay="200ms">
                                                        </div>
                                                        <div class="col-6">
                                                            <img src="{{asset('assets/img/sante/form.jpg')}}"
                                                                class="border-radius-10 wow fadeInUp tilt" alt=""
                                                                data-wow-delay="400ms">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 mt-lg-0 wow fadeIn" data-wow-delay="200ms">
                                                    <div class="ps-lg-3 ps-xl-5">
                                                        <div class="title-style2 text-start">
                                                            <span class="sub-title">Mon histoire</span>
                                                        </div>
                                                        <h2 class="h1 mb-1-9 fw-bold">Une affaire d’espoir </h2>
                                                        <p class="mb-1-9">
                                                            TOZINATANA KAZOLA Patshely, Directeur Général de la société GLODEMAP. Mon nom, traduit du Kikongo ma langue maternelle, signifie « Respectons-nous, aimons-nous ». Je suis né à Kinshasa dans les années 80, aîné d'une fratrie de sept enfants. Mes parents se nomment KUNTONA Alexis et Tmungu Nzambi, tous deux encore en vie.

                                                            Je viens d'une famille modeste, ce qui a limité mes possibilités d'accès à une éducation de qualité. Vers 1992, je me suis retrouver à Matadi pour mes études, placé sous la tutelle de mon oncle Wamba Luzolo. C'est avec son soutien que j'ai obtenu mon diplôme d'État (bac) en mécanique générale à l'institut ITP Matadi en 2006.

                                                            <button type="button" class="butn-style1" data-bs-toggle="modal" data-bs-target="#scrollable">
                                                                Lire la suite
                                                                </button>
                                                        </p>
                                                        <div class="border-bottom mb-1-9 pb-1-9">
                                                            <h5 class="mb-0 d-inline-block h6 me-4">(+243) 898552773
                                                            </h5>
                                                            <div class="align-top d-inline-block me-4"><strong
                                                                    class="font-weight-700 text-primary">ou</strong>
                                                            </div>
                                                            <h5 class="mb-0 d-inline-block h6"><a
                                                                    href="#!">ptuzitana@gmail.com</a></h5>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <p class="mb-0"><span
                                                                    class="font-weight-700 d-block">TUZITANA KAZOLA
                                                                    Patsheley</span>CEO de la compagnie</p>
                                                            <div>
                                                                <img src="{{asset('assets/img/content/sign.png') }}"
                                                                    alt="...">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    {{-- <div class="third">

                                        <div class="bg-white rounded box-shadow-large p-2-5">
                                            <div class="row">
                                                <div class="col-lg-6 mb-1-6 mb-lg-0">
                                                    <img src="{{ asset('assets/img/content/tab-03.jpg') }}"
                                                        class="rounded" alt="...">
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="ps-lg-1-9">
                                                        <h5>Start to growth</h5>
                                                        <p>Duis Integration aute irure design in reprehenderit in
                                                            voluptate velit
                                                            esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                                            occaecat
                                                            cupidatat non design proident.</p>

                                                        <ul class="mb-0 list-style4 ps-0">
                                                            <li>Exclusive design</li>
                                                            <li>Life time supports</li>
                                                            <li>Solve your problem with us</li>
                                                            <li>We Provide Awesome Services</li>
                                                            <li>Your business deserves best software</li>
                                                        </ul>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>

        </div>
    </div>
</section>

<!-- COUNTER
================================================== -->
<section class="py-0">
    <div class="container">
        <div class="pb-5 bg-img" data-overlay-light="9" data-background="assets/img/bg/bg-07.png">
            <div class="text-center row position-relative z-index-1">
                <div class="col-6 col-lg-3 mb-1-6 mb-lg-0 wow fadeInUp" data-wow-delay="100ms">
                    <div>
                        <h3 class="font-weight-600 display-14 display-sm-12 display-lg-10 text-primary"><span
                                class="countup">100</span>k</h3>
                        <span class="fw-bold text-uppercase">Clients</span>
                    </div>
                </div>
                <div class="col-6 col-lg-3 mb-1-6 mb-lg-0 wow fadeInUp" data-wow-delay="200ms">
                    <div>
                        <h3 class="font-weight-600 display-14 display-sm-12 display-lg-10 text-primary"><span
                                class="countup">3</span>+</h3>
                        <span class="fw-bold text-uppercase">Branches</span>
                    </div>
                </div>
                <div class="col-6 col-lg-3 wow fadeInUp" data-wow-delay="300ms">
                    <div>
                        <h3 class="font-weight-600 display-14 display-sm-12 display-lg-10 text-primary"><span
                                class="countup">100</span>k</h3>
                        <span class="fw-bold text-uppercase">Employées</span>
                    </div>
                </div>
                <div class="col-6 col-lg-3 wow fadeInUp" data-wow-delay="400ms">
                    <div>
                        <h3 class="font-weight-600 display-14 display-sm-12 display-lg-10 text-primary"><span
                                class="countup">1</span>+</h3>
                        <span class="fw-bold text-uppercase">Pays</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- EXTRA
================================================== -->
<section class="py-0 vision-changebg owl-carousel owl-theme bg-img cover-background" data-overlay-dark="0"
    data-background="assets/img/bg/bg-10.jpg">
    <div class="vision-wrapper bg-img cover-background" data-overlay-dark="5"
        data-background="assets/img/sante/approche.jpg">
        <div class="vision-content">
            <h4 class="mb-3 text-white font-weight-500">Notre approche</h4>
            <p class="mb-0 text-white">The modern world is in a continuous movement and people everywhere are looking.
            </p>
        </div>
    </div>
    <div class="vision-wrapper bg-img cover-background" data-overlay-dark="5"
        data-background="assets/img/sante/vision.jpg">
        <div class="vision-content">
            <h4 class="mb-3 text-white font-weight-500">Notre Vision</h4>
            <p class="mb-0 text-white">The modern world is in a continuous movement and people everywhere are looking.
            </p>
        </div>
    </div>
    <div class="vision-wrapper bg-img cover-background" data-overlay-dark="5"
        data-background="assets/img/sante/mission.jpg">
        <div class="vision-content">
            <h4 class="mb-3 text-white font-weight-500">Notre Mission</h4>
            <p class="mb-0 text-white">The modern world is in a continuous movement and people everywhere are looking.
            </p>
        </div>
    </div>
    <div class="vision-wrapper bg-img cover-background" data-overlay-dark="5"
        data-background="assets/img/sante/valeur.jpg">
        <div class="vision-content">
            <h4 class="mb-3 text-white font-weight-500">Nos Valeurs</h4>
            <p class="mb-0 text-white">The modern world is in a continuous movement and people everywhere are looking.
            </p>
        </div>
    </div>
</section>

<!-- TEAM
================================================== -->

{{-- @include("parties.team") --}}

<!-- CLIENTS
================================================== -->
@include("parties.client")
<br>
<!-- TESTIMONIALS
================================================== -->
{{-- @include("parties.temoignage") --}}

@include("parties.modale")
@endsection
