<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>UAS-M-2020110023 {{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <ul class="nav justify-content-center fixed-top">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/transactions">Transactions</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/accounts">Accounts</a>
        </li>
    </ul>

    <div class="container mt-5">
        @yield('content')
    </div>

    <footer class="bg-dark text-white text-center py-3 fixed-bottom">
        <p>&copy;2024 All Rights Reserved.</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
