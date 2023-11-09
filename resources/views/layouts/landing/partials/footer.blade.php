<footer class="site-footer">
    <div class="container">
        <div class="row">

            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <h5 class="site-footer-title mb-3">Quick Links</h5>

                <ul class="footer-menu">
                    <li class="footer-menu-item"><a href="#" class="footer-menu-link">Berita Terbaru</a></li>

                    <li class="footer-menu-item"><a href="#" class="footer-menu-link">Kontak</a></li>

                    <li class="footer-menu-item"><a href="#" class="footer-menu-link">Gabung Member</a></li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mx-auto">
                <h5 class="site-footer-title mb-3">Informasi Kontak</h5>

                <p class="text-white d-flex mb-2">
                    <i class="bi-telephone me-2"></i>

                    <a href="tel: {{ $contactInformation->phone_number }}" class="site-footer-link">
                        {{ $contactInformation->phone_number }}
                    </a>
                </p>

                <p class="text-white d-flex">
                    <i class="bi-envelope me-2"></i>

                    <a href="mailto:{{ $contactInformation->email }}" class="site-footer-link">
                        {{ $contactInformation->email }}
                    </a>
                </p>

                <p class="text-white d-flex mt-3">
                    <i class="bi-geo-alt me-2"></i>
                    {{ $contactInformation->address }}
                </p>

                <a href="#" class="custom-btn btn mt-3">Maps</a>
            </div>
        </div>
    </div>

    <div class="site-footer-bottom">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-7 col-12">
                    <p class="copyright-text mb-0">Copyright © 2023 <a href="#">Kelompok PIKI</a></p>
                </div>

                <div class="col-lg-6 col-md-5 col-12 d-flex justify-content-center align-items-center mx-auto">
                    <ul class="social-icon">
                        @if ($contactInformation->twitter_url != '')
                            <li class="social-icon-item">
                                <a href="{{ $contactInformation->twitter_url }}"
                                    class="social-icon-link bi-twitter"></a>
                            </li>
                        @endif

                        @if ($contactInformation->facebook_url != '')
                            <li class="social-icon-item">
                                <a href="{{ $contactInformation->facebook_url }}"
                                    class="social-icon-link bi-facebook"></a>
                            </li>
                        @endif

                        @if ($contactInformation->instagram_url != '')
                            <li class="social-icon-item">
                                <a href="{{ $contactInformation->instagram_url }}"
                                    class="social-icon-link bi-instagram"></a>
                            </li>
                        @endif

                        @if ($contactInformation->youtube_url != '')
                            <li class="social-icon-item">
                                <a href="{{ $contactInformation->youtube_url }}"
                                    class="social-icon-link bi-youtube"></a>
                            </li>
                        @endif
                    </ul>
                </div>

            </div>
        </div>
    </div>
</footer>
