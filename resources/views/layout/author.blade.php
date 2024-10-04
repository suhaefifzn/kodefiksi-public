@extends('layout.main')
@section('content')
{{-- Wrapper untuk breadcrumb --}}
<div class="border-bottom mb-5" id="breadcrumbWrapper">
    <div style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{!! route('home') !!}" class="text-decoration-none">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">{!! 'Penulis ' . $data['username'] !!}</li>
        </ol>
    </div>
</div>

{{-- Wrapper untuk article cards --}}
<div class="d-flex flex-wrap justify-content-center gap-4" id="contentWrapper"></div>

{{-- Wrapper untuk pagination --}}
<div id="paginationWrapper" class="d-flex mt-5 justify-content-center"></div>
@endsection
@section('scripts')
    {{-- Utils --}}
    @include('utils.js')

    <script>
        $(document).ready(() => {
            loadArticles(1);
        });

        const loadArticles = (page) => {
            const username = @json($data['username']);

            $.ajax({
                url: @json(route('articles')) + '?page=' + page + '&username=' + username,
                type: 'GET',
                beforeSend: () => {
                    generateCards([], '#contentWrapper', 10);
                },
                success: (response, status, xhr) => {
                    generateCards(response.data.articles, '#contentWrapper', response.data.articles.length);
                    generatePagination('#paginationWrapper', page, response.data.meta,);

                    feather.replace();
                },
                error: (xhr, status) => {
                    if (xhr.status === 404) {
                        $('#contentWrapper').html('<p>Artikel tidak ditemukan.</p>');
                    }
                }
            });
        };

        const getPage = (element) => {
            const { active, page } = element.dataset;

            if (active === 'off') {
                return;
            }

            loadArticles(page);
        }
    </script>
@endsection
