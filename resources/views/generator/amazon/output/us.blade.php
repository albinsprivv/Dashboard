<html>
   <head>
      <style type="text/css">
         .displayAddressDiv .displayAddressUL {
         list-style-type: none;
         padding: 0%;
         margin-left: 0%;
         margin-top: 0%;
         margin-bottom: 0%;
         text-align: left;
         vertical-align: top;
         }
         .displayAddressDiv .displayAddressLI {
         width: 100%;
         }
         .displayAddressDiv {
         vertical-align: top;
         padding-bottom: 0.5em;
         }
         .displayAddressDiv h2 {
         font-size: 1em;
         display: inline;
         }
         #chooseAddressDiv table {
         width: 100%;
         }
         #chooseAddressDiv td {
         vertical-align: top;
         }
         .enterAddressFieldLabel {
         text-align: right;
         }
         .enterAddressFieldICAMLabel {
         vertical-align: middle;
         max-width: 200px;
         }
         .enterAddressFieldICAMLong {
         width: 386px;
         }
         .enterAddressFieldICAMShort {
         width: 200px;
         }
         .enterAddressFormTable td {
         padding: 2px;
         }
         #enterAddressFormDiv input {
         text-align: left;
         }
         #enterAddressFormDiv select {
         text-align: left;
         overflow: auto;
         }
         div#enterAddressFormDiv {
         text-align: left;
         }
         .enterAddressFieldError {
         display: block;
         text-align: left;
         font-size: .8em;
         color: red;
         clear: both;
         }
         .enterAddressFieldWarning {
         display: block;
         text-align: left;
         font-size: .8em;
         color: #e77600;
         clear: both;
         }
         #enterAddressFormDiv .enterAddressFieldSeparatorDiv {
         clear: both;
         }
         .enterAddressFormInputError {
         border: 1px solid #990000;
         }
         #chooseAddressDiv .chooseAddressEditThisAddressButton {
         margin : 0em .5em;
         }
         #chooseAddressDiv .chooseAddressDeleteThisAddressButton {
         margin : 0em .5em;
         }
         #chooseAddressDiv .chooseAddressChooseThisAddressRadioButton {
         vertical-align: -4em;
         }
         #chooseAddressDiv .chooseAddressChooseThisAddressRadioButtonDiv {
         float : left;
         height: 100%;
         }
         #chooseAddressDiv td {
         width: 33%;
         }
         #chooseAddressDiv .chooseAddressSeparator {
         margin-top : 1em;
         }
         #deleteAddressDiv {
         color: #a00000;
         padding-left: 3em;
         }
         .enterDeliveryPrefsLabel {
         text-align: right;
         vertical-align: middle;
         }
         #deliveryPreferences {
         color: #E47911;
         text-decoration: none;
         }
         #learnMoreLink a {
         color: #004B91;
         text-decoration: none;
         }
         #learnMoreLink a:hover, #learnMoreLink a:active, #learnMoreLink a:hover span, #learnMoreLink a:active span {
         color: #E47911;
         text-decoration: underline;
         }
         #whatsThisLink a {
         color: #004B91;
         text-decoration: none;
         }
         #whatsThisLink a:hover, #whatsThisLink a:active, #whatsThisLink a:hover span, #whatsThisLink a:active span {
         color: #E47911;
         text-decoration: underline;
         }
      </style>
      <link href='https://images-na.ssl-images-amazon.com/images/G/01/nav2/gamma/websiteGlobalCSS/websiteGlobalCSS-websiteGlobal-10346._V1_.css' type='text/css' rel='stylesheet'>
      <style type="text/css">
         <!--
            .sans, .small, .h1, .h3color, .big, .tiny, .tinyprice, .highlight, .eyebrow,
                a:active, a:visited, a:link, div.unified_widget p.seeMore,
                div.unified_widget .carat, div.left_nav .carat, div.left_nav, div.left_nav
                h2, div.left_nav h3, div.left_nav a:link, div.left_nav a:visited,
                .popover-tiny, .horizontal-search, .horizontal-websearch, .topnav,
                .topnav-active a:link, .tabon a, .tabon a:visited, .taboff a, .taboff
                a:visited div.leftnav_popover h2, .signInMsg{
              font-family: verdana,arial,helvetica,sans-serif;
            }
            .listprice {
              font-family: arial,verdana,helvetica,sans-serif;
            }
            .price {
              font-family: arial,verdana,helvetica,sans-serif;
            }
            .serif, .sans, .h1, div.unified_widget .headline{
              font-size: medium;
            }
            .big {
              font-size: xx-large;
            }
            .small, .h3color, .highlight, .horizontal-search {
              font-size: small;
            }
            .signInMsg {
              font-size: x-small;
            }
            .tiny, .tinyprice, .popover-tiny, .horizontal-websearch {
              font-size: x-small;
            }
            body, td, th {
              font-family: verdana,arial,helvetica,sans-serif;
              font-size: small;
            }
            .eyebrowBackGroundColor {
              background-color: ;
            }
            div.left_nav, div.left_nav a:link, div.left_nav a:visited {
              font-family: Arial, sans-serif;
            }

            body {
              color: #000000;
              margin-top: 0px;
            }
            -->
      </style>
      <title>Amazon.com - Order {{ $order }}</title>
      <link type='text/css' href='https://images-na.ssl-images-amazon.com/images/G/01/browser-scripts/us-site-wide-css-beacon/site-wide-6800426958._V1_.css' rel='stylesheet'>
      <style type="text/css">
         /* non-sprited */
         .ap_popover_unsprited .ap_body   .ap_left   { background-image: url(https://images-na.ssl-images-amazon.com/images/G/01/javascripts/lib/popover/images/po_left_17._CB248144977_.png); }
         .ap_popover_unsprited .ap_body   .ap_right  { background-image: url(https://images-na.ssl-images-amazon.com/images/G/01/javascripts/lib/popover/images/po_right_17._CB248144979_.png); }
         .ap_popover_unsprited .ap_header .ap_left   { background-image: url(https://images-na.ssl-images-amazon.com/images/G/01/javascripts/lib/popover/images/po_top_left._CB265110087_.png); }
         .ap_popover_unsprited .ap_header .ap_right  { background-image: url(https://images-na.ssl-images-amazon.com/images/G/01/javascripts/lib/popover/images/po_top_right._CB265110087_.png); }
         .ap_popover_unsprited .ap_header .ap_middle { background-image: url(https://images-na.ssl-images-amazon.com/images/G/01/javascripts/lib/popover/images/po_top._CB265110086_.png); }
         .ap_popover_unsprited .ap_footer .ap_left   { background-image: url(https://images-na.ssl-images-amazon.com/images/G/01/javascripts/lib/popover/images/po_bottom_left._CB265110084_.png); }
         .ap_popover_unsprited .ap_footer .ap_right  { background-image: url(https://images-na.ssl-images-amazon.com/images/G/01/javascripts/lib/popover/images/po_bottom_right._CB265110087_.png); }
         .ap_popover_unsprited .ap_footer .ap_middle { background-image: url(https://images-na.ssl-images-amazon.com/images/G/01/javascripts/lib/popover/images/po_bottom._CB265110084_.png); }
         /* Everything else -- sprited */
         .ap_popover_sprited .ap_body .ap_left,
         .ap_popover_sprited .ap_body .ap_right {
         background-image: url(https://images-na.ssl-images-amazon.com/images/G/01/javascripts/lib/popover/images/light/sprite-v._CB219326283_.png);
         }
         .ap_popover_sprited .ap_header .ap_left,
         .ap_popover_sprited .ap_header .ap_right,
         .ap_popover_sprited .ap_header .ap_middle,
         .ap_popover_sprited .ap_footer .ap_left,
         .ap_popover_sprited .ap_footer .ap_right,
         .ap_popover_sprited .ap_footer .ap_middle,
         .ap_popover_sprited .ap_closebutton {
         background-image: url(https://images-na.ssl-images-amazon.com/images/G/01/javascripts/lib/popover/images/light/sprite-h._CB219326280_.png);
         }
         .ap_popover_sprited .ap_body .ap_right-arrow, .ap_popover_sprited .ap_body .ap_left-arrow {
         background-image: url(https://images-na.ssl-images-amazon.com/images/G/01/javascripts/lib/popover/images/light/sprite-arrow-v._CB219326286_.png);
         }
      </style>
      <!--  -->
      <link rel="stylesheet" href="https://images-na.ssl-images-amazon.com/images/I/61uoydiTrtL._RC|01h78L-cgLL.css,214FXNZASwL.css_.css#AUIClients/NavDesktopMetaAsset" />
      <!--  -->
   </head>
   <body>
      <img src="https://images-na.ssl-images-amazon.com/images/G/01/x-locale/common/amazon-logo-tiny._CB192256679_.gif" width="113" align="left" height="23" border="0" />
      <br />
      <br clear=\"all\" />
      <center>
         <b class="h1">
          Details for Order #{{ $order }}
         </b><br />
         <script>
            //works if JS is enabled
            document.write("<a href='#' onclick='javascript:window.print();'>Print this page for your records.</a>");
         </script>
      </center>
      <br />
      <table width="90%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center">
         <tr>
            <td>
               <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                     <td valign="top" align="left">
                        <b>
                        Order Placed:
                        </b>
                        {{ $orderdate }}
                     </td>
                  </tr>
                  <tr>
                     <td valign="top" align="left">
                        <b>Amazon.com order number:</b>
                        {{ $order }}
                     </td>
                  </tr>
                  <tr>
                     <td valign="top" align="left">
                        <b>Order Total:
                        $0,00</b>
                     </td>
                  </tr>
               </table>
               <br />
               <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#000000" align="center">
                  <tr bgcolor="#000000">
                     <td>
                        <table width="100%" border="0" cellspacing="3" cellpadding="0" align="center" bgcolor="#000000">
                           <tr bgcolor="#ffffff">
                              <td valign="top" colspan="2">
                                 <table width="100%" border="0" cellspacing="0" cellpadding="5">
                                    <tr bgcolor="#ffffff">
                                       <td>
                                          <b class="sans">
                                             <center>
                                                Shipped on {{ $dispatchdate }}
                                             </center>
                                          </b>
                                       </td>
                                    </tr>
                                 </table>
                              </td>
                           </tr>
                           <tr>
                              <td bgcolor="#ffffff" valign="top" colspan="2">
                                 <table width="100%" border="0" cellspacing="0" cellpadding="2">
                                    <tr valign="top">
                                       <td width="100%">
                                          <table border="0" cellspacing="0" cellpadding="2" align="right">
                                             <tr valign="top">
                                                <td align="right">
                                                   &nbsp;
                                                </td>
                                             </tr>
                                          </table>
                                          <table border="0" cellspacing="2" cellpadding="0" width="100%">
                                             <tr valign="top">
                                                <td valign="top">
                                                   <b>Items Ordered</b>
                                                </td>
                                                <td align="right" valign="top">
                                                   <b>Price</b>
                                                </td>
                                             </tr>
                                             <tr>
                                                <input type="hidden" name="qknmrwknlkmrpwqkmluso548601" value="1" />
                                                <td colspan="1" valign="top">
                                                   {{ $quantity }}
                                                   of:
                                                   <i>{{ $product }}</i><br />
                                                   <span class='tiny'>
                                                   Sold by: {!! $soldby !!}
                                                   <br />
                                                   <br />
                                                   Condition: New<br />
                                                   </span>
                                                </td>
                                                <td align="right" valign="top" colspan="2">
                                                   ${{ $price }}<br />
                                                </td>
                                             </tr>
                                          </table>
                                          <br />
                                       </td>
                                    </tr>
                                 </table>
                              </td>
                           </tr>
                           <tr>
                              <td bgcolor="#ffffff" valign="top" colspan="2">
                                 <table width="100%" border="0" cellspacing="0" cellpadding="2">
                                    <tr>
                                       <td>
                                          <b>
                                          Shipping Address:
                                          </b>
                                          <br />
                                          <div class="displayAddressDiv">
                                             <ul class="displayAddressUL">
                                                <li class="displayAddressLI displayAddressFullName"><span class="id-addr-ux-search-text">{{ $name }}</span></li>
                                                <li class="displayAddressLI displayAddressAddressLine1"><span class="id-addr-ux-search-text">{{ $address }}</span></li>
                                                <li class="displayAddressLI displayAddressAddressLine2"><span class="id-addr-ux-search-text">{{ $address2 }}</span></li>
                                                <li class="displayAddressLI displayAddressCityStateOrRegionPostalCode"><span class="id-addr-ux-search-text">{{ $city }}, {{ $region }} {{ $zip }}</span></li>
                                                <li class="displayAddressLI displayAddressCountryName"><span class="id-addr-ux-search-text">{{ $country }}</span></li>
                                             </ul>
                                          </div>
                                          <br /><b>
                                          Shipping Speed:
                                          </b>
                                          <br />
                                          Standard Shipping
                                          <br />
                                       </td>
                                       <td align="right">
                                          <table border="0" cellpadding="0" cellspacing="1">
                                             <tr valign="top">
                                                <td nowrap="nowrap" align="right">Item(s) Subtotal: </td>
                                                <td nowrap="nowrap" align="right" >${{ $subtotal }}</td>
                                             </tr>
                                             <tr valign="top">
                                                <td nowrap="nowrap" align="right">Shipping &amp; Handling:</td>
                                                <td nowrap="nowrap" align="right" >${{ number_format($shippingprice, 2, '.', ' ') }}</td>
                                             </tr>
                                             <tr valign="top">
                                                <td nowrap="nowrap" align="right">&nbsp;</td>
                                                <td nowrap="nowrap" align="right">-----</td>
                                             </tr>
                                             <tr valign="top">
                                                <td nowrap="nowrap" align="right">Total before tax:</td>
                                                <td nowrap="nowrap" align="right" >${{ $beforetax }}</td>
                                             </tr>
                                             <tr valign="top">
                                                <td nowrap="nowrap" align="right">Sales Tax:</td>
                                                <td nowrap="nowrap" align="right" >${{ $tax }}</td>
                                             </tr>
                                             <tr valign="top">
                                                <td nowrap="nowrap" align="right">Gift Card Amount:</td>
                                                <td nowrap="nowrap" align="right" >-${{ $total }}</td>
                                             </tr>
                                             <tr valign="top">
                                                <td nowrap="nowrap" align="right">&nbsp;</td>
                                                <td nowrap="nowrap" align="right">-----</td>
                                             </tr>
                                             <tr valign="top">
                                                <td nowrap="nowrap" align="right"><b>Total for This Shipment:</b></td>
                                                <td nowrap="nowrap" align="right" ><b>$0.00</b></td>
                                             </tr>
                                             <tr valign="top">
                                                <td nowrap="nowrap" align="right"><b>Total paid by Gift Card:</b></td>
                                                <td nowrap="nowrap" align="right" ><b>-${{ $total }}</b></td>
                                             </tr>
                                             <tr valign="top">
                                                <td nowrap="nowrap" align="right">&nbsp;</td>
                                                <td nowrap="nowrap" align="right">-----</td>
                                             </tr>
                                          </table>
                                       </td>
                                    </tr>
                                 </table>
                              </td>
                           </tr>
                        </table>
                     </td>
                  </tr>
               </table>
               <br />
               <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#000000" align="center">
                  <tr bgcolor="#000000">
                     <td>
                        <table width="100%" border="0" cellspacing="3" cellpadding="0" align="center" bgcolor="#000000">
                           <tr bgcolor="#ffffff">
                              <td valign="top" colspan="2">
                                 <table width="100%" border="0" cellspacing="0" cellpadding="5">
                                    <tr bgcolor="#ffffff">
                                       <td>
                                          <b class="sans">
                                             <center>Payment information</center>
                                          </b>
                                       </td>
                                    </tr>
                                 </table>
                              </td>
                           </tr>
                           <tr>
                              <td bgcolor="#ffffff" valign="top" colspan="2">
                                 <table width="100%" border="0" cellspacing="0" cellpadding="2">
                                    <tr valign="top">
                                       <td width="100%">
                                          <table border="0" cellspacing="0" cellpadding="2" align="right">
                                             <tr valign="top">
                                                <td align="right">
                                                   <table border="0" cellpadding="0" cellspacing="1">
                                                      <tr valign="top">
                                                         <td nowrap="nowrap" align="right">Item(s) Subtotal: </td>
                                                         <td nowrap="nowrap" align="right" >${{ $subtotal }}</td>
                                                      </tr>
                                                      <tr valign="top">
                                                         <td nowrap="nowrap" align="right">Shipping &amp; Handling:</td>
                                                         <td nowrap="nowrap" align="right" >${{ number_format($shippingprice, 2, '.', ' ') }}</td>
                                                      </tr>
                                                      <tr valign="top">
                                                         <td nowrap="nowrap" align="right">&nbsp;</td>
                                                         <td nowrap="nowrap" align="right">-----</td>
                                                      </tr>
                                                      <tr valign="top">
                                                         <td nowrap="nowrap" align="right">Total before tax:</td>
                                                         <td nowrap="nowrap" align="right" >${{ $beforetax }}</td>
                                                      </tr>
                                                      <tr valign="top">
                                                         <td nowrap="nowrap" align="right">Estimated tax to be collected:</td>
                                                         <td nowrap="nowrap" align="right" >${{ $tax }}</td>
                                                      </tr>
                                                      <tr valign="top">
                                                         <td nowrap="nowrap" align="right">Gift Card Amount:</td>
                                                         <td nowrap="nowrap" align="right" >-${{ $total }}</td>
                                                      </tr>
                                                      <tr valign="top">
                                                         <td nowrap="nowrap" align="right">&nbsp;</td>
                                                         <td nowrap="nowrap" align="right">-----</td>
                                                      </tr>
                                                      <tr valign="top">
                                                         <td nowrap="nowrap" align="right"><b>Grand Total:</b></td>
                                                         <td nowrap="nowrap" align="right" ><b>$0.00</b></td>
                                                      </tr>
                                                   </table>
                                                </td>
                                             </tr>
                                          </table>
                                          <b>Payment Method: </b>
                                          <br />
                                          Gift Card<br />
                                          <br />
                                          <b>Billing address</b>
                                          <div class="displayAddressDiv">
                                             <ul class="displayAddressUL">
                                                <li class="displayAddressLI displayAddressFullName"><span class="id-addr-ux-search-text">{{ $name }}</span></li>
                                                <li class="displayAddressLI displayAddressAddressLine1"><span class="id-addr-ux-search-text">{{ $address }}</span></li>
                                                <li class="displayAddressLI displayAddressAddressLine2"><span class="id-addr-ux-search-text">{{ $address2 }}</span></li>
                                                <li class="displayAddressLI displayAddressCityStateOrRegionPostalCode"><span class="id-addr-ux-search-text">{{ $city }}, {{ $region }} {{ $zip }}</span></li>
                                                <li class="displayAddressLI displayAddressCountryName"><span class="id-addr-ux-search-text">{{ $country }}</span></li>
                                             </ul>
                                          </div>
                                       </td>
                                    </tr>
                                 </table>
                              </td>
                           </tr>
                        </table>
                     </td>
                  </tr>
               </table>
            </td>
         </tr>
      </table>
      <center>
         <p>To view the status of your order, return to <a href="/gp/css/summary/edit.html?ie=UTF8&orderID=107-4579304-1360206">Order Summary</a>.</p>
         <p><b>Please note:</b> This is not a VAT invoice.</p>
      </center>
      <br />
      <center class="tiny">
         <a href="http://www.amazon.com/gp/help/customer/display.html?ie=UTF8&amp;nodeId=508088" rel="nofollow">Conditions of Use</a>
         |
         <a href="http://www.amazon.com/gp/help/customer/display.html?ie=UTF8&amp;nodeId=468496" rel="nofollow">Privacy Notice</a>
         &copy; 1996-2017, Amazon.com, Inc. or its affiliates
      </center>
      <div id='be' style='display:none;visibility:hidden;'>
         <form name='ue_backdetect'><input name='ue_back' value='1' type='hidden'></form>
         <a href='/gp/css/summary/print.html/ref=oh_aui_pi_o00_/uedata/nvp/unsticky/181-2383194-4262111/YourAccount/ntpoffrw?tepes=1&amp;id=V1HBM4XEBNWS5P4B5Z1V'>v</a>
         <noscript>
            <img src='/gp/css/summary/print.html/ref=oh_aui_pi_o00_/uedata/nvp/unsticky/181-2383194-4262111/YourAccount/ntpoffrw?noscript&amp;id=V1HBM4XEBNWS5P4B5Z1V&amp;pty=RCXYourAccount&amp;spty=DisplayInvoiceStatus&amp;pti=' />
            <img src='//fls-na.amazon.com/1/batch/1/OP/ATVPDKIKX0DER:181-2383194-4262111:V1HBM4XEBNWS5P4B5Z1V$uedata=s:%2Fgp%2Fcss%2Fsummary%2Fprint.html%2Fref%3Doh_aui_pi_o00_%2Fuedata%2Fnvp%2Funsticky%2F181-2383194-4262111%2FYourAccount%2Fntpoffrw%3Fnoscript%26id%3DV1HBM4XEBNWS5P4B5Z1V%26pty%3DRCXYourAccount%26spty%3DDisplayInvoiceStatus%26pti%3D:2000' />
         </noscript>
      </div>
   </body>
</html>
