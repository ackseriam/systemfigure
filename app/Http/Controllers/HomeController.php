<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use App\User; 
use App\Role; 

use App\Guias; 


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      
      $this->middleware('sessiontimeout');
        $this->middleware('auth');
        $this->middleware('users_ac');
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {

        $rol = roleuser($request); //se llama al helper en Helpers/role
        $user=User::find(auth()->user()->id);
        $user->status_login = 'activo';
        $user->save();
       $guias=  Guias::where('level','0')->where('status','activo')->get();
       $guias_n=  Guias::where('level','!=','0')->where('status','activo')->get();
       $role=array();


  if(Auth::check()){
             $users_all=User::join('people', 'users.people_id', '=', 'people.id')
                        ->select('people.name as name','people.surname as surname','people.email as email','users.id as id','users.img_profile as img_profile')->get();
          
          

         }

 return view('home', ["roles"=>$role,"users_all"=>$users_all,"rol" => $rol,"guias" => $guias, "guias_n" => $guias_n]);

  }
}

