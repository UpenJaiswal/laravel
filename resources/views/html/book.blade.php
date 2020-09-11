@extends("layouts.html")

@section("title", "Book")


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