@extends('layout.main', [
    'meta' => [
        'need_canonical' => true
    ]
])
@section('content')
    {{-- Wrapper untuk article cards --}}
    @if (isset($data['data']['articles']) && count($data['data']['articles']) > 0 && $data['status'] === 'success')
        <div class="d-flex flex-wrap justify-content-center gap-4 mt-5" id="contentWrapper">
            @foreach ($data['data']['articles'] as $article)
                <article class="card overflow-hidden col-12 col-md-5 col-lg-4 col-xl-3 m-0 p-0" itemscope itemtype="https://schema.org/BlogPosting">
                    <div class="wrapper-thumbnail">
                        <img src="{!! $article['img_thumbnail'] !!}" class="card-img-top" alt="Thumbnail {!! $article['title'] !!}" itemprop="image">
                    </div>
                    <div class="card-body">
                        <h2 class="card-title fs-5 text-align-justify col-12" itemprop="headline">
                            <a href="{!! '/' . $article['slug']  !!}" class="text-decoration-none text-dark fw-bold" itemprop="url">
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
                            <div class="d-flex align-items-center gap-1" title="Penulis">
                                <i data-feather="user" class="thumbnail-icon"></i>
                                <span itemprop="author" itemscope itemtype="https://schema.org/Person">
                                    <span itemprop="name">{{ $article['user']['username'] }}</span>
                                </span>
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
            'url' => config('app.url')
        ])
    @endif
@endsection
