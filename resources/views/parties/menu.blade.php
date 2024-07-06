<header class="header-style1 menu_area-light">

    <div class="navbar-default border-bottom border-color-light-white">

        <!-- start top search -->
        <div class="top-search bg-secondary">
            <div class="container-fluid px-sm-1-6 px-lg-2-9">
                <form class="search-form" action="search.html" method="GET" accept-charset="utf-8">
                    <div class="input-group">
                        <span class="cursor-pointer input-group-addon">
                            <button class="text-white search-form_submit fas fa-search" type="submit"></button>
                        </span>
                        <input type="text" class="search-form_input form-control" name="s" autocomplete="off"
                            placeholder="Type & hit enter...">
                        <span class="mt-1 input-group-addon close-search"><i class="fas fa-times"></i></span>
                    </div>
                </form>
            </div>
        </div>
        @if (session()->has('msg'))
        <div class="alert alert-success alert-dismissible">
            <strong>Message : </strong> {{ session()->get('msg') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
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
        <!-- end top search -->

        <div class="container-fluid px-sm-2-9">
            <div class="row align-items-center">
                <div class="col-12 col-lg-12">
                    <div class="menu_area alt-font">
                        <nav class="p-0 navbar navbar-expand-lg navbar-light">

                            <div class="navbar-header navbar-header-custom">
                                <!-- start logo -->
                                <a href="{{ route('home') }}" class="navbar-brand">
                                    <img id="" src="{{asset('assets/img/logos/logo-inner.png') }}" alt="logo">
                                </a>
                                <!-- end logo -->
                            </div>

                            <div class="navbar-toggler"></div>
                            {{-- @if (Route::current()->getName()=="home") --}}
                            <ul class="navbar-nav align-items-lg-center ms-auto" id="nav" style="display: none;">
                                <li class="{{isActive("home")}}"><a
                                        href="{{ route('home') }}">Accueil</a></li>
                                {{-- <li class="{{Route::is("home")?"active":"" }}"><a
                                        href="{{ route('home') }}">A propo de nous</a></li> --}}
                                <li class="{{isActive("apropo")}}">
                                    <a href="{{route('apropo')}}">@lang("infos.menu.about")</a>
                                </li>

                                <li class="{{isActive("programmes")}} {{ isActive("enseignement") }} {{ isActive("priere") }} {{ isActive('adoration') }} {{ isActive("seminaire") }}"><a
                                        href="{{ route('programmes') }}">Nos programmes</a>
                                        <ul>
                                            <li class="{{isActive("enseignement")}}"><a href="{{ route('enseignement') }}">Enseignement</a></li>
                                            <li class="{{isActive("priere")}}"><a href="{{ route('priere') }}">Prière</a></li>
                                            <li class="{{isActive('adoration')}}"><a href="{{ route('adoration') }}">Culte d'adoration</a></li>
                                            <li class="{{isActive("seminaire")}}"><a href="{{ route('seminaire') }}">Séminaire</a></li>
                                        </ul>

                                    </li>
                                <li class="{{isActive("membre")}}"><a
                                        href="{{ route('membre') }}">Devenir membres</a></li>
                                <li class="{{Route::current()->getName()=="contact"?"active":"no"}}"><a href="{{ route('contact') }}">Contact</a></li>
                            </ul>

                            <!-- start attribute navigation -->
                            <div class="attr-nav align-items-lg-center ms-lg-auto">
                                <ul>
                                    {{-- <li class="search"><a href="#!"><i class="fas fa-search"></i></a></li> --}}
                                    <li class="d-none d-xl-inline-block"><a href="{{ route('login') }}"
                                            class="text-white shadow-none butn secondary medium">Connexion</a></li>
                                    <li class="d-none d-xl-inline-block">
                                        <a href="https://link.frobill.cloud/0bxiy" target="blank"
                                            class="text-white shadow-none butn shadow-dark medium">Offrire</a></li>
                                </ul>
                            </div>
                            <!-- end attribute navigation -->

                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>
