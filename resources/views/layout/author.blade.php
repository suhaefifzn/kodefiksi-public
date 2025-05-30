@extends('layout.main', [
    'meta' => [
        'url' => $url,
        'keywords' => 'Artikel yang ditulis oleh ' . $author,
        'description' => 'Temukan berbagai macam artikel yang ditulis oleh ' . $author . '.',
        'need_canonical' => true,
        'is_pagination' => isset($is_pagination) ? $is_pagination : false
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
                <li class="breadcrumb-item small" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <a href="{!! route('author.index') !!}" class="text-decoration-none" itemprop="item">
                        <span itemprop="name">Author</span>
                    </a>
                    <meta itemprop="position" content="2" />
                </li>
                <li class="breadcrumb-item small active" aria-current="page" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <span itemprop="name">{!! $author !!}</span>
                    <meta itemprop="item" content="{{ route('author', $author) }}">
                    <meta itemprop="position" content="3" />
                </li>
            </ol>
        </div>
    </div>

    {{-- Wrapper untuk article cards --}}
    @if (isset($data['data']['articles']) && count($data['data']['articles']) > 0 && $data['status'] === 'success')
        <h1 class="fs-4 fw-bold text-center">{!! $title !!}</h1>
        <div class="d-flex flex-wrap col-12 gap-4 gap-xl-0 justify-content-center px-md-0 px-xl-3 mt-5" id="contentWrapper">
            @foreach ($data['data']['articles'] as $article)
                <article class="card overflow-hidden col-12 col-md-8 col-lg-5 col-xl-4 m-0 p-0">
                    @php
                        $datePublished = (new DateTime($article['created_at']))->format('d/m/Y');
                    @endphp

                    <div class="wrapper-thumbnail">
                        <img src="{!! $article['img_thumbnail'] !!}" class="card-img-top" alt="Thumbnail {!! $article['title'] !!}">
                    </div>
                    <div class="card-body p-2 p-xl-3">
                        <h2 class="card-title fs-5 col-12">
                            <a href="{!! '/' . $article['slug'] !!}" class="text-decoration-none text-light fw-bold">
                                {!! $article['title'] !!}
                            </a>
                        </h2>
                        <div class="d-flex gap-2 border-bottom mb-2" id="thumbnailItems">
                            <div class="d-flex align-items-center gap-1" title="Kategori">
                                <i data-feather="bookmark" class="thumbnail-icon"></i>
                                <span>{!! $article['category']['name'] !!}</span>
                            </div>
                            <div class="d-flex align-items-center gap-1" title="Tanggal Dibuat">
                                <i data-feather="calendar" class="thumbnail-icon"></i>
                                <span>{!! $datePublished !!}</span>
                            </div>
                            <div class="d-flex align-items-center gap-1" title="Penulis">
                                <i data-feather="user" class="thumbnail-icon"></i>
                                <span>{{ $article['user']['username'] }}</span>
                            </div>
                        </div>
                        <p class="card-text small text-align-justify">
                            {!! $article['excerpt'] !!}
                        </p>
                    </div>
                </article>
            @endforeach
        </div>

        @include('layout.pagination', [
            'data' => $data,
            'url' => $url
        ])
    @endif
@endsection
