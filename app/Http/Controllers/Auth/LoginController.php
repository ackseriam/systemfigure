<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Middleware\SessionTimeout;
use App\User;



class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */


    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
 /**
 * Envía la respuesta después de que el usuario se autentifique.
 * Elimina el resto de sesiones de este usuario
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */


protected function sendLoginResponse(Request $request)
{


           $status=Auth::User()->status_login;
           $status_user=Auth::User()->state;
            if(($status_user=='inactivo') ||($status_user=='bloqueado'))
            {       Auth::logout();
                     return view('auth.login',['estado'=>'estado','status'=>$status_user]);
            }else{
           $rol = roleuser($request); 
           if($rol!='foun')
           {
           
                if($status=='activo') 
                   {
                        $this->clearLoginAttempts($request);  
                        Auth::logout();
                        return $this->authenticated($request, $this->guard()->user());
                    }elseif($status=='inactivo'){

                       $request->session()->regenerate();
                        $previous_session = Auth::User()->session_id;
                        if ($previous_session) {
                            Session::getHandler()->destroy($previous_session);
                        }
                         Auth::user()->session_id = Session::getId();
                        Auth::user()->save();
                        $this->clearLoginAttempts($request);
                      
                        if(Auth::check()) // se actualizar a la bd, si es exitoso
                        {
                            
                          return redirect()->intended($this->redirectPath());
                        }else{
                            echo "error";
                        }
                    }

                   

         
           }else{

                       $request->session()->regenerate();
                        $previous_session = Auth::User()->session_id;
                        if ($previous_session) {
                            Session::getHandler()->destroy($previous_session);
                        }
                         Auth::user()->session_id = Session::getId();
                        Auth::user()->save();
                        $this->clearLoginAttempts($request);
                      
                        if(Auth::check()) // se actualizar a la bd, si es exitoso
                        {
                            
                          return redirect()->intended($this->redirectPath());
                        }else{
                            echo "error";
                        }   

                }
            }
          
     
        
   
}

protected function authenticated(Request $request, $user)
    {
        Auth::logout();

  return view('auth.login',['request'=>$request,'user'=>$user, 'sesion'=>'Hay una sesion previa']);

    }



    public function __construct()
    {
        $this->middleware('sessiontimeout');
        $this->middleware('guest')->except('logout');
        
        if(Auth::check()){
       
         Auth::logoutOtherDevices($request->input('password'));
     }
    }
}

