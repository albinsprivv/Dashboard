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
                                    <a href="index.html">Home</a>
                                    <i class="fa fa-circle"></i>
                                </li>
                                <li>
                                    <span>Amazon</span>
                                    <i class="fa fa-circle"></i>
                                </li>
                                <li>
                                    <span><img src="<?php echo url('/'); ?>/global/img/flags/it.png"></img> Amazon.it</span>
                                </li>
                            </ul>
                        </div>
                        <!-- END PAGE BAR -->
                        <!-- BEGIN PAGE TITLE-->
                        <h1 class="page-title"><img src="<?php echo url('/'); ?>/global/img/flags/it.png"></img><strong> Amazon</strong>
                            <small>invoice generator</small>
                        </h1>
                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->
                        <!-- BEGIN DASHBOARD STATS 1-->

                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <!-- BEGIN PORTLET-->
                                <!-- Begin InvoiceGen Form -->
                                @if(isset($fullName) AND Auth::user()->is_premium OR Auth::user()->is_admin)
                                <button type="button" id="prefillBtn" class="btn btn-success mt-ladda-btn ladda-button" data-style="zoom-out">
                                                     <span class="ladda-label">Pre-fill fields</span>
                                                 <span class="ladda-spinner"></span></button>
                                                 <button type="button" id="resetBtn" class="btn btn-danger mt-ladda-btn ladda-button" data-style="zoom-out">
                                                                      <span class="ladda-label">Reset fields</span>
                                                                  <span class="ladda-spinner"></span></button>
                                                 <br /><br />
                                @endif
                                <form action="<?php echo url('/');?>/generator/amazon/it/invoice" method="POST">
                                   {{ csrf_field() }}
                                <div class="form-group">
                                  <label>Full Name:</label>
                                  <div class="input-group">
                                    <span class="input-group-addon">
                                      <i class="fa fa-envelope"></i>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Full Name" name="name">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label>Address:</label>
                                  <div class="input-group">
                                    <span class="input-group-addon">
                                      <i class="fa fa-envelope"></i>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Address" name="address">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label>Address 2:</label>
                                  <div class="input-group">
                                    <span class="input-group-addon">
                                      <i class="fa fa-envelope"></i>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Address 2" name="address2">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label>City:</label>
                                  <div class="input-group">
                                    <span class="input-group-addon">
                                      <i class="fa fa-envelope"></i>
                                    </span>
                                    <input type="text" class="form-control" placeholder="City" name="city">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label>State:</label>
                                  <div class="input-group">
                                    <span class="input-group-addon">
                                      <i class="fa fa-envelope"></i>
                                    </span>
                                    <input type="text" class="form-control" placeholder="State" name="region">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label>ZIP Code:</label>
                                  <div class="input-group">
                                    <span class="input-group-addon">
                                      <i class="fa fa-envelope"></i>
                                    </span>
                                    <input type="text" class="form-control" placeholder="ZIP Code" name="zip">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label>Country:</label>
                                  <div class="input-group">
                                    <span class="input-group-addon">
                                      <i class="fa fa-envelope"></i>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Country" name="country">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label>Item Name:</label>
                                  <div class="input-group">
                                    <span class="input-group-addon">
                                      <i class="fa fa-envelope"></i>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Item Name" name="product">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label>Order #:</label>
                                  <div class="input-group">
                                    <span class="input-group-addon">
                                      <i class="fa fa-envelope"></i>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Order Number" name="order" id="ordernumber">
                                    <span class="input-group-btn">
                                      <button type="button" class="btn btn-success" onclick="GetRandom()">Random</button>
                                    </span>
                                  </div>
                                </div>
                                <!--This part has to be changed to Date Picker Later-->
                                <div class="form-group">
                                  <label>Order Date:</label>
                                  <div class="input-group">
                                    <span class="input-group-addon">
                                      <i class="fa fa-envelope"></i>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Order Date" name="orderdate">
                                  </div>
                                </div>
                                <!--End this part-->
                                <div class="form-group">
                                  <label>Quantity:</label>
                                  <div class="input-group">
                                    <span class="input-group-addon">
                                      <i class="fa fa-envelope"></i>
                                    </span>
                                    <input type="number" class="form-control" placeholder="Quantity" name="quantity" min="1" max="999">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label>Item Price:</label>
                                  <div class="input-group">
                                    <span class="input-group-addon">
                                      <i class="fa fa-envelope"></i>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Item Price" name="price">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label>Tax:</label>
                                  <div class="input-group">
                                    <span class="input-group-addon">
                                      <i class="fa fa-envelope"></i>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Tax" name="tax">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label>Shipping Cost:</label>
                                  <div class="input-group">
                                    <span class="input-group-addon">
                                      <i class="fa fa-envelope"></i>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Shipping Cost" name="shippingprice">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label>Seller:</label>
                                  <div class="input-group">
                                    <span class="input-group-addon">
                                      <i class="fa fa-envelope"></i>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Seller" name="soldby">
                                  </div>
                                </div>




                                  <button type="submit" class="btn btn-success">Generate</button>
                              </form>
                                     <!-- End InvoiceGen Form -->
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
@if(isset($fullName))
<script>
$( document ).ready(function() {
  var l = Ladda.create( document.querySelector( '#prefillBtn' ) );
  var ls = Ladda.create( document.querySelector( '#resetBtn' ) );
  $("#prefillBtn").click(function() {
    l.start();
      var fullName = '{{ $fullName}}';
      var address = '{{ $address }}';
      var city = '{{ $city }}';
      var region = '{{ $region }}';
      var zip = '{{ $zip }}';
      var country = '{{ $country }}';
      setTimeout(function() {
            $('input[name=name]').val(fullName);
            $('input[name=address]').val(address);
            $('input[name=city]').val(city);
            $('input[name=region]').val(region);
            $('input[name=zip]').val(zip);
            $('input[name=country]').val(country);
          l.stop();
        }, 500);

           });

           $("#resetBtn").click(function() {
             ls.start();
               setTimeout(function() {
                     $('input[name=name]').val('');
                     $('input[name=address]').val('');
                     $('input[name=city]').val('');
                     $('input[name=region]').val('');
                     $('input[name=zip]').val('');
                     $('input[name=country]').val('');
                   ls.stop();
                 }, 500);

                    });
         });
</script>
@endif
@endsection
