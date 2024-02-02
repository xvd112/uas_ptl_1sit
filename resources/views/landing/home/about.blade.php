<!-- ======= About Us Section ======= -->
<section id="about" class="about">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>Tentang Kami</h2>
        </div>

        <div class="row gy-4">
            <div class="col-lg-6">
                <h3>Sejarah</h3>
                <p style="text-align: justify">
                    {{-- {{ substr($sejarah->sejarah, 0, 260) }} --}}
                    {{ substr(Str::of($sejarah->sejarah)->toHtmlString(), 0, 260) }}
                    <a href="/sejarah" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
            </div>
            <div class="col-lg-6">
                <h3>Visi</h3>
                <p style="text-align: justify">
                    {{ substr(Str::of($visimisi->visi)->toHtmlString(), 0, 260) }}
                </p>
                <h3>Misi</h3>
                <p style="text-align: justify">
                    {{ substr(Str::of($visimisi->misi)->toHtmlString(), 0, 260) }}
                </p>
            </div>
        </div>

    </div>
</section><!-- End About Us Section -->
