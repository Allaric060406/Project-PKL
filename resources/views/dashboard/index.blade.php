<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>PT.PIL Passanger</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
         <form action="/logout" method="get">
            @csrf
               <div id="mySidepanel" class="sidepanel">
                  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                  <a href="dashboard">Home </a>
                  <a href="#about">About</a>
                  <a href="#rental">Rental  </a>
                  <a href="/Passenger">Pesan Mobil  </a>
                  <a href="#luxury">Rent Service </a>
                  <a href="#testimonial">Testimonial</a>
                  <a href="#contact">Contact</a>
                  <a href="{{url('/logout')}}">Logout</a>
               </div>
               <!-- header -->
         </form>
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-3 col-sm-4">
                     <div class="logo">
                        <a href="/dashboard"><img src="images/logopil1.png" alt="#" /></a>
                     </div>
                  </div>
                  <div class=" col-md-7 col-sm-6">
                     <ul class="conat_info d_none ">
                        <li><a href="#">(+62) 878 5543 2013 - Dzirar</a></li>
                        <li><a href="#">passengger@pindadinternasionallogistic.co.id</a></li>
                     </ul>
                  </div>
                  <div class="col-md-2 col-sm-2">
                     <div class="right_bottun">
                        <button class="openbtn" onclick="openNav()"><img src="images/menu_icon.png" alt="#"/> </button> 
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      <section class="banner_main bottom_cross">
         <div id="banner1" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#banner1" data-slide-to="0" class="active"></li>
               <li data-target="#banner1" data-slide-to="1"></li>
               <li data-target="#banner1" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container-fluid">
                     <div class="carousel-caption">
                        <div class="row">
                           <div class="col-md-7">
                              <div class="ban_car">
                                 <figure><img src="images/innova isi.png" alt="#"/></figure>
                                 <a class="read_more" href="#">Get Car on Rent</a>
                              </div>
                           </div>
                           <div class="col-md-5">
                              <div class="text-bg">
                                 <h1>Welcome Rental cars</h1>
                                 <span>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is </span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container-fluid">
                     <div class="carousel-caption">
                        <div class="row">
                           <div class="col-md-7">
                              <div class="ban_car">
                                 <figure><img src="images/innova isi.png" alt="#"/></figure>
                                 <a class="read_more" href="#">Get Car on Rent</a>
                              </div>
                           </div>
                           <div class="col-md-5">
                              <div class="text-bg">
                                 <h1>Welcome Rental cars</h1>
                                 <span>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is </span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container-fluid">
                     <div class="carousel-caption">
                        <div class="row">
                           <div class="col-md-7">
                              <div class="ban_car">
                                 <figure><img src="images/innova isi.png" alt="#"/></figure>
                                 <a class="read_more" href="#">Get Car on Rent</a>
                              </div>
                           </div>
                           <div class="col-md-5">
                              <div class="text-bg">
                                 <h1>Welcome Rental cars</h1>
                                 <span>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is </span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            </a>
            <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            </a>
         </div>
      </section>
      <!-- end banner -->
      <!-- about section -->
      <div id="about" class="about ">
         <div class="container-fluid">
            <div class="row ">
               <div class="col-md-5">
                  <div class="titlepage">
                     <h2>About Our Cars</h2>
                     <p>Kami menyediakan rental mobil dengan berbagai type sesuai dengan kebutuhan anda baik kebutuhan untuk Pribadi atau kebutuhan bisnis.kami juga menyediakan sopir yang profesional dengan pelayanan yang baik dan ramah yang dapat membantu kenyamanan perjalanan anda,baik dalam kota atau luar kota.

                     </p>
                     <a class="read_more" href="https://pindadinternationallogistic.co.id/products/passenger.html">Read More</a>
                  </div>
               </div>
               <div class="col-md-7">
                  <div class="about_right mt-5">
                     <figure><img src="images/reborn.png" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- about section -->
      <!-- software section -->
      <section id="rental" class="rental bottom_cross5">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Great Rental Offers For You</h2>
                     <p>Berbagai armada  Rentals</p>
                  </div>
               </div>
            </div>
         </div>
         <div id="rental1" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#rental1" data-slide-to="0" class="active"></li>
               <li data-target="#rental1" data-slide-to="1"></li>
               <li data-target="#rental1" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="ban_car">
                                 <div class="cars_efek">
                                    <figure><img src="images/avanza.png" alt="#"/></figure>
                                    <a class="read_more" href="/Passenger">Get Car on Rent</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="ban_car">
                                 <figure><img src="images/pjr2.png" alt="#"/></figure>
                                 <a class="read_more" href="/Passenger">Get Car on Rent</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="ban_car">
                                 <figure><img src="images/hice2.png" alt="#"/></figure>
                                 <a class="read_more" href="/Passenger">Get Car on Rent</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#rental1" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            </a>
            <a class="carousel-control-next" href="#rental1" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            </a>
         </div>
      </section>
      <!-- end We Do section -->
      <!-- luxury section -->
      <div id="luxury" class="luxury bottom_cross6">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage fontjdl">
                     <hr style="color: black;height:5px;" size="5" width="30%" />
                     <h2>Rent Service Cars</h2>
                     <hr style="color: black;height:5px;" size="5" width="30%" />
                  </div>
               </div>
            </div>
            <div class="row d_flex">
               <div class="col-lg-6 col-md-12">
                  <div class="form_date">
                     <form>
                        <div class="row">
                           <div class="col-md-12">
                              <div class="text-dark fontbesar">
                              <a>TARIF YANG BERLAKU AKAN DI TAGIHKAN OLEH PINAD INTERNASIONAL LOGISTIC:</a>
                              </div>
                              <div class="titlepage text-dark text-left fontisi">
                                 <a>1. Sewa kendaraan untuk armada yang di pilih per hari.</a><br>
                                 <a>2. Biaya pengemudi/Driver per hari.</a><br>
                                 <a>3. Biaya akomodasi driver per hari.</a><br>
                                 <a>4. Biaya harian Driver untuk menginap per hari.</a><br>
                                 <a>5. Sewa kendaraan minimal 4 jam untuk mobil yang terpilih.</a><br>
                                 <a>6. Biaya pengemudi/Driver maksimal 4 jam (jam 13.00-16.00).</a>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
               <div class="col-lg-6 col-md-12">
                  <div class="ban_car">
                     <figure><img src="images/13.png" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end luxury section -->
      <!-- testimonial section -->
      <div id="testimonial" class="testimonial bottom_cross bottom_cross2">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Testimonials</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div id="myCarousel" class="carousel slide testimonial_Carousel " data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                     </ol>
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="container">
                              <div class="carousel-caption ">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="testimonial_box">
                                          <figure><img src="images/our.png" alt="#"/></figure>
                                          <h3>Due markes <br><span class="kisu">Rental</span></h3>
                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit ess</p>
                                          <i><img src="images/test.png" alt="#"/></i>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="testimonial_box">
                                          <figure><img src="images/our.png" alt="#"/></figure>
                                          <h3>Due markes <br><span class="kisu">Rental</span></h3>
                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit ess</p>
                                          <i><img src="images/test.png" alt="#"/></i>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="full cross_layout">
                                          <div class="testimonial_box">
                                             <figure><img src="images/our.png" alt="#"/></figure>
                                             <h3>Due markes <br><span class="kisu">Rental</span></h3>
                                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit ess</p>
                                             <i><img src="images/test.png" alt="#"/></i>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                     <i class='fa fa-angle-left'></i>
                     </a>
                     <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                     <i class='fa fa-angle-right'></i>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end testimonial section -->
      <!-- contact section -->
      <div id="contact" class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Contact Us</h2>
                  </div>
               </div>
            </div>
         </div>
         <div class="con_bg">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-8 offset-md-2">
                     <form id="request" class="main_form">
                        <div class="row">
                           <div class="col-md-6 ">
                              <input class="contactus" placeholder="Name" type="type" name="Name"> 
                           </div>
                           <div class="col-md-6">
                              <input class="contactus" placeholder="Email" type="type" name="Email"> 
                           </div>
                           <div class="col-md-12">
                              <input class="contactus" placeholder="Phone Number" type="type" name="Phone Number">                          
                           </div>
                           <div class="col-md-12">
                              <input class="contactusmess" placeholder="Message" type="type" Message="Name">
                           </div>
                           <div class="col-md-12">
                              <button class="send_btn">Send</button>
                           </div>
                        </div>
                     </form>
                  </div>
                  <div class="col-md-12 padding_right2">
                     <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.6356390504748!2d107.6454897144525!3d-6.934078194990082!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e80cfd950e9b%3A0x4824e900645f88a!2sPT.%20Pindad%20International%20Logistic!5e0!3m2!1sid!2sid!4v1667268514048!5m2!1sid!2sid" width="600" height="400" frameborder="0" style="border:0; width: 100%;" allowfullscreen></iframe>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end contact section -->
      <!--  footer -->
      <footer>
         <div class="footer bottom_cross1">
            <div class="container">
               <div class="row">
                  <div class="col-md-3">
                     <a class="logo_bottom" href="index.html"><img src="images/logopil1.png" alt="#"/></a>
                     <p>Our experiences expert provide complete an reliable solutions for the requirements of industry today and tommorrow. We are comming to satisfy our costomer at best by giving reliable performance, higher services levels, rapid responses and faster movement goods </p>
                  </div>
                  <div class="col-md-4">
                     <div class="fid_box">
                        <h3>Adderess  </h3>
                        <ul class="location_icon">
                           <li><i class="fa fa-angle-right" aria-hidden="true"></i> 517, Gatot Subroto Street,
                        Bandung City, West Java,
                        Post Code 40284 - Indonesia <br>
                           </li>
                           <li><a href="#">
                           (+62) 878 5543 2013 - Dzirar <br> (+62) 895 1567 1952 - Haikal</a>
                           </li>
                           <li><a href="#"> passengger@pindadinternasionallogistic.co.id</a></li>
                        </ul>
                        <ul class="social_icon">
                           <li><a href="https://www.youtube.com/c/PTPindadInternationalLogistic"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                           <li><a href="https://twitter.com/PT_PIL"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                           <li><a href="https://www.instagram.com/pindadinternationallogistic"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                         </ul>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="fid_box">
                        <h3> Quick Links  </h3>
                        <ul class="link">
                           <li class="active">
                              <a href="#">
                                 <i class="fa fa-angle-right" aria-hidden="true"></i> Home 
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <i class="fa fa-angle-right" aria-hidden="true"></i> About
                              </a>
                           </li>
                           <li>
                              <a href="#rental">
                                 <i class="fa fa-angle-right" aria-hidden="true"></i> Rental
                              </a>
                           </li>
                           <li>
                              <a href="#luxury">
                                 <i class="fa fa-angle-right" aria-hidden="true"></i> Rent Service Cars
                              </a>
                           </li>
                           <li>
                              <a href="#testimonial">
                                 <i class="fa fa-angle-right" aria-hidden="true"></i> Testimonial 
                              </a>
                           </li>
                           <li>
                              <a href="#Ccontact ">
                                 <i class="fa fa-angle-right" aria-hidden="true"></i> Contact  
                              </a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                      
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script>
         function openNav() {
           document.getElementById("mySidepanel").style.width = "250px";
         }
         
         function closeNav() {
           document.getElementById("mySidepanel").style.width = "0";
         }
      </script>
      <script>
         Swal.fire({
         position: 'top-end',
         icon: 'success',
         title: 'anda berhasil login',
         showConfirmButton: false,
         timer: 1500
         })
      </script>
      
   </body>
</html>

