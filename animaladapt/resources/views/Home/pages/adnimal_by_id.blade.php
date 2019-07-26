@extends('Home.master')
@section('maincontent')
<!-- start banner Area -->

<section class="banner-area relative" id="home">	
        <div class="overlay overlay-bg"></div>
        <div class="container">				
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Animal	Details			
                    </h1>	
                    <p class="text-white link-nav"><a href="{{url('/')}}">Home </a>  
                        {{-- <span class="lnr lnr-arrow-right"></span> 
                         @foreach ($animal_by_menu as $item) 
                        <a href="#"> {{$item->category_name}}</a>
                        @endforeach  --}}
                    </p>
                </div>	
            </div>
        </div>
    </section>
    <!-- End banner Area -->	
        
    <!-- Start cat-list Area -->
    <section class="cat-list-area section-gap">
        <div class="container">
            <div class="row">
                   
                    <div class="col-md-6" >
                        <div class="single-cat-list">
                   
                          <img src="{{asset($data->image)}}" alt="" class="img-fluid"style="height: 500px;width:500px">
                             
                        </div>
                    </div>
                    <div class="col-md-6" >
                     
                    <h3 class="product-title">{{$data->title}}</h3>
                                   
                    <p class="product-description">{{$data->description}}</p>
                                    <h4 class="price">Gender: <span>{{$data->gender}}</span></h4>
                                    <p class="vote"><b>Contact Information:</b> <strong> {{$data->address}}</strong></p>
                                    @foreach ($user as $item)
                                    @if ($data->user_id==$item->id)
                                    
                                    <p class="vote"><strong>Post By: {{$item->name}}</strong></p>
                                        
                                    @endif
                                    @endforeach
                                   
                                  
                                   
                                <div class="action">
                                <form action="{{url('/request-for-adapt')}}" method="post"enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="title"value="{{$data->title}}">
                                    <input type="hidden" name="post_id"value="{{$data->id}}">
                                    <input type="hidden" name="post_category"value="{{$data->category}}">
                                    <input type="hidden" name="post_image"value="{{$data->image}}">
                                    <input type="hidden" name="post_user_id"value="{{$data->user_id}}">
                                    <input type="hidden" name="post_address"value="{{$data->address}}">
                                    @if(Auth::check())
                                    <input class="primary-btn float-right" type="submit" name="submit" value="Adapt Request"> 
                                    @else
                                   <b class="btn-danger">!!For Send Adapt Request Log in First!!</b>
                                    
                                    @endif
                              
                                </form>
                                </div>
                                
                        </div>
             
               											
            </div>
        </div>	
    </section>      

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
                    <a href="{{url('/volunteer')}}" class="primary-btn text-uppercase">Register now</a>
                </div>
            </div>
        </div>	
    </section>
    <!-- End calltoaction Area -->				
@endsection