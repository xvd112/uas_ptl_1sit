@extends('landing.layout.index')

@section('content')
<br>
<main id="main">
<body>

   <!-- Header -->
   <header class="ex-header">
    <div class="container">
        <div class="row">
            <div class="col-xl-10 offset-xl-1">
              
                <h6 class="t"> Tentang Kami | Daftar Dokter </h6>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
  </div>
</header> <!-- end of ex-header -->
<!-- end of header -->


<div class="container">
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show alert-form" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if (session()->has('error'))
        <div class="alert alert-danger alert-dismissible fade show alert-form" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif  
            </div>
        </div>
        <div class="martab">
            <h1 class="q"><u>Daftar Dokter</u></h1>
        <div class="card-body">
            <table class="table table-hover table-bordered">
                <thead class="table1">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Bagian</th>
                        <th scope="col">Specialty</th>
                        <th scope="col">Photo</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @forelse ($data as $d)
                        <tr>
                           <center><td  valign="middle" id="no"> <center>{{ $no }}</td>
                            <td valign="middle">{{ $d->nama }}</td>
                            <td align="center" valign="middle">{{ $d->bagian }}</td>
                            <td valign="middle">{{ $d->specialty }}</td>
                            <td class="d-flex justify-content-center"><img src="{{ asset('asset/dokter/' . $d->photo) }}"
                                 width="70px" height="100px"   alt=""></td>
                          
                                </form>
                            </td>
                        </tr>
                        
                        @php
                            $no++;
                        @endphp
                    @empty
                        <p>Data tidak ditemukan !</p>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- /.row (main row) -->
</main><!-- End #main -->
@endsection