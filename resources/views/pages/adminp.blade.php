@extends('layouts.admin')

@section('content')

<div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title">Komandna tabla</h4>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Komandna tabla</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Glavna stranica</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card card-hover">
                <div class="card-body border-top">
                    <div class="row m-b-0">
                        <div class="col-lg-3 col-md-6">
                            <div class="d-flex align-items-center">
                                <div class="m-r-10"><span class="text-orange display-5"><i class="mdi mdi-wallet"></i></span></div>
                                <div>
                                    <span>Vrednost predmeta</span>
                                    <h3 class="font-medium m-b-0">#NEDOVRSENO</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="d-flex align-items-center">
                                <div class="m-r-10"><span class="text-cyan display-5"><i class="mdi mdi-account-circle"></i></span></div>
                                <div>
                                    <span>Broj registrovanih naloga</span>
                                    <h3 class="font-medium m-b-0">{{ $registered_users_count }}</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="d-flex align-items-center">
                                <div class="m-r-10"><span class="text-info display-5"><i class="mdi mdi-shopping"></i></span></div>
                                <div>
                                    <span>Broj pokrenutih aukcija</span>
                                    <h3 class="font-medium m-b-0">{{ $auction_count }}</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="d-flex align-items-center">
                                <div class="m-r-10"><span class="text-primary display-5"><i class="mdi mdi-eye"></i></span></div>
                                <div>
                                    <span>Broj unikatnih korisnika</span>
                                    <h3 class="font-medium m-b-0">{{ $user_count }}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 col-xl-6">
            <div class="card card-hover">
                <div class="card-body">
                    <h4 class="card-title">Najpopularnije aukcije</h4>
                    <h5 class="card-subtitle">Pregled poslednjih 30 dana</h5>
                    <div class="table-responsive">
                        <table class="table v-middle">
                            <thead>
                            <tr>
                                <th class="border-top-0">Naziv aukcije</th>
                                <th class="text-center border-top-0">Status</th>
                                <th class="text-center border-top-0">Ponuda</th>
                                <th class="text-center border-top-0">Pregleda</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="font-bold">Samsung Galaxy S9</td>
                                <td class="text-center"><i class="fa fa-circle text-orange"></i></td>
                                <td class="text-center">14</td>
                                <td class="font-bold text-center">132</td>
                            </tr>
                            <tr>
                                <td class="font-bold">XBOX 360 SLIM E 500GB</td>
                                <td class="text-center"><i class="fa fa-circle text-success"></i></td>
                                <td class="text-center">09</td>
                                <td class="font-bold text-center">131</td>
                            </tr>
                            <tr>
                                <td class="font-bold">Samsung Galaxy S8</td>
                                <td class="text-center"><i class="fa fa-circle text-success"></i></td>
                                <td class="text-center">07</td>
                                <td class="font-bold text-center">122</td>
                            </tr>
                            <tr>
                                <td class="font-bold">Nintendo Switch</td>
                                <td class="text-center"><i class="fa fa-circle text-success"></i></td>
                                <td class="text-center">04</td>
                                <td class="font-bold text-center">98</td>
                            </tr>
                            <tr>
                                <td class="font-bold">Nokia 3310</td>
                                <td class="text-center"><i class="fa fa-circle text-success"></i></td>
                                <td class="text-center">01</td>
                                <td class="font-bold text-center">95</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-xl-6">
            <div class="card card-hover">
                <div class="card-body" style="background:url(../../assets/images/background/active-bg.png) no-repeat top center;">
                    <div class="p-t-20 text-center">
                        <i class="mdi mdi-file-chart display-4 text-orange d-block"></i>
                        <span class="display-4 d-block font-medium">#NEDOVRSENO</span>
                        <span>Broj aktivnih korisnika</span>
                        <div class="progress m-t-40" style="height:4px;">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-orange" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 65%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="row m-t-30 m-b-20">
                            <div class="col-4 border-right text-left">
                                <h3 class="m-b-0 font-medium">60%</h3>
                                Računar
                            </div>
                            <div class="col-4 border-right">
                                <h3 class="m-b-0 font-medium">28%</h3>
                                Mobilni telefon
                            </div>
                            <div class="col-4 text-right">
                                <h3 class="m-b-0 font-medium">12%</h3>
                                Tablet
                            </div>
                        </div>
                        <a href="#" class="waves-effect waves-light m-t-20 btn btn-lg btn-info accent-4 m-b-20">Više informacija</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="card card-hover">
                <div class="card-body">
                    <h4 class="card-title">Trenutne aukcije #NEDOVRSENO</h4>
                    <div class="product d-flex align-items-center p-t-20 p-b-20 border-bottom">
                        <img alt="" class="product-image m-r-20" src="img/iphone.png">
                        <div class="product-detail w-100">
                            <h5 class="font-bold">Apple iPhone 6+ 128 GB Space Gray</h5>
                            <span class="font-15 text-muted">Aukcija ima XXX pregleda i XXX ponuda</span>
                            <div class="d-flex do-block align-items-center m-t-10">
                                <h4 class="font-20 font-bold text-info">12.20 RSD</h4>
                            </div>
                        </div>
                    </div>
                    <div class="product d-flex align-items-center p-t-20 p-b-20 border-bottom">
                        <img alt="" class="product-image m-r-20" src="img/iphone.png">
                        <div class="product-detail w-100">
                            <h5 class="font-bold">Apple iPhone 6+ 128 GB Space Gray</h5>
                            <span class="font-15 text-muted">Aukcija ima XXX pregleda i XXX ponuda</span>
                            <div class="d-flex do-block align-items-center m-t-10">
                                <h4 class="font-20 font-bold text-info">12.20 RSD</h4>
                            </div>
                        </div>
                    </div>
                    <div class="product d-flex align-items-center p-t-20">
                        <img alt="" class="product-image m-r-20" src="img/iphone.png">
                        <div class="product-detail w-100">
                            <h5 class="font-bold">Apple iPhone 6+ 128 GB Space Gray</h5>
                            <span class="font-15 text-muted">Aukcija ima XXX pregleda i XXX ponuda</span>
                            <div class="d-flex do-block align-items-center m-t-10">
                                <h4 class="font-20 font-bold text-info">12.20 RSD</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- column -->
        <div class="col-sm-12 col-lg-6">
            <div class="card card-hover">
                <div class="card-body">
                    <h4 class="card-title">Obaveštenja <div id="NEDOVRSENO"></div></h4>
                    <div class="feed-widget scrollable ps-container ps-theme-default" data-ps-id="f708b1a7-1902-9914-0990-080ff34b1009" style="">
                        <ul class="list-style-none feed-body m-0 p-b-20">
                            <li class="feed-item">
                                <div class="feed-icon bg-info"><i class="far fa-bell"></i></div>
                                Sajt ažurirao Aleksej sa verzije 1.0 na 1.1<span class="ml-auto font-12 text-muted">18. jul. 2018.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection