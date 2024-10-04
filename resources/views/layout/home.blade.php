@extends('layout.main')
@section('content')
{{-- Wrapper untuk article cards --}}
<div class="d-flex flex-wrap justify-content-center gap-4 mt-5" id="contentWrapper"></div>

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
            $.ajax({
                url: @json(route('articles')) + '?page=' + page,
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
