@extends("layouts.template",['titre'=>'A propos'])


@section("content")
@include("parties.bannier")
<section>
    <div class="container mt-0">
        <div class="row">
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
                                                            <img src="{{asset('assets/img/content/1.png')}}"
                                                                class="border-radius-10 wow fadeInUp tilt" alt=""
                                                                data-wow-delay="200ms">
                                                        </div>
                                                        <div class="col-6">
                                                            <img src="{{asset('assets/img/content/2.png')}}"
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
                                                        <h2 class="h1 mb-1-9 fw-bold">{{ config('app.name') }}</h2>
                                                        <p class="mb-1-9">
                                            En tant qu’une église suscitée pour faire passer les hommes des ténèbres à la lumière,
                                            afin de jouir de l’héritage de Dieu avec les saints ; nous sommes un système équilibré
                                            pour atteindre la maturité spirituelle au travers des enseignements de qualité,
                                            une bonne adoration, la communion fraternelle et l’amour de Dieu exprimé par les services.
                                                        </p>
                                                        <div class="border-bottom mb-1-9 pb-1-9">
                                                            <h5 class="mb-0 d-inline-block h6 me-4">@lang("infos.adresse.phone")</h5>
                                                            <div class="align-top d-inline-block me-4"><strong
                                                                    class="font-weight-700 text-primary">ou</strong>
                                                            </div>
                                                            <h5 class="mb-0 d-inline-block h6"><a
                                                                    href="@lang("infos.adresse.email")">@lang("infos.adresse.email")</a></h5>

                                                        <div class="border-top pt-1-9 mt-1-9 mt-lg-2-9 pt-lg-2-9 d-sm-flex justify-content-sm-between align-items-center">
                                                            <div class="mb-3 mb-sm-0">
                                                                <h4 class="mb-0 h5">@lang("infos.adresse.pst")</h4>
                                                                <span class="small">@lang("infos.adresse.post")</span>
                                                            </div>
                                                            <div class="py-3 text-center bg-img px-7 about-video cover-background border-radius-10" data-overlay-dark="6" data-background="assets/img/content/VIDEO.jpg">
                                                                <div class="z-index-1 position-relative" >
                                                                    <a class="popup-social-video video_btn small" href="https://www.youtube.com/watch?v=xKXqLCqL-F0"><i class="fas fa-play"></i></a>
                                                                </div>
                                                            </div>
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
                                                            <img src="{{asset('assets/img/content/3.png')}}"
                                                                class="border-radius-10 wow fadeInUp tilt" alt=""
                                                                data-wow-delay="200ms">
                                                        </div>
                                                        <div class="col-6">
                                                            <img src="{{asset('assets/img/content/4.png')}}"
                                                                class="border-radius-10 wow fadeInUp tilt" alt=""
                                                                data-wow-delay="400ms">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 mt-lg-0 wow fadeIn" data-wow-delay="200ms">
                                                    <div class="ps-lg-3 ps-xl-5">
                                                        <div class="title-style2 text-start">
                                                            <span class="sub-title">Notre histoire</span>
                                                        </div>
                                                        <h2 class="h1 mb-1-9 fw-bold">Une affaire d’espoir </h2>
                                                        <p class="mb-1-9">
                                                            TOZINATANA KAZOLA Patshely, Directeur Général de la société GLODEMAP. Mon nom, traduit du Kikongo ma langue maternelle, signifie « Respectons-nous, aimons-nous ». Je suis né à Kinshasa dans les années 80, aîné d'une fratrie de sept enfants. Mes parents se nomment KUNTONA Alexis et Tmungu Nzambi, tous deux encore en vie.

                                                            Je viens d'une famille modeste, ce qui a limité mes possibilités d'accès à une éducation de qualité. Vers 1992, je me suis retrouver à Matadi pour mes études, placé sous la tutelle de mon oncle Wamba Luzolo. C'est avec son soutien que j'ai obtenu mon diplôme d'État (bac) en mécanique générale à l'institut ITP Matadi en 2006.

                                                            {{-- <button type="button" class="butn-style1" data-bs-toggle="modal" data-bs-target="#scrollable">
                                                                Lire la suite
                                                                </button> --}}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="third">

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

                                    </div>
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
<!-- COUNTER
        ================================================== -->
        <section class="bg-img cover-background" data-overlay-dark="8" data-background="assets/img/bg/bg.png">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 mb-1-9 mb-lg-0 wow fadeIn" data-wow-delay="200ms">
                        <div class="mb-3 title-style3">
                            <span>Nos statistiques</span>
                        </div>
                        <h2 class="mb-0 text-white h1">Ce qui nous permet de nous évaluer</h2>
                    </div>
                    <div class="col-lg-5">
                        <div class="row g-2">
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="100ms">
                                <div class="p-4 text-center counter-style border-radius-10 h-100">
                                    <h3 class="text-white h1"><span class="countup">1</span></h3>
                                    <p class="mb-0 text-white">Extension</p>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="200ms">
                                <div class="p-4 text-center counter-style border-radius-10 h-100">
                                    <h3 class="text-white h1"><span class="countup">3</span></h3>
                                    <p class="mb-0 text-white">Départements</p>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="300ms">
                                <div class="p-4 text-center counter-style border-radius-10 h-100">
                                    <h3 class="text-white h1 countup">200</h3>
                                    <p class="mb-0 text-white">Membres</p>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="400ms">
                                <div class="p-4 text-center counter-style border-radius-10 h-100">
                                    <h3 class="text-white h1 countup">1</h3>
                                    <p class="mb-0 text-white">Pays</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


<!-- EXTRA
================================================== -->

<section>
    <div class="container">
        <div class="row position-relative">
            <div class="col-lg-6 col-xxl-5 offset-xxl-1">
                <div class="bg-dark p-1-9 p-lg-6 p-xxl-10 border-radius-10 z-index-1 position-relative">
                    <h2 class="mb-3 text-white h1">Nos particularités </h2>
                    <p class="mb-0 text-white opacity8">
                        Nous assure d’avoir un espace sûr pour se reconnecter,
                        se reconstituer ou renforcer notre foi et spirituellement avec le créateur.
                        A travers la cité de Lumière , nous nous réunissons comme une famille.
                        Nous prions et partageaons la parole de Dieu. Nous célébrons les fêtes ensemble
                         comme un seul corps, comme Noël et Pâques. </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-4">
                <div class="bg-light-gray why-choose-us1 border-radius-10 position-relative">
                    <div class="pb-4 mb-4 d-flex border-bottom wow fadeInUp" data-wow-delay="200ms">
                        <div class="flex-shrink-0">
                            <span class="fs-3 lh-1">01</span>
                        </div>
                        <div class="flex-grow-1 ms-4">
                            <h4 class="mb-2 h5">Notre objectif</h4>
                            <p class="mb-0">Le salut des âmes ;
                                L’impact de la vie de Christ en nous ;
                                La manifestation de la gloire de Dieu au monde.</p>
                        </div>
                    </div>
                    <div class="pb-4 mb-4 d-flex border-bottom wow fadeInUp" data-wow-delay="400ms">
                        <div class="flex-shrink-0">
                            <span class="fs-3 lh-1">02</span>
                        </div>
                        <div class="flex-grow-1 ms-4">
                            <h4 class="mb-2 h5">Notre déclaration</h4>
                            <p class="mb-0">“Voici, les ténèbres couvrent la terre, et
                                            l’obscurité les peuples; Mais sur moi
                                             l’Éternel se lève, sur moi sa gloire apparaît.”
                                    (Esaïe 60:2)</p>
                        </div>
                    </div>
                    <div class="d-flex wow fadeInUp" data-wow-delay="600ms">
                        <div class="flex-shrink-0">
                            <span class="fs-3 lh-1">03</span>
                        </div>
                        <div class="flex-grow-1 ms-4">
                            <h4 class="mb-2 h5">Nos valeurs</h4>
                            <p class="mb-0">Business helps get strategy delivered higher order
                                 outcome than simply changing perceptions.</p>
                        </div>
                    </div>
                    <img src="{{ asset('assets/img/shape/02.png') }}" class="position-absolute top-25 left-15 d-none d-xxl-block" alt="...">
                </div>
            </div>
        </div>
    </div>
    <img src="{{ asset('assets/img/shape/dots.png') }}" class="position-absolute bottom-20 left-30 ani-left-right d-none d-lg-block" alt="...">
</section>
{{-- <section class="py-0 vision-changebg owl-carousel owl-theme bg-img cover-background" data-overlay-dark="0"
    data-background="assets/img/bg/bg-11.JPG">
    <div class="vision-wrapper bg-img cover-background" data-overlay-dark="5"
        data-background="assets/img/bg/bg-11.JPG">
        <div class="vision-content">
            <h4 class="mb-3 text-white font-weight-500">Notre approche</h4>
            <p class="mb-0 text-white">The modern world is in a continuous movement and people everywhere are looking.
            </p>
        </div>
    </div>
    <div class="vision-wrapper bg-img cover-background" data-overlay-dark="5"
        data-background="assets/img/bg/vision.jpg">
        <div class="vision-content">
            <h4 class="mb-3 text-white font-weight-500">Notre Vision</h4>
            <p class="mb-0 text-white">The modern world is in a continuous movement and people everywhere are looking.
            </p>
        </div>
    </div>
    <div class="vision-wrapper bg-img cover-background" data-overlay-dark="5"
        data-background="assets/img/bg/mission.jpg">
        <div class="vision-content">
            <h4 class="mb-3 text-white font-weight-500">Notre Mission</h4>
            <p class="mb-0 text-white">The modern world is in a continuous movement and people everywhere are looking.
            </p>
        </div>
    </div>
    <div class="vision-wrapper bg-img cover-background" data-overlay-dark="5"
        data-background="assets/img/bg/valeur.jpg">
        <div class="vision-content">
            <h4 class="mb-3 text-white font-weight-500">Nos Valeurs</h4>
            <p class="mb-0 text-white">The modern world is in a continuous movement and people everywhere are looking.
            </p>
        </div>
    </div>
</section> --}}



<br>
<!-- TESTIMONIALS
================================================== -->
{{-- @include("parties.temoignage") --}}

@include("parties.modale")
@endsection
