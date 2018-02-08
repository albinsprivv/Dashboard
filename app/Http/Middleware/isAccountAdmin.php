<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class isAccountAdmin
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
         if (  ! Auth::user()->is_admin == 1 )
         {
             // return not_verified view and pass username to the view to be displayed
             return response()->view('/error/error', [
               'errorTitle' => 'Access Denied',
               'errorDescription' => 'Sneaky! But you really don\'t belong here'
             ]);
         }

         return $next($request);
     }
}
}
