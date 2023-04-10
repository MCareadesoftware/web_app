<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="{{-- bg-gradient-to-r from-green-300 via-red-600 to-green-400 --}} flex justify-center items-center w-screen h-screen">
        @yield('welcome')
    </div>  
</body>
</html>

