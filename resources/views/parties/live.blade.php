
@if (Route::current()->getName()=="home" && $live!=null)
<section class="mx-auto bg-img cover-background z-index-1 w-lg-95 w-xxl-85 wow fadeIn" data-wow-delay="100ms" data-overlay-dark="55" data-background="{{ "storage/".$live->cover }}">
    <div class="container">
        <div class="text-center row justify-content-center">
            <div class="col-md-9 col-lg-8 col-xl-7 col-xxl-6">
                <div class="align-middle d-inline-block mb-2-2 mb-lg-2-9">
                    <a class="popup-social-video video_btn small" href="{{ $live->urlvideo }}"><i class="fas fa-play"></i></a>
                </div>
                <h2 class="mb-0 text-white h1">Nous sommes présentement en live <span class="text-secondary">Merci de partager</span></h2>
            </div>
        </div>
    </div>
</section>
@endif
