@extends('landing.layout.index')
@section('content')
    <br>
    <main id="main">
        <!-- Header -->
        <header class="ex-header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-10 offset-xl-1">

                        <h6 class="t"> Tentang Kami | Visi Misi </h6>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </header> <!-- end of ex-header -->
        <!-- end of header -->
        <br>
        <div id="visimisi">
            <div class="lpp">
                <p class="p3"> Visi</p>
                @foreach ($data as $d)
                    <p class="p4">"{{ $d->visi }}."</p>
                    <p class="p3"> Misi</p>
                    <p class="p4">"{{ $d->misi }}."</p>
                @endforeach
            </div>
        </div>
        <br>
        </div>
    </main><!-- End #main -->
@endsection
