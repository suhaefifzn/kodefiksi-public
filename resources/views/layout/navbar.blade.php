<header class="position-fixed w-100" style="z-index: 9999" itemscope itemtype="https://schema.org/WPHeader">
    <nav class="navbar bg-custom-1 fixed-top navbar-expand-lg" itemscope itemtype="https://schema.org/SiteNavigationElement" aria-label="Main navigation">
        <div class="container gap-0 gap-lg-4">
            <a href="/" class="text-decoration-none" itemprop="url">
                <img src="/assets/logo.png" alt="Logo" width="36" class="d-inline-block align-text-top" itemprop="logo">
                @if (Request::is('/'))
                <h1 class="navbar-brand m-0 p-0 fw-bold d-none" itemprop="name">
                    Kode Fiksi
                </h1>
                @else
                <span class="navbar-brand fw-bold d-none" itemprop="name">Kode Fiksi</span>
                @endif
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggle" aria-controls="navbarToggle" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarToggle">
                <ul class="navbar-nav me-auto mb-2 ms-2 ms-lg-0 mb-lg-0">
                    <li class="nav-item" itemprop="about" itemscope itemtype="https://schema.org/Thing">
                        <a class="nav-link" href="{!! route('category', 'anime') !!}" title="Anime" itemprop="url">
                            <span itemprop="name">Anime</span>
                        </a>
                    </li>
                    <li class="nav-item" itemprop="about" itemscope itemtype="https://schema.org/Thing">
                        <a class="nav-link" href="{!! route('category', 'game') !!}" title="Game" itemprop="url">
                            <span itemprop="name">Game</span>
                        </a>
                    </li>
                    <li class="nav-item" itemprop="about" itemscope itemtype="https://schema.org/Thing">
                        <a class="nav-link" href="{!! route('category', 'pemrograman') !!}" title="Pemrograman" itemprop="url">
                            <span itemprop="name">Pemrograman</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
