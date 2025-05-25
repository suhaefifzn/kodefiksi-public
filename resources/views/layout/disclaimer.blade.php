@extends('layout.main', [
    'meta' => [
        'author' => 'kodefiksi',
        'title' => 'Disclaimer',
        'url' => config('app.url') . '/disclaimer',
        'description' => 'Semua informasi yang tersedia di situs ini dipublikasikan dengan itikad baik dan hanya untuk tujuan informasi umum.',
        'need_canonical' => true,
        'is_pagination' => false
    ]
])
@section('meta.article')
<meta property="article:published_time" content="2024-12-31T02:00:00.000Z">
<meta property="article:modified_time" content="2024-12-31T02:00:00.000Z">
@endsection
@section('content')
    {{-- Wrapper untuk breadcrumb --}}
    <div class="border-bottom mb-4" id="breadcrumbWrapper">
        <div style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
                <li class="breadcrumb-item small" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <a href="{!! route('home') !!}" class="text-decoration-none" itemprop="item">
                        <span itemprop="name">Home</span>
                    </a>
                    <meta itemprop="position" content="1" />
                </li>
                <li class="breadcrumb-item small active" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <span itemprop="name">Disclaimer</span>
                    <meta itemprop="item" content="{{ route('disclaimer') }}">
                    <meta itemprop="position" content="2" />
                </li>
            </ol>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="article-wrapper d-flex flex-column col-xl-8">
            <article class="d-flex flex-column col-12 col-xl-12 text-break" itemscope itemtype="https://schema.org/WPFooter">
                <meta itemprop="mainEntityOfPage" itemscope itemtype="https://schema.org/WebPage"/>

                <div class="d-flex justify-content-center align-items-center flex-column" id="articleHeader">
                    <div class="text-center mt-1" id="articleTitle">
                        <h1 class="fs-3 fw-bold" itemprop="headline">Disclaimer</h1>
                    </div>
                </div>

                <div class="mt-4" id="articleBody" itemprop="description">
                    <p style="text-align: justify">
                        Jika Anda membutuhkan informasi lebih lanjut atau memiliki pertanyaan terkait disclaimer di situs kami, jangan ragu untuk menghubungi kami.
                    </p>

                    <h2 class="fs-4"><strong>Disclaimer untuk kodefiksi.com</strong></h2>
                    <p style="text-align: justify">
                        Semua informasi yang tersedia di situs ini dipublikasikan dengan itikad baik dan hanya untuk tujuan informasi umum. kodefiksi.com tidak memberikan jaminan apa pun mengenai kelengkapan, keandalan, dan akurasi informasi tersebut.
                    </p>

                    <p style="text-align: justify">
                        Segala tindakan yang Anda lakukan berdasarkan informasi yang Anda temukan di situs ini (kodefiksi.com) sepenuhnya merupakan risiko Anda sendiri. kodefiksi.com tidak bertanggung jawab atas kerugian dan/atau kerusakan sehubungan dengan penggunaan situs kami.
                    </p>

                    <p style="text-align: justify">
                        Melalui situs kami, Anda dapat mengunjungi situs lain dengan mengikuti tautan ke situs eksternal tersebut. Kami tidak memiliki kendali atas konten dan sifat situs-situs tersebut.
                    </p>

                    <h2 class="fs-4"><strong>Persetujuan</strong></h2>
                    <p style="text-align: justify">
                        Dengan menggunakan situs kami, Anda dengan ini menyetujui disclaimer kami dan setuju dengan ketentuan-ketentuannya.
                    </p>

                    <h2 class="fs-4"><strong>Pembaruan</strong></h2>
                    <p style="text-align: justify">
                        Disclaimer ini terakhir diperbarui pada: <time datetime="2024-12-31" itemprop="dateModified">31 Desember 2024</time>.
                    </p>
                </div>

                {{-- Informasi organisasi --}}
                <div itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                    <meta itemprop="name" content="Kode Fiksi">
                    <div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
                        <meta itemprop="url" content="/assets/logo.webp">
                    </div>
                    <meta itemprop="url" content="https://kodefiksi.com">
                </div>
            </article>

        </div>
    </div>
@endsection
