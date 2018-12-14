@extends('layouts.admin')

@section('content')




    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 align-self-center">
                <h4 class="page-title">Pravljenje</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Komandna tabla</a></li>
                            <li class="breadcrumb-item"><a href="aukcije.php">Aukcije</a></li>
                            <li class="breadcrumb-item" aria-current="page"><a>Pokretanje aukcije</a></li>
                            <a>
                            </a>
                        </ol>
                        <a>
                        </a>
                    </nav>
                    <a>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <a>
        </a>
        <div class="row">
            <a>
                <!-- Column -->
            </a>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ asset('/auctions/store') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-body">
                                <a>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Naziv proizvoda</label>
                                                <input type="text" name="tbName" id="firstName" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <!--/row-->
                                    <h5 class="card-label">Opis proizvoda</h5>
                                    <div class="row">
                                        <div class="col-md-12 ">
                                            <div class="form-group">
                                                <textarea name="taDesc" class="form-control" rows="4">Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. but the majority have suffered alteration in some form, by injected humour</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="card-label">Datum</h5>

                                    <input type=datetime-local value="2013-10-24 20:36:00" step="1" name="tbDate">

                                </a>
                                <div class="row">

                                    <div class="col-md-3">
                                        <h5 class="card-title m-t-20">Otpremi slike</h5>
                                        <div class="el-element-overlay">
                                            <div class="el-card-item">
                                                <div class="el-card-avatar el-overlay-1"> <img src="img/proizvod.jpg" alt="user">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn btn-info waves-effect waves-light"><span>Otpremite još slika</span>
                                            <input type="file" name="tbPic" class="upload">
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="form-actions m-t-40">
                                <button type="submit" class="btn btn-info"> <i class="fa fa-check"></i>Pokreni</button>
                                <button type="button" class="btn btn-dark">Odustani</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection