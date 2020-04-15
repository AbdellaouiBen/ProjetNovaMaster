<!-- Email-Section
  ================================================== -->

  <div class="blue-section">
    <h3 class="blue-section-header bold"> Newsletter!</h3>
    <h4 class="blue-section-subtext light">Inscrivez vous pour recevoir nos nouvelles!</h4>

    <div class="email-form-div">
        <form id="newsletter" class="form-group email-form" action="{{route('newsletter.store')}}" method="post">
            @csrf
            <input type="text" class="form-control email-input" name="name" id="" placeholder="Enter your Name"> <br>
            <input type="email" class="form-control email-input" name="email" id="newsletter-email-input" placeholder="Enter your email">
            <button type="submit" class="btn submit-btn">S'inscrire</button>
            <div id="newsletter-spinner">
                <i class="fa fa-cog fa-spin" style="font-size:24px"></i>
            </div>
        </form>
    </div>
    <!--email-form-div-->

    <div id="newsletter-loading-div"></div>
    <!--email-form-->
</div>
<!--blue-section-->
