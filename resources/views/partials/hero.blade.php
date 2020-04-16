<!-- Navigation
    ================================================== -->
    <div class="hero-background">
        <div>
            <img class="strips" src="{{asset('storage/strips.png')}}">
        </div>
        <div class="container">
            <div class="header-container header">
                <a class="navbar-brand logo" href="#"> <img class="logo" src="{{asset('storage/logo.svg')}}"/> </a>
                {{-- <a href="#email-form">
                    <button class="header-btn"> Download FREE!</button>
                </a> --}}
                <div class="header-right">
                    <a class="navbar-item" href="#presentation">Presentation</a>
                    <a class="navbar-item" href="#services">Services</a>
                    <a class="navbar-item" href="#pricing">Pricing</a>
                    <a class="navbar-item" href="#team">The Team</a>
                    <a class="navbar-item" href="#newsletter">Newsletter</a>
                    @guest
        
                    @else
                        <a class="navbar-item" href="{{ route('home') }}">Dashboard</a>        
                        <a class="navbar-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }} of {{ Auth::user()->name }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                
                        
                    @endguest
                </div>
            </div>
            <!--navigation-->
    
    
            <!-- Hero-Section
              ================================================== -->
     
            <div class="hero row">
                <div class="hero-right col-sm-6 col-sm-6">
                    <h1 class="header-headline bold"> Beautiful Free Nova template <br></h1>
                    <h4 class="header-running-text light"> A top notch premium quality template for your next
                        web project.</h4>
                    {{-- <a href="#email-form">
                        <button class="hero-btn"> Download FREE!</button>
                    </a> --}} 
                </div><!--hero-left-->
    
                <div class="col-sm-6 col-sm-6 ipad">
                    <img class="ipad-screen img-responsive" src="{{asset('storage/screen.png')}}"/>
                </div>
    
                <div><img class="mouse" src="{{asset('storage/mouse.svg')}}"/></div>
    
            </div><!--hero-->
    
        </div> <!--hero-container-->
    
    </div><!--hero-background-->