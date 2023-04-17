<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/bootstrap-5.3.0-alpha1-dist/css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
    </head>

    <nav class="navbar navbar-expand-lg bg-light" >
      <div class="container-fluid">
        <a class="navbar-brand" href="/dashboard">Dashboard Admin</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <li class="nav-item" style="font-size: 23px"><i class="bi bi-person-fill" style="margin-right: 5px"></i>Administrator</li>
        </ul>
          <form action="/logout" method="post" class="d-flex align-items-center">
            @csrf
            <button type="submit" class="btn btn-outline-danger"><i class="bi bi-box-arrow-right" style="margin-right: 5px"></i>Logout</button>
          </form>
        </div>
      </div>
    </nav>
    </html>
@extends('layouts.master')
@section('content')
    @if(session('sukses'))
        <div class="alert alert-success" role="alert">
        {{session('sukses')}}
        </div>
    @endif

    <div class="row">
        <div class="col-6">
            <h1>DATA PEGAWAI</h1>
        </div>
        <div class="col-6">
            <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
            Tambah Petugas
            </button>
        </div>
        <table class="table table-hover">
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Role</th>
                <th>Mall</th>
                <th>AKSI</th>
            </tr>
            @foreach($data_user as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->username}}</td>
                <td>{{$user->role}}</td>
                <td>{{$user->mall}}</td>
                <td>
                    <a href="/pegawai/{{$user->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                    <a href="/pegawai/{{$user->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm
                        ('Apakah anda yakin ingin menghapus?')">Delete</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Petugas</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="/pegawai/create" method="POST">
            {{csrf_field()}}
                <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Username"
                    value="{{old('username')}}">
                    @error('username')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="password"
                    value="{{old('password')}}">
                    @error('password')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                <label for="exampleFormControlSelect1">Role</label>
                <select class="form-control" name="role" id="exampleFormControlSelect1">
                    <option value="Petugas Masuk">Petugas Masuk</option>
                    <option value="Petugas Ruang">Petugas Ruang</option>
                    <option value="Petugas Keluar">Petugas Keluar</option>
                </select>
                </div>
                <div class="form-group">
                <label for="exampleFormControlSelect2">Mall</label>
                <select class="form-control" name="mall" id="exampleFormControlSelect1">
                    <option value="Mall 01">Mall 01</option>
                    <option value="Mall 02">Mall 02</option>
                    <option value="Mall 03">Mall 03</option>
                </select>
                </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection

