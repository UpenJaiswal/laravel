@extends("layouts.html")

@section("title", "About US")


@section("about")
<section class="home-main section_a">
         <div class="container">
            <div class="row">
               <div class="author">
                  <div class="col-md-9 col-sm-7 col-xs-12">
                     <div class="heading">
                        <h1 class="text-left">About</h1>
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
                              <p>Upen Jaiswal, CEO </p>
                              <p>Web Developer</p>
                           </figcaption>
                        </figure>
                     </div>
                  </div>
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
                     <form>
                        <div class="col-sm-12 pad-left pad-right">
                           <h4>Book Appointment</h4>
                        </div>
                        <div class="col-sm-6 pad-left">
                           <div class="form-group"><label>Name</label><input type="text" class="form-control"
                              id="Your Name"></div>
                        </div>
                        <div class="col-sm-6 pad-right">
                           <div class="form-group"><label>Name</label><input type="email" class="form-control"
                              id="Your Email"></div>
                        </div>
                        <div class="col-sm-6 pad-left">
                           <div class="form-group"><label>Email</label><input type="email" class="form-control"
                              id="Your Email"></div>
                        </div>
                        <div class="col-sm-6 pad-right">
                           <div class="form-group"><label>Phone No.</label><input type="text" class="form-control"
                              id="Your Name"></div>
                        </div>
                        <div class="col-sm-12 pad-left pad-right">
                           <div class="form-group"><label>Subject</label><input type="email" class="form-control"
                              id="Subject"></div>
                        </div>
                        <div class="col-sm-12 pad-left pad-right">
                           <div class="form-group">
                              <label>Type Your Message</label>
                              <textarea class="form-control" rows="5" id="comment"></textarea>
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