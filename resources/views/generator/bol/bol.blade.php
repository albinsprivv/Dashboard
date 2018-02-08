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
                                    <span>bol</span>
                                    <i class="fa fa-circle"></i>
                                </li>
                                <li>
                                    <span><img src="<?php echo url('/'); ?>/global/img/flags/nl.png"></img> bol.com</span>
                                </li>
                            </ul>
                        </div>
                        <!-- END PAGE BAR -->
                        <!-- BEGIN PAGE TITLE-->
                        <h1 class="page-title"><img src="<?php echo url('/'); ?>/global/img/flags/nl.png"></img><strong> Bol</strong>
                            <small>Generate invoices for bol.com</small>
                        </h1>
                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->
                        <!-- BEGIN DASHBOARD STATS 1-->

                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <!-- BEGIN PORTLET-->
                                <!-- Begin InvoiceGen Form -->
                                <form action="<?php echo url('/');?>/generator/bol/invoice" method="POST">
                                   {{ csrf_field() }}
                                   <div class="form-group">
                                     <label>First Name:</label>
                                     <div class="input-group">
                                       <span class="input-group-addon">
                                         <i class="fa fa-user"></i>
                                       </span>
                                       <input type="text" class="form-control" placeholder="First Name" name="firstname" required>
                                     </div>
                                   </div>
                                   <div class="form-group">
                                     <label>Sur Name:</label>
                                     <div class="input-group">
                                       <span class="input-group-addon">
                                         <i class="fa fa-user"></i>
                                       </span>
                                       <input type="text" class="form-control" placeholder="Sur Name" name="surname" required>
                                     </div>
                                   </div>
                                   <div class="form-group">
                                     <label>Address:</label>
                                     <div class="input-group">
                                       <span class="input-group-addon">
                                         <i class="fa fa-home"></i>
                                       </span>
                                       <input type="text" class="form-control" placeholder="Address" name="address">
                                     </div>
                                   </div>
                                   <div class="form-group">
                                     <label>City:</label>
                                     <div class="input-group">
                                       <span class="input-group-addon">
                                         <i class="fa fa-home"></i>
                                       </span>
                                       <input type="text" class="form-control" placeholder="City" name="city" reuired>
                                     </div>
                                   </div>

                                   <div class="form-group">
                                     <label>ZIP Code:</label>
                                     <div class="input-group">
                                       <span class="input-group-addon">
                                         <i class="fa fa-home"></i>
                                       </span>
                                       <input type="text" class="form-control" placeholder="ZIP Code" name="zip" required>
                                     </div>
                                   </div>
                                   <div class="form-group">
                                     <label>Order Date:</label>
                                     <div class="input-group">
                                       <span class="input-group-addon">
                                         <i class="fa fa-globe"></i>
                                       </span>
                                       <input type="text" class="form-control" placeholder="Order Date" name="orderdate" required>
                                     </div>
                                   </div>
                                   <div class="form-group">
                                     <label>Return Expired:</label>
                                     <div class="input-group">
                                       <span class="input-group-addon">
                                         <i class="fa fa-cube"></i>
                                       </span>
                                       <input type="text" class="form-control" placeholder="Exp Date" name="expdate" required>
                                     </div>
                                   </div>


                                   <div class="form-group">
                                     <label>Customer Nr:</label>
                                     <div class="input-group">
                                       <span class="input-group-addon">
                                         <i class="fa fa-tag"></i>
                                       </span>
                                       <input type="text" class="form-control" placeholder="Customer Nr:" name="customernr" id="customernr" required>
                                       <span class="input-group-btn">
                                         <button type="button" class="btn btn-success" onclick="GenerateCustomerNr()">Random</button>
                                       </span>
                                     </div>
                                   </div>

                                   <div class="form-group">
                                     <label>Order Number:</label>
                                     <div class="input-group">
                                       <span class="input-group-addon">
                                         <i class="fa fa-tag"></i>
                                       </span>
                                       <input type="text" class="form-control" placeholder="Order Number" name="ordernr" id="ordernumber" required>
                                       <span class="input-group-btn">
                                         <button type="button" class="btn btn-success" onclick="GenerateOrderNr()">Random</button>
                                       </span>
                                     </div>
                                   </div>



                                   <div class="form-group">
                                     <label>Dispatch Date:</label>
                                     <div class="input-group">
                                       <span class="input-group-addon">
                                         <i class="fa fa-dollar"></i>
                                       </span>
                                       <input type="text" class="form-control" placeholder="Dispatch Date" name="dispatchdate" required>
                                     </div>
                                   </div>

                                   <div class="form-group">
                                     <label>Item ID:</label>
                                     <div class="input-group">
                                       <span class="input-group-addon">
                                         <i class="fa fa-dollar"></i>
                                       </span>
                                       <input type="text" class="form-control" placeholder="Item ID" name="itemid" required>
                                     </div>
                                   </div>

                                   <div class="form-group">
                                     <label>Item:</label>
                                     <div class="input-group">
                                       <span class="input-group-addon">
                                         <i class="fa fa-dollar"></i>
                                       </span>
                                       <input type="text" class="form-control" placeholder="Item" name="item" required>
                                     </div>
                                   </div>

                                   <div class="form-group">
                                     <label>Quantity:</label>
                                     <div class="input-group">
                                       <span class="input-group-addon">
                                         <i class="fa fa-tag"></i>
                                       </span>
                                       <input type="number" class="form-control" placeholder="Quantity" name="quantity" min="1" max="999" required>
                                     </div>
                                   </div>

                                   <div class="form-group">
                                     <label>Item Price:</label>
                                     <div class="input-group">
                                       <span class="input-group-addon">
                                         <i class="fa fa-dollar"></i>
                                       </span>
                                       <input type="text" class="form-control" placeholder="Item Price" name="price" required>
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
