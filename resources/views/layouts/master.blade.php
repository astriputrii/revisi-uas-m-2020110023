<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>@yield('Master Layouts')</title>
</head>

<body>
    <ul class="nav justify-content-center fixed-top">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/transactions">Transaction</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/accounts">Account</a>
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
