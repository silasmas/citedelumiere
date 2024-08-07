@extends('membres.templates.main_template',['titre'=>"Mes favoris"])


@section('content')

@include("membres.pages.sousMenu")

<section class="my-courses-area">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="my-course-search-bar">
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control py-2" placeholder="Search my courses"
                                onkeyup="getMyWishListsBySearchString(this.value)" />
                            <div class="input-group-append">
                                <button class="btn py-2" type="button"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row no-gutters" id="my_wishlists_area">
            @forelse (Auth::user()->favorie as $fav)

            <div class="col-lg-3">
                <div class="course-box-wrap">
                    <div class="course-box">
                        <div class="course-image">
                            <a href="{{ route('formationDetail', ['id' => $fav->id]) }}">
                                <img src="{{ asset('storage/'.$fav->cover) }}" alt=""
                                    class="img-fluid" />
                            </a>

                            <div class="wishlist-add wishlisted">
                                <button type="button" data-bs-toggle="tooltip" onclick="handleWishList2(this,'../../membres/deleteFavorie')"
                                    id="{{  $fav->id }}" data-bs-placement="left" title=""
                                    style="cursor: auto;">
                                    <i class="fas fa-heart"></i>
                                </button>
                            </div>
                        </div>
                        <div class="course-details">
                            <a href="{{ route('formationDetail', ['id' => $fav->id]) }}">
                                <h5 class="title">{{ $fav->title }}</h5>
                            </a>
                            <p class="instructors">
                                {{-- @foreach ($fav->formation->formation as $for)
                                @foreach ($for->formation->formateur as $f)
                                <span>{{ $f->prenom.' '.$f->nom }}</span>;
                                @endforeach
                                @endforeach --}}
                            </p>

                            <p class="price text-right">
                                Gratuit
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            @empty

            @endforelse


        </div>
    </div>
</section>
<script type="text/javascript">
    $(function () {
        $('[data-bs-toggle="tooltip"]').tooltip();
    });

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

    function check_action(e, url) {
        var tag = $(e).prop("tagName").toLowerCase();
        if (tag == "a") {
            return true;
        } else if (tag != "a" && url) {
            $(location).attr("href", url);
            return false;
        } else {
            return true;
        }
    }
</script>
@endsection
