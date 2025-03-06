<header class="position-fixed w-100" style="z-index: 99999" itemscope itemtype="https://schema.org/WPHeader">
    <nav class="navbar bg-custom-1 fixed-top navbar-expand-lg" itemscope itemtype="https://schema.org/SiteNavigationElement" aria-label="Main navigation">
        <div class="container gap-0 gap-lg-4">
            <h1 class="p-0 m-0 fs-6">
                <a href="/" class="text-decoration-none" itemprop="url" title="Kode Fiksi">
                    <img src="/assets/logo.webp" alt="Logo Kode Fiksi" width="36" class="d-inline-block align-text-top" itemprop="brand">
                </a>
            </h1>
            <a class="navbar-toggler bg-dark" role="button" data-bs-toggle="collapse" data-bs-target="#navbarToggle" aria-controls="navbarToggle" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </a>
            <div class="collapse navbar-collapse" id="navbarToggle">
                <ul class="navbar-nav me-auto my-3 my-lg-0">
                    <li class="nav-item" itemprop="name" itemscope itemtype="https://schema.org/Thing">
                        <a class="nav-link" href="{!! route('category', 'anime') !!}" title="Anime" itemprop="url">
                            <span itemprop="name">Anime</span>
                        </a>
                    </li>
                    <li class="nav-item" itemprop="name" itemscope itemtype="https://schema.org/Thing">
                        <a class="nav-link" href="{!! route('category', 'game') !!}" title="Game" itemprop="url">
                            <span itemprop="name">Game</span>
                        </a>
                    </li>
                    <li class="nav-item" itemprop="name" itemscope itemtype="https://schema.org/Thing">
                        <a class="nav-link" href="{!! route('category', 'pemrograman') !!}" title="Pemrograman" itemprop="url">
                            <span itemprop="name">Pemrograman</span>
                        </a>
                    </li>
                </ul>
                <form class="d-flex ms-auto" role="search" action="/search" method="get">
                    <div class="input-group">
                        <input type="search" name="q" class="form-control border-light" placeholder="Cari..." aria-label="Cari" required id="searchInput">
                        <input type="hidden" name="page" value="1">
                        <button class="btn btn-outline-light" type="submit" aria-label="Search">
                            <i data-feather="search"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </nav>
</header>
