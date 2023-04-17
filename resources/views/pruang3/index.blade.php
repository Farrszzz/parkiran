<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/bootstrap-5.3.0-alpha1-dist/css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
    </head>

    @if (Auth::user()->role=='Admin')

    <nav class="navbar navbar-expand-lg bg-dark" style="outline: 2px solid black">
    <div class="container-fluid">
      <a class="navbar-brand" href="/mall3" style="color:white">Dashboard Mall 3</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item" style="font-size: 23px; color:white"><i class="bi bi-person-fill" style="margin-right: 5px; color:white"></i>Administrator</li>
        </ul>
          <form action="/logout" method="post" class="d-flex align-items-center">
            @csrf
            <button type="submit" class="btn" style="outline: 1px solid #ec5453; color:white"><i class="bi bi-box-arrow-right" style="margin-right: 5px"></i>Logout</button>
          </form>
        </div>
      </div>
    </nav>

    @else
    <nav class="navbar navbar-expand-lg bg-dark" style="outline: 2px solid black">
    <div class="container-fluid">
      <a class="navbar-brand" href="/mall3" style="color:white">Dashboard Mall 3</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item" style="font-size: 23px; color:white"><i class="bi bi-person-fill" style="margin-right: 5px; color:white"></i>{{Auth::user()->role}}</li>
        </ul>
          <form action="/logout" method="post" class="d-flex align-items-center">
            @csrf
            <button type="submit" class="btn" style="outline: 1px solid #ec5453; color:white"><i class="bi bi-box-arrow-right" style="margin-right: 5px"></i>Logout</button>
          </form>
        </div>
      </div>
    </nav>
    @endif
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
                <h1>DATA Parkir</h1>
            </div>
            <table class="table">
                <tr>
                    <th>ID Parkir</th>
                    <th>Plat Nomor</th>
                    <th>Ruang</th>
                    <th>Aksi</th>
                </tr>
                
                @foreach($data_parkir as $parkir)
                @if($parkir->sudah_masuk == 1)
                <tr>
                    @if($parkir->sudah_masuk == 0)
                        <tr style = 'background-color:green; color:white'>
                    @else
                        <tr style = 'background-color:red; color:white'>
                    @endif
                    <td>{{$parkir->id}}</td>
                    <td>{{$parkir->platNomor}}</td>
                    @if($parkir->sudah_masuk == 0)
                        <td>Belum masuk</td>
                    @else
                        <td>{{$parkir->ruangParkir}}</td>
                    @endif
                    <td>
                    <a href="/pruang3/{{$parkir->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                    </td>

                </tr>
                @endif
                @endforeach
                
            </table>
        </div>
    </div>
    
@endsection