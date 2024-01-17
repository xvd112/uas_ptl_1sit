<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">
                    @if (Request::is('dashboard'))
                        {{ 'Beranda' }}
                    @else
                        {{ Str::ucfirst($page) }}
                    @endif
                </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/dashboard">Beranda</a></li>
                    @if ($page != '')
                        <li class="breadcrumb-item"><a
                                href="/dashboard/{{ $url }}">{{ Str::ucfirst($page) }}</a>
                        </li>
                    @endif
                    @if (Str::is('dashboard/*/*', Request::path()))
                        <li class="breadcrumb-item">{{ $subtitle }}</li>
                    @endif
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
