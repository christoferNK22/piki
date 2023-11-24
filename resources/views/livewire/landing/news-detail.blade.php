<main>

    <section class="news-detail-header-section text-center">
        <div class="section-overlay"></div>

        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12">
                    <h1 class="text-white">News detail</h1>
                </div>

            </div>
        </div>
    </section>

    <section class="news-section section-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-7 col-12">
                    <div class="news-block">
                        <div class="news-block-top">
                            <img src="{{ asset("storage/{$news->image_news}") }}"class="news-image img-fluid"
                                alt="" />

                            r
                        </div>

                        <div class="news-block-info">
                            <div class="d-flex mt-2">
                                <div class="news-block-date">
                                    <p>
                                        <i class="bi-calendar4 custom-icon me-1"></i>
                                        {{ $news->created_at_format }}
                                    </p>
                                </div>

                                <div class="news-block-author mx-5">
                                    <p>
                                        <i class="bi-person custom-icon me-1"></i>
                                        by admin
                                    </p>
                                </div>

                                <div class="news-block-comment">
                                    <p>
                                    </p>
                                </div>
                            </div>

                            <div class="news-block-title mb-2">
                                <h4>{{ $news->title }}</h4>
                            </div>

                            <div class="news-block-body">
                                {!! $news->content !!}</div>



                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-12 mx-auto mt-4 mt-lg-0">
                    <form class="custom-form search-form" action="#" method="post" role="form">
                        <input class="form-control" type="search" placeholder="search" aria-label="search">

                        <button type="submit" class="form-control">
                            <i class="bi-search"></i>
                        </button>
                    </form>

                    <h5 class="mt-5 mb-3">recent news</h5>

                    @foreach ($recentNews as $recent)
                        <div class="news-block news-block-two-col d-flex mt-4">
                            <div class="news-block-two-col-image-wrap">
                                <a href="news-detail.html">
                                    <img src="{{ asset("storage/{$recent->image_news}") }}" class="news-image img-fluid"
                                        alt="">
                                </a>
                            </div>

                            <div class="news-block-two-col-info">
                                <div class="news-block-title mb-2">
                                    <h6><a href="{{ route('newsDetail', ['newsId' => $recent->id]) }}"
                                            class="news-block-title-link">{{ $recent->title }}</a>
                                    </h6>
                                </div>

                                <div class="news-block-date">
                                    <p>
                                        <i class="bi-calendar4 custom-icon me-1"></i>
                                        {{ $recent->created_at_format }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
        </div>
    </section>

</main>
