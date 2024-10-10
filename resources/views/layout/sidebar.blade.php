<aside class="sticky-top p-3 bg-secondary-subtle rounded" style="top: 70px" id="sidebar">
    <div class="badge p-2 bg-secondary mb-3">
        <h2 class="fs-6 fw-bold m-0">Artikel Terbaru</h2>
    </div>
    <div class="widget-content">
        <ul class="d-flex flex-column gap-2">
            @foreach ($data as $row)
                <li class="d-flex gap-2 rounded overflow-hidden bg-light">
                    <div class="item-thumbnail">
                        <img src="{!! $row['img_thumbnail'] !!}" alt="Thumbnail {!! $row['title'] !!}">
                    </div>
                    <div class="item-title d-flex align-items-center">
                        <a href="{!! route('article', $row['slug']) !!}" class="text-decoration-none text-dark small">
                            {!! $row['title'] !!}
                        </a>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</aside>
