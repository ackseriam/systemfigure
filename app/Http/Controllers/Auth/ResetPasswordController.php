<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      //  $this->middleware('guest');
      //     $this->middleware('auth');

    }
  
    protected function sendResetResponse(Request $request, $response)
    {
           $rol = roleuser($request); //se llama al helper en Helpers/role
        $user=User::find(auth()->user()->id);
              $user->status_login = 'activo';
              $user->save();
       $guias=  Guias::where('level','0')->where('status','activo')->get();
        $guias_n=  Guias::where('level','!=','0')->where('status','activo')->get();

        return view('home', ["rol" => $rol,"guias" => $guias, "guias_n" => $guias_n]);
        return redirect($this->redirectPath())
                             ->with(array("rol" => $rol,"guias" => $guias, "guias_n" => $guias_n,"status" => $rol),trans($response));


    }

}
