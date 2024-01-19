
<body>

   <!-- Header -->
   <header class="ex-header">
    <div class="container">
        <div class="row">
            <div class="col-xl-10 offset-xl-1">
              
                <h6 class="t"> Tentang Kami | </h6>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
  </div>
</header> <!-- end of ex-header -->
<!-- end of header -->


<br><br>
    <div id="sejarah">
    
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-xl-7">
                <div class="image-container">
                    
                                 <!-- Slideshow container -->
<div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <img class="img-fluid" src="{{ asset('asset_landing/assets/img/tentang/foto3.jpeg') }}" style="width:100%">
      {{-- <div class="text">Caption Text</div> --}}
    </div>
  
    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <img class="img-fluid" src="{{ asset('asset_landing/assets/img/tentang/foto2.jpg') }}" style="width:100%">
      {{-- <div class="text">Caption Two</div> --}}
    </div>
  
    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <img class="img-fluid" src="{{ asset('asset_landing/assets/img/tentang/foto4.jpeg') }}"style="width:100%">
      {{-- <div class="text">Caption Three</div> --}}
    </div>
  
    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
  <br>
  
  <!-- The dots/circles -->
  <div class="bro">
  <div style="text-align:center" >
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
  </div>      
</div>      
            
                                </div> <!-- end of text-container -->
                            </div> <!-- end of col -->
                            
                            <div class="col-lg-6 col-xl-5">
                                <div class="text-container">
  
                                    <div class="col">
                           <h1 >Sejarah</h1> 
                           @foreach($sejarahs as $sejarah)             
                 <p class="p1">{{ $sejarah->sejarah }}</p> </div>
                    @endforeach
                </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    
<br><br>
          
<center><iframe width="1000" height="500" src="https://www.youtube.com/embed/z4_0bAJPk90?si=RvgHZ9Nuun2Ye2ho" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> 
      
</center>
<br><br>

<script src="{{ asset('asset_landing/js/bootstrap.min.js') }}"></script> <!-- Bootstrap framework -->

</body>
