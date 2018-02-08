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

        #enterAddressFormDiv .enterAddressFieldSeparatorDiv {
            clear: both;
        }

        .enterAddressFormInputError {
            background-color: #FFE4B5;
        }

        #chooseAddressDiv .chooseAddressEditThisAddressButton {
            margin: 0em .5em;
        }

        #chooseAddressDiv .chooseAddressDeleteThisAddressButton {
            margin: 0em .5em;
        }

        #chooseAddressDiv .chooseAddressChooseThisAddressRadioButton {
            vertical-align: -4em;
        }

        #chooseAddressDiv .chooseAddressChooseThisAddressRadioButtonDiv {
            float: left;
            height: 100%;
        }

        #chooseAddressDiv td {
            width: 33%;
        }

        #chooseAddressDiv .chooseAddressSeparator {
            margin-top: 1em;
        }

        #deleteAddressDiv {
            color: #a00000;
            padding-left: 3em;
        }
    </style>





    <style type="text/css">
        <!-- body {
            background-color: #FFFFFF;
        }

        * html body {
            margin-top: 0px;
        }

        .serif {
            font-family: times, serif;
            font-size: medium;
        }

        .sans {
            font-family: verdana, arial, helvetica, sans-serif;
            font-size: medium;
        }

        .small {
            font-family: verdana, arial, helvetica, sans-serif;
            font-size: small;
        }

        .h1 {
            font-family: verdana, arial, helvetica, sans-serif;
            color: #E47911;
            font-size: medium;
        }

        .h3color {
            font-family: verdana, arial, helvetica, sans-serif;
            color: #E47911;
            font-size: small;
        }

        h2.small {
            margin-bottom: 0em;
        }

        h2.h1 {
            margin-bottom: 0em;
        }

        h2.h3color {
            margin-bottom: 0em;
        }

        .tiny {
            font-family: verdana, arial, helvetica, sans-serif;
            font-size: x-small;
        }

        .listprice {
            font-family: arial, verdana, helvetica, sans-serif;
            text-decoration: line-through;
        }

        .attention {
            background-color: #FFFFD5;
        }

        .price {
            font-family: verdana, arial, helvetica, sans-serif;
            color: #990000;
        }

        .tinyprice {
            font-family: verdana, arial, helvetica, sans-serif;
            color: #990000;
            font-size: x-small;
        }

        .highlight {
            font-family: verdana, arial, helvetica, sans-serif;
            color: #990000;
            font-size: small;
        }

        .alertgreen {
            color: #009900;
            font-weight: bold;
        }

        .active-nav {
            background-color: #000000;
            color: #FFFFFF;
        }

        .inactive-nav {
            background-color: #FFFFFF;
            color: #000000;
        }

        .tigerBox .head {
            border: 1px solid #CCCC99;
            border-bottom-width: 0px;
            background-color: #EEEECC;
        }

        .tigerBox .body {
            border: 1px solid #CCCC99;
        }

        .tigerBoxWithEyebrow .head {
            border-width: 0px;
        }

        .tigerBoxWithEyebrow .body {
            border: 1px solid #CCCC99;
        }

        .detailPageTigerBox .head {
            border-width: 0px;
        }

        .detailPageTigerBox .body {
            border: 1px solid #CCCC99;
        }

        .detailPageTigerBox .darkCell {
            background-color: #EEEECC;
        }

        .eyebrow {
            font-family: verdana, arial, helvetica, sans-serif;
            font-size: 10px;
            font-weight: bold;
            text-transform: uppercase;
            text-decoration: none;
            color: #FFFFFF;
        }

        div#page-wrap {
            min-width: 980px;
        }

        div#leftcol,
        div#leftcolhidden {
            float: left;
            width: 180px;
            margin: 5px 0px 0px 5px;
            display: inline;
        }

        div#rightcol,
        div#rightcolhidden {
            float: right;
            width: 300px;
            margin-top: 5px;
        }

        div#leftcolhidden {
            clear: left;
        }

        div#rightcolhidden {
            clear: right;
        }

        div#center1,
        div#centercol,
        div#centerrightspancol {
            overflow: hidden;
        }

        * html div#center1 {
            width: 100%;
        }

        * html div#centercol {
            width: 100%;
        }

        * html div#centerrightspancol {
            width: 100%;
        }

        div#page-footer {
            clear: both;
        }

        * html div#page-wrap {
            border-right: 980px solid #fff;
            width: 100%;
            margin-right: 25px;
        }

        * html div#content {
            float: left;
            position: relative;
            margin-right: -980px;
        }

        a:active {
            font-family: verdana, arial, helvetica, sans-serif;
            color: #FF9933;
        }

        a:visited {
            font-family: verdana, arial, helvetica, sans-serif;
            color: #996633;
        }

        a:link {
            font-family: verdana, arial, helvetica, sans-serif;
            color: #004B91;
        }

        a.noclick,
        a.noclick:visited {
            color: #000000;
        }

        .noLinkDecoration a {
            text-decoration: none;
            border-bottom: none;
        }

        .noLinkDecoration a:hover {
            text-decoration: underline;
        }

        .noLinkDecoration a.dynamic:hover {
            text-decoration: none;
            border-bottom: 1px dashed;
        }

        .noLinkDecoration a.noclick:hover {
            color: #000000;
            text-decoration: none;
            border-bottom: 1px dashed;
        }

        .amabot_right .h1 {
            color: #E47911;
            font-size: .92em;
        }

        .amabot_right .amabot_widget .headline,
        .amabot_left .amabot_widget .headline {
            color: #E47911;
            font-size: .92em;
            display: block;
            font-weight: bold;
        }

        .amabot_widget .headline {
            color: #E47911;
            font-size: medium;
            display: block;
            font-weight: bold;
        }

        .amabot_right .amabot_widget {
            padding-top: 8px;
            padding-bottom: 8px;
            padding-left: 8px;
            padding-right: 8px;
            border-bottom: 1px solid #C9E1F4;
            border-left: 1px solid #C9E1F4;
            border-right: 1px solid #C9E1F4;
            border-top: 1px solid #C9E1F4;
        }

        .amabot_left .h1 {
            color: #E47911;
            font-size: .92em;
        }

        .amabot_left .amabot_widget {
            padding-top: 8px;
            padding-bottom: 8px;
            padding-left: 8px;
            padding-right: 8px;
            border-bottom: 1px solid #C9E1F4;
            border-left: 1px solid #C9E1F4;
            border-right: 1px solid #C9E1F4;
            border-top: 1px solid #C9E1F4;
        }

        .amabot_center div.unified_widget,
        .amabot_center .amabot_widget {
            font-size: 12px;
        }

        .amabot_right div.unified_widget,
        .amabot_right .amabot_widget {
            font-size: 12px;
        }

        .amabot_left div.unified_widget,
        .amabot_left .amabot_widget {
            font-size: 12px;
        }

        .nobullet {
            list-style-type: none;
        }

        .homepageTitle {
            font-size: 28pt;
            font-family: 'Arial Bold', Arial, sans-serif;
            font-weight: 800;
            font-variant: normal;
            color: #80B6CE;
            line-height: 1em;
        }

        .tigerbox {
            padding-top: 8px;
            padding-bottom: 8px;
            padding-left: 8px;
            padding-right: 8px;
            border-bottom: 1px solid #C9E1F4;
            border-left: 1px solid #C9E1F4;
            border-right: 1px solid #C9E1F4;
            border-top: 1px solid #C9E1F4;
        }

        .hr-leftbrowse {
            border-top-width: 1px;
            border-right-width: 1px;
            border-bottom-width: 1px;
            border-left-width: 1px;
            border-top-style: dashed;
            border-right-style: none;
            border-bottom-style: none;
            border-left-style: none;
            border-top-color: #999999;
            border-right-color: #999999;
            border-bottom-color: #999999;
            border-left-color: #999999;
            margin-top: 10px;
            margin-right: 5px;
            margin-bottom: 0px;
            margin-left: 5px;
        }

        div.unified_widget p {
            margin: 0 0 0.5em 0;
            line-height: 1.4em;
        }

        div.unified_widget h2 {
            color: #E47911;
            padding: 0;
        }

        .amabot_right div.unified_widget .headline,
        .amabot_left div.unified_widget .headline {
            color: #E47911;
            font-size: .92em;
            display: block;
            font-weight: bold;
        }

        div.unified_widget .headline {
            color: #E47911;
            font-size: medium;
            display: block;
            font-weight: bold;
        }

        div.unified_widget sup {
            font-weight: normal;
            font-size: 75%;
        }

        div.unified_widget h2 sup {
            font-size: 50%;
        }

        td.amabot_left div.unified_widget h2,
        td.amabot_right div.unified_widget h2,
        div.amabot_left div.unified_widget h2,
        div.amabot_right div.unified_widget h2 {
            font-size: 100%;
            margin: 0 0 0.5em 0;
        }

        td.amabot_center div.unified_widget h2,
        div.amabot_Center div.unified_widget h2 {
            font-size: 135%;
            font-weight: bold;
            margin: 0 0 0.35em 0px;
        }

        td.amabot_center,
        div.amabot_center {
            padding: 5px 15px 5px 10px;
        }

        div.unified_widget ul {
            margin: 1em 0;
            padding: 0 0 0 15px;
            list-style-position: inside;
        }

        div.unified_widget ol {
            margin: 0;
            padding: 0 0 0 2.5em;
        }

        div.unified_widget a:link,
        div.unified_widget a:visited {
            text-decoration: underline;
        }

        div.unified_widget a:hover {
            text-decoration: underline;
        }

        div.unified_widget p.seeMore {
            clear: both;
            font-family: verdana, arial, helvetica, sans-serif;
            margin: 0;
            padding-left: 1.15em;
            text-indent: -1.15em;
            font-size: 100%;
            font-weight: normal;
        }

        div.unified_widget p.seeMore a:link,
        div.unified_widget p.seeMore a:visited {
            text-decoration: underline;
        }

        div.unified_widget p.seeMore a:hover {
            text-decoration: underline;
        }

        div.unified_widget .carat,
        div.left_nav .carat {
            font-weight: bold;
            font-size: 120%;
            font-family: verdana, arial, helvetica, sans-serif;
            color: #E47911;
            margin-right: 0.20em;
        }

        div.unified_widget a img {
            border: 0;
        }

        div.h_rule {
            clear: both;
        }

        div#centerrightspancol div.h_rule {
            clear: right;
        }

        div.unified_widget {
            margin-bottom: 2em;
            clear: both;
        }

        div.unified_widget div.col1 {
            width: 100%;
        }

        div.unified_widget div.col2 {
            width: 49%;
        }

        div.unified_widget div.col3 {
            width: 32%;
        }

        div.unified_widget div.col4 {
            width: 24%;
        }

        div.unified_widget div.col5 {
            width: 19%;
        }

        div.unified_widget table {
            border: 0;
            border-collapse: collapse;
            width: 100%;
        }

        div.unified_widget td {
            padding: 0 8px 8px 0;
            vertical-align: top;
        }

        div.unified_widget table.col1 td {
            width: 100%;
        }

        div.unified_widget table.col2 td {
            width: 49%;
        }

        div.unified_widget table.col3 td {
            width: 32%;
        }

        div.unified_widget table.col4 td {
            width: 24%;
        }

        div.unified_widget table.col5 td {
            width: 19%;
        }

        div.unified_widget td.bottom {
            vertical-align: baseline;
        }

        div.unified_widget table h4,
        div.unified_widget h4 {
            color: #000;
            font-size: 100%;
            font-weight: normal;
            margin: 0;
            padding: 0;
        }

        div.rcmBody div.prodImage,
        amabot_widget div.prodImage {
            float: left;
            margin: 0px 0.5em 0.25em 0px;
        }

        td.amabot_right div.unified_widget,
        td.amabot_left div.unified_widget,
        div.amabot_right div.unified_widget,
        div.amabot_left div.unified_widget {
            border: 1px solid #C9E1F4;
            padding: 8px;
            margin-bottom: 20px;
        }

        * html td.amabot_right div.unified_widget,
        * html div.amabot_right div.unified_widget {
            height: 100%;
        }

        * html td.amabot_left div.unified_widget,
        * html div.amabot_left div.unified_widget {
            height: 100%;
        }

        div.rcmBody,
        amabot_widget div.rcmBody {
            line-height: 1.4em;
        }

        div.rcmBody a:link,
        div.rcmBody a:visited {
            text-decoration: underline;
        }

        div.rcmBody p.seeMore,
        amabot_widget div.rcmBody p.seeMore {
            margin-top: 0.5em;
        }

        div.rcmBody div.bannerImage {
            text-align: center;
        }

        div.rcmBody h2 span.homepageTitle {
            display: block;
            margin-bottom: -0.3em;
            margin-top: -0.12em;
            line-height: 1em;
        }

        div.rcmBody h2 img {
            float: none;
        }

        table.coopTable div.rcmBody .headline {
            font-size: 110%;
        }

        table.coopTable div.rcmBody h2 {
            font-size: 110%;
            font-weight: bold;
        }

        table.promo div.rcmBody h2 {
            font-size: 100%;
            font-weight: bold;
        }

        div.blurb div.title {
            font-weight: bold;
            padding-top: 5px;
            padding-bottom: 2px;
        }

        div.left_nav {
            font-family: Arial, sans-serif;
            font-size: 100%;
            margin: 0;
            line-height: 1.05em;
            width: 100%;
            border: 1px solid #C9E1F4;
            padding-bottom: 10px;
        }

        div.left_nav h2 {
            margin: 0 0 0 0;
            color: #000000;
            font-weight: bold;
            line-height: 1.25em;
            font-size: 100%;
            font-family: verdana, arial, helvetica, sans-serif;
            padding: 3px 6px;
            background-color: #EAF3FE;
        }

        div.left_nav h3 {
            font-family: verdana, arial, helvetica, sans-serif;
            margin: 0.5em 0 0.4em 0.5em;
            color: #E47911;
            font-weight: bold;
            line-height: 1em;
            font-size: 100%;
            padding-right: 0.5em;
        }

        div.left_nav ul {
            margin: 0;
            padding: 0;
        }

        div.left_nav li,
        div.left_nav p {
            list-style: none;
            margin: 0.5em 0.5em 0 1em;
            line-height: 1.2em;
        }

        div.left_nav hr {
            margin: 1em 0.5em;
            border-top: 0;
            border-left: 0;
            border-right: 0;
            border-bottom: 1px dashed #cccccc;
        }

        div.left_nav a:link,
        div.left_nav a:visited {
            color: #003399;
            text-decoration: none;
            font-family: Arial, sans-serif;
        }

        div.left_nav a:hover {
            color: #2a70fc;
            text-decoration: underline;
        }

        div.left_nav p.seeMore {
            padding-left: 0.9em;
            text-indent: -0.9em;
            margin-top: 0.35em;
            margin-bottom: 1em;
        }

        div.left_nav p.seeMore a:link,
        div.left_nav p.seeMore a:visited {
            text-decoration: none;
        }

        div.left_nav p.seeMore a:hover {
            text-decoration: underline;
        }

        div.asinItem {
            float: left;
            margin-bottom: 1em;
            width: 32%;
        }

        div.asinTextBlock {
            padding: 0 8px 8px 0;
        }

        div.asinItem div.prodImage {
            height: 121px;
            display: table-cell;
            vertical-align: bottom;
        }

        div.asinItem div.localImage {
            display: table-cell;
            vertical-align: bottom;
        }

        div.asinItem span {
            margin: 0.5em 0 0.25em 0;
        }

        div.asinItem ul {
            margin: 0;
            padding: 0 0 0.5em 1.3em;
            text-indent: -1.3em;
            font-size: 90%;
        }

        div.asinTitle {
            padding-top: 3px;
            padding-bottom: 2px;
        }

        div.row {
            clear: both;
        }

        body.dp {}

        body.dp div.h_rule {
            clear: none;
        }

        body.dp div.unified_widget {
            clear: none;
        }

        div.asinCoop div.asinItem {
            float: none;
            width: 100%;
        }

        div.asinCoop_header {}

        div.asinCoop_footer {}

        div.newAndFuture div.asinItem ul {
            font-size: 100%;
        }

        div.newAndFuture div.asinItem li {
            list-style-position: outside;
            margin: 0 0 0.35em 20px;
            padding: 0;
            text-indent: 0;
        }

        div.newAndFuture h3 {
            font-size: 100%;
            margin: 1em 0;
        }

        div.newAndFuture a:link,
        div.newAndFuture a:visited {
            text-decoration: underline;
        }

        div.newAndFuture a:hover {
            text-decoration: underline;
        }

        div.newAndFuture p.seeMore {
            margin: -0.75em 0 0 35px;
        }

        div.unified_widget ol.topList {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        div.unified_widget ol.topList li {
            list-style: none;
            clear: both;
            display: list-item;
            padding-top: 6px;
        }

        div.unified_widget ol.topList .productImage {
            display: block;
            float: left;
            vertical-align: top;
            text-align: center;
            width: 60px;
        }

        div.unified_widget ol.topList .productText {
            display: block;
            float: left;
            padding-left: 10px;
            vertical-align: top;
        }

        :root div.unified_widget span.productImage {
            display: table-cell;
            float: none;
        }

        :root div.unified_widget span.productText {
            display: table-cell;
            float: none;
        }

        div.unified_widget dl.priceBlock {
            margin: 0 0 0.45em 0;
        }

        div.unified_widget dl.priceBlock dt {
            clear: left;
            font-weight: bold;
            float: left;
            margin: 0 0.3em 0 0;
        }

        div.unified_widget dl.priceBlock dd {
            margin: 0 0 0.2em 0;
        }

        div.unified_widget .bold {
            font-weight: bold;
        }

        div.unified_widget .byline {
            font-size: 95%;
            font-weight: normal;
        }

        table.thirdLvlNavContent div.blurb {
            margin: 10px;
        }

        div.pageBanner h1 {
            font-family: Arial, Helvetica, sans-serif;
            font-weight: normal;
            font-size: 225%;
            color: #e47911;
            letter-spacing: -0.03em;
            margin: 0;
        }

        div.pageBanner p {
            font-size: 90%;
            color: #888888;
            margin: 0;
        }

        div.pageBanner h1.bkgnd {
            background-repeat: no-repeat;
            background-color: #FFFFFF;
            overflow: hidden;
            text-indent: -100em;
        }

        INPUT {
            font-family: fixed;
        }

        BODY {
            font-family: verdana, arial, helvetica, sans-serif;
            font-size: small;
        }

        TD {
            font-family: verdana, arial, helvetica, sans-serif;
            font-size: small;
        }

        TH {
            font-family: verdana, arial, helvetica, sans-serif;
            font-size: small;
        }

        -->
    </style>

    <title>Amazon.it - Ordine {{ $order }}</title>

</head>

<body>





    <img src="https://i.imgur.com/hLZmtP5.gif" width="111" align="left" height="33" border="0" />

    <br />





    <br clear="all" />
    <center><b class="h1">Dettagli finali per l'ordine #{{ $order }}</b>
        <br /><a href="#">Stampa e conserva questa pagina.Stampa e conserva questa pagina.</a></center>
    <br />





    <table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td valign="top" align="left">

                <b> Ordinato il:</b> {{ $orderdate }}
            </td>
        </tr>
        <tr>
            <td valign="top" align="left">
                <b> Numero ordine Amazon.it:</b> {{ $order }}
            </td>

        </tr>
        <tr>
            <td valign="top" align="left">
                <b>
     Totale ordine:
     <nobr>EUR 0.00</nobr>
   </b>
            </td>
        </tr>

    </table>
    <br />





    <table width="90%" border="0" cellspacing="0" cellpadding="0" bgcolor="#000000" align="center">
        <tr bgcolor="#000000">
            <td>
                <table width="100%" border="0" cellspacing="3" cellpadding="0" align="center" bgcolor="#000000">

                    <tr bgcolor="#ffffff">
                        <td valign="top" colspan="2">
                            <table width="100%" border="0" cellspacing="0" cellpadding="5">
                                <tr bgcolor="#ffffff">
                                    <td>
                                        <b class="sans"><center>Spedito il {{ $dispatchdate}}</center></b>
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
                                                    <b>Articoli ordinati</b>
                                                </td>

                                                <td align="right" valign="top">
                                                    <b>Prezzo</b>
                                                </td>
                                            </tr>





                                            <tr>
                                                <input type="hidden" name="originalQuantity.jnomktiuqpmpy" value="1" />
                                                <td colspan="1" valign="top">
                                                    {{ $quantity }} di:
                                                    <i>{{ $product }}</i>

                                                    <br /> <span class='tiny'>


															Condizione: Nuovo <br />










															Venduto da: {!! $soldby  !!}<br />    </span>

                                                </td>
                                                <td align="right" valign="top" colspan="2">
                                                    <nobr>EUR {{ $price }}</nobr>
                                                    <br />
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
                                        <b>Indirizzo di spedizione:</b>
                                        <br />
                                        <div class="displayAddressDiv">
                                            <ul class="displayAddressUL">
                                                <li class="displayAddressLI displayAddressFullName">{{ $name }}</li>
                                                <li class="displayAddressLI displayAddressAddressLine1">{{ $address}}</li>
                                                <li class="displayAddressLI displayAddressAddressLine2">{{ $address2}}</li>
                                                <li class="displayAddressLI displayAddressCityStateOrRegionPostalCode">{{ $city }} {{ $region }} {{ $zip }}</li>
                                                <li class="displayAddressLI displayAddressCountryName">{{ $country }}</li>
                                            </ul>
                                        </div>
                                        <br /><b>Modalità di spedizione:</b>
                                        <br />1 giorno
                                        <br />
                                    </td>
                                    <td align="right">
                                        <table border="0" cellpadding="0" cellspacing="1">
                                            <tr valign="top">
                                                <td nowrap="nowrap" align="right">Subtotale articoli:</td>
                                                <td nowrap="nowrap" align="right">EUR {{ $subtotal }}</td>
                                            </tr>
                                            <tr valign="top">
                                                <td nowrap="nowrap" align="right">Costi di spedizione:</td>
                                                <td nowrap="nowrap" align="right">EUR {{ $shippingprice }}</td>
                                            </tr>
                                            <tr valign="top">
                                                <td nowrap="nowrap" align="right">&nbsp;</td>
                                                <td nowrap="nowrap" align="right">-----</td>
                                            </tr>
                                            <tr valign="top">
                                                <td nowrap="nowrap" align="right">Totale IVA esclusa:</td>
                                                <td nowrap="nowrap" align="right">EUR {{ $beforetax }}</td>
                                            </tr>
                                            <tr valign="top">
                                                <td nowrap="nowrap" align="right">IVA:</td>
                                                <td nowrap="nowrap" align="right">EUR {{ $tax }}</td>
                                            </tr>
                                            <tr valign="top">
                                                <td nowrap="nowrap" align="right">Sconti applicati:</td>
                                                <td nowrap="nowrap" align="right">&#45;EUR {{ $total }}</td>
                                            </tr>

                                            <tr valign="top">
                                                <td nowrap="nowrap" align="right">&nbsp;</td>
                                                <td nowrap="nowrap" align="right">-----</td>
                                            </tr>
                                            <tr valign="top">
                                                <td nowrap="nowrap" align="right"><b>Totale per questa spedizione:</b></td>
                                                <td nowrap="nowrap" align="right"><b> EUR 0.00</b></td>
                                            </tr>
                                            <tr valign="top">
                                                <td nowrap="nowrap" align="right"><b>Sconti applicati:</b></td>
                                                <td nowrap="nowrap" align="right"> <b>&#45;EUR {{ $total }}</b></td>
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
    <table width="90%" border="0" cellspacing="0" cellpadding="0" bgcolor="#000000" align="center">
        <tr bgcolor="#000000">
            <td>
                <table width="100%" border="0" cellspacing="3" cellpadding="0" align="center" bgcolor="#000000">
                    <tr bgcolor="#ffffff">
                        <td valign="top" colspan="2">
                            <table width="100%" border="0" cellspacing="0" cellpadding="5">
                                <tr bgcolor="#ffffff">
                                    <td>
                                        <b class="sans"><center>Informazioni di pagamento</center></b>
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
                                                            <td nowrap="nowrap" align="right">Subtotale articoli:</td>
                                                            <td nowrap="nowrap" align="right">EUR {{ $subtotal }}</td>
                                                        </tr>
                                                        <tr valign="top">
                                                            <td nowrap="nowrap" align="right">Costi di spedizione:</td>

                                                            <td nowrap="nowrap" align="right">EUR {{ $shippingprice }}></td>
                                                        </tr>
                                                        <tr valign="top">
                                                            <td nowrap="nowrap" align="right">&nbsp;</td>
                                                            <td nowrap="nowrap" align="right">-----</td>
                                                        </tr>
                                                        <tr valign="top">
                                                            <td nowrap="nowrap" align="right">Totale IVA esclusa:</td>

                                                            <td nowrap="nowrap" align="right">EUR {{ $beforetax }}</td>
                                                        </tr>
                                                        <tr valign="top">
                                                            <td nowrap="nowrap" align="right">IVA:</td>
                                                            <td nowrap="nowrap" align="right">EUR {{ $tax }}</td>
                                                        </tr>
                                            <tr valign="top">
                                                <td nowrap="nowrap" align="right">Sconti applicati:</td>
                                                <td nowrap="nowrap" align="right"> &#45;EUR {{ $total }}</td>
                                            </tr>
                                                        <tr valign="top">
                                                            <td nowrap="nowrap" align="right">&nbsp;</td>

                                                            <td nowrap="nowrap" align="right">-----</td>
                                                        </tr>
                                                        <tr valign="top">
                                                            <td nowrap="nowrap" align="right"><b>Totale:</b></td>
                                                            <td nowrap="nowrap" align="right"><b>&nbsp;EUR 0.00</b></td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                        <b>Modalità di pagamento: </b>
                                        <br />Buono Regalo
                                        <br />
                                        <br /><b>Indirizzo associato alla modalità di pagamento:</b>
                                        <br />
                                        <div class="displayAddressDiv">
                                            <ul class="displayAddressUL">
                                                <li class="displayAddressLI displayAddressFullName">{{ $name }}</li>
                                                <li class="displayAddressLI displayAddressAddressLine1">{{ $address }}</li>
                                                <li class="displayAddressLI displayAddressAddressLine2">{{ $address2 }}</li>
                                                <li class="displayAddressLI displayAddressCityStateOrRegionPostalCode">{{ $city }} {{ $region }} {{ $zip }}</li>
                                                <li class="displayAddressLI displayAddressCountryName">{{ $country }}</li>
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
    <center>
        <p>Per visualizzare lo stato dell'ordine, torna alla sezione <a href="https://www.amazon.it/gp/css/summary/edit.html?ie=UTF8&orderID={{ $order }}">Riepilogo ordine.</a>.</p>
        <p><b>Nota:</b> Questa non è una fattura.</p>
    </center>
    <br />
    <table align="center" width="100%">
        <tr align="center">
            <td colspan="2">
                <font size="-2">
					<a href="http://www.amazon.it/gp/help/customer/display.html?ie=UTF8&nodeId=508088" rel="nofollow">Condizioni generali di uso e vendita</a>&nbsp;|&nbsp;
					<a href="http://www.amazon.it/gp/help/customer/display.html?ie=UTF8&nodeId=468496" rel="nofollow">Informativa sulla privacy</a>&nbsp;|&nbsp;
					<a href="http://www.amazon.it/gp/help/customer/display.html?ie=UTF8&nodeId=468496" rel="nofollow"> Nota legale</a>&nbsp;&nbsp;&#169; 1996-2017, Amazon.com, Inc. o società affiliate.</font>
            </td>
        </tr>
    </table>
</body>
</html>
