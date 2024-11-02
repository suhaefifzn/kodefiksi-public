@extends('layout.main', [
    'meta' => [
        'author' => isset($data['data']) ? $data['data']['user']['username'] : 'kodefiksi',
        'title' => isset($data['data']) ? $data['data']['title'] : 'Kode Fiksi',
        'keywords' => isset($data['data']) ? $data['data']['title'] : 'Anime, Manga, Game, Pemrograman, Tutorial Pemrograman',
        'description' => isset($data['data']) ? $data['data']['excerpt'] : 'Artikel tidak ditemukan',
        'url' => isset($data['data']) ? config('app.url') . '/' . $data['data']['slug'] : config('app.url'),
        'thumbnail' => isset($data['data']) ? config('app.my_config.api_url') . '/' . $data['data']['img_thumbnail'] : '/assets/favicon.png'
    ]
])
@section('content')
    @if (isset($data['data']))
        @section('meta.article')
            <meta property="article:published_time" content="{!! $data['data']['created_at'] !!}">
            <meta property="article:modified_time" content="{!! $data['data']['updated_at'] !!}">
        @endsection
        {{-- Wrapper untuk breadcrumb --}}
        <div class="border-bottom mb-4 overflow-hidden" id="breadcrumbWrapper">
            <div style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
                    <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <a href="{!! route('home') !!}" class="text-decoration-none" itemprop="item">
                            <span itemprop="name">Home</span>
                        </a>
                        <meta itemprop="position" content="1" />
                    </li>
                    <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <a href="{!! route('category', $data['data']['category']['slug']) !!}" class="text-decoration-none" itemprop="item">
                            <span itemprop="name">{!! $data['data']['category']['name'] !!}</span>
                        </a>
                        <meta itemprop="position" content="2" />
                    </li>
                    <li class="breadcrumb-item active" aria-current="page" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <span itemprop="name">{!! $data['data']['title'] !!}</span>
                        <meta itemprop="position" content="3" />
                    </li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="article-wrapper d-flex flex-column col-xl-8">
                <article class="d-flex flex-column col-12 col-xl-12" itemscope itemtype="https://schema.org/BlogPosting">
                    <div class="d-flex justify-content-center align-items-center flex-column" id="articleHeader">
                        <div id="identity" class="small d-flex gap-3">
                            <a class="identity-category d-flex align-items-center gap-1 text-decoration-none text-dark" title="Kategori" href="{!! route('category', $data['data']['category']['slug']) !!}" itemprop="articleSection">
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
                            <a class="identity-category d-flex align-items-center gap-1 text-decoration-none text-dark" title="Penulis" href="{!! route('author', $data['data']['user']['username']) !!}" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                <i data-feather="user" class="thumbnail-icon"></i>
                                <span itemprop="name">{!! $data['data']['user']['username'] !!}</span>
                            </a>
                        </div>
                        <div class="text-center mt-1" id="articleTitle">
                            <h1 itemprop="headline">{!! $data['data']['title'] !!}</h1>
                        </div>
                        <div class="mt-5" id="articleThumbnail">
                            <img src="{!! $data['data']['img_thumbnail'] !!}" alt="Thumbnail {!! $data['data']['title'] !!}" class="img-fluid" itemprop="image">
                        </div>
                    </div>

                    <div class="mt-4" id="articleBody" itemprop="articleBody">
                        {!! $data['data']['body'] !!}
                    </div>
                </article>

                {{-- AddToAny Social Media Share --}}
                <div class="a2a_kit a2a_kit_size_32 a2a_default_style d-flex justify-content-center my-3">
                    <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
                    <a class="a2a_button_facebook"></a>
                    <a class="a2a_button_whatsapp"></a>
                    <a class="a2a_button_x"></a>
                    <a class="a2a_button_telegram"></a>
                    <a class="a2a_button_copy_link"></a>
                </div>

                <div class="col-12 col-xl-12 mt-3 bg-custom-3 rounded p-3" id="articleRelated">
                    <div class="related-title badge bg-custom-2 p-2 mb-3">
                        <span class="fw-bold fs-6">Related</span>
                    </div>
                    <div class="card-wrapper row gap-3 justify-content-center">
                        @foreach ($data['data']['related_articles'] as $article)
                            <div class="card col-10 col-xl-3 p-0" itemscope itemtype="https://schema.org/BlogPosting">
                                <div class="wrapper-thumbnail">
                                    <img src="{!! $article['img_thumbnail'] !!}" alt="Thumbnail {!! $article['title'] !!}" class="card-img-top" loading="lazy" itemprop="image">
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title fs-6 fw-bold" itemprop="headline">
                                        <a href="{!! route('article', $article['slug']) !!}" class="text-dark text-decoration-none" itemprop="url">
                                            {!! $article['title'] !!}
                                        </a>
                                    </h3>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div id="disqus_thread"></div>
            </div>

            <div class="col-12 mt-3 col-xl-4 mt-xl-0">
                @include('layout.sidebar', [
                    'data' => $data['data']['newest_articles']
                ])
            </div>
        </div>
    @else
        <div class="text-center">
            Artikel tidak ditemukan.
        </div>
    @endif
@endsection
@section('scripts')
    {{-- AddToAny Social Media Share --}}
    <script async src="https://static.addtoany.com/menu/page.js"></script>

    {{-- Disqus --}}
    <script>
        var disqus_config = function () {
            this.page.url = @json(config('app.url') . '/' . $data['data']['slug']);
            this.page.identifier = @json($data['data']['slug']);
        };

        (function() {
            var d = document, s = d.createElement('script');
            s.src = 'https://kode-fiksi.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
@endsection
