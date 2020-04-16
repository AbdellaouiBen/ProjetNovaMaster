
<!-- Pricing
  ================================================== -->
  <div id="pricing" class="pricing-background">

    <h2 class="pricing-section-header light text-center">CHOOSE YOUR PRICING PLAN</h2>
    <h4 class=" pricing-section-sub text-center light">Pick any of our super affordable pricing plans</h4>

    <div class="pricing-table row justify-content-center">
        @foreach ($pricings as $pricing)

        <div class="col-sm-4 ">
            <div class="mid-plan">
                <h3 class="plan-title light">{{$pricing->type}}</h3>
                <h4 class="plan-cost bold">{{$pricing->prix}}</h4>
                <h5 class="monthly">per month</h5>
                <ul class="plan-features">
                    <li>{{$pricing->avantageUn}}</li>
                    @if ($pricing->avantageDeux)
                        <li>{{$pricing->avantageDeux}}</li>
                    @endif
                    @if ($pricing->avantageTrois)
                        <li>{{$pricing->avantageTrois}}</li>
                    @endif
                    @if ($pricing->avantageQuatre)
                        <li>{{$pricing->avantageQuatre}}</li>
                    @endif 
    
                </ul>
                <div class="plan-price-div text-center">
                    <div class="choose-plan-div">

                        <a class="plan-btn light" href="{{route('pricing.download',$pricing)}}">
                            Download plan
                        </a>
                    </div>
                </div>
            </div><!--pro-plan--->
        </div><!--col-->
        @endforeach

    </div>  <!--pricing-table-->

</div><!--pricing-background-->
