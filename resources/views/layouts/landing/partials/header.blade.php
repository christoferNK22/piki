<header class="site-header">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 col-12 d-flex flex-wrap">
                <p class="d-flex me-4 mb-0">
                    <i class="bi-geo-alt me-2"></i>
                    {{ $contactInformation->address }}
                </p>

                <p class="d-flex mb-0">
                    <i class="bi-envelope me-2"></i>

                    <a href="mailto:{{ $contactInformation->email }}">
                        {{ $contactInformation->email }}
                    </a>
                </p>
            </div>

            <div class="col-lg-3 col-12 ms-auto d-lg-block d-none">
                <ul class="social-icon">
                    @if ($contactInformation->twitter_url != '')
                        <li class="social-icon-item">
                            <a href="{{ $contactInformation->twitter_url }}" class="social-icon-link bi-twitter"></a>
                        </li>
                    @endif

                    @if ($contactInformation->facebook_url != '')
                        <li class="social-icon-item">
                            <a href="{{ $contactInformation->facebook_url }}" class="social-icon-link bi-facebook"></a>
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
                            <a href="{{ $contactInformation->youtube_url }}" class="social-icon-link bi-youtube"></a>
                        </li>
                    @endif
                </ul>
            </div>

        </div>
    </div>
</header>
