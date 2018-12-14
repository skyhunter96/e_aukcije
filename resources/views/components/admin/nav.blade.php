
<header class="topbar" data-navbarbg="skin1">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header" data-logobg="skin1">
            <!-- This is for the sidebar toggle which is visible on mobile only -->
            <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="#"><i class="ti-menu ti-close"></i></a>
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <a class="navbar-brand" href="{{ route('index') }}">
                <!-- Logo text -->
                <span class="logo-text">
                             <img src="img/header-logo.png" class="light-logo" alt="homepage">
                        </span>
            </a>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Toggle which is visible on mobile only -->
            <!-- ============================================================== -->
            <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="#" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin1">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-left mr-auto">
                <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="#" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>

                <!-- ============================================================== -->
                <!-- create new -->
                <!-- ============================================================== -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle"  id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="d-none d-md-block">Podrška <i class="fa fa-angle-down"></i></span>
                        <span class="d-block d-md-none"><i class="fa fa-plus"></i></span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="viber://chat?number=12345678">Viber poruka</a>
                        <a class="dropdown-item" href="mailto:ja@alek.online">Pošalji email</a>
                        <div class="dropdown-divider"></div>
                        <span class="dropdown-item" href="tel:+381612860399">061 2860 399</span>
                        <span class="dropdown-item" href="tel:+381612860399">Aleksej Jovanović</span>
                    </div>
                </li>
                <!-- ============================================================== -->
                <!-- Search -->
                <!-- ============================================================== -->

            </ul>
            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-right">
                <!-- ============================================================== -->
                <!-- create new -->
                <!-- ============================================================== -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle nav-valuta"  id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="mdi mdi-cash-multiple"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right  animated fadeIn" aria-labelledby="navbarDropdown2">
                        <a class="dropdown-item" ><i class="mdi mdi-cash"></i> Dolar</a>
                        <a class="dropdown-item" ><i class="mdi mdi-cash"></i> Evro</a>
                        <a class="dropdown-item" ><i class="mdi mdi-cash"></i> Dinar</a>
                        <a class="dropdown-item" ><i class="mdi mdi-cash"></i> Forinta</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="index.php" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="./index_files/1.jpg" alt="user" class="rounded-circle" width="31"></a>
                    <div class="dropdown-menu dropdown-menu-right user-dd animated fade">
                        <span class="with-arrow"><span class="bg-primary"></span></span>
                        <div class="d-flex no-block align-items-center p-15 bg-primary text-white m-b-10">
                            <div class=""><img src="./index_files/1.jpg" alt="user" class="img-circle" width="60"></div>
                            <div class="m-l-10">
                                <h4 class="m-b-0">
                                    @foreach(Session::get('user') as $user)
                                        {{ $user->name_surname }}
                                    @endforeach</h4>
                                <p class=" m-b-0">
                                    @foreach(Session::get('user') as $user)
                                        {{ $user->email }}
                                    @endforeach</p>
                            </div>
                        </div>
                        <a class="dropdown-item" href="korisnik.php"><i class="ti-user m-r-5 m-l-5"></i> Moj profil</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="korisnik.php"><i class="ti-settings m-r-5 m-l-5"></i> Postavke profila</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}"><i class="fa fa-power-off m-r-5 m-l-5"></i> Odjavi se</a>
                    </div>
                </li>
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
            </ul>
        </div>
    </nav>
</header>

<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="in">
                <!-- User Profile-->

                @if(session('isAdmin'))
                    <li class="sidebar-item"><a href="{{ route('admin_panel') }}"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Gl. stranica </span></a></li>
                @endif

                @if(!session('isAdmin'))
                    <li class="sidebar-item"><a href="{{ asset('/postavke/' . $user->id)}} "><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Gl. stranica </span></a></li>
                @endif

                @if(session('isAdmin'))
                <li class="nav-small-cap"><a href="{{ asset('/admin_auctions') }}"><i class="mdi mdi-equal-box"></i> <span class="hide-menu">Aukcije </span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link two-column waves-effect waves-dark" href="{{ asset('/admin_auctions') }}" aria-expanded="false"><i class="mdi mdi-equal-box"></i><span class="hide-menu">Aukcije </span></a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item"><a href="{{ asset('/admin_auctions_show') }}" class="sidebar-link"><i class="mdi mdi-equal-box"></i><span class="hide-menu"> Pokrenute aukcije </span></a></li>
                        <li class="sidebar-item"><a href="zavrseneaukcije.php" class="sidebar-link"><i class="mdi mdi-email-alert"></i><span class="hide-menu"> Završene aukcije </span></a></li>
                        <li class="sidebar-item"><a href="{{ asset('/auctions') }}" class="sidebar-link"><i class="mdi mdi-email-secure"></i><span class="hide-menu"> Pokreni aukciju </span></a></li>

                    </ul>
                </li>
                <li class="nav-small-cap"><a href="{{ asset('/users') }}"><i class="mdi mdi-account-group"></i> <span class="hide-menu">Korisnici </span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link two-column waves-effect waves-dark" href="{{ asset('/users') }}" ><i class="mdi mdi-account-group"></i><span class="hide-menu">Korisnici </span></a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item"><a href="{{ asset('/users') }}" class="sidebar-link"><i class="mdi mdi-equal-box"></i><span class="hide-menu"> Pregled korisnika </span></a></li>
                        <li class="sidebar-item"><a href="korisnikedit.php" class="sidebar-link"><i class="mdi mdi-email-alert"></i><span class="hide-menu"> Napravi nalog </span></a></li>
                        <li class="sidebar-item"><a href="korisnici.php" class="sidebar-link"><i class="mdi mdi-email-secure"></i><span class="hide-menu"> Zabrani pristup </span></a></li>

                    </ul>
                </li>
                <li class="nav-small-cap"><i class="mdi mdi-page-layout-header"></i> <span class="hide-menu">Reklame i akcije</span></li>
                <li class="sidebar-item selected"> <a class="sidebar-link  waves-effect waves-dark" href="akcije.php" aria-expanded="false"><i class="mdi mdi-page-layout-header"></i><span>Reklame i akcije </span></a></li>
                @endif
            </ul>

        </nav>
    </div>
</aside>