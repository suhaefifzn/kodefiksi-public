@extends('layout.main', [
    'meta' => [
        'title' => isset($data['data']) ? $data['data']['title'] : 'Kode Fiksi',
        'url' => config('app.url') . '/category',
        'need_canonical' => true,
        'is_pagination' => false
    ]
])
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
            <li class="breadcrumb-item active" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <span itemprop="name">Category</span>
                <meta itemprop="item" content="{{ route('category.index') }}">
                <meta itemprop="position" content="2" />
            </li>
        </ol>
    </div>
</div>
<div style="min-height: 580px">
    <h1 class="fs-4 text-center fw-bold">{!! $title !!}</h1>
    <div class="col-12 mt-5 bg-custom-3 rounded p-3" id="articleRelated">
        <div class="card-wrapper col-12">
            <ul class="list-group list-group-flush rounded">
                <li class="list-group-item text-break p-3">
                    <h2 class="card-title fs-5">
                        Anime
                    </h2>
                    <p>
                        Temukan beragam tulisan menarik seputar dunia anime di Kode Fiksi. Berita, fakta, cerita, hingga review anime pilihan dari penulis yang pastinya seru dan bisa jadi rekomendasi buat ditonton.
                    </p>
                    <a class="btn btn-sm btn-primary" href="{!! route('category', 'anime') !!}">
                        Lihat List Artikel Anime
                    </a>
                </li>
                <li class="list-group-item text-break p-3">
                    <h2 class="card-title fs-5">
                        Game
                    </h2>
                    <p>
                        Temukan berita, cerita, panduan, hingga berbagai hal menarik lainnya seputar video game. Namun, prioritas Kode Fiksi saat ini adalah berdasarkan pada game-game yang sering dimainkan oleh penulis.
                    </p>
                    <a class="btn btn-sm btn-primary" href="{!! route('category', 'game') !!}">
                        Lihat List Artikel Game
                    </a>
                </li>
                <li class="list-group-item text-break p-3">
                    <h2 class="card-title fs-5">
                        Pemrograman
                    </h2>
                    <p>
                        Temukan beragam tutorial pemrograman untuk pemula hingga menengah, tulisan yang ada pada kategori ini lebih berfokus pada belajar pemrograman web yang sedang atau pernah penulis lakukan.
                    </p>
                    <a class="btn btn-sm btn-primary" href="{!! route('category', 'pemrograman') !!}">
                        Lihat List Artikel Pemrograman
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection
