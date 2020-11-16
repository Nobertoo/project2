<!DOCTYPE html>
<html lang="en">
<head>
  <title>MERAMPUT SHOP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  @include('layouts.asset')
</head>
<body class="goto-here">
	@include('layouts.label')
  @include('layouts.navigation')
  <!-- END nav -->

  <section id="home-section" class="hero">
          <div class="home-slider owl-carousel">
          <div class="slider-item" style="background-image: url( {{ asset('public/images/baground1.jpg') }} )">
            <div class="overlay"></div>
            <div class="container">
              <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                <div class="col-md-12 ftco-animate text-center">
                  <h1 class="mb-2">Tempatnya Sepatu Lokal Pride</h1>
                  <h2 class="subheading mb-4">Kami Menyediakan Aneka Sepatu </h2>
                  <p><a href="#" class="btn btn-primary">View Details</a></p>
                </div>

              </div>
            </div>
          </div>
          </div>
    </section>

  <section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
   <div class="container">
    <div class="row">
     <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url({{ asset('public/images/patrobas.png') }}">
      <a href="https://vimeo.com/45830194" class="icon popup-vimeo d-flex justify-content-center align-items-center">
       <span class="icon-play"></span>
     </a>
   </div>
   <div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
     <div class="heading-section-bold mb-4 mt-md-5">
      <div class="ml-md-0">
        <h2 class="mb-4">Patrobas</h2>
      </div>
    </div>
    <div class="pb-md-5">
      <p>Brand Patrobas dibuat karena kita melihat banyaknya sepatu yang beredar di pasaran dengan harga yang tinggi tetapi kualitasnya “pas-pas an”. Ataupun kualitas bagus tetapi harganya sangat tinggi, sehingga tidak bisa dinikmati sebagian besar masyarakat. Disini kami percaya, bahwa untuk memiliki sepatu yang berkualitas tidak harus mahal dan itulah yang menjadi value perusahaan kami. Patrobas berkomitmen untuk menciptakan produk-produk berkualitas dengan harga terjangkau.</p>
      <p>Di desain dengan detail dan mengikuti trend sneakers yang sedang ramai di gunakan kaum milenial di Indonesia. Dimana memberikan kesan modis dan keren di kalangan pemakainya , Patrobas juga memberikan banyak model sepatu sesuai keinginan mu.</p>
      <p><a href="#" class="btn btn-primary">Shop now</a></p>
    </div>
  </div>
</div>
</div>
</section>

<hr>

<section class="ftco-section ftco-category ftco-no-pt">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-6 order-md-last align-items-stretch d-flex">
                                <div class="category-wrap-2 ftco-animate img align-self-stretch d-flex" style="background-image: url({{asset('public/images/bg_1.jpg')}})">
                                    <div class="text text-center">
                                        <h2>Lokal Brand</h2>
                                        <p>Untuk menemani Harimu</p>
                                        <p><a href="#" class="btn btn-primary">Shop now</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url( {{ asset('public/images/kodachi.jpg') }} )">
                                    <div class="text px-3 py-1">
                                        <h2 class="mb-0"><a href="#">Kodachi</a></h2>
                                    </div>
                                </div>
                                <div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url({{asset('public/images/geofmax.jpg')}})">
                                    <div class="text px-3 py-1">
                                        <h2 class="mb-0"><a href="#">Geofmax</a></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url({{asset('public/images/compas.jpg')}})">
                            <div class="text px-3 py-1">
                                <h2 class="mb-0"><a href="#">compas</a></h2>
                            </div>      
                        </div>
                        <div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url({{asset('public/images/world.jpg')}})">
                            <div class="text px-3 py-1">
                                <h2 class="mb-0"><a href="#">Word Devision</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<hr>
<footer class="ftco-footer ftco-section">
  <div class="container">
   <div class="row">
    <div class="mouse">
      <a href="#" class="mouse-icon">
       <div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
     </a>
   </div>
 </div>
 <div class="row mb-5">
  <div class="col-md">
    <div class="ftco-footer-widget mb-4">
      <h2 class="ftco-heading-2">Vegefoods</h2>
      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
      <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
      </ul>
    </div>
  </div>
  <div class="col-md">
    <div class="ftco-footer-widget mb-4 ml-md-5">
      <h2 class="ftco-heading-2">Menu</h2>
      <ul class="list-unstyled">
        <li><a href="#" class="py-2 d-block">Shop</a></li>
        <li><a href="#" class="py-2 d-block">About</a></li>
        <li><a href="#" class="py-2 d-block">Journal</a></li>
        <li><a href="#" class="py-2 d-block">Contact Us</a></li>
      </ul>
    </div>
  </div>
  <div class="col-md-4">
   <div class="ftco-footer-widget mb-4">
    <h2 class="ftco-heading-2">Help</h2>
    <div class="d-flex">
     <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
       <li><a href="#" class="py-2 d-block">Shipping Information</a></li>
       <li><a href="#" class="py-2 d-block">Returns &amp; Exchange</a></li>
       <li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
       <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
     </ul>
     <ul class="list-unstyled">
       <li><a href="#" class="py-2 d-block">FAQs</a></li>
       <li><a href="#" class="py-2 d-block">Contact</a></li>
     </ul>
   </div>
 </div>
</div>
<div class="col-md">
  <div class="ftco-footer-widget mb-4">
   <h2 class="ftco-heading-2">Have a Questions?</h2>
   <div class="block-23 mb-3">
     <ul>
       <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
       <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
       <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
     </ul>
   </div>
 </div>
</div>
</div>
<div class="row">
  <div class="col-md-12 text-center">

    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    </p>
  </div>
</div>
</div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


@include('layouts.script')

</body>
</html>