@extends('Home.master')
@section('maincontent')
<!-- start banner Area -->
<section class="banner-area relative" id="home">	
        <div class="overlay overlay-bg"></div>
        <div class="container">				
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Cats				
                    </h1>	
                    <p class="text-white link-nav"><a href={{"url('/')"}}>Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href=""> Cats</a></p>
                </div>	
            </div>
        </div>
    </section>
    <!-- End banner Area -->	
        
    <!-- Start cat-list Area -->
    <section class="cat-list-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-cat-list">
                      <img src="{{asset('public/home')}}/img/ct1.jpg" alt="" class="img-fluid">
                      <div class="overlay">
                        <div class="text">Siamese Cat</div>
                      </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-cat-list">
                      <img src="{{asset('public/home')}}/img/ct2.jpg" alt="" class="img-fluid">
                      <div class="overlay">
                        <div class="text">Siamese Cat</div>
                      </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-cat-list">
                      <img src="{{asset('public/home')}}/img/ct3.jpg" alt="" class="img-fluid">
                      <div class="overlay">
                        <div class="text">Siamese Cat</div>
                      </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-cat-list">
                      <img src="{{asset('public/home')}}/img/ct4.jpg" alt="" class="img-fluid">
                      <div class="overlay">
                        <div class="text">Siamese Cat</div>
                      </div>
                    </div>
                </div>	
                <div class="col-lg-3 col-md-6">
                    <div class="single-cat-list">
                      <img src="{{asset('public/home')}}/img/ct5.jpg" alt="" class="img-fluid">
                      <div class="overlay">
                        <div class="text">Siamese Cat</div>
                      </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-cat-list">
                      <img src="{{asset('public/home')}}/img/ct6.jpg" alt="" class="img-fluid">
                      <div class="overlay">
                        <div class="text">Siamese Cat</div>
                      </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-cat-list">
                      <img src="{{asset('public/home')}}/img/ct7.jpg" alt="" class="img-fluid">
                      <div class="overlay">
                        <div class="text">Siamese Cat</div>
                      </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-cat-list">
                      <img src="{{asset('public/home')}}/img/ct8.jpg" alt="" class="img-fluid">
                      <div class="overlay">
                        <div class="text">Siamese Cat</div>
                      </div>
                    </div>
                </div>												
            </div>
        </div>	
    </section>
    <!-- End cat-list Area -->
            

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
                    <a href="" class="primary-btn text-uppercase">View pdf details</a>
                    <a href="{{url('/volunteer')}}" class="primary-btn text-uppercase">Register now</a>
                </div>
            </div>
        </div>	
    </section>
    <!-- End calltoaction Area -->				
@endsection