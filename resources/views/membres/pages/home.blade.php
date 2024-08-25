@extends('membres.templates.main_template', ['titre' => 'Home'])

@section('content')
<style>
    .active {
        background-color: #ec5252;
        border: 1px solid #ec5252;
        text-decoration: none;
        color: #FFF;
    }

    .active .category-title p {
        color: #efdcdc;
    }

    /* .non-clicable {
        pointer-events: none;
    } */

    /* .content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        padding: 10px;
        border: 1px solid #ccc;
    } */

    /* .container:hover .content {
        display: block;
    }
    #text {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  padding: 10px;
  border: 1px solid #ccc;
}

.show-text #text {
  display: block;
} */
</style>
<section class="home-banner-area" id="home-banner-area"
    style="background-image: url('assets/membres/images/imgs/IMG_4863-min.jpg'); background-position: right; background-repeat: no-repeat; padding: 100px 0 75px; background-size: auto 100%; color: #fff;">
    <div class="cropped-home-banner"></div>
    <div class="container-xl">
        <div class="row">
            <div class="col position-relative">
                <div class="home-banner-wrap">
                    <h2 class="fw-bold">Une armée des intimes de l'Éternel</h2>
                    <p>Study any topic, anytime. explore thousands of courses for the lowest price ever!</p>
                    <form class="" action="assets/membres/images/home/search" method="get">
                        <div class="input-group">
                            <input type="text" class="form-control" name="query"
                                placeholder="What do you want to learn?" />
                            <div class="input-group-append p-6px bg-white">
                                <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        var border_bottom = $(".home-banner-wrap").height() + 242;
    $(".cropped-home-banner").css("border-bottom", border_bottom + "px solid #f1f7f8");

    mRight = Number("1.5") * $(".home-banner-area").outerHeight();
    $(".cropped-home-banner").css("right", mRight - 65 + "px");
    </script>
</section>

<section class="home-fact-area">
    <div class="container-lg">
        <div class="row">
            <div class="col-md-4 d-flex">
                <div class="home-fact-box mr-md-auto mr-auto">
                    <i class="fas fa-bullseye float-start"></i>
                    <div class="text-box">
                        <h4>14 Online courses</h4>
                        <p>Explore a variety of fresh topics</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 d-flex">
                <div class="home-fact-box mr-md-auto mr-auto">
                    <i class="fa fa-check float-start"></i>
                    <div class="text-box">
                        <h4>Expert instruction</h4>
                        <p>Find the right course for you</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 d-flex">
                <div class="home-fact-box mr-md-auto mr-auto">
                    <i class="fa fa-clock float-start"></i>
                    <div class="text-box">
                        <h4>Lifetime access</h4>
                        <p>Learn on your schedule</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mb-5">
    <div class="container-lg">
        <h3 class="course-carousel-title my-4">Catégories</h3>
        <div class="row justify-content-center">
            @forelse ($categories as $cat)
            <div class="col-md-6 col-lg-4 col-xl-3 mb-3">
                <a href=""
                    class="top-categories {{ session()->has('categorie') && session()->get('categorie')[0]->categorie==$cat->categorie?"
                    active":"" }} {{ $loop->first?"active":"" }}">
                    <div class="category-icon">
                        <img src="{{ asset('assets/images/favicon/favicon.ico') }}" alt="" width="28">
                    </div>
                    <div class="category-title">
                        @php
                            $nbr=count($cat->formations);
                        @endphp
                        {{ $cat->titre}}
                        <p>{{ $nbr}} Formation{{s($nbr)}}</p>
                    </div>
                </a>
            </div>
            @empty

            @endforelse

        </div>
    </div>
</section>

@if (session()->has('categorie') && session()->get('categorie'))
<section class="course-carousel-area" id="formations">
    <div class="container-lg">
        <div class="row">
            <div class="col">
                <h3 class="course-carousel-title mb-4">Fromations
                    <p class="course-carousel-title mb-4 home-fact-area text-center">{{
                        session()->get('categorie')->count() }} Formation{{ s(session()->get('categorie')->count()) }} trouvée
                        pour la catégorie <b>{{ session()->get('categorie')[0]->categorie }}</b> </p>
                </h3>
                <!-- page loader -->
                <div class="animated-loader">
                    <div class="spinner-border text-secondary" role="status"></div>
                </div>

                <div class="course-carousel shown-after-loading" style="display: none;">
                    @forelse (session()->get('categorie') as $f)

                    <div class="course-box-wrap {{ $f->access==" 0"?"non-clicable":""}}">
                        <a href="{{ route('formationDetail',['id'=>$f->id]) }}" class="has-popover">
                            <div class="course-box">
                                <div class="course-image">
                                    <img src="{{ asset('assets/images/form/'.$f->cover) }}" alt="" class="img-fluid" />
                                </div>
                                <div class="course-details">
                                    <h5 class="title">{{ $f->title }}</h5>

                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <div class="d-inline-block">
                                            <span class="text-dark ms-1 text-15px">(5)</span>
                                            <span class="text-dark text-12px text-muted ms-2">(1 Reviews)</span>
                                        </div>
                                    </div>
                                    <div class="d-flex text-dark">
                                        <div class="">
                                            <i class="far fa-clock text-14px"></i>
                                            {{-- <span class="text-muted text-12px">{{ formatted($chapitres) }} Hours</span> --}}
                                        </div>
                                        <div class="ms-3">
                                            <i class="far fa-list-alt text-14px"></i>
                                            <span class="text-muted text-12px">15 Lectures</span>
                                        </div>
                                    </div>

                                    <hr class="divider-1" />

                                    <div class="d-block">
                                        <div class="floating-user d-inline-block">
                                            @forelse ($f->formateur as $fr)
                                            @if ($loop->first)
                                            <img style="margin-left: 0px; width: 30px; height: 30px;"
                                                class="position-absolute"
                                                src="{{asset("assets/images/form/".$fr->profil)}}" alt="user_image"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="{{ $fr->prenom . ' ' . $fr->name}}"
                                            onclick="event.preventDefault();
                                            $(location).attr('href','{{route('formateur', ['id' => $fr->id]) }}');"/>
                                            @else
                                            <img style="margin-left: 17px; width: 30px; height: 30px;"
                                                class="position-absolute"
                                                src="{{ asset("assets/images/form/".$fr->profil) }}"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="{{ $fr->prenom . ' ' . $fr->name }}"
                                            onclick="event.preventDefault(); $(location).attr('href', '{{ route('formateur', ['id' => $fr->id]) }}')" />
                                            @endif
                                            @empty
                                            @endforelse
                                        </div>

                                        <p class="price text-right d-inline-block float-end">Free</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <div class="webui-popover-content">
                            <div class="course-popover-content">
                                <div class="last-updated">Date Publication, {{
                                    \Carbon\Carbon::parse($f->updated_at)->isoFormat('LL')}}</div>

                                <div class="course-title">
                                    <a class="text-decoration-none text-15px" href="">
                                        {{ \Carbon\Carbon::parse($f->datePublication)->isoFormat('LL') }}
                                    </a>
                                </div>
                                <div class="course-meta">
                                    <span class=""><i class="fas fa-play-circle"></i> {{ $f->chapitres->count() }}
                                        Chapitre(s) </span>
                                    {{-- <span class=""><i class="far fa-clock"></i> {{ formatted($chapitres)}} </span> --}}
                                    <span class=""><i class="fas fa-closed-captioning"></i>Français</span>
                                </div>
                                <div class="course-subtitle">{{ $f->title }}</div>
                                <div class="what-will-learn">
                                    <ul>
                                        @forelse ($f->chapitre as $ch)
                                        <li>{{ $ch->titre.' ('.$ch->nbrHeure.')' }}</li>
                                        @empty

                                        @endforelse
                                    </ul>
                                </div>
                                <div class="popover-btns">
                                    @if (checkStepForm($f->id))
                                    <a href="{{route('cours',['id'=>$f->id])}}" class="btn red radius-10"
                                        onclick="handleEnrolledButton()">
                                        @if (checkStepForm($f->id)=="en cours")
                                        @lang('general.autre.continuer')
                                        @else
                                        @lang('general.autre.btnfini')
                                        @endif
                                    </a>
                                    @else
                                    <a href="{{ route('beginForm',['id'=>$f->id]) }}" onclick="handleEnrolledButton()" class="btn green radius-10">Commencer</a>
                                    {{-- <a href="{{ route('beginForm',['id'=>$f->id]) }}" class="btn green radius-10"
                                        onclick="handleEnrolledButton()">Commecer</a> --}}
                                    @endif
                                    <button type="button" class="wishlist-btn" title="Add to wishlist"
                                        onclick="handleWishList(this)" id="{{$f->id }}">
                                        <i class="fas fa-heart"
                                            @if($userForm->favorie->pluck('formation_id')->contains($f->id))
                                            style="color:#ec5252" @endif></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                    @empty

                    @endforelse
                </div>
            </div>
        </div>
        @if ($formations->count() > 0)
        <a href="{{ route('allform') }}" class="btn btn-plus">Voir toutes les formations <i
                class="bi bi-arrow-right"></i></a>
        @endif
    </div>
</section>
@endif
<section class="course-carousel-area">
    <div class="container-lg">
        <div class="row">
            <div class="col">
                <h3 class="course-carousel-title mb-4">Nos cours</h3>

                <!-- page loader -->
                <div class="animated-loader">
                    <div class="spinner-border text-secondary" role="status"></div>
                </div>

                <div class="course-carousel shown-after-loading" style="display: none;">

                    @forelse ($formations as $f)
                    <div class="course-box-wrap {{ $f->access==" 0"?"non-clicable":""}}">
                        <a href="{{ route('formationDetail',['id'=>$f->id]) }}" class="has-popover">
                            <div class="course-box">
                                <div class="course-image">
                                    <img src="{{ asset('storage/'.$f->cover) }}" alt="" class="img-fluid" />
                                </div>
                                <div class="course-details">
                                    <h5 class="title">{{ $f->title }}</h5>

                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <div class="d-inline-block">
                                            <span class="text-dark ms-1 text-15px">(5)</span>
                                            <span class="text-dark text-12px text-muted ms-2">(1 Reviews)</span>
                                        </div>
                                    </div>
                                    <div class="d-flex text-dark">
                                        <div class="">
                                            <i class="far fa-clock text-14px"></i>
                                            {{-- <span class="text-muted text-12px">{{ formatted($chapitres) }} Hours</span> --}}
                                        </div>
                                        <div class="ms-3">
                                            <i class="far fa-list-alt text-14px"></i>
                                            <span class="text-muted text-12px">15 Lectures</span>
                                        </div>
                                    </div>

                                    <hr class="divider-1" />

                                    <div class="d-block">
                                         <div class="floating-user d-inline-block">
                                            @forelse ($f->formateur as $fr)
                                            @if ($loop->first)
                                            <img style="margin-left: 0px; width: 30px; height: 30px;"
                                                class="position-absolute"
                                                src="{{profil($fr->id)}}" alt="user_image"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="{{ $fr->prenom . ' ' . $fr->name}}"
                                            onclick="event.preventDefault();
                                            $(location).attr('href','{{route('formateur', ['id' => $fr->id]) }}');"/>
                                            @else
                                            <img style="margin-left: 17px; width: 30px; height: 30px;"
                                                class="position-absolute"
                                                src="{{ profil() }}"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="{{ $fr->prenom . ' ' . $fr->name }}"
                                            onclick="event.preventDefault(); $(location).attr('href', '{{
                                            route('formateur', ['id' => $fr->id]) }}');" />
                                            @endif
                                            @empty
                                            @endforelse
                                        </div>

                                        <p class="price text-right d-inline-block float-end">Free</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <div class="webui-popover-content">
                            <div class="course-popover-content">
                                <div class="last-updated">Date Publication, {{
                                    \Carbon\Carbon::parse($f->updated_at)->isoFormat('LL')}}</div>

                                <div class="course-title">
                                    <a class="text-decoration-none text-15px" href="">
                                        {{ \Carbon\Carbon::parse($f->datePublication)->isoFormat('LL') }}
                                    </a>
                                </div>
                                <div class="course-meta">
                                    <span class=""><i class="fas fa-play-circle"></i> {{ $f->chapitres->count() }}
                                        Chapitre(s) </span>
                                    <span class=""><i class="far fa-clock"></i> {{ formatted($chapitres)}} </span>
                                    <span class=""><i class="fas fa-closed-captioning"></i>Français</span>
                                </div>
                                <div class="course-subtitle">{{ $f->title }}</div>
                                <div class="what-will-learn">
                                    <ul>
                                        @forelse ($f->chapitres as $ch)
                                        <li>{{ $ch->titre.' ('.$ch->nbrHeure.')' }}</li>
                                        @empty

                                        @endforelse
                                    </ul>
                                </div>
                                <div class="popover-btns">
                                    @if (checkStepForm($f->id))
                                    <a href="{{route('cours',['id'=>$f->id])}}" class="btn red radius-10"
                                        onclick="handleEnrolledButton()">
                                        @if (checkStepForm($f->id)=="en cours")
                                        @lang('infos.autre.continuer')
                                        @else
                                        @lang('infos.autre.btnfini')
                                        @endif
                                    </a>
                                    @else
                                    <a href="" class="btn green radius-10"
                                        onclick="handleEnrolledButton()">Commecer</a>
                                    {{-- <a href="{{ route('beginForm',['id'=>$f->id]) }}" class="btn green radius-10"
                                        onclick="handleEnrolledButton()">Commecer</a> --}}
                                    @endif
                                    <button type="button" class="wishlist-btn" title="Ajouter aux favoris"
                                        onclick="handleWishList(this,'membres/addFavori')" alt="" id="{{$f->id }}">
                                        <i class="fas fa-heart"
                                            @if($userForm->favorie->pluck('id')->contains($f->id))
                                            style="color:#ec5252" @endif></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                    @empty

                    @endforelse
                </div>
            </div>
        </div>
        @if ($formations->count() > 0)
        <a href="" class="btn btn-plus">Voir toutes les formations <i
                class="bi bi-arrow-right"></i></a>
        @endif
    </div>
</section>


{{-- <section class="featured-instructor">
    <div class="container-lg">
        <div class="row">
            <div class="col">
                <h3 class="text-center mb-5">Nos formateurs</h3>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-7">
                <div class="animated-loader">
                    <div class="spinner-border text-secondary" role="status"></div>
                </div>
                <div class="top-istructor-slick shown-after-loading" style="display: none;">
                    @forelse ($formateurs as $fr)
                    <div class="d-sm-flex text-center text-md-start">
                        <div class="top-instructor-img ms-auto me-auto">
                            <a href="{{ route('formateur',['id'=>$fr->id]) }}">
                                <img src="{{asset("assets/images/form/".$fr->profil)}}"
                                alt="instructor" style="width: 100%;" />
                            </a>
                        </div>
                        <div class="top-instructor-details">
                            <a class="text-decoration-none" href="{{ route('formateur',['id'=>$fr->id]) }}">
                                <h4 class="mb-1 fw-700">{{ $fr->prenom." ".$fr->name }}</h4>
                                <span class="fw-500 text-muted text-14px"></span>
                                <p class="text-12px fw-500 text-muted my-3">
                                    {{ $fr->biographie }}
                                </p>

                                <!--                                                                           <span class="badge badge-sub-warning text-12px my-1 py-2"></span>
                         -->
                            </a>

                            <p class="top-instructor-arrow my-3">
                                <span class="cursor-pointer" onclick="$('.top-istructor-slick .slick-prev').click();"><i
                                        class="fas fa-angle-left"></i></span>
                                <span class="cursor-pointer" onclick="$('.top-istructor-slick .slick-next').click();"><i
                                        class="fas fa-angle-right"></i></span>
                            </p>
                        </div>
                    </div>
                    @empty

                    @endforelse


                </div>
            </div>
        </div>
    </div>
</section> --}}

<script>
    $(document).ready(function() {
            if (!/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
                if ($(window).width() >= 840) {
                    $("a.has-popover").webuiPopover({
                        trigger: "hover",
                        animation: "pop",
                        placement: "horizontal",
                        delay: {
                            show: 500,
                            hide: null,
                        },
                        width: 330,
                    });
                } else {
                    $("a.has-popover").webuiPopover({
                        trigger: "hover",
                        animation: "pop",
                        placement: "vertical",
                        delay: {
                            show: 100,
                            hide: null,
                        },
                        width: 335,
                    });
                }
            }

            if ($(".course-carousel")[0]) {
                $(".course-carousel").slick({
                    dots: false,
                    infinite: false,
                    speed: 300,
                    slidesToShow: 4,
                    slidesToScroll: 4,
                    swipe: false,
                    touchMove: false,
                    responsive: [{
                            breakpoint: 840,
                            settings: {
                                slidesToShow: 3,
                                slidesToScroll: 3
                            }
                        },
                        {
                            breakpoint: 620,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 2
                            }
                        },
                        {
                            breakpoint: 480,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
                            }
                        },
                    ],
                });
            }

            if ($(".top-istructor-slick")[0]) {
                $(".top-istructor-slick").slick({
                    dots: false,
                });
            }



        });
        var form = {{ session()->has('categorie') ? 'true' : 'false' }};
        if(form){
            window.onload = function() {

                document.getElementById('formations').scrollIntoView();
            };
        }

</script>
@endsection
