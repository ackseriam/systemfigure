<?php

namespace App\Http\Controllers;
use App\User;
use App\Role;
use App\Roles;
use App\Person;
use Illuminate\Http\Request;
use App\Http\Resources\PeopleCollection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
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
 
 protected function validator(array $data)
    {
        
       
    
        return Validator::make($data, [
         
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],

        ]);
    }


    public function index(Request $request)
    {
        $rol = roleuser($request); //se llama al helper en Helpers/role
         if(($rol=='admin')||($rol=='foun'))
        {
            $user=User::find(auth()->user()->id);
            $user->status_login = 'activo';
            $user->save(); 
           $usuario= User::join('people', 'people.id', '=', 'users.people_id')
          ->select('users.id as id', 'people.name as name',  'users.state as state','users.email as email','users.username as username', 'people.surname as surname', 'people.ci as ci')->get();
         $tabla="activo";
       
  
         return view('users.index',['rol'=>$rol,'usuarios'=>$usuario, 'tabla'=>$tabla,'editar_usuario'=>'editar_usuario']);
       }else{
        return redirect('home');
       }
 
   }
       public function profile(Request $request)
    {

          
        $rol = roleuser($request); //se llama al helper en Helpers/role
      
        $user=User::find(auth()->user()->id);
        $user->status_login = 'activo';
        $user->save(); 
        $people_id=$user->people_id;
        $people=  Person::where('id',$people_id)->first();
        
          $role = Role::where('name',$rol)->first();

        return view('users.profile',compact('people'),['role'=>$role,'rol'=>$rol,'user'=>$user]);
     
    }


     public function index_edit(Request $request)
    {
       $rol = roleuser($request); //se llama al helper en Helpers/role
       if(($rol=='admin')||($rol=='foun'))
        {
        $user=User::find(auth()->user()->id);
        $user->status_login = 'activo';
        $user->save(); 
           $usuario= User::join('people', 'people.id', '=', 'users.people_id')
       ->select('users.id as id', 'people.name as name',  'users.state as state','users.email as email','users.username as username', 'people.surname as surname', 'people.ci as ci')->get();

         $tabla="activo";
   
   return view('users.index',['rol'=>$rol,'usuarios'=>$usuario, 'tabla'=>$tabla,'editar'=>'editar']);
        }else{
            return redirect('home');
        }
    }


        public function inactivity(Request $request)
    {
        $rol = roleuser($request); //se llama al helper en Helpers/role
        if(($rol=='admin')||($rol=='foun'))
        {
        $user=User::find(auth()->user()->id);
        $user->status_login = 'activo';
        $user->save(); 
           $usuario= Person::leftjoin('users', 'users.people_id', '=', 'people.id')->where('users.state','=','inactivo')
       ->select('users.id as id', 'people.name as name',  'users.state as state','users.email as email','users.username as username', 'people.surname as surname', 'people.ci as ci')->get();
           $tabla="inactivo";
          return view('users.index',['rol'=>$rol,'usuarios'=>$usuario,'tabla'=>$tabla]);
         }else{
            return redirect('home');
         }
    }

    
      public function locked(Request $request)
    {
       $rol = roleuser($request); //se llama al helper en Helpers/role
       if(($rol=='admin')||($rol=='foun'))
        {
            $user=User::find(auth()->user()->id);
            $user->status_login = 'activo';
            $user->save();  
     
               $usuario= Person::leftjoin('users', 'users.people_id', '=', 'people.id')->where('users.state','=','bloqueado')
           ->select('users.id as id', 'people.name as name',  'users.state as state','users.email as email','users.username as username', 'people.surname as surname', 'people.ci as ci')->get();
             $rol = roleuser($request); 
      
             $tabla="bloqueado";     
            return view('users.index',['rol'=>$rol,'usuarios'=>$usuario,'tabla'=>$tabla]);
       }else{
        return redirect('home');
       }
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
        if(($rol=='admin')||($rol=='foun'))
        {
            $user=User::find(auth()->user()->id);
            $user->status_login = 'activo';
            $user->save(); 
            $usuario= User::find($id);
            $people_id=$usuario->people_id;
            $people=  Person::where('id',$people_id)->first();
       

           
             $rol = roleuser($request); 


           return view('users.show',['rol'=>$rol,'people'=>$people, 'usuario'=> $usuario]);
       }else{
        return redirect('home');
       }
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
        if(($rol=='admin')||($rol=='foun'))
        {
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
        }else{
            return redirect('home');
        }
    }


     public function edit_profile(Request $request,$id)
    {
        $rol = roleuser($request); //se llama al helper en Helpers/role
        
            $user=User::find(auth()->user()->id);
            $user->status_login = 'activo';
            $user->save(); 
            $usuario= User::find($id);

            $people_id=$usuario->people_id;
            $people=  Person::where('id',$people_id)->first();
                $role = Role::where('name',$rol)->first();
         //   var_dump($usuario);
            $img_profile=$usuario->img_profile;
         //   var_dump($img_profile);
           return view('users.edit_profile',['img_profile'=> $img_profile,'role'=>$role,'rol'=>$rol,'people'=>$people,'people_id'=>$people_id, 'usuario'=> $usuario]);
         
     }


    
        public function edit_info(Request $request,$id)
      {
        $rol = roleuser($request); //se llama al helper en Helpers/role
        if(($rol=='admin')||($rol=='foun'))
        {
        $usuario= User::find($id);
        $people_id=$usuario->people_id;
        $people=  Person::where('id',$people_id)->first();
        $roles=Role::leftjoin('roles_user', 'roles_user.roles_id', '=', 'roles.id')->where('roles_user.user_id','=',$id )->select('roles.name')->get();
 
         $last=end($roles);
         $roles_n=end($last);
          $role= $roles_n->name;
      return view('users.edit_info',['rol'=>$rol,'role'=>$role,'people'=>$people,'people_id'=>$people_id, 'usuario'=> $usuario]);
      }else{
        return redirect('home');
      }
    }

    public function update_profile(Request $request,$id)
    {
        $rol = roleuser($request); //se llama al helper en Helpers/role
       
        $user=User::find(auth()->user()->id);
        $user->status_login = 'activo';
        $user->save(); 
        $usuario= User::find($id);
        $people_id=$usuario->people_id;
        $people=  Person::where('id',$people_id)->first();
        $role = Role::where('name',$rol)->first();

        if($request->password!=NULL)  
        $usuario->password= Hash::make($request->password);  
        else
          $usuario->password=  $usuario->password; 
      
            
    
        if ($request->hasFile('img')) {
        $file = $request->file('img');
       
        $name = time().$file->getClientOriginalName(); 
        $file->move(public_path().'/images/', $name);


          $usuario->img_profile= $name;  
        }else{
            $usuario->img_profile= $usuario->img_profile; 
        }

        if($usuario->save()){
            return view('users.edit_profile',['img_profile'=>$usuario->img_profile,'role'=>$role,'rol'=>$rol,'people'=>$people,'people_id'=>$people_id, 'usuario'=> $usuario]);
        } 
       

    
    }

    public function update_info(Request $request,$id)
    {
        $rol = roleuser($request); //se llama al helper en Helpers/role
        if(($rol=='admin')||($rol=='foun'))
        {
         $user=User::find(auth()->user()->id);
          $user->status_login = 'activo';
          $user->save();
          $usuario=User::find($id);
          $people_id=$usuario->people_id;
          $people=  Person::where('id',$people_id)->first();

          $role_n = Role::where('name',$request->rol)->first();
       
          $role_user = Role::where('name',$role_n->name)->first();
        
          $roles=Role::leftjoin('roles_user', 'roles_user.roles_id', '=', 'roles.id')->where('roles_user.user_id','=',$id )->get();
          $role=$role_user;
      

        
          $usuario->roles()->attach($role_user);  
       

          $role=$role_user->description;  



        $usuario->username = $request->username;
        $usuario->email = $request->email;
        if($request->password!=NULL)  {
             $usuario->password= Hash::make($request->password);  
         $usuario->status_login = 'inactivo_user';
     } else {
          $usuario->password=  $usuario->password;
         }
       
      
   
        if($usuario->save()){
               return view('users.edit_info',['rol'=>$rol,'role'=>$role,'people'=>$people,'people_id'=>$people_id, 'usuario'=> $usuario,'exito'=>'exito']);
        }  
        }else{
            return redirect('home');
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
        $rol = roleuser($request); 
       if(($rol=='admin')||($rol=='foun'))
        {
          $user=User::find(auth()->user()->id);
          $user->status_login = 'activo';
          $user->save();
        if($request->ajax()){

            $datos=$request->input('datos');
            $id= $datos['id'];
          User::find($id)->update($request->all());
             return;

        }
         }else{
           return redirect('home'); 
         }

    }
     public function logout(){ 

      $user=User::find(auth()->user()->id);
      $user->status_login = 'inactivo_user';

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
    public function destroy($id, Request $request)
    {
          $rol = roleuser($request); 
           if(($rol=='admin')||($rol=='foun'))
        {

    
            $usuario_eliminar=User::find($id);
            $usuario_eliminar->delete();


            $user=User::find(auth()->user()->id);
            $user->status_login = 'activo';
            $user->save(); 
            $usuario= User::find(auth()->user()->id);
            $people_id=$usuario->people_id;
            $people=  Person::where('id',$people_id)->first();
         
            
            $username = $request->get('username');
            $email = $request->get('email');
            $state = $request->get('state');

            $users= User::orderBy("id", "DESC")->where('users.state','activo')
            ->username($username)
            ->email($email)
            ->state($state)

            ->paginate(4);
            $tabla="activo";
            return view('users.search',compact('users'),['rol'=>$rol, 'tabla'=> $tabla,'editar_usuario'=>'editar_usuario']);
        }else{
          return redirect('home');  
        }
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
        if(($rol=='admin')||($rol=='foun'))
        {
            $user=User::find(auth()->user()->id);
            $user->status_login = 'activo';
            $user->save(); 
            $usuario= User::find(auth()->user()->id);
            $people_id=$usuario->people_id;
            $people=  Person::where('id',$people_id)->first();
         
            
            $username = $request->get('username');
            $email = $request->get('email');
            $state = $request->get('state');

            $users= User::orderBy("id", "DESC")->where('users.state','activo')
            ->username($username)
            ->email($email)
            ->state($state)

            ->paginate(4);
            $tabla="activo";
            return view('users.search',compact('users'),['rol'=>$rol, 'tabla'=> $tabla,'editar_usuario'=>'editar_usuario']);
        }else{
            return redirect('home'); 
        }
    }
}
