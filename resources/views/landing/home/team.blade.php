<!-- ======= Our Team Section ======= -->
<section id="team" class="team">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>Our Team</h2>
            <p>Kelompok 2 - 1SIT - Universitas Metamedia</p>
        </div>

        <div class="row gy-4 justify-content-center">
            @foreach ($team as $d)
                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="member">
                        <img src="{{ asset('asset/img/' . $d->photo) }}" class="img-fluid poto" alt="">
                        <h4>{{ $d->title }}</h4>
                        <span>{{ $d->desc }}</span>
                        <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div><!-- End Team Member -->
            @endforeach
        </div>

    </div>
</section><!-- End Our Team Section -->
