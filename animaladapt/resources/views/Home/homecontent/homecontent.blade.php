@extends('Home.master')
@section('maincontent')
<section class="banner-area relative" id="home">
    <div class="container">
        <div class="overlay overlay-bg"></div>
        <div class="row fullscreen d-flex align-items-center justify-content-start">
            <div class="banner-content col-lg-8 col-md-12">
                <h1 class="text-uppercase">
                    Adopt Us. <br>
                    We need your help.		
                </h1>
                <p class="text-white sub-head">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp
                    or incididunt ut labore et dolore magna aliqua. Ut enim ad minim.
                </p>
                <a href="#" class="primary-btn header-btn text-uppercase">Find a pet to adopt</a>
            </div>											
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- Start image-carusel Area -->
<section class="image-carusel-area">
    <div class="container">
        <div class="row">
            <div class="active-image-carusel">
                <div class="single-image-carusel">
                    <img class="img-fluid" src="{{asset('public/home')}}/img/c1.jpg" alt="">
                </div>
                <div class="single-image-carusel">
                    <img class="img-fluid" src="{{asset('public/home')}}/img/c2.jpg" alt="">
                </div>
                <div class="single-image-carusel">
                    <img class="img-fluid" src="{{asset('public/home')}}/img/c3.jpg" alt="">
                </div>
                <div class="single-image-carusel">
                    <img class="img-fluid" src="{{asset('public/home')}}/img/c4.jpg" alt="">
                </div>	
                <div class="single-image-carusel">
                    <img class="img-fluid" src="{{asset('public/home')}}/img/c1.jpg" alt="">
                </div>
                <div class="single-image-carusel">
                    <img class="img-fluid" src="{{asset('public/home')}}/img/c2.jpg" alt="">
                </div>
                <div class="single-image-carusel">
                    <img class="img-fluid" src="{{asset('public/home')}}/img/c3.jpg" alt="">
                </div>
                <div class="single-image-carusel">
                    <img class="img-fluid" src="{{asset('public/home')}}/img/c4.jpg" alt="">
                </div>
                <div class="single-image-carusel">
                    <img class="img-fluid" src="{{asset('public/home')}}/img/c1.jpg" alt="">
                </div>
                <div class="single-image-carusel">
                    <img class="img-fluid" src="{{asset('public/home')}}/img/c2.jpg" alt="">
                </div>
                <div class="single-image-carusel">
                    <img class="img-fluid" src="{{asset('public/home')}}/img/c3.jpg" alt="">
                </div>
                <div class="single-image-carusel">
                    <img class="img-fluid" src="{{asset('public/home')}}/img/c4.jpg" alt="">
                </div>															
            </div>
        </div>
    </div>	
</section>
<!-- End image-carusel Area -->


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
                <a href="#" class="primary-btn text-uppercase">get details</a>
            </div>
        </div>
    </div>	
</section>
<!-- End home-about Area -->


<!-- Start video Area -->
<section class="video-area section-gap">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-8">
                <div class="about-video-right justify-content-center align-items-center d-flex relative">
                    <div class="overlay overlay-bg"></div>
                    <a class="play-btn" href="https://www.youtube.com/watch?v=ARA0AxrnHdM"><img class="img-fluid mx-auto" src="{{asset('home')}}/img/play-btn.png" alt=""></a>
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


<!-- Start process Area -->
<section class="process-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Process to adopt a pet</h1>
                    <p>Who are in extremely love with eco friendly system.</p>
                </div>
            </div>
        </div>					
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="single-process">
                    <span class="lnr lnr-thumbs-up"></span>
                    <a href="#">
                        <h4>
                            Pet Selection
                        </h4>
                    </a>
                    <p>
                        inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-process">
                    <span class="lnr lnr-user"></span>
                    <a href="#">
                        <h4>
                            Meeting Authority
                        </h4>
                    </a>
                    <p>
                        inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-process">
                    <span class="lnr lnr-license"></span>
                    <a href="#">
                        <h4>
                            Adoption Form Filling
                        </h4>
                    </a>
                    <p>
                        inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-process">
                    <span class="lnr lnr-magic-wand"></span>
                    <a href="#">
                        <h4>
                            Bring to new family
                        </h4>
                    </a>
                    <p>
                        inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct.
                    </p>
                </div>
            </div>																		
        </div>
    </div>	
</section>
<!-- End process Area -->


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

<!-- Start calltoaction Area -->
<section class="calltoaction-area section-gap relative">
    <div class="container">
        <div class="overlay overlay-bg"></div>						
        <div class="row align-items-center justify-content-center">
            <h1 class="text-white">Want to help? Become a Volunteer</h1>
            <p class="text-white">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.
            </p>
            <div class="buttons d-flex flex-row">
                <a href="#" class="primary-btn text-uppercase">View pdf details</a>
                <a href="#" class="primary-btn text-uppercase">Register now</a>
            </div>
        </div>
    </div>	
</section>

@endsection