
<section class="page-title-section2 top-position1 bg-img cover-background text-start" data-overlay-dark="7"
data-background="assets/img/banner/banniere.jpg">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-7 col-xxl-5">
                <div class="title-style3">
                    <span>
                        @switch(Route::current()->getName())
                            @case("home")
                                Accueil
                                @break
                            @case("about")
                                Qui sommes-nous
                                @break
                            @case("services")
                                Nos Services
                                @break
                            @case("contact")
                                Nous contacter
                                @break

                            @default

                        @endswitch
                    </span>
                </div>
                <h1 class="mb-0 text-white text-shadow-large">
                    @switch(Route::current()->getName())
                    @case("home")

                        @break
                    @case("about")
                        Nous vous parlons de qui nous sommes.
                        @break
                    @case("services")
                        Nous vous présentons nos différents services.
                        @break
                    @case("contact")
                        Nous vous informons sur les possibilités de nous avoir.
                        @break

                    @default

                @endswitch
                </h1>
            </div>
        </div>
    </div>
</section>
