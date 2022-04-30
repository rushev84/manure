<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">


        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('manureweb.index') }}">Удобрения</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('culture.index') }}">Культуры</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </div>


    @yield('content')
</div>
</body>
</html>
