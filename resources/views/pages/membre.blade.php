@extends("layouts.template",['titre'=>'Membre'])


@section("content")
@include("parties.bannier")

<section class="md" style="height: 100vh;">
    <div class="container h-100">
        <div class="bg-img p-1-9 p-md-7 border-radius-10 cover-background position-relative z-index-1"
        style="background-image: url('assets/img/banner/membres.jpg');
                    background-size: cover;
                    background-position: center;
                    height: 100%;">
            <div class="row">
                <div class="col-lg-9 col-xxl-7">
                    <div class="mb-4 title-style3">
                        {{-- <span>titre </span>
                        <h2 class="mb-0 h1">Devenir membre</h2> --}}
                    </div>
                    {{-- <p class="mb-2-3">Lorsque vous venez en coaching ou en conseil, nous travaillons avec vous, votre situation /
                        problème et nous trouverons ensemble la meilleure solution pour vous. Tous les outils que nous utiliserons</p> --}}
                    <br><br><br>
                    <br><br>
                        <a href="{{ route('register') }}" class="mt-10 text-white butn-style1">Commencer</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container z-index-1 position-relative">
        <div class="row align-items-center">
            <div class="col-xl-5 mb-1-9 mb-xl-0 wow fadeIn" data-wow-delay="200ms">
                <div class="pe-xl-6">
                    <div class="title-style3 mb-1-9 mb-lg-2-9">
                        <span>Programme de discipolat</span>
                        <h2 class="mb-0 h1">Nous faisons des disciple</h2>
                    </div>
                    <div class="d-flex mb-1-9">
                        <div class="flex-shrink-0">
                            <i class="p-2 text-white ti-check display-30 bg-secondary rounded-circle"></i>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h4 class="h6">Skilled Personal</h4>
                            <p class="mb-0 small">There are many variations of passages of Lorem Ipsum available, but the majority have suffered.</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="flex-shrink-0">
                            <i class="p-2 text-white ti-check display-30 bg-secondary rounded-circle"></i>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h4 class="h6">Modern Equipment</h4>
                            <p class="mb-0 small">There are many variations of passages of Lorem Ipsum available, but the majority have suffered.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-7">
                <div class="row">
                    <div class="col-lg-6 mb-1-9 mb-lg-0 mt-lg-2-3 wow fadeInUp" data-wow-delay="200ms">
                        <div class="bg-white border-radius-10 p-1-9 pricing-style1 ms-3">
                            <h3 class="mb-0 h2">Niveau 1</h3>
                            <h4 class="pb-4 mt-4 mb-1-9 border-bottom">Les fondamentaux</h4>
                            <ul class="list-style1 mb-1-9">
                                <li>Chaiptre 1</li>
                                <li>Chapitre 2</li>
                                <li>Chapitre 3</li>
                                <li>Chapitre 4</li>
                            </ul>
                            <a href="{{ route('login') }}" class="butn-style1 small w-100">Commencer</a>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="bg-dark border-radius-10 p-1-9 pricing-style1 ms-3">
                            <h3 class="mb-0 h2 bg-secondary">Niveau 2</h3>
                            <h4 class="pb-4 mt-4 text-white mb-1-9 border-bottom border-color-light-white">La suite</h4>
                            <ul class="list-style1 secondary-color mb-1-9">
                                <li class="text-white">Chapitre 1</li>
                                <li class="text-white">Chapitre 2</li>
                                <li class="text-white">Chapitre 3</li>
                                <li class="text-white">Chapitre 4</li>
                            </ul>
                            <a href="{{ route('login') }}" class="butn-style1 secondary w-100">Commencer</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img src="{{ asset('assets/img/shape/bg-shape1.png') }}" class="bottom-0 position-absolute start-0" alt="...">
</section>
@endsection
