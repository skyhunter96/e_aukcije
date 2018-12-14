<header id="tg-header" class="tg-header tg-haslayout">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">

                <div class="tg-topbar">
                    <div class="tg-admin">
                        <div class="tg-gustuser">
                            <figure class="tg-gustuserpic">
                                <a href="#"><img src="{{ asset('/') }}pics/img-01.jpg" alt="image description"></a>
                            </figure>
                            <div class="tg-usermessage">
                                <strong>howdy, Guest!</strong>
                                <span>Get a free <a href="#">Registration</a>, Or <a href="#">Sign In</a></span>
                            </div>
                        </div>
                        @if(session('user'))

                        <div class="tg-user">
                            <figure class="tg-userpic">
                                <a href="#"><img src="http://www/alek.jpg" alt="image description"></a>
                            </figure>
                            <div class="tg-username tg-dropdown dropdown">
                                <a href="javascript();" id="tg-usermenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pozdrav,
                                    @foreach(Session::get('user') as $user)
                                        {{ $user->name_surname }}
                                    @endforeach (XX)</a>
                                <ul class="dropdown-menu tg-dropdownmenu" aria-labelledby="tg-usermenu">
                                    <li><a href="#"><i class="fa fa-list"></i><span>Lista želja</span></a></li>
                                    <li><a href="#"><i class="fa fa-user"></i><span>Moj profil</span></a></li>
                                    <li><a href="{{ asset('/postavke/' . $user->id) }}"><i class="fa fa-gears"></i><span>Postavke profila</span></a></li>
                                    @if(session('isAdmin'))
                                        <li><a href='{{ route('admin_panel') }}'><i class="fa fa-sign-out"></i><span>Admin Panel</span></a></li>
                                    @endif


                                    @if(session()->has('user'))
                                        <li><a href="{{ route('logout') }}"><i class="fa fa-sign-out"></i><span>Odjavi se </span></a></li>
                                    @endif
                                </ul>
                            </div>
                        </div>

                        @endif

                        @empty(session('user'))
                            <div class="tg-gustuser">
                                <figure class="tg-gustuserpic">
                                    <a href="#"><img src="images/img-01.jpg" alt="image description"></a>
                                </figure>
                                <div class="tg-usermessage">
                                    <strong>Dobro došli!</strong>
                                    <span>Besplatno se <a href="#">registrujte</a>, ili se <a href="#">prijavite</a></span>
                                </div>
                            </div>
                        @endempty
                    </div>

                    <strong class="tg-logo">
                        <a href="index.php"><img src="{{ asset('/') }}pics/logo.png" alt="Logotip e-aukcije.rs"></a>
                    </strong>
                </div>
                <div class="tg-navigationarea">
                    <nav id="tg-nav" class="tg-nav">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tg-navigation" aria-expanded="false">
                                <span class="sr-only">Navigacija</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div id="tg-navigation" class="tg-navigation collapse navbar-collapse">
                            <ul>
                                <li class="tg-active"><a href="index.php">Glavna stranica</a></li>
                                <li class="tg-hasdropdown"><span class="tg-dropdowarrow"><i class="fa fa-angle-down"></i></span>
                                    <a href="{{ asset('auctions') }}">Aukcije</a>
                                    <ul class="tg-dropdownmenu">
                                        <li><a href="{{ asset('auctions') }}">Aktivne aukcije</a></li>
                                        <li><a href="{{ asset('auctions') }}">Buduće aukcije</a></li>
                                        <li><a href="{{ asset('auctions') }}">Završene aukcije</a></li>
                                    </ul>
                                </li>
                                <li><a href="pomocnicentar.php">Pomoćni centar</a></li>
                                <li><a href="cpp.php">Često postavljana pitanja</a></li>
                                <li><a href="korisnik.php">Kupi tokene</a></li>
                                <li><a href="kontakt.php">Kontakt</a></li>

                                @empty(session('user'))
                                    <li><a href="{{ route('logreg') }}">Logovanje</a></li>
                                @endempty

                                @empty(session('user'))
                                    <li><a href='{{ route('logreg') }}'>Registracija</a></li>
                                @endempty

                            </ul>
                        </div>
                    </nav>
                </div>
                <!--************************************
                        Navigation End
                *************************************-->
            </div>
        </div>
    </div>
</header>