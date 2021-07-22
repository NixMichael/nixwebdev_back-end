<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
    <link rel="stylesheet" href="https://nixwebdev-api.herokuapp.com/css/app.css">
    {{-- <script src="{{asset('js/app.js')}}" defer></script> --}}
    <script src="https://nixwebdev-api.herokuapp.com/js/app.js" defer></script>

    <title>{{ config('app.name') }}</title>

</head>
<body>
    <nav>
        <a href="{{ url('/') }}">
            <img src="https://nixwebdev.s3.eu-west-2.amazonaws.com/graphics/logo.png"><span id="title">Content Editor</span>
        </a>
        <div>
            @guest
                @if (Route::has('login'))
                        <a class="nav-link nav-item" href="{{ route('login') }}">Login</a>
                @endif

                @else
                        <a class="nav-link nav-item" href="/">Home</a>
                        <a class="nav-link nav-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
            @endguest
        </div>
    </nav>

    <main>
        @yield('content')
    </main>
</body>
</html>
