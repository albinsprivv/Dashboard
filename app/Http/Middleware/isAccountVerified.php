<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class isAccountVerified
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

     function __construct()
     {
       //$this->middleware('getOnlineUsers');
     }
     public function handle($request, Closure $next)
     {
       if ( isset(Auth::user()->username) )
       {
          // user is logged in, let's proceed to verify account details
         if (  ! Auth::user()->is_verified == 1 )
         {
             // return not_verified view and pass username to the view to be displayed
             return response()->view('/error/not_verified', [
               'user' => Auth::user()->username,
             ]);
         }

         if (  ! Auth::user()->is_banned == 0 )
         {
             // return not_verified view and pass username to the view to be displayed
             return response()->view('/error/banned', [
               'user' => Auth::user()->username,
             ]);
         }
       } else {
         // user is not logged in, redirect them to login page
       return redirect()->route('login');
     }


         return $next($request);
     }
}
