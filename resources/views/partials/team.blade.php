
<!-- Team
  ================================================== -->

  <div id="team" class="team">
    <h2 class="team-section-header light text-center">THE TEAM</h2>

    <div class="team-container row">

        @foreach ($teams as $team)
            <div class="col-sm-4 team-member">
                <img src="{{asset('storage/'.$team->img)}}">
                <div class="team-member-text">
                    <h4 class="team-member-position light">{{$team->job}}</h4>
                    <h5 class="bold">{{$team->full_name}}</h5>
                    <p class="light">{{$team->description}}</p>
                    @if ($team->twitter)
                        <a href="{{$team->twitter}}" target="_blank"><img class="team-social-icon" src="{{asset('images/team-twitter.svg')}}"></a>
                    @endif
                    @if ($team->facebook)
                        <a href="{{$team->facebook}}" target="_blank"><img class="team-social-icon" src="{{asset('images/team-facebook.svg')}}"></a>
                    @endif
                    @if ($team->googlePlus)
                        <a href="{{$team->googlePlus}}" target="_blank"><img class="team-social-icon" src="{{asset('images/team-google.svg')}}"></a>
                    @endif
                </div>
            </div>
        @endforeach
        
    

    </div> <!--team-container--->

</div> <!--team-section--->
