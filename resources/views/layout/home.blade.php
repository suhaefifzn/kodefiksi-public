@extends('layout.main', [
    'meta' => [
        'need_canonical' => true
    ]
])
@section('content')
{{-- Hero --}}
<div class="container-fluid py-5 mb-4 d-flex justify-content-center"
     style="background-image: url('{!! $data['articles']['latest']['img_thumbnail'] !!}');
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;"
     itemscope
     itemtype="https://schema.org/BlogPosting">
    {{-- Meta untuk itemprop image --}}
    <meta itemprop="image" content="{!! $data['articles']['latest']['img_thumbnail'] !!}">
    <div class="p-3 p-md-5 mb-4 lc-block col-xxl-7 col-lg-8 col-12"
         style="backdrop-filter: blur(6px) saturate(102%);
                -webkit-backdrop-filter: blur(6px) saturate(102%);
                background-color: rgba(255, 255, 255, 0.45);
                border-radius: 12px;
                border: 1px solid rgba(209, 213, 219, 0.3);">
        <div>
            <h2 class="fs-2 fw-bold display-3" itemprop="headline">{!! $data['articles']['latest']['title'] !!}</h2>
        </div>
        <div class="d-flex gap-2 mb-2 overflow-x-hidden" id="thumbnailItems">
            <div class="d-flex align-items-center gap-1" title="Kategori">
                <i data-feather="bookmark" class="thumbnail-icon"></i>
                <span itemprop="articleSection">{!! $data['articles']['latest']['category']['name'] !!}</span>
            </div>
            <div class="d-flex align-items-center gap-1" title="Tanggal Dibuat">
                <i data-feather="calendar" class="thumbnail-icon"></i>
                @php
                    $date = new DateTime($data['articles']['latest']['created_at']);
                    $formattedDate = $date->format('d/m/Y');
                @endphp
                <span itemprop="datePublished" content="{{ $date->format('Y-m-d') }}">{!! $formattedDate !!}</span>
            </div>
            <div class="d-flex align-items-center gap-1" title="Penulis">
                <i data-feather="user" class="thumbnail-icon"></i>
                <span itemprop="author" itemscope itemtype="https://schema.org/Person">
                    <span itemprop="name">{{ $data['articles']['latest']['user']['username'] }}</span>
                </span>
            </div>
        </div>
        <div class="lc-block col-md-8">
            <p itemprop="description">{!! $data['articles']['latest']['excerpt'] !!}</p>
        </div>
        <div>
            <a class="btn btn-dark bg-custom-1"
               href="{!! config('app.url') . '/' . $data['articles']['latest']['slug'] !!}"
               role="button"
               itemprop="url">Baca Selengkapnya</a>
        </div>
    </div>
</div>
{{-- Cards per Category --}}
<div class="container mt-3">
    @foreach($data['articles']['per_categories'] as $category)
        @if(count($category['articles']) > 0)
            <div class="text-center mb-4">
                <span class="fs-3 fw-bold">{!! $category['name'] !!}</span>
            </div>
            <div class="d-flex flex-wrap justify-content-center gap-4" id="contentWrapper">
                @foreach($category['articles'] as $article)
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
                                <span itemprop="articleSection">{!! $category['name'] !!}</span>
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
            {{-- Go to Category Page --}}
            <div class="text-center mt-3 mb-3 pb-4 border-bottom">
                <a href="/category/{!! $category['slug'] !!}" class="btn btn-dark bg-custom-1">Lihat Selengkapnya di Kategori {!! $category['name'] !!}</a>
            </div>
        @endif
    @endforeach
</div>
@endsection
