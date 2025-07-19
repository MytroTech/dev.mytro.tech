<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="{{getMetaTag(request()->path(), 'description', session('db_lang', 'en'))}}">
    <meta name="Keywords" content="{{getMetaTag(request()->path(), 'keywords', session('db_lang', 'en'))}}">
    <title>{{getFullTitle()}}</title>
    <link rel="icon" type="image/png" href="/favicon.png"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic"
          rel="stylesheet">
    <link rel="stylesheet" href="/frontend/css/photoswipe.css">
    <link rel="stylesheet" href="/frontend/photoswipe_skin/default-skin.css">
    <link rel="stylesheet" href="/frontend/css/style.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Icons -->
    <link rel="shortcut icon" href="/favicons/favicon.ico">
    <link rel="icon" sizes="16x16 32x32 64x64" href="/favicons/favicon.ico">
    <link rel="icon" type="image/png" sizes="196x196" href="/favicons/196x196.png">
    <link rel="icon" type="image/png" sizes="160x160" href="/favicons/160x160.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicons/96x96.png">
    <link rel="icon" type="image/png" sizes="64x64" href="/favicons/64x64.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicons/32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicons/16x16.png">
    <link rel="apple-touch-icon" href="/favicons/64x64.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/favicons/114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/favicons/72x72.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/favicons/144x144.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/favicons/60x60.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/favicons/120x120.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/favicons/76x76.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/favicons/152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicons/180x180.png">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
