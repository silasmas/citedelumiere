@extends("layouts.template",['titre'=>'Programmes'])


@section("content")
@include("parties.bannier")
 <!-- SERVICES
        ================================================== -->
        <section>
            <div class="container position-relative z-index-9">
                <div class="text-center title-style2 mb-2-9 mb-lg-6 wow fadeIn" data-wow-delay="100ms">
                    <span class="sub-title">made to your needs</span>
                    <h2 class="mb-0 h1">What We Offer You</h2>
                </div>
                <div class="row g-xl-5 mt-n1-9">
                    <div class="col-md-6 col-lg-4 mt-1-9 wow fadeInUp" data-wow-delay="200ms">
                        <div class="card card-style6">
                            <div class="card-img bg-img" data-overlay-dark="6" data-background="assets/img/content/service-01.jpg"></div>
                            <div class="card-body primary-shadow">
                                <div class="mb-3 text-white text-stroke-dark display-2 fw-bold">01</div>
                                <h3 class="mb-3 h4">@lang("infos.culte.p1")</h3>
                                <p class="mb-3 lh-lg">We offers plan and assemble managing for you from startups to the last creation or closing creation.</p>
                                <a href="marketing-research.html">read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-1-9 wow fadeInUp" data-wow-delay="400ms">
                        <div class="card card-style6">
                            <div class="card-img bg-img" data-overlay-dark="6" data-background="assets/img/content/service-02.jpg"></div>
                            <div class="card-body primary-shadow">
                                <div class="mb-3 text-white text-stroke-dark display-2 fw-bold">02</div>
                                <h3 class="mb-3 h4">@lang("infos.culte.p2")</h3>
                                <p class="mb-3 lh-lg">We offers plan and assemble managing for you from startups to the last creation or closing creation.</p>
                                <a href="business-analysis.html">read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-1-9 wow fadeInUp" data-wow-delay="600ms">
                        <div class="card card-style6">
                            <div class="card-img bg-img" data-overlay-dark="6" data-background="assets/img/content/service-03.jpg"></div>
                            <div class="card-body primary-shadow">
                                <div class="mb-3 text-white text-stroke-dark display-2 fw-bold">03</div>
                                <h3 class="mb-3 h4">@lang("infos.culte.P3")</h3>
                                <p class="mb-3 lh-lg">We offers plan and assemble managing for you from startups to the last creation or closing creation.</p>
                                <a href="investment-plan.html">read more</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


@endsection
