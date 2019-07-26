@extends('Home.master')
@section('maincontent')
<section class="banner-area relative" id="home">	
        <div class="overlay overlay-bg"></div>
        <div class="container">				
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Become a Volunteer				
                    </h1>	
                    <p class="text-white link-nav"><a href="{{url('/')}}">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="#"> Become a Volunteer</a></p>
                </div>	
            </div>
        </div>
    </section>
    <!-- End banner Area -->	
        
    <!-- Start Volunteer-form Area -->
    <section class="Volunteer-form-area section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-9">
                    <div class="title text-center">
                        <h1 class="mb-20">Want to help? Become a Volunteer</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                    </div>
                </div>
            </div>						
            <div class="row justify-content-center">
                <form class="col-lg-9"action="{{ url('/volunteer-add') }}" method="post" enctype="multipart/form-data">
                    @csrf
                  <div class="form-group">
                    <label for="first-name">First Name</label>
                    <input type="text" class="form-control" placeholder="First Name"name="first_name">
                  </div>
                  <div class="form-group">
                    <label for="last-name">Last Name</label>
                    <input type="text" class="form-control" placeholder="Last Name"name="last_name">
                  </div>
                  <div class="form-group">
                    <label for="last-name">Photos</label>
                    <input type="file" class="form-control"name="image" >
                  </div>						  
                  <div class="form-group">
                    <label for="Address">Address</label>
                 
                    <textarea class="form-control" id="" rows="3" placeholder="Your Address"name="address"></textarea>

                  </div>						  
                  <div class="form-row">
                     					  	
                      <div class="col-6 mb-30">
                          <label for="email">Email Address</label>
                           <input type="email" class="form-control" placeholder="Email Address"name="email">
                      </div>
                      <div class="col-6 mb-30">
                          <label for="phone">Phone Number</label>
                           <input type="number" class="form-control" placeholder="Phone Number"name="phone">						  		
                      </div>
                  </div>		

            
                  <div class="form-group">
                    <label for="note">Volunteer Note</label>
                    <textarea class="form-control" id="exampleTextarea" rows="5" placeholder="Write message"name="message"></textarea>
                  </div>						  
                  <button type="submit" class="primary-btn float-right">Send Request</button>
                </form>
            </div>
        </div>	
    </section>			
@endsection