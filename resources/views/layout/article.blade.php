@extends('layout.main', [
    'meta' => [
        'url' => isset($data['data']) ? config('app.url') . '/' . $data['data']['slug'] : config('app.url'),
        'title' => isset($data['data']) ? $data['data']['title'] : 'Kode Fiksi',
        'author' => isset($data['data']) ? $data['data']['user']['username'] : 'suhaefi21',
        'keywords' => isset($data['data']) ? $data['data']['title'] : 'Anime, Manga, Game, Pemrograman, Tutorial Pemrograman',
        'thumbnail' => isset($data['data']) ? config('app.my_config.api_url') . '/' . $data['data']['img_thumbnail'] : '/assets/logo_square.webp',
        'description' => isset($data['data']) ? $data['data']['excerpt'] : 'Artikel tidak ditemukan',
        'need_canonical' => true
    ]
])
@section('content')
    @if (isset($data['data']))
        @section('meta.article')
            <meta property="article:published_time" content="{!! $data['data']['created_at'] !!}">
            <meta property="article:modified_time" content="{!! $data['data']['updated_at'] !!}">
        @endsection
        {{-- Wrapper untuk breadcrumb --}}
        <div class="border-bottom mb-2 overflow-hidden" id="breadcrumbWrapper">
            <div style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
                    <li class="breadcrumb-item small" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <a href="{!! route('home') !!}" class="text-decoration-none" itemprop="item">
                            <span itemprop="name">Home</span>
                        </a>
                        <meta itemprop="position" content="1" />
                    </li>
                    <li class="breadcrumb-item small" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <a href="{!! route('category.index') !!}" class="text-decoration-none" itemprop="item">
                            <span itemprop="name">Category</span>
                        </a>
                        <meta itemprop="position" content="2" />
                    </li>
                    <li class="breadcrumb-item small" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <a href="{!! route('category', $data['data']['category']['slug']) !!}" class="text-decoration-none" itemprop="item">
                            <span itemprop="name">{!! $data['data']['category']['name'] !!}</span>
                        </a>
                        <meta itemprop="position" content="3" />
                    </li>
                    <li class="breadcrumb-item small active" aria-current="page" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <span itemprop="name">{!! $data['data']['title'] !!}</span>
                        <meta itemprop="position" content="4" />
                    </li>
                </ol>
            </div>
        </div>
        {{-- Article Content --}}
        <div class="row">
            <div class="article-wrapper d-flex flex-column col-xl-8">
                <article class="d-flex flex-column col-12 col-xl-12 text-break" itemscope itemtype="https://schema.org/BlogPosting">
                    <div class="d-flex justify-content-center align-items-center flex-column" id="articleHeader">
                        <div class="align-self-start mt-1" id="articleTitle">
                            <h1 itemprop="headline" class="fs-2">{!! $data['data']['title'] !!}</h1>
                        </div>
                        <div id="identity" class="small d-flex align-self-start gap-3">
                            <a class="identity-category d-flex align-items-center gap-1 text-decoration-none text-light" title="Kategori" href="{!! route('category', $data['data']['category']['slug']) !!}" itemprop="articleSection">
                                <i data-feather="bookmark" class="thumbnail-icon"></i>
                                <span>{!! $data['data']['category']['name'] !!}</span>
                            </a>
                            <div class="identity-category d-flex align-items-center gap-1" title="Tanggal Dibuat">
                                @php
                                    $formattedDate = (new DateTime($data['data']['created_at']))->format('d/m/Y');
                                @endphp
                                <i data-feather="calendar" class="thumbnail-icon"></i>
                                <span itemprop="datePublished" content="{{ (new DateTime($data['data']['created_at']))->format('Y-m-d') }}">{!! $formattedDate !!}</span>
                            </div>
                            <a class="identity-category d-flex align-items-center gap-1 text-decoration-none text-light" title="Penulis" href="{!! route('author', $data['data']['user']['username']) !!}" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                <i data-feather="user" class="thumbnail-icon"></i>
                                <span itemprop="name">{!! $data['data']['user']['username'] !!}</span>
                            </a>
                        </div>
                        <div class="mt-3" id="articleThumbnail">
                            <img src="{!! $data['data']['img_thumbnail'] !!}" alt="Thumbnail {!! $data['data']['title'] !!}" class="img-fluid" itemprop="image">
                        </div>
                    </div>
                    {{-- Article Content - Body --}}
                    <div class="mt-4" id="articleBody" itemprop="articleBody">
                        {!! $data['data']['body'] !!}
                    </div>
                </article>
            </div>
            <div class="col-12 mt-3 col-xl-4 mt-xl-0">
                @include('layout.sidebar', [
                    'data' => $data['data']['newest_articles']
                ])
            </div>
        </div>
    @endif
@endsection
@section('scripts')
<script>
    hljs.highlightAll();
</script>
@endsection
