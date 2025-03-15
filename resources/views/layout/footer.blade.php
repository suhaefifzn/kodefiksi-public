<footer class="mt-5" itemscope itemtype="https://schema.org/WPFooter">
    <div class="bg-custom-2 px-0">
        <div class="navbar justify-content-start navbar-expand-lg justify-content-lg-center px-3 px-lg-0" style="min-height: 100px">
            <ul class="navbar-nav" itemscope itemtype="https://schema.org/SiteNavigationElement">
                <li class="nav-item">
                    <a href="{!! route('about') !!}" class="nav-link" title="About" itemprop="url">
                        <span itemprop="name">About</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{!! route('contact') !!}" class="nav-link" title="Contact" itemprop="url">
                        <span itemprop="name">Contact</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{!! route('disclaimer') !!}" class="nav-link" title="Disclaimer" itemprop="url">
                        <span itemprop="name">Disclaimer</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{!! route('privacy.policy') !!}" class="nav-link" title="Privacy Policy" itemprop="url">
                        <span itemprop="name">Privacy Policy</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="kodefiksi-credit bg-custom-1 d-flex justify-content-center text-center py-3">
            <span class="small credit-text" itemprop="copyrightHolder" itemscope itemtype="https://schema.org/Organization">
                <b>&copy; {{ date('Y') == 2024 ? date('Y') : '2024 - ' . date('Y') }}
                <span itemprop="name">Kode Fiksi</span></b>. All Rights Reserved.
            </span>
        </div>
    </div>
</footer>
