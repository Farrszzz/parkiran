<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/bootstrap-5.3.0-alpha1-dist/css/app.css">
    </head>

    
    
    

    @if (Auth::user()->role=='Petugas Masuk')
    <nav class="navbar navbar-expand-lg bg-light" >
      <div class="container-fluid">
        <a class="navbar-brand" href="/mall1">Dashboard Mall 1</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href= "#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Parkir Mall
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/mall1">Mall 1</a></li>
                <li><a class="dropdown-item" href="/mall2">Mall 2</a></li>
                <li><a class="dropdown-item" href="/mall3">Mall 3</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/pmasuk1">Petugas Masuk</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="/pruang1">Petugas Ruang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/pkeluar1">Petugas Keluar</a>
            </li> -->
          </ul>
          <form action="/logout" method="post">
            @csrf
            <button type="submit" class="btn btn-outline-success"><i class="bi bi-box-arrow-right"></i>Logout</button>
          </form>
        </div>
      </div>
    </nav>

    @elseif (Auth::user()->role=='Petugas Ruang')
    <nav class="navbar navbar-expand-lg bg-light" >
      <div class="container-fluid">
        <a class="navbar-brand" href="/mall1">Dashboard Mall 1</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href= "#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Parkir Mall
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/mall1">Mall 1</a></li>
                <li><a class="dropdown-item" href="/mall2">Mall 2</a></li>
                <li><a class="dropdown-item" href="/mall3">Mall 3</a></li>
              </ul>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="/pmasuk1">Petugas Masuk</a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" href="/pruang1">Petugas Ruang</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="/pkeluar1">Petugas Keluar</a>
            </li> -->
          </ul>
          <form action="/logout" method="post">
            @csrf
            <button type="submit" class="btn btn-outline-success"><i class="bi bi-box-arrow-right"></i>Logout</button>
          </form>
        </div>
      </div>
    </nav>

    @elseif (Auth::user()->role=='Petugas Keluar')
    <nav class="navbar navbar-expand-lg bg-light" >
      <div class="container-fluid">
        <a class="navbar-brand" href="/mall1">Dashboard Mall 1</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href= "#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Parkir Mall
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/mall1">Mall 1</a></li>
                <li><a class="dropdown-item" href="/mall2">Mall 2</a></li>
                <li><a class="dropdown-item" href="/mall3">Mall 3</a></li>
              </ul>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="/pmasuk1">Petugas Masuk</a>
            </li> -->
            <!-- <li class="nav-item">
              <a class="nav-link" href="/pruang1">Petugas Ruang</a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" href="/pkeluar1">Petugas Keluar</a>
            </li>
          </ul>
          <form action="/logout" method="post">
            @csrf
            <button type="submit" class="btn btn-outline-success"><i class="bi bi-box-arrow-right"></i>Logout</button>
          </form>
        </div>
      </div>
    </nav>
    @endif
    @extends('cdn')
</html>
