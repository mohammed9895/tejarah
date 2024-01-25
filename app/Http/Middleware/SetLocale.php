<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $locale = session()->get('locale');
        app()->setLocale($locale);
       /*  if (!$request->has('preview')) {
            // Redirect to the same URL with the 'preview' query parameter
            return redirect($request->fullUrlWithQuery(['preview' => '']));
        } */

         //return dd($locale);
        return $next($request);
    }
}