<div class="container-fluid bg-primary bg-testimonial py-5 my-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="owl-carousel testimonial-carousel rounded p-5 wow zoomIn" data-wow-delay="0.6s">
                        @foreach ($ulasan as $u)
                            <div class="testimonial-item text-center text-white">
                            {{-- <img class="img-fluid mx-auto rounded mb-4" src="{{ asset ('template/img/testimonial-1.jpg') }}" alt=""> --}}
                            <p class="fs-5">{{ $u->ulasan }}</p>
                            <hr class="mx-auto w-75">
                            <h4 class="text-white mb-0">{{ $u->nama }}</h4>
                        </div>
                        @endforeach
                        {{-- <div class="testimonial-item text-center text-white">
                            <img class="img-fluid mx-auto rounded mb-4" src="{{ asset ('template/img/testimonial-1.jpg') }}" alt="">
                            <p class="fs-5">Dolores sed duo clita justo dolor et stet lorem kasd dolore lorem ipsum. At lorem lorem magna ut et, nonumy labore diam erat. Erat dolor rebum sit ipsum.</p>
                            <hr class="mx-auto w-25">
                            <h4 class="text-white mb-0">Client Name</h4>
                        </div>
                        <div class="testimonial-item text-center text-white">
                            <img class="img-fluid mx-auto rounded mb-4" src="{{ asset ('template/img/testimonial-2.jpg') }}" alt="">
                            <p class="fs-5">Dolores sed duo clita justo dolor et stet lorem kasd dolore lorem ipsum. At lorem lorem magna ut et, nonumy labore diam erat. Erat dolor rebum sit ipsum.</p>
                            <hr class="mx-auto w-25">
                            <h4 class="text-white mb-0">Client Name</h4>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>