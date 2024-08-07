<!-- .app-header -->
<header class="app-header app-header-dark">
    <!-- .top-bar -->
    <div class="top-bar">
      <!-- .top-bar-brand -->
      <div class="top-bar-brand">
        <!-- toggle aside menu -->
        <button class="hamburger hamburger-squeeze mr-2" type="button" data-toggle="aside-menu" aria-label="toggle aside menu"><span class="hamburger-box"><span class="hamburger-inner"></span></span></button> <!-- /toggle aside menu -->
        <a href="#">
            {{-- DIKITIVI --}}
            <img class="rounded" src="{{ asset('assets/admin/images/one.png') }}" alt="" height="50" width="100">

        </a>
      </div><!-- /.top-bar-brand -->
      <!-- .top-bar-list -->
      <div class="top-bar-list">
        <!-- .top-bar-item -->
        <div class="top-bar-item px-2 d-md-none d-lg-none d-xl-none">
          <!-- toggle menu -->
          <button class="hamburger hamburger-squeeze" type="button" data-toggle="aside" aria-label="toggle menu"><span class="hamburger-box"><span class="hamburger-inner"></span></span></button> <!-- /toggle menu -->
        </div><!-- /.top-bar-item -->
        <!-- .top-bar-item -->
        <!-- .top-bar-item -->
        <div class="top-bar-item top-bar-item-right px-0 d-none d-sm-flex">
            <ul class="header-nav nav">
                <!-- .nav-item -->
                <li class="nav-item dropdown header-nav-dropdown">
                  <a class="nav-link" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="oi oi-grid-three-up"></span></a> <!-- .dropdown-menu -->
                  <div class="dropdown-menu dropdown-menu-rich dropdown-menu-left">
                    <div class="dropdown-arrow"></div><!-- .dropdown-sheets -->
                    <div class="dropdown-sheets">
                      <!-- .dropdown-sheet-item -->
                      <div class="dropdown-sheet-item">
                        <a href="#" class="tile-wrapper"><span class="tile tile-lg bg-indigo"><i class="oi oi-people"></i></span> <span class="tile-peek">Teams</span></a>
                      </div><!-- /.dropdown-sheet-item -->
                      <!-- .dropdown-sheet-item -->
                      <div class="dropdown-sheet-item">
                        <a href="#" class="tile-wrapper"><span class="tile tile-lg bg-teal"><i class="oi oi-fork"></i></span> <span class="tile-peek">Projects</span></a>
                      </div><!-- /.dropdown-sheet-item -->
                      <!-- .dropdown-sheet-item -->
                      <div class="dropdown-sheet-item">
                        <a href="#" class="tile-wrapper"><span class="tile tile-lg bg-pink"><i class="fa fa-tasks"></i></span> <span class="tile-peek">Tasks</span></a>
                      </div><!-- /.dropdown-sheet-item -->
                      <!-- .dropdown-sheet-item -->
                      <div class="dropdown-sheet-item">
                        <a href="#" class="tile-wrapper"><span class="tile tile-lg bg-yellow"><i class="oi oi-fire"></i></span> <span class="tile-peek">Feeds</span></a>
                      </div><!-- /.dropdown-sheet-item -->
                      <!-- .dropdown-sheet-item -->
                      <div class="dropdown-sheet-item">
                        <a href="#" class="tile-wrapper"><span class="tile tile-lg bg-cyan"><i class="oi oi-document"></i></span> <span class="tile-peek">Files</span></a>
                      </div><!-- /.dropdown-sheet-item -->
                    </div><!-- .dropdown-sheets -->
                  </div><!-- .dropdown-menu -->
                </li><!-- /.nav-item -->
              </ul>
          <!-- .btn-account -->
          <div class="dropdown d-none d-md-flex">
            <button class="btn-account" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="user-avatar user-avatar-md"><img src="{{ asset('assets/admin/images/default.jpg') }}" alt=""></span>
                 <span class="account-summary pr-lg-4 d-none d-lg-block"><span class="account-name">{{ Auth::user()->firstname . ' ' . Auth::user()->lastname }} </span> <span class="account-description">Admin</span></span></button> <!-- .dropdown-menu -->
            <div class="dropdown-menu">
              <div class="dropdown-arrow d-lg-none" x-arrow=""></div>
              <div class="dropdown-arrow ml-3 d-none d-lg-block"></div>
              <h6 class="dropdown-header d-none d-md-block d-lg-none"> {{ Auth::user()->firstname . ' ' . Auth::user()->lastname }} </h6>
              <a class="dropdown-item" href="#">
                <span class="dropdown-icon oi oi-person"></span> Profile
            </a>
              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                <span class="dropdown-icon oi oi-account-logout"></span> Déconnexion
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
              <div class="dropdown-divider"></div>
            </div><!-- /.dropdown-menu -->
          </div><!-- /.btn-account -->
        </div><!-- /.top-bar-item -->
      </div><!-- /.top-bar-list -->
    </div><!-- /.top-bar -->
  </header><!-- /.app-header -->
