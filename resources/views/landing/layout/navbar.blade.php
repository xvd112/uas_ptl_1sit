<!-- ======= Header ======= -->
<section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
            <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:rs_kasih_ibu.com">rs_kasih_ibu.com</a></i>
            <i class="bi bi-phone d-flex align-items-center ms-4"><span><a href="tel:+621 12345">+621 12345</a></span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
            <a href="https://twitter.com/" target="_blank" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="https://www.facebook.com/" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="https://www.linkedin.com/" target="_blank" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
        </div>
    </div>
</section><!-- End Top Bar -->

<header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <a href="/" class="logo d-flex align-items-center">
            <h1><span><i class="fa-solid fa-stethoscope"></i></span> Rumah Sakit Kasih Ibu</h1>
        </a>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="{{ $active === '' ? 'active' : '' }}" href="/">Home</a></li>
                <li class="dropdown {{ $active === 'tentang' ? 'active' : '' }}">
                    <a href="#"><span>Tentang
                            Kami</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="/sejarah">Sejarah</a></li>
                        <li><a href="/visimisi">Visi & Misi</a></li>
                        <li><a href="/dokter">Daftar Dokter</a></li>
                    </ul>
                </li>
                <li class="dropdown {{ $active === 'fasilitas' ? 'active' : '' }}">
                    <a href="#"><span>Fasilitas</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="/bedah">Bedah</a></li>
                        <li><a href="/endoskopi">Endoskopi</a></li>
                        <li><a href="/radiology">Radiology</a></li>
                    </ul>
                </li>
                <li><a class="{{ $active === 'berita' ? 'active' : '' }}" href="/berita">Berita</a></li>
                <li><a class="{{ $active === 'daftar' ? 'active' : '' }}" href="/daftar">Pendaftaran</a></li>
                <li><a class="{{ $active === 'kontak' ? 'active' : '' }}" href="/kontak">Kontak</a></li>
                @auth
                    <li class="dropdown">
                        <a href="#"><span>Welcome back,
                                @php echo(explode(" ", auth()->user()->name)[0]) @endphp</span>
                            <i class="bi bi-chevron-down dropdown-indicator"> </i>
                        </a>
                        <ul>
                            <li><a href="/dashboard">My Dashboard</a></li>
                            <li>
                                <form method="POST" action="{{ url('/logout') }}" id="form-logout">
                                    @csrf
                                    <input type="hidden" value="{{ Route::current()->getName() }}" name="url">
                                    <button class="btn-logout" type="submit">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="log ms-auto">
                        <div class="row-md-3 d-flex">
                            <div class="col">
                                <a href="/login" target="_blank" class="btn-login" role="button">Login</a>
                            </div>
                        </div>
                    </li>
                @endauth
            </ul>
        </nav><!-- .navbar -->

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
</header><!-- End Header -->
<!-- End Header -->
