<nav class="navbar navbar-vertical fixed-left navbar-expand-md id="sidenav-main"
style="background-color: #001848; scrollbar-width: thin;
scrollbar-color: #001848 #13367c;">

    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <a class="navbar-brand pt-0" href="{{ route('home') }}">
            <h1 style="color: white; font-size: 18px !important ;">Prueba Técnica</h1>
        </a>
        <!-- User -->
        <ul class="nav align-items-center d-md-none">
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media align-items-center">
                        <span class="avatar avatar-sm rounded-circle">
                        <img alt="Image placeholder" src="{{ asset('argon') }}/img/theme/team-1-800x800.jpg">
                        </span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">{{ __('¡Bienvenido!') }}</h6>
                    </div>
                    <a href="{{ route('profile.edit') }}" class="dropdown-item">
                        <i class="ni ni-single-02"></i>
                        <span>{{ __('Perfil') }}</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="ni ni-user-run"></i>
                        <span>{{ __('Cerrar Sesión') }}</span>
                    </a>
                </div>
            </li>
        </ul>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('argon') }}/img/brand/white.png" class="navbar-brand-img" alt="...">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!--  -->
            <!-- Form -->
            <form class="mt-4 mb-3 d-md-none">
                <div class="input-group input-group-rounded input-group-merge">
                    <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="{{ __('Search') }}" aria-label="Search">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span class="fa fa-search"></span>
                        </div>
                    </div>
                </div>
            </form>
            <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ (request()->is('Dashboard')) ? 'active' : '' }}" href="{{ route('home') }}">
                        <i class="ni ni-tv-2 text-primarys"></i> {{ __('Dashboard') }}
                    </a>
                </li>

                <li class="nav-item">
                    <h5 class="nav-titule">CRUD'S</h5>
                </li>

                            {{-- Usuarios --}}
                            <li class="nav-item">
                                <a class="nav-link {{ (request()->is('users*')) ? 'active' : '' }}" href="{{ route('users.index') }}">
                                <i class="fa fa-users" aria-hidden="true"></i> {{ __('Usuarios') }}
                                </a>
                            </li>

                            {{-- Roles --}}
                            <li class="nav-item">
                                <a class="nav-link {{ (request()->is('roles*')) ? 'active' : '' }}" href="{{ route('roles.index') }}">
                                    <i class="fa-solid fa-users-viewfinder" aria-hidden="true"></i> {{ __('Roles') }}
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>


            </ul>

        </div>
    </div>

</nav>
