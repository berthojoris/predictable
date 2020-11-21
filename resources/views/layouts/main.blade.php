<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <title>Prediksi | BBFS</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('template/assets/dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .container,
        .container-lg,
        .container-md,
        .container-sm,
        .container-xl {
            max-width: 100%;
        }
        dl, ol, ul {
            margin-top: 0;
            margin-bottom: 0rem;
        }
        .bigSize {
            font-size: 40px;
        }
        .informasi {
            font-size: 20px;
        }
    </style>
    <link href="{{ asset('template/navbar-fixed/navbar-top-fixed.css') }}" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="{{ route('index') }}">BBFS Predictable</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item {{ setActive('index') }}">
                    <a class="nav-link" href="{{ route('index') }}">Home</a>
                </li>
                <li class="nav-item {{ setActive('singapore') }}">
                    <a class="nav-link" href="{{ route('singapore') }}">Singapore</a>
                </li>
                <li class="nav-item {{ setActive('sydney') }}">
                    <a class="nav-link" href="{{ route('sydney') }}">Sydney</a>
                </li>
                <li class="nav-item {{ setActive('hongkong') }}">
                    <a class="nav-link" href="{{ route('hongkong') }}">Hongkong</a>
                </li>
            </ul>
        </div>
    </nav>

    <main role="main" class="container">
        @yield('content')
    </main>
    <script src="{{ asset('template/navbar-fixed/jquery.3.5.1.js') }}"></script>
    <script src="{{ asset('template/assets/dist/js/bootstrap.bundle.min.js') }}"></script>

</html>
