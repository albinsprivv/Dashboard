<?php $number = rand(1000, 6000); ?>
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
* html body { margin-top: 0px; }
.serif { font-family: times,serif; font-size: medium; }
.sans { font-family: verdana,arial,helvetica,sans-serif; font-size: medium; }

.small { font-family: verdana,arial,helvetica,sans-serif; font-size: small; }

h2.small {margin-bottom: 0em; }
h2.h1 { margin-bottom: 0em; }
h2.h3color { margin-bottom: 0em; }
.listprice { font-family: arial,verdana,helvetica,sans-serif; text-decoration: line-through; }
.attention { background-color: #FFFFD5; }
.price { font-family: verdana,arial,helvetica,sans-serif; color: #990000; }
.alertgreen { color: #009900; font-weight: bold; }
.active-nav { background-color: #000000; color: #FFFFFF; }
.inactive-nav { background-color: #FFFFFF; color: #000000; }
.tigerBox .head { border: 1px solid #CCCC99; border-bottom-width: 0px; background-color: #EEEECC; }
.tigerBox .body { border: 1px solid #CCCC99; }
.tigerBoxWithEyebrow .head { border-width: 0px; }
.tigerBoxWithEyebrow .body { border: 1px solid #CCCC99; }
.detailPageTigerBox .head { border-width: 0px; }
.detailPageTigerBox .body { border: 1px solid #CCCC99; }
.detailPageTigerBox .darkCell { background-color: #EEEECC; }
.eyebrow { font-family: verdana,arial,helvetica,sans-serif; font-size: 10px; font-weight: bold; text-transform: uppercase; text-decoration: none; color: #FFFFFF; }
div#page-wrap { min-width: 980px; }
div#leftcol, div#leftcolhidden { float: left; width: 180px; margin:5px 0px 0px 5px; display: inline; }

div#rightcol, div#rightcolhidden { float: right; width: 300px; margin-top:5px;}

div#leftcolhidden { clear:left;}
div#rightcolhidden { clear:right;}div#center1, div#centercol, div#centerrightspancol { overflow: hidden; }
* html div#center1 { width: 100%; }
* html div#centercol { width:100%; }
* html div#centerrightspancol { width: 100%; }
div#page-footer { clear: both; }
* html div#page-wrap { border-right: 980px solid #fff; width: 100%; margin-right: 25px;}
* html div#content { float: left; position:relative; margin-right: -980px; }
a:active { font-family: verdana,arial,helvetica,sans-serif; color: #FF9933; }
a:visited { font-family: verdana,arial,helvetica,sans-serif; color: #996633; }
a:link { font-family: verdana,arial,helvetica,sans-serif; color: #004B91; }
a.noclick, a.noclick:visited { color: #000000; }
.noLinkDecoration a { text-decoration: none; border-bottom: none; }
.noLinkDecoration a:hover { text-decoration: underline; }
.noLinkDecoration a.dynamic:hover { text-decoration: none; border-bottom: 1px dashed; }
.noLinkDecoration a.noclick:hover { color: #000000; text-decoration: none; border-bottom: 1px dashed; }

.amabot_right .h1 { color: #E47911; font-size: .92em; }
.amabot_right .amabot_widget .headline, .amabot_left .amabot_widget .headline { color: #E47911; font-size: .92em; display: block; font-weight: bold; }
.amabot_widget .headline { color: #E47911; font-size: medium; display: block; font-weight: bold; }
.amabot_right .amabot_widget { padding-top: 8px;  padding-bottom: 8px; padding-left: 8px;  padding-right: 8px; border-bottom: 1px solid #C9E1F4; border-left: 1px solid #C9E1F4; border-right: 1px solid #C9E1F4; border-top: 1px solid #C9E1F4; }
.amabot_left .h1 { color: #E47911; font-size: .92em; }
.amabot_left .amabot_widget { padding-top: 8px;  padding-bottom: 8px;  padding-left: 8px;  padding-right: 8px; border-bottom: 1px solid #C9E1F4; border-left: 1px solid #C9E1F4; border-right: 1px solid #C9E1F4;  border-top: 1px solid #C9E1F4; }

.amabot_center div.unified_widget, .amabot_center .amabot_widget { font-size: 12px; }
.amabot_right div.unified_widget, .amabot_right .amabot_widget { font-size: 12px; }
.amabot_left div.unified_widget, .amabot_left .amabot_widget { font-size: 12px; }

.nobullet { list-style-type: none; }
.homepageTitle { font-size: 28pt; font-family: 'Arial Bold', Arial, sans-serif; font-weight: 800; font-variant: normal; color: #80B6CE; line-height:1em; }
.tigerbox { padding-top: 8px;  padding-bottom: 8px;  padding-left: 8px;  padding-right: 8px;  border-bottom: 1px solid #C9E1F4; border-left: 1px solid #C9E1F4;  border-right: 1px solid #C9E1F4;  border-top: 1px solid #C9E1F4; }
.hr-leftbrowse { border-top-width: 1px;	border-right-width: 1px;	border-bottom-width: 1px; border-left-width: 1px; border-top-style: dashed; border-right-style: none; border-bottom-style: none; border-left-style: none; border-top-color: #999999; border-right-color: #999999; border-bottom-color: #999999; border-left-color: #999999; margin-top: 10px; margin-right: 5px; margin-bottom: 0px; margin-left: 5px; }
div.unified_widget p { margin:0 0 0.5em 0; line-height:1.4em; }

div.unified_widget h2 { color:#E47911; padding:0; }

.amabot_right div.unified_widget .headline, .amabot_left div.unified_widget .headline { color: #E47911; font-size: .92em; display: block; font-weight: bold; }
div.unified_widget .headline { color: #E47911; font-size: medium; display: block; font-weight: bold;}
div.unified_widget sup { font-weight:normal; font-size: 75%; }
div.unified_widget h2 sup { font-size: 50%; }

td.amabot_left div.unified_widget h2, td.amabot_right div.unified_widget h2, div.amabot_left div.unified_widget h2, div.amabot_right div.unified_widget h2 { font-size:100%; margin:0 0 0.5em 0; }
td.amabot_center div.unified_widget h2, div.amabot_Center div.unified_widget h2 { font-size:135%; font-weight:bold; margin:0 0 0.35em 0px; }
td.amabot_center, div.amabot_center { padding:5px 15px 5px 10px; }
div.unified_widget ul { margin: 1em 0; padding: 0 0 0 15px; list-style-position:inside; }

div.unified_widget ol { margin:0; padding:0 0 0 2.5em; }

div.unified_widget a:link, div.unified_widget a:visited { text-decoration:underline; }
div.unified_widget a:hover { text-decoration:underline; }
div.unified_widget p.seeMore { clear:both; font-family:verdana,arial,helvetica,sans-serif; margin:0; padding-left:1.15em; text-indent: -1.15em; font-size:100%; font-weight:normal; }
div.unified_widget p.seeMore a:link, div.unified_widget p.seeMore a:visited { text-decoration:underline; }
div.unified_widget p.seeMore a:hover { text-decoration: underline; }
div.unified_widget .carat, div.left_nav .carat { font-weight:bold; font-size:120%; font-family:verdana,arial,helvetica,sans-serif; color:#E47911; margin-right:0.20em; }
div.unified_widget a img { border:0; }

div.h_rule { clear:both; }
div#centerrightspancol div.h_rule { clear:right; }
div.unified_widget { margin-bottom:2em; clear:both; }
div.unified_widget div.col1 { width: 100%; }
div.unified_widget div.col2 { width: 49%; }
div.unified_widget div.col3 { width: 32%; }
div.unified_widget div.col4 { width: 24%; }
div.unified_widget div.col5 { width: 19%; }
div.unified_widget table { border:0; border-collapse:collapse; width:100%; }
div.unified_widget td { padding:0 8px 8px 0; vertical-align:top; }
div.unified_widget table.col1 td { width:100%; }
div.unified_widget table.col2 td { width:49%; }
div.unified_widget table.col3 td { width:32%; }
div.unified_widget table.col4 td { width:24%; }
div.unified_widget table.col5 td { width:19%; }
div.unified_widget td.bottom { vertical-align:baseline; }
div.unified_widget table h4, div.unified_widget h4 { color:#000; font-size:100%; font-weight:normal; margin:0; padding:0; }
div.rcmBody div.prodImage, amabot_widget div.prodImage {float:left; margin:0px 0.5em 0.25em 0px;}

td.amabot_right div.unified_widget, td.amabot_left div.unified_widget, div.amabot_right div.unified_widget, div.amabot_left div.unified_widget { border:1px solid #C9E1F4; padding:8px; margin-bottom:20px; }

* html td.amabot_right div.unified_widget, * html div.amabot_right div.unified_widget { height:100%; }
* html td.amabot_left div.unified_widget, * html div.amabot_left div.unified_widget { height:100%; }

div.rcmBody, amabot_widget div.rcmBody { line-height:1.4em; }
div.rcmBody a:link, div.rcmBody a:visited { text-decoration: underline; }

div.rcmBody p.seeMore, amabot_widget div.rcmBody p.seeMore { margin-top:0.5em; }
div.rcmBody div.bannerImage { text-align:center; }
div.rcmBody h2 span.homepageTitle { display:block; margin-bottom:-0.3em; margin-top:-0.12em; line-height:1em; }
div.rcmBody h2 img { float:none; }
table.coopTable div.rcmBody .headline { font-size: 110%; }
table.coopTable div.rcmBody h2 { font-size: 110%; font-weight:bold; }
table.promo div.rcmBody h2 { font-size: 100%; font-weight:bold; }
div.blurb div.title { font-weight:bold; padding-top:5px; padding-bottom:2px; }

div.left_nav { font-family: Arial, sans-serif; font-size:100%; margin:0; line-height:1.05em; width:100%; border:1px solid #C9E1F4; padding-bottom:10px; }
div.left_nav h2 { margin:0 0 0 0; color:#000000; font-weight:bold; line-height:1.25em; font-size:100%; font-family:verdana,arial,helvetica,sans-serif; padding: 3px 6px; background-color:#EAF3FE; }
div.left_nav h3 { font-family:verdana,arial,helvetica,sans-serif; margin:0.5em 0 0.4em 0.5em; color:#E47911; font-weight:bold; line-height:1em; font-size:100%; padding-right:0.5em; }
div.left_nav ul { margin:0; padding:0; }
div.left_nav li, div.left_nav p { list-style:none; margin:0.5em 0.5em 0 1em; line-height:1.2em;}

div.left_nav hr { margin:1em 0.5em; border-top:0; border-left:0; border-right:0; border-bottom:1px dashed #cccccc; }

div.left_nav a:link, div.left_nav a:visited { color:#003399; text-decoration:none; font-family:Arial, sans-serif; }
div.left_nav a:hover { color:#2a70fc; text-decoration:underline; }
div.left_nav p.seeMore { padding-left:0.9em; text-indent:-0.9em; margin-top:0.35em; margin-bottom:1em; }

div.left_nav p.seeMore a:link, div.left_nav p.seeMore a:visited { text-decoration:none; }
div.left_nav p.seeMore a:hover { text-decoration:underline; }
div.asinItem { float:left; margin-bottom:1em; width:32%; }
div.asinTextBlock { padding:0 8px 8px 0; }
div.asinItem div.prodImage { height:121px; display:table-cell; vertical-align:bottom; }
div.asinItem div.localImage { display:table-cell; vertical-align:bottom; }

div.asinItem span { margin: 0.5em 0 0.25em 0; }
div.asinItem ul { margin:0; padding:0 0 0.5em 1.3em; text-indent:-1.3em; font-size:90%; }

div.asinTitle {padding-top:3px; padding-bottom:2px;}
div.row { clear:both; }
body.dp {}
body.dp div.h_rule { clear:none; }
body.dp div.unified_widget { clear:none; }
div.asinCoop div.asinItem { float:none; width:100%;}
div.asinCoop_header {}
div.asinCoop_footer {}

div.newAndFuture div.asinItem ul { font-size:100%; }
div.newAndFuture div.asinItem li { list-style-position: outside; margin:0 0 0.35em 20px; padding:0; text-indent: 0; }
div.newAndFuture h3 { font-size:100%; margin:1em 0 ; }
div.newAndFuture a:link, div.newAndFuture a:visited { text-decoration:underline; }
div.newAndFuture a:hover { text-decoration:underline; }
div.newAndFuture p.seeMore { margin:-0.75em 0 0 35px; }

div.unified_widget ol.topList { margin: 0; padding: 0; list-style: none; }
div.unified_widget ol.topList li { list-style: none; clear: both; display: list-item; padding-top: 6px; }
div.unified_widget ol.topList .productImage { display: block; float: left;vertical-align: top;text-align: center;width:60px; }
div.unified_widget ol.topList .productText { display: block; float: left; padding-left:10px; vertical-align: top; }
:root div.unified_widget span.productImage { display: table-cell; float: none; }
:root div.unified_widget span.productText { display: table-cell; float: none; }
div.unified_widget dl.priceBlock {margin:0 0 0.45em 0;}
div.unified_widget dl.priceBlock dt {clear:left; font-weight:bold; float:left; margin:0 0.3em 0 0;}
div.unified_widget dl.priceBlock dd {margin:0 0 0.2em 0;}
div.unified_widget .bold {font-weight:bold;}
div.unified_widget .byline {font-size: 95%; font-weight: normal;}
table.thirdLvlNavContent div.blurb {margin:10px;}

div.pageBanner h1 { font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:225%; color: #e47911; letter-spacing:-0.03em; margin:0; }
div.pageBanner p { font-size:90%; color:#888888; margin: 0; }

div.pageBanner h1.bkgnd { background-repeat:no-repeat; background-color:#FFFFFF; overflow:hidden; text-indent:-100em; }
INPUT { font-family: fixed; }

    BODY { background-color: #FFFFFF; font-family: verdana,arial,helvetica,sans-serif; font-size: small; }
    TD { font-family: verdana,arial,helvetica,sans-serif; font-size: small; }
    TH { font-family: verdana,arial,helvetica,sans-serif; font-size: small; }
    .h1 { font-family: verdana,arial,helvetica,sans-serif; color: #E47911; font-size: medium; }
    .h3color { font-family: verdana,arial,helvetica,sans-serif; color: #E47911; font-size: small; }
    .tiny { font-family: verdana,arial,helvetica,sans-serif; font-size: x-small; }
    .tinyprice { font-family: verdana,arial,helvetica,sans-serif; color: #990000; font-size: x-small; }
    .highlight { font-family: verdana,arial,helvetica,sans-serif; color: #990000; font-size: small; }
</style>

  <title>Amazon.de - Bestellung {{ $order }}</title>
</head>

<body>

<img src="https://images-eu.ssl-images-amazon.com/images/G/03/x-locale/common/amazon-logo-tiny._CB192200436_.gif" width="99" align="left" height="26" border="0" />

<br />

<br clear=\"all\" />
  <center><b class="h1">
        Übersicht zur Bestellung #{{ $order }}
  </b><br />

    <script>
        //works if JS is enabled
        document.write("<a href='#' onclick='javascript:window.print();'>Bitte drucken Sie diese Seite aus und legen Sie sie zu Ihren Unterlagen.</a>");
    </script>
</center><br />

<table width="90%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center">
  <tr>
    <td>






      <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">





        <tr><td valign="top" align="left">
          <b>
                Bestellung aufgegeben am:
          </b>
          {{ $orderdate }}
        </td></tr>

        <tr><td valign="top" align="left">
          <b>Bestellnummer:</b>
          {{ $order }}
        </td></tr>

<tr><td valign="top" align="left">
  <b>Gesamtbestellwert:
  EUR {{ number_format($total, 2, ',', ' ') }}</b>
</td></tr>
      </table>
      <br />







      <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#000000" align="center">
        <tbody><tr bgcolor="#000000">
          <td>
            <table width="100%" border="0" cellspacing="3" cellpadding="0" align="center" bgcolor="#000000">
              <tbody><tr bgcolor="#ffffff">
                <td valign="top" colspan="2">
                  <table width="100%" border="0" cellspacing="0" cellpadding="5">
                    <tbody><tr bgcolor="#ffffff">
                      <td>
                        <b class="sans"><center>
                        versandt am {{ $dispatchdate }}


                        </center></b>
                      </td>
                    </tr>
                  </tbody></table>
                </td>
              </tr>
              <tr>
                <td bgcolor="#ffffff" valign="top" colspan="2">
                  <table width="100%" border="0" cellspacing="0" cellpadding="2">
                    <tbody><tr valign="top">
                      <td width="100%">
                        <table border="0" cellspacing="0" cellpadding="2" align="right">
                          <tbody><tr valign="top">
                            <td align="right">
                              &nbsp;
                            </td>
                          </tr>
                        </tbody></table>
                        <table border="0" cellspacing="2" cellpadding="0" width="100%">
                          <tbody><tr valign="top">
                            <td valign="top">
                              <b>Bestellte Artikel</b>
                            </td>
                            <td align="right" valign="top">
                              <b>Preis</b>
                            </td>
                          </tr>





        <tr>
        <input type="hidden" name="oknilojtolmnqwqoqipnr218002" value="1">
        <td colspan="1" valign="top">

          {{ $quantity }}

          Exemplar(e) von:

          <i>{{ $product }}</i><br>


          <span class="tiny">
              Verkauf durch: {!! $soldby !!}
      <br>


            <br>

            Zustand: Neu<br>


          </span>

        </td>
        <td align="right" valign="top" colspan="2">

          <nobr>EUR {{ number_format($subtotal, 2, ',', ' ') }}</nobr><br>

        </td></tr>













                        </tbody></table>
                        <br>
                      </td>
                    </tr>
                  </tbody></table>
                </td>
              </tr>
              <tr>
                <td bgcolor="#ffffff" valign="top" colspan="2">
                  <table width="100%" border="0" cellspacing="0" cellpadding="2">
                    <tbody><tr>
                      <td>


      <b>
      Versandadresse
      </b>



      <br>



      <div class="displayAddressDiv">
      <ul class="displayAddressUL">
      <li class="displayAddressLI displayAddressFullName">{{ $name }}</li>
      <li class="displayAddressLI displayAddressAddressLine2">{{ $address }}</li>
      <li class="displayAddressLI displayAddressCityStateOrRegionPostalCode">{{ $city }}, {{ $region }} {{ $zip }}</li>
      <li class="displayAddressLI displayAddressCountryName">{{ $country }}</li>
      </ul>
      </div>
















      <br><b>
      Versandart:
      </b>



      <br>
      Express-Zustellung
      <br>









                      </td>
                      <td align="right">
                        <table border="0" cellpadding="0" cellspacing="1">

          <tbody><tr valign="top">
              <td nowrap="nowrap" align="right">Zwischensumme:</td>
              <td nowrap="nowrap" align="right">EUR {{ number_format($subtotal, 2, ',', ' ') }}</td>
          </tr>

          <tr valign="top">
              <td nowrap="nowrap" align="right">Verpackung &amp; Versand:</td>
              <td nowrap="nowrap" align="right">EUR {{ number_format($shippingprice, 2, ',', ' ') }}</td>
          </tr>

          <tr valign="top">
              <td nowrap="nowrap" align="right">&nbsp;</td>
              <td nowrap="nowrap" align="right">-----</td>
          </tr>

          <tr valign="top">
              <td nowrap="nowrap" align="right">Summe:</td>
              <td nowrap="nowrap" align="right">EUR {{ number_format($beforetax, 2, ',', ' ') }}</td>
          </tr>

          <tr valign="top">
              <td nowrap="nowrap" align="right">&nbsp;</td>
              <td nowrap="nowrap" align="right">-----</td>
          </tr>

          <tr valign="top">
              <td nowrap="nowrap" align="right"><b>Gesamtsumme für diese Lieferung:</b></td>
              <td nowrap="nowrap" align="right"><b>EUR {{ number_format($beforetax, 2, ',', ' ') }}</b></td>
          </tr>

          <tr valign="top">
              <td nowrap="nowrap" align="right">&nbsp;</td>
              <td nowrap="nowrap" align="right">-----</td>
          </tr>
      </tbody></table>

                      </td>
                    </tr>
                  </tbody></table>
                </td>
              </tr>
            </tbody></table>
          </td>
        </tr>
      </tbody></table>

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
                  <b class="sans"><center>Zahlungsdaten</center></b>
                </td>
              </tr>
            </table>
          </td>
        </tr>
        <tr>
          <td bgcolor="#ffffff" valign="top" aligh="right" colspan="2">
            <table width="100%" border="0" cellspacing="0" cellpadding="2">
              <tr valign="top">
                <td width="100%">
                  <table border="0" cellspacing="0" cellpadding="2" align="right">
                    <tr valign="top">
                      <td align="right">
                        <table border="0" cellpadding="0" cellspacing="1">

    <tr valign="top">
        <td nowrap="nowrap" align="right">Zwischensumme:</td>
        <td nowrap="nowrap" align="right" >EUR {{ number_format($subtotal, 2, ',', ' ') }}</td>
    </tr>

    <tr valign="top">
        <td nowrap="nowrap" align="right">Verpackung &amp; Versand:</td>
        <td nowrap="nowrap" align="right" >EUR {{ number_format($shippingprice, 2, ',', ' ') }}</td>
    </tr>

    <tr valign="top">
        <td nowrap="nowrap" align="right">&nbsp;</td>
        <td nowrap="nowrap" align="right">-----</td>
    </tr>

    <tr valign="top">
        <td nowrap="nowrap" align="right">Summe:</td>
        <td nowrap="nowrap" align="right" >EUR {{ number_format($beforetax, 2, ',', ' ') }}</td>
    </tr>

<tr valign="top">
    <td nowrap="nowrap" align="right">&nbsp;</td>
    <td nowrap="nowrap" align="right">-----</td>
</tr>

<tr valign="top">
    <td nowrap="nowrap" align="right"><b>Gesamtsumme:&#160;</b></td>
    <td nowrap="nowrap" align="right" ><b>EUR {{ number_format($total, 2, ',', ' ') }}</b></td>
</tr>
</table>

                      </td>
                    </tr>
                  </table>
<b>Zahlungsart: </b>
<br />
      MasterCard/EuroCard
      <nobr> | Die letzten Ziffern: <?php echo $number; ?></nobr>
    <br>
<br />
<b>Rechnungsadresse:</b>
<div class="displayAddressDiv">
<ul class="displayAddressUL">
<li class="displayAddressLI displayAddressFullName">{{ $name }}</li>
<li class="displayAddressLI displayAddressAddressLine1">{{ $address }}</li>
<li class="displayAddressLI displayAddressAddressLine2">{{ $address2 }}</li>
<li class="displayAddressLI displayAddressCityStateOrRegionPostalCode">{{ $city }}, {{ $region }} {{ $zip }}</li>
<li class="displayAddressLI displayAddressCountryName">{{ $country }}</li>
</ul>
</div>
                </td>
              </tr>
            </table>
          </td>
        </tr>
        <tr>
          <td bgcolor="#ffffff" valign="top" colspan="2">
            <table width="100%" border="0" cellspacing="0" cellpadding="2">
              <tbody><tr>
                <td valign="top">
                  <div style="text-align:left;"><b>Kreditkarten-Transaktionen</b></div>
                </td>
                <td align="right">



<table border="0" cellpadding="0" cellspacing="1">
  <tbody><tr valign="top">
    <td nowrap="nowrap" align="right">
      MasterCard/EuroCard mit den Endziffern <?php echo $number; ?>:&nbsp; {{ $orderdate }}:
    </td>
    <td nowrap="nowrap" align="right" colspan="2">
      EUR {{ number_format($total, 2, ',', ' ') }}
    </td>
  </tr>
</tbody></table>

                </td>
              </tr>
            </tbody></table>
          </td>
        </tr>
<<<<<<< HEAD
=======

>>>>>>> master
      </table>
    </td>
  </tr>
</table>



    </td>
  </tr>
</table>

<center>
  <p>Um den Status Ihrer Bestellung einzusehen, kehren Sie auf <a href="#">Bestellungsübersicht</a> zurück. </p>

  <p><b>Hinweis:</b> Dies ist keine Rechnung.</p>
</center>



<script>   if (typeof uet == 'function') { uet('cf'); } </script>
<br />





<table align="center" width="100%">



<tr align="center"><td colspan="2">
<font size="-2">







<a href="http://www.amazon.de/gp/help/customer/display.html?ie=UTF8&amp;nodeId=505048" rel="nofollow">Unsere AGB</a>&nbsp;|&nbsp;






<a href="http://www.amazon.de/gp/help/customer/display.html?ie=UTF8&amp;nodeId=3312401" rel="nofollow">Datenschutzerkl&auml;rung</a>&nbsp;|&nbsp;






<a href="http://www.amazon.de/gp/help/customer/display.html?ie=UTF8&amp;nodeId=505050" rel="nofollow">Impressum</a>&nbsp;&nbsp;&#169; 1998-2017, Amazon.com, Inc. und Tochtergesellschaften</font>
</td></tr>
<!-- whfh-fEl49uyVkG9QFwfqrCBMrL/AIozdNrL+MtRN7hiL9sZeOQYYkxBvsN7H+r3/xBsb rid-Z4S29VDXP2WZ2X3V51S5 -->
</table>




<script type='text/javascript'>
(function(g,h){function d(a,d){var b={};if(!e||!f)try{var c=h.sessionStorage;c?a&&("undefined"!==typeof d?c.setItem(a,d):b.val=c.getItem(a)):f=1}catch(g){e=1}e&&(b.e=1);return b}var b=g.ue||{},a="",f,e,c,a=d("csmtid");f?a="NA":a.e?a="ET":(a=a.val,a||(a=b.oid||"NI",d("csmtid",a)),c=d(b.oid),c.e||(c.val=c.val||0,d(b.oid,c.val+1)),b.ssw=d);b.tabid=a})(ue_csm,window);

</script>
<script type='text/javascript'>


    window.ue_csm.cel_widgets = [
         {  c: "celwidget"  } , {  id: "fallbacksessionShvl"  } , {  id: "rhf"  }
    ];




ue_csm.ue.exec(function(b){var a=b.ue;if(a&&a.onSushiUnload){if(a.onunload)a.onunload(function(){a.count&&a.count("beforeUnloadNexusCounter",1,{bf:1})});a.onSushiUnload(function(){var c={server:b.ue_sn||"sn"};a.event&&a.event(c,"csm","csm.CSMUnloadBaselineEvent.2")})}},"Nxs-unload-baseline")(ue_csm);




</script>

<div id='be' style='display:none;visibility:hidden;'><form name='ue_backdetect'><input name='ue_back' value='1' type='hidden'></form><script type="text/javascript">
(function(a){var b=document.ue_backdetect;b&&b.ue_back&&a.ue&&(a.ue.bfini=b.ue_back.value);a.uet&&a.uet("be");a.onLdEnd&&(window.addEventListener?window.addEventListener("load",a.onLdEnd,!1):window.attachEvent&&window.attachEvent("onload",a.onLdEnd));a.ueh&&a.ueh(0,window,"load",a.onLd,1);a.ue&&a.ue.tag&&(a.ue_furl&&a.ue_furl.split?(b=a.ue_furl.split("."))&&b[0]&&a.ue.tag(b[0]):a.ue.tag("nofls"))})(ue_csm);


var ue_pty='RCXYourAccount', ue_spty='DisplayInvoiceStatus', ue_pti='';

</script>

<a href='/gp/css/summary/print.html/ref=od_aui_print_invoice/uedata/unsticky/261-7257231-7766022/YourAccount/ntpoffrw?tepes=1&amp;id=Z4S29VDXP2WZ2X3V51S5'>v</a>
<noscript>
     <img src='/gp/css/summary/print.html/ref=od_aui_print_invoice/uedata/unsticky/261-7257231-7766022/YourAccount/ntpoffrw?noscript&amp;id=Z4S29VDXP2WZ2X3V51S5&amp;pty=RCXYourAccount&amp;spty=DisplayInvoiceStatus&amp;pti=' />
     <img src='//fls-eu.amazon.de/1/batch/1/OP/A1PA6795UKMFR9:261-7257231-7766022:Z4S29VDXP2WZ2X3V51S5$uedata=s:%2Fgp%2Fcss%2Fsummary%2Fprint.html%2Fref%3Dod_aui_print_invoice%2Fuedata%2Funsticky%2F261-7257231-7766022%2FYourAccount%2Fntpoffrw%3Fnoscript%26id%3DZ4S29VDXP2WZ2X3V51S5%26pty%3DRCXYourAccount%26spty%3DDisplayInvoiceStatus%26pti%3D:2000' />

</noscript>
</div>
<script type='text/javascript'>
(function(b,c){var a=c.images;a&&a.length&&b.ue.count("totalImages",a.length)})(ue_csm,document);

</script>
<script type='text/javascript'>
(function(l,k){function J(a){if(a)return a.replace(/^\s+|\s+$/g,"")}function z(a,d){if(!a)return{};var c="INFO"===d.logLevel;a.m&&a.m[m]&&(a=a.m);var b=d.m||d[m]||"",b=a.m&&a.m[m]?b+a.m[m]:a.m&&a.m.target&&a.m.target.tagName?b+("Error handler invoked by "+a.m.target.tagName+" tag"):a.m?b+a.m:a[m]?b+a[m]:b+"Unknown error",b={m:b,name:a.name,type:a.type,csm:K+" "+(a.fromOnError?"onerror":"ueLogError")},e,g,h=0;e=0;var f;g=k.location;b[n]=d[n]||u;d.adb&&(b.adb=d.adb);(e=d[q])&&(b[q]=""+e);if(!c){b[A]=
d[A]||g&&g.href||"missing";b.f=a.f||a.sourceURL||a.fileName||a.filename||a.m&&a.m.target&&a.m.target.src;b.l=a.l||a.line||a.lineno||a.lineNumber;b.c=a.c?""+a.c:a.c;b.s=[];b.t=l.ue.d();if((c=a.stack||(a.err?a.err.stack:""))&&c.split)for(b.csm+=" stack",e=c.split("\n");h<e.length&&b.s.length<B;)(c=e[h++])&&b.s.push(J(c));else for(b.csm+=" callee",g=C(a.args||arguments,"callee"),e=h=0;g&&h<B;)f=x,g[s]||(c=g.toString())&&c.substr&&(f=0===e?4*x:f,f=1==e?2*x:f,b.s.push(c.substr(0,f)),e++),g=C(g,"caller"),
h++;!b.f&&0<b.s.length&&(h=b,c=(h||{}).s||[],e=c[1]||"",c=(c[0]||"").match(L)||e.match(M))&&(h.f=c[1],h.l=c[2])}return b}function C(a,d){try{return a[d]}catch(c){}}function D(a,d){if(a&&!(p.ec>p.mxe)){p.ter.push(a);d=d||{};var c=a[n]||d[n];d[n]=c;d[q]=a[q]||d[q];c&&c!==u&&c!==N&&c!==O&&c!==P||l.ue_err.ec++;c&&c!=u||p.ecf++;y(a,d)}}function y(a,d){if(a){var c=z(a,d),b=d.channel||Q,e=window.ue_err?window.ue_err.addContextInfo:null;e&&e(c);if(ue.log.isStub&&k[v]&&k[v][w]){e={};e[b]=c;try{var g=k[v][w]({rid:ue.rid,
sid:l.ue_sid,mid:l.ue_mid,sn:l.ue_sn,reqs:[e]}),h=k[R],f;if(f=!(h[E]&&h[E](F,g))){var m;if(k[G]){var r=new k[G];r.onerror=t;r.ontimeout=t;r.onprogress=t;r.onload=t;r.timeout=0;m=r}else{var n;if(k[H]){var q=new k[H];n="withCredentials"in q?q:void 0}else n=void 0;m=n}f=m}if(b=f){b.open("POST",F,!0);if(b[I])b[I]("Content-type","text/plain");b.send(g)}}catch(s){}}else l.ue.log(c,b,{nb:1});"function"===typeof p.elh&&p.elh(a,d);if(!a.fromOnError){g=k.console||{};b=g.error||g.log||t;h=k[v];f="Error logged with the Track&Report JS errors API(http://tiny/1covqr6l8/wamazindeClieUserJava): ";
if(h&&h[w])try{f+=h[w](c)}catch(u){f+="no info provided; converting to string failed"}else f+=c.m;b.apply(g,[f,c])}}}var H="XMLHttpRequest",G="XDomainRequest",R="navigator",E="sendBeacon",w="stringify",v="JSON",n="logLevel",q="attribution",A="pageURL",s="skipTrace",I="setRequestHeader",m="message",t=function(){},F="//"+l.ue_furl+"/1/batch/1/OE/",p=l.ue_err,Q=l.ue_err_chan||"jserr",u="FATAL",N="ERROR",O="WARN",P="DOWNGRADED",K="v6",B=20,x=256,M=RegExp(" (?([^ s]*):( d+): d+ )?".split(" ").join(String.fromCharCode(92))),
L=/.*@(.*):(\d*)/;z[s]=1;D[s]=1;y[s]=1;(function(){for(var a,d=0;d<(p.erl||[]).length;d++)a=p.erl[d],y(a.ex,a.info);p.erl=[]})();l.ueLogError=D})(ue_csm,window);

</script>
<script type='text/javascript'>
(function(c,d){var b=c.ue,a=d.navigator;b&&b.tag&&a&&(a=a.connection||a.mozConnection||a.webkitConnection)&&a.type&&b.tag("netInfo:"+a.type)})(ue_csm,window);

</script>
<script type="text/javascript">
(function(c,d){function h(a,b){for(var c=[],d=0;d<a.length;d++){var e=a[d],f=b.encode(e);if(e[k]){var g=b.metaSep,e=e[k],l=b.metaPairSep,h=[],m=void 0;for(m in e)e.hasOwnProperty(m)&&h.push(m+"="+e[m]);e=h.join(l);f+=g+e}c.push(f)}return c.join(b.resourceSep)}function s(a){var b=a[k]=a[k]||{};b[t]||(b[t]=c.ue_mid);b[u]||(b[u]=c.ue_sid);b[f]||(b[f]=c.ue_id);b.csm=1;a="//"+c.ue_furl+"/1/"+a[v]+"/1/OP/"+a[w]+"/"+a[x]+"/"+h([a],y);if(n)try{n.call(d[p],a)}catch(g){c.ue.sbf=1,(new Image).src=a}else(new Image).src=
a}function q(){g&&g.isStub&&g.replay(function(a,b,c){a=a[0];b=a[k]=a[k]||{};b[f]=b[f]||c;s(a)});l.impression=s;g=null}if(!(1<c.ueinit)){var k="metadata",x="impressionType",v="foresterChannel",w="programGroup",t="marketplaceId",u="session",f="requestId",p="navigator",l=c.ue||{},n=d[p]&&d[p].sendBeacon,r=function(a,b,c,d){return{encode:d,resourceSep:a,metaSep:b,metaPairSep:c}},y=r("","?","&",function(a){return h(a.impressionData,z)}),z=r("/",":",",",function(a){return a.featureName+":"+h(a.resources,
A)}),A=r(",","@","|",function(a){return a.id}),g=l.impression;n?q():(l.attach("load",q),l.attach("beforeunload",q));try{d.P&&d.P.register&&d.P.register("impression-client",function(){})}catch(B){c.ueLogError(B,{logLevel:"WARN"})}}})(ue_csm,window);

</script>
<script type='text/javascript'>
ue_csm.ue.exec(function(e,d,a){function b(a,b){return{name:a,getFeatureValue:function(){return void 0!==b|0}}}function h(a,b,c){return{name:a,getFeatureValue:function(){return b===c|0}}}function g(a,b){return{name:a,getFeatureValue:function(){for(var a=0;a<b.length;a++)if(void 0!==b[a])return 1;return 0}}}var f=e.ue||{},c=[b("dall",d.all),b("dcm",d.compatMode),b("xhr",a.XMLHttpRequest),b("qs",d.querySelector),b("ael",d.addEventListener),b("atob",a.atob),g("pjs",[a.callPhantom,a._phantom,a.PhantomEmitter,
a.__phantomas]),b("njs",a.Buffer),b("cjs",a.emit),b("rhn",a.spawn),b("sel",a.webdriver),g("chrm",[a.domAutomation,a.domAutomationController]),{name:"plg",getFeatureValue:function(){return(void 0!==a.navigator.plugins&&0<a.navigator.plugins.length)|0}}];try{c.push(h("no",a.navigator.onLine,!1))}catch(k){c.push({name:"no",getFeatureValue:function(){return 2}})}f._bf=e.ue.exec(function(){for(var a="",b=0;b<c.length;b++)a+=c[b].name+"_"+c[b].getFeatureValue()+"-";(e.ue||{})._bf=null;return a},"ue.bf");
f._bf.modules=c;f._bf.mpm=b},"bf")(ue_csm,document,window);

</script>
<!--[if IE 5]>
<script type='text/javascript'> ue && ue._bf && ue._bf.modules && ue._bf.mpm && ue._bf.modules.push( ue._bf.mpm("cc_ie5", 1) ) </script>
<![endif]-->
<!--[if IE 6]>
<script type='text/javascript'> ue && ue._bf && ue._bf.modules && ue._bf.mpm && ue._bf.modules.push( ue._bf.mpm("cc_ie6", 1) ) </script>
<![endif]-->
<!--[if IE 7]>
<script type='text/javascript'> ue && ue._bf && ue._bf.modules && ue._bf.mpm && ue._bf.modules.push( ue._bf.mpm("cc_ie7", 1) ) </script>
<![endif]-->
<!--[if IE 8]>
<script type='text/javascript'> ue && ue._bf && ue._bf.modules && ue._bf.mpm && ue._bf.modules.push( ue._bf.mpm("cc_ie8", 1) ) </script>
<![endif]-->
<!--[if IE 9]>
<script type='text/javascript'> ue && ue._bf && ue._bf.modules && ue._bf.mpm && ue._bf.modules.push( ue._bf.mpm("cc_ie9", 1) ) </script>
<![endif]-->
<script type='text/javascript'>
ue_csm.ue.exec(function(e,f){var a=e.ue||{},b=a._wlo,d;if(a.ssw){d=a.ssw("CSM_previousURL").val;var c=f.location,b=b?b:c&&c.href?c.href.split("#")[0]:void 0;c=(b||"")===a.ssw("CSM_previousURL").val;!c&&b&&a.ssw("CSM_previousURL",b);d=c?"reload":d?"intrapage-transition":"first-view"}else d="unknown";a._nt=d},"NavTypeModule")(ue_csm,window);

</script>
<script type='text/javascript'>
var ue_mbl=ue_csm.ue.exec(function(e,a){function l(f){b=f||{};a.AMZNPerformance=b;b.transition=b.transition||{};b.timing=b.timing||{};e.ue.exec(m,"csm-android-check")()&&b.tags instanceof Array&&(f=-1!=b.tags.indexOf("usesAppStartTime")||b.transition.type?!b.transition.type&&-1<b.tags.indexOf("usesAppStartTime")?"warm-start":void 0:"view-transition",f&&(b.transition.type=f));"reload"===c._nt&&e.ue_orct||"intrapage-transition"===c._nt?a.performance&&performance.timing&&performance.timing.navigationStart?
b.timing.transitionStart=a.performance.timing.navigationStart:delete b.timing.transitionStart:"undefined"===typeof c._nt&&a.performance&&performance.timing&&performance.timing.navigationStart&&a.history&&"function"===typeof a.History&&"object"===typeof a.history&&history.length&&1!=history.length&&(b.timing.transitionStart=a.performance.timing.navigationStart);f=b.transition;var d;d=c._nt?c._nt:void 0;f.subType=d;a.ue&&a.ue.tag&&a.ue.tag("has-AMZNPerformance");c.isl&&a.uex&&uex("at","csm-timing");
n()}function p(b){a.ue&&a.ue.count&&a.ue.count("csm-cordova-plugin-failed",1)}function m(){return a.webclient&&"function"===typeof a.webclient.getRealClickTime?a.cordova&&a.cordova.platformId&&"ios"==a.cordova.platformId?!1:!0:!1}function n(){try{P.register("AMZNPerformance",function(){return b})}catch(a){}}function h(){if(!b)return"";ue_mbl.cnt=null;for(var a=b.timing,d=b.transition,a=["mts",k(a.transitionStart),"mps",k(a.processStart),"mtt",d.type,"mtst",d.subType,"mtlt",d.launchType],d="",c=0;c<
a.length;c+=2){var e=a[c],g=a[c+1];"undefined"!==typeof g&&(d+="&"+e+"="+g)}return d}function k(a){if("undefined"!==typeof a&&"undefined"!==typeof g)return a-g}function q(a,c){b&&(g=c,b.timing.transitionStart=a,b.transition.type="view-transition",b.transition.subType="ajax-transition",b.transition.launchType="normal",ue_mbl.cnt=h)}var c=e.ue||{},g=e.ue_t0,b;if(a.P&&a.P.when&&a.P.register)return a.P.when("CSMPlugin").execute(function(a){a.buildAMZNPerformance&&a.buildAMZNPerformance({successCallback:l,
failCallback:p})}),{cnt:h,ajax:q}},"mobile-timing")(ue_csm,window);

</script>
<script type='text/javascript'>
(function(b){function c(){var d=[];a.log&&a.log.isStub&&a.log.replay(function(a){e(d,a)});a.clog&&a.clog.isStub&&a.clog.replay(function(a){e(d,a)});d.length&&(a._flhs+=1,n(d),p(d))}function g(){a.log&&a.log.isStub&&(a.onflush&&a.onflush.replay&&a.onflush.replay(function(a){a[0]()}),a.onunload&&a.onunload.replay&&a.onunload.replay(function(a){a[0]()}),c())}function e(d,b){var c=b[1],f=b[0],e={};a._lpn[c]=(a._lpn[c]||0)+1;e[c]=f;d.push(e)}function n(b){q&&(a._lpn.csm=(a._lpn.csm||0)+1,b.push({csm:{k:"chk",
f:a._flhs,l:a._lpn,s:"inln"}}))}function p(a){if(h)a=k(a),b.navigator.sendBeacon(l,a);else{a=k(a);var c=new b[f];c.open("POST",l,!0);c.setRequestHeader&&c.setRequestHeader("Content-type","text/plain");c.send(a)}}function k(a){return JSON.stringify({rid:b.ue_id,sid:b.ue_sid,mid:b.ue_mid,mkt:b.ue_mkt,sn:b.ue_sn,reqs:a})}var f="XMLHttpRequest",q=1===b.ue_ddq,a=b.ue,r=b[f]&&"withCredentials"in new b[f],h=b.navigator&&b.navigator.sendBeacon,l="//"+b.ue_furl+"/1/batch/1/OE/",m=b.ue_fci_ft||5E3;a&&(r||h)&&
(a._flhs=a._flhs||0,a._lpn=a._lpn||{},a.attach&&(a.attach("beforeunload",g),a.attach("pagehide",g)),m&&b.setTimeout(c,m),a._ffci=c)})(window);

</script>
<script type="text/javascript">
ue_csm.ue.exec(function(w,a){function q(){if(d&&f){var a;a:{try{a=d.getItem(g);break a}catch(c){}a=void 0}if(a)return b=a,!0}return!1}function r(){b=h;k();if(f)try{d.setItem(g,b)}catch(a){}}function s(){b=1===a.ue_adb_chk?l:h;k();if(f)try{d.setItem(g,b)}catch(c){}}function m(){a.ue_adb_rtla&&c&&0<c.ec&&!1===n&&(c.elh=null,ueLogError({m:"Hit Info",fromOnError:1},{logLevel:"INFO",adb:b}),n=!0)}function k(){e.tag(b);e.isl&&a.uex&&uex("at",b);p&&p.updateCsmHit("adb",b);c&&0<c.ec?m():a.ue_adb_rtla&&c&&
(c.elh=m)}function t(){return b}if(a.ue_adb){var e=a.ue,h="adblk_yes",l="adblk_no",b="adblk_unk",d;a:{try{d=a.localStorage;break a}catch(x){}d=void 0}var g="csm:adb",c=a.ue_err,p=e.cookie,f=void 0!==a.localStorage,u=0.98<Math.random(),n=!1,v=q();u||!v?e.uels("https://m.media-amazon.com/images/G/01/csm/showads.v2.js",{onerror:r,onload:s}):k();a.ue_isAdb=t;a.ue_isAdb.unk="adblk_unk";a.ue_isAdb.no=l;a.ue_isAdb.yes=h}},"adb")(document,window);

</script>
<script type='text/javascript'>
(function(c,d){var a=c.ue,b=d.characterSet;a&&a.tag&&b&&("UTF-8"!==b&&a.tag("pageEncoding:NonUTF-8"),a.tag("pageEncoding:"+b))})(ue_csm,document);

</script>
<script type="text/javascript">
var ue_unrt = 750;
(function(d,e,l){var h,g,k;function m(b){try{if(b.id)return"//*[@id='"+b.id+"']";var f,a=1,c;for(c=b.previousSibling;c;c=c.previousSibling)c.nodeName===b.nodeName&&(a+=1);f=a;var d=b.nodeName;1!==f&&(d+="["+f+"]");b.parentNode&&(d=m(b.parentNode)+"/"+d);return d}catch(e){return"DETACHED"}}function p(b){var f=d.ue.d();h=f;g=!0;k=e.setTimeout(function(){g=!1;var a=b.srcElement||b.target||{},c={k:q,t:f,x:b.pageX,y:b.pageY,p:m(a),n:a.nodeName};b.button&&(c.b=b.button);a.type&&(c.ty=a.type);a.href&&(c.r=
a.href);a.id&&(c.i=a.id);a.className&&a.className.split&&(c.c=a.className.split(/\s+/));d.ue.log(c,r)},n)}function s(){g&&(d.ue.d()-h<n&&e.clearTimeout(k),g=!1)}if(e.MutationObserver&&e.ue_unrt&&d){var n=e.ue_unrt,r="cel",q="unr_mcm";g=!1;k=h=0;d.ue.attach("click",p,l);(new MutationObserver(s)).observe(l,{childList:!0,attributes:!0,characterData:!0,subtree:!0})}})(ue_csm,window,document);

</script>
</body>
</html>
