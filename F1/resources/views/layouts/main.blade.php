<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Golos+Text:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{asset('js/main.js')}}" defer></script>
    <title>The F1 Web Project</title>
</head>
<body>
    {{-- Header --}}
    @include("components.header")

    {{-- nav --}}
    @include("components.nav-menu")


    {{-- Content --}}
    @yield('content')

    {{-- Footert --}}
    @include("components.footer")


</body>
</html>

