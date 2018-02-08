<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class ToolsController extends Controller
{

    public function __construct ()
    {
      $this->middleware('auth'); // check if user is logged in
      $this->middleware('check.account'); // check if user is verified/banned
    }


     public function BtcToUsd ()
     {

       return view('tools/BtcToUsd', [
         'BitcoinValue' => $this->GetBitcoinValue()
       ]);
     }

     public function GetBitcoinValue ()
     {
       // get the price
       $json = json_decode( file_get_contents ('https://api.bitfinex.com/v1/ticker/btcusd') , true );
       // make a variable
       $price = $json['last_price'];
       // return the rounded price
       return round( $price, 0, PHP_ROUND_HALF_EVEN);
     }
     public function ConvertBitcoinValue ($value)
     {
       // get the price
       $json = json_decode( file_get_contents ('https://api.bitfinex.com/v1/ticker/btcusd') , true );
       // make a variable
       $price = $json['last_price'];
       // return the rounded price
       return $value * $price;
     }
}
