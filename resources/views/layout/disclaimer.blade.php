@extends('layout.main', [
    'meta' => [
        'author' => 'kodefiksi',
        'title' => 'Disclaimer',
        'url' => config('app.url') . '/disclaimer',
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
                        <h1>Disclaimer</h1>
                    </div>
                </div>

                <div class="mt-4" id="articleBody">
                    <p style="text-align: justify">
                        Seluruh konten yang disediakan di website <b>kodefiksi.com</b> bertujuan sebagai informasi umum. Pengguna diperbolehkan untuk menggunakan ulang konten atau artikel yang ada, namun tidak diperkenankan untuk menyalinnya secara mentah. Pengguna harus mengolahnya terlebih dahulu sebelum digunakan ulang, kami tidak mempermasalahkan penyertaan sumber saat penggunaan ulang konten atau artikel yang ada pada website ini, namun kami akan sangat berterima kasih apabila sumber aslinya diikut sertakan.
                    </p>
                    <p style="text-align: justify">
                        Konten atau artikel yang terdapat pada website ini merupakan hasil dari pengolahan pengalaman dan riset penulis. Kami akan berusaha menyediakan tulisan yang berkualitas dan juga mengusahakan untuk menyertakan sumber atau referensi jika memang ada.
                    </p>
                    <p style="text-align: justify">
                        Kami dengan tegas menegaskan bahwa kerugian atau kerusakan yang mungkin timbul akibat penggunaan informasi yang disediakan merupakan tanggung jawab pribadi masing-masing pengguna. Kami mendorong pengguna untuk menggunakan informasi dengan cermat dan bijaksana.
                    </p>
                    <p style="text-align: justify">
                        Kami ingin memberitahukan bahwa konten pada website ini dapat mengalami perubahan, termasuk pernyataan pada disclaimer ini. Pengguna diharapkan untuk memeriksa halaman disclaimer secara berkala.
                    </p>
                    <p style="text-align: justify">
                        Untuk pertanyaan lebih lanjut atau informasi tambahan, Anda dapat menghubungi kami melalui email di suhaefi21@gmail.com atau melalui akun Instagram @suhaefi.ig.
                    </p>
                    <p style="text-align: justify">
                        Kami ingin menekankan bahwa tidak ada jaminan terkait keandalan dan ketersediaan informasi yang disediakan di situs web ini.
                    </p>
                </div>
            </article>
        </div>
    </div>
@endsection
