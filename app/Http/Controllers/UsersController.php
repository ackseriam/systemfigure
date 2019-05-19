<?php

namespace App\Http\Controllers;
use App\User;
use App\Role;
use App\Person;
use Illuminate\Http\Request;
use App\Http\Resources\PeopleCollection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
class UsersController extends Controller
{
     public function __construct()
    {

      $this->middleware('sessiontimeout');
      $this->middleware('auth');
      $this->middleware('users_ac');
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
            $rol = roleuser($request); //se llama al helper en Helpers/role
            $user=User::find(auth()->user()->id);
            $user->status_login = 'activo';
            $user->save(); 
           $usuario= User::join('people', 'people.id', '=', 'users.people_id')
       ->select('users.id as id', 'people.name as name',  'users.state as state','users.email as email','users.username as username', 'people.surname as surname', 'people.ci as ci')->get();

  
         $tabla="activo";
       
  
   return view('users.index',['rol'=>$rol,'usuarios'=>$usuario, 'tabla'=>$tabla,'editar_usuario'=>'editar_usuario']);
    }
     public function index_edit(Request $request)
    {
       $rol = roleuser($request); //se llama al helper en Helpers/role
        $user=User::find(auth()->user()->id);
        $user->status_login = 'activo';
        $user->save(); 
           $usuario= User::join('people', 'people.id', '=', 'users.people_id')
       ->select('users.id as id', 'people.name as name',  'users.state as state','users.email as email','users.username as username', 'people.surname as surname', 'people.ci as ci')->get();

         $tabla="activo";
   
   return view('users.index',['rol'=>$rol,'usuarios'=>$usuario, 'tabla'=>$tabla,'editar'=>'editar']);
    }


        public function inactivity(Request $request)
    {
        $rol = roleuser($request); //se llama al helper en Helpers/role
        $user=User::find(auth()->user()->id);
        $user->status_login = 'activo';
        $user->save(); 
           $usuario= Person::leftjoin('users', 'users.people_id', '=', 'people.id')->where('users.state','=','inactivo')
       ->select('users.id as id', 'people.name as name',  'users.state as state','users.email as email','users.username as username', 'people.surname as surname', 'people.ci as ci')->get();
           $tabla="inactivo";
          return view('users.index',['rol'=>$rol,'usuarios'=>$usuario,'tabla'=>$tabla]);
    }

    
      public function locked(Request $request)
    {
       $rol = roleuser($request); //se llama al helper en Helpers/role
        $user=User::find(auth()->user()->id);
        $user->status_login = 'activo';
        $user->save();  
 
           $usuario= Person::leftjoin('users', 'users.people_id', '=', 'people.id')->where('users.state','=','bloqueado')
       ->select('users.id as id', 'people.name as name',  'users.state as state','users.email as email','users.username as username', 'people.surname as surname', 'people.ci as ci')->get();

   
         $rol = roleuser($request); 
  
      $tabla="bloqueado";   
//   var_dump($usuario);  
  
  return view('users.index',['rol'=>$rol,'usuarios'=>$usuario,'tabla'=>$tabla]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
         $rol = roleuser($request); //se llama al helper en Helpers/role
        $user=User::find(auth()->user()->id);
        $user->status_login = 'activo';
        $user->save(); 
        $usuario= User::find($id);
        $people_id=$usuario->people_id;
        $people=  Person::where('id',$people_id)->first();
   

       
         $rol = roleuser($request); 


       return view('users.show',['rol'=>$rol,'people'=>$people, 'usuario'=> $usuario]);
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $rol = roleuser($request); //se llama al helper en Helpers/role
        $user=User::find(auth()->user()->id);
        $user->status_login = 'activo';
        $user->save(); 
        $usuario= User::find($id);
        $people_id=$usuario->people_id;
        $people=  Person::where('id',$people_id)->first();
   

          $rol = roleuser($request); 
          $jsonuser= json_encode($usuario);
          $status= json_encode($usuario->state);

       return view('users.edit',['rol'=>$rol,'people'=>$people, 'usuario'=> $usuario, 'state'=>$jsonuser,'statu'=>$status]);
    }
    
        public function edit_info(Request $request,$id)
    {
        $rol = roleuser($request); //se llama al helper en Helpers/role

       
        $usuario= User::find($id);
        $people_id=$usuario->people_id;
        $people=  Person::where('id',$people_id)->first();
        $rol_s= Role::where('name',$rol)->first();
        $role=$rol_s->description;  
       return view('users.edit_info',['rol'=>$rol,'role'=>$role,'people'=>$people, 'usuario'=> $usuario]);
    }

    public function update_info(Request $request,$id)
    {
        $rol = roleuser($request); //se llama al helper en Helpers/role
         
        $usuario=User::find($id);
          $people_id=$usuario->people_id;
        $people=  Person::where('id',$people_id)->first();

         $role = Role::where('name',$request->rol)->select('id')->first();
      
        $usuario->roles()->attach($role);  
        $rol_s= Role::where('id',$role->id)->first();
       $role=$rol_s->description;  
var_dump( $role);

        $usuario->username = $request->username;
        $usuario->email = $request->email;
        if($request->password!=NULL)  
        $usuario->password= Hash::make($request->password);  
        else
          $usuario->password=  $usuario->password; 
        if($usuario->save()){
           //  return view('users.edit_info',['exito'=>'exito','rol'=>$rol,'role'=>$role,'people'=>$people, 'usuario'=> $usuario]);
        }  

    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if($request->ajax()){

            $datos=$request->input('datos');
            $id= $datos['id'];
          User::find($id)->update($request->all());
             return;

        }
    }
     public function logout(){ 

      $user=User::find(auth()->user()->id);
      $user->status_login = 'inactivo';

        if($user->save()){
            Auth::logout();
            Session::flush(); return redirect(property_exists($this, 'redirectAfterLogout') ? $this->redirectAfterLogout : '/'); 
        }
        
   }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
     /**
     * Remove the specified resource from search.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
         $rol = roleuser($request); //se llama al helper en Helpers/role
        $user=User::find(auth()->user()->id);
        $user->status_login = 'activo';
        $user->save(); 
        $usuario= User::find(auth()->user()->id);
        $people_id=$usuario->people_id;
        $people=  Person::where('id',$people_id)->first();
     

     $rol = roleuser($request); 
        
        $username = $request->get('username');
        $email = $request->get('email');
        $state = $request->get('state');

        $users= User::orderBy("id", "DESC")
        ->username($username)
        ->email($email)
        ->state($state)

        ->paginate(4);
        return view('users.search',compact('users'),['rol'=>$rol]);
    }
}
