@extends('landing.layout.index')

@section('content')

<main id="main">

    <!-- ======= Bedah Us Section ======= -->
    <section id="bedah" class="bedah" data-aos="fade-up">
    <div class="container">
        <h1> Fasilitas Bedah</h1>
        <div class="bedah-content">
            @foreach ($data as $d)
            <div style="clear:both; margin-bottom: 20px;">
                <img src="{{ asset('asset_landing/assets/img/bedah/B1.jpg') }}" style="float:left;width:500px;height:300px; margin-right: 20px;">
                <div>
                    <p class="p4">{{ Str::of($d->deskripsi)->toHtmlString() }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
    <!-- ======= Daftar Dokter Section ======= -->
    <section id="daftardokter" class="daftardokter" data-aos="fade-up" style="margin-bottom: 20px;">
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
                        @forelse ($daftardokter as $d)
                            <tr>
                                <center>
                                    <td valign="middle" id="no">
                                        <center>{{ $no }}
                                    </td>
                                    <td align="center" valign="middle">{{ $d->nama }}</td>
                                    <td align="center" valign="middle">{{ $d->bagian }}</td>
                                    <td align="center" valign="middle">{{ $d->specialty }}</td>
                                    <td class="d-flex justify-content-center"><img
                                            src="{{ asset('asset/dokter/' . $d->photo) }}" width="70px" height="100px"
                                            alt=""></td>

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
    </section>
</main><!-- End #main -->
@endsection
