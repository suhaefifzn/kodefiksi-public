<footer class="mt-5">
    <div class="bg-custom-2 px-0">
        <div class="d-flex justify-content-start justify-content-lg-center px-3 pt-4 px-md-0">
            <span class="fs-5 fw-bold credit-text">Kode Fiksi</span>
        </div>
        <div class="navbar justify-content-start navbar-expand-lg justify-content-lg-center px-3 px-md-0">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="{{ route('about') }}" class="nav-link" title="About">
                        About
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('contact') }}" class="nav-link" title="Contact">
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
        <div class="kodefiksi-credit bg-custom-1 d-flex justify-content-center text-center py-3">
            <span class="small credit-text">
                Copyright &copy; {{ date('Y') == 2024 ? date('Y') : '2024 - ' . date('Y') }} &nbsp;<b>Kode Fiksi</b> All Right Reserved
            </span>
        </div>
    </div>
</footer>
