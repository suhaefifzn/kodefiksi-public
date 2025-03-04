@extends('layout.main', [
    'meta' => [
        'author' => 'suhaefi21',
        'title' => 'Disclaimer',
        'url' => config('app.url') . '/disclaimer',
        'description' => 'Semua informasi yang tersedia di situs ini dipublikasikan dengan itikad baik dan hanya untuk tujuan informasi umum.',
        'need_canonical' => true
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
                <li class="breadcrumb-item small active" aria-current="page" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <span itemprop="name">Disclaimer</span>
                    <meta itemprop="position" content="2" />
                </li>
            </ol>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="article-wrapper d-flex flex-column col-xl-8">
            <article class="d-flex flex-column col-12 col-xl-12 text-break" itemscope itemtype="https://schema.org/BlogPosting">
                <div class="d-flex justify-content-center align-items-center flex-column" id="articleHeader">
                    <div class="text-center mt-1" id="articleTitle">
                        <h1 class="fs-3 fw-bold" itemprop="name">Disclaimer</h1>
                    </div>
                </div>
                <div class="mt-4" id="articleBody" itemprop="articleBody">
                    <p style="text-align: justify">
                        Jika Anda membutuhkan informasi lebih lanjut atau memiliki pertanyaan terkait disclaimer di situs kami, jangan ragu untuk menghubungi kami.
                    </p>
                    <h2 class="fs-4">
                        <strong>
                            Disclaimer untuk kodefiksi.com
                        </strong>
                    </h2>
                    <p style="text-align: justify">
                        Semua informasi yang tersedia di situs ini dipublikasikan dengan itikad baik dan hanya untuk tujuan informasi umum. kodefiksi.com tidak memberikan jaminan apa pun mengenai kelengkapan, keandalan, dan akurasi informasi tersebut. Segala tindakan yang Anda lakukan berdasarkan informasi yang Anda temukan di situs ini (kodefiksi.com) sepenuhnya merupakan risiko Anda sendiri. kodefiksi.com tidak bertanggung jawab atas kerugian dan/atau kerusakan sehubungan dengan penggunaan situs kami.
                    </p>
                    <p style="text-align: justify">
                        Melalui situs kami, Anda dapat mengunjungi situs lain dengan mengikuti tautan ke situs eksternal tersebut. Meskipun kami berusaha menyediakan tautan berkualitas ke situs yang berguna dan etis, kami tidak memiliki kendali atas konten dan sifat situs-situs tersebut. Tautan ke situs lain tidak berarti kami merekomendasikan semua konten yang ditemukan di situs tersebut. Pemilik situs dan kontennya dapat berubah tanpa pemberitahuan sebelumnya, yang mungkin terjadi sebelum kami memiliki kesempatan untuk menghapus tautan yang mungkin sudah tidak relevan atau bermasalah.
                    </p>
                    <p style="text-align: justify">
                        Harap disadari juga bahwa ketika Anda meninggalkan situs kami, situs lain mungkin memiliki kebijakan privasi dan ketentuan layanan yang berbeda, yang berada di luar kendali kami. Pastikan untuk memeriksa Kebijakan Privasi serta "Ketentuan Layanan" dari situs-situs tersebut sebelum melakukan bisnis apa pun atau mengunggah informasi apa pun.
                    </p>
                    <strong class="fs-5">
                        Persetujuan
                    </strong>
                    <p style="text-align: justify">
                        Dengan menggunakan situs kami, Anda dengan ini menyetujui disclaimer kami dan setuju dengan ketentuan-ketentuannya.
                    </p>
                    <strong class="fs-5">
                        Pembaruan
                    </strong>
                    <p style="text-align: justify">
                        Disclaimer ini terakhir diperbarui pada: 31 Desember 2024. Jika kami memperbarui, mengubah, atau membuat perubahan apa pun pada dokumen ini, perubahan tersebut akan dipublikasikan secara jelas di sini.
                    </p>
                </div>
            </article>
        </div>
    </div>
@endsection
