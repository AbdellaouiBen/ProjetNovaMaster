<!-- Footer
  ================================================== -->

  <div class="footer">

    <div class="container">
        <div class="row" style="position: relative">


            
            @can('isConnected', App\User::class)
            <div style="" class="col-sm-2"></div>                
            @endcan         
            @cannot('isConnected', App\User::class)
            <a href="{{ route('login') }}"><div style="height: 10px" class="col-sm-2"></div></a>
            @endcannot



            <div class="col-sm-8 webscope">
                <span class="webscope-text"> A free template by </span>
                <a href="https://webscopeapp.com"> <img src="{{asset('storage/webscope.svg')}}."/> </a>
            </div>
            <!--webscope-->

            <div class="col-sm-2">
                <div class="social-links">
                    <a href="https://twitter.com/webscopeapp"> <img class="social-link"
                                                                    src="{{asset('storage/twitter.svg')}}"/> </a>
                    <a href="https://www.facebook.com/webscopeapp/?ref=aymt_homepage_panel"> <img
                            src="{{asset('storage/facebook.svg')}}"/> </a>
                </div>
                <!--social-links-->
            </div>
            <!--social-links-parent-->

        </div>
        <!--row-->

    </div>
    <!--container-->
</div>
<!--footer-->