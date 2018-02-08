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
                                    <span>My Settings</span>
                                </li>
                            </ul>
                        </div>
                        <!-- END PAGE BAR -->
                        <!-- BEGIN PAGE TITLE-->
                        <h1 class="page-title"> <strong>Settings</strong>
                            <small>view & change settings</small>
                        </h1>
                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->
                        <!-- BEGIN DASHBOARD STATS 1-->
                        <div class="row">

                        </div>
                        <div class="clearfix"></div>
                        <!-- END DASHBOARD STATS 1-->
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                              <div class="tabbable-custom nav-justified">
                                            <ul class="nav nav-tabs nav-justified">
                                                <li class="active">
                                                    <a href="#general_tab" data-toggle="tab" aria-expanded="false"> General Settings </a>
                                                </li>
                                                <li class="">
                                                    <a href="#prefill_tab" data-toggle="tab" aria-expanded="false"> Pre-fill Settings </a>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="general_tab">
                                                  <form id="Generalsettings">
                                                    {{ csrf_field() }}
                                                     <p>General settings</p>
                                                     <div class="form-group">
                                                       <label>Avatar url:</label>
                                                       <div class="input-group">
                                                         <span class="input-group-addon">
                                                           <i class="fa fa-globe" style="width:13px;"></i>
                                                         </span>
                                                         <input type="text" class="form-control" placeholder="Avatar URL" value="{{ $avatar}}" id="avatar" name="avatar" required>
                                                       </div>
                                                     </div>
                                                       <div class="form-group">
                                                         <label>Dashboard theme:</label>
                                                       <div class="input-group">
                                                         <label class="mt-radio mt-radio-outline">
                                                           @if($theme == 'light')
                                                          <input type="radio" name="theme" value="light" checked=""> Light theme
                                                          @else
                                                          <input type="radio" name="theme" value="light"> Light theme
                                                          @endif
                                                          <span></span>
                                                          </label>
                                                          <br>
                                                          <label class="mt-radio mt-radio-outline">
                                                          @if($theme == 'dark')
                                                         <input type="radio" name="theme" value="dark" checked=""> Dark theme
                                                         @else
                                                         <input type="radio" name="theme" value="dark"> Dark theme
                                                         @endif
                                                          <span></span>
                                                          </label>
                                                       </div>
                                                     </div>
                                                     <button type="submit" id="GeneralBtn" class="btn btn-danger mt-ladda-btn ladda-button btn-circle" data-style="zoom-out">
                                                                          <span class="ladda-label">Save</span>
                                                                      <span class="ladda-spinner"></span></button>
                                                   </form>
                                                </div>
                                                <div class="tab-pane" id="prefill_tab">
                                                  <form id="Prefillsettings">
                                                    {{ csrf_field() }}
                                                     <p>Pre-fill settings for generators</p>
                                                     <div class="form-group">
                                                       <label>Full name:</label>
                                                       <div class="input-group">
                                                         <span class="input-group-addon">
                                                           <i class="fa fa-user" style="width:13px;"></i>
                                                         </span>
                                                         <input type="text" class="form-control" placeholder="Full Name" value="{{ $fullName }}" id="name" name="fullname" required>
                                                       </div>
                                                     </div>
                                                       <div class="form-group">
                                                         <label>Address:</label>
                                                       <div class="input-group">
                                                         <span class="input-group-addon">
                                                           <i class="fa fa-home"></i>
                                                         </span>
                                                         <input type="text" class="form-control" placeholder="Address" value="{{ $address }}" id="address" name="address" required>
                                                       </div>
                                                     </div>
                                                       <div class="form-group">
                                                         <label>City:</label>
                                                       <div class="input-group">
                                                         <span class="input-group-addon">
                                                           <i class="fa fa-home"></i>
                                                         </span>
                                                         <input type="text" class="form-control" placeholder="City" value="{{ $city }}" id="city" name="city" required>
                                                       </div>
                                                     </div>
                                                       <div class="form-group">
                                                         <label>Region:</label>
                                                       <div class="input-group">
                                                         <span class="input-group-addon">
                                                           <i class="fa fa-home"></i>
                                                         </span>
                                                         <input type="text" class="form-control" placeholder="Region" value="{{ $region }}" id="region" name="region" required>
                                                       </div>
                                                     </div>
                                                       <div class="form-group">
                                                         <label>ZIP Code:</label>
                                                       <div class="input-group">
                                                         <span class="input-group-addon">
                                                           <i class="fa fa-home"></i>
                                                         </span>
                                                         <input type="text" class="form-control" placeholder="ZIP Code" value="{{ $zip }}" id="zip" name="zip" required>
                                                       </div>
                                                     </div>
                                                       <div class="form-group">
                                                         <label>Country:</label>
                                                       <div class="input-group">
                                                         <span class="input-group-addon">
                                                           <i class="fa fa-globe" style="width:13px;"></i>
                                                         </span>
                                                         <input type="text" class="form-control" placeholder="Country" value="{{ $country }}" id="country" name="country" required>
                                                       </div>
                                                     </div>
                                                     <button type="submit" id="PrefillBtn" class="btn btn-danger mt-ladda-btn ladda-button btn-circle" data-style="zoom-out">
                                                                          <span class="ladda-label">Save</span>
                                                                      <span class="ladda-spinner"></span></button>
                                                   </form>
                                                </div>


                                            </div>
                                        </div>




                                <!-- BEGIN PORTLET-->
                                <!-- Begin InvoiceGen Form -->


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
$( document ).ready(function() {
  var l = Ladda.create( document.querySelector( '#PrefillBtn' ) );
  var ls = Ladda.create( document.querySelector( '#GeneralBtn' ) );
  $("#Prefillsettings").submit(function(e) {
    l.start();
      e.preventDefault(e);
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
  });


      var url = "{{ url('/profile/settings/save/prefill') }}"; // the script where you handle the form input.
      var name = $('#name').val();
      var address = $('#address').val();
      var city = $('#city').val();
      var region = $('#region').val();
      var zip = $('#zip').val();
      var country = $('#country').val();
      $.ajax({
             type: "POST",
             url: url,
             data: { name: name, address: address, city: city, region: region, zip: zip, country: country },
             success: function(data)
             {
                 //location.reload();
                 //alert(data);
                 setTimeout(function() {
          l.stop();
        }, 500);
             }
           });
  });


  $("#Generalsettings").submit(function(e) {
    ls.start();
      e.preventDefault(e);
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
  });


      var url = "{{ url('/profile/settings/save/general') }}"; // the script where you handle the form input.
      var avatar = $('#avatar').val();
      var theme = $('input[name=theme]:checked', '#Generalsettings').val()
      $.ajax({
             type: "POST",
             url: url,
             data: { avatar: avatar, theme: theme  },
             success: function(data)
             {
                 //location.reload();
                 //alert(data);
                 setTimeout(function() {
          ls.stop();
        }, 500);

             }
           });
  });

});

</script>
@endsection
