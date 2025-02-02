<footer class="mt-5" itemscope itemtype="https://schema.org/WPFooter">
    <div class="bg-custom-2 px-0">
        <div class="d-flex justify-content-start justify-content-lg-center px-3 pt-4 px-lg-0">
            <span class="fs-5 fw-bold credit-text" itemprop="name">Kode Fiksi</span>
        </div>

        <nav class="navbar justify-content-start navbar-expand-lg justify-content-lg-center px-3 px-lg-0" itemscope itemtype="https://schema.org/SiteNavigationElement" aria-label="Footer navigation">
            <ul class="navbar-nav">
                <li class="nav-item" itemprop="about" itemscope itemtype="https://schema.org/Thing">
                    <a href="{!! route('about') !!}" class="nav-link" title="About" itemprop="url">
                        <span itemprop="name">About</span>
                    </a>
                </li>
                <li class="nav-item" itemprop="about" itemscope itemtype="https://schema.org/Thing">
                    <a href="{!! route('contact') !!}" class="nav-link" title="Contact" itemprop="url">
                        <span itemprop="name">Contact</span>
                    </a>
                </li>
                <li class="nav-item" itemprop="about" itemscope itemtype="https://schema.org/Thing">
                    <a href="{!! route('disclaimer') !!}" class="nav-link" title="Disclaimer" itemprop="url">
                        <span itemprop="name">Disclaimer</span>
                    </a>
                </li>
                <li class="nav-item" itemprop="about" itemscope itemtype="https://schema.org/Thing">
                    <a href="{!! route('privacy.policy') !!}" class="nav-link" title="Privacy Policy" itemprop="url">
                        <span itemprop="name">Privacy Policy</span>
                    </a>
                </li>
            </ul>
        </nav>

        <div class="kodefiksi-credit bg-custom-1 d-flex justify-content-center text-center py-3">
            <span class="small credit-text" itemprop="copyrightHolder">
                <b>&copy; {{ date('Y') == 2024 ? date('Y') : '2024 - ' . date('Y') }} Kode Fiksi</b>. All Rights Reserved.
            </span>
        </div>
    </div>
</footer>
