<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// amazon generator routes
Route::get('/generator/amazon/it', function () {
  $user = DB::table('users_settings')->where('username', Auth::user()->username)->first(); // get requested user
  $data = [
    'fullName'      => $user->prefill_name,
    'address'       => $user->prefill_address,
    'city'          => $user->prefill_city,
    'region'        => $user->prefill_region,
    'zip'           => $user->prefill_zip,
    'country'       => $user->prefill_country
  ];
    return view('generator/amazon/de', $data);
})->middleware('check.account');

Route::get('/generator/amazon/de', function () {
  $user = DB::table('users_settings')->where('username', Auth::user()->username)->first(); // get requested user
  $data = [
    'fullName'      => $user->prefill_name,
    'address'       => $user->prefill_address,
    'city'          => $user->prefill_city,
    'region'        => $user->prefill_region,
    'zip'           => $user->prefill_zip,
    'country'       => $user->prefill_country
  ];
    return view('generator/amazon/de', $data);
  })->middleware('check.account');

Route::get('/generator/amazon/us', function () {
  $user = DB::table('users_settings')->where('username', Auth::user()->username)->first(); // get requested user
  $data = [
    'fullName'      => $user->prefill_name,
    'address'       => $user->prefill_address,
    'city'          => $user->prefill_city,
    'region'        => $user->prefill_region,
    'zip'           => $user->prefill_zip,
    'country'       => $user->prefill_country
  ];
   return view('generator/amazon/us', $data);
 })->middleware('check.account');

Route::get('/generator/amazon/uk', function () {
  $user = DB::table('users_settings')->where('username', Auth::user()->username)->first(); // get requested user
  $data = [
    'fullName'      => $user->prefill_name,
    'address'       => $user->prefill_address,
    'city'          => $user->prefill_city,
    'region'        => $user->prefill_region,
    'zip'           => $user->prefill_zip,
    'country'       => $user->prefill_country
  ];
     return view('generator/amazon/uk', $data);
   })->middleware('check.account');

Route::post('/generator/amazon/{name}/invoice', 'InvoiceController@GenerateInvoice');
Route::get('/generator/amazon/{name}/invoice', function () { return view('error/error', ['errorTitle' => '404 not found', 'errorDescription' => 'Can\'t access this page this way, bro', 'go_home' => 'yes']); });

// Bol route
route::get('generator/bol/', function() { return view('generator/bol/bol'); })->middleware('check.account');
route::post('generator/bol/invoice', 'InvoiceController@GenerateInvoiceForBol')->middleware('check.account');

//newegg routes
route::get('generator/newegg', function() { return view('generator/newegg/newegg'); })->middleware('check.account');
route::post('generator/newegg/invoice', 'invoicecontroller@GenerateInvoiceNewEgg')->middleware('check.account');

// Premium routes
Route::get('generator/serial/oppo', function () {   return view('generator/serial/oppo');   })->middleware('check.account');

// tools Routes
Route::get('/tools/btc-to-usd', 'ToolsController@BtcToUsd');
Route::get('/tools/btc-to-usd/value', 'ToolsController@GetBitcoinValue');
Route::get('/tools/btc-to-usd/value/{value}', 'ToolsController@ConvertBitcoinValue');

//changelog
Route::get('/changelog', function () {  return view('tools/changelog');  })->middleware('check.account');

// auth routes + home
Auth::routes();
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/home', 'HomeController@index');

// profile routes
Route::get('/profile', 'ProfileController@index');
Route::get('/profile/settings', 'ProfileController@settings');
Route::post('/profile/settings/save/{action}', 'ProfileController@saveSettings');
Route::get('/profile/settings/save/{action}', function () { return view('error/error', ['errorTitle' => '404 not found', 'errorDescription' => 'Can\'t access this page this way, bro', 'go_home' => 'yes']); });
Route::get('/user/{name}', 'ProfileController@getUser');
Route::get('/profile/invoices', 'ProfileController@showInvoices');


// admin cp
Route::get('/admin', 'AdminController@index');
