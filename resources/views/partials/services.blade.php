
<!-- Features
  ================================================== -->

  <div id="services" class="features-section">

    <div class="features-container row ">
        <h2 class="features-headline light">FEATURES</h2>

    @foreach ($services as $service)
        
        <div class="col-sm-4 feature ">
            
            <div class="feature-icon feature-no-display">
                <img class="feature-img" src="{{asset('storage/'.$service->img)}}">
            </div>
            <h5 class="feature-head-text feature-no-display"> {{$service->titre}} </h5>
            <p class="feature-subtext light feature-no-display"> {{$service->description}}</p>
        </div>
    @endforeach

        {{-- <div class="col-sm-4 feature">
            <div class="feature-icon feature-no-display feature-display-mid">
                <img class="feature-img" src="{{asset('images/customizable.svg')}}">
            </div>
            <h5 class="feature-head-text feature-no-display feature-display-mid"> CUSTOMIZABLE </h5>
            <p class="feature-subtext light feature-no-display feature-display-mid"> Change the colors, pictures or any
                of the sections
                to suit your needs.</p>
        </div>

        <div class="col-sm-4 feature">
            <div class="feature-icon feature-no-display feature-display-last">
                <img class="bullet-img" src="{{asset('images/design.svg')}}">
            </div>
            <h5 class="feature-head-text feature-no-display feature-display-last"> SLICK AND BEAUTIFUL DESIGN </h5>
            <p class="feature-subtext light feature-no-display feature-display-last"> Trendy and fresh design, fits any
                website.</p>
        </div> --}}
    </div> <!--features-container-->
</div> <!--features-section-->