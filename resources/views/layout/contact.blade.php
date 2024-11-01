@extends('layout.main', [
    'meta' => [
        'author' => 'suhaefi21',
        'title' => 'Contact Us',
        'url' => config('app.url') . '/contact',
        'description' => 'Saat ini kami belum memiliki kontak resmi untuk dihubungi perihal situs web ini. Namun bila ada pertanyaan atau hal yang ingin Anda sampaikan, bisa melalui alamat email suhaefi21@gmail.com atau Instagram suhaefi.ig.'
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
                    <span itemprop="name">Contact Us</span>
                    <meta itemprop="position" content="2" />
                </li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="article-wrapper d-flex flex-column col-xl-8">
            <article class="d-flex flex-column col-12 col-xl-12">
                <div class="d-flex justify-content-center align-items-center flex-column" id="articleHeader">
                    <div class="text-center mt-1" id="articleTitle">
                        <h1>Contact Us</h1>
                    </div>
                </div>

                <div class="mt-4" id="articleBody">
                    <p style="text-align: justify">
                        Saat ini kami belum memiliki kontak resmi untuk dihubungi perihal situs web ini. Namun bila ada pertanyaan atau hal yang ingin Anda sampaikan, hubungi kami melalui Instagram <a href="https://instagram.com/kodefiksi.ig" target="_blank">kodefiksi.ig</a>. Terima kasih atas pengertiaannya.
                    </p>
                </div>
            </article>
        </div>
    </div>
@endsection
