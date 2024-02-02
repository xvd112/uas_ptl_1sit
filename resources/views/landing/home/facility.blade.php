<!-- ======= Our Services Section ======= -->
<section id="services" class="services sections-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>Fasilitas</h2>
        </div>

        <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">
            @php $i=0; @endphp
            @foreach ($fasi as $f)
                <div class="col-lg-4 col-md-6">
                    <div class="service-item  position-relative" style="text-align: justify">
                        <div class="icon">
                            {{ Str::of($iconfasi[$i])->toHtmlString() }}
                        </div>
                        <h3>{{ $f->nm_fasilitas }}</h3>
                        <p>
                            {{-- {{ substr($f->deskripsi, 0, 260) }} --}}
                            {{ substr(Str::of($f->deskripsi)->toHtmlString(), 0, 260) }}
                        </p>
                        <a href="{{ '/' . Str::lcfirst($f->nm_fasilitas) }}" class="readmore stretched-link">Read more
                            <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div><!-- End Service Item -->
                @php count($iconfasi) >= $i ? $i++ : ($i = 0) @endphp
            @endforeach
        </div>
    </div>
</section><!-- End Our Services Section -->
