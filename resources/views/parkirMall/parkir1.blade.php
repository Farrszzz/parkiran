<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/bootstrap-5.3.0-alpha1-dist/css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
    </head>
    @if (!Auth::check())
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">Sistem Parkir</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item" style="font-size: 23px"><i class="bi bi-person-fill" style="margin-right: 5px"></i>Guest</li>
        </ul>
        <form action="/login" method="get" class="d-flex align-items-center">
          @csrf
          <a href="/login" class="btn btn-primary"><i class="bi bi-box-arrow-in-right" style="margin-right: 5px"></i> Login</a>
          </button>
        </form>
      </div>
    </div>
  </nav>
@elseif (Auth::user()->role=='Admin')
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

    @elseif (Auth::user()->role=='Petugas Masuk' || Auth::user()->role=='Petugas Ruang' || Auth::user()->role=='Petugas Keluar')
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


<div class="box" style="width:1400px; margin:auto; margin-top:50px; background-color:cream; border-radius:10px">
      <h1 class="display-4" style="margin-left:10px">PARKIR LANTAI 1</h1>
      <hr class="my-4">
      <p style="margin-left:10px"></p>
</div>
@for ($i = 0; $i < count($ruangan1); $i++)
    <?php $flag = false; $processed = false; ?>
    @foreach ($data_ruang as $ruang)
        @if ($ruangan1[$i] == $ruang->ruangParkir && $ruang->platNomor != 'NULL')
            <div class="box" style='width:170px; height:200px; background-color:#ec5453; border-radius:15px; display:inline-block; margin-bottom:135px; margin-left:135px'>
                <div class="ruang" style='color:white; text-align:center; padding-top:15px'>
                    {{ $ruangan1[$i] }}
                </div>
                <div class="okupasi" style='color:white; text-align:center; line-height:120px'>
                    {{ $ruang->platNomor }}
                    <?php $flag = true; ?>
                </div>
                <div class="tombol" style='text-align:center; padding-top:5px'>
                </div>
            </div>
            
        @endif
    @endforeach
    @if (!$flag && !$processed)
        <div class="box" style='width:170px; height:200px; background-color:lightgreen; border-radius:15px; display:inline-block; margin-bottom:135px; margin-left:135px'>
            <div class="ruang" style='color:black; text-align:center; padding-top:15px'>
                {{ $ruangan1[$i] }}
            </div>
            <div class="okupasi" style='color:black; text-align:center; line-height:120px; background-color:lightgreen;'>
                KOSONG
                <?php $processed = true; ?>
            </div>
            <div class="tombol" style='text-align:center; padding-top:5px'>
            </div>
        </div>
    @endif
@endfor

<div class="box" style="width:1400px; margin:auto; margin-top:50px; background-color:cream; border-radius:10px">
      <h1 class="display-4" style="margin-left:10px">PARKIR LANTAI 2</h1>
      <hr class="my-4">
      <p style="margin-left:10px"></p>
</div>
@for ($i = 0; $i < count($ruangan2); $i++)
    <?php $flag = false; $processed = false; ?>
    @foreach ($data_ruang as $ruang)
        @if ($ruangan2[$i] == $ruang->ruangParkir && $ruang->platNomor != 'NULL')
            <div class="box" style='width:170px; height:200px; background-color:#ec5453; border-radius:15px; display:inline-block'>
                <div class="ruang" style='color:white; text-align:center; padding-top:15px'>
                    {{ $ruangan2[$i] }}
                </div>
                <div class="okupasi" style='color:white; text-align:center; line-height:120px'>
                    {{ $ruang->platNomor }}
                    <?php $flag = true; ?>
                </div>
                <div class="tombol" style='text-align:center; padding-top:5px'>
                </div>
            </div>
            
        @endif
    @endforeach
    @if (!$flag && !$processed)
        <div class="box" style='width:170px; height:200px; background-color:lightgreen; border-radius:15px; display:inline-block; margin-bottom:135px; margin-left:135px'>
            <div class="ruang" style='color:black; text-align:center; padding-top:15px'>
                {{ $ruangan2[$i] }}
            </div>
            <div class="okupasi" style='color:black; text-align:center; line-height:120px; background-color:lightgreen;'>
                KOSONG
                <?php $processed = true; ?>
            </div>
            <div class="tombol" style='text-align:center; padding-top:5px'>
            </div>
        </div>
    @endif
@endfor

<div class="box" style="width:1400px; margin:auto; margin-top:50px; background-color:cream; border-radius:10px">
      <h1 class="display-4" style="margin-left:10px">PARKIR LANTAI 3</h1>
      <hr class="my-4">
      <p style="margin-left:10px"></p>
</div>
@for ($i = 0; $i < count($ruangan3); $i++)
    <?php $flag = false; $processed = false; ?>
    @foreach ($data_ruang as $ruang)
        @if ($ruangan3[$i] == $ruang->ruangParkir && $ruang->platNomor != 'NULL')
            <div class="box" style='width:170px; height:200px; background-color:#ec5453; border-radius:15px; display:inline-block'>
                <div class="ruang" style='color:white; text-align:center; padding-top:15px'>
                    {{ $ruangan3[$i] }}
                </div>
                <div class="okupasi" style='color:white; text-align:center; line-height:120px'>
                    {{ $ruang->platNomor }}
                    <?php $flag = true; ?>
                </div>
                <div class="tombol" style='text-align:center; padding-top:5px'>
                </div>
            </div>
            
        @endif
    @endforeach
    @if (!$flag && !$processed)
        <div class="box" style='width:170px; height:200px; background-color:lightgreen; border-radius:15px; display:inline-block; margin-bottom:135px; margin-left:135px'>
            <div class="ruang" style='color:black; text-align:center; padding-top:15px'>
                {{ $ruangan3[$i] }}
            </div>
            <div class="okupasi" style='color:black; text-align:center; line-height:120px; background-color:lightgreen;'>
                KOSONG
                <?php $processed = true; ?>
            </div>
            <div class="tombol" style='text-align:center; padding-top:5px'>
            </div>
        </div>
    @endif
@endfor
