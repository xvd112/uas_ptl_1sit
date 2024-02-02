<!-- ======= Recent Blog Posts Section ======= -->
<section id="recent-posts" class="recent-posts">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>Berita Terbaru</h2>
        </div>

        <div class="row gy-4">

            @forelse ($berita as $b)
                <div class="col-xl-4 col-md-6">
                    <a href="{{ url('/berita/' . $b->id) }}">
                        <article>
                            <div class="post-img">
                                <img src="{{ asset('asset/img/berita/' . $b->photo) }}" alt="" class="img-fluid">
                            </div>

                            <p class="post-category">{{ $b->date }}</p>

                            <h2 class="title">
                                {{ $b->title }}
                            </h2>

                            <div class="d-flex align-items-center desc">
                                <div class="post-meta">
                                    {{ substr(Str::of($b->isi)->toHtmlString(), 0, 260) }}
                                </div>
                            </div>
                        </article>
                    </a>
                </div>
            @empty
                <p>Belum ada berita !!!</p>
            @endforelse

        </div><!-- End recent posts list -->

    </div>
</section><!-- End Recent Blog Posts Section -->
