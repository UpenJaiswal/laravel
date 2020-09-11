@extends("layouts.html")

@section("title", "Homepage")

@section("home")
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
<div class="slider-main">
         <!-- Start Main Slider -->
      <div id="main-slider">
         <div class="container">
            <div class="carousel-caption">
               <div class="container">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                     <div class="slide-content">
                        <h6>OMNI Pain & Precision Medicine</h6>
                        <hr>
                        <p>Spine & Orthopedic Medicine Specialist located in Clinton, NY</p>
                        <div class="slider-btn text-center"> <a href="tel:3154981346"
                           class="btn grey-btn">315-498-1346</a> </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
@endsection


@section("about")
<section class="home-main section_a">
         <div class="container">
            <div class="row">
               <div class="author">
                  <div class="col-md-9 col-sm-7 col-xs-12">
                     <div class="heading">
                        <h1 class="text-left">About OMNI</h1>
                     </div>
                     <p>The exceptional team at OMNI Pain & Precision Medicine offers the latest in pain management at
                        their office in Clinton, New York. Their board-certified surgeons use state-of-the-art equipment in
                        their surgical center that’s designed to provide highly technical procedures on an outpatient
                        basis.
                     </p>
                     <p>As leaders in minimally invasive pain care, they treat patients for the full scope of conditions
                        responsible for back, neck, hip, arm, leg, and joint pain, including pain arising from injuries,
                        arthritis, and age-related degeneration. Each patient receives personal attention and
                        individualized care from professionals with a reputation for providing the highest quality of care.
                     </p>
                     <aside><a href="#" class="btn grey-btn">Read More</a></aside>
                  </div>
                  <div class="col-md-3 col-sm-5 col-xs-12">
                     <div class="author-info">
                        <figure>
                           <img src="images/doctor.jpg" class="img-responsive" alt="">
                           <figcaption>
                              <p>Nameer Haider, M.D.</p>
                              <p>Spine Specialist</p>
                           </figcaption>
                        </figure>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
@endsection


@section("call")
<section class="home-main section_b">
         <div class="container">
            <div class="involve_box">
               <h2>We're actively involved in cutting edge clinical research</h2>
               <aside><a href="tel:3042376489" class="btn grey-btn">Call Us Today</a></aside>
            </div>
         </div>
      </section>
@endsection


@section("client")
<section class="home-main section_c">
         <div class="container">
            <div class="row">
               <div class="col-md-7 col-sm-6 col-xs-12">
                  <div class="insure-text">
                     <p>We also accept: United Healthcare, UHC, MVP, Workers Comp, Medicare, Personal Injury, No Fault, and
                        UMR. If you have any other questions regarding coverage, please call our office.
                     </p>
                  </div>
               </div>
               <div class="col-md-5 col-sm-6 col-xs-12">
                  <div class="clearfix"></div>
                  <div id="slider-1" class="owl-carousel owl-theme">
                     <div class="item">
                        <figure><img src="images/insur-1.jpg" class="img-responsive" alt=""></figure>
                     </div>
                     <div class="item">
                        <figure><img src="images/insur-2.jpg" class="img-responsive" alt=""></figure>
                     </div>
                     <div class="item">
                        <figure><img src="images/insur-3.jpg" class="img-responsive" alt=""></figure>
                     </div>
                     <div class="item">
                        <figure><img src="images/insur-4.jpg" class="img-responsive" alt=""></figure>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
@endsection


@section("service")
<section class="home-main section_d">
         <div class="container">
            <div class="row">
               <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="heading">
                     <h2>service we provide</h2>
                  </div>
                  <div id="slider-2" class="owl-carousel owl-theme">
                     <div class="item">
                        <div class="service-box">
                           <figure>
                              <img src="images/service-1.jpg" class="img-responsive" alt="">
                           </figure>
                           <div class="serv-content">
                              <h6>Spinal Cord Stimulation</h6>
                              <p>If you have chronic pain in your back, legs, or arms, spinal cord stimulation may provide
                                 the relief you need
                              </p>
                              <aside><a href="#" class="btn grey-btn">More Info</a></aside>
                           </div>
                        </div>
                     </div>
                     <div class="item">
                        <div class="service-box">
                           <figure>
                              <img src="images/service-2.jpg" class="img-responsive" alt="">
                           </figure>
                           <div class="serv-content">
                              <h6>Neck Pain</h6>
                              <p>If you have chronic pain in your back, legs, or arms, spinal cord stimulation may provide
                                 the relief you need
                              </p>
                              <aside><a href="#" class="btn grey-btn">More Info</a></aside>
                           </div>
                        </div>
                     </div>
                     <div class="item">
                        <div class="service-box">
                           <figure>
                              <img src="images/service-3.jpg" class="img-responsive" alt="">
                           </figure>
                           <div class="serv-content">
                              <h6>Joint Pain</h6>
                              <p>If you have chronic pain in your back, legs, or arms, spinal cord stimulation may provide
                                 the relief you need
                              </p>
                              <aside><a href="#" class="btn grey-btn">More Info</a></aside>
                           </div>
                        </div>
                     </div>
                     <div class="item">
                        <div class="service-box">
                           <figure>
                              <img src="images/service-1.jpg" class="img-responsive" alt="">
                           </figure>
                           <div class="serv-content">
                              <h6>Spinal Cord Stimulation</h6>
                              <p>If you have chronic pain in your back, legs, or arms, spinal cord stimulation may provide
                                 the relief you need
                              </p>
                              <aside><a href="#" class="btn grey-btn">More Info</a></aside>
                           </div>
                        </div>
                     </div>
                     <div class="item">
                        <div class="service-box">
                           <figure>
                              <img src="images/service-2.jpg" class="img-responsive" alt="">
                           </figure>
                           <div class="serv-content">
                              <h6>Neck Pain</h6>
                              <p>If you have chronic pain in your back, legs, or arms, spinal cord stimulation may provide
                                 the relief you need
                              </p>
                              <aside><a href="#" class="btn grey-btn">More Info</a></aside>
                           </div>
                        </div>
                     </div>
                     <div class="item">
                        <div class="service-box">
                           <figure>
                              <img src="images/service-3.jpg" class="img-responsive" alt="">
                           </figure>
                           <div class="serv-content">
                              <h6>Joint Pain</h6>
                              <p>If you have chronic pain in your back, legs, or arms, spinal cord stimulation may provide
                                 the relief you need
                              </p>
                              <aside><a href="#" class="btn grey-btn">More Info</a></aside>
                           </div>
                        </div>
                     </div>
                     <div class="item">
                        <div class="service-box">
                           <figure>
                              <img src="images/service-1.jpg" class="img-responsive" alt="">
                           </figure>
                           <div class="serv-content">
                              <h6>Spinal Cord Stimulation</h6>
                              <p>If you have chronic pain in your back, legs, or arms, spinal cord stimulation may provide
                                 the relief you need
                              </p>
                              <aside><a href="#" class="btn grey-btn">More Info</a></aside>
                           </div>
                        </div>
                     </div>
                     <div class="item">
                        <div class="service-box">
                           <figure>
                              <img src="images/service-2.jpg" class="img-responsive" alt="">
                           </figure>
                           <div class="serv-content">
                              <h6>Neck Pain</h6>
                              <p>If you have chronic pain in your back, legs, or arms, spinal cord stimulation may provide
                                 the relief you need
                              </p>
                              <aside><a href="#" class="btn grey-btn">More Info</a></aside>
                           </div>
                        </div>
                     </div>
                     <div class="item">
                        <div class="service-box">
                           <figure>
                              <img src="images/service-3.jpg" class="img-responsive" alt="">
                           </figure>
                           <div class="serv-content">
                              <h6>Joint Pain</h6>
                              <p>If you have chronic pain in your back, legs, or arms, spinal cord stimulation may provide
                                 the relief you need
                              </p>
                              <aside><a href="#" class="btn grey-btn">More Info</a></aside>
                           </div>
                        </div>
                     </div>
                  </div>
                  <aside class="see-all text-center"><a href="#" class="btn grey-btn">See All Services</a></aside>
               </div>
            </div>
         </div>
      </section>
@endsection


@section("book")
<section class="home-main section-e">
         <div class="container">
            <div class="row">
               <div class="col-md-6 col-sm-12 col-xs-12 sece-left">
                  <div class="map-sec">
                     <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2914.065893832252!2d-75.365881!3d43.08211!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbc8b496e10fef719!2sOmni%20Pain%20%26%20Precision%20Management!5e0!3m2!1sen!2sus!4v1591765821207!5m2!1sen!2sus"
                        frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                  </div>
               </div>
               <div class="col-md-6 col-sm-12 col-xs-12 sec-e-right">
                  <div class="get-form">

                     <form method="post" action="{{url('save')}}">
                     @csrf


                        <div class="col-sm-12 pad-left pad-right">
                           <h4>Book Appointment</h4>
                        </div>
                        <div class="col-sm-6 pad-left">
                           <div class="form-group"><label>First Name</label><input type="text" name="firstname" class="form-control"
                              id="Your Name"></div>
                        </div>
                        <div class="col-sm-6 pad-right">
                           <div class="form-group"><label>Last Name</label><input type="text" name="lastname" class="form-control"
                              id="Your Email"></div>
                        </div>
                        <div class="col-sm-6 pad-left">
                           <div class="form-group"><label>Email</label><input type="email" name="email" class="form-control"
                              id="Your Email"></div>
                        </div>
                        <div class="col-sm-6 pad-right">
                           <div class="form-group"><label>Phone No.</label><input type="text" name="phone" class="form-control"
                              id="Your Name"></div>
                        </div>
                        <div class="col-sm-12 pad-left pad-right">
                           <div class="form-group"><label>Subject</label><input type="text" name="subject" class="form-control"
                              id="Subject"></div>
                        </div>
                        <div class="col-sm-12 pad-left pad-right">
                           <div class="form-group">
                              <label>Type Your Message</label>
                              <textarea class="form-control" rows="5" id="comment" name="message"></textarea>
                           </div>
                        </div>
                        <div class="col-sm-12 pad-left pad-right">
                           <div class="form-group text-left"><button type="submit" class="btn green-btn">Submit</button>
                           </div>
                        </div>
                        <div class="clearfix"></div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
@endsection