
<!-- Pricing
  ================================================== -->
  <div id="pricing" class="pricing-background">

    <h2 class="pricing-section-header light text-center">CHOOSE YOUR PRICING PLAN</h2>
    <h4 class=" pricing-section-sub text-center light">Pick any of our super affordable pricing plans</h4>

    <div class="pricing-table row justify-content-center">
        @foreach ($pricings as $pricing)

        <div class="col-sm-4 ">
            <div class="mid-plan">
                <h3 class="plan-title light">{{$pricing->type}}<</h3>
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
                        <a class="plan-btn light" href="#">
                            Get Started
                        </a>
                    </div>
                </div>
            </div><!--pro-plan--->
        </div><!--col-->
        @endforeach
{{-- 
        <div class="col-sm-4">
            <div class="mid-plan">
                <h3 class="plan-title light">AGENCY</h3>
                <h4 class="plan-cost bold">55</h4>
                <h5 class="monthly">per month</h5>
                <ul class="plan-features">
                    <li>Up to 25 Projects</li>
                    <li>2 Additional Developers</li>
                    <li>Unlimited Support</li>
                </ul>
                <div class="plan-price-div text-center">
                    <div class="choose-plan-div">
                        <a class="plan-btn light" href="#">
                            Get Started
                        </a>
                    </div>
                </div>
            </div><!--pro-plan--->
        </div><!--col-->

        <div class="col-sm-4">
            <div class="plan">
                <h3 class="plan-title light">PRO</h3>
                <h4 class="plan-cost bold">75</h4>
                <h5 class="monthly">per month</h5>
                <ul class="plan-features">
                    <li>Up to 25 Projects</li>
                    <li>2 Additional Developers</li>
                    <li>Unlimited Support</li>
                    <li>1.5GB Disk Space</li>
                </ul>
                <div class="plan-price-div text-center">
                    <div class="choose-plan-div">
                        <a class="plan-btn light" href="#">
                            Get Started
                        </a>
                    </div>
                </div>
            </div><!--pro-plan--->
        </div><!--col--> --}}

    </div>  <!--pricing-table-->

</div><!--pricing-background-->
