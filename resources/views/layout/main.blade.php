<!DOCTYPE html>
<html lang="en">
<head>
    <title>{!! isset($title) ? $title : 'Kode Fiksi' !!}</title>
    <link rel="shortcut icon" href="/assets/favicon.png" type="image/x-icon">

    {{-- Meta Tags --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="content-language" content="id">
    <meta name="author" content="{!! isset($meta['author']) ? $meta['author'] : 'kodefiksi' !!}">
    <meta name="keywords" content="Anime, Manga, Game, Pemrograman, Tutorial Pemrograman">
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
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-1W9MCGQS74"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-1W9MCGQS74');
    </script>

    {{-- Google Adsense --}}
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8893101890783934"
    crossorigin="anonymous"></script>
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
