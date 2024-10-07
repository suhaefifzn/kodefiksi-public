@extends('layout.main', [
    'meta' => [
        'author' => 'kodefiksi',
        'title' => 'Contact Us',
        'url' => config('app.url') . '/contact',
        'description' => 'Saat ini kami belum memiliki kontak resmi untuk dihubungi perihal situs web ini. Namun bila ada pertanyaan atau hal yang ingin Anda sampaikan, bisa melalui alamat email suhaefi21@gmail.com atau Instagram suhaefi.ig.'
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
                        <h1>Contact Us</h1>
                    </div>
                </div>

                <div class="mt-4" id="articleBody">
                    <p style="text-align: justify">
                        Saat ini kami belum memiliki kontak resmi untuk dihubungi perihal situs web ini. Namun bila ada pertanyaan atau hal yang ingin Anda sampaikan, bisa melalui alamat email <strong>suhaefi21@gmail.com</strong> atau Instagram <strong>suhaefi.ig</strong>.
                    </p>
                </div>
            </article>
        </div>
    </div>
@endsection
