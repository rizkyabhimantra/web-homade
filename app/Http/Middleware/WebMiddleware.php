<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Log;
use Symfony\Component\HttpFoundation\Response;

class WebMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $authenticationRoutes = [ route('user.signin'), route('user.signup'), route('admin.signin') ];

        $is_in_authentication_route = in_array($request->url(),$authenticationRoutes);

        $is_authorized = auth()->check();

        if($is_in_authentication_route && $is_authorized){
            return redirect()->route(auth()->user()->isAdminOrOwner() ? 'admin.dashboard' : 'user.home');
        }

        if($is_authorized || $is_in_authentication_route){
            return $next($request);
        }
        // nah ini dlu dah
        return redirect()->route('user.signin');
    }
}
