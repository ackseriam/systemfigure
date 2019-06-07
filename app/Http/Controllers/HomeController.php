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
             foreach(User::all() as $user)
             {
                 if($user->isOnline())  {
                  if(($rol=="admin")||($rol=="foun")){
                    $users_ac[]= User::join('people', 'users.people_id', '=', 'people.id')->where("users.id", $user->id)
                        ->select('people.name as name','people.surname as surname','people.email as email','users.id as id')->get();
                      }else{
                        $users_ac[]= User::join('people', 'users.people_id', '=', 'people.id')->where("users.id", $user->id)
                        ->select('people.name as name','people.surname as surname','users.id as id')->get();
                      }
                   

                    $role[]= Role::join('roles_user', 'roles_user.roles_id', '=', 'roles.id')->where("roles_user.user_id", $user->id)
                        ->select('roles.name','roles.description')->get();
                   
              }else{
                 if(($rol=="admin")||($rol=="foun")){
                    $users_inac= User::leftjoin('people', 'users.people_id', '=', 'people.id')->where("users.id", "!=",$user->id)->where('users.status_login','inactivo')
                        ->select('people.name as name','people.surname as surname','people.email as email','users.id as id')->get();
                      }else{
                        $users_inac= User::leftjoin('people', 'users.people_id', '=', 'people.id')->where("users.id", "!=",$user->id)->where('users.status_login','inactivo')
                        ->select('people.name as name','people.surname as surname','users.id as id')->get();
                      }
                    $role2[]= Role::join('roles_user', 'roles_user.roles_id', '=', 'roles.id')->where("roles_user.user_id", $user->id)
                        ->select('roles.name','roles.description')->get();

              }
             }
          foreach ( $users_ac as $user) {
              $i=0;
             
               $role[]= Role::join('roles_user', 'roles_user.roles_id', '=', 'roles.id')->where("roles_user.user_id", $user[$i]->id)
                        ->select('roles.name','roles.description')->get();
              $i++;
          }

         }

 return view('home', ["roles"=>$role,"role2"=>$role2,"users_ac"=>$users_ac,"users_inac"=>$users_inac,"rol" => $rol,"guias" => $guias, "guias_n" => $guias_n]);

    }
}
