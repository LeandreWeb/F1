<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Golos+Text:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/teams.css') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png') }}"
        media="(prefers-color-scheme: dark)" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}"
        media="(prefers-color-scheme: dark)" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}"
        media="(prefers-color-scheme: dark)" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon_light/apple-touch-icon.png') }}"
        media="(prefers-color-scheme: light)" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon_light/favicon-32x32.png') }}"
        media="(prefers-color-scheme: light)" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon_light/favicon-16x16.png') }}"
        media="(prefers-color-scheme: light)" />
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.css' rel='stylesheet' />
    <link rel="manifest" href="{{ asset('favicon_light/site.webmanifest') }}" />
    <script src="https://kit.fontawesome.com/23ad99ebdd.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/main.js') }}" defer></script>
    <script src="{{ asset('js/loader.js') }}" defer></script>
    <title>The F1 Web Project</title>
</head>

<body></body>
{{-- Header --}}
@include('components.header')

{{-- nav --}}
@include('components.nav-menu')


{{-- Content --}}
@yield('content')

{{-- Footer --}}
@include('components.footer')


</body>

</html>
