<!-- Email-Section
  ================================================== -->

  <div class="blue-section">
    <h3 class="blue-section-header bold"> Download FREE!</h3>
    <h4 class="blue-section-subtext light">Take it for a ride for any of your projects!</h4>

    <div class="email-form-div">
        <form id="email-form" class="form-group email-form" action="mailchimp.php" method="post">
            <input type="email" class="form-control email-input" name="email" id="newsletter-email-input"
                   placeholder="Enter your email">
            <button type="submit" class="btn submit-btn">Download</button>
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
