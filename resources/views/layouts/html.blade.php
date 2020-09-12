<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>@yield("title")</title>
      <!-- Font Awesome -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <!-- Bootstrap core CSS -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- Owl Stylesheets -->
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <!-- Custom styles -->
      <link rel="stylesheet" href="css/style.css">
   </head>
   <body>
      <header>
         <!-- Secondary Nav Start -->
         <section class="secondary-nav">
            <div class="container">
               <div class="row">
                  <div class="col-md-3 col-sm-4 col-xs-12">
                     <div class="brand-logo"><a href="index.html"><img src="images/logo.png" alt=""></a></div>
                  </div>
                  <div class="col-md-9 col-sm-8 col-xs-12">
                     <ul class="list-unstyled top-info">
                        <li>
                           <a href="mailto:bamcjobs@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i>
                           <span><strong>Mail Us :</strong> bamcjobs@gmail.com</span></a>
                        </li>
                        <li>
                           <a href="tel:3042376489"><i class="fa fa-phone" aria-hidden="true"></i> <span><strong>Call Us
                           :</strong> +1-304-237-6489</span></a>
                        </li>
                        <li><a href="#" class="btn grey-btn">BOOK ONLINE</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </section>
         <!-- Secondary Nav End -->
         <!--Start Navigation -->
         <div class="navigation" id="nav-sticky">
            <div class="container">
               <nav class="navbar navbar-default">
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                     <div class="brand-logo hidden"><a href="index.html"><img src="images/logo.png" alt=""></a></div>
                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar"
                        aria-expanded="false">
                     <span class="sr-only">Toggle navigation</span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     </button>
                  </div>
                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse" id="myNavbar">
                     <ul class="nav navbar-nav">
                        <li class="active"><a href="{{ url('/home') }}">Home</a></li>
                        <li class="dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown">Education <span
                              class="caret"></span></a>
                           <ul class="dropdown-menu">
                              <li class="dropdown dropdown-submenu">
                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Patient Education Videos <span
                                    class="caret"></span></a>
                                 <ul class="dropdown-menu">
                                    <li><a href="#">MORE VIDEOS</a></li>
                                 </ul>
                              </li>
                              <li><a href="#">Pain Treatment</a></li>
                              <li><a href="#">Fellowship Program</a></li>
                           </ul>
                        </li>
                        <li><a href="about.html">About Practice</a></li>
                        <li><a href="#">Providers</a></li>
                        <li class="dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services <span
                              class="caret"></span></a>
                           <ul class="dropdown-menu">
                              <li><a href="#">Spinal Cord Stimulation</a></li>
                              <li><a href="#">Neck Pain</a></li>
                              <li><a href="#">Joint Pain</a></li>
                              <li><a href="#">Spine</a></li>
                              <li><a href="#">Minimally Invasive Spine Surgery</a></li>
                              <li><a href="#">Stem Cells</a></li>
                              <li><a href="#">Sacroiliac Joint Disease</a></li>
                              <li><a href="#">Arthritis</a></li>
                              <li><a href="#">View More Services</a></li>
                           </ul>
                        </li>
                        <li><a href="regenerative-medicine.html">Regenerative Medicine</a></li>
                        <li><a href="#">Fees And Insurance</a></li>
                        <li><a href="#">Testimonials</a></li>
                        <li><a href="contact.html">contact</a></li>
                     </ul>
                  </div>
                  <!-- /.navbar-collapse -->
               </nav>
            </div>
            <!-- /.container -->
         </div>
         <!--End Navigation -->

     </header>
      
      @section("home")
      @show

      @section("about")
      @show

      @section("call")
      @show

      @section("client")
      @show

      @section("service")
      @show

      @section("book")
      @show

      
      <footer class="footer_main">
         <div class="footer_top">
            <div class="container">
               <div class="row">
                  <div class="col-md-4 col-sm-6 col-xs-12 footer-box">
                     <h6>OMNI Pain & Precision Medicine</h6>
                     <ul class="list-unstyled add_info">
                        <li>
                           <p>Address</p>
                           <a href="https://goo.gl/maps/rby1c1FBXShbaNZf7" target="_blank">7883 Seneca Tpke., Clinton, NY
                           13323</a>
                        </li>
                        <li>
                           <p>Email Us</p>
                           <a href="mailto:bamcjobs@gmail.com">bamcjobs@gmail.com</a>
                        </li>
                        <li>
                           <p>Call Us</p>
                           <a href="tel:3154981346">(Appointments): 315-498-1346</a>
                           <a href="tel:3157988737">(General Inquiries): 315-798-8737</a>
                        </li>
                     </ul>
                  </div>
                  <div class="col-md-4 col-sm-6 col-xs-12 footer-box">
                     <h6>Office Hours</h6>
                     <ul class="list-unstyled office_hour">
                        <li>Monday - Thursday : 8 am - 5 pm</li>
                        <li>Friday : 8:00 am - 3:00 pm</li>
                        <li>Saturday - Sunday : Closed</li>
                        <li>
                           <figure><img src="images/rating.png" alt=""></figure>
                        </li>
                     </ul>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12 footer-box">
                     <h6>Main Links</h6>
                     <ul class="list-unstyled main_links">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="#">Education</a></li>
                        <li><a href="about.html">About Practice</a></li>
                        <li><a href="#">Providers</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Regenerative Medicine</a></li>
                        <li><a href="#">Fees And Insurance</a></li>
                        <li><a href="#">Testimonials</a></li>
                        <li><a href="contact.html">contact</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="footer_bottom">
            <div class="container">
               <div class="row">
                  <div class="col-md-6 col-sm-6 col-xs-12">
                     <p>© Copyright | All Rights Reserved | 2020</p>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                     <p class="text-right">Crafted By <a href="#">Green Web Media</a></p>
                  </div>
               </div>
            </div>
         </div>
         <div id="toTop" class="backtop" style="display: block;"> <i class="fa fa-arrow-circle-up" aria-hidden="true"></i></div>
      </footer>
      <!-- Section E Main End -->
      <!-- jQuery -->
      <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <!-- Bootstrap core JavaScript -->
      <script type="text/javascript" src="js/bootstrap.min.js"></script>
      <!-- Owl Slider scripts -->
      <script src="js/owl.carousel.js"></script>
      <script src="js/owl-function.js"></script>
      <!-- Custom scripts -->
      <script src="js/function.js"></script>
   </body>
</html>