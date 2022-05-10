@include('layouts.footer')
@include('layouts.header')

<section id="events" class="events">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Order</h2>
            <p>Order your favourite food</p>
        </div>


        <form action="{{route('ordering')}}" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
            @if(Session::has('success'))
                <div class="alert alert-success">{{Session::get('success')}}</div>
            @endif
            @if(Session::has('fail'))
                <div class="alert alert-danger">{{Session::get('fail')}}</div>
            @endif
            @csrf
                <div class="row">
                    <div class="col-lg-4 col-md-6 form-group">
                        <input type="text" name="food" class="form-control" id="name" placeholder="Food item" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                        <div class="validate"></div>
                    </div>

                    <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                        <input type="number" class="form-control" name="quantity" id="quantity" placeholder="how many do you like" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                        <div class="validate"></div>
                    </div>

                    <div class="text-center"><button type="submit" href="booked" >Submit</button></div>
                    <a>Register Here if not registered</a>
                    <a href="registration">Register</a>

                </div>
        </form>























{{--        <div class="events-slider swiper-container" data-aos="fade-up" data-aos-delay="100">--}}
{{--            <div class="swiper-wrapper">--}}

{{--                <div class="swiper-slide">--}}
{{--                    <div class="row event-item">--}}
{{--                        <div class="col-lg-6">--}}
{{--                            <img src="assets/img/event-birthday.jpg" class="img-fluid" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-6 pt-4 pt-lg-0 content">--}}
{{--                            <h3>Birthday Parties</h3>--}}
{{--                            <div class="price">--}}
{{--                                <p><span>$189</span></p>--}}
{{--                            </div>--}}
{{--                            <p class="fst-italic">--}}
{{--                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore--}}
{{--                                magna aliqua.--}}
{{--                            </p>--}}
{{--                            <ul>--}}
{{--                                <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>--}}
{{--                                <li><i class="bi bi-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>--}}
{{--                                <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>--}}
{{--                            </ul>--}}
{{--                            <p>--}}
{{--                                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate--}}
{{--                                velit esse cillum dolore eu fugiat nulla pariatur--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div><!-- End testimonial item -->--}}

{{--                <div class="swiper-slide">--}}
{{--                    <div class="row event-item">--}}
{{--                        <div class="col-lg-6">--}}
{{--                            <img src="assets/img/event-private.jpg" class="img-fluid" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-6 pt-4 pt-lg-0 content">--}}
{{--                            <h3>Private Parties</h3>--}}
{{--                            <div class="price">--}}
{{--                                <p><span>$290</span></p>--}}
{{--                            </div>--}}
{{--                            <p class="fst-italic">--}}
{{--                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore--}}
{{--                                magna aliqua.--}}
{{--                            </p>--}}
{{--                            <ul>--}}
{{--                                <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>--}}
{{--                                <li><i class="bi bi-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>--}}
{{--                                <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>--}}
{{--                            </ul>--}}
{{--                            <p>--}}
{{--                                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate--}}
{{--                                velit esse cillum dolore eu fugiat nulla pariatur--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div><!-- End testimonial item -->--}}

{{--                <div class="swiper-slide">--}}
{{--                    <div class="row event-item">--}}
{{--                        <div class="col-lg-6">--}}
{{--                            <img src="assets/img/event-custom.jpg" class="img-fluid" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-6 pt-4 pt-lg-0 content">--}}
{{--                            <h3>Custom Parties</h3>--}}
{{--                            <div class="price">--}}
{{--                                <p><span>$99</span></p>--}}
{{--                            </div>--}}
{{--                            <p class="fst-italic">--}}
{{--                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore--}}
{{--                                magna aliqua.--}}
{{--                            </p>--}}
{{--                            <ul>--}}
{{--                                <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>--}}
{{--                                <li><i class="bi bi-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>--}}
{{--                                <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>--}}
{{--                            </ul>--}}
{{--                            <p>--}}
{{--                                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate--}}
{{--                                velit esse cillum dolore eu fugiat nulla pariatur--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div><!-- End testimonial item -->--}}

{{--            </div>--}}
{{--            <div class="swiper-pagination"></div>--}}
{{--        </div>--}}

    </div>
</section><!-- End Events Section -->

