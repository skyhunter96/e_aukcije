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

<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 align-self-center">
            <h4 class="page-title">Pregled korisnika</h4>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Komandna tabla</a></li>
                        <li class="breadcrumb-item"><a href="{{ asset('/users') }}">Korisnici</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-lg-6">
                <div class="card">

                    <form action="{{ (isset($user))? asset('/users/update/'.$user->id)  : asset('/users/store') }}" method="POST" enctype="multipart/form-data">

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
                        <h4 class="card-title">Infomacije o nalogu</h4>
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="inputfname" class="control-label col-form-label">Korisničko ime</label>
                                    <input type="text" name="tbUsername" class="form-control" value="{{ (isset($user))? $user->user : old('tbUsername') }}"/>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="inputlname2" class="control-label col-form-label">Količina tokena</label>
                                    <input type="text" class="form-control" id="inputlname2" placeholder="0">
                                </div>
                            </div>
                        </div>

                    </div>
                    <hr>
                    <div class="card-body">
                        <h4 class="card-title">Dodatne informacije</h4>
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="email1" class="control-label col-form-label">Email</label>
                                    <input type="text" name="tbEmail" class="form-control" value="{{ (isset($user))? $user->email : old('tbEmail') }}"/>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="wen1" class="control-label col-form-label">Kupon kod</label>
                                    <input type="text" name="tbCoupon" class="form-control" id="wen1" placeholder=" " value="{{ (isset($user))? $user->coupon : old('tbCoupon') }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="control-label col-form-label">Profilna slika korisnika</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Otpremi</span>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="inputGroupFile01">
                                            <label class="custom-file-label" for="inputGroupFile01">Odaberi datoteku</label>
                                        </div><br>
                                        <div class="action-form">
                                            <div class="form-group m-b-0 text-right">
                                                <input type="submit" name="addKorisnik" value="{{ (isset($user))? 'Change korisnik' : 'Add korisnik' }} " class="btn btn-default" />
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


<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8 col-xl-9 col-md-9">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex no-block align-items-center m-b-30">
                        <h4 class="card-title">Svi korisnici</h4>

                    </div>
                    <div class="table-responsive">
                        <div id="file_export_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                            <table id="file_export" class="table table-bordered nowrap display dataTable no-footer" role="grid" aria-describedby="file_export_info">
                                <thead>
                                <tr role="row">
                                    <th class="sorting" tabindex="0" aria-controls="file_export" rowspan="1" colspan="1" aria-label="Id" style="width: 0px;">Id</th>
                                    <th class="sorting" tabindex="0" aria-controls="file_export" rowspan="1" colspan="1" aria-label="Ime naloga" style="width: 0px;">Ime naloga</th>
                                    <th class="sorting" tabindex="0" aria-controls="file_export" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 0px;">Imejl</th>
                                    <th class="sorting" tabindex="0" aria-controls="file_export" rowspan="1" colspan="1" aria-label="Phone: activate to sort column ascending" style="width: 0px;">Broj telefona</th>
                                    <th class="sorting" tabindex="0" aria-controls="file_export" rowspan="1" colspan="1" aria-label="Name & Surname: activate to sort column ascending" style="width: 0px;">Ime i Prezime</th>
                                    <th class="sorting" tabindex="0" aria-controls="file_export" rowspan="1" colspan="1" aria-label="Ime naloga" style="width: 0px;">Izmeni</th>
                                    <th class="sorting" tabindex="0" aria-controls="file_export" rowspan="1" colspan="1" aria-label="Ime naloga" style="width: 0px;">Obriši</th>
                                </tr>
                                </thead>
                                <tbody>
                                <!-- Prikaz korisnika-->
                                @isset($users)
                                    @foreach($users as $user)
                                        <tr role="row" class="odd">
                                            <td> {{ $user->userId }} </td>
                                            <td> {{ $user->user }} </td>
                                            <td> {{ $user->email }} </td>
                                            <td> {{ $user->phone }} </td>
                                            <td> {{ $user->name_surname }} </td>
                                            <td> <a href="{{ asset('/users/'.$user->userId) }}">Izmeni</a> </td>
                                            <td> <a href="{{ asset('/users/destroy/'.$user->userId) }}">Obriši</a> </td>
                                        </tr>
                                    @endforeach
                                @endisset
                                </tbody>
                            </table>
                            <div class="dataTables_info" id="file_export_info" role="status" aria-live="polite">Prikazivanje 11 do 20 od 24 </div>
                            <div class="dataTables_paginate paging_simple_numbers" id="file_export_paginate">
                                <ul class="pagination">
                                    <li class="paginate_button page-item previous" id="file_export_previous"><a href="#" aria-controls="file_export" data-dt-idx="0" tabindex="0" class="page-link">Nazad</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="file_export" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                    <li class="paginate_button page-item active"><a href="#" aria-controls="file_export" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="file_export" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                                    <li class="paginate_button page-item next" id="file_export_next"><a href="#" aria-controls="file_export" data-dt-idx="4" tabindex="0" class="page-link">Dalje</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-xl-3 col-md-3">
            <div class="card">
                <div class="card-body">
                    <form>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ti-search"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Pretrazi korisnike..." aria-label="a">
                            <div class="input-group-append">
                                <button class="btn btn-info">Trazi</button>
                            </div>
                        </div>
                    </form>
                    <h4 class="card-title m-t-30">Akcije</h4>
                    <div class="list-group">
                        <a href="#" class="list-group-item">
                            <span class="badge badge-warning text-white m-r-10"><i class="ti-export"></i></span>Promeni informacije</a>
                        <a href="#" class="list-group-item">
                            <span class="badge badge-success m-r-10"><i class="ti-share-alt"></i></span>Ugasi nalog / zabrani pristup</a>
                    </div>
                    <h4 class="card-title m-t-30">Filteri</h4>
                    <div class="list-group">
                        <a href="#" class="list-group-item">
                            <span class="badge badge-info m-r-10"><i class="ti-import"></i></span>Novi korisnici</a>
                        <a href="#" class="list-group-item">
                            <span class="badge badge-primary m-r-10"><i class="ti-layers-alt"></i></span>Iskusni korisnici</a><a href="#" class="list-group-item">
                            <span class="badge badge-warning text-white m-r-10"><i class="ti-export"></i></span>Profili bez licitiranja</a>
                        <a href="#" class="list-group-item">
                            <span class="badge badge-success m-r-10"><i class="ti-share-alt"></i></span>Profili sa licitiranjem</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection