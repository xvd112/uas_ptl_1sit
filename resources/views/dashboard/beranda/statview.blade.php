<!-- Small boxes (Stat box) -->
<div class="row">
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{ $daftar }}</h3>
                <p>Pendaftaran</p>
            </div>
            <div class="icon">
                <i class="ion fa-solid fa-hospital-user"></i>
            </div>
            <a href="{{ Request::url() . '/daftar' }}" class="small-box-footer">More info <i
                    class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
            <div class="inner">
                <h3>{{ $dokter }}</h3>
                <p>Dokter</p>
            </div>
            <div class="icon">
                <i class="ion fa-solid fa-user-doctor"></i>
            </div>
            <a href="{{ Request::url() . '/dokter' }}" class="small-box-footer">More info <i
                    class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
            <div class="inner">
                <h3>{{ $berita }}</h3>
                <p>Berita</p>
            </div>
            <div class="icon">
                <i class="ion fa-solid fa-newspaper"></i>
            </div>
            <a href="{{ Request::url() . '/berita' }}" class="small-box-footer">More info <i
                    class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    @can('admin')
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{ $user }}</h3>
                    <p>User</p>
                </div>
                <div class="icon">
                    <i class="ion fa-solid fa-users"></i>
                </div>
                <a href="{{ Request::url() . '/user' }}" class="small-box-footer">More info <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
    @endcan
</div>
<!-- /.row -->
