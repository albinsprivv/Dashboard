@extends('layouts.app')
@include('layouts.navigation')
@section('content')
                <!-- BEGIN CONTENT -->
                <div class="page-content-wrapper">
                    <!-- BEGIN CONTENT BODY -->
                    <div class="page-content">
                        <!-- BEGIN PAGE HEADER-->

                        <!-- BEGIN PAGE BAR -->
                        <div class="page-bar">
                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="<?php echo url('/'); ?>/home">Home</a>
                                    <i class="fa fa-circle"></i>
                                </li>
                                <li>
                                    <span>Currency Conversion</span>
                                </li>
                            </ul>
                        </div>
                        <!-- END PAGE BAR -->
                        <h1 class="page-title"> BTC to USD</strong>
                            <small>live currency conversion</small>
                        </h1>
                        <!-- END PAGE HEADER-->
                        <!-- BEGIN DASHBOARD STATS 1-->
                        <div class="row">

                        </div>
                        <div class="clearfix"></div>
                        <!-- END DASHBOARD STATS 1-->
                        <div class="row">
                            <div class="col-md-12">
                                <!-- BEGIN PORTLET-->
                                <h4 class="text-center">
                                  1 BTC = <i class="fa fa-dollar" style="color:#27ae60;"></i> <span id="btcPrice">{{ $BitcoinValue }}</span>
                                <span style="font-size:16px;">(updated every 3 seconds)</span></h2>
                                <br />
                                <label>The converted amount will be displayed as soon as you start entering Bitcoin (BTC) amount.</label>
                                <br>
                                </br>
                                <div class="form-group">
                                <div class="input-group col-md-4">
                                  <span class="input-group-addon">
                                    <i class="fa fa-bitcoin"></i>
                                  </span>
                                  <input type="text" class="form-control" id="BTC" placeholder="BTC" name="BTC">

                                </div>
                              </div>
                              <div class="form-group">
                              <div class="input-group col-md-4">
                                <span class="input-group-addon">
                                  <i class="fa fa-dollar"></i>
                                </span>
                                <input type="text" class="form-control" id="USD" placeholder="USD" name="USD" disabled>

                              </div>
                            </div>
                                            <!-- .events-content -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->
            </div>
            <!-- END CONTAINER -->
        </div>
@endsection

@section('customjavascript')
<script>

window.onload = function() {
    function GetBitcoinValue() {
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function()
      {
          if (this.readyState == 4 && this.status == 200)
          {
              document.getElementById("btcPrice").innerHTML = this.responseText;
          }};
      xhttp.open( "GET", "<?php echo url('/tools/btc-to-usd/value') ?>" , true );
      xhttp.send();
      }

      // credits for script to:
      // https://stackoverflow.com/questions/4220126/run-javascript-function-when-user-finishes-typing-instead-of-on-key-up
      var typingTimer;
      var doneTypingInterval = 500;
      var $input = $('#BTC');
      //on keyup, start the countdown
      $input.on('keyup', function () {
        clearTimeout(typingTimer);
        typingTimer = setTimeout(doneTyping, doneTypingInterval);
      });
      //on keydown, clear the countdown
      $input.on('keydown', function () {
        clearTimeout(typingTimer);
      });
      // end credits
      function doneTyping() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function()
        {
            if (this.readyState == 4 && this.status == 200)
            {
                $('#USD').attr("placeholder", this.responseText);
            }};
            var link = $('#BTC').val()
            console.log("<?php echo url('/tools/btc-to-usd/value') ?>/" + link);
        xhttp.open( "GET", "<?php echo url('/tools/btc-to-usd/value') ?>/" + link , true );
        if ( link > 0 ) {
          xhttp.send();
        } else {
          $('#USD').attr("placeholder", "USD");
        }
      };

    setInterval(GetBitcoinValue, 3000);
}

</script>
@endsection
