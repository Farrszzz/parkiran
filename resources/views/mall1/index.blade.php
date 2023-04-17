<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/bootstrap-5.3.0-alpha1-dist/css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
    </head>

    @if (Auth::user()->role=='Admin')

    <nav class="navbar navbar-expand-lg bg-light" >
      <div class="container-fluid">
        <a class="navbar-brand" href="/mall1">Dashboard Mall 1</a>
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
    

    @else
    <nav class="navbar navbar-expand-lg bg-light" >
      <div class="container-fluid">
        <a class="navbar-brand" href="/mall1">Dashboard Mall 1</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <li class="nav-item" style="font-size: 23px"><i class="bi bi-person-fill" style="margin-right: 5px"></i>{{Auth::user()->role}}</li>
        </ul>
          <form action="/logout" method="post" class="d-flex align-items-center">
            @csrf
            <button type="submit" class="btn btn-outline-danger"><i class="bi bi-box-arrow-right" style="margin-right: 5px"></i>Logout</button>
          </form>
        </div>
      </div>
    </nav>
    @endif

    <div class="box" style="width:1400px; margin:auto; margin-top:30px; background-color:cream; border-radius:10px">
      <h1 class="display-4" style="margin-left:10px">Dashboard Mall 1</h1>
      <hr class="my-4">
      <p style="margin-left:10px"></p>
    </div>

    <div class="box" style="width:1400px; margin:auto; margin-top:30px; background-color:cream; border-radius:10px">
        <div class="boxMall" style="width:400px; display:inline-block">
            <button style="width:400px; height:150px; background-color:white; border-radius:10px">
            <a class="display-4" style="margin-left:10px; color:black; text-decoration:none" href="/pmasuk1">Petugas Masuk</a>
            </button>
            <hr class="my-4">
        </div>
        <div class="boxMall" style="width:400px; display:inline-block; margin-left:67px">
            <button style="width:400px; height:150px; background-color:white; border-radius:10px">
            <a class="display-4" style="margin-left:10px; color:black; text-decoration:none" href="/pruang1">Petugas Ruang</a>
            </button>
            <hr class="my-4">
        </div>
        <div class="boxMall" style="width:400px; display:inline-block; margin-left:67px">
            <button style="width:400px; height:150px; background-color:white; border-radius:10px">
            <a class="display-4" style="margin-left:10px; color:black; text-decoration:none" href="/pkeluar1">Petugas Keluar</a>
            </button>
            <hr class="my-4">
        </div> 
    </div>

    <div class="box" style="width:1400px; margin:auto; margin-top:30px; background-color:cream; border-radius:10px">
        <div class="boxMall" style="width:1400px; display:inline-block">
            <button class="btn" style="width:1400px; height:150px; background-color:white; border-radius:10px; border: 2px solid black">
            <a class="display-4" style="margin-left:10px; color:black; text-decoration:none" href="/parkir1">Parkir Mall 1</a>
            </button>
            <hr class="my-4">
        </div>
    </div>
   </html> 