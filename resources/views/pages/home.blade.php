@extends("layouts.template",['titre'=>'Accueil'])


@section("content")
<!-- BANNER============================ -->
<section class="p-0 top-position">
    <div class="px-0 container-fluid">
        <div class="slider-fade1 owl-carousel owl-theme w-100">
            <div class="pt-6 pb-10 item bg-img cover-background pt-sm-6 pb-sm-14 py-md-16 py-lg-20 py-xxl-24"
                data-overlay-dark="0" data-background="assets/img/banner/banner-01.jpg">
                <div class="container pt-6 pt-md-0">
                    <div class="row align-items-center">
                        <div class="py-6 col-md-10 col-lg-8 col-xl-7 col-xxl-6 mb-1-9 mb-lg-0 position-relative">
                            <span class="h5 text-secondary">We help organize</span>
                            {{-- @include("parties.live") --}}
                            <h1 class="mb-3 display-17 display-sm-11 display-md-9 display-lg-8 display-xl-4 title">The
                                Impressive Business Strategy</h1>
                            <p class="lead w-95 w-md-90 w-lg-85 mb-2-2">Our business consulting providing actionable
                                recommend to force enterprise transformation.</p>
                            <a href="#" class="my-1 butn shadow-dark me-2 my-sm-0">
                                <span>Learn More</span>
                            </a>
                            <a href="our-core-values.html"
                                class="my-1 butn white text-secondary-hover shadow-dark my-sm-0">How We Work</a>
                            <div class="ani-left-right light-title text-dark opacity05 left alt-font">01</div>
                            {{-- @include("parties.live") --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="pt-6 pb-10 item bg-img cover-background pt-sm-6 pb-sm-14 py-md-16 py-lg-20 py-xxl-24"
                data-overlay-dark="0" data-background="assets/img/banner/banner-02.jpg">
                <div class="container pt-6 pt-md-0">
                    <div class="row align-items-center">
                        <div class="py-6 col-md-10 col-lg-8 col-xl-7 col-xxl-6 mb-1-9 mb-lg-0 position-relative">
                            <span class="h5 text-secondary">We help organize</span>
                            <h2 class="mb-3 display-17 display-sm-11 display-md-9 display-lg-8 display-xl-4 title">We
                                Guarantee to Premium Support</h2>
                            <p class="lead w-95 w-md-90 w-lg-85 mb-2-2">Our business consulting providing actionable
                                recommend to force enterprise transformation.</p>
                            <a href="#" class="my-1 butn shadow-dark me-2 my-sm-0">
                                <span>Learn More</span>
                            </a>
                            <a href="our-core-values.html"
                                class="my-1 butn white text-secondary-hover shadow-dark my-sm-0">How We Work</a>
                            <div class="ani-left-right light-title text-dark opacity05 left alt-font">02</div>
                            {{-- @include("parties.live") --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="pt-6 pb-10 item bg-img cover-background pt-sm-6 pb-sm-14 py-md-16 py-lg-20 py-xxl-24"
                data-overlay-dark="0" data-background="assets/img/banner/banner-03.jpg">
                <div class="container pt-6 pt-md-0">
                    <div class="row align-items-center">
                        <div class="py-6 col-md-10 col-lg-8 col-xl-7 col-xxl-6 mb-1-9 mb-lg-0 position-relative">
                            <span class="h5 text-secondary">We help organize</span>
                            <h2 class="mb-3 display-17 display-sm-11 display-md-9 display-lg-8 display-xl-4 title">We
                                Promise Take Care Your Business</h2>
                            <p class="lead w-95 w-md-90 w-lg-85 mb-2-2">Our business consulting providing actionable
                                recommend to force enterprise transformation.</p>
                            <a href="#" class="my-1 butn shadow-dark me-2 my-sm-0">
                                <span>Learn More</span>
                            </a>
                            <a href="our-core-values.html"
                                class="my-1 butn white text-secondary-hover shadow-dark my-sm-0">How We Work</a>
                            <div class="ani-left-right light-title text-dark opacity05 left alt-font">03</div>
                            {{-- @include("parties.live") --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="triangle-shape top-15 right-10 z-index-9 d-none d-md-block"></div>
    <div class="square-shape top-25 left-5 z-index-9 d-none d-xl-block"></div>
    <div class="shape-five z-index-9 right-10 bottom-15"></div>
</section>

<!-- SERVICES
        ================================================== -->
{{-- <section class="p-0 overflow-visible service-block">
    <div class="container">
        <div class="row mt-n1-9">
             <div class="col-sm-6 col-lg-3">
                <div class="px-3 border-bottom border-lg-bottom-0 border-sm-end border-color-light-black py-2-2 icon-box">
                    <a href="">
                        <i class="align-top icon-calendar display-16 text-secondary d-inline-block"></i>
                        <div class="align-top d-inline-block ms-3 text-start">
                            <h4 class="mb-2 h6">Nos programme</h4>
                            <p class="mb-0 display-29">Rejoignez-nous.</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div
                    class="px-3 border-bottom border-lg-bottom-0 border-lg-end border-color-light-black py-2-2 icon-box">
                    <a href="{{ route('contact') }}">
                    <i class="align-top icon-chat display-16 text-secondary d-inline-block"></i>
                    <div class="align-top d-inline-block ms-3 text-start">
                        <h4 class="mb-2 h6">Nous écrire</h4>
                        <p class="mb-0 display-29">24/7 Contactez-nous.</p>
                    </div>
                </a>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div
                    class="px-3 border-bottom border-sm-bottom-0 border-sm-end border-color-light-black py-2-2 icon-box">
                   <a href="">
                    <i class="align-top icon-puzzle display-16 text-secondary d-inline-block"></i>
                    <div class="align-top d-inline-block ms-3 text-start">
                        <h4 class="mb-2 h6">Devenir membre</h4>
                        <p class="mb-0 display-29">Devenez disciple.</p>
                    </div>
                </a>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="px-3 py-2-2 icon-box">
                  <a href="https://link.frobill.cloud/0bxiy" target="blank">
                    <i class="align-top icon-wallet display-16 text-secondary d-inline-block"></i>
                    <div class="align-top d-inline-block ms-3 text-start">
                        <h4 class="mb-2 h6">Donner votre offrande</h4>
                        <p class="mb-0 display-29">Exprime ton amour.</p>
                    </div>
                </a>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<section class="p-0 mx-auto mt-n5 secondary-shadow w-95 w-xxl-90 border-radius-10 z-index-9">
    <div class="px-0 container-fluid">
        <div class="text-center row g-0 justify-content-center">
            <div class="col-sm-6 col-lg-3">
                <div
                    class="px-3 border-bottom border-lg-bottom-0 border-sm-end border-color-light-black py-2-2 icon-box">
                    <a href="{{ route('programmes') }}">
                        <i class="align-top icon-calendar display-16 text-secondary d-inline-block"></i>
                        <div class="align-top d-inline-block ms-3 text-start">
                            <h4 class="mb-2 h6">Nos programme</h4>
                            <p class="mb-0 display-29">Rejoignez-nous.</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div
                    class="px-3 border-bottom border-lg-bottom-0 border-lg-end border-color-light-black py-2-2 icon-box">
                    <a href="{{ route('contact') }}">
                    <i class="align-top icon-chat display-16 text-secondary d-inline-block"></i>
                    <div class="align-top d-inline-block ms-3 text-start">
                        <h4 class="mb-2 h6">Nous écrire</h4>
                        <p class="mb-0 display-29">24/7 Contactez-nous.</p>
                    </div>
                </a>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div
                    class="px-3 border-bottom border-sm-bottom-0 border-sm-end border-color-light-black py-2-2 icon-box">
                   <a href="{{ route('membre') }}">
                    <i class="align-top icon-puzzle display-16 text-secondary d-inline-block"></i>
                    <div class="align-top d-inline-block ms-3 text-start">
                        <h4 class="mb-2 h6">Devenir membre</h4>
                        <p class="mb-0 display-29">Devenez disciple.</p>
                    </div>
                </a>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="px-3 py-2-2 icon-box">
                  <a href="https://link.frobill.cloud/0bxiy" target="blank">
                    <i class="align-top icon-wallet display-16 text-secondary d-inline-block"></i>
                    <div class="align-top d-inline-block ms-3 text-start">
                        <h4 class="mb-2 h6">Donner votre offrande</h4>
                        <p class="mb-0 display-29">Exprimez votre amour.</p>
                    </div>
                </a>
                </div>
            </div>
        </div>
    </div>
</section>
@include("parties.live")
<!-- ABOUT
        ================================================== -->
<section>
    <div class="container pt-lg-4">
        <div class="row align-items-xl-center about-style1">
            <div class="mb-6 col-lg-6 mb-md-8 mb-lg-0 wow fadeIn" data-wow-delay="200ms">
                <div class="position-relative">
                    <div class="overflow-hidden position-relative pe-xl-7 pe-md-5">
                        <img src="assets/img/content/about.jpg" class="rounded position-relative pb-1-9 z-index-1"
                            alt="...">
                    </div>
                    <div class="py-4 rounded shadow-block pe-4 ps-5 bg-secondary">
                        <i class="text-white icon-trophy opacity3"></i>
                        <p class="mb-0 text-white text-uppercase font-weight-500 alt-font lh-base"><span
                                class="d-block font-weight-600 display-6 no-letter-spacing">25+</span> years of <br>
                            experince</p>
                    </div>
                    <div
                        class="ani-left-right light-title text-primary opacity1 left-n10 bottom-75 alt-font d-none d-lg-block">
                        About</div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="400ms">
                <div class="ps-xl-4">
                    <div class="mb-1-9">
                        <h2 class="cd-headline clip display-20 display-md-18 font-weight-600">We're the Biggest
                            Corporate Master in <span
                                class="p-0 cd-words-wrapper text-primary d-block d-sm-inline-block d-md-block d-xl-inline-block">
                                <b class="is-visible font-weight-600">Europe</b>
                                <b class="font-weight-600">Asia</b>
                                <b class="font-weight-600">Australia</b>
                            </span>
                        </h2>
                    </div>
                    <p class="mb-1-9">Our work draw on over 25+ years of experience, conveyed by 5,800 experts on the
                        planet's most significant monetary focuses.</p>
                    <ul class="mb-0 list-style1 text-dark">
                        <li>Save time – We center around <strong>the subtleties.</strong></li>
                        <li>Save money – We <strong>help secure</strong> expences.</li>
                        <li>Grow – We remain fixed on <strong>expanding income.</strong></li>
                    </ul>
                    {{-- <div class="media border-top border-color-light-gray mt-1-9 pt-1-9 align-items-center">
                        <img src="{{ asset('assets/img/content/sign.png') }}" alt="...">
                        <div class="media-body ms-4">
                            <h4 class="h6">Josephine Rollins</h4>
                            <p class="mb-0">(Chairman and Founder)</p>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <div class="shape-five right-5 bottom-45 opacity3"></div>
</section>
<!-- COUNTER
        ================================================== -->
<section class="p-0 wow fadeIn" data-wow-delay="100ms">
    <div class="container">
        <div class="right-container">
            <div class="row position-relative z-index-9 align-items-center py-1-9 py-lg-0">
                <div class="col-6 col-lg-3 d-none d-lg-block">
                    <img src="{{ asset('assets/img/content/ab02.webp') }}" alt="">
                </div>
                <div class="col-md-4 col-lg-3 offset-md-1 offset-lg-0 offset-xl-1 mb-1-9 mb-md-0 wow fadeInRight"
                    data-wow-delay="100ms">
                    <div class="d-flex ps-4 ps-md-0">
                        <div class="flex-shrink-0">
                            <i class="mt-1 text-white icon-map-pin display-14 opacity3"></i>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h3 class="h1 text-secondary"><span class="countup">78</span>+</h3>
                            <span class="text-white text-uppercase letter-spacing-2">Branches</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 mb-1-9 mb-md-0 wow fadeInRight" data-wow-delay="200ms">
                    <div class="d-flex ps-4 ps-md-0">
                        <div class="flex-shrink-0">
                            <i class="mt-1 text-white icon-hotairballoon display-14 opacity3"></i>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h3 class="h1 text-secondary"><span class="countup">3</span>K</h3>
                            <span class="text-white text-uppercase letter-spacing-2">Employees</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-xl-2 wow fadeInRight" data-wow-delay="300ms">
                    <div class="d-flex ps-4 ps-md-0">
                        <div class="flex-shrink-0">
                            <i class="mt-1 text-white icon-globe display-14 opacity3"></i>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h3 class="h1 text-secondary"><span class="countup">16</span>+</h3>
                            <span class="text-white text-uppercase letter-spacing-2">Countries</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-light">
    <div class="container position-relative z-index-1">
        <div class="text-center title-style3 mb-2-3 mb-md-6">
            <span>Nos programmes</span>
            <h2 class="mb-0 h1">Our Company Solution</h2>
        </div>
        <div class="row mt-n1-9">
            <div class="col-md-6 col-xl-4 mt-1-9 wow fadeIn" data-wow-delay="200ms">
                <div class="border-0 card card-style10 border-radius-10 ms-4">
                    <div class="position-relative">
                        <img src="{{ asset('assets/img/content/s1.webp') }}" alt="...">
                    </div>
                    <div class="card-heading position-relative">
                        <h3 class="mb-0 text-white h5" style="color: #FFF"><a href="#">Cultes d'enseignements</a></h3>
                        <i class="text-white icon-strategy display-7 opacity2 position-absolute top-n10 end-0"></i>
                    </div>
                    <div class="card-body p-1-9">
                        <p class="mb-3">Nous nous réunissons tout le mercredi à 17h00' pour être enseigner.</p>
                        <a href="#" class="text-primary-hover font-weight-600">Voir en detail</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4 mt-1-9 wow fadeIn" data-wow-delay="400ms">
                <div class="border-0 card card-style10 border-radius-10 ms-4">
                    <div class="position-relative">
                        <img src="{{ asset('assets/img/content/s2.webp') }}" alt="...">
                    </div>
                    <div class="card-heading position-relative">
                        <h3 class="mb-0 text-white h5"><a href="#">Culte d'intercession</a></h3>
                        <i class="text-white icon-bargraph display-7 opacity2 position-absolute top-n10 end-0"></i>
                    </div>
                    <div class="card-body p-1-9">
                        <p class="mb-3">Nous nous réunissons tout le jeudi à 17h00' pour prier.</p>
                        <a href="#" class="text-primary-hover font-weight-600">Voir en detail</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4 mt-1-9 wow fadeIn" data-wow-delay="600ms">
                <div class="border-0 card card-style10 border-radius-10 ms-4">
                    <div class="position-relative">
                        <img src="{{ asset('assets/img/content/s3.webp') }}" alt="...">
                    </div>
                    <div class="card-heading position-relative">
                        <h3 class="mb-0 text-white h5"><a href="#">Culte d'adoration</a></h3>
                        <i class="text-white icon-puzzle display-7 opacity2 position-absolute top-n10 end-0"></i>
                    </div>
                    <div class="card-body p-1-9">
                        <p class="mb-3">Nous nous réunissons tout le dimanche à 09h00', pour des moments fort
                            d'adorations</p>
                        <a href="#" class="text-primary-hover font-weight-600">Voir en detail</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="round-shape-one top-n10 left-90"></div>
    <div class="text-white ani-left-right light-title opacity1 left bottom-n10 bottom-xl-n15 alt-font d-none d-lg-block z-index-0 wow fadeIn"
        data-wow-delay="200ms">services</div>
</section>
<!-- PORTFOLIO============= -->

<section class="wow fadeIn" data-wow-delay="200ms">
    <div class="container position-relative z-index-9">
        <div class="row g-0 overlap-column">
            <div class="col-lg-6 bg-img cover-background border-radius-10 tilt d-none d-lg-block" data-overlay-dark="0"
                data-background="assets/img/content/about-08.jpg"></div>
            <div class="col-lg-6">
                <div class="bg-white primary-shadow p-2-3 p-md-6 p-xl-7 border-radius-10">
                    <span
                        class="d-block text-secondary display-23 display-md-21 display-lg-20 fw-bold title-font wow text-animation"
                        data-in-effect="fadeInRight">Devenir membre</span>
                    <h2 class="h1 mb-1-9 fw-bold">Preparing For Success</h2>
                    <p class="mb-1-9">The groups serve every single significant segment. of the business. Our work draw
                        on over 25+ years of experience.</p>
                    <div class="progress-text">
                        <div class="row">
                            <div class="col-10"><strong class="text-uppercase">Cursus 1</strong></div>
                            <div class="col-2 text-end">30h</div>
                        </div>
                    </div>
                    <div class="custom-progress progress">
                        <div class="animated custom-bar progress-bar slideInLeft" style="width:38%" aria-valuemax="100"
                            aria-valuemin="0" aria-valuenow="38" role="progressbar"></div>
                    </div>
                    <div class="progress-text">
                        <div class="row">
                            <div class="col-10"><strong class="text-uppercase">Cursus 2</strong></div>
                            <div class="col-2 text-end">30h</div>
                        </div>
                    </div>
                    <div class="custom-progress progress">
                        <div class="animated custom-bar progress-bar slideInLeft" style="width:68%" aria-valuemax="100"
                            aria-valuemin="0" aria-valuenow="68" role="progressbar"></div>
                    </div>
                    <div class="progress-text">
                        <div class="row">
                            <div class="col-10"><strong class="text-uppercase">Cursus 3</strong></div>
                            <div class="col-2 text-end">30h</div>
                        </div>
                    </div>
                    <div class="mb-0 custom-progress progress">
                        <div class="animated custom-bar progress-bar slideInLeft" style="width:85%" aria-valuemax="100"
                            aria-valuemin="0" aria-valuenow="85" role="progressbar"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="position-absolute right-5 top-10 z-index-1 w-7 ani-left-right opacity1 d-none d-lg-block"><img
            src="assets/img/icon/icon-06.svg" alt="..."></div>
</section>

<!-- SERVICES
        ================================================== -->

<section class="bg-light-gray border-radius-10">
    <div class="container mb-1-6 mb-md-2-2 mb-lg-1-6 mb-xl-0">
        <div class="row align-items-stretch">
            <div class="col-lg-4 wow fadeIn" data-wow-delay="200ms">
                <div class="row g-0 align-items-center h-100">
                    <div class="col-md-12">
                        <span
                            class="d-block text-secondary display-23 display-md-21 display-lg-20 fw-bold title-font wow text-animation"
                            data-in-effect="fadeInRight">Notre galerie</span>
                        <h2 class="h1 mb-1-9 mb-lg-0 fw-bold">Nos cultes en images</h2>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 wow fadeIn" data-wow-delay="400ms">
                <div class="position-relative h-100 vw-lg-60">
                    <div class="portfolio-slider owl-carousel owl-theme h-100 w-100 ms-lg-8 ms-xxl-16">
                        {{-- @forelse ($galeries as $g)
                        <div class="portfolio-style2">
                            <img src="{{ asset('storage/'.$g->img1) }}  " alt="...">
                            <div class="portfolio-inner">
                                <div class="portfolio-overlay"></div>
                                <div class="portfolio-text">
                                    <h3 class="mb-1 h4"><a href="{{ route('activites') }}" class="text-white">{{
                                            $g->titre }} </a></h3>
                                    <span class="text-white">{{ " date : ".$g->getDateAtAttributes($g->date)
                                        }}</span><br>
                                    <span class="text-white">{{ $g->categorie->nom }}</span>
                                </div>
                            </div>
                        </div>
                        @empty

                        @endforelse --}}

                        <div class="portfolio-style2">
                            <img src="{{ asset('assets/img/portfolio/08.jpg') }}  " alt="...">
                            <div class="portfolio-inner">
                                <div class="portfolio-overlay"></div>
                                <div class="portfolio-text">
                                    <h3 class="mb-1 h4"><a href="" class="text-white">Nos etudiants</a></h3>
                                    <span class="text-white">Collation</span>
                                </div>
                            </div>
                        </div>

                        <div class="portfolio-style2">
                            <img src="{{ asset('assets/img/portfolio/09.jpg') }}  " alt="...">
                            <div class="portfolio-inner">
                                <div class="portfolio-overlay"></div>
                                <div class="portfolio-text">
                                    <h3 class="mb-1 h4"><a href="" class="text-white">Notre équipe</a></h3>
                                    <span class="text-white">La team</span>
                                </div>
                            </div>
                        </div>

                        <div class="portfolio-style2">
                            <img src="{{ asset('assets/img/portfolio/10.jpg') }}  " alt="...">
                            <div class="portfolio-inner">
                                <div class="portfolio-overlay"></div>
                                <div class="portfolio-text">
                                    <h3 class="mb-1 h4"><a href="" class="text-white">Nos Professeurs</a></h3>
                                    <span class="text-white">Professeurs</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- BLOG
        ================================================== -->
<section>
    <div class="container position-relative z-index-9">

        <div class="mx-auto text-center mb-2-6 mb-md-5 wow fadeIn w-md-90 w-lg-70 w-xl-60 w-xxl-50"
            data-wow-delay="200ms">
            <span class="mb-2 text-uppercase d-block font-weight-600 small text-primary letter-spacing-2">Nos recents
                messages</span>
            <h2 class="mb-0 h1">Our blog and news will solve all of your troubles</h2>
        </div>

        <div class="row g-xl-5 mt-n2-9">
            <div class="col-md-6 col-lg-4 mt-2-9 wow fadeIn" data-wow-delay="200ms">
                <article class="card card-style8 h-100 border-radius-10">
                    <div class="card-img position-relative">
                        <img src="assets/img/blog/blog-01.jpg" class="rounded-top-lg" alt="...">
                        <a href="#!" class="rounded category">business</a>
                    </div>
                    <div class="card-body pt-2-0 px-2-0 pb-2-9">
                        <span class="mb-2 text-primary d-block font-weight-500">June 10, 2021</span>
                        <h3 class="mb-0 h5 lh-base"><a href="blog-post.html">Five things you need to know about business
                                today</a></h3>
                        <a href="blog-post.html" class="butn-read-more"><i class="ti-arrow-right"></i></a>
                    </div>
                </article>
            </div>

            <div class="col-md-6 col-lg-4 mt-2-9 wow fadeIn" data-wow-delay="400ms">
                <article class="card card-style8 h-100 border-radius-10">
                    <div class="card-img position-relative">
                        <img src="assets/img/blog/blog-02.jpg" class="rounded-top-lg" alt="...">
                        <a href="#!" class="rounded category">consulting</a>
                    </div>
                    <div class="card-body p-2-0 p-xl-2-4">
                        <span class="mb-2 text-primary d-block font-weight-500">June 8, 2021</span>
                        <h3 class="mb-0 h5 lh-base"><a href="blog-post.html">Eliminate your fears and doubts about
                                business</a></h3>
                        <a href="blog-post.html" class="butn-read-more"><i class="ti-arrow-right"></i></a>
                    </div>
                </article>
            </div>

            <div class="col-md-6 col-lg-4 mt-2-9 wow fadeIn" data-wow-delay="600ms">
                <article class="card card-style8 h-100 border-radius-10">
                    <div class="card-img position-relative">
                        <img src="assets/img/blog/blog-03.jpg" class="rounded-top-lg" alt="...">
                        <a href="#!" class="rounded category">finance</a>
                    </div>
                    <div class="card-body p-2-0 p-xl-2-4">
                        <span class="mb-2 text-primary d-block font-weight-500">June 6, 2021</span>
                        <h3 class="mb-0 h5 lh-base"><a href="blog-post.html">Understanding the background of
                                business</a></h3>
                        <a href="blog-post.html" class="butn-read-more"><i class="ti-arrow-right"></i></a>
                    </div>
                </article>
            </div>
        </div>
    </div>

    <div
        class="p-12 bg-secondary p-xl-16 p-xxl-20 d-inline-block rounded-circle position-absolute left-n10 top-70 top-xl-60 top-xxl-50 z-index-1 ani-left-right d-none d-lg-block">
    </div>
    <div
        class="p-10 bg-transparent border-solid border-width-2 border-color-primary p-xl-14 p-xxl-18 d-inline-block rounded-circle position-absolute left-n10 bottom-n5 ani-top-bottom z-index-1 d-none d-lg-block">
    </div>

</section>
<!-- BECOME A CLIENT
        ================================================== -->
<section class="bg-light-gray background-position-left bg-img background-no-repeat"
    data-background="assets/img/content/form-img.jpg">
    <div class="container">
        <div class="row overlap-column">
            <div class="col-lg-6 border-radius-10 tilt d-none d-lg-block wow fadeIn" data-wow-delay="100ms"
                data-overlay-dark="0" data-background="assets/img/content/form-img.jpg"></div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="200ms">
                <div class="become-client-form p-1-6 p-sm-2-9 border-radius-10">
                    <div class="text-center title-style2 text-lg-start mb-1-9">
                        <span class="sub-title">Ecrivez nous</span>
                        <h2 class="mb-0 h1">Ready to Get Started?</h2>
                    </div>
                    <form class="quform" action="quform/contact.php" method="post" enctype="multipart/form-data"
                        onclick="">

                        <div class="quform-elements">

                            <div class="row">

                                <!-- Begin Text input element -->
                                <div class="col-md-6">
                                    <div class="quform-element form-group">
                                        <div class="quform-input">
                                            <input class="form-control" id="name" type="text" name="name"
                                                placeholder="Your name here" />
                                        </div>
                                    </div>

                                </div>
                                <!-- End Text input element -->

                                <!-- Begin Text input element -->
                                <div class="col-md-6">
                                    <div class="quform-element form-group">
                                        <div class="quform-input">
                                            <input class="form-control" id="email" type="text" name="email"
                                                placeholder="Your email here" />
                                        </div>
                                    </div>
                                </div>
                                <!-- End Text input element -->

                                <!-- Begin Text input element -->
                                <div class="col-md-6">
                                    <div class="quform-element form-group">
                                        <div class="quform-input">
                                            <input class="form-control" id="subject" type="text" name="subject"
                                                placeholder="Your subject here" />
                                        </div>
                                    </div>

                                </div>
                                <!-- End Text input element -->

                                <!-- Begin Text input element -->
                                <div class="col-md-6">
                                    <div class="quform-element form-group">
                                        <div class="quform-input">
                                            <input class="form-control" id="phone" type="text" name="phone"
                                                placeholder="Your phone here" />
                                        </div>
                                    </div>

                                </div>
                                <!-- End Text input element -->

                                <!-- Begin Textarea element -->
                                <div class="col-md-12">
                                    <div class="quform-element form-group">
                                        <div class="quform-input">
                                            <textarea class="form-control h-100" id="message" name="message" rows="3"
                                                placeholder="Tell us a few words"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Textarea element -->

                                <!-- Begin Captcha element -->
                                <div class="col-md-12">
                                    <div class="quform-element">
                                        <div class="form-group">
                                            <div class="quform-input">
                                                <input class="form-control" id="type_the_word" type="text"
                                                    name="type_the_word" placeholder="Type the below word" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="quform-captcha">
                                                <div class="quform-captcha-inner">
                                                    <img src="{{ asset('assets/quform/images/captcha/courier-new-light.png') }}"
                                                        alt="...">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Captcha element -->

                                <!-- Begin Submit button -->
                                <div class="col-md-12">
                                    <div class="quform-submit-inner">
                                        <button class="butn" type="submit"><span>Send Message</span></button>
                                    </div>
                                    <div class="quform-loading-wrap text-start"><span class="quform-loading"></span>
                                    </div>
                                </div>
                                <!-- End Submit button -->

                            </div>

                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
