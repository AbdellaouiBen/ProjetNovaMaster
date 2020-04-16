
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


    </div> <!--features-container-->
</div> <!--features-section-->