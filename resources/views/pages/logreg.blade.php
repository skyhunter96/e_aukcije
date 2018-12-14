@extends('layouts.front')

@section('content')

<div class="container">
    <div class="row">


        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="col-sm-8">

            <!--******************* LOGINFORM ********************-->

            <form class="tg-formshoppingcart" action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="tg-register">
                    <div class="tg-borderheading">
                        <h2>Nemate nalog?<span>Registrujte se</span></h2>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="tbNameSurname" placeholder="Ime i prezime">
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="tbUser" placeholder="Korisnicko ime">
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="form-group">
                                <input type="email" class="form-control" name="tbEmail" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="tbPhone" placeholder="Broj telefona">
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="form-group">
                                <input type="password" class="form-control" name="tbPass" placeholder="Lozinka">
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="form-group">
                                <input type="password" class="form-control" name="tbPassConfirm" placeholder="Potvrdite lozinku">
                            </div>
                        </div>
                        <div class="col-sm-12 col-xs-12">
                            <input type="submit" name="btnLogin" value="Registruj se" class="btn btn-primary" />
                        </div>
                    </div>

                </div>

            </form>

            <!--******************* LOGINFORMEND ********************-->
        </div>

        <div class="col-sm-4">

            <!--******************* REGISTERFORM ********************-->

            <form class="tg-formshoppingcart" action="{{ route('login') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="tg-cartcol tg-login">
                    <div class="tg-borderheading">
                        <h2>Sigurni ste<span>Prijavite se na vas nalog</span></h2>
                    </div>
                    <div class="form-group">
                        <input type="text" name="tbUsername" class="form-control" placeholder="Korisnicko ime">
                    </div>
                    <div class="form-group">
                        <input type="password" name="tbPassword" class="form-control" placeholder="Lozinka">
                    </div>
                    <div class="tg-kepploginpassword">
                        <div class="tg-checkbox">
                            <input type="checkbox" name="name" id="keeplogin">
                            <label for="keeplogin">Ostani prijavljen</label>
                        </div>
                        <div class="tg-forgotpassword">
                            <a href="#">Zaboravili ste lozinku?</a>
                        </div>
                    </div>
                    <input type="submit" name="btnLogin1" value="Login se" class="btn btn-lg btn-primary btn-block" />
                </div>

            </form>

            <!--******************* REGISTERFORMEND ********************-->

        </div>


    </div>
</div>

@endsection('content')