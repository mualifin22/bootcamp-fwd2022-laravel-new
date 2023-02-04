<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

use App\Models\ManagementAccess\Role;
use Illuminate\Support\Facades\Gate;

class AuthGates
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        // get all user by session browser
        $user = \Auth::user();

        // checking valisation middleware
        // system on or off
        // user active ot off
        if(!app()->runningInConsole() && $user)
        {
            $roles              = Role::with('permission')->get();
            $permissionsArray   = [];

            // nested loop
            // looping for role
            foreach ($roles as $role){
                // looping for permission ( where table permission_role )
                foreach ($role->permission as $permissions){
                    $permissionsArray[$permissions->title][] = $role->id;
                }
            }

            // checl user role
            foreach ($permissionsArray as $title => $roles) {
                gate::define($title, function(\App\Models\User $user)
                use ($roles) {
                    return count(array_intersect($user->role->pluck('id')
                    ->toArray(), $roles)) > 0;
                });
            }
        }
        
        // return all middleware
        return $next($request);
    }
}
