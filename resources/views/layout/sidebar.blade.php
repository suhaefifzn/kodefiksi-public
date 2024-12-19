<aside class="sticky-top p-3 bg-custom-3 rounded" style="top: 70px" id="sidebar">
    <div class="sidebar-article-list">
        <div class="badge p-2 bg-custom-2 mb-3">
            <h2 class="fs-6 fw-bold m-0">Featured</h2>
        </div>
        <div class="widget-content">
            <ul class="d-flex flex-column gap-2">
                @foreach ($data as $row)
                <li class="d-flex rounded overflow-hidden bg-light px-3">
                    <div class="item-title d-flex align-items-center">
                        <a href="{!! route('article', $row['slug']) !!}" class="text-decoration-none text-dark small">
                            {!! $row['title'] !!}
                        </a>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="sidebar-media-list">
        <div class="badge p-2 bg-custom-2">
            <h2 class="fs-6 fw-bold m-0">Socializer</h2>
        </div>
        <div class="social-media-list">
            <a href="https://www.youtube.com/@kodefiksi21" target="_blank" rel="noreferrer noopener" class="social-icon youtube" title="Kode Fiksi on YouTube">
                <i data-feather="youtube"></i>
            </a>
            <a href="https://instagram.com/kodefiksi.ig" target="_blank" rel="noreferrer noopener" class="social-icon instagram" title="Kode Fiksi on Instagram">
                <i data-feather="instagram"></i>
            </a>
            <a href="https://github.com/kodefiksi" target="_blank" rel="noreferrer noopener" class="social-icon github" title="Kode Fiksi on GitHub">
                <i data-feather="github"></i>
            </a>
        </div>
    </div>
</aside>
