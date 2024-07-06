@extends('client.connecte.templates.main_template',['titre'=>"Detail formateur"])


@section('content')
<section class="instructor-header-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-xl-6 order-last order-lg-first text-md-start text-center pt-4 ps-0">
                <h4 class="user-type">Formateur</h4>
                <h1 class="instructor-name">{{ $formateur->prenom??"".' '.$formateur->name }}</h1>
                <h2 class="instructor-title"></h2>
                <p class="text-12px mt-3">
                    1 Students enrolled
                </p>
            </div>
            <div class="col-lg-4 col-xl-3 order-first order-lg-last text-center">
                <img class="radius-10" width="200" height="200" src="{{ asset('assets/images/form/' . $formateur->profil) }}" alt="" class="img-fluid" />
            </div>
        </div>
    </div>
</section>
<section class="instructor-details-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="order-last order-lg-first col-lg-7 col-xl-6 bg-white radius-8 py-3 px-4">
                <div class="w-100">
                    <h4 class="fw-700">Apropo de moi</h4>

                    <div class="biography-content-box view-more-parent">
                        <div class="view-more" onclick="viewMore(this,'hide')"><b>Voir plus</b></div>
                        <div class="biography-content">
                            <p xss="removed">
                              {{ $formateur->biographie }}.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-1 d-none d-lg-block mw-30px"></div>
            <div class="order-first order-lg-last col-lg-4 col-xl-3">
                <div class="row bg-white px-3 py-4 radius-8">
                    <div class="col-6 text-center">
                        <h5 class="fw-700">0</h5>
                        <p class="text-12px fw-700 text-muted">Participants</p>
                    </div>
                    <div class="col-6 text-center">
                        <h5 class="fw-700">{{ $formateur->formations->count() }}</h5>
                        <p class="text-12px fw-700 text-muted">Conférence{{s($formateur->formations->count()) }}</p>
                    </div>
                    {{-- <div class="col-4 text-center">
                        <h5 class="fw-700">4</h5>
                        <p class="text-12px fw-700 text-muted">Reviews</p>
                    </div> --}}

                    <div class="col-12">
                        <div class="instructor-social-links">
                            <a href="https://www.facebook.com/dave-franco" target="_blank"><i class="fab fa-facebook-f"></i> Facebook</a>

                            <a href="https://www.twitter.com/dave-franco" target="_blank"><i class="fab fa-twitter"></i> Twitter</a>

                            <a href="https://www.linkedin.com/dave-franco" target="_blank"><i class="fab fa-linkedin-in"></i> Linkedin</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-12 col-xl-10">
            <h3 class="course-carousel-title mb-4 px-2">Mes Formations</h3>
            <div class="course-carousel">
                @forelse ($formateur->formations as $s)
                <div class="course-box-wrap">
                    <a href="{{ route('formationDetail', ['id'=>$s->id]) }}" class="has-popover">
                        <div class="course-box">
                            <div class="course-image">
                                <img src="{{ asset('assets/images/form/' . $s->cover) }}" alt="" class="img-fluid" />
                            </div>
                            <div class="course-details">
                                <h5 class="title">{{ $s->title }}
                                    </h5>
                                <div class="rating">
                                    <div class="d-inline-block">
                                        {{-- <span class="text-dark ms-1 text-15px">(5)</span> --}}
                                        <span class="text-dark text-12px text-muted">
                                            {{ Str::limit($s->description, 50, '...') }}
                                        </span>
                                    </div>
                                </div>
                                <div class="d-flex text-dark">
                                    <div class="">
                                        <i class="far fa-clock text-14px"></i>
                                        <span class="text-muted text-12px">
                                            {{ \Carbon\Carbon::parse($s->date_debut)->isoFormat('LLL') }}
                                        </span>
                                    </div>
                                    <div class="ms-3">
                                        <i class="far fa-list-alt text-14px"></i>
                                        <span class="text-muted text-12px">
                                            {{ $s->categorie=="atelier"?"Atelier":"Formation" }}
                                        </span>
                                    </div>
                                </div>

                                {{-- <div class="row mt-3">
                                    @if ($s->type == 'payant')
                                    @if ($livep->pluck('id')->contains($s->id))
                                        <div class="col-6">
                                            <a href="{{ route('viewLive', ['id' => $s->id]) }}">
                                                <span onclick="handleCartItems(this)"
                                                    class="">
                                                    <span
                                                        class="badge badge-sub-warning text-11px">@lang('general.autre.payer')</span>
                                                </span>
                                            </a>
                                        </div>
                                    @else
                                        @if ($panier != null)
                                            @if ($panier->pluck('id')->contains($s->id))
                                                <div class="col-6" style="cursor: pointer;"
                                                onclick="event.preventDefault(); event.stopPropagation(); $(location).attr('href', '{{ route('panier') }}');">
                                                    <span class="badge badge-sub-warning text-11px">
                                                        @lang('general.autre.seePanier')
                                                        <i class="fas fa-shopping-cart"></i>
                                                    </span>
                                                </div>
                                            @else
                                                <div class="col-4"></div>
                                                <div class="col-8 text-end">
                                                    <button class="brn-compare-sm"
                                                        onclick="addToCard(this)"
                                                        id="{{ $s->id }}">
                                                        @lang('general.autre.addPanier')
                                                        <i class="fas fa-shopping-cart"></i>
                                                    </button>
                                                </div>
                                            @endif
                                        @else
                                            <div class="col-4"></div>
                                            <div class="col-8 text-end">
                                                <span class="brn-compare-sm"
                                                    style="cursor: pointer;"
                                                    onclick="addToCard(this)"
                                                    id="{{ $s->id }}">
                                                    @lang('general.autre.addPanier')
                                                    <i class="fas fa-shopping-cart"></i>
                                                </span>
                                            </div>
                                        @endif
                                    @endif
                                @else
                                    @if ($livep != null)
                                        @if ($livep->pluck('id')->contains($s->id))
                                            <div class="col-6">
                                                <span onclick="annulReservation(this)"
                                                    style="cursor: pointer;"
                                                    id="{{ $s->id }}"
                                                    class="badge badge-sub-warning text-11px">
                                                    @lang('general.autre.payer')
                                                </span>
                                            </div>
                                        @else
                                            <div class="col-2"></div>
                                            <div class="col-10 text-end">
                                                <button onclick="confirmPlace(this)"
                                                    id="{{ $s->id }}"
                                                    class="brn-compare-sm">
                                                    @lang('general.autre.livefree')
                                                </button>
                                            </div>
                                        @endif
                                    @else
                                        <div class="col-2"></div>
                                        <div class="col-10 text-end">
                                            <button onclick="confirmPlace(this)"
                                                id="{{ $s->id }}" class="brn-compare-sm">
                                                @lang('general.autre.livefree')
                                            </button>
                                        </div>
                                    @endif
                                @endif
                                </div> --}}

                                <hr class="divider-1" />

                                <div class="d-block">
                                    <div class="floating-user d-inline-block">
                                        @forelse ($s->formateur as $f)
                                            @if ($loop->first)
                                            <img
                                            style="margin-left: 0px;"
                                            class="position-absolute"
                                            src="{{ asset('assets/images/form/' . $f->profil) }}"
                                            width="30px" height="30px"
                                            data-bs-toggle="tooltip"
                                            data-bs-placement="top"
                                            title="{{ $f->prenom??""." ".$f->nom }}"
                                            onclick="event.preventDefault(); $(location).attr('href', '{{ route('formateur', ['id' => $f->id]) }}');"
                                        />
                                            @else
                                            <img
                                            style="margin-left: 17px;"
                                            class="position-absolute"
                                            src="{{ asset('assets/images/form/' . $f->profil) }}"
                                            width="30px" height="30px"
                                            data-bs-toggle="tooltip"
                                            data-bs-placement="top"
                                            title="{{ $f->prenom??""." ".$f->nom }}"
                                            onclick="event.preventDefault(); $(location).attr('href', '{{ route('formateur', ['id' => $f->id]) }}');"
                                        />
                                            @endif
                                        @empty

                                        @endforelse


                                    </div>

                                    <p class="price text-right d-inline-block float-end">
                                        Free
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @empty

                @endforelse

            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(function () {
        if ($(".course-carousel")[0]) {
            $(".course-carousel").slick({
                dots: false,
                infinite: false,
                speed: 300,
                slidesToShow: 3,
                slidesToScroll: 3,
                swipe: false,
                touchMove: false,
                responsive: [
                    { breakpoint: 840, settings: { slidesToShow: 2, slidesToScroll: 2 } },
                    { breakpoint: 620, settings: { slidesToShow: 1, slidesToScroll: 1 } },
                ],
            });
        }
    });
</script>
@endsection
@section("autres_script")
<script type="text/javascript">
    $(function () {
        $('[data-bs-toggle="tooltip"]').tooltip();
    });
</script>

<script type="text/javascript">
    function isTouchDevice() {
        return "ontouchstart" in window || navigator.maxTouchPoints > 0 || navigator.msMaxTouchPoints > 0;
    }

    function viewMore(element, visibility) {
        if (visibility == "hide") {
            $(element).parent(".view-more-parent").addClass("expanded");
            $(element).remove();
        } else if ($(element).hasClass("view-more")) {
            $(element).parent(".view-more-parent").addClass("expanded has-hide");
            $(element).removeClass("view-more").addClass("view-less").html("- View less");
        } else if ($(element).hasClass("view-less")) {
            $(element).parent(".view-more-parent").removeClass("expanded has-hide");
            $(element).removeClass("view-less").addClass("view-more").html("+ View more");
        }
    }

    //Event call after loading page
    document.addEventListener(
        "DOMContentLoaded",
        function () {
            setTimeout(function () {
                $(".animated-loader").hide();
                $(".shown-after-loading").show();
            });
        },
        false
    );
</script>

@endsection
