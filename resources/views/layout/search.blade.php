@extends('layout.main', [
    'meta' => [
        'url' => config('app.url') . '/search',
        'keywords' => $query,
        'description' => 'Hasil pencarian untuk ' . $query,
        'need_canonical' => false,
        'is_pagination' => false
    ]
])

@section('meta.article')
    <meta name="robots" content="noindex, nofollow">
@endsection

@section('content')
    {{-- Wrapper untuk article cards --}}
    @if (isset($data['data']['articles']) && count($data['data']['articles']) > 0 && $data['status'] === 'success')
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
                        <h2 class="card-title fs-5 text-align-justify col-12">
                            <a href="{!! '/' . $article['slug']  !!}" class="text-decoration-none text-light fw-bold">
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
                                <span itemprop="name">{{ $article['user']['username'] }}</span>
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
            'url' => config('app.url') . '/search',
            'query' => $query
        ])
    @else
        <div class="d-flex flex-column justify-content-center justify-content-center my-5 bg-dark" id="contentWrapper" style="min-height: 460px">
            <p>Maaf, sepertinya artikel yang Anda cari tidak tersedia.</p>
            <div class="bg-dark">
                <h2 class="fs-5 fw-bold">Rekomendasi</h2>
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="/category/anime" class="text-decoration-none">Anime</a>
                    </li>
                    <li class="list-group-item">
                        <a href="/category/game" class="text-decoration-none">Game</a>
                    </li>
                </ul>
            </div>
        </div>
    @endif
@endsection
