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
    <div class="bg-gray-400 flex justify-center items-center w-screen h-screen">
        <h1>@yield('welcome')</h1>
    </div>  
</body>
</html>