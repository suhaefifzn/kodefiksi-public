@extends('layout.main', [
    'meta' => [
        'title' => isset($data['data']) ? $data['data']['title'] : 'Kode Fiksi',
        'url' => config('app.url') . '/author',
        'need_canonical' => true,
        'is_pagination' => false
    ]
])
@section('content')
{{-- Wrapper untuk breadcrumb --}}
<div class="border-bottom mb-5" id="breadcrumbWrapper">
    <div style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
            <li class="breadcrumb-item small" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <a href="{!! route('home') !!}" class="text-decoration-none" itemprop="item">
                    <span itemprop="name">Home</span>
                </a>
                <meta itemprop="position" content="1" />
            </li>
            <li class="breadcrumb-item small active" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <span itemprop="name">Author</span>
                <meta itemprop="item" content="{{ route('author.index') }}">
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
                    <h2 class="card-title fs-5 mb-2">
                        Suhaefi Fauzian (suhaefi21)
                    </h2>
                    <p>
                        Founder dari <a href="/about" class="text-decoration-none">kodefiksi.com</a> yang dibangun dan mulai aktif pada bulan November 2024. Aktif menulis pada setiap
                        <a href="{!! route('category.index') !!}" class="text-decoration-none">kategori</a> yang ada, dan aktif melakukan perawatan dan pengembangan terhadap aplikasi ini.
                    </p>
                    <a class="btn btn-sm btn-primary" href="{!! route('author', 'suhaefi21') !!}">
                        Lihat Tulisan suhaefi21
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection
