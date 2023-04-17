@extends('layouts.master')

@section('content')
    <h1>Edit Data Petugas</h1>
    @if(session('sukses'))
        <div class="alert alert-success" role="alert">
        {{session('sukses')}}
        </div>
    @endif
        <div class="row">
        <div class="col lg-12">
        <form action="/pegawai/{{$user->id}}/update" method="POST">
            {{csrf_field()}}
                <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby
                    ="emailHelp" placeholder="username" value="{{$user->username}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputEmail1" aria-describedby
                    ="emailHelp" placeholder="password" value="{{$user->password}}">
                </div>
                <div class="form-group">
                <label for="exampleFormControlSelect1">Role</label>
                <select class="form-control" name="role" id="exampleFormControlSelect1">
                    <option value="Petugas Masuk">Petugas Masuk</option>
                    
                    <option value="Petugas Ruang">Petugas Ruang</option>
                    
                    <option value="Petugas Keluar">Petugas Keluar</option>
                    
                </select>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
        </form>
        </div>
        </div>
@endsection

