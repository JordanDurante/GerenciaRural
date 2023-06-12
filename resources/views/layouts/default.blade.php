<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link
        rel="stylesheet"
        href="{{asset('./css/app.css')}}"
    >
    <title>@yield('title', 'Meu Titulo') </title>
    <style>
        body {
            background-color: #DBE8D8;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg" style="background-image: linear-gradient(to right, #355E3B, #93C572);">
        <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
            <a class="nav-link" style="color: white;" href="{{route('culturas-index')}}">Culturas</a>
            <a class="nav-link" style="color: white;" href="{{route('safras-index')}}">Safras</a>
            </div>
        </div>
        </div>
    </nav>
   @yield('content')
   <script src="{{asset('js.app.js')}}"></scritp>
</body>
</html>