@extends('landing.layout.index')

@section('content')

<main id="main">

    <!-- ======= Bedah Us Section ======= -->
    <section id="bedah" class="bedah" data-aos="fade-up">
    <div class="container">
        <h1>Bedah</h1>
        <div class="bedah-content">
            <img src="{{ asset('asset_landing/assets/img/bedah/B1.jpg') }}" style="float:left;width:500px;height:300px;">
            <div style="margin-left: 520px;">
                <p><b><h3> Bedah </b></h3> adalah suatu bidang dalam dunia kedokteran yang berkaitan dengan pembedahan atau intervensi bedah. Secara umum, bedah melibatkan penggunaan teknik tertentu untuk melakukan tindakan medis yang mencakup pemotongan atau manipulasi jaringan tubuh untuk memperbaiki atau mengatasi masalah kesehatan.</p>    
                <p> Prosedur bedah dapat dilakukan untuk berbagai tujuan, termasuk pengangkatan tumor, perbaikan organ yang rusak, transplantasi organ, penanganan cedera atau luka bakar berat, dan berbagai jenis operasi lainnya. Bedah dapat melibatkan berbagai spesialisasi, seperti bedah umum, bedah jantung, bedah ortopedi, bedah plastik, dan banyak lagi, sesuai dengan jenis intervensi yang diperlukan.</p>
            </div>
            <br>
                <p> Tim bedah biasanya terdiri dari ahli bedah utama, asisten bedah, anestesiologis, dan perawat bedah. Peralatan medis dan teknologi canggih sering digunakan dalam prosedur bedah untuk memastikan keamanan dan keberhasilan intervensi.</p>
                <p> Penting untuk dicatat bahwa bedah hanya satu dari banyak opsi perawatan yang mungkin tersedia, dan keputusan untuk melakukan tindakan bedah biasanya melibatkan pertimbangan seksama oleh pasien bersama dengan tim medis yang merawatnya.</p>
            </br>    
        </div>
        <h2>Fasilitas Bedah</h2>
        <p>1. Memiliki kapasitas 5 kamar operasi yang terdiri 3 kamar operasi mayor/besar, 1 kamar operasi mata dan 1 kamar operasi minor/kecil. Selain itu terdapat pula ruangan pre operasi  yang terdiri dari 3 tempat tidur dan ruang pemulihan (Recovery Room) yang terdiri dari 5 tempat tidur.</p>
        <p>2. Dilengkapi beberapa peralatan seperti mesin anestesi dan ventilator, meja operasi, lampu operasi, mesin suction, monitor, gas medik, peralatan pendukung dan instrumen yang lengkap termasuk implan.</p>
        <p>3. Memiliki peralatan canggih seperti mesin C-arm, Neurosurgery Microscope, Opthalmic Operation Microscope.</p>
        <p>4. Desain tata ruang operasi sudah memenuhi syarat untuk mengurangi risiko infeksi berdasar atas tingkat sterilitas ruangan (zona steril sangat tinggi, zona steril tinggi, zona steril sedang, dan zona steril rendah) dan koridor/alur steril terpisah  dengan koridor/alur kotor.</p>
        <p>5. Sarana dan prasarana memenuhi ketentuan yang berlaku baik komponen lantai (vinyl), komponen dinding (pelapis anti bakteri) dan komponen langit-langit.</p>
        <p>6. Menjamin kualitas udara di kamar operasi dengan menggunakan sistem sirkulasi tertutup laminary flow yang sudah menggunakan HEPA Filter dan juga Chiller 70PK untuk menjaga suhu dan kelembaban sesuai standar.</p>
        <div class="bedah-container">
        </div>
    </div>
</section>

    <!-- ======= Dokter Section ======= -->
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
    <section id="dokter" class="dokter" data-aos="fade-up">
        <div class="container">
            <h2>Tim Dokter Bedah</h2>
            <div class="dokter-container">
                <!-- Dokter 1 -->
                <div class="dokter">
                <img src="{{ asset('asset_landing/assets/img/bedah/jd.jpg') }}" style="width:200px;height:200px;"> 
                    <h3>Dr. John Doe</h3>
                    <p>Dokter Bedah Senior</p>
                </div>

                <!-- Dokter 2 -->
                <div class="dokter">
                <img src="{{ asset('asset_landing/assets/img/bedah/js.jpg') }}" style="width:200px;height:200px;"> 
                    <h3>Dr. Jane Smith</h3>
                    <p>Dokter Bedah Spesialis</p>
                </div>

                <!-- Dokter 3 -->
                <div class="dokter">
                <img src="{{ asset('asset_landing/assets/img/bedah/mj.jpg') }}" style="width:200px;height:200px;"> 
                    <h3>Dr. Mark Johnson</h3>
                    <p>Dokter Bedah Junior</p>
                </div>
            </div>
        </div>
    </section>
</main>@endsection