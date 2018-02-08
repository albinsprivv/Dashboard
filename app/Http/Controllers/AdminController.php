<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth'); // check if user is logged in
      $this->middleware('check.account'); // check if user is verified/banned
      $this->middleware('check.if.admin'); // check if user is admin
    }

    // show dashboard index
    public function index()
    {
        return view('admin/home', [
          'recentAnnouncement' => DB::table('users')->count(),
          'totalUsers' => DB::table('users')->count()
        ]);
    }
}
