<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $documentObject['pagetitle'] }} | {{ evo()->getConfig('site_name') }}</title>


    <link rel="stylesheet" href="/assets/theme/dist/css/main.css">
    <script defer type="module" src="/assets/theme/js/main.js"></script>



    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
</head>

<body>
    @include('parts.header')
    @include('parts.mobile-bar')
</body>

</html>