@php
    $meta = $data['data']['meta'];
    $prevNumber = is_null($meta['current_page']) ?  1 : $meta['current_page'] - 1;
    $nextNumber = is_null($meta['current_page']) ?  $meta['current_page'] : $meta['current_page'] + 1;
    $last_page = ceil($meta['total_items'] / $meta['item_per_page']);

    if (isset($query)) {
        $url = $url . '?q=' . $query . '&page=';
    }
@endphp

{{-- Meta For Specific Pages --}}
@section('meta.article')
    {{--  SEO for Pagination --}}
    @if($meta['prev_page_url'])
        <link rel="prev" href="{!! isset($query)
            ? ($url . ($meta['current_page'] - 1))
            : $url . '?page=' . ($meta['current_page'] - 1) !!}"
        >
    @endif
    @if($meta['next_page_url'])
        <link rel="next" href="{!! isset($query)
            ? ($url . ($meta['current_page'] + 1))
            : $url . '?page=' . ($meta['current_page'] + 1) !!}"
        >
    @endif
@endsection

{{-- Pagination - SEO --}}
<div id="paginationWrapper" class="d-flex mt-5 justify-content-center">
    <ul class="pagination">
        {{-- Tombol Prev --}}
        <li class="page-item {!! $meta['prev_page_url'] ? '' : 'disabled' !!}">
            <a href="{!! $meta['prev_page_url']
                ? ($meta['current_page'] > 1 ? (isset($query) ? ($url . $prevNumber) : $url . '?page=' . $prevNumber) : $url )
                : '#' !!}"
            class="page-link {!! $meta['prev_page_url'] ? '' : 'disabled' !!}"
            aria-disabled="{!! $meta['prev_page_url'] ? 'false' : 'true' !!}"
            aria-label="Previous page">
                <span>&laquo;</span>
            </a>
        </li>

        {{-- Tombol Page 1 --}}
        @if ($meta['current_page'] > 1)
        <li class="page-item">
            <a href="{{ route('home') }}" class="page-link" aria-label="Page 1">1</a>
        </li>
        @endif

        {{-- Titik Tiga Sebelum Current Page --}}
        @if ($meta['current_page'] > 3)
            <li class="page-item disabled">
                <span class="page-link">...</span>
            </li>
        @endif

        {{-- Halaman Sebelum Current Page --}}
        @if ($meta['current_page'] > 2)
            <li class="page-item">
                <a href="{!! isset($query) ? ($url . $prevNumber) : $url . '?page=' . $prevNumber !!}"
                class="page-link"
                aria-label="Page {!! $prevNumber !!}">
                    {!! $prevNumber !!}
                </a>
            </li>
        @endif

        {{-- Current Page --}}
        <li class="page-item active">
            <span class="page-link" aria-current="page">{!! $meta['current_page'] !!}</span>
        </li>

        {{-- Halaman Setelah Current Page --}}
        @if ($meta['current_page'] < $last_page)
            <li class="page-item">
                <a href="{!! isset($query) ? ($url . $nextNumber) : $url . '?page=' . $nextNumber !!}"
                class="page-link"
                aria-label="Page {!! $nextNumber !!}">
                    {!! $nextNumber !!}
                </a>
            </li>
        @endif

        {{-- Titik Tiga Setelah Current Page --}}
        @if ($meta['current_page'] < $last_page - 2)
            <li class="page-item disabled">
                <span class="page-link">...</span>
            </li>
        @endif

        {{-- Tombol Page Last --}}
        @if ($meta['current_page'] < ($last_page - 1))
            <li class="page-item">
                <a href="{!! isset($query) ? ($url . $last_page) : $url . '?page=' . $last_page !!}"
                class="page-link"
                aria-label="Page {!! $last_page !!}">
                    {!! $last_page !!}
                </a>
            </li>
        @endif

        {{-- Tombol Next --}}
        <li class="page-item {!! $meta['next_page_url'] ? '' : 'disabled' !!}">
            <a href="{!! $meta['next_page_url'] ? (isset($query) ? ($url . $nextNumber) : $url . '?page=' . $nextNumber) : '#' !!}"
            class="page-link {!! $meta['next_page_url'] ? '' : 'disabled' !!}"
            aria-disabled="{!! $meta['next_page_url'] ? 'false' : 'true' !!}"
            aria-label="Next page">
                <span>&raquo;</span>
            </a>
        </li>
    </ul>
</div>
