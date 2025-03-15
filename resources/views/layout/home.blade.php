@extends('layout.main', [
    'meta' => [
        'need_canonical' => true,
        'is_pagination' => false
    ]
])
@section('content')
    {{-- Hero --}}
    <div class="container-fluid py-5 mb-4 d-flex justify-content-center"
        style="background-image: url('{!! $data['articles']['latest']['img_thumbnail'] !!}');
                background-position: center;
                background-size: cover;
                background-repeat: no-repeat;">
        <h2 class="d-none fs-3">
            Featured Post
        </h2>
        <article class="p-3 p-md-5 mb-4 lc-block col-xxl-7 col-lg-8 col-12"
            style="backdrop-filter: blur(6px) saturate(102%);
                    -webkit-backdrop-filter: blur(6px) saturate(102%);
                    background-color: rgba(255, 255, 255, 0.45);
                    border-radius: 12px;
                    border: 1px solid rgba(209, 213, 219, 0.3);"
        >
            @php
                $datePublished = (new DateTime($data['articles']['latest']['created_at']));
            @endphp

            <h3 class="fs-2 fw-bold display-3 text-dark">{!! $data['articles']['latest']['title'] !!}</h3>
            <div class="d-flex gap-2 mb-2 overflow-x-hidden" id="thumbnailItems">
                <div class="d-flex align-items-center gap-1 text-dark" title="Kategori">
                    <i data-feather="bookmark" class="thumbnail-icon"></i>
                    <span>{!! $data['articles']['latest']['category']['name'] !!}</span>
                </div>
                <div class="d-flex align-items-center gap-1 text-dark" title="Tanggal Dibuat">
                    <i data-feather="calendar" class="thumbnail-icon"></i>
                    <span>{!! $datePublished->format('d/m/Y') !!}</span>
                </div>
                <div class="d-flex align-items-center gap-1 text-dark" title="Penulis">
                    <i data-feather="user" class="thumbnail-icon"></i>
                    <span>{{ $data['articles']['latest']['user']['username'] }}</span>
                </div>
            </div>
            <div class="lc-block col-md-8">
                <p class="text-dark">{!! $data['articles']['latest']['excerpt'] !!}</p>
            </div>
            <div>
                <a class="btn btn-dark bg-custom-1"
                href="{!! config('app.url') . '/' . $data['articles']['latest']['slug'] !!}"
                role="button">Baca Selengkapnya</a>
            </div>
        </article>
    </div>
    {{-- Cards per Category --}}
    <div class="row justify-content-center mt-3">
        @foreach($data['articles']['per_categories'] as $category)
            @if(count($category['articles']) > 0)
                <div class="text-center mb-4">
                    <h2 class="fs-3 fw-bold">{!! $category['name'] !!}</h2>
                </div>
                <div class="d-flex flex-wrap col-12 gap-4 gap-xl-0 justify-content-center px-md-0 px-xl-3" id="contentWrapper">
                    @foreach($category['articles'] as $article)
                    <article class="card overflow-hidden col-12 col-md-8 col-lg-5 col-xl-4 m-0 p-0">
                        @php
                            $datePublished = (new DateTime($article['created_at']))->format('d/m/Y');
                        @endphp
                        <div class="wrapper-thumbnail">
                            <img src="{!! $article['img_thumbnail'] !!}" class="card-img-top" alt="Thumbnail {!! $article['title'] !!}">
                        </div>
                        <div class="card-body p-2 p-xl-3">
                            <h3 class="card-title fs-5">
                                <a href="{!! '/' . $article['slug']  !!}" class="text-decoration-none text-light fw-bold">
                                    {!! $article['title'] !!}
                                </a>
                            </h3>
                            <div class="d-flex gap-2 border-bottom mb-2" id="thumbnailItems">
                                <div class="d-flex align-items-center gap-1" title="Kategori">
                                    <i data-feather="bookmark" class="thumbnail-icon"></i>
                                    <span>{!! $category['name'] !!}</span>
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
                {{-- Go to Category Page --}}
                <div class="text-center mt-3 mb-3 pb-4 border-bottom">
                    <a href="/category/{!! $category['slug'] !!}" class="btn btn-dark bg-custom-1">Lihat Selengkapnya di Kategori {!! $category['name'] !!}</a>
                </div>
            @endif
        @endforeach
    </div>
@endsection
