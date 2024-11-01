@extends('layout.main', [
    'meta' => [
        'author' => 'suhaefi21',
        'title' => 'Disclaimer',
        'url' => config('app.url') . '/disclaimer',
        'description' => 'All the information on this website is published in good faith and for general information purpose only. kodefiksi.com does not make any warranties about the completeness, reliability and accuracy of this information. Any action you take upon the information you find on this website (kodefiksi.com), is strictly at your own risk.'
    ]
])
@section('meta.article')
<meta property="article:published_time" content="2024-10-10T02:05:41.003Z">
<meta property="article:modified_time" content="2024-10-10T02:05:41.003Z">
@endsection
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
                    <span itemprop="name">Disclaimer</span>
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
                        <h1>Disclaimer</h1>
                    </div>
                </div>

                <div class="mt-4" id="articleBody">
                    <h2 class="fw-bold fs-4">Disclaimer for Kode Fiksi</h2>
                    <p>
                        If you require any more information or have any questions about our site's disclaimer.
                    </p>
                    <strong class="fs-5">
                        Disclaimers for kodefiksi.com
                    </strong>
                    <p>
                        All the information on this website is published in good faith and for general information purpose only. kodefiksi.com does not make any warranties about the completeness, reliability and accuracy of this information. Any action you take upon the information you find on this website (kodefiksi.com), is strictly at your own risk. kodefiksi.com will not be liable for any losses and/or damages in connection with the use of our website.
                    </p>
                    <p>
                        From our website, you can visit other websites by following hyperlinks to such external sites. While we strive to provide only quality links to useful and ethical websites, we have no control over the content and nature of these sites. These links to other websites do not imply a recommendation for all the content found on these sites. Site owners and content may change without notice and may occur before we have the opportunity to remove a link which may have gone 'bad'.
                    </p>
                    <p>
                        Please be also aware that when you leave our website, other sites may have different privacy policies and terms which are beyond our control. Please be sure to check the Privacy Policies of these sites as well as their "Terms of Service" before engaging in any business or uploading any information.
                    </p>
                    <strong class="fs-5">
                        Consent
                    </strong>
                    <p>
                        By using our website, you hereby consent to our disclaimer and agree to its terms.
                    </p>
                    <strong class="fs-5">
                        Update
                    </strong>
                    <p>
                        This site disclaimer was last updated on: October 10, 2024.
                    </p>
                    <em>
                        Should we update, amend or make any changes to this document, those changes will be prominently posted here.
                    </em>
                </div>
            </article>
        </div>
    </div>
@endsection
