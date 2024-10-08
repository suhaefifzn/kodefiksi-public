<footer class="bg-secondary-subtle p-4 mt-5">
    <div class="container">
        <div class="d-flex justify-content-start justify-content-lg-center">
            <span class="fs-5 fw-bold">Kode Fiksi</span>
        </div>
        <div class="navbar justify-content-start navbar-expand-lg justify-content-lg-center border-bottom border-secondary">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="{{ route('about') }}" class="nav-link" title="About Us">
                        About
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('contact') }}" class="nav-link" title="Contact Us">
                        Contact
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('disclaimer') }}" class="nav-link" title="Disclaimer">
                        Disclaimer
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('privacy.policy') }}" class="nav-link" title="Privacy Policy">
                        Privacy Policy
                    </a>
                </li>
            </ul>
        </div>
        <div class="kodefiksi-credit d-flex justify-content-center text-center mt-3">
            <span class="small">
                Copyright &copy; {{ date('Y') == 2024 ? date('Y') : '2024 - ' . date('Y') }} &nbsp;<b>Kode Fiksi</b> All Right Reserved
            </span>
        </div>
    </div>
</footer>
