<div class="menu-area bg-white">
    <div class="container-xl">
        <nav class="navbar navbar-expand-lg navbar-light">
            <ul class="mobile-header-buttons">
                @if (!Auth::guest())
                <li>
                    <a class="mobile-nav-trigger"
                        href="#mobile-primary-nav">@lang('general.menu.titreMenu')<span></span></a>
                </li>
                @endif
                <li>
                    <a class="mobile-search-trigger" href="#mobile-search">Search<span></span></a>
                </li>
            </ul>

            <a href="" class="navbar-brand">
                <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/favicon/favicon.ico') }}">
                <img src="{{ asset('assets/images/favicon/android-chrome-512x512.png') }}" alt="logo" />
            </a>

            <div class="main-nav-wrap">
                <div class="mobile-overlay"></div>

                <ul class="mobile-main-nav">
                    @if(!Auth::guest() && Auth::user()->role->pluck("titre")->contains("Admin") )
                    <li class="mobile-menu-helper-top"></li>
                    <li class="has-children text-nowrap fw-bold">
                        <a href="">
                            <i class="fas fa-th d-inline text-20px" style="color: #FFF"></i>
                            <span class="fw-500" style="color: #FFF">Dashboard</span>
                            <span class="has-sub-category" style="color: #FFF"><i class="fas fa-angle-right"></i></span>
                        </a>

                        <ul class="category corner-triangle top-left is-hidden pb-0">
                            <li class="go-back">
                                <a href=""><i class="fas fa-angle-left"></i>Menu</a>
                            </li>

                        <li class="has-children">
                            <li class="all-category-devided mb-0 p-0">
                                <a href="{{ route('dashboard') }}" class="py-2">
                                    <span class="icon"><i class="fa fa-th-large"></i></span>
                                    <span>Panel d'administration</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    @endif
                    <li class="mobile-menu-helper-bottom"></li>
                </ul>
            </div>

            {{-- {{dd(Auth::guest())}} --}}

            <div class="ms-auto d-flex align-items-center">
                <div class="instructor-box menu-icon-box">
                    <div class="icon">
                        <a href=""
                        style="border: 1px solid transparent; margin: 0px; padding: 0px 10px; font-size: 14px; width: max-content; border-radius: 5px; height: 40px; line-height: 40px;">
                        @lang('general.menu.home')
                    </a>
                </div>
            </div>
            @if (!Auth::guest())

                {{-- debut menu live --}}
                <div class="instructor-box  menu-icon-box" id="">
                    <div class="icon">
                        <a href=""><i class="fas fa-signal"></i></a>
                        {{-- <span class="number">{{$userForm->formation->count()}}</span> --}}
                    </div>
                    <div class="dropdown course-list-dropdown corner-triangle top-right">
                        <div class="list-wrapper">
                            <div class="item-list">
                                <ul>
                                    {{-- @forelse ($userForm->formation as $fav)
                                    <li>
                                        <div class="item clearfix">
                                            <div class="item-image">
                                                <a href="">
                                                    <img src="{{ asset('assets/images/form/' . $fav->cover) }}"
                                                        alt="" class="img-fluid" />
                                                </a>
                                            </div>
                                            <div class="item-details">
                                                <a href="#">
                                                    <div class="course-name">
                                                       {{ $fav->title }}
                                                    </div>
                                                    <div class="instructor-name">
                                                        GAEL
                                                    </div>
                                                </a>
                                                <button  id="" class="addedToCart"
                                                    onclick="event.preventDefault(); $(location).attr('href', '{{
                                                        route('cours', ['id' => $fav->id]) }}')">
                                                @if ($fav->pivot->evolution == 'fini')
                                                    @lang('general.autre.btnfini')
                                                    @else
                                                    @lang('general.autre.suite')
                                                    @endif
                                                </button>

                                            </div>
                                        </div>
                                    </li>
                                    @empty
                                    <li>
                                        <div class="empty-box text-center">
                                            <p class="text-danger">
                                                Pas des lives en vue pour l'instant
                                            </p>
                                            <a href="{{ route('dashboard') }}">Accueil</a>
                                        </div>
                                    </li>
                                    @endforelse --}}
                                </ul>
                            </div>
                            {{-- @if (count($live) > 0) --}}
                            <div class="dropdown-footer">
                                <a href="">Les formaations en cours</a>
                            </div>
                            {{-- @endif --}}
                        </div>

                    </div>
                </div>
                {{-- Fin menu live --}}


                {{-- Debut menu favorie --}}
                <div class="wishlist-box  menu-icon-box" id="wishlist_items">
                    <div class="icon">
                        <a href=""><i class="fas fa-heart"></i></a>
                        {{-- <span class="number">{{ Auth::user()->favorie->count() }}</span> --}}
                    </div>
                    <div class="dropdown course-list-dropdown corner-triangle top-right">
                        <div class="list-wrapper">
                            <div class="item-list">
                                <ul>

                                    {{-- @forelse (Auth::user( )->favorie->load('formation') as $fav)
                                    <li>
                                        <div class="item clearfix">
                                            <div class="item-image">
                                                <a href="">
                                                    <img src="{{ asset('assets/images/form/20211130_045800.jpg' ) }}"
                                                        alt="" class="img-fluid" />
                                                </a>
                                            </div>
                                            <div class="item-details">
                                                <a href="{{ route('detailFormation',['id'=>$fav->formation->id]) }}">
                                                    <div class="course-name">
                                                        {{ $fav->formation->title }}
                                                    </div>
                                                    <div class="instructor-name">
                                                        {{ $fav->formation->subtitle }}
                                                    </div>

                                                    <div class="item-price">
                                                    </div>
                                                </a>

                                            </div>
                                        </div>
                                    </li>
                                    @empty
                                    <li>
                                        <div class="empty-box text-center">
                                            <p class="text-danger">Votre liste de favorie est vide.

                                            </p>
                                            <a href="{{ route('dashboard') }}">Voir les formations</a>
                                        </div>
                                    </li>
                                    @endforelse --}}
                                </ul>
                            </div>
                            {{-- @if (count($userForm->favorie->load('session')) > 0) --}}
                            <div class="dropdown-footer">
                                <a href="">@lang('general.menu.btnFavoris')</a>
                            </div>
                            {{-- @endif --}}

                        </div>

                    </div>
                </div>
                {{-- Fiin menu favorie --}}


                {{-- Debut menu profil --}}
                <div class="user-box menu-icon-box">
                    <div class="icon">
                        <a href="javascript::">
                            @if (Auth::user()->photo==null)
                            <img src="{{ asset('assets/membres/images/uploads/user_image/placeholder.png') }}" alt="placeholder"
                                class="img-fluid" />
                            @else
                            <img src="{{ asset("storage/profil/".Auth::user()->photo)}}"
                            alt="placeholder" class="img-fluid" />
                            @endif
                        </a>
                    </div>
                    <div class="dropdown user-dropdown corner-triangle top-right">
                        <ul class="user-dropdown-menu">
                            <li class="dropdown-user-info">
                                <a href="">
                                    <div class="clearfix">
                                        <div class="user-image float-start">
                                            @if (Auth::user()->photo==null)
                                            <img src="{{ asset('assets/membres/images/uploads/user_image/placeholder.png') }}"
                                                alt="placeholder" class="img-fluid" />
                                            @else
                                            <img src="{{ asset(" storage/profil/".Auth::user()->photo)}}"
                                            alt="placeholder" class="img-fluid" />
                                            @endif
                                        </div>
                                        <div class="user-details">
                                            <div class="user-name">
                                                <span class="hi">Salut,</span>
                                                {{ Auth::user()->prenom . ' ' . Auth::user()->name }}
                                            </div>
                                            <div class="user-email">
                                                <span class="email">{{ Auth::user()->email }}</span>
                                                <span class="welcome">Bienvenue</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>

                            <li class="user-dropdown-menu-item">
                                <a href=""><i class="fas fa-gem"></i>@lang('general.menu.mesCours')</a>
                            </li>
                            <li class="user-dropdown-menu-item">
                                <a href=""><i class="fas fa-heart"></i>@lang('general.menu.mesFavoris')</a>
                            </li>
                            <li class="user-dropdown-menu-item">
                                <a href=""><i class="fas fa-user"></i>@lang('general.menu.profil')</a>
                            </li>

                            <li class="dropdown-user-logout user-dropdown-menu-item">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                    @lang('general.menu.logout')
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
                {{-- Fin menu profil --}}
            </div>

            <span class="signin-box-move-desktop-helper"></span>
            <div class="sign-in-box btn-group d-none">
                <button type="button" class="btn btn-sign-in" data-toggle="modal" data-target="#signInModal">Log
                    In</button>

                <button type="button" class="btn btn-sign-up" data-toggle="modal" data-target="#signUpModal">Sign
                    Up</button>
            </div>
            <!--  sign-in-box end -->
            @endif



        </nav>
    </div>
</div>
