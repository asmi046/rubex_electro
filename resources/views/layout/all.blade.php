<!DOCTYPE html>
<html lang="ru">
    <head>
        <title>@yield('title') - RubEx Electro</title>
        <meta charset="UTF-8">
        <meta name="format-detection" content="telephone=no">
        <link rel="icon" type="image/png" href="img/favicons/icon256.png" sizes="256x256">
        <link rel="icon" type="image/png" href="img/favicons/icon128.png" sizes="128x128">
        <link rel="icon" type="image/png" href="img/favicons/icon64.png" sizes="64x64">
        <link rel="icon" type="image/png" href="img/favicons/icon32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="img/favicons/icon16.png" sizes="16x16">
        <link rel="icon" type="image/png" href="img/favicons/icon.svg" sizes="any">
        <link rel="shortcut icon" href="favicon.ico">

        @vite([
            'resources/css/app.css',
            'resources/js/app.js',
            'public/css/style.min.css',
            'public/scss/main.scss',
            ])

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <div class="wrapper-inner">
            @yield('content')
        </div>
    </body>
</html>
