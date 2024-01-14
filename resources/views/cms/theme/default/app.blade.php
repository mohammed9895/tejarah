@php
    use SolutionForest\FilamentCms\Facades\FilamentCms;

    /** @var ?\SolutionForest\FilamentCms\SEO\Support\SEOData $seo */

    $theme = FilamentCms::getCurrentTheme();
@endphp
    <!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="scroll-smooth">
<head>
    @if ($seo)
        {!! seo($seo) !!}
    @endif
    @stack('beforeCoreStyles')
    @stack('styles')
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Arabic:wght@400;700&display=swap"
          rel="stylesheet">

    <script src="https://kit.fontawesome.com/79e25a78de.js" crossorigin="anonymous"></script>
    @vite('resources/css/app.css')
</head>

<body class="" dir="rtl">
        @section('header')
            @include("cms.theme.{$theme}.header")
        @show


        @yield('content')


        @section('footer')
            @include("cms.theme.{$theme}.footer")
        @show

        @stack('beforeCoreScripts')
        @stack('scripts')
        <script src="{{ asset('js/orgchart.js') }}"></script>
        <script type="module" src="{{ asset('js/main.js') }}"></script>
</body>
</html>
