@extends("layouts.template",['titre'=>'Contact'])


@section("content")
@include("parties.bannier")

<!-- CONTACT INFO
        ================================================== -->
<section class="bg-light-gray">
    <div class="container">
        <div class="text-center title-style3 mb-2-9 mb-lg-6 wow fadeIn" data-wow-delay="100ms">
            <span>Nos contact</span>
            <h2 class="mb-0 h1">Nous sommes là pour vous aider</h2>
        </div>
        <div class="row mt-n4">
            <div class="mt-4 col-md-6 col-xl-4 wow fadeInUp" data-wow-delay="200ms">
                <div class="border-0 card card-style10 border-radius-10 ms-4 h-100">
                    <div class="mt-4 card-heading position-relative">
                        <h3 class="mb-0 text-white h5">Adresse</h3>
                        <i class="text-white icon-map display-7 opacity2 position-absolute top-n10 end-0"></i>
                    </div>
                    <div class="card-body p-1-9">
                        <p class="mb-0">
                          @lang("infos.adresse.adresse")
                        </p>
                    </div>
                </div>
            </div>
            <div class="mt-4 col-md-6 col-xl-4 wow fadeInUp" data-wow-delay="400ms">
                <div class="border-0 card card-style10 border-radius-10 ms-4 h-100">
                    <div class="mt-4 card-heading position-relative">
                        <h3 class="mb-0 text-white h5">Téléphone</h3>
                        <i class="text-white icon-mobile display-7 opacity2 position-absolute top-n10 end-0"></i>
                    </div>
                    <div class="card-body p-1-9">
                        <p class="mb-0">@lang("infos.adresse.phone")</p>
                        <p class="mb-0">@lang("infos.adresse.phone2")</p>
                        {{-- <p class="mb-0">(+44) 123 456 789</p> --}}
                    </div>
                </div>
            </div>
            <div class="mt-4 col-md-6 col-xl-4 wow fadeInUp" data-wow-delay="600ms">
                <div class="border-0 card card-style10 border-radius-10 ms-4 h-100">
                    <div class="mt-4 card-heading position-relative">
                        <h3 class="mb-0 text-white h5">Email</h3>
                        <i class="text-white icon-chat display-7 opacity2 position-absolute top-n10 end-0"></i>
                    </div>
                    <div class="card-body p-1-9">
                        <p class="mb-0">@lang("infos.adresse.email")</p>
                        {{-- <p class="mb-0">info@yourdomain.com</p> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTACT FORM
        ================================================== -->
<section class="overflow-visible">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 wow fadeIn" data-wow-delay="400ms">
                <div class="bg-white rounded primary-shadow p-1-6 p-sm-2-9 z-index-9 position-relative">
                    <h2 class="mb-1-9">Écrivez-nous</h2>
                    @if ($errors->any())
                    @foreach ($errors->all() as $error)
                    <div class="alert alert-danger alert-dismissible">
                        <ul>
                            <strong>Erreur!</strong>
                            <li>{{ $error }}</li>
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endforeach
                    @endif
                    @if (session()->has('msg'))
                    <div class="alert alert-success alert-dismissible">
                        <strong>Message : </strong> {{ session()->get('msg') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <form class="contact quform" action="" method="post">
                        @csrf
                        {{-- <div class="quform-elements">
                            <div class="row">

                                <!-- Begin Text input element -->
                                <div class="col-md-6">
                                    <div class="quform-element form-group">
                                        <label for="name">Your Name <span class="quform-required">*</span></label>
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
                                        <label for="email">Your Email <span class="quform-required">*</span></label>
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
                                        <label for="subject">Your Subject <span class="quform-required">*</span></label>
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
                                        <label for="phone">Contact Number</label>
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
                                        <label for="message">Message <span class="quform-required">*</span></label>
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
                                                    <img src="quform/images/captcha/courier-new-light.png" alt="...">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Captcha element -->

                                <!-- Begin Submit button -->
                                <div class="col-md-12">
                                    <div class="quform-submit-inner">
                                        <button class="butn-style1" type="submit"><span>Send Message</span></button>
                                    </div>
                                    <div class="quform-loading-wrap text-start"><span class="quform-loading"></span>
                                    </div>
                                </div>
                                <!-- End Submit button -->

                            </div>
                        </div> --}}
                        <div class="quform-elements">
                            <div class="row">
                                <!-- Begin Text input element -->
                                <div class="col-md-6">
                                    <div class="quform-element form-group">
                                        <div class="quform-input">
                                            <input class="form-control" id="nom" type="text" name="nom"
                                                placeholder="Votre nom" />
                                        </div>
                                    </div>

                                </div>
                                <!-- End Text input element -->

                                <!-- Begin Text input element -->
                                <div class="col-md-6">
                                    <div class="quform-element form-group">
                                        <div class="quform-input">
                                            <input class="form-control" id="email" type="text" name="email"
                                                placeholder="Votre e-mail" />
                                        </div>
                                    </div>
                                </div>
                                <!-- End Text input element -->

                                <!-- Begin Text input element -->
                                <div class="col-md-6">
                                    <div class="quform-element form-group">
                                        <div class="quform-input">
                                            <input class="form-control" id="objet" type="text" name="objet"
                                                placeholder="Votre objet du message" />
                                        </div>
                                    </div>

                                </div>
                                <!-- End Text input element -->

                                <!-- Begin Text input element -->
                                <div class="col-md-6">
                                    <div class="quform-element form-group">
                                        <div class="quform-input">
                                            <input class="form-control" id="phone" type="text" name="phone"
                                                placeholder="Votre numero de téléphone" />
                                        </div>
                                    </div>

                                </div>
                                <!-- End Text input element -->

                                <!-- Begin Textarea element -->
                                <div class="col-md-12">
                                    <div class="quform-element form-group">
                                        <div class="quform-input">
                                            <textarea class="form-control h-100" id="message" name="message" rows="3"
                                                placeholder="Ecrivez votre message"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Textarea element -->
                                <!-- Begin Submit button -->
                                <div class="col-md-12">
                                    <div class="quform-submit-inner">
                                        <button class="butn" type="submit"><span>Envoyer</span></button>
                                    </div>
                                    <div class="quform-loading-wrap text-start"><span class="quform-loading"></span>
                                    </div>
                                </div>
                                <!-- End Submit button -->

                            </div>

                        </div>
                    </form>
                    <img src="img/shape/03.png" class="position-absolute top-n5 right-n5" alt="...">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTACT MAP
        ================================================== -->
<iframe class="map" src="https://maps.google.com/maps?q=london&t=&z=13&ie=UTF8&iwloc=&output=embed" scrolling="no"
    marginheight="0" marginwidth="0"></iframe>

@endsection
