@extends('layout.main', [
    'meta' => [
        'url' => $url,
        'keywords' => 'Artikel dengan kategori ' . ucfirst($category),
        'description' => 'Temukan berbagai macam artikel dengan kategori ' . ucfirst($category) . '.',
        'need_canonical' => true
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
                <li class="breadcrumb-item active" aria-current="page" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <span itemprop="name">{!! ucfirst($category) !!}</span>
                    <meta itemprop="position" content="2" />
                </li>
            </ol>
        </div>
    </div>

    {{-- Wrapper untuk article cards --}}
    @if (isset($data['data']['articles']) && count($data['data']['articles']) > 0 && $data['status'] === 'success')
        <h1 class="fs-3 d-none">Kategori {!! ucfirst($category) !!}</h1>
        <div class="d-flex flex-wrap justify-content-center gap-4 mt-5" id="contentWrapper">
            @foreach ($data['data']['articles'] as $article)
                <article class="card overflow-hidden col-12 col-md-5 col-lg-4 col-xl-3 m-0 p-0" itemscope itemtype="https://schema.org/BlogPosting">
                    <div class="wrapper-thumbnail">
                        <img src="{!! $article['img_thumbnail'] !!}" class="card-img-top" alt="Thumbnail {!! $article['title'] !!}" itemprop="image">
                    </div>
                    <div class="card-body">
                        <h2 class="card-title fs-5 text-align-justify col-12" itemprop="headline">
                            <a href="{!! '/' . $article['slug'] !!}" class="text-decoration-none text-dark fw-bold" itemprop="url">
                                {!! $article['title'] !!}
                            </a>
                        </h2>
                        <div class="d-flex gap-2 border-bottom mb-2" id="thumbnailItems">
                            <div class="d-flex align-items-center gap-1" title="Kategori">
                                <i data-feather="bookmark" class="thumbnail-icon"></i>
                                <span itemprop="articleSection">{!! $article['category']['name'] !!}</span>
                            </div>
                            <div class="d-flex align-items-center gap-1" title="Tanggal Dibuat">
                                <i data-feather="calendar" class="thumbnail-icon"></i>
                                @php
                                    $date = new DateTime($article['created_at']);
                                    $formattedDate = $date->format('d/m/Y');
                                @endphp
                                <span itemprop="datePublished" content="{{ $date->format('Y-m-d') }}">{!! $formattedDate !!}</span>
                            </div>
                            <div class="d-flex align-items-center gap-1" title="Penulis" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                <i data-feather="user" class="thumbnail-icon"></i>
                                <span itemprop="name">{{ $article['user']['username'] }}</span>
                            </div>
                        </div>
                        <p class="card-text small text-align-justify" itemprop="description">
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
@section('scripts')
    <script>
        const getPage = (element) => {
            const { active, page, category } = element.dataset;
            if (active === 'off') {
                return;
            }
            const query = page == 1 ? '' : '?page=' + page;
            location.href = '/category/' + category + query;
        }
    </script>
@endsection
