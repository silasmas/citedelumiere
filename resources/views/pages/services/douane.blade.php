<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 order-2 order-lg-1">
                <div class="pe-lg-4 pe-xl-5">
                    @include("parties.menulateral")


                    <div class="bg-img secondary-overlay cover-background rounded wow fadeInUp" data-wow-delay="200ms"
                        data-overlay-dark="85" data-background="{{ asset('assets/img/sante/home.jpg') }}">
                        <div class="position-relative z-index-9 text-center py-5 px-1-9">
                            <i class="fas fa-headset text-white mb-4 display-14"></i>
                            <h5 class="text-white mb-4">Comment pourrons-nous vous aider?</h5>
                            <div class="separator-line-horrizontal-full bg-white opacity4 mb-4"></div>
                            <ul class="text-center mb-0 list-unstyled ps-0">
                                <li class="text-white mb-2"><i class="fa fa-phone small text-white me-2"></i><a
                                        href="#!" class="text-white">+243 898 552 773</a></li>
                                <li class="text-white"><i class="fa fa-envelope-open small text-white me-2"></i><a
                                        href="#!" class="text-white">ptuzitana@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-8 order-1 order-lg-2 mb-5 mb-lg-0">

                <img src="{{$img1}}" class="mb-2-9 rounded wow fadeIn" data-wow-delay="100ms" alt="...">

                <div class="wow fadeIn" data-wow-delay="200ms">
                    <h2 class="mb-3">
                        Notre département de @lang("info.titre.douane")
                    </h2>
                    <p>
                        Notre département bénéficie d'une expertise démontrée par une connaissance approfondie des réglementations douanières nationales et internationales, ainsi qu'une expérience pratique dans le domaine. Nous traitons chaque transaction avec professionnalisme afin d'assurer des opérations douanières fluides et sans accroc. Nous accordons une importance primordiale à nos partenaires en leur offrant un service réactif et de haute qualité pour répondre efficacement à leurs besoins et préoccupations. Nos valeurs fondamentales sont la rapidité, l'honnêteté et la communication en temps réel avec nos clients.
                        Nous collaborons avec plusieurs partenaires tels que le commerce général, les supermarchés, les boulangeries, les sociétés d'importation, et bien d'autres encore.

                    </p>
                    <p class="mb-2-9">

                    </p>
                </div>

                <div class="row mb-2-9 mt-n4">
                    <div class="col-md-4 mt-4 wow fadeInUp" data-wow-delay="200ms">
                        <img src="{{ asset('assets/img/sante/d1.jpg') }}" class="rounded" alt="...">
                    </div>
                    <div class="col-md-4 mt-4 wow fadeInUp" data-wow-delay="300ms">
                        <img src="{{ asset('assets/img/sante/d2.jpg') }}" class="rounded" alt="...">
                    </div>
                    <div class="col-md-4 mt-4 wow fadeInUp" data-wow-delay="400ms">
                        <img src="{{ asset('assets/img/sante/d3.jpg') }}" class="rounded" alt="...">
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>

