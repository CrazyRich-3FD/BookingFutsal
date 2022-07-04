 @extends('layouts.index')
@section('content')
     <!-- Contact Start -->
 <div class="container-fluid py-5" style="margin-bottom: 10rem">
     <div class="container">
         <div class="row g-5">
            <div class="col-xl-8 col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                {{-- <h3 class="text-center mb-3">Contact Us</h3> --}}
                <form>
                    <div class="row g-3">
                        <div class="col-6">
                            <input type="text" class="form-control border-0 bg-light px-4" placeholder="Your Name"
                                style="height: 55px;">
                        </div>
                        <div class="col-6">
                            <input type="email" class="form-control border-0 bg-light px-4" placeholder="Your Email"
                                style="height: 55px;">
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control border-0 bg-light px-4" placeholder="Subject"
                                style="height: 55px;">
                        </div>
                        <div class="col-12">
                            <textarea class="form-control border-0 bg-light px-4 py-3" rows="5"
                                placeholder="Message"></textarea>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
             <div class="col-xl-4 col-lg-6 wow slideInUp" data-wow-delay="0.1s">
                 <div class="bg-light rounded h-100 p-5">
                     <div class="section-title mb-3">
                         <h5 class="position-relative d-inline-block text-primary text-uppercase">Contact Us</h5>
                         {{-- <h1 class="display-6 mb-4">Feel Free To Contact Us</h1> --}}
                     </div>
                     <div class="d-flex align-items-center mb-2">
                         <i class="bi bi-geo-alt fs-1 text-primary me-3"></i>
                         <div class="text-start">
                             <h5 class="mb-0">Our Office</h5>
                             <span>123 Street, New York, USA</span>
                         </div>
                     </div>
                     <div class="d-flex align-items-center mb-2">
                         <i class="bi bi-envelope-open fs-1 text-primary me-3"></i>
                         <div class="text-start">
                             <h5 class="mb-0">Email Us</h5>
                             <span>info@example.com</span>
                         </div>
                     </div>
                     <div class="d-flex align-items-center">
                         <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
                         <div class="text-start">
                             <h5 class="mb-0">Call Us</h5>
                             <span>+012 345 6789</span>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Contact End -->
@endsection
 

