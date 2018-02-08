<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use Users;
use Carbon\Carbon;

class ProfileController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth'); // check if user is logged in
      $this->middleware('check.account'); // check if user is verified/banned
    }

    public function index()
    {
      return view('profile/profile');
    }

    public function settings()
    {
      $user = DB::table('users_settings')->where('username', Auth::user()->username)->first(); // get requested user
      $data = [
        'avatar'        => $user->avatar,
        'theme'         => $user->dashboard_theme,
        'fullName'      => $user->prefill_name,
        'address'       => $user->prefill_address,
        'city'          => $user->prefill_city,
        'region'        => $user->prefill_region,
        'zip'           => $user->prefill_zip,
        'country'       => $user->prefill_country
      ];
      return view('profile/settings', $data);
    }

    public function saveSettings($action, Request $request)
    {
      if ( $action == 'prefill')
      {
      $input = $request->all();
      $check = DB::table('users_settings')->where('username', Auth::user()->username)->update(array(
                                                'prefill_name'        => $input['name'],
                                                'prefill_address'     => $input['address'],
                                                'prefill_city'         => $input['city'],
                                                'prefill_region'       => $input['region'],
                                                'prefill_zip'          => $input['zip'],
                                                'prefill_country'       => $input['country'],
                                                'updated_at' => Carbon::now()
                                                        ));
    return 'success';
  } elseif ( $action == 'general' ) {
    $input = $request->all();
    $check = DB::table('users_settings')->where('username', Auth::user()->username)->update(array(
                                              'avatar'        => $input['avatar'],
                                              'dashboard_theme'     => $input['theme'],
                                              'updated_at' => Carbon::now()
                                                      ));
    return 'success';
  }
    }

    public function getUser($name)
    {
      $user = DB::table('users')->where('username', $name)->first(); // get requested user

      if ( $user ) // could we find the user?
      {
        // yes we found the user
        return view('profile/specific_profile', [
          'name'        => $user->name,
          'email'       => $user->email,
          'isadmin'     => $user->is_admin,
          'isbanned'    => $user->is_banned
        ]); // return view with the requested user's info

      } else {
        // we couldn't find the user
        return view('error/error', [
          'errorTitle'        => $name . ' not found!',
          'errorDescription'  => 'idk but he dead probably'
        ]);
      }
    }
}
