<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">
                    @if ($active == '')
                        {{ 'Beranda' }}
                    @else
                        {{ Str::ucfirst($active) }}
                    @endif
                </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/dashboard">Beranda</a></li>
                    @if ($active != '')
                        <li class="breadcrumb-item"><a
                                href="/dashboard/{{ $active }}">{{ Str::ucfirst($active) }}</a></li>
                    @endif
                    @if (Str::is('dashboard/' . $active . '/*', Request::path()))
                        <li class="breadcrumb-item">{{ $subtitle }}</li>
                    @endif
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
