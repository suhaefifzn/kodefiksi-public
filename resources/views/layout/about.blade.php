@extends('layout.main', [
    'meta' => [
        'author' => 'suhaefi21',
        'title' => 'About Us',
        'url' => config('app.url') . '/about',
        'description' => 'Hadirnya Kode Fiksi diharapkan dapat bermanfaat bagi pembaca dari kalangan animer, gamer, dan programmer. Konten yang disediakan dapat berupa berita, ulasan, dan tutorial.'
    ]
])
@section('meta.article')
    <meta property="article:published_time" content="2024-10-05T00:00:00.000Z">
    <meta property="article:modified_time" content="2024-10-05T00:00:00.000Z">
@endsection
@section('content')
    {{-- Wrapper untuk breadcrumb --}}
    <div class="border-bottom mb-5" id="breadcrumbWrapper">
        <div style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
                <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <a href="{!! route('home') !!}" class="text-decoration-none" itemprop="item">
                        <span itemprop="name">Home</span>
                    </a>
                    <meta itemprop="position" content="1" />
                </li>
                <li class="breadcrumb-item active" aria-current="page" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <span itemprop="name">About Us</span>
                    <meta itemprop="position" content="2" />
                </li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="article-wrapper d-flex flex-column col-xl-8">
            <article class="d-flex flex-column col-12 col-xl-12">
                <div class="d-flex justify-content-center align-items-center flex-column" id="articleHeader">
                    <div class="text-center mt-1" id="articleTitle">
                        <h1>About Us</h1>
                    </div>
                </div>

                <div class="row d-flex align-items-start mt-4 rounded overflow-hidden border-top mb-3">
                    <div class="col-md-6 mb-3 mb-md-0 p-0" style="height: 325px;">
                      <img src="/assets/logo_square.png" alt="Logo Kode Fiksi" style="width:100%;height:100%;object-position:center;object-fit:cover;">
                    </div>
                    <div class="col-md-6">
                      <h2 class="fs-4 fw-bold mt-3">Tentang Kode Fiksi</h2>
                      <p style="text-align: justify">
                        Kode Fiksi merupakan web personal yang dibangun dan dikembangkan oleh Suhaefi Fauzian dengan menggunakan teknologi Laravel 11. Tujuan dari pengembangan web ini awalnya hanya untuk mempelajari framework PHP yang populer, kemudian terlintas pada pikiran untuk meninggalkan bukti pernah belajar pemrograman dan duduk di kelas Kuliah Teknik Informatika, maka dirilislah website ini dengan nama Kode Fiksi yang merupakan perpaduan dari kata 'Kode' untuk mewakili pemrograman dan 'Fiksi' untuk mewakili kesenangan terhadap dunia anime dan game.
                      </p>
                    </div>
                </div>

                <p style="text-align: justify">
                    Meski dibangun menggunakan framework yang ditujukan untuk kemudahan pengembangan aplikasi full-stack, Kode Fiksi tidak dibangun demikian. Aplikasi Front-End dan Back-End dibuat terpisah, sehingga memungkinkan pengembangan pada sisi client menjadi lebih luas atau tidak terbatas pada teknologi tertentu di masa yang akan datang. Baik selama pengembangan dan juga pembaruan konten, Kode Fiksi selalu ditemani oleh AI untuk membantu memaksimalkan hasil yang diinginkan.
                </p>

                <p style="text-align: justify">
                    Sebenarnya, pengembang (Suhaefi Fauzian) lebih dulu belajar JavaScript dengan NodeJS dan sudah ada beberapa proyek yang dibuat juga, baik itu proyek sendiri atau kelompok. Lantas kenapa mempelajari dan menggunakan Laravel? melihat dari pengalaman saat magang dan biaya deployment, perusahaan yang menggunakan PHP masih banyak di sekitar saya dan lebih murah daripada NodeJS. Tapi jika memiliki rezeki lebih mungkin Kode Fiksi akan pindah teknologi, itu pun jika aplikasi sekarang tidak dapat menghandle permintaan yang masuk dan memang sudah waktunya untuk terjun ke pasar yang lebih luas.
                </p>

                <h2 class="fs-4 fw-bold">Harapan</h2>
                <p style="text-align: justify">
                    Hadirnya Kode Fiksi diharapkan dapat bermanfaat bagi pembaca dari kalangan animer, gamer, dan programmer. Konten yang disediakan dapat berupa berita, ulasan, dan tutorial. Hadirnya web ini juga diharapkan menjadi motivasi bagi penulis untuk terus belajar dan tidak bosan dalam membaca serta berbagi karya, dan juga dapat menjadi media pengembangan diri.
                </p>
            </article>
        </div>
    </div>
@endsection
