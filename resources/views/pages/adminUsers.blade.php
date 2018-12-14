@extends('layouts.front')

@section('content')

    @empty(!session('message'))
        <div class="alert alert-danger">
            {{ session('message') }}
        </div>
    @endempty



    <form action="{{ (isset($user))? asset('/users/update/'.$user->id)  : asset('/users/store') }}" method="POST" enctype="multipart/form-data">

        {{ csrf_field() }}

        <div class="form-group">
            <label>Korisnicko ime:</label>
            <input type="text" name="tbUsername" class="form-control" value="{{ (isset($user))? $user->user : old('tbUsername') }}"/>
        </div>
        <div class="form-group">
            <label>Lozinka:</label>
            <input type="password" name="tbPass" class="form-control" value="{{ (isset($user))? $user->pass : old('tbPass') }}"/>
        </div>
        <div class="form-group">
            <label>Ime i Prezime:</label>
            <input type="text" name="tbNameSurname" class="form-control" value="{{ (isset($user))? $user->name_surname : old('tbNameSurname') }}"/>
        </div>
        <div class="form-group">
            <label>E-mail:</label>
            <input type="text" name="tbEmail" class="form-control" value="{{ (isset($user))? $user->email : old('tbEmail') }}"/>
        </div>
        <div class="form-group">
            <label>Telefon:</label>
            <input type="text" name="tbPhone" class="form-control" value="{{ (isset($user))? $user->phone : old('tbPhone') }}"/>
        </div>
        <div class="form-group">
            <input type="submit" name="addKorisnik" value="{{ (isset($user))? 'Change korisnik' : 'Add korisnik' }} " class="btn btn-default" />
        </div>
    </form>

    <table class="table">
        <tr>
            <td>id</td>
            <td>Ime i Prezime</td>
            <td>E-mail</td>
            <td>Telefon</td>
            <td>Username</td>
            <td>Izmeni</td>
            <td>Obriši</td>
        </tr>
        <!-- Prikaz korisnika-->
        @isset($users)
            @foreach($users as $user)
                <tr>
                    <td> {{ $user->userId }} </td>
                    <td> {{ $user->name_surname }} </td>
                    <td> {{ $user->email }} </td>
                    <td> {{ $user->phone }} </td>
                    <td> {{ $user->user }} </td>
                    <td> <a href="{{ asset('/users/'.$user->userId) }}">Izmeni</a> </td>
                    <td> <a href="{{ asset('/users/destroy/'.$user->userId) }}">Obriši</a> </td>
                </tr>
            @endforeach
        @endisset
    </table>

@endsection