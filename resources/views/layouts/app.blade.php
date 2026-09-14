<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <header>
        <h1>Praktikum Pemrograman Web Lanjut</h1>
    </header>

    <nav>
        <a href="/home">Home</a>
        <a href="/about">About</a>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>Praktikum Pemrograman Web Lanjut</p>
    </footer>
</body>

</html>