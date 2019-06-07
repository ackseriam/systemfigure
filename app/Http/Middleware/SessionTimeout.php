<?php
namespace App\Http\Middleware;
use Closure;
use App\User;
use Illuminate\Session\Store;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
class SessionTimeout {
    protected $session;
    protected $timeout=300;//2147483640
    public function __construct(Store $session){
        $this->session=$session;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(!$this->session->has('lastActivityTime'))
            $this->session->put('lastActivityTime',time());
        elseif(time() - $this->session->get('lastActivityTime') > $this->getTimeOut()){
            $this->session->forget('lastActivityTime');
            
       if(!empty(auth()->user()->id))   
       {
              $user=User::find(auth()->user()->id);
              $user->status_login = 'inactivo';
            if($user->save()) // se actualizar a la bd, si es exitoso
            {
            Auth::logout();
                //return redirect('login')->with('error_in', 'error_in');
                return redirect()->route('login', ['error_in' =>  'error_in']);
    
             //   abort(403, 'No ha tenido actividad en los ultimos minutos');
            }
       }    
        
        }
        $this->session->put('lastActivityTime',time());
        return $next($request);
    }
 
    protected function getTimeOut()
    {
        return (env('TIMEOUT')) ?: $this->timeout;
    }
}