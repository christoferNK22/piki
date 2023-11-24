<main>
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.9/index.global.min.js'></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                events: @json($events),
                eventClick: function(info) {
                    alert('Event: ' + info.event.title + '\nDescription: ' + info.event.extendedProps
                        .description);
                }

            });
            calendar.render();
        });
    </script>

    <style>
        .management-img {
            max-height: 16rem;
        }
    </style>
    <section class="hero-section hero-section-full-height">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-12 col-12 p-0">
                    <div id="hero-slide" class="carousel carousel-fade slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach ($news as $new)
                                <div class="carousel-item active">
                                    <img src="{{ asset("storage/{$new->image_news}") }}" class="carousel-image img-fluid"
                                        alt="...">

                                    <div class="carousel-caption d-flex flex-column justify-content-end">
                                        <h1>{{ $new->title }}</h1>

                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#hero-slide"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>

                        <button class="carousel-control-next" type="button" data-bs-target="#hero-slide"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="section-padding" id="visimisi">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12 text-center mx-auto">
                    <h2 class="mb-5">Visi Misi</h2>
                </div>

                <div style="display:flex; justify-content:center; gap: 40px">
                    @foreach ($visiMisi as $visi)
                        <div class="col-lg-2 col-md-6 col-12 mb-4 mb-lg-0">
                            <div class="featured-block d-flex justify-content-center align-items-center">
                                <a href="#" class="d-block">
                                    <img src="{{ asset('public/img/icons/hands.png') }}"
                                        class="featured-block-image img-fluid" alt="">

                                    <p class="featured-block-text">{!! $visi !!}</p>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>


            </div>
        </div>
    </section>

    <section class="section-padding" id="pengurus">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12 text-center mb-4">
                    <h2>Pengurus</h2>
                </div>

                @foreach ($managements as $management)
                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="custom-block-wrap">
                            <img src="{{ asset("storage/{$management->image}") }}"
                                class="management-img custom-block-image img-fluid" alt="">

                            <div class="custom-block">
                                <div class="custom-block-body">
                                    <h5 class="mb-3">{{ $management->name }}</h5>

                                    <p>Dewan: {{ $titleCase($management->dewan) }}</p>
                                    <p>Jabatan: {{ $titleCase($management->position) }}</p>

                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>

    <section class="news-section section-padding" id="agenda">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12 mb-5">
                    <h2>Agenda </h2>
                </div>

                <div class="col-lg-12 col-12">
                    <div id='calendar'></div>
                </div>


            </div>
        </div>
    </section>

</main>
