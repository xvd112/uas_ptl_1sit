<!-- ======= Header ======= -->
<section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
            <i class="bi bi-envelope d-flex align-items-center">
                <span>
                    <a class="alink"
                        href="{{ $kontak == null || $kontak->email == null || $kontak->email == '' ? '#' : 'mailto:' . $kontak->email }}"
                        @if ($kontak == null || $kontak->email == null || $kontak->email == '') style="pointer-events: none" @endif>
                        {{ $kontak == null || $kontak->email == null || $kontak->email == '' ? '-' : $kontak->email }}
                    </a>
                </span>
            </i>
            <i class="bi bi-phone d-flex align-items-center ms-4">
                <span>
                    <a class="alink"
                        href="{{ $kontak == null || $kontak->telepon == null || $kontak->telepon == '' ? '#' : 'tel:' . $kontak->telepon }}"
                        @if ($kontak == null || $kontak->telepon == null || $kontak->telepon == '') style="pointer-events: none" @endif>
                        {{ $kontak == null || $kontak->telepon == null || $kontak->telepon == '' ? '-' : $kontak->telepon }}
                    </a>
                </span>
            </i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
            <a href="{{ $kontak == null || $kontak->twitter == null || $kontak->twitter == '' ? '#' : $kontak->twitter }}"
                @if ($kontak == null || $kontak->twitter == null || $kontak->twitter == '') style="pointer-events: none" @endif target="_blank" class="twitter"><i
                    class="bi bi-twitter"></i></a>
            <a href="{{ $kontak == null || $kontak->fb == null || $kontak->fb == '' ? '#' : $kontak->fb }}"
                @if ($kontak == null || $kontak->fb == null || $kontak->fb == '') style="pointer-events: none" @endif target="_blank"
                class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="{{ $kontak == null || $kontak->ig == null || $kontak->ig == '' ? '#' : $kontak->ig }}"
                @if ($kontak == null || $kontak->ig == null || $kontak->ig == '') style="pointer-events: none" @endif target="_blank"
                class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="{{ $kontak == null || $kontak->linkin == null || $kontak->linkin == '' ? '#' : $kontak->linkin }}"
                @if ($kontak == null || $kontak->linkin == null || $kontak->linkin == '') style="pointer-events: none" @endif target="_blank"
                class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
    </div>
</section><!-- End Top Bar -->

<header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <a href="/" class="logo d-flex align-items-center">
            <h1>
                <span>
                    <img src="{{ asset('asset/img/galeri/' . $icon->photo) }}" class="img-icon" alt="User Image">
                </span>
                Rumah Sakit
                Kasih Ibu
            </h1>
        </a>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="{{ Request::is('/') ? 'active' : '' }}" href="/">Home</a></li>
                <li
                    class="dropdown {{ Request::is('sejarah*') || Request::is('visimisi*') || Request::is('dokter*') ? 'active' : '' }}">
                    <a href="#"><span>Tentang
                            Kami</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="/sejarah">Sejarah</a></li>
                        <li><a href="/visimisi">Visi & Misi</a></li>
                        <li><a href="/dokter">Daftar Dokter</a></li>
                    </ul>
                </li>
                <li
                    class="dropdown {{ Request::is('bedah*') || Request::is('endoskopi*') || Request::is('radiology*') ? 'active' : '' }}">
                    <a href="#"><span>Fasilitas</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="/bedah">Bedah</a></li>
                        <li><a href="/endoskopi">Endoskopi</a></li>
                        <li><a href="/radiology">Radiology</a></li>
                    </ul>
                </li>
                <li><a class="{{ Request::is('berita*') ? 'active' : '' }}" href="/berita">Berita</a></li>
                <li><a class="{{ Request::is('daftar*') ? 'active' : '' }}" href="/daftar">Pendaftaran</a></li>
                <li><a class="{{ Request::is('kontak*') ? 'active' : '' }}" href="/kontak">Kontak</a></li>
                @auth
                    <li class="dropdown">
                        <a href="#"><span>Welcome back,
                                {{ explode(' ', auth()->user()->name)[0] }}</span>
                            <i class="bi bi-chevron-down dropdown-indicator"> </i>
                        </a>
                        <ul>
                            <li><a href="/dashboard" target="_blank">My Dashboard</a></li>
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
