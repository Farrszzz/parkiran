<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/bootstrap-5.3.0-alpha1-dist/css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
    </head>

<nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="/" style="color:white">Sistem Parkir</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item" style="font-size: 23px; color:white"><i class="bi bi-person-fill" style="margin-right: 5px; color:white"></i>Guest</li>
        </ul>
        <form action="/login" method="get" class="d-flex align-items-center">
          @csrf
          <a href="/login" class="btn btn-primary"><i class="bi bi-box-arrow-in-right" style="margin-right: 5px"></i> Login</a>
          </button>
        </form>
      </div>
    </div>
  </nav>

  <div class="box" style="width:1400px; margin:auto; margin-top:315px; background-color:cream; border-radius:10px">
        <div class="boxMall" style="width:400px; display:inline-block">
            <button class="btn" style="width:400px; height:150px; background-color:white; border-radius:10px; border: 2px solid black">
            <a class="display-4" style="margin-left:10px; color:black; text-decoration:none" href="/parkir1">Mall 1</a>
            </button>
        </div>
        <div class="boxMall" style="width:400px; display:inline-block; margin-left:67px">
            <button class="btn" style="width:400px; height:150px; background-color:white; border-radius:10px; border: 2px solid black">
            <a class="display-4" style="margin-left:10px; color:black; text-decoration:none" href="/parkir2">Mall 2</a>
            </button>
        </div>
        <div class="boxMall" style="width:400px; display:inline-block; margin-left:67px">
            <button class="btn" style="width:400px; height:150px; background-color:white; border-radius:10px; border: 2px solid black">
            <a class="display-4" style="margin-left:10px; color:black; text-decoration:none" href="/parkir3">Mall 3</a>
            </button>
        </div> 
    </div>