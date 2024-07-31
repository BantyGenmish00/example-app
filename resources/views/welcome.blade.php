<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>Document</title>
</head>
<body>
    <!-- resources/views/layouts/app.blade.php -->
<x-header>
    <!-- This is where the page content will be injected -->
    @yield('content')
</x-header>

    
</body>
</html>