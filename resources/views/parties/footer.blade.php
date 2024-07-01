<footer class="footer-style1 bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-1-9 mb-lg-0 wow fadeIn" data-wow-delay="200ms">
                <img src="{{ asset('assets/img/logos/logo-inner.png') }}" class="mb-4" alt="..." />
                <p class="text-white mb-1-9 w-xxl-85">
                    @lang('infos.adresse.slogan')
                </p>
                <div class="social-icons2">
                    <ul class="mb-0 ps-0">
                        <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#!"><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="pb-4 col-12 mb-1-9 wow fadeIn" data-wow-delay="300ms">
                        <div class="row">
                            <div class="mb-3 col-md-6 col-lg-3 mb-lg-0">
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <i class="ti-mobile display-20 text-secondary"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h4 class="mb-1 text-white h5">Phone</h4>
                                        <p class="mb-0 text-white opacity8 small">@lang("infos.adresse.phone") @lang("infos.adresse.phone2") </p>
                                        <p class="mb-0 text-white opacity8 small"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4 col-md-6 col-lg-4 mb-lg-0">
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <i class="ti-email display-20 text-secondary"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h4 class="mb-1 text-white h5">Email</h4>
                                        <p class="mb-0 text-white opacity8 small"> @lang("infos.adresse.email")</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-5">
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <i class="ti-map-alt display-20 text-secondary"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h4 class="mb-1 text-white h5">Location</h4>
                                        <p class="mb-0 text-white opacity8 small">
                                            @lang("infos.adresse.adresse")
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-sm-6 col-lg-4 mb-1-9 mb-lg-0 wow fadeIn" data-wow-delay="400ms">
                        <h3>About Us</h3>
                        <ul class="mb-0 ps-0">
                            <li><a href="services.html">Services</a></li>
                            <li><a href="team.html">Our Team</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-lg-4 mb-1-9 mb-lg-0 wow fadeIn" data-wow-delay="500ms">
                        <h3>Quick Link</h3>
                        <ul class="mb-0 ps-0">
                            <li><a href="portfolio.html">Portfolio</a></li>
                            <li><a href="our-core-values.html">Core Values</a></li>
                            <li><a href="blog-post.html">Blog Post</a></li>
                        </ul>
                    </div> --}}
                    {{-- <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="600ms">
                        <h3>Newsletter</h3>
                        <form class="quform" action="quform/newsletter-two.php" method="post"
                            enctype="multipart/form-data" onclick="">

                            <div class="quform-elements">

                                <div class="row">
                                    <!-- Begin Text input element -->
                                    <div class="col-md-12">
                                        <div class="mb-0 quform-element">
                                            <div class="quform-input">
                                                <input class="form-control" id="email_address" type="text"
                                                    name="email_address" placeholder="Subscribe with us" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Text input element -->

                                    <!-- Begin Submit button -->
                                    <div class="mt-2 col-md-12">
                                        <div class="quform-submit-inner">
                                            <button class="m-0 butn-style1 secondary w-100"
                                                type="submit">Subscribe</button>
                                        </div>
                                        <div class="mt-3 quform-loading-wrap text-start"><span
                                                class="quform-loading"></span></div>
                                    </div>
                                    <!-- End Submit button -->
                                </div>
                            </div>
                        </form>
                    </div> --}}
                </div>
            </div>

        </div>

    </div>

    <div class="footer-bar wow fadeIn" data-wow-delay="200ms">
        <div class="container">
            <div class="row">
                <div class="text-center col-lg-12">
                    <p>&copy; <span class="current-year"></span>Copyright {{ date('Y') }} Cité de lumière | Design By <a
                            href="silasmas.com" target="_blank" class="text-secondary text-primary-hover">SDev</a></p>
                </div>
            </div>
        </div>
    </div>

</footer>
