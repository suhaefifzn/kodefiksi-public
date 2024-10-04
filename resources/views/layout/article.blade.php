@extends('layout.main', [
    'meta' => [
        'author' => $data['user']['username'],
        'title' => $data['title'],
        'description' => $data['excerpt'],
        'url' => config('app.url') . '/' . $data['slug'],
        'thumbnail' => config('app.my_config.api_url') . '/' . $data['img_thumbnail']
    ]
])
@section('content')
    @if (is_array($data))
        @section('meta.article')
            <meta property="article:published_time" content="{!! $data['created_at'] !!}">
            <meta property="article:modified_time" content="{!! $data['updated_at'] !!}">
        @endsection
        {{-- Wrapper untuk breadcrumb --}}
        <div class="border-bottom mb-4 overflow-hidden" id="breadcrumbWrapper">
            <div style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{!! route('home') !!}" class="text-decoration-none">Home</a></li>
                    <li class="breadcrumb-item">
                        <a href="{!! route('category', $data['category']['slug']) !!}" class="text-decoration-none">
                            {!! $data['category']['name'] !!}
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        {!! $data['title'] !!}
                    </li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="article-wrapper d-flex flex-column col-xl-8">
                <article class="d-flex flex-column col-12 col-xl-12">
                    <div class="d-flex justify-content-center align-items-center flex-column" id="articleHeader">
                        <div id="identity" class="small d-flex gap-3">
                            <a class="identity-category d-flex align-items-center gap-1 text-decoration-none text-dark" title="Kategori" href="{!! route('category', $data['category']['slug']) !!}">
                                <i data-feather="bookmark" class="thumbnail-icon"></i>
                                <span>{!! $data['category']['name'] !!}</span>
                            </a>
                            <div class="identity-category d-flex align-items-center gap-1" title="Tanggal Dibuat">
                                @php
                                    $formattedDate = (new DateTime($data['created_at']))->format('d/m/Y');
                                @endphp
                                <i data-feather="calendar" class="thumbnail-icon"></i>
                                <span>{!! $formattedDate !!}</span>
                            </div>
                            <a class="identity-category d-flex align-items-center gap-1 text-decoration-none text-dark" title="Penulis" href="{!! route('author', $data['user']['username']) !!}">
                                <i data-feather="user" class="thumbnail-icon"></i>
                                <span>{!! $data['user']['username'] !!}</span>
                            </a>
                        </div>
                        <div class="text-center mt-1" id="articleTitle">
                            <h1>{!! $data['title'] !!}</h1>
                        </div>
                        <div class="mt-3" id="articleThumbnail">
                            <img src="{!! config('app.my_config.api_url') . '/' .  $data['img_thumbnail'] !!}" alt="Thumbnail {!! $data['title'] !!}" class="img-fluid">
                        </div>
                    </div>

                    <div class="mt-4" id="articleBody">
                        {!! $data['body'] !!}
                    </div>
                </article>
                <div class="col-12 col-xl-12 mt-3 bg-secondary-subtle rounded p-3" id="articleRelated">
                    <div class="related-title badge bg-secondary p-2 mb-3">
                        <span class="fw-bold fs-6">Artikel Terkait</span>
                    </div>
                    <div class="card-wrapper row gap-3 justify-content-center">
                        @foreach ($data['related_articles'] as $article)
                            <div class="card col-10 col-xl-3 p-0">
                                <div class="wrapper-thumbail">
                                    <img src="{!! config('app.my_config.api_url') . '/' . $article['img_thumbnail'] !!}" alt="Thumbnail {!! $article['title'] !!}" class="card-img-top" loading="lazy">
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title fs-6 fw-bold">
                                        <a href="{!! route('article', $article['slug']) !!}" class="text-dark text-decoration-none">
                                            {!! $article['title'] !!}
                                        </a>
                                    </h3>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-12 mt-3 col-xl-4 mt-xl-0">
                @include('layout.sidebar', ['data' => $data['newest_articles']])
            </div>
        </div>
    @else
        <div class="text-center">
            Artikel tidak ditemukan.
        </div>
    @endif
@endsection
