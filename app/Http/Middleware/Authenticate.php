<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request)
    {
        if(!$request->expectsJson()){
            if($request->routeIs('administrator.*')){
                session()->flash('fail', 'mdasd. dsadasdasdasdasd');
                return route('login');
            }elseif($request->routeIs('petugas.*')){
                session()->flash('fail', 'mdasd. dsadasdasdasdasd');
                return route('login');
            }elseif($request->routeIs('user.*')){
                session()->flash('fail', 'mdasd. dsadasdasdasdasd');
                return route('login');
            }
        }
    }
}
