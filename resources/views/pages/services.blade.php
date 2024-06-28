@extends("layouts.template",['titre'=>'Services'])


@section("content")
@include("parties.bannier")
<section>
    <div class="container position-relative z-index-9">
        <div class="title-style2 text-center mb-2-9 mb-lg-6 wow fadeIn" data-wow-delay="100ms">
            <span class="sub-title">Pour quoi nous?</span>
            <h2 class="mb-0 h1">Nos services</h2>
        </div>
        <div class="row g-xl-5 mt-n1-9">
            <div class="col-md-6 col-lg-4 mt-1-9 wow fadeInUp" data-wow-delay="400ms">
                <div class="card card-style6">
                    <div class="card-img bg-img" data-overlay-dark="6" data-background="{{asset('assets/img/sante/3.jpg') }}"></div>
                    <div class="card-body primary-shadow">
                        <div class="text-stroke-dark text-white display-2 fw-bold mb-3">01</div>
                        <h3 class="mb-3 h4">Transport</h3>
                        <p class="mb-0">Un charroi de transport rapide et bien organisé .</p>
                    <a href="{{ route('detailService',['id'=>"1"]) }}">Voir plus</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mt-1-9 wow fadeInUp" data-wow-delay="600ms">
                <div class="card card-style6">
                    <div class="card-img bg-img" data-overlay-dark="6" data-background="{{asset('assets/img/sante/douane.jpg') }}"></div>
                    <div class="card-body primary-shadow">
                        <div class="text-stroke-dark text-white display-2 fw-bold mb-3">02</div>
                        <h3 class="mb-3 h4">@lang("info.titre.douane")</h3>
                        <p class="mb-0">Nous faisons le dédouanement des marchandises en importation et en exportation.</p>
                    <a href="{{ route('detailService',['id'=>"3"]) }}">Voir plus</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mt-1-9 wow fadeInUp" data-wow-delay="200ms">
                <div class="card card-style6">
                    <div class="card-img bg-img" data-overlay-dark="6" data-background="{{asset('assets/img/sante/banniere.JPG') }}"></div>
                    <div class="card-body primary-shadow">
                        <div class="text-stroke-dark text-white display-2 fw-bold mb-3">03</div>
                        <h3 class="mb-3 h4">Santé</h3>
                        <p class="mb-0">Nous avons un centre hospitalier  qui fait la fierté du coin avec des services impeccables.</p>
                        <a href="{{ route('detailService',['id'=>"2"]) }}">Voir plus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- WHY CHOOSE US
================================================== -->
{{-- <section class="bg-img cover-background data-overlay-dark md mx-lg-6 wow fadeIn mb-5" data-wow-delay="200ms" data-overlay-dark="5" data-background="assets/img/bg/bg-04.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-xxl-5">
                <div class="bg-secondary p-1-9 p-sm-6 z-index-9 mx-lg-1-9">
                    <div class="title-style2 mb-1-9">
                        <span class="sub-title">made to your needs</span>
                        <h2 class="mb-0 h1 text-white">What We Offer You</h2>
                    </div>
                    <div class="d-flex justify-content-center mb-1-9">
                        <div class="flex-shrink-0 w-40px">
                            <i class="icon-puzzle display-16 text-white"></i>
                        </div>
                        <div class="flex-grow-1 ms-4 text-start">
                            <h4 class="h5 mb-2 text-white">Authorise Company</h4>
                            <p class="mb-0 text-white opacity9">Support the common sense execution of lawful and real.</p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="flex-shrink-0 w-40px">
                            <i class="icon-shield display-16 text-white"></i>
                        </div>
                        <div class="flex-grow-1 ms-4 text-start">
                            <h4 class="h5 mb-2 text-white">Finance Advices</h4>
                            <p class="mb-0 text-white opacity9">Cost to postponing monetary choices out helpless ones.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}


@endsection
