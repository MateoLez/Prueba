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
            <img src="{{ asset('argon') }}/img/brand/blue.png" class="navbar-brand-img" alt="...">
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
                    <a class="nav-link {{ (request()->is('PortalClientes')) ? 'active' : '' }}" href="{{ route('home') }}">
                        <i class="ni ni-tv-2 text-primarys"></i> {{ __('Dashboard') }}
                    </a>
                </li>


                @can('Mono_App')
                <li class="nav-item">
                    <h5 class="nav-titule">MONO-APP</h5>
                </li>
                @endcan

                {{-- Admin usuarios --}}
                @can('Admin_Usuarios')
                <li class="nav-item">
                    <a class="nav-link" href="#navbar1" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar1">
                        <i class="fa-solid fa-people-group"></i>{{ __('Admin Usuarios') }}
                    </a>

                    <div class="collapse show" id="navbar1">
                        <ul class="nav nav-sm flex-column">

                            {{-- Usuarios --}}
                            @can('users.index')
                            <li class="nav-item">
                                <a class="nav-link {{ (request()->is('Admin/users*')) ? 'active' : '' }}" href="{{ route('users.index') }}">
                                <i class="fa fa-users" aria-hidden="true"></i> {{ __('Usuarios') }}
                                </a>
                            </li>
                            @endcan

                            {{-- Roles --}}
                            @can('roles.index')
                            <li class="nav-item">
                                <a class="nav-link {{ (request()->is('Admin/rol*')) ? 'active' : '' }}" href="{{ route('roles.index') }}">
                                    <i class="fa-solid fa-users-viewfinder" aria-hidden="true"></i> {{ __('Lista de roles') }}
                                </a>
                            </li>
                            @endcan

                        </ul>
                    </div>
                </li>
                @endcan



                {{-- Admin Empresas --}}
                @can('Admin_Empresas')
                <li class="nav-item">
                    <a class="nav-link" href="#navbar2" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar2">
                        <i class="fa-solid fa-user-tie"></i> {{ __('Admin Empresas') }}
                    </a>

                    <div class="collapse show" id="navbar2">
                        <ul class="nav nav-sm flex-column">
                            {{-- Empresas --}}
                            @can('empresas.index')
                            <li class="nav-item">
                                <a class="nav-link {{ (request()->is('Admin/empresas*')) ? 'active' : '' }}" href="{{ route('empresas.index') }}">
                                    <i class="fa-regular fa-building"></i> {{ __('Empresas') }}
                                </a>
                            </li>
                            @endcan
                        </ul>
                    </div>
                </li>
                @endcan

                {{-- Contabilidad --}}
                @can('Contabilidad')
                <li class="nav-item">
                    <a class="nav-link" href="#navbar3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar3">
                        <i class="fa-solid fa-vault"></i> {{ __('Contabilidad') }}
                    </a>

                    <div class="collapse show" id="navbar3">
                        <ul class="nav nav-sm flex-column">
                            {{-- Facturas --}}
                            @can('facturas.index')
                            <li class="nav-item">
                                <a class="nav-link {{ (request()->is('Admin/facturacion*')) ? 'active' : '' }}" href="{{ route('facturas.index') }}">
                                    <i class="fa-solid fa-file-invoice"></i> {{ __('Facturas') }}
                                </a>
                            </li>
                            @endcan
                        </ul>
                    </div>
                </li>
                @endcan

                {{-- Legal --}}
                @can('Legal')
                <li class="nav-item">
                    <a class="nav-link" href="#navbar4" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar4">
                        <i class="fa-solid fa-landmark"></i> {{ __('Legal') }}
                    </a>

                    <div class="collapse show" id="navbar4">
                        <ul class="nav nav-sm flex-column">
                            {{-- Contratos --}}
                            @can('contratos.index')
                            <li class="nav-item">
                                <a class="nav-link {{ (request()->is('Admin/contratos*')) ? 'active' : '' }}" href="{{ route('contratos.index') }}">
                                    <i class="fa-solid fa-signature"></i> {{ __('Contratos') }}
                                </a>
                            </li>
                            @endcan
                        </ul>
                    </div>
                </li>
                @endcan


                {{-- Titulo HB --}}
                @can('HB')
                <li class="nav-item">
                    <h5 class="nav-titule">DISTRIBUIDORA HB</h5>
                </li>
                @endcan

                <!-- PowerBI -->
                @can('HBPBI')
                <li class="nav-item">
                    <a class="nav-link" href="#navbar5" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar5">
                        <i class="fa fa-line-chart" aria-hidden="true"></i> {{ __('Reportes PBi') }}
                    </a>

                    <div class="collapse show" id="navbar5">
                        <ul class="nav nav-sm flex-column">
                            @can('hb_pbi_global')
                            <li class="nav-item">
                                <a class="nav-link {{ (request()->is('PortalClientes/HB/PBI/Global')) ? 'active' : '' }}" href="{{ route('hb_pbi_global') }}">
                                <i class="fa fa-pie-chart" aria-hidden="true"></i>{{ __('Global HB') }}
                                </a>
                            </li>
                            @endcan

                            @can('hb_pbi_colgate')
                            <li class="nav-item">
                                <a class="nav-link {{ (request()->is('PortalClientes/HB/PBI/Colgate')) ? 'active' : '' }}"   href="{{ route('hb_pbi_colgate') }}">
                                <i class="fa fa-area-chart" aria-hidden="true"></i>{{ __('Colgate') }}
                                </a>
                            </li>
                            @endcan

                            @can('hb_pbi_familia')
                            <li class="nav-item">
                                <a class="nav-link {{ (request()->is('PortalClientes/HB/PBI/Familia')) ? 'active' : '' }}" active href="{{ route('hb_pbi_familia') }}">
                                <i class="fa fa-bar-chart" aria-hidden="true"></i>{{ __('Familia') }}
                                </a>
                            </li>
                            @endcan
                        </ul>
                    </div>
                </li>
                @endcan


                {{-- Liquidaciones --}}
                @can('Liquidacion')
                <li class="nav-item">
                    <a class="nav-link" href="#navbar6" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar6">
                        <i class="fa-solid fa-calculator"></i> {{ __('Liquidación') }}
                    </a>

                    <div class="collapse show" id="navbar6">
                        <ul class="nav nav-sm flex-column">
                            {{-- Importar Luz --}}
                            @can('ImportExcel.index')
                            <li class="nav-item">
                                <a class="nav-link {{ (request()->is('Admin/import*')) ? 'active' : '' }}" href="{{ route('ImportExcel.index') }}">
                                    <i class="fa-regular fa-file-excel"></i></i> {{ __('Importar Excel') }}
                                </a>
                            </li>
                            @endcan


                            {{-- Pendiente Can Tablas Excel --}}
                            @can('hb_liq_colgate.index')
                            <li class="nav-item">
                                <a class="nav-link {{ (request()->is('PortalClientes/HB/Tablas*')) ? 'active' : '' }}" href="{{ route('hb_liq_colgate.index') }}">
                                    <i class="fa-solid fa-table-list"></i> {{ __('Colgate') }}
                                </a>
                            </li>
                            @endcan

                        </ul>
                    </div>
                </li>
                @endcan



                            {{-- Facturas HB --}}
                            @can('facturas_HB.index')
                            <li class="nav-item">
                                <a class="nav-link {{ (request()->is('PortalClientes/HB/Facturas*')) ? 'active' : '' }}" href="{{ route('facturas_HB.index') }}">
                                    <i class="fa-solid fa-wallet"></i> {{ __('Facturas') }}
                                </a>
                            </li>
                            @endcan



                <li class="nav-item mb-5 mr-4 ml-4 pl-1 bg-primary" style="position: relative; bottom: 0; margin-top: 3em;">
                    <a class="nav-link {{ (request()->is('PortalClientes/NotiMono')) ? 'active' : '' }}" href="{{ route('notimono') }}">
                          <img src="/argon/img/page/monkey.png" style="margin-right: 10px;" width="25px"
                        class="img-fluid" alt="Sample image">
                        NotiMono
                    </a>
                </li>



            </ul>

        </div>
    </div>

</nav>
