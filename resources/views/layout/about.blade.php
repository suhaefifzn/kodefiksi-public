@extends('layout.main', [
    'meta' => [
        'author' => 'kodefiksi',
        'title' => 'About Us',
        'url' => config('app.url') . '/about',
    ]
])
@section('content')
    {{-- Wrapper untuk breadcrumb --}}
    <div class="border-bottom mb-4 overflow-hidden" id="breadcrumbWrapper">
        <div style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{!! route('home') !!}" class="text-decoration-none">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                    About Us
                </li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="article-wrapper d-flex flex-column col-xl-8">
            <article class="d-flex flex-column col-12 col-xl-12">
                <div class="d-flex justify-content-center align-items-center flex-column" id="articleHeader">
                    <div id="identity" class="small d-flex gap-3">
                        <div class="identity-category d-flex align-items-center gap-1" title="Tanggal Dibuat">
                            <i data-feather="calendar" class="thumbnail-icon"></i>
                            <span>05/10/2024</span>
                        </div>
                        <div class="identity-category d-flex align-items-center gap-1 text-decoration-none text-dark" title="Penulis">
                            <i data-feather="user" class="thumbnail-icon"></i>
                            <span>kodefiksi</span>
                        </div>
                    </div>
                    <div class="text-center mt-1" id="articleTitle">
                        <h1>About Us</h1>
                    </div>
                </div>

                <div class="mt-4" id="articleBody">
                    <p style="text-align: justify">
                        Situs web ini dimiliki dan dibangun oleh Suhaefi Fauzian, dibuat sebagai tujuan dalam mempelajari Framework PHP yaitu Laravel 11 dan situs <a href="/" class="text-decoration-none">kodefiksi.com</a> ini adalah proyek yang dikerjakan saat mempelajarinya. Mungkin ibaratnya menyelam sambil minum air, belajar Laravel 11 sekalian dihosting aja gitu buat bagi-bagi pengalaman dalam bentuk tulisan digital.
                    </p>
                    <p style="text-align: justify">
                        Saya memiliki minat pada pemrograman web, tapi saya belum menguasainya. Sampai saat ini saya masih belajar dan metode pembelajaran yang saya terima banyak didapat dari menjelajah di internet, entah itu YouTube, Web, E-Book, media sosial, hingga diskusi dengan AI seperti ChatGPT dan lainnya. Beberapa hal yang pernah saya temui dan dirasa bermanfaat mengenai pemrograman akan saja bagikan di web ini.
                    </p>
                    <p style="text-align: justify">
                        Untuk kategori pemrograman, utamanya akan membahas mengenai pemrograman web seputar PHP, JavaScript, HTML, dan CSS. Tetapi, tidak menutup kemungkinan akan membahas di luar pemrograman web meskipun tidak begitu banyak. Pada kategori anime isinya adalah artikel mengenai berita, review, hingga bahasan waifu. Untuk kategori game akan membahas mengenai berita, tips dan trik pada game-game yang saya mainkan.
                    </p>
                    <p style="text-align: justify">
                        Hobi saya adalah menonton anime dan bermain game, jadi wajar saja jika kamu melihat topik pembahasan mengenai keduanya. Anime yang saya minati cukup bervariasi, genrenya bisa berbagai macam. Untuk game ada beberapa yang masih saya mainkan diantaranya adalah beberapa game dari HoyoVerse dan Riot, dan yang lainnya saat ini adalah The Witcher 3.
                    </p>
                    <p style="text-align: justify">
                        Sampai sekarang, kodefiksi.com masih dikelola oleh saya sendiri. Semoga kedepannya web ini dapat berkembang baik dari segi kualitas konten, kualitas penulis, kualitas aplikasi, hingga kualitas dari pembacanya.
                    </p
                </div>
            </article>
        </div>
    </div>
@endsection
