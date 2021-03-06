<?php

namespace App\Http\Middleware;

use Closure;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$role)
    {
         if (\Auth::check()) {
            if (\Auth::user()->role==null) {
                   abort('403');
                   //forbidden to access admin link
            }
            $userrole =\Auth::user()->role;
            $data = explode("|", $role);
            foreach ($data as $key) {
                if ($key==$userrole) {
                    return $next($request);
                }
            }
            abort('403');
            
        }
        redirect('/login');
    }
}
