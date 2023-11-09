<nav class="navbar navbar-expand-lg bg-light shadow-lg">
    <div class="container">
        <a class="navbar-brand" href="index.html">
            <img src="{{ asset('img/piki-logo-dark-e.png') }}" class="logo img-fluid" alt="PIKI">
            <span>
                Persatuan<br>
                Intelegensia<br>
                Kristen<br>
                Indonesia<br>
            </span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#top">Beranda</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#section_2">Profil</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#section_3">Berita</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#section_4">Agenda Kegiatan</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#section_5">Kontak</a>
                </li>

                <li class="nav-item ms-3">
                    <a class="nav-link custom-btn custom-border-btn btn"
                        href="{{ route('member.dashboard') }}">Member</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
