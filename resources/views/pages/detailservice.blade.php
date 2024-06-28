@extends("layouts.template",['titre'=>'Detail'])

@section("content")
@include("parties.bannier")

@switch($i)
@case(1)
@include("pages.services.transport")
@break
@case(2)
@include("pages.services.sante")
@break
@case(3)
@include("pages.services.douane")
@break

@default

@endswitch
<section class="bg-img cover-background mx-auto z-index-1 mx-auto w-lg-95 w-xxl-85 wow fadeIn mb-5" data-wow-delay="100ms"
    data-overlay-dark="55" data-background="{{asset('assets/img/sante/bacvideo.JPG')}}">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-9 col-lg-8 col-xl-7 col-xxl-6">
                <div class="d-inline-block align-middle mb-2-2 mb-lg-2-9">
                    <a class="popup-social-video video_btn small" href="https://www.youtube.com/watch?v=CiBu9_lkysA"><i
                            class="fas fa-play"></i></a>
                </div>
                <h2 class="h1 text-white mb-0">Nos services sont à votre disposition <span class="text-secondary">24/7</span>
                </h2>
            </div>
        </div>
    </div>
</section>
@endsection
