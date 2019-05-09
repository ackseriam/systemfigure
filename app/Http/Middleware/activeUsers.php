<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

use Carbon\Carbon;
use Cache;
use App\User; 

class activeUsers
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
        if(Auth::check()){
            $expiresAt = Carbon::now()->addMinutes(4);
            Cache::put('user-is-online'. Auth::user()->id, true, $expiresAt);
            
            foreach(User::all() as $user)
             {
              if($user->isOnline())  {
                   $user=User::find($user->id);
              $user->status_login = 'activo';
              $user->save();
              }else{
                $user=User::find($user->id);
              $user->status_login = 'inactivo';
              $user->save();
              }
             }

            
        }
        return $next($request);
    }
}
