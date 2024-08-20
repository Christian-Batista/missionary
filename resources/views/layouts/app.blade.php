<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Missionary')</title>
    <!-- Agregar enlaces a CSS aquí -->
    @vite('resources/css/app.css')
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
    <!-- Agregar scripts aquí -->
</body>
</html>