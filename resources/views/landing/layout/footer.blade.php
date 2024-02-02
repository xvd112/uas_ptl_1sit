 <!-- ======= Footer ======= -->
 <footer id="footer" class="footer">

     <div class="container">
         <div class="row gy-4">
             <div class="col-lg-6 col-md-12 footer-info">
                 <a href="/" class="logo d-flex align-items-center">
                     <span>Rumah Sakit Kasih Ibu</span>
                 </a>

                 <div class="row">
                     <label class="col-sm-3">Alamat</label> :
                     <div class="col-sm-8">
                         {{ $kontak == null || $kontak->alamat == null || $kontak->alamat == '' ? '-' : $kontak->alamat }}
                     </div>
                 </div>
                 <div class="row">
                     <label class="col-sm-3">Email</label> :
                     <div class="col-sm-8">
                         <a class="alink"
                             href="{{ $kontak == null || $kontak->email == null || $kontak->email == '' ? '#' : 'mailto:' . $kontak->email }}"
                             @if ($kontak == null || $kontak->email == null || $kontak->email == '') style="pointer-events: none" @endif>
                             {{ $kontak == null || $kontak->email == null || $kontak->email == '' ? '-' : $kontak->email }}
                         </a>
                     </div>
                 </div>
                 <div class="row">
                     <label class="col-sm-3">No Telepon</label> :
                     <div class="col-sm-8">
                         <a class="alink"
                             href="{{ $kontak == null || $kontak->telepon == null || $kontak->telepon == '' ? '#' : 'tel:' . $kontak->telepon }}"
                             @if ($kontak == null || $kontak->telepon == null || $kontak->telepon == '') style="pointer-events: none" @endif>
                             {{ $kontak == null || $kontak->telepon == null || $kontak->telepon == '' ? '-' : $kontak->telepon }}
                         </a>
                     </div>
                 </div>

                 <div class="social-links d-flex mt-4">
                     <a href="{{ $kontak == null || $kontak->twitter == null || $kontak->twitter == '' ? '#' : $kontak->twitter }}"
                         @if ($kontak == null || $kontak->twitter == null || $kontak->twitter == '') style="pointer-events: none" @endif target="_blank"
                         class="twitter"><i class="bi bi-twitter"></i></a>
                     <a href="{{ $kontak == null || $kontak->fb == null || $kontak->fb == '' ? '#' : $kontak->fb }}"
                         @if ($kontak == null || $kontak->fb == null || $kontak->fb == '') style="pointer-events: none" @endif target="_blank"
                         class="facebook"><i class="bi bi-facebook"></i></a>
                     <a href="{{ $kontak == null || $kontak->ig == null || $kontak->ig == '' ? '#' : $kontak->ig }}"
                         @if ($kontak == null || $kontak->ig == null || $kontak->ig == '') style="pointer-events: none" @endif target="_blank"
                         class="instagram"><i class="bi bi-instagram"></i></a>
                     <a href="{{ $kontak == null || $kontak->linkin == null || $kontak->linkin == '' ? '#' : $kontak->linkin }}"
                         @if ($kontak == null || $kontak->linkin == null || $kontak->linkin == '') style="pointer-events: none" @endif target="_blank"
                         class="linkedin"><i class="bi bi-linkedin"></i></a>
                 </div>
             </div>

             <div class="col-lg-4 col-6 footer-links">
                 <h4 class="foot">Menu</h4>
                 <div class="row">
                     <div class="col-6">
                         <ul>
                             <li><a href="/">Home</a></li>
                             <li><a href="/sejarah">Sejarah</a></li>
                             <li><a href="/visimisi">Visi & Misi</a></li>
                             <li><a href="/dokter">Daftar Dokter</a></li>
                         </ul>
                     </div>
                     <div class="col-6">
                         <ul>
                             <li><a href="/berita">Berita</a></li>
                             <li><a href="/daftar">Pendaftaran</a></li>
                             <li><a href="/kontak">Kontak</a></li>
                         </ul>
                     </div>
                 </div>
             </div>

             <div class="col-lg-2 col-6 footer-links">
                 <h4 class="foot">Fasilitas</h4>
                 <ul>
                     <li><a href="/bedah">Bedah</a></li>
                     <li><a href="/endoskopi">Endoskopi</a></li>
                     <li><a href="/radiology">Radiology</a></li>
                 </ul>
             </div>
         </div>
     </div>

     <div class="container mt-4">
         <div class="copyright">
             &copy; Copyright {{ date('Y') }} <strong><span>Kelompok 2</span></strong>. All Rights Reserved
         </div>
         <div class="credits">
             Designed by : <b>Kelompok 2</b> - Universitas Metamedia
         </div>
     </div>

 </footer><!-- End Footer -->
 <!-- End Footer -->
