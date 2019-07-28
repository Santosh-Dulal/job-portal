<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class Jobseekerlogin
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
        if (empty(Session::has('jobSeeker'))) {
            return redirect('/jobseeker-login');
        }
        return $next($request);
    }
}
