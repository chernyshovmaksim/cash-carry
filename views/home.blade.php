<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $documentObject['pagetitle'] }} | {{ evo()->getConfig('site_name') }}</title>

    <link rel="stylesheet" href="/assets/theme/dist/css/main.css">
    <script defer type="module" src="/assets/theme/js/main.js"></script>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/keen-slider@latest/keen-slider.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
</head>

<body>
    @include('parts.header')


    <div class="container">
        <div id="my-keen-slider" class="keen-slider">
            <div class="keen-slider__slide number-slide1">1</div>
            <div class="keen-slider__slide number-slide2">2</div>
            <div class="keen-slider__slide number-slide3">3</div>
            <div class="keen-slider__slide number-slide4">4</div>
            <div class="keen-slider__slide number-slide5">5</div>
            <div class="keen-slider__slide number-slide6">6</div>
        </div>
    </div>


    @include('parts.mobile-bar')
    <script src="https://cdn.jsdelivr.net/npm/keen-slider@latest/keen-slider.js"></script>
</body>

</html>