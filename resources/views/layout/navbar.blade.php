<header class="position-fixed w-100" style="z-index: 9999">
    <nav class="navbar bg-secondary-subtle fixed-top navbar-expand-lg">
        <div class="container gap-0 gap-lg-4">
            <a href="/" class="text-decoration-none">
                @if (Request::is('/'))
                <h1 class="navbar-brand m-0 p-0 fw-bold">
                    Kode Fiksi
                </h1>
                @else
                <span class="navbar-brand fw-bold">Kode Fiksi</span>
                @endif
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggle" aria-controls="navbarToggle" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarToggle">
                <ul class="navbar-nav me-auto mb-2 ms-2 ms-lg-0 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('category', 'anime') }}" title="Anime">
                            <i data-feather='film' class="navbar-icon"></i>
                            Anime
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('category', 'game') }}" title="Game">
                            <i data-feather='dribbble' class="navbar-icon"></i>
                            Game
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('category', 'pemrograman') }}" title="Pemrograman">
                            <i data-feather='code' class="navbar-icon"></i>
                            Pemrograman
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
