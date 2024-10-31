<!DOCTYPE html>
<html lang="en">
<head>
    <title>{!! isset($title) ? $title : 'Kode Fiksi' !!}</title>

    {{-- Favicons --}}
    <link rel="icon" type="image/png" href="/assets/favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="/assets/favicon/favicon.svg" />
    <link rel="shortcut icon" href="/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicon/apple-touch-icon.png" />
    <link rel="manifest" href="/assets/favicon/site.webmanifest" />

    {{-- Meta Tags --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="content-language" content="id">
    <meta name="author" content="{!! isset($meta['author']) ? $meta['author'] : 'kodefiksi' !!}">
    <meta name="keywords" content="{!! isset($meta['keywords']) ? $meta['keywords'] : 'Anime, Manga, Game, Pemrograman, Tutorial Pemrograman' !!}">
    <meta name="description"
        content="{!! isset($meta['description']) ? $meta['description']
            : 'Temukan dunia anime, game, dan pemrograman dalam satu tempat! Jelajahi beragam konten menarik mulai dari ulasan anime terbaru, tips, trik dan berita game favorit, hingga berbagai pembahasan mengenai pemrograman!' !!}"
    >

    {{-- Meta Tags - Sosmed --}}
    <meta property="og:title" content="{!! isset($meta['title']) ? $meta['title'] : 'Kode Fiksi' !!}">
    <meta property="og:description"
        content="{!! isset($meta['description']) ? $meta['description']
            : 'Temukan dunia anime, game, dan pemrograman dalam satu tempat! Jelajahi beragam konten menarik mulai dari ulasan anime terbaru, tips, trik dan berita game favorit, hingga berbagai pembahasan mengenai pemrograman!' !!}"
    >
    <meta property="og:url" content="{!! isset($meta['url']) ? $meta['url'] : config('app.url') !!}">
    <meta property="og:image" content="{!! isset($meta['thumbnail']) ? $meta['thumbnail'] : '/assets/favicon.png' !!}">

    {{-- Meta Tags - Twitter --}}
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:title" content="{!! isset($meta['title']) ? $meta['title'] : 'Kode Fiksi' !!}">
    <meta property="twitter:description"
        content="{!! isset($meta['description']) ? $meta['description']
            : 'Temukan dunia anime, game, dan pemrograman dalam satu tempat! Jelajahi beragam konten menarik mulai dari ulasan anime terbaru, tips, trik dan berita game favorit, hingga berbagai pembahasan mengenai pemrograman!' !!}"
    >
    <meta property="twitter:image" content="{!! isset($meta['thumbnail']) ? $meta['thumbnail'] : '/assets/favicon.png' !!}">

    {{-- Canonical Tags --}}
    <link
        rel="canonical"
        href="{!! Request::is('/') ? config('app.url')
            : $meta['url'] !!}"
    >

    {{-- Meta Tags - Artikel --}}
    @yield('meta.article')

    {{-- Bootstrap 5--}}
    <link rel="preload" as="style" onload="this.rel='stylesheet'" href="/assets/css/bootstrap.min.css">
    <noscript><link rel="stylesheet" href="/assets/css/bootstrap.min.css"></noscript>
    {{-- My CSS --}}
    <link rel="preload" as="style" onload="this.rel='stylesheet'" href="/assets/css/my.css">
    <noscript><link rel="stylesheet" href="/assets/css/my.css"></noscript>
    {{-- Feather Icons --}}
    <script src="/assets/js/feather.min.js"></script>
    {{-- Highlightjs --}}
    <link rel="preload" as="style" onload="this.rel='stylesheet'" href="/assets/css/highlightjs.css">
    <noscript><link rel="stylesheet" href="/assets/css/highlightjs.css"></noscript>
    <script src="/assets/js/highlightjs.js"></script>

    {{-- Google Analytics --}}
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-1W9MCGQS74"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-1W9MCGQS74');
    </script>

    {{-- CMP --}}
    <script type="text/javascript" data-cmp-ab="1" src="https://cdn.consentmanager.net/delivery/autoblocking/23e83e4cf1746.js" data-cmp-host="c.delivery.consentmanager.net" data-cmp-cdn="cdn.consentmanager.net" data-cmp-codesrc="16"></script>
</head>
<body>
    {{-- Navigation Bar --}}
    @include('layout.navbar')

    <div class="clearfix"></div>
    <div class="container mt-5 pt-5 ps-3 pe-3">
        @yield('content')
    </div>

    {{-- Footer --}}
    @include('layout.footer')

    {{-- Scripts --}}
    {{-- Bootstrap 5 --}}
    <script src="/assets/js/bootstrap.min.js"></script>

    @yield('scripts')

    <script>
        feather.replace();
        hljs.highlightAll();
    </script>
</body>
</html>
