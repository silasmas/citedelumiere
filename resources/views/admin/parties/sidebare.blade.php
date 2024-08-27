<!-- .app-aside -->
<aside class="app-aside app-aside-expand-md app-aside-light">
    <!-- .aside-content -->
    <div class="aside-content">
        <div class="overflow-hidden aside-menu">
            <!-- .stacked-menu -->
            <nav id="stacked-menu" class="stacked-menu">
                <!-- .menu -->
                <ul class="menu">
                    <!-- .menu-item -->
                    <li class="menu-item {{Route::current()->getName()==" dashboard"?"has-active":"" }}">
                        <a href="{{ route('dashboard') }}" class="menu-link">
                            <span class="menu-icon fas fa-home"></span>
                            <span class="menu-text">Dashboard</span>
                        </a>
                    </li><!-- /.menu-item -->

                    <!-- .menu-item -->
                    <li class="menu-item {{ Route::current()->getName() == 'admin_form' ? 'has-active' : ''}}">
                        <a href="{{ route('admin_form') }}" class="menu-link">
                            <span class="menu-icon fas fa-graduation-cap"></span>
                            <span class="menu-text">Formations</span>
                        </a>
                    </li>
                    <li class="menu-item {{ Route::current()->getName() == 'admin_student' ? 'has-active' : ''}}">
                        <a href="{{ route('admin_student') }}" class="menu-link">
                            <span class="menu-icon fas fa-user-graduate"></span>
                            <span class="menu-text">Gestion des étudiants</span>
                        </a>
                    </li>
                    <li class="menu-item {{ Route::current()->getName() == 'admin_exam' ? 'has-active' : ''}}">
                        <a href="{{ route('admin_exam') }}" class="menu-link">
                            <span class="menu-icon fas fa-file-alt"></span>
                            <span class="menu-text">Gestion des examens</span>
                        </a>
                    </li>
                    <li class="menu-item {{ Route::current()->getName() == 'admin_prof' ? 'has-active' : ''}}">
                        <a href="{{ route('admin_prof') }}" class="menu-link">
                            <span class="menu-icon fas fa-chalkboard-teacher"></span>
                            <span class="menu-text">Gestion des professeurs</span>
                        </a>
                    </li>

                    <li class="menu-header">Autres </li><!-- /.menu-header -->
                    <!-- .menu-item -->
                    <li class="menu-item has-child">
                    <li class="menu-item">
                        <a href="{{ route('home') }}" class="menu-link">
                            <span class="menu-icon fas fa-home"></span>
                            <span class="menu-text">Retour sur le site</span>
                        </a>
                    </li>
                    <li class="menu-item {{ Route::current()->getName() == 'admin_users' ? 'has-active' : ''}}">
                        <a href="{{ route('admin_users') }}" class="menu-link">
                            <span class="menu-icon fas fa-user"></span>
                            <span class="menu-text">Gestion des utilisateurs</span>
                        </a>
                    </li>
                    <li class="menu-item {{ Route::current()->getName() == 'admin_message' ? 'has-active' : ''}}">
                        <a href="{{ route('admin_message') }}" class="menu-link">
                            <span class="menu-icon fas fa-envelope"></span>
                            <span class="menu-text">Gestion des messages</span>
                        </a>
                    </li>
                    </li>
                </ul><!-- /.menu -->
            </nav><!-- /.stacked-menu -->
        </div><!-- /.aside-menu -->
        <!-- Skin changer -->
        <footer class="p-2 aside-footer border-top">
            <button class="btn btn-light btn-block text-primary" data-toggle="skin"><span
                    class="d-compact-menu-none">Night mode</span> <i class="ml-1 fas fa-moon"></i></button>
        </footer><!-- /Skin changer -->
    </div><!-- /.aside-content -->
</aside><!-- /.app-aside -->
