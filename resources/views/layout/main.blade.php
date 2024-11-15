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
    <meta property="og:image" content="{!! isset($meta['thumbnail']) ? $meta['thumbnail'] : '/assets/logo_square.png' !!}">

    {{-- Meta Tags - Twitter --}}
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:title" content="{!! isset($meta['title']) ? $meta['title'] : 'Kode Fiksi' !!}">
    <meta property="twitter:description"
        content="{!! isset($meta['description']) ? $meta['description']
            : 'Temukan dunia anime, game, dan pemrograman dalam satu tempat! Jelajahi beragam konten menarik mulai dari ulasan anime terbaru, tips, trik dan berita game favorit, hingga berbagai pembahasan mengenai pemrograman!' !!}"
    >
    <meta property="twitter:image" content="{!! isset($meta['thumbnail']) ? $meta['thumbnail'] : '/assets/logo_square.png' !!}">

    {{-- Canonical Tags --}}
    <link
        rel="canonical"
        href="{!! Request::is('/') ? config('app.url')
            : $meta['url'] !!}"
    >

    {{-- Meta Tags - Artikel --}}
    @yield('meta.article')

    {{-- Bootstrap 5 --}}
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

    {{-- Google Tag Manager --}}
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});let f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-MSPM58JB');</script>

    {{-- Search Action --}}
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "WebSite",
          "url": "{{ config('app.url') }}",
          "name": "Kode Fiksi",
          "potentialAction": {
            "@type": "SearchAction",
            "target": "{{ config('app.url') }}/search?q={search_term_string}",
            "query-input": "required name=search_term_string"
          }
        }
    </script>
</head>
<body>
    {{-- Google Tag Manager --}}
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MSPM58JB" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>

    {{-- Navigation Bar --}}
    @include('layout.navbar')

    <div class="clearfix"></div>
    <div class="container mt-5 pt-5 ps-3 pe-3">
        @yield('content')
    </div>

    {{-- Footer --}}
    @include('layout.footer')

    <div id="cookie-consent-banner" style="display: none;">
        <p>Website ini menggunakan cookie untuk meningkatkan pengalaman Anda.
           Dengan melanjutkan, Anda menyetujui kebijakan kami.
           <a href="/privacy-policy" target="_blank">Pelajari lebih lanjut</a>.
        </p>
        <button id="accept-cookie">Saya Setuju</button>
    </div>

    {{-- Scripts --}}
    {{-- Bootstrap 5 --}}
    <script src="/assets/js/bootstrap.min.js"></script>

    @yield('scripts')

    <script>
        feather.replace();
        hljs.highlightAll();

        // Define dataLayer and gtag function
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}

        // Google Analytics
        gtag('js', new Date());
        gtag('config', 'G-1W9MCGQS74');

        document.addEventListener("DOMContentLoaded", function() {
            if (!localStorage.getItem("cookieConsent")) {
                gtag('consent', 'default', {
                    'ad_storage': 'granted',
                    'ad_user_data': 'denied',
                    'ad_personalization': 'denied',
                    'analytics_storage': 'granted'
                });
                document.getElementById("cookie-consent-banner").style.display = "block";
            } else {
                activateAnalytics();
            }

            document.getElementById("accept-cookie").addEventListener("click", function() {
                localStorage.setItem("cookieConsent", "accepted");
                document.getElementById("cookie-consent-banner").style.display = "none";
                activateAnalytics();
            });
        });

        function activateAnalytics() {
            gtag('consent', 'update', {
                'ad_storage': 'granted',
                'ad_user_data': 'granted',
                'ad_personalization': 'granted',
                'analytics_storage': 'granted'
            });
        }
    </script>
</body>
</html>
