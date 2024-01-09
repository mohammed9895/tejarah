<!doctype html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tejarah</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Arabic:wght@400;700&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/79e25a78de.js" crossorigin="anonymous"></script>

    @livewireStyles

    @vite('resources/css/app.css')
</head>
<body dir="rtl">
    <x-partials.nav></x-partials.nav>
    {{ $slot }}
    <x-partials.footer></x-partials.footer>

    <script src="{{ asset('js/orgchart.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
@livewireScripts
</body>
</html>
