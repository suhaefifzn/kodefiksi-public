@extends('layout.main', [
    'meta' => [
        'author' => 'suhaefi21',
        'title' => 'Privacy Policy',
        'url' => config('app.url') . '/privacy-policy',
        'description' => 'At kodefiksi.com we consider the privacy of our visitors to be extremely important',
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
                <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <a href="{!! route('home') !!}" class="text-decoration-none" itemprop="item">
                        <span itemprop="name">Home</span>
                    </a>
                    <meta itemprop="position" content="1" />
                </li>
                <li class="breadcrumb-item active" aria-current="page" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <span itemprop="name">Privacy Policy</span>
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
                        <h1 class="fs-3 fw-bold" itemprop="name">Privacy Policy</h1>
                    </div>
                </div>

                <div class="mt-4" id="articleBody" itemprop="articleBody">
                    <p style="text-align: justify">
                        Jika Anda membutuhkan informasi lebih lanjut atau memiliki pertanyaan terkait kebijakan privasi kami, jangan ragu untuk menghubungi kami.
                    </p>
                    <h2 class="fs-4">
                        <strong>
                            Kebijakan Privasi untuk Kode Fiksi
                        </strong>
                    </h2>
                    <p style="text-align: justify">
                        Di kodefiksi.com, privasi pengunjung kami sangat penting. Dokumen kebijakan privasi ini menjelaskan secara rinci jenis informasi pribadi yang dikumpulkan dan dicatat oleh kodefiksi.com serta bagaimana kami menggunakannya.
                    </p>
                    <strong class="fs-5">
                        File Log
                    </strong>
                    <p style="text-align: justify">
                        Seperti banyak situs web lainnya, kodefiksi.com menggunakan file log. File ini mencatat pengunjung ke situs – biasanya merupakan prosedur standar untuk perusahaan hosting dan bagian dari analisis layanan hosting. Informasi dalam file log mencakup alamat protokol internet (IP), jenis browser, Penyedia Layanan Internet (ISP), stempel tanggal/waktu, halaman rujukan/keluar, dan kemungkinan jumlah klik. Informasi ini digunakan untuk menganalisis tren, mengelola situs, melacak pergerakan pengguna di sekitar situs, dan mengumpulkan informasi demografis. Alamat IP dan informasi lainnya tidak terhubung dengan informasi yang dapat mengidentifikasi identitas pribadi.
                    </p>
                    <strong class="fs-5">
                        Cookies dan Web Beacon
                    </strong>
                    <p style="text-align: justify">
                        kodefiksi.com menggunakan cookies untuk menyimpan informasi tentang preferensi pengunjung, mencatat informasi spesifik pengguna pada halaman mana yang diakses atau dikunjungi, serta untuk mempersonalisasi atau menyesuaikan konten halaman web kami berdasarkan jenis browser pengunjung atau informasi lain yang dikirimkan melalui browser mereka.
                    </p>
                    <strong class="fs-5">
                        Cookie DART DoubleClick
                    </strong>
                    <ul>
                        <li class="text-break">
                            Google, sebagai vendor pihak ketiga, menggunakan cookies untuk menayangkan iklan di kodefiksi.com.
                        </li>
                        <li class="text-break">
                            Penggunaan cookie DART oleh Google memungkinkannya menayangkan iklan kepada pengunjung situs kami berdasarkan kunjungan mereka ke kodefiksi.com dan situs lainnya di internet.
                        </li>
                        <li class="text-break">
                            Pengguna dapat memilih untuk menonaktifkan penggunaan cookie DART dengan mengunjungi kebijakan privasi jaringan iklan dan konten Google di URL berikut: <a href="https://www.google.com/privacy_ads.html" title="Opt out of the Dart Cookie" target="_blank" rel="noreferrer noopener">https://www.google.com/privacy_ads.html</a>.
                        </li>
                    </ul>
                    <strong class="fs-5">
                        Mitra Iklan Kami
                    </strong>
                    <p style="text-align: justify">
                        Beberapa mitra periklanan kami mungkin menggunakan cookies dan web beacon di situs kami. Mitra periklanan kami meliputi:
                    </p>
                    <ul>
                        <li>Google</li>
                        <li>Lainnya</li>
                    </ul>
                    <p style="text-align: justify">
                        <em>Setiap mitra periklanan memiliki Kebijakan Privasi sendiri untuk situs mereka. Sumber daya yang diperbarui dan berisi tautan hypertext dapat ditemukan di sini: <a href="http://www.privacypolicyonline.com/privacy-policies" target="_blank" rel="noreferrer noopener">Kebijakan Privasi</a></em>.
                    </p>
                    <p style="text-align: justify">
                        Anda dapat melihat daftar ini untuk menemukan kebijakan privasi masing-masing mitra periklanan kodefiksi.com. Server iklan pihak ketiga atau jaringan iklan menggunakan teknologi dalam iklan dan tautan mereka yang muncul di kodefiksi.com dan dikirim langsung ke browser Anda. Mereka secara otomatis menerima alamat IP Anda ketika ini terjadi. Teknologi lain (seperti cookies, JavaScript, atau Web Beacons) juga dapat digunakan oleh jaringan iklan pihak ketiga di situs kami untuk mengukur efektivitas kampanye iklan mereka dan/atau untuk mempersonalisasi konten iklan yang Anda lihat di situs.
                    </p>
                    <p style="text-align: justify">
                        kodefiksi.com tidak memiliki akses atau kontrol atas cookies yang digunakan oleh pengiklan pihak ketiga.
                    </p>
                    <strong class="fs-5">
                        Kebijakan Privasi Pihak Ketiga
                    </strong>
                    <p style="text-align: justify">
                        Anda harus berkonsultasi dengan kebijakan privasi masing-masing server iklan pihak ketiga untuk informasi lebih rinci tentang praktik mereka serta untuk instruksi tentang cara memilih keluar dari praktik tertentu.
                    </p>
                    <p style="text-align: justify">
                        Kebijakan privasi kodefiksi.com tidak berlaku untuk, dan kami tidak dapat mengontrol aktivitas, pengiklan atau situs web lain tersebut. Anda dapat menemukan daftar lengkap kebijakan privasi ini beserta tautannya di sini: <a href="https://www.privacypolicyonline.com/privacy-policy-links" title="Privacy Policy Links" target="_blank" rel="noreferrer noopener">Tautan Kebijakan Privasi</a>.
                    </p>
                    <p style="text-align: justify">
                        Jika Anda ingin menonaktifkan cookies, Anda dapat melakukannya melalui opsi browser masing-masing. Informasi lebih rinci tentang pengelolaan cookies dengan browser tertentu dapat ditemukan di situs web browser masing-masing. <a href="http://www.privacypolicyonline.com/what-are-cookies" target="_blank" rel="noreferrer noopener">Apa Itu Cookies?</a>
                    </p>
                    <strong class="fs-5">
                        Informasi Anak
                    </strong>
                    <p style="text-align: justify">
                        Kami percaya penting untuk memberikan perlindungan tambahan bagi anak-anak secara online. Kami mendorong orang tua dan wali untuk menghabiskan waktu online bersama anak-anak mereka untuk mengamati, berpartisipasi, dan/atau memantau serta membimbing aktivitas online mereka. kodefiksi.com tidak dengan sengaja mengumpulkan informasi yang dapat diidentifikasi secara pribadi dari anak-anak di bawah usia 13 tahun. Jika orang tua atau wali percaya bahwa kodefiksi.com memiliki informasi pribadi anak di bawah usia 13 tahun dalam basis data kami, harap segera hubungi kami (menggunakan kontak di paragraf pertama), dan kami akan melakukan upaya terbaik kami untuk segera menghapus informasi tersebut dari catatan kami.
                    </p>
                    <strong class="fs-5">
                        Kebijakan Privasi Online Saja
                    </strong>
                    <p style="text-align: justify">
                        Kebijakan privasi ini hanya berlaku untuk aktivitas online kami dan berlaku untuk pengunjung situs web kami serta terkait dengan informasi yang dibagikan dan/atau dikumpulkan di sana.
                    </p>
                    <p style="text-align: justify">
                        Kebijakan ini tidak berlaku untuk informasi apa pun yang dikumpulkan secara offline atau melalui saluran selain situs web ini.
                    </p>
                    <strong class="fs-5">
                        Persetujuan
                    </strong>
                    <p style="text-align: justify">
                        Dengan menggunakan situs web kami, Anda dengan ini menyetujui kebijakan privasi kami dan menyetujui ketentuan-ketentuannya.
                    </p>
                    <strong class="fs-5">
                        Pembaruan
                    </strong>
                    <p style="text-align: justify">
                        Kebijakan Privasi ini terakhir diperbarui pada: 31 Desember 2024. Jika kami memperbarui, mengubah, atau membuat perubahan apa pun pada kebijakan privasi kami, perubahan tersebut akan dipublikasikan di sini.
                    </p>
                </div>
            </article>
        </div>
    </div>
@endsection
