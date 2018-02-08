<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="" xml:lang="">
<head>
<title>Bol Invoice</title>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<style type="text/css">
<!--
	p {margin: 0; padding: 0;}	.ft00{font-size:10px;font-family:Times;color:#000000;}
	.ft01{font-size:16px;font-family:Times;color:#000000;}
	.ft02{font-size:10px;font-family:Times;color:#0000ff;}
	.ft03{font-size:7px;font-family:Times;color:#808080;}
	.ft04{font-size:10px;font-family:Times;color:#808080;}
	.ft05{font-size:7px;font-family:Times;color:#000000;}
	.ft06{font-size:7px;font-family:Times;color:#0000ff;}
	.ft07{font-size:10px;line-height:15px;font-family:Times;color:#000000;}
	.ft08{font-size:16px;line-height:21px;font-family:Times;color:#000000;}
	.ft09{font-size:7px;line-height:12px;font-family:Times;color:#000000;}
-->
</style>
</head>
<body bgcolor="#fff" vlink="blue" link="blue">
<div id="page1-div" style="position:relative;width:892px;height:1263px;">
<img width="892" height="1263" src="{{ asset('img/94940086001.png') }}" alt="background image"/>
<p style="position:absolute;top:83px;left:42px;white-space:nowrap" class="ft00">&#160;</p>
<p style="position:absolute;top:239px;left:42px;white-space:nowrap" class="ft07">Geachte heer/mevrouw ,<br/>&#160;<br/>Hierbij ontvangt u het betaaloverzicht voor de verzonden producten.<br/>&#160;</p>
<p style="position:absolute;top:301px;left:42px;white-space:nowrap" class="ft08"><strong>Betaaloverzicht<br/>&#160;</p></strong>
<p style="position:absolute;top:341px;left:42px;white-space:nowrap" class="ft07"><strong>Datum:&#160;</strong>{{ $orderdate }}<br/><strong>Vervaldatum:&#160;</strong>{{ $expdate }}<br/><strong>Besteldatum:&#160;</strong>{{ $orderdate }}<br/><strong>Betaaloverzicht:&#160;</strong>{{ $ordernr }}027<br/><strong>Klantnummer:&#160;</strong>{{ $customernr }}<br/>&#160;<br/>Pagina 1 van 1<br/>&#160;</p>
<p style="position:absolute;top:628px;left:42px;white-space:nowrap" class="ft00">&#160;</p>
<p style="position:absolute;top:101px;left:42px;white-space:nowrap" class="ft07">bol.com b.v.<br/>Papendorpseweg 100, 3528 BJ Utrecht<br/>IBAN: NL27INGB0000026500<br/>BIC: INGBNL2A</p>
<p style="position:absolute;top:176px;left:42px;white-space:nowrap" class="ft00">Voor vragen of opmerkingen ga naar:</p>
<p style="position:absolute;top:191px;left:42px;white-space:nowrap" class="ft02">http://www.bol.com/klantenservice</p>
<p style="position:absolute;top:101px;left:446px;white-space:nowrap" class="ft07">Mw. {{ $firstname }} {{ $surname }}<br/>{{ $address }}<br/>{{ $zip }} {{ $city }}</p>
<p style="position:absolute;top:461px;left:45px;white-space:nowrap" class="ft00"><strong>Ordernummer</strong></p>
<p style="position:absolute;top:461px;left:195px;white-space:nowrap" class="ft00"><strong>Artikelomschrijving</strong></p>
<p style="position:absolute;top:461px;left:502px;white-space:nowrap" class="ft00"><strong>Aantal</strong></p>
<p style="position:absolute;top:461px;left:605px;white-space:nowrap" class="ft00"><strong>Prijs/st</strong></p>
<p style="position:absolute;top:461px;left:704px;white-space:nowrap" class="ft00"><strong>Korting</strong></p>
<p style="position:absolute;top:461px;left:805px;white-space:nowrap" class="ft00"><strong>Bedrag</strong></p>
<p style="position:absolute;top:479px;left:94px;white-space:nowrap" class="ft03">ISBN/EAN</p>
<p style="position:absolute;top:494px;left:45px;white-space:nowrap" class="ft00"><strong>{{ $ordernr }}</strong></p>
<p style="position:absolute;top:494px;left:121px;white-space:nowrap" class="ft04">&#160; (Verzenddatum {{ $dispatchdate }})</p>
<p style="position:absolute;top:512px;left:90px;white-space:nowrap" class="ft00">{{ $itemid }}&#160;{{ $item }}</p>
<p style="position:absolute;top:512px;left:540px;white-space:nowrap" class="ft00">{{ $quantity }}</p>
<p style="position:absolute;top:512px;left:601px;white-space:nowrap" class="ft00">€ {{ $price }}</p>
<p style="position:absolute;top:512px;left:801px;white-space:nowrap" class="ft00">€ {{ $subtotal }}</p>
<p style="position:absolute;top:534px;left:622px;white-space:nowrap" class="ft00"><strong>Subtotaal</strong></p>
<p style="position:absolute;top:534px;left:801px;white-space:nowrap" class="ft00"><strong>€ {{ $subtotal }}</strong></p>
<p style="position:absolute;top:559px;left:494px;white-space:nowrap" class="ft00">Totaalbedrag</p>
<p style="position:absolute;top:559px;left:801px;white-space:nowrap" class="ft00">€ {{ $subtotal }}</p>
<p style="position:absolute;top:583px;left:494px;white-space:nowrap" class="ft00">Cadeaubonnen</p>
<p style="position:absolute;top:583px;left:795px;white-space:nowrap" class="ft00">€ -{{ $subtotal }}</p>
<p style="position:absolute;top:607px;left:494px;white-space:nowrap" class="ft00"><strong>Te betalen</strong></p>
<p style="position:absolute;top:607px;left:808px;white-space:nowrap" class="ft00"><strong>€ 0,00</strong></p>
<p style="position:absolute;top:645px;left:45px;white-space:nowrap" class="ft09">Dit document is een overzicht van uw aankoop bij een externe verkoper. Een factuur<br/>met BTW gegevens kunt u opvragen bij de betreffende verkoper.</p>
<p style="position:absolute;top:645px;left:454px;white-space:nowrap" class="ft09">Op alle aanbiedingen, bestellingen, overeenkomsten, etc. zijn, bij uitsluiting van enige<br/>andere algemene voorwaarden, de algemene zakelijke voorwaarden van bol.com b.v.<br/>van toepassing. Raadpleeg voor deze voorwaarden onze site,&#160; <a href="#" style="text-decoration: none;">http://www.bol.com</a></p>
</div>
</body>
</html>
