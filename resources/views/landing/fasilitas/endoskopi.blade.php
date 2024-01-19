@extends('landing.layout.index')

@section('content')

<main id="main">

    <!-- ======= Endoskopi Section ======= -->
    <section id="endoskopi" class="endoskopi" data-aos="fade-up">
    <div class="container">
        <h1>Endoskopi</h1>
        <div class="endoskopi-content">
            <img src="{{ asset('asset_landing/assets/img/endoskopi/e1.jpg') }}" style="float:left;width:500px;height:300px;">  
            <div class="deskripsi">
            <div style="margin-left: 520px;">
                <p><b><h3>Endoskopi </b></h3>adalah suatu prosedur medis di mana seorang dokter menggunakan alat yang disebut endoskop untuk memeriksa dan memeriksa bagian dalam tubuh manusia. Endoskop adalah instrumen medis yang panjang dan fleksibel, dilengkapi dengan kamera atau serat optik kecil di ujungnya. Prosedur endoskopi memungkinkan dokter untuk melihat struktur dan organ dalam tubuh, seperti lambung, usus, esofagus, atau saluran napas, tanpa melakukan pembedahan besar.</p>        
                <p>Selama prosedur endoskopi, endoskop dimasukkan ke dalam tubuh melalui saluran alami, seperti mulut atau anus, atau melalui sayatan kecil.</p>
        </div>
        </br>
                <p>Dokter dapat mengamati gambar langsung dari kamera endoskop pada layar monitor dan melakukan evaluasi visual langsung terhadap keadaan organ atau jaringan yang diperiksa. Selain itu, endoskop juga memungkinkan dokter untuk mengambil sampel jaringan (biopsi) atau melakukan prosedur medis tertentu, seperti pengangkatan polip atau pengobatan kondisi tertentu.</p>
                <p>Endoskopi digunakan untuk mendiagnosis dan merawat berbagai kondisi medis, termasuk penyakit pencernaan, gangguan pernapasan, atau gangguan pada organ-organ tertentu. Prosedur ini sering digunakan karena minimally invasive, memungkinkan pemantauan dan intervensi yang akurat tanpa perlu melakukan pembedahan besar. Endoskopi dapat menjadi alat yang sangat berharga dalam pengelolaan kesehatan dan pencegahan penyakit.</p>
        </br>        
        </div>
        <h2>Fasilitas Endoskopi</h2>
        <p>1. Ruang ganti dan loker terpisah untuk pasien pria dan wanita diperlukan di dalam unit endoskopi.</p>
        <p>2. Untuk pemeriksaan endoskopi, diperlukan fasilitas kamar mandi di dalam unit endoskopi. </p>
        <p>3. Diperlukan ruang tunggu untuk pasien.</p>
        <p>4. Diperlukan ruang atau area konsultasi pasien di dalam unit endoskopi.</p>
        <p>5. Diperlukan ruang pemeriksaan endoskopi yang terpisah dari ruang pemeriksaan rawat jalan.</p>
        <p>6. Untuk endoskopi dengan sedasi, diperlukan area pemulihan pasien yang tidak bergantung pada ruang pemeriksaan.</p>
        <p>7. Diperlukan tirai atau partisi pemisah tempat tidur di ruang pemulihan endoskopi.</p>
        <div class="endoskopi-container">
        </div>
    </div>
</section>

    <!-- ======= Dokter Endoskopi Section ======= -->
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
    <section id="dokter-endoskopi" class="dokter" data-aos="fade-up">
        <div class="container">
            <h2>Tim Dokter Endoskopi</h2>
            <div class="dokter-container">
                <!-- Dokter Endoskopi 1 -->
                <div class="dokter">
                <img src="{{ asset('asset_landing/assets/img/endoskopi/lw.jpg') }}" style="width:200px;height:200px;"> 
                    <h3>Dr. Laura Williams</h3>
                    <p>Dokter Endoskopi Senior</p>
                </div>

                <!-- Dokter Endoskopi 2 -->
                <div class="dokter">
                <img src="{{ asset('asset_landing/assets/img/endoskopi/ma.jpg') }}" style="width:200px;height:200px;"> 
                    <h3>Dr. Michael Anderson</h3>
                    <p>Dokter Endoskopi Spesialis</p>
                </div>

                <!-- Dokter Endoskopi 3 -->
                <div class="dokter">
                <img src="{{ asset('asset_landing/assets/img/endoskopi/sm.jpg') }}" style="width:200px;height:200px;"> 
                    <h3>Dr. Sarah Miller</h3>
                    <p>Dokter Endoskopi Junior</p>
                </div>
            </div>
        </div>
    </section>
</main>@endsection
