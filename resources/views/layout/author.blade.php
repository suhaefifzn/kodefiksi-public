@extends('layout.main', [
    'meta' => [
        'description' => 'Temukan berbagai macam artikel yang ditulis oleh ' . $author . '.',
        'url' => $url,
        'keywords' => 'Artikel yang ditulis oleh ' . $author
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
                <span itemprop="name">{!! $author !!}</span>
                <meta itemprop="position" content="2" />
            </li>
        </ol>
    </div>
</div>


    {{-- Wrapper untuk article cards --}}
    @if (isset($data['data']['articles']) && count($data['data']['articles']) > 0 && $data['status'] === 'success')
        <h1 class="fs-3 d-none">Ditulis oleh {!! $author !!}</h1>
        <div class="d-flex flex-wrap justify-content-center gap-4 mt-5" id="contentWrapper">
            @foreach ($data['data']['articles'] as $article)
                <article class="card overflow-hidden col-12 col-md-5 col-lg-4 col-xl-3 m-0 p-0">
                    <div class="wrapper-thumbnail">
                        <img src="{!! $article['img_thumbnail'] !!}" class="card-img-top" alt="Thumbnail {!! $article['title'] !!}">
                    </div>
                    <div class="card-body">
                        <h2 class="card-title fs-5 text-align-justify col-12">
                            <a href="{!! '/' . $article['slug']  !!}" class="text-decoration-none text-dark fw-bold">
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
                                @php
                                    $date = new DateTime($article['created_at']);
                                    $formattedDate = $date->format('d/m/Y');
                                @endphp
                                <span>{!! $formattedDate !!}</span>
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
        {{-- Wrapper untuk pagination --}}
        @php
            $meta = $data['data']['meta'];
        @endphp
        <div id="paginationWrapper" class="d-flex mt-5 justify-content-center">
            <ul class="pagination">
                <li class="page-item {!! $meta['prev_page_url'] ? '' : 'disabled' !!}">
                    <div
                        class="page-link pagination-items"
                        onclick="getPage(this)"
                        data-page="{!! $meta['prev_page_url'] ? $meta['current_page'] - 1 : $meta['current_page'] !!}"
                        data-active="{!! $meta['prev_page_url'] ? 'on' : 'off' !!}"
                        data-author="{!! $author !!}"
                    >
                        <span>&laquo;</span>
                    </div>
                </li>
                <li class="page-item">
                    <div class="page-link active" id="currPage">{!! $meta['current_page'] !!}</div>
                </li>
                <li class="page-item {!! $meta['next_page_url'] ? '' : 'disabled' !!}">
                    <div
                        class="page-link pagination-items"
                        onclick="getPage(this)"
                        data-page="{!! $meta['next_page_url'] ? $meta['current_page'] + 1 : $meta['current_page'] !!}"
                        data-active="{!! $meta['next_page_url'] ? 'on' : 'off' !!}"
                        data-author="{!! $author !!}"
                    >
                        <span>&raquo;</span>
                    </div>
                </li>
            </ul>
        </div>
    @else
        <div class="d-flex flex-wrap justify-content-center gap-4 mt-5" id="contentWrapper">
            <span class="text-center">Artikel tidak ditemukan.</span>
        </div>
    @endif
@endsection
@section('scripts')
    <script>
        const getPage = (element) => {
            const { active, page, author } = element.dataset;
            if (active === 'off') {
                return;
            }
            const query = page == 1 ? '' : '?page=' + page;
            location.href = '/author/' + author + query;
        }
    </script>
@endsection
