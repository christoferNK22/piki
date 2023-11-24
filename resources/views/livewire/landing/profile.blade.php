<main>
    <section class="news-detail-header-section text-center">
        <div class="section-overlay"></div>

        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12">
                    <h1 class="text-white">Profile</h1>
                </div>

            </div>
        </div>
    </section>
    <div class="container mt-3">
        <div class="row" style="margin-top: 10rem">
            <div class="col-12">
                <h1 class="text-center">Sejarah</h1>
                {!! $profile->sejarah !!}
            </div>

            <div class="col-12"style="margin-top: 10rem">
                <h1 class="text-center">Pondasi</h1>
                {!! $profile->foundation !!}
            </div>
        </div>
    </div>
</main>
