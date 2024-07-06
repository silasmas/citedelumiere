@extends('client.connecte.templates.main_template', ['titre' => 'Resultat'])

@section('autres_style')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/parsley/parsley.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/aos.css') }}">
@endsection
@section('content')

<section class="category-header-area" style="background-image: url('assets/images/system/shopping_cart.png'); background-size: contain; background-repeat: no-repeat; background-position-x: right; background-color: #ec5252;">
    <div class="image-placeholder-1"></div>
    <div class="container-lg breadcrumb-container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item display-6 fw-bold">
                    <a href="{{ route('dashboard') }}"> Accueil </a>
                </li>
                <li class="breadcrumb-item active text-light display-6 fw-bold">
                    Resultat
                </li>
            </ol>
        </nav>
    </div>
</section>

<section class="cart-list-area">
    <div class="container">
        <div class="row" id="cart_items_details">
            <div class="col-lg-9">
                <div class="in-cart-box">
                    <div class="title">Formation</div>
                    <div class="">
                        <ul class="cart-course-list">
                            <li>
                                <div class="cart-course-wrapper">
                                    <div class="image d-none d-md-block">
                                        <a href="{{ route('formationDetail',['id'=>$examen->formation->id]) }}">
                                            <img src="{{asset("assets/images/form/".$examen->formation->cover)}}" alt="" class="img-fluid" />
                                        </a>
                                    </div>
                                    <div class="details">
                                        <a href="{{ route('formationDetail',['id'=>$examen->formation->id]) }}">
                                            <div class="name">{{ $examen->formation->title }}</div>
                                        </a>

                                        <div class="course-subtitle text-13px mt-2">
                                         {{ Str::limit($examen->formation->description, 200, '...') }}
                                        </div>

                                        <div class="floating-user d-inline-block mt-2">
                                            @forelse ($formation->formateur as $fr)
                                            @if ($loop->first)
                                            <img
                                                style="margin-left: 0px;"
                                                class="position-absolute"
                                                src="{{asset("assets/images/form/".$fr->profil)}}"
                                                width="30px"
                                                height="30px"
                                                data-bs-toggle="tooltip"
                                                data-bs-placement="top"
                                                title="{{ $fr->prenom . ' ' . $fr->name}}"
                                                onclick="event.preventDefault();
                                                $(location).attr('href','{{route('formateur', ['id' => $fr->id]) }}');"
                                            />
                                            @else
                                            <img
                                                style="margin-left: 17px;"
                                                class="position-absolute"
                                                src="{{asset("assets/images/form/".$fr->profil)}}"
                                                width="30px"
                                                height="30px"
                                                data-bs-toggle="tooltip"
                                                data-bs-placement="top"
                                                title="{{ $fr->prenom . ' ' . $fr->name}}"
                                                onclick="event.preventDefault();
                                                $(location).attr('href','{{route('formateur', ['id' => $fr->id]) }}');"
                                            />
                                            @endif
                                            @empty
                                            @endforelse
                                        </div>
                                    </div>
                                    <div class="move-remove text-center">
                                        {{-- <div id="4" onclick="removeFromCartList(this)"><i class="fas fa-times-circle"></i> Remove</div>
                                         <div>Move to Wishlist</div> --}}
                                    </div>
                                    <div class="price">
                                        <div class="current-price">
                                          Gratuit
                                        </div>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 pt-1">
                <h5 class="fw-700">Resultat :</h5>
                <div class="cart-sidebar bg-white radius-10 py-4 px-3">
                    <span id="total_price_of_checking_out" hidden> {{ $resultat->conclusion }}</span>
                    <div class="total-price">{{ $resultat->conclusion }}</div>
                    <div class="total-original-price">
                        <span class="original-prices">{{ $resultat->commentaire }}</span>
                        <!-- <span class="discount-rate">95% off</span> -->
                    </div>
@if ($resultat->conclusion=="echec")
<button type="button" class="btn red w-100 radius-10 mb-3" onclick="handleCheckOut()">Demander de reprendre</button>
@else
<button type="button" class="btn red w-100 radius-10 mb-3" onclick="handleCheckOut()">Continuer</button>    
@endif
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
