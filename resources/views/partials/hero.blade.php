<!-- Navigation
    ================================================== -->
    <div class="hero-background">
        <div>
            <img class="strips" src="{{asset('images/strips.png')}}">
        </div>
        <div class="container">
            <div class="header-container header">
                <a class="navbar-brand logo" href="#"> <img class="logo" src="{{asset('images/logo.svg')}}"/> </a>
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
                        <a class="navbar-item" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                        <a class="navbar-item" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    @else
                    <a class="navbar-item" href="{{ route('home') }}">Dashboard</a>

                    <a id="navbarDropdown"  class="navbar-item dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                            <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        
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
                    <img class="ipad-screen img-responsive" src="{{asset('images/screen.png')}}"/>
                </div>
    
                <div><img class="mouse" src="{{asset('images/mouse.svg')}}"/></div>
    
            </div><!--hero-->
    
        </div> <!--hero-container-->
    
    </div><!--hero-background-->