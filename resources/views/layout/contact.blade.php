@extends('layout.main', [
    'meta' => [
        'author' => 'kodefiksi',
        'title' => 'Contact Us',
        'url' => config('app.url') . '/contact',
        'description' => 'Apabila ada hal yang ingin Anda sampaikan, kirimkan ke alamat email kodefiksi@gmail.com.',
        'need_canonical' => true,
        'is_pagination' => false
    ]
])
@section('content')
    {{-- Wrapper untuk breadcrumb --}}
    <div class="border-bottom mb-4" id="breadcrumbWrapper">
        <div style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
                <li class="breadcrumb-item small" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <a href="{!! route('home') !!}" class="text-decoration-none" itemprop="item">
                        <span itemprop="name">Home</span>
                    </a>
                    <meta itemprop="position" content="1" />
                </li>
                <li class="breadcrumb-item small active" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <span itemprop="name">Contact Us</span>
                    <meta itemprop="item" content="{{ route('contact') }}">
                    <meta itemprop="position" content="2" />
                </li>
            </ol>
        </div>
    </div>
    <div class="row justify-content-center" style="min-height: 580px">
        <div class="article-wrapper d-flex flex-column col-xl-8">
            <article class="d-flex flex-column col-12 col-xl-12 text-break" itemscope itemtype="https://schema.org/ContactPage">
                <meta itemprop="mainEntityOfPage" itemscope itemtype="https://schema.org/WebPage"/>

                <div class="d-flex justify-content-center align-items-center flex-column" id="articleHeader">
                    <div class="text-center mt-1" id="articleTitle">
                        <h1 class="fs-3 fw-bold" itemprop="headline">Contact Us</h1>
                    </div>
                </div>

                <div class="mt-4" id="articleBody" itemprop="description">
                    <p style="text-align: justify">
                        Saat ini kami belum memiliki kontak resmi untuk dihubungi perihal situs web ini. Namun bila ada pertanyaan atau hal penting yang ingin Anda sampaikan, hubungi kami melalui alamat email di bawah ini:
                    </p>

                    {{-- Informasi kontak --}}
                    <div itemscope itemtype="https://schema.org/ContactPoint">
                        <meta itemprop="contactType" content="customer support"/>
                        <meta itemprop="areaServed" content="ID"/>
                        <meta itemprop="availableLanguage" content="Indonesian"/>
                        <p>
                            📧 Email: <a href="mailto:kodefiksi@gmail.com" itemprop="email">kodefiksi@gmail.com</a> atau <a href="mailto:jitter.rand@gmail.com" itemprop="email">jitter.rand@gmail.com</a>
                        </p>
                    </div>

                    <p style="text-align: justify">Terima kasih.</p>
                </div>

                {{-- Informasi organisasi --}}
                <div itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                    <meta itemprop="name" content="Kode Fiksi"/>
                    <div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
                        <meta itemprop="url" content="/assets/logo.webp"/>
                    </div>
                    <meta itemprop="url" content="https://kodefiksi.com"/>
                </div>
            </article>
        </div>
    </div>
@endsection
