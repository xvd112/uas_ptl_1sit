<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/dashboard" class="brand-link">
        <img src="{{ asset('asset/img/logo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Rumah Sakit Kasih Ibu</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('asset/img/user.png') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" style="pointer-events: none" class="d-block">{{ auth()->user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
       with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="/dashboard" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Beranda
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/dashboard/dokter" class="nav-link {{ Request::is('dashboard/dokter*') ? 'active' : '' }}">
                        <i class="nav-icon fa-solid fa-user-doctor"></i>
                        <p>
                            Dokter
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/dashboard/fasilitas"
                        class="nav-link {{ Request::is('dashboard/fasilitas*') ? 'active' : '' }}">
                        <i class="nav-icon fa-solid fa-hospital"></i>
                        <p>
                            Fasilitas
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/dashboard/berita" class="nav-link {{ Request::is('dashboard/berita*') ? 'active' : '' }}">
                        <i class="nav-icon fa-solid fa-newspaper"></i>
                        <p>
                            Berita
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa-solid fa-circle-info"></i>
                        <p>
                            Info Umum RS
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/dashboard/sejarah"
                                class="nav-link {{ Request::is('dashboard/sejarah*') ? 'active' : '' }}">
                                <i class="nav-icon fa-solid fa-timeline"></i>
                                <p>Sejarah</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/dashboard/visi"
                                class="nav-link {{ Request::is('dashboard/visi*') ? 'active' : '' }}">
                                <i class="nav-icon fa-solid fa-bullseye"></i>
                                <p>Visi & Misi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/dashboard/kontak"
                                class="nav-link {{ Request::is('dashboard/kontak*') ? 'active' : '' }}">
                                <i class="nav-icon fa-solid fa-address-book"></i>
                                <p>Kontak</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa-regular fa-hospital-user"></i>
                        <p>
                            Pasien
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/dashboard/daftar"
                                class="nav-link {{ Request::is('dashboard/daftar*') ? 'active' : '' }}">
                                <i class="nav-icon fa-solid fa-address-card"></i>
                                <p> Pendaftaran </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/dashboard/syarat"
                                class="nav-link {{ Request::is('dashboard/syarat*') ? 'active' : '' }}">
                                <i class="nav-icon fa-regular fa-shield-exclamation"></i>
                                <p> Persyaratan </p>
                            </a>
                        </li>
                    </ul>
                </li>
                @can('admin')
                    <li class="nav-item">
                        <a href="/dashboard/user" class="nav-link {{ Request::is('dashboard/user*') ? 'active' : '' }}">
                            <i class="nav-icon fa-solid fa-users"></i>
                            <p>
                                Users
                            </p>
                        </a>
                    </li>
                @endcan
                <li class="nav-item">
                    <a href="/dashboard/galeri"
                        class="nav-link {{ Request::is('dashboard/galeri*') ? 'active' : '' }}">
                        <i class="nav-icon fa-solid fa-images"></i>
                        <p>
                            Galeri
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
