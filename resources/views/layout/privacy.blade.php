@extends('layout.main', [
    'meta' => [
        'author' => 'kodefiksi',
        'title' => 'Privacy Policy',
        'url' => config('app.url') . '/privacy-policy',
        'description' => 'Kodefiksi.com mengumpulkan informasi non-pribadi yang tidak dapat mengidentifikasi secara pribadi pengunjung, seperti preferensi browser, alamat IP, waktu akses, halaman yang dikunjungi, dan informasi serupa. Informasi ini digunakan untuk analisis statistik, perbaikan konten, dan pengalaman pengguna yang lebih baik.'
    ]
])
@section('content')
    {{-- Wrapper untuk breadcrumb --}}
    <div class="border-bottom mb-4 overflow-hidden" id="breadcrumbWrapper">
        <div style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{!! route('home') !!}" class="text-decoration-none">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                    Disclaimer
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
                        <h1>Privacy Policy</h1>
                    </div>
                </div>

                <div class="mt-4" id="articleBody">
                    <h2 class="fs-4">Pengumpulan Informasi dan Penggunaan:</h2>
                    <p style="text-align: justify">
                        <a href="/" class="text-decoration-none fw-bold">Kodefiksi.com</a> mengumpulkan informasi non-pribadi yang tidak dapat mengidentifikasi secara pribadi pengunjung, seperti preferensi browser, alamat IP, waktu akses, halaman yang dikunjungi, dan informasi serupa. Informasi ini digunakan untuk analisis statistik, perbaikan konten, dan pengalaman pengguna yang lebih baik.
                    </p>
                    <h2 class="fs-4">Cookies:</h2>
                    <p style="text-align: justify">
                        Kodefiksi.com menggunakan cookies untuk menyimpan informasi tentang preferensi pengunjung, mengikuti aktivitas pengguna, dan menghasilkan analisis tentang bagaimana pengguna mengakses dan berinteraksi dengan situs kami. Pengguna memiliki pilihan untuk menolak penggunaan cookies dengan mengatur browser mereka, namun, hal ini dapat memengaruhi pengalaman pengguna di situs web kami.
                    </p>
                    <h2 class="fs-4">Keamanan Data:</h2>
                    <p style="text-align: justify">
                        Kami menjaga keamanan data dengan menerapkan langkah-langkah yang sesuai untuk mencegah akses yang tidak sah, pengungkapan, perubahan, atau penghancuran data pribadi Anda.
                    </p>
                    <h2 class="fs-4">Pengungkapan Informasi:</h2>
                    <p style="text-align: justify">
                        Kami tidak akan menjual, memperdagangkan, atau mentransfer data pribadi pengguna kepada pihak ketiga tanpa persetujuan pengguna, kecuali jika diperlukan oleh hukum atau jika hal tersebut diperlukan untuk menyediakan layanan yang diminta oleh pengguna.
                    </p>
                    <h2 class="fs-4">Kontak:</h2>
                    <p style="text-align: justify">
                        Jika Anda memiliki pertanyaan atau kekhawatiran terkait kebijakan privasi kami, silakan hubungi kami melalui email di suhaefi21@gmail.com.
                    </p>
                </div>
            </article>
        </div>
    </div>
@endsection
