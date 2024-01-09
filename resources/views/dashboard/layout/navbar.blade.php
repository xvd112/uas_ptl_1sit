<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="/dashboard" class="nav-link">Beranda</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <div class="user-drop justify-content-center">
                    <div class="image">
                        <img src="{{ asset('asset/user.png') }}" class="img-circle" alt="User Image">
                    </div>
                    <div class="info">
                        User
                    </div>
                    <i class="nav-icon fa-solid fa-caret-down"></i>
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                {{-- <a href="/dashboard/profile" class="dropdown-item"><i class="fa-solid fa-gear"></i> Profile</a>
                <div class="dropdown-divider"></div> --}}
                <a href="/logout" class="dropdown-item dropdown-footer">Sign Out</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
    </ul>
</nav>
<!-- /.navbar -->
