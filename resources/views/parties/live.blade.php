@if (Route::current()->getName()=="home" && $live!=null)

{{-- <section class="mx-auto bg-img cover-background z-index-1 w-lg-95 w-xxl-85 wow fadeIn" data-wow-delay="100ms"
    data-overlay-dark="55" data-background="{{asset(" storage/".$live->cover)}}">
    <div class="container">
        <div class="text-center row justify-content-center">
            <iframe
                src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fweb.facebook.com%2FPasteur.NomaQ%2Fvideos%2F8163546147070890%2F&show_text=false&width=560&t=0"
                width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"
                allowFullScreen="true"></iframe>
            <div class="col-md-9 col-lg-8 col-xl-7 col-xxl-6">
                <div class="align-middle d-inline-block mb-2-2 mb-lg-2-9">
                    <a class="popup-social-videodhfh video_btnsd small" id="openPopup" href="{{ $live->urlvideo }}"><i
                            class="fas fa-play"></i></a>
                    <button id="openPopup">Regarder la vidéo</button>
                </div>
                <h2 class="mb-0 text-white h1">Nous sommes en live dans notre {{ $live->type }}
                    <span class="text-secondary">Merci de partager</span>
                </h2>
            </div>
        </div>
    </div>
</section> --}}
<section class="mx-auto bg-img cover-background z-index-1 w-lg-95 w-xxl-85 wow fadeIn">
    <div class="container">
        <h5>{{ $live->titre }}</h5>
        <div class="text-center row justify-content-center">
            {!! $live->urlvideo !!}

        </div>
    </div>
</section>


@endif
