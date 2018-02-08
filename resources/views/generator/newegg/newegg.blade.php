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
                                    <span>Newegg</span>
                                    <i class="fa fa-circle"></i>
                                </li>
                                <li>
                                    <span><img src="<?php echo url('/'); ?>/global/img/flags/us.png"></img> newegg.com</span>
                                </li>
                            </ul>
                        </div>
                        <!-- END PAGE BAR -->
                        <!-- BEGIN PAGE TITLE-->
                        <h1 class="page-title"><img src="<?php echo url('/'); ?>/global/img/flags/us.png"></img><strong> Newegg</strong>
                            <small>Generate invoices for newegg.com</small>
                        </h1>
                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->
                        <!-- BEGIN DASHBOARD STATS 1-->

                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <!-- BEGIN PORTLET-->
                                <!-- Begin InvoiceGen Form -->
                                <form action="<?php echo url('/');?>/generator/newegg/invoice" method="POST">
                                   {{ csrf_field() }}
                                   <div class="form-group">
                                     <label>Name:</label>
                                     <div class="input-group">
                                       <span class="input-group-addon">
                                         <i class="fa fa-user"></i>
                                       </span>
                                       <input type="text" class="form-control" placeholder="Name" name="name" required>
                                     </div>
                                   </div>
                                   <div class="form-group">
                                     <label>Address:</label>
                                     <div class="input-group">
                                       <span class="input-group-addon">
                                         <i class="fa fa-user"></i>
                                       </span>
                                       <input type="text" class="form-control" placeholder="Address" name="address" required>
                                     </div>
                                   </div>
                                   <div class="form-group">
                                     <label>Zip:</label>
                                     <div class="input-group">
                                       <span class="input-group-addon">
                                         <i class="fa fa-home"></i>
                                       </span>
                                       <input type="text" class="form-control" placeholder="ZIP Code" name="zip">
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
                                     <label>Region:</label>
                                     <div class="input-group">
                                       <span class="input-group-addon">
                                         <i class="fa fa-home"></i>
                                       </span>
                                       <input type="text" class="form-control" placeholder="Region" name="region" required>
                                     </div>
                                   </div>
                                   <div class="form-group">
                                     <label>Country:</label>
                                     <div class="input-group">
                                       <span class="input-group-addon">
                                         <i class="fa fa-globe"></i>
                                       </span>
                                       <input type="text" class="form-control" placeholder="Country" name="country" required>
                                     </div>
                                   </div>
                                   <div class="form-group">
                                     <label>Phone:</label>
                                     <div class="input-group">
                                       <span class="input-group-addon">
                                         <i class="fa fa-globe"></i>
                                       </span>
                                       <input type="text" class="form-control" placeholder="Phone" name="phone" required>
                                     </div>
                                   </div>

                                   <div class="form-group">
                                     <label>Order Number:</label>
                                     <div class="input-group">
                                       <span class="input-group-addon">
                                         <i class="fa fa-tag"></i>
                                       </span>
                                       <input type="text" class="form-control" placeholder="Order Number" name="ordernr" id="ordernr" required>
                                       <span class="input-group-btn">
                                         <button type="button" class="btn btn-success" onclick="NeweggOrderNr()">Random</button>
                                       </span>
                                     </div>
                                   </div>

                                   <div class="form-group">
                                     <label>Invoice Number:</label>
                                     <div class="input-group">
                                       <span class="input-group-addon">
                                         <i class="fa fa-tag"></i>
                                       </span>
                                       <input type="text" class="form-control" placeholder="Invoice Number" name="invoicenr" id="invoicenr" required>
                
                                     </div>
                                   </div>



                                   <div class="form-group">
                                     <label>Order Date:</label>
                                     <div class="input-group">
                                       <span class="input-group-addon">
                                         <i class="fa fa-dollar"></i>
                                       </span>
                                       <input type="text" class="form-control" placeholder="Order Date" name="orderdate" required>
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
                                     <label>Product Number:</label>
                                     <div class="input-group">
                                       <span class="input-group-addon">
                                         <i class="fa fa-dollar"></i>
                                       </span>
                                       <input type="text" class="form-control" placeholder="Product Number" name="productnr" required>
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

                                   <div class="form-group">
                                     <label>Tax:</label>
                                     <div class="input-group">
                                       <span class="input-group-addon">
                                         <i class="fa fa-dollar"></i>
                                       </span>
                                       <input type="text" class="form-control" placeholder="tax" name="tax" required>
                                     </div>
                                   </div>

                                   <div class="form-group">
                                     <label>Tracking:</label>
                                     <div class="input-group">
                                       <span class="input-group-addon">
                                         <i class="fa fa-dollar"></i>
                                       </span>
                                       <input type="text" class="form-control" placeholder="Tracking" name="tracking" required>
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
