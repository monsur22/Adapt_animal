@extends('Home.master')
@section('maincontent')
<section class="banner-area relative" id="home">	
        <div class="overlay overlay-bg"></div>
        <div class="container">				
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Contact Us				
                    </h1>	
                    <p class="text-white link-nav"><a href="{{url('/')}}">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="#"> Contact Us</a></p>
                </div>	
            </div>
        </div>
    </section>
    <!-- End banner Area -->				  

    <!-- Start contact-page Area -->
    <section class="contact-page-area section-gap">
        <div class="container">
            <div class="row">
                <div class="map-wrap" style="width:100%; height: 445px;" id="map"></div>
                <div class="col-lg-4 d-flex flex-column address-wrap">
                    <div class="single-contact-address d-flex flex-row">
                        <div class="icon">
                            <span class="lnr lnr-home"></span>
                        </div>
                        <div class="contact-details">
                            <h5>Dhaka</h5>
                            <p>Bangladesh</p>
                        </div>
                    </div>
                    <div class="single-contact-address d-flex flex-row">
                        <div class="icon">
                            <span class="lnr lnr-phone-handset"></span>
                        </div>
                        <div class="contact-details">
                            <h5>123456789</h5>
                            <p>Mon to Fri 9am to 6 pm</p>
                        </div>
                    </div>
                    <div class="single-contact-address d-flex flex-row">
                        <div class="icon">
                            <span class="lnr lnr-envelope"></span>
                        </div>
                        <div class="contact-details">
                            <h5>support@gmail.com</h5>
                            <p>Send us your query anytime!</p>
                        </div>
                    </div>														
                </div>
                <div class="col-lg-8">
                        {{-- <form class="form-area " id="myForm" action="{{url('/contact/front')}}" method="post" class="contact-form text-right">
                            {{ csrf_field() }}
                        <div class="row">	
                          
                            <div class="col-lg-6 form-group">
                                <input name="name" placeholder="Enter your name"  required="" >
                            
                                <input name="email" placeholder="Enter email address" required="" >

                                <input name="subject" placeholder="Enter your subject"  required="" >
                            </div>
                            <div class="col-lg-6 form-group">
                                <textarea class="common-textarea form-control" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>						
                            </div>
                           
                            
                                <input class="primary-btn float-right" type="submit" name="submit" value="Send">	
                           
                        </div>
                    </form>	 --}}
                    <form action="{{url('/contact/front')}}"method="post">
                        @csrf
                        <fieldset class="form-group">
                                <input type="text" class="form-control" id="name"name="name" placeholder="Enter Name">
                            </fieldset>
                            <fieldset class="form-group">
                                <input type="email" class="form-control" id="email"name="email" placeholder="Enter email">
                            </fieldset>
                            <fieldset class="form-group">
                                    <input type="text" class="form-control" id="subject"name="subject" placeholder="Enter Subject">
                                </fieldset>
                            <fieldset class="form-group">
                                <textarea class="form-control" id="message" name="message"placeholder="Message"></textarea>
                            </fieldset>
                                <button type="submit" class="btn btn-secondary-outline btn-lg">Send</button>
                           
                    </form>
                </div>
            </div>
        </div>	
    </section>			
@endsection