
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Newegg.com - Once You Know, You Newegg</title>
<style type="text/css">
body,td{font-size:75%;font-family:verdana,arial;}
table{border-top:1px solid #333;border-right:1px solid #333;border-left:0;border-bottom:0;width:100%;}
td{border-left:1px solid #333;border-bottom:1px solid #333;border-top:0;border-right:0;}
img{border:0;}
dl,dd,dt{margin:0;padding:0;}
h5{font-size:1.2em;margin:0.3em 0;padding:0;}
div{display:block;}
td{padding:2px;}
.printFriendlyButton,.printHidden{display:none;}
#disclaimer{text-align:center;}
.terms{margin:0 1em;padding:5px;}
.halfL{float:left;width:49.5%;}
.halfR{float:right;width:49.5%;}
.alignHeight{height:11em;}
fieldset{margin:8px 0;padding:0 8px;}
.full{clear:both;}
.infoSection{padding:0.5em 0;}
.cartSum thead td{text-align:left;font-weight:bold;}
.cartSum td{text-align:right;}
.cartSum td.qty{text-align:center;}
.cartSum tr.subHead td{text-align:left;font-weight:bold;}
.prodDesc{text-align:left;}
.optCheckbox{display:none;}
#policyContent{font-size:85%;}
legend{font-weight:bold;font-size:1.3em;}
.creditCardLogo{display:none;}
@media print{.printButton{display:none;} .creditCardLogo{display:none;}}
</style>

<style type="text/css">
#orderInfo dl dt{float:left;width:15em;}
#preOrderInfo dl dt{float:left;width:10em;}
.orderOptions {display:none;}
.printDetails {display:none;}
.prodDesc img {border: 1px solid #CCCCCC;display: block;float: left;margin-right: 10px;}
.prodDesc .prodInfo {display:block;}
.fll {display:none;}
.subtotal .priceRow { font-weight:bold;}
.ListTitle {display:none;}
.alignHeight{height:14em;}
fieldset p {word-wrap:break-word;max-width:1200px;}
#remitInfo_in{margin:10px 0;padding:10px;}
#remitInfo_in p{margin:0px; color:#da6506; font-weight:bold;}
fieldset {margin:8px 15px 24px;padding:15px 10px 10px;position:relative;text-align:left;border:1px solid #999;}
table{border-top:1px solid #999;border-right:1px solid #999;}
td{border-left:1px solid #999;border-bottom:1px solid #999;}
#trackingRow{word-break : break-all;max-width:1200px;}
#summary .cartSum .prodDesc .gift-message{width:80%;padding:10px;word-break:normal;word-wrap:break-word;}
.message-information-justforprint{border:1px solid #999;padding:10px;margin-bottom: 10px;}
.icon-newegg-flash:before {content: 'NeweggFlash'}
.wrapper-icon{float: right;text-align: right;}
.wrapper-icon a{ text-decoration: none;}
#disclaimer2015 {text-align:center}
.amex-pwp-message {margin-top: 5px;padding: 9px;padding-left: 4px;border: solid 1px #ababab}
.amex-pwp-message img{display:inline-block;float:left}
#orders .amex-pwp-message p,.amex-pwp-message p{margin:0 0 0 60px;padding:0;font-size:14px}
.amex-rewards-color{color:#3F9C35}
</style>
</head>
<body>
<script type="text/javascript">
var Biz={};Biz['NewMyAccount']={};Biz['NewMyAccount']['Order']={};
Biz.NewMyAccount.Order.detailToggle=function(){};
Biz.NewMyAccount.Order.initGoupChecker=function(){};
Biz.NewMyAccount.Order.initGoupCheckerByForm=function(){};
</script>
<div id="checkOut"><input style="float:right;" type="button" name="Print" class="printButton" value="Print" onclick="window.print();">

	    <div class="cartTitle"><h5>INVOICE DETAILS</h5></div>
        <div id="orderInfo">
		    <dl>



			<dt>Order #:</dt><dd>{{ $ordernr }}</dd>







		<dt>Invoice #:</dt><dd>{{ $invoicenr }}</dd>






				<dt>Submitted:</dt><dd>{{ $orderdate }}</dd>




		    </dl>
	    </div>






        <div class="orderOptions">


            <div class="wrapper-invoice" style=" margin-left: -15px;">
                <div class="messages message-promo-membership" style="width:90%;text-align:left">
			        <div class="message message-promo" style="margin:0px;">
				        <div class="message-wrapper">
					        <div class="message-icon"></div>
					        <div class="message-information"><span class="message-title">YOU HAVE SAVED $0.99 ON SHIPPING WITH YOUR ORDER TODAY BY BEING A NEWEGG PREMIER MEMBER.   </span></div>
				        </div>
			        </div>
		        </div>

                <a href="javascript:Biz.NewMyAccount.Order.printFriendlyByForm(true, false, true, false, 0);" class="btnOn">Print</a>

            </div>



        </div>




			<div class="halfL">
				<fieldset class="alignHeight ship clean">
					<legend>Ship To</legend>
					{{ $name }}<br>{{ $address }}<br>{{ $city }},{{ $region }} {{ $zip }}<br>{{ $country}}<br><br>{{ $phone }}<br>
				</fieldset>
			</div>
			<div class="halfR">
				<fieldset class="alignHeight bill clean">
					<legend>Bill To</legend>
					{{ $name }}<br>{{ $address }}<br>{{ $city }},{{ $region }} {{ $zip }}<br><br>Visa:************{{ $digit }}<br>
				</fieldset>
			</div>


        <fieldset class="full clean" id="summary">
            <div id="needlessJS"></div>
            <legend>Order Summary</legend>
            <div class="message-information-justforprint"><span class="message-title">YOU HAVE SAVED $0.99 ON SHIPPING WITH YOUR ORDER TODAY BY BEING A NEWEGG PREMIER MEMBER.</span></div>
            <table class="cartSum" cellspacing="0" cellpadding="0" border="1">
                <thead>
                    <tr>
                        <td width="6%">Qty</td>
                        <td colspan="2">Product Description</td>
                        <td class="panelRight">Price</td>
                    </tr>
                </thead>














                        <tbody>




			<tr class="subHead"><td colspan="4" id="trackingRow">Shipped from  NJ, USA - Tracking #: <a target="_blank">{{ $tracking }}</a>&nbsp;</td></tr>



                        <tr>
                            <td class="qty">
                                {{ $quantity }}</td>
                            <td colspan="2">

                                <dl class="prodDesc">
                                    <dd><a target="_blank" name="CART_ITEM">{{ $product }}</a></dd><dd>Item #:&nbsp;{{ $productnr }}</dd><dd><a>Standard Return Policy</a></dd>
                                    <dd>
                                    </dd>
                                </dl>
                            </td>
                            <td class="money">
                                ${{ $price }}<br>
                            </td>
                        </tr>




                <tr class="subtotal">    <td colspan="3" class="priceRow">Subtotal</td>    <td class="panelRight">${{ $subtotal }}</td></tr><tr class="noTop">    <td colspan="3" class="priceRow">Tax</td>    <td class="panelRight">${{ $tax }}</td></tr><tr class="noTop">    <td colspan="3" class="priceRow">Newegg 3Day</td>    <td class="panelRight">$0.99</td></tr><tr class="noTop">    <td colspan="3" class="priceRow">Shipping Adjustment</td>    <td class="panelRight">-$0.99</td></tr><tr class="noTop">    <td colspan="3" class="priceRow">Order Total</td>    <td class="panelRight">${{ $total }}</td></tr>
            </tbody></table>

        </fieldset>
		<input name="SONumber" value="XXXXXXXXX" type="hidden">



   <fieldset class="full clean" id="returnPolicy">
    <div id="policyTitle">Return Policies</div>
    <div class="infoSection" id="policyContent">
            <ol>

			    <li>
			        <a class="noline"><strong>--Manufacturer Warranty</strong></a><br>
			        <ol style="list-style-type:lower-alpha;">
			            <li>Summary
						    <ol style="list-style-type:lower-roman;"><li><ul>
<li>Return for refund within: non-refundable</li>
<li>Return for replacement within: non-replaceable</li></ul></li></ol>
					    </li>
					    <li>Detail
						    <ol style="list-style-type:lower-roman;"><li>Newegg.com does not offer any express warranties. However, many of the products available through Newegg.com are covered by Manufacturers' Warranties. If a product is covered by a manufacturer's warranty, it will be stated on that product's web page. Manufacturers' warranty details are typically available at the manufacturer's website; click <a href="https://receipt.pw/">Contact Manufacturers</a> to see a list of the manufacturers whose items we carry. Detailed manufacturer warranty information&nbsp;can also be obtained for free by contacting our <a href="https://receipt.pw/">Customer Service</a> department. Please note that products in this category are <span style="FONT-WEIGHT: bold">non-refundable </span>unless otherwise indicated.<br><br>Products that state "<i>This item can be returned to the product manufacturer only</i>" must be returned directly to the product manufacturer for repair or replacement, unless otherwise required by law. For these items, the warranty policy&nbsp;provided by&nbsp;the product manufacturer explicitly requires that any returns, repairs etc. be requested and processed directly by the consumer (or "end-user") of the item.</li></ol>
					    </li>
			        </ol>
			    </li><br>

			    <li>
			        <a class="noline"><strong>Standard Return Policy</strong></a><br>
			        <ol style="list-style-type:lower-alpha;">
			            <li>Summary
						    <ol style="list-style-type:lower-roman;"><li><ul>
<li>Return for refund within: 30 days</li>
<li>Return for replacement within: 30 days</li>
<li>Restocking Fee: Yes</li></ul></li></ol>
					    </li>
					    <li>Detail
						    <ol style="list-style-type:lower-roman;"><li>This is our Standard Return Policy. Items covered by this policy (those products for which Newegg states "<i>This item may be returned for a replacement or refund within 30 days only</i>") must be returned to Newegg <span style="FONT-WEIGHT: bold"><span style="TEXT-DECORATION: underline">within 30 days of the invoice date</span></span> for this policy to apply. “Return” constitutes receipt of the product by Newegg, and not the mere issuance of an RMA.</li></ol>
					    </li>
			        </ol>
			    </li><br>

	        </ol>
        </div>
    </fieldset>




<div class="infoEnd">
    <strong>Thank you for shopping at Newegg.com!</strong>
    Please take a moment to tell us about your shopping experience. Your comments help us to continually improve Newegg.com, and are much appreciated.
</div>


</div>
<div id="disclaimer2015">

            <div>Newegg Inc. 17560 E. Rowland Street, City of Industry, CA 91748 USA</div>


                        <a class="needUnderLine" href="https://receipt.pw/" rel="nofollow">
                            Policy &amp; Agreement
                        </a>| <a class="needUnderLine" href="https://receipt.pw/" rel="nofollow">
                            Privacy Policy</a>

            &nbsp;©  2000-2016 Newegg Inc.
	        &nbsp;<span id="Span1" style="width:0px;">A</span>ll rights reserved.
        </div>
<script type="text/javascript">
var tr,pr,tb,ttb,needProcess
needProcess=document.getElementById("needlessJS");
if(!needProcess){tr=document.getElementById('trackingRow');
if(tr)tr.colSpan-=1;
var tpr=[];pr=[];tpr=document.getElementsByTagName('td');
for(var i=0;i<tpr.length;i++)
if(tpr[i].className=='priceRow')pr.push(tpr[i]);
for(i=0;i<pr.length;i++)
pr[i].colSpan-=1;}
ttb=[];ttb=document.getElementsByTagName('table');
for(i=0;i<ttb.length;i++)
if(ttb[i].className=='cartSum')tb=ttb[i];
if(tb&&tb.border!=undefined)tb.border='1'

function replaceFieldSet(fieldSet,other){
var legend="";
var childs=fieldSet.childNodes;
for(var i=0;i<childs.length;i++){if(childs[i].tagName=="LEGEND"){legend=childs[i].innerHTML;break;}}
var div=document.createElement("div");
div.setAttribute("className","full clean");
div.setAttribute("id",fieldSet.id);
var h5=document.createElement("h5");
h5.innerHTML=legend;
div.appendChild(h5);
var other=document.getElementById(other);
div.appendChild(other);
fieldSet.parentNode.removeChild(fieldSet);
return div;}
var fieldSet1=document.getElementById("summary");
var bElement1=document.getElementById("returnPolicy");
var fieldSet2=document.getElementById("returnPolicy");
var bElement2=document.getElementById("summary");
var urls = document.getElementById("summary").getElementsByTagName("a");
for(var i =0; i< urls.length; i++){
urls[i].removeAttribute('href');
}
</script>


<style>

#orderInfo dl dt {
    float: left;
    width: 15em;
}
#preOrderInfo dl dt {
    float: left;
    width: 10em;
}
.orderOptions {
    display: none;
}
.printDetails {
    display: none;
}
.prodDesc img {
    border: 1px solid #cccccc;
    display: block;
    float: left;
    margin-right: 10px;
}
.prodDesc .prodInfo {
    display: block;
}
.fll {
    display: none;
}
.subtotal .priceRow {
    font-weight: bold;
}
.ListTitle {
    display: none;
}
.alignHeight {
    height: 14em;
}
fieldset p {
    max-width: 1200px;
    overflow-wrap: break-word;
}
#remitInfo_in {
    margin: 10px 0;
    padding: 10px;
}
#remitInfo_in p {
    color: #da6506;
    font-weight: bold;
    margin: 0;
}
fieldset {
    border: 1px solid #999;
    margin: 8px 15px 24px;
    padding: 15px 10px 10px;
    position: relative;
    text-align: left;
}
table {
    border-right: 1px solid #999;
    border-top: 1px solid #999;
}
td {
    border-bottom: 1px solid #999;
    border-left: 1px solid #999;
}
#trackingRow {
    max-width: 1200px;
    word-break: break-all;
}
#summary .cartSum .prodDesc .gift-message {
    overflow-wrap: break-word;
    padding: 10px;
    width: 80%;
    word-break: normal;
}
.message-information-justforprint {
    border: 1px solid #999;
    margin-bottom: 10px;
    padding: 10px;
}
.icon-newegg-flash::before {
    content: "NeweggFlash";
}
.wrapper-icon {
    float: right;
    text-align: right;
}
.wrapper-icon a {
    text-decoration: none;
}
#disclaimer2015 {
    text-align: center;
}
.amex-pwp-message {
    border: 1px solid #ababab;
    margin-top: 5px;
    padding: 9px 9px 9px 4px;
}
.amex-pwp-message img {
    display: inline-block;
    float: left;
}
#orders .amex-pwp-message p, .amex-pwp-message p {
    font-size: 14px;
    margin: 0 0 0 60px;
    padding: 0;
}
.amex-rewards-color {
    color: #3f9c35;
}
</style>
</body></html>
