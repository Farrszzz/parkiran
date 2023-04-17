<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=5.0">
    <link rel="stylesheet" href="/assets/bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/bootstrap-5.3.0-alpha1-dist/js/popper.min.js">
    <title>@yield('title')</title>
</head>
<body class="bg-dark text-white">
    @include('master.navigasi')
    @yield('content')
    <div class="d-flex align-items-center justify-content-center" style="height: 500px">
     <h1>@yield('content')</h1>
</div>
</body>
</html>