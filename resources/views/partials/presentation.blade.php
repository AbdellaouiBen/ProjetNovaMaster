<!-- Logos
  ================================================== -->

  <div class="logos-section">
    <img class="logos" src="{{asset('images/logos.png')}}"/>
</div><!--logos-section-->

<!-- White-Section
  ================================================== -->

<div class="white-section row">

    <div class="imac col-sm-6">
        <img class="imac-screen img-responsive" src="{{asset('storage/'.$presentation->img)}}">
    </div>
    <!--imac-->

    <div class="col-sm-6">

        <div class="white-section-text">

            <h2 class="imac-section-header light">{{$presentation->titre}}</h2>

            <div class="imac-section-desc">

            <span>{{$presentation->text}}</span>
            </div>
        </div>
    </div>
</div><!--white-section-text-section--->