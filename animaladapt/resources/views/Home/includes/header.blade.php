<header id="header" id="home">
    <div class="container main-menu">
        <div class="row align-items-center justify-content-between d-flex">
          <div id="logo">
          <a href="{{url('/')}}"><img src="{{asset('public/home')}}/img/logo.png" alt="" title="" /></a>
          </div>
          <nav id="nav-menu-container">
            <ul class="nav-menu">
              <li class="menu-active"><a href="{{url('/')}}">Home</a></li>
        @foreach ($category as $item)
            <li><a href="{{url('/animal-by-menu/'.$item->id)}}">{{$item->category_name}}</a></li>
        @endforeach
       
              <li><a href="{{url('/volunteer')}}">Volunteer</a></li>
              <li><a href="{{url('/about')}}">About Us</a></li>
              <li><a href="{{url('/contact')}}">Contact</a></li>

        

        
                  
              
            @if (Auth::check() && Auth::user()->user_role == 'admin') 
                <li class="menu-has-children"><a class="form-control" href="{{url('/user')}}"style="color:black;">{{Auth::user()->name}}</a></a>
                  <ul>
                    <li><a class="form-control" href="{{url('/admin')}}"style="color:black;">My Account</a></li>
                  </ul>
              </li>
              <li>
                
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="form-control"type="submit">Logout</button>
                </form>	
                </li>
            
            @elseif (Auth::check() && Auth::user()->user_role == 'user') 
                  <li class="menu-has-children"><a class="form-control" href="{{url('/user')}}"style="color:black;">{{Auth::user()->name}}</a></a>
                      <ul>
                        <li><a class="form-control" href="{{url('/user')}}"style="color:black;">My Account</a></li>
                      </ul>
                  </li>
                  <li>
                  
                      <form method="POST" action="{{ route('logout') }}">
                          @csrf
                          <button class="form-control"type="submit">Logout</button>
                      </form>	
                  </li>
            
            @else
                <li><a class="form-control" href="{{url('/login')}}"style="color:black;">Login</a></li>
                <li><a class="form-control" href="{{url('/register')}}"style="color:black;">Registraiton</a></li>
            @endif
            

         

            </ul>
          </nav><!-- #nav-menu-container -->
      

          	    		
        </div>
    </div>
  </header><!-- #header -->