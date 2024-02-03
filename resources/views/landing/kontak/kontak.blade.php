@extends('landing.layout.index')

@section('content')
    <main id="main" class="main-content">
        <div class="section-header">
            <h2>Kontak</h2>
            <h5>Rumah Sakit Kasih Ibu</h5>
        </div>
        <section id="bedah" class="bedah" data-aos="fade-up">
            <h6>
                <div class="container">
                    @forelse ($data as $d)
                        <div>
                            <label class="col-sm-3">Email</label> : {{ $d->email }}
                        </div>
                        <div>
                            <label class="col-sm-3">Alamat</label> : {{ $d->alamat }}
                        </div>
                        <div>
                            <label class="col-sm-3">No Telp</label> : {{ $d->telepon }}
                        </div>
                        <div>
                            <label class="col-sm-3">Twitter</label> : {{ $d->twitter }}
                        </div>
                        <div>
                            <label class="col-sm-3">Facebook</label> : {{ $d->fb }}
                        </div>
                        <div>
                            <label class="col-sm-3">Instagram</label> : {{ $d->ig }}
                        </div>
                        <div>
                            <label class="col-sm-3">Linkin</label> : {{ $d->linkin }}
                        </div>
                    @empty
                        <p>Data tidak ditemukan !</p>
                    @endforelse

                </div>
            </h6>
        </section>
    </main>
@endsection
