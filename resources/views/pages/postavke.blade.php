@extends('layouts.admin')

@section('content')

    @empty(!session('message'))
        <div class="alert alert-danger">
            {{ session('message') }}
        </div>
    @endempty

    @empty(!session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endempty

    @empty(!session('success'))
        <div class="alert alert-success">{{ session('success') }} </div>
    @endempty

    @empty(!session('status'))
        <div class="alert alert-success">{{ session('status') }} </div>
    @endempty


    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-lg-6">
                <div class="card">

                    <form action="{{ (isset($user))? asset('/users/updateByUser/'.$user->id)  : asset('/users/store') }}" method="POST" enctype="multipart/form-data">

                        {{ csrf_field() }}

                        <div class="card-body">
                            <h4 class="card-title">Osnovne informacije</h4>
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="inputname" class="control-label col-form-label">Ime i Prezime</label>
                                        <input type="text" name="tbNameSurname" class="form-control" value="{{ (isset($user))? $user->name_surname : old('tbNameSurname') }}"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="card-body">
                            <h4 class="card-title">Kontakt i slanje paketa</h4>
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="inputname" class="control-label col-form-label">Broj mobilnog telefona</label>
                                        <input type="text" name="tbPhone" class="form-control" value="{{ (isset($user))? $user->phone : old('tbPhone') }}"/>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="inputname" class="control-label col-form-label">Grad</label>
                                        <input type="text" name="tbCity" class="form-control" id="inputname" placeholder="Grad korisnika" value="{{ (isset($user))? $user->city : old('tbCity') }}">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="inputlname" class="control-label col-form-label">Mesto</label>
                                        <input type="text" name="tbPlace" class="form-control" id="inputlname" placeholder="Mesto korisnika" value="{{ (isset($user))? $user->place : old('tbPlace') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="inputname" class="control-label col-form-label">Adresa</label>
                                        <input type="text" name="tbAddress" class="form-control" id="inputname" placeholder="Adresa korisnika" value="{{ (isset($user))? $user->address : old('tbAddress') }}">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="inputlname" class="control-label col-form-label">ZIP kod</label>
                                        <input type="text" name="tbZip" class="form-control" id="inputlname" placeholder="ZIP kod korisnika" value="{{ (isset($user))? $user->zip : old('tbZip') }}">
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="col-sm-12 col-lg-6">
                            <div class="card">

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="control-label col-form-label">Profilna slika korisnika</label>
                                                @isset($user)
                                                    <img src="{{ asset($user->img_path) }}" width="150"/>
                                                @endisset
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Otpremi</span>
                                                    </div>

                                                    <div class="custom-file">

                                                        <input type="file" class="custom-file-input" id="tbPic" name="tbPic">
                                                        <label class="custom-file-label" for="inputGroupFile01">Odaberi sliku</label>
                                                    </div><br>
                                                    <div class="action-form">
                                                        <div class="form-group m-b-0 text-right">
                                                            <input type="submit" name="addKorisnik" value="{{ (isset($user))? 'Izmeni podatke' : 'Add korisnik' }} " class="btn btn-default" />
                                                            <button type="reset" class="btn btn-dark waves-effect waves-light">Odustani</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div></div>
                    </form>
                </div>
            </div>
        </div>
    </div>






@endsection