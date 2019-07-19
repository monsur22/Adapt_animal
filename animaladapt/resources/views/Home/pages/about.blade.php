@extends('Home.master')
@section('maincontent')
<section class="banner-area relative" id="home">	
        <div class="overlay overlay-bg"></div>
        <div class="container">				
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        About Us				
                    </h1>	
                    <p class="text-white link-nav"><a href="{{url('/')}}">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="#"> About Us</a></p>
                </div>	
            </div>
        </div>
    </section>
    <!-- End banner Area -->	

    <!-- Start video Area -->
    <section class="video-area pt-100">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-8">
                    <div class="about-video-right justify-content-center align-items-center d-flex relative">
                        <div class="overlay overlay-bg"></div>
                        <a class="play-btn" href="https://www.youtube.com/watch?v=ARA0AxrnHdM"><img class="img-fluid mx-auto" src="img/play-btn.png" alt=""></a>
                    </div>
                    <div class="description">
                        <h4>Watch this video how they live here</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.
                        </p>								
                    </div>
                </div>
            </div>
        </div>	
    </section>
    <!-- End video Area -->

    <!-- Start callto-top Area -->
    <section class="callto-top-area section-gap">
        <div class="container">
            <div class="row justify-content-between callto-top-wrap pt-40 pb-40">
                <div class="col-lg-8 callto-top-left">
                    <h1>Please select your favourite pet</h1>
                </div>
                <div class="col-lg-4 callto-top-right">
                    <a href="#" class="primary-btn">Fill Adoption Form</a>
                </div>							
            </div>
        </div>	
    </section>
    <!-- End callto-top Area -->

    <!-- Start home-about Area -->
    <section class="home-about-area">
        <div class="container-fluid">
            <div class="row align-items-center">	
                <div class="col-lg-6 home-about-left no-padding">
                    <img src="{{asset('public/home')}}/img/about-img.jpg" alt="">
                </div>
                <div class="col-lg-6 home-about-right no-padding">
                    <h1>
                        Globally Connected
                        by Large Network
                    </h1>
                    <h5>We are here to listen from you deliver exellence</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.
                    </p>
                    <a href="" class="primary-btn text-uppercase">get details</a>
                </div>
            </div>
        </div>	
    </section>
    <!-- End home-about Area -->

    <!-- Start testomial Area -->
    <section class="testomial-area section-gap" id="testimonail">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Testimonials from our guardians</h1>
                        <p>Who are in extremely love with eco friendly system.</p>
                    </div>
                </div>
            </div>						
            <div class="row">
                <div class="active-testimonial-carusel">
                    <div class="single-testimonial item">
                        <img class="mx-auto" src="{{asset('public/home')}}/img/t1.png" alt="">
                        <p class="desc">
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
                        </p>
                        <h4>Mark Alviro Wiens</h4>
                        <p>
                            CEO at Google
                        </p>
                    </div>
                    <div class="single-testimonial item">
                        <img class="mx-auto" src="{{asset('public/home')}}/img/t2.png" alt="">
                        <p class="desc">
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
                        </p>
                        <h4>Mark Alviro Wiens</h4>
                        <p>
                            CEO at Google
                        </p>
                    </div>
                    <div class="single-testimonial item">
                        <img class="mx-auto" src="{{asset('public/home')}}/img/t3.png" alt="">
                        <p class="desc">
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
                        </p>
                        <h4>Mark Alviro Wiens</h4>
                        <p>
                            CEO at Google
                        </p>
                    </div>	
                    <div class="single-testimonial item">
                        <img class="mx-auto" src="{{asset('public/home')}}/img/t1.png" alt="">
                        <p class="desc">
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
                        </p>
                        <h4>Mark Alviro Wiens</h4>
                        <p>
                            CEO at Google
                        </p>
                    </div>
                    <div class="single-testimonial item">
                        <img class="mx-auto" src="{{asset('public/home')}}/img/t2.png" alt="">
                        <p class="desc">
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
                        </p>
                        <h4>Mark Alviro Wiens</h4>
                        <p>
                            CEO at Google
                        </p>
                    </div>
                    <div class="single-testimonial item">
                        <img class="mx-auto" src="{{asset('public/home')}}/img/t3.png" alt="">
                        <p class="desc">
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
                        </p>
                        <h4>Mark Alviro Wiens</h4>
                        <p>
                            CEO at Google
                        </p>
                    </div>															
                    <div class="single-testimonial item">
                        <img class="mx-auto" src="{{asset('public/home')}}/img/t1.png" alt="">
                        <p class="desc">
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
                        </p>
                        <h4>Mark Alviro Wiens</h4>
                        <p>
                            CEO at Google
                        </p>
                    </div>
                    <div class="single-testimonial item">
                        <img class="mx-auto" src="{{asset('public/home')}}/img/t2.png" alt="">
                        <p class="desc">
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
                        </p>
                        <h4>Mark Alviro Wiens</h4>
                        <p>
                            CEO at Google
                        </p>
                    </div>
                    <div class="single-testimonial item">
                        <img class="mx-auto" src="{{asset('public/home')}}/img/t3.png" alt="">
                        <p class="desc">
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
                        </p>
                        <h4>Mark Alviro Wiens</h4>
                        <p>
                            CEO at Google
                        </p>
                    </div>														
                </div>
            </div>
        </div>	
    </section>
    <!-- End testomial Area -->				
@endsection