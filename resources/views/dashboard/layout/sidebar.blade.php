<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/dashboard" class="brand-link">
        <img src="{{ asset('asset/logo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Rumah Sakit Kasih Ibu</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('asset/user.png') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" style="pointer-events: none" class="d-block">User</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
       with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="/dashboard" class="nav-link active">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Beranda
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/dashboard/dokter" class="nav-link">
                        <i class="nav-icon fa-solid fa-user-doctor"></i>
                        <p>
                            Dokter
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/dashboard/fasilitas" class="nav-link">
                        <i class="nav-icon fa-solid fa-hospital"></i>
                        <p>
                            Fasilitas
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/dashboard/berita" class="nav-link">
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
                            <a href="/dashboard/sejarah" class="nav-link">
                                <i class="nav-icon fa-solid fa-timeline"></i>
                                <p>Sejarah</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/dashboard/visi" class="nav-link">
                                <i class="nav-icon fa-solid fa-bullseye"></i>
                                <p>Visi & Misi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/dashboard/kontak" class="nav-link">
                                <i class="nav-icon fa-solid fa-address-book"></i>
                                <p>Kontak</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="/dashboard/user" class="nav-link">
                        <i class="nav-icon fa-solid fa-address-card"></i>
                        <p>
                            Pendaftaran
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/dashboard/user" class="nav-link">
                        <i class="nav-icon fa-solid fa-users"></i>
                        <p>
                            Users
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
