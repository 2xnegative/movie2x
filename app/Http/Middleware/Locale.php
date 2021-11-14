<?php

namespace App\Http\Middleware;

use Closure;
use Config;
use App;

class Locale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(session()->has('locale')){
            App::setLocale(session()->get('locale'));
        }else{
            session('locale', Config::get('app.locale'));
        }
        return $next($request);
    }
}
