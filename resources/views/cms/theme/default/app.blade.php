@php
    use SolutionForest\FilamentCms\Facades\FilamentCms;

    /** @var ?\SolutionForest\FilamentCms\SEO\Support\SEOData $seo */

    $theme = FilamentCms::getCurrentTheme();
@endphp
    <!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'en' ? 'ltr' : 'rtl' }}" class="scroll-smooth">
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
          integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
          integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <script src="https://kit.fontawesome.com/79e25a78de.js" crossorigin="anonymous"></script>
        <style>
            .owl-dots {
                position: absolute;
                top: 50%;
                transform: translateY(-50%);
                left: 20px;
                z-index: 100000;
                display: flex;
                flex-direction: column;
            }
            .owl-dots button {
                width: 20px;
                height: 20px;
                background: #eee !important;
                opacity: 0.5;
                border-radius: 100px;
                margin-top: 10px;
            }

            .owl-dot.active {
                background: #c54139 !important;
                opacity: 1;
            }
        </style>
    @vite('resources/css/app.css')
</head>

<body>
@section('header')
    @include("cms.theme.{$theme}.header")
@show


@yield('content')


@section('footer')
    @include("cms.theme.{$theme}.footer")
@show

@stack('beforeCoreScripts')
@stack('scripts')

<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script>
    $(document).ready(function(){
        $(".owl-carousel").owlCarousel({
            items:1,
            loop:true,
            rtl: true,
            // nav:true,
            dots: true,
        });
    });
</script>
<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
