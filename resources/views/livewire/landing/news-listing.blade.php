<main>

    <section class="news-detail-header-section text-center">
        <div class="section-overlay"></div>

        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12">
                    <h1 class="text-white">News Listing</h1>
                </div>

            </div>
        </div>
    </section>

    <section class="news-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-12">
                    @foreach ($news as $new)
                        <div class="news-block mt-3">
                            <div class="news-block-top">
                                <a href="news-detail.html">
                                    <img src="{{ asset("storage/{$new->image_news}") }}" class="news-image img-fluid"
                                        alt="">
                                </a>

                            </div>

                            <div class="news-block-info">
                                <div class="d-flex mt-2">
                                    <div class="news-block-date">
                                        <p>
                                            <i class="bi-calendar4 custom-icon me-1"></i>
                                            {{ $new->created_at_format }}
                                        </p>
                                    </div>

                                    <div class="news-block-author mx-5">
                                        <p>
                                            <i class="bi-person custom-icon me-1"></i>
                                            By Admin
                                        </p>
                                    </div>

                                    <div class="news-block-comment">
                                        <p>
                                        </p>
                                    </div>
                                </div>

                                <div class="news-block-title mb-2">
                                    <h4><a href="news-detail.html" class="news-block-title-link">{{ $new->title }}</a>
                                    </h4>
                                </div>

                                <div class="news-block-body">
                                    {!! $new->content !!}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="col-lg-4 col-12 mx-auto mt-4 mt-lg-0">
                    <form class="custom-form search-form" action="#" method="post" role="form">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">

                        <button type="submit" class="form-control">
                            <i class="bi-search"></i>
                        </button>
                    </form>

                    <h5 class="mt-5 mb-3">Recent news</h5>

                    <div class="news-block news-block-two-col d-flex mt-4">
                        <div class="news-block-two-col-image-wrap">
                            <a href="news-detail.html">
                                <img src="{{ asset("storage/{$news[0]->image_news}") }}" class="news-image img-fluid"
                                    alt="">
                            </a>
                        </div>

                        <div class="news-block-two-col-info">
                            <div class="news-block-title mb-2">
                                <h6><a href="news-detail.html" class="news-block-title-link">{{ $news[0]->title }}</a>
                                </h6>
                            </div>

                            <div class="news-block-date">
                                <p>
                                    <i class="bi-calendar4 custom-icon me-1"></i>
                                    {{ $news[0]->created_at_format }}
                                </p>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </section>
</main>
