<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use PDF;
use Dompdf\Dompdf;
use App\Http\Requests;
use Dompdf\Options;

class InvoiceController extends Controller
{
    /**
     * Update the specified user.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
     public function __construct()
     {
       $this->middleware('auth'); // check if user is logged in
       $this->middleware('check.account'); // check if user is verified/banned
     }

     public function GenerateInvoiceNewEgg()
     {
       return view('generator/newegg/output/newegg', [
         'name' => input::get('name'),
         'address' => input::get('address'),
         'zip' => input::get('zip'),
         'city' => input::get('city'),
         'region' => input::get('region'),
         'country' => input::get('country'),
         'ordernr' => input::get('ordernr'),
         'phone' => input::get('phone'),
         'invoicenr' => input::get('invoicenr'),
         'orderdate' => input::get('orderdate'),
         'digit' => $this->RandomDigit(),
         'total' => $this->GrandTotalNewEgg(),
         'subtotal' => $this->SubTotalNewEgg(),
         'price' => input::get('price'),
         'product' => input::get('item'),
         'tax' => input::get('tax'),
         'tracking' => input::get('price'),
         'quantity' => input::get('quantity'),
         'productnr' => input::get('productnr')
       ]);
     }

     public function GenerateInvoiceForBol()
     {
       return view('generator/bol/output/bol', [
         'firstname' => input::get('firstname'),
         'surname' => input::get('surname'),
         'ordernr' => input::get('ordernr'),
         'address' => input::get('address'),
         'zip' => input::get('zip'),
         'city' => input::get('city'),
         'orderdate' => input::get('orderdate'),
         'expdate' => input::get('expdate'),
         'orderoverview' => input::get('orderoverview'),
         'customernr' => input::get('customernr'),
         'dispatchdate' => input::get('dispatchdate'),
         'orderdate' => input::get('orderdate'),
         'itemid' => input::get('itemid'),
         'item' => input::get('item'),
         'quantity' => input::get('quantity'),
         'price' => input::get('price'),
         'subtotal' => $this->CalculateGrandTotalBol()



       ]);
     }

     public function GenerateInvoice($name)
     {
        if ( $name == 'uk' ) {
          return view('generator/amazon/output/uk', [
                'name' => Input::get('name'),
                'order' => Input::get('order'),
                'address' => Input::get('address'),
                'zip' => Input::get('zip'),
                'product' => Input::get('product'),
                'region' => Input::get('region'),
                'city' => Input::get('city'),
                'address2' => Input::get('address2'),
                'country' => Input::get('country'),
                'orderdate' => ucwords(Input::get('orderdate')),
                'price' => Input::get('price'),
                'tax' => Input::get('tax'),
                'quantity' => Input::get('quantity'),
                'soldby' => $this->checkForWord(Input::get('soldby')),
                'shippingprice' => Input::get('shippingprice'),
                'dispatchdate' => ucwords($this->addDate(input::get('orderdate'))),
                'total' => $this->calculgrandtotal(),
                'subtotal' => $this->calculsubtotal(),
                'beforetax' => $this->calculatebeforetax()
              ]);

        } elseif ( $name == 'us' ) {
          return view('generator/amazon/output/us', [
                'name' => Input::get('name'),
                'order' => Input::get('order'),
                'address' => Input::get('address'),
                'zip' => Input::get('zip'),
                'product' => Input::get('product'),
                'region' => Input::get('region'),
                'city' => Input::get('city'),
                'address2' => Input::get('address2'),
                'country' => Input::get('country'),
                'orderdate' => ucwords(Input::get('orderdate')),
                'price' => Input::get('price'),
                'tax' => Input::get('tax'),
                'quantity' => Input::get('quantity'),
                'soldby' => $this->checkForWord(Input::get('soldby')),
                'shippingprice' => Input::get('shippingprice'),
                'dispatchdate' => ucwords($this->addDate(input::get('orderdate'))),
                'total' => $this->calculgrandtotal(),
                'subtotal' => $this->calculsubtotal(),
                'beforetax' => $this->calculatebeforetax()
              ]);

        } elseif ( $name == 'de' ) {
          return view('generator/amazon/output/de', [
                'name' => Input::get('name'),
                'order' => Input::get('order'),
                'address' => Input::get('address'),
                'zip' => Input::get('zip'),
                'product' => Input::get('product'),
                'region' => Input::get('region'),
                'city' => Input::get('city'),
                'address2' => Input::get('address2'),
                'country' => Input::get('country'),
                'orderdate' => ucwords(Input::get('orderdate')),
                'price' => Input::get('price'),
                'voucher' => Input::get('voucher'),
                'quantity' => Input::get('quantity'),
                'soldby' => $this->checkForWordDe(Input::get('soldby')),
                'shippingprice' => Input::get('shippingprice'),
                'dispatchdate' => ucwords($this->addDateDe(input::get('orderdate'))),
                'total' => $this->GrandTotalDe(),
                'subtotal' => $this->calculsubtotal(),
                'beforetax' => $this->calculatebeforetax()
              ]);

        } elseif ( $name == 'it' ) {
          return view('generator/amazon/output/it', [
                'name' => Input::get('name'),
                'order' => Input::get('order'),
                'address' => Input::get('address'),
                'zip' => Input::get('zip'),
                'product' => Input::get('product'),
                'region' => Input::get('region'),
                'city' => Input::get('city'),
                'address2' => Input::get('address2'),
                'country' => Input::get('country'),
                'orderdate' => ucwords(Input::get('orderdate')),
                'price' => Input::get('price'),
                'tax' => Input::get('tax'),
                'quantity' => Input::get('quantity'),
                'soldby' => $this->checkForWordIT(Input::get('soldby')),
                'shippingprice' => Input::get('shippingprice'),
                'dispatchdate' => ucwords($this->addDate(input::get('orderdate'))),
                'total' => $this->calculgrandtotal(),
                'subtotal' => $this->SubTotalNewEgg(),
                'beforetax' => $this->calculatebeforetax()
              ]);
        }
}

function checkForWord ( $givenWord )
 {

    if ( strpos($givenWord, 'Amazon') !== false )
 {
         $result = $givenWord;
    } else {
         $result = $givenWord . ' (<a href="#">View Profile</a>)';
    }

      return $result;
 }

 function checkForWordDe ( $givenWord )
  {

     if ( strpos($givenWord, 'Amazon') !== false )
  {
          $result = $givenWord;
     } else {
          $result = $givenWord . ' (<a href="#">Mitgliedsprofil</a>) <span style="color: #000">|</span> Haben Sie eine Frage zum Produkt? <a href="#">Frage an den Verkäufer stellen</a>';
     }

       return $result;
  }

  function checkForWordIT ( $givenWord )
   {

      if ( strpos($givenWord, 'Amazon') !== false )
   {
           $result = $givenWord;
      } else {
           $result = $givenWord . ' (<a href="#">profilo venditore</a>)';
      }

        return $result;
   }

   static function SubTotalNewEgg(){
     $price = input::get('price');
     $quantity = input:: get('quantity');
     $total = $price*$quantity;
     return number_format($total, 2);
   }

   static function GrandTotalNewEgg(){
     $price = input::get('price');
     $quantity = input::get('quantity');
     $tax = input::get('tax');
     $total = $price*$quantity+$tax;
     return number_format($total, 2);
   }

   static function RandomDigit(){
     $randomnr = mt_rand(1000, 9999);
     return $randomnr;
   }

  static function GrandTotalDe(){
    $price = input::get('price');
    $shipping = input::get('shippingprice');
    $quantity = input:: get('quantity');
    $voucher = input::get('voucher');
    $total = $price*$quantity+$shipping-$voucher;
    return number_format($total, 2);
  }

static function calculgrandtotal(){
    $tax = Input::get('tax');
    $price = Input::get('price');
    $shipprice = Input::get('shippingprice');
    $quantity = Input::get('quantity');
    $total = $price*$quantity+$tax+$shipprice;
    return number_format($total, 2);
}

static function calculsubtotal(){
    $price = Input::get('price');
    $quantity = Input::get('quantity');
    $subtotal = $price*$quantity;
    return number_format($subtotal, 2);
}

static function calculatebeforetax(){
  $price = Input::get('price');
  $shipprice = Input::get('shippingprice');
  $quantity = Input::get('quantity');
  $beforetax = $price*$quantity+$shipprice;
  return number_format($beforetax, 2);
}



public function addDate($date) {
$newDate = preg_match( '/[a-z][ ](.*?)[,]/', $date, $newDate );

 switch ($newDate[1]) {
    case ($newDate[1] <= 6):
  $dates = $newDate[1] + 3;
        $newestDate = '0' . $dates;
        break;
    case ($newDate[1] >= 7 and $newDate[1] < 10):
  $newestDate = $newDate[1] + 3;
        break;

  case ($newDate[1] <= 25 ):
  $newestDate = $newDate[1] + 3;
        break;
}

 return str_replace($newDate[1] , $newestDate , $date);

}

public function addDateDe($date) {
  preg_match( '/(.[0-9]). (.*?).([0-9]{4})/', $date, $newDate );
  	$fixDate = $newDate[1];
   switch ($fixDate) {
      case ($fixDate <= 6):
    $dates =  $fixDate + 3;
          $newestDate = "0" .$dates;
          break;
      case ($fixDate >= 7 and $fixDate < 10):
    $newestDate = $newDate[1] + 3;
          break;

    case ($fixDate <= 25 ):
    $newestDate = $fixDate + 3;
          break;
  	 case ($fixDate > 25):
  	 $newestDate = $fixDate;
  	 break;
  }

   return str_replace($fixDate , $newestDate , $date);
}



static function CalculateGrandTotalBol(){
    $price = Input::get('price');
    $quantity = Input::get('quantity');
    $subtotal = $price*$quantity;
    return number_format($subtotal, 2);
}






public function savetopdfus(){
ini_set('max_execution_time', 180);
$options = new Options();
$options->set('isRemoteEnabled', true);
$options->set('isHtml5ParserEnabled', true);
$dompdf = new Dompdf($options);
$html = View::make('generator/amazon/output/us', [
      'name' => Input::get('name'),
      'order' => Input::get('order'),
      'address' => Input::get('address'),
      'zip' => Input::get('zip'),
      'product' => Input::get('product'),
      'region' => Input::get('region'),
      'city' => Input::get('city'),
      'address2' => Input::get('address2'),
      'country' => Input::get('country'),
      'orderdate' => ucwords(Input::get('orderdate')),
      'price' => Input::get('price'),
      'tax' => Input::get('tax'),
      'quantity' => Input::get('quantity'),
      'soldby' => $this->checkForWord(Input::get('soldby')),
      'shippingprice' => Input::get('shippingprice'),
      'dispatchdate' => ucwords($this->addDate(input::get('orderdate'))),
      'total' => $this->calculgrandtotal(),
      'subtotal' => $this->calculsubtotal(),
      'beforetax' => $this->calculatebeforetax()
    ])->render();

$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();
$dompdf->stream();
}
}
