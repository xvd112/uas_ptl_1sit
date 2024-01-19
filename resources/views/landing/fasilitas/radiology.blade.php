@extends('landing.layout.index')

@section('content')

<main id="main">

    <!-- ======= Radiologi Section ======= -->
    <section id="radiology" class="radiology" data-aos="fade-up">
    <div class="container">
        <h1>Radiology</h1>
        <div class="radiology-content">
            <img src="{{ asset('asset_landing/assets/img/radiology/r1.jpg') }}" style="float:left;width:500px;height:300px;">  
            <div class="deskripsi">
            <div style="margin-left: 520px;">
                <p><b><h3> Radiologi </b></h3>adalah cabang ilmu kedokteran yang memanfaatkan teknologi radiasi untuk diagnosis, pemantauan, dan penanganan berbagai kondisi medis. Radiologi memainkan peran penting dalam dunia medis dengan memberikan gambaran visual internal dari struktur tubuh manusia, yang membantu dokter dalam mengevaluasi dan memahami kondisi kesehatan pasien.</p>    
                <p>Radiologi membantu dalam mendiagnosis berbagai kondisi, termasuk patah tulang, penyakit kanker, gangguan pembuluh darah, penyakit jantung, dan banyak lagi. Dokter radiologi ahli dalam menafsirkan gambar radiologi dan bekerja sama dengan dokter lain untuk merencanakan pengobatan yang sesuai.</p>
            </div>
            <br>    
                <p>Penting untuk dicatat bahwa penggunaan teknologi radiologi harus selalu mempertimbangkan manfaat diagnostik yang dihasilkan dan risiko paparan radiasi. Tim medis berusaha untuk menggunakan teknologi ini dengan bijak dan aman sesuai dengan pedoman medis yang berlaku.</p>
            </br>
            </div>
        </div>
        <h2>Fasilitas Radiology</h2>
        <p>1. CT SCAN merupakan proses pemeriksaan dengan menggunakan sinar-X sebagai alat penunjang diagnostic IDID</p>
        <p>2. Radiology convensional merupakan Pemeriksaan secara radiologi organ tubuh manusia secara mendetil.</p>
        <p>3. Pemeriksaan Radiografi thorax atau sering disebut chest x-ray (CXR) bertujuan menggambarkan secara radiografi.</p>
        <p>4. Panoramic Cephalometri merupakan alat Panoramic digunakan untuk melihat gigi secara keseluruhan.</p>
        <p>5. Ultrasonografi (USG) adalah prosedur yang digunakan untuk memeriksa organ-organ dalam perut.</p>
        <div class="radiology-container">
        </div>
    </div>
</section>

    <!-- ======= Dokter Radiologi Section ======= -->
    <style>
        .dokter-container {
            display: flex;
            justify-content: space-around; /* Anda bisa mengganti nilai ini sesuai kebutuhan */
            flex-wrap: wrap;
        }

        .dokter {
            text-align: center;
            margin: 10px;
        }

        .dokter img {
            max-width: 100%;
            height: auto;
        }
    </style>
    <section id="dokter-radiologi" class="dokter" data-aos="fade-up">
        <div class="container">
            <h2>Tim Dokter Radiologi</h2>
            <div class="dokter-container">
                <!-- Dokter Radiologi 1 -->
                <div class="dokter">
                <img src="{{ asset('asset_landing/assets/img/radiology/js.jpg') }}" style="width:200px;height:200px;">  
                    <h3>Dr. James Smith</h3>
                    <p>Dokter Radiologi Senior</p>
                </div>

                <!-- Dokter Radiologi 2 -->
                <div class="dokter">
                <img src="{{ asset('asset_landing/assets/img/radiology/ed.jpg') }}" style="width:200px;height:200px;">  
                    <h3>Dr. Emily Davis</h3>
                    <p>Dokter Radiologi Spesialis</p>
                </div>

                <!-- Dokter Radiologi 3 -->
                <div class="dokter">
                <img src="{{ asset('asset_landing/assets/img/radiology/mt.jpg') }}" style="width:200px;height:200px;">  
                    <h3>Dr. Michael Turner</h3>
                    <p>Dokter Radiologi Junior</p>
                </div>
            </div>
        </div>
    </section>
</main>@endsection
