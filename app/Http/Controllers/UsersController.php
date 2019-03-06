<?php

namespace App\Http\Controllers;
use App\User;

use App\Person;
use Illuminate\Http\Request;
use App\Http\Resources\PeopleCollection;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       //    $usuario = User::all();
           $usuario= User::join('people', 'people.id', '=', 'users.people_id')
       ->select('users.id as id', 'people.name as name',  'users.state as state','users.email as email','users.username as username', 'people.surname as surname', 'people.ci as ci')->get();

   //var_dump($usuario);    
         if($request->user()->hasAnyRole('editor'))
            $rol="editor";
         elseif($request->user()->hasAnyRole('admin'))
            $rol="admin";
         
         elseif($request->user()->hasAnyRole('foun'))
            $rol="foun";
         
         elseif($request->user()->hasAnyRole('task0'))
            $rol="task0";
         
         elseif($request->user()->hasAnyRole('task'))
            $rol="task";
         
         elseif($request->user()->hasAnyRole('buyer'))
            $rol="buyer";
  
         $tabla="activo";
       
  
   return view('users.index',['rol'=>$rol,'usuarios'=>$usuario, 'tabla'=>$tabla]);
    }
     public function index_edit(Request $request)
    {
       //    $usuario = User::all();
           $usuario= User::join('people', 'people.id', '=', 'users.people_id')
       ->select('users.id as id', 'people.name as name',  'users.state as state','users.email as email','users.username as username', 'people.surname as surname', 'people.ci as ci')->get();

   //var_dump($usuario);    
         if($request->user()->hasAnyRole('editor'))
            $rol="editor";
         elseif($request->user()->hasAnyRole('admin'))
            $rol="admin";
         
         elseif($request->user()->hasAnyRole('foun'))
            $rol="foun";
         
         elseif($request->user()->hasAnyRole('task0'))
            $rol="task0";
         
         elseif($request->user()->hasAnyRole('task'))
            $rol="task";
         
         elseif($request->user()->hasAnyRole('buyer'))
            $rol="buyer";
  
         $tabla="activo";
     $editar="editar";
   return view('users.index',['rol'=>$rol,'usuarios'=>$usuario, 'tabla'=>$tabla,'editar'=>$editar]);
    }


        public function inactivity(Request $request)
    {
       //    $usuario = User::all();
           $usuario= Person::leftjoin('users', 'users.people_id', '=', 'people.id')->where('users.state','=','inactivo')
       ->select('users.id as id', 'people.name as name',  'users.state as state','users.email as email','users.username as username', 'people.surname as surname', 'people.ci as ci')->get();
$tabla="inactivo";
   //var_dump($usuario);    
         if($request->user()->hasAnyRole('editor'))
            $rol="editor";
         elseif($request->user()->hasAnyRole('admin'))
            $rol="admin";
         
         elseif($request->user()->hasAnyRole('foun'))
            $rol="foun";
         
         elseif($request->user()->hasAnyRole('task0'))
            $rol="task0";
         
         elseif($request->user()->hasAnyRole('task'))
            $rol="task";
         
         elseif($request->user()->hasAnyRole('buyer'))
            $rol="buyer";
  
         
//   var_dump($usuario);  
  
  return view('users.index',['rol'=>$rol,'usuarios'=>$usuario,'tabla'=>$tabla]);
    }

    
      public function locked(Request $request)
    {
       //    $usuario = User::all();
           $usuario= Person::leftjoin('users', 'users.people_id', '=', 'people.id')->where('users.state','=','bloqueado')
       ->select('users.id as id', 'people.name as name',  'users.state as state','users.email as email','users.username as username', 'people.surname as surname', 'people.ci as ci')->get();

   //var_dump($usuario);    
         if($request->user()->hasAnyRole('editor'))
            $rol="editor";
         elseif($request->user()->hasAnyRole('admin'))
            $rol="admin";
         
         elseif($request->user()->hasAnyRole('foun'))
            $rol="foun";
         
         elseif($request->user()->hasAnyRole('task0'))
            $rol="task0";
         
         elseif($request->user()->hasAnyRole('task'))
            $rol="task";
         
         elseif($request->user()->hasAnyRole('buyer'))
            $rol="buyer";
  
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
        $usuario= User::find($id);
        $people_id=$usuario->people_id;
        $people=  Person::where('id',$people_id)->first();
   

       
         if($request->user()->hasAnyRole('editor'))
            $rol="editor";
         elseif($request->user()->hasAnyRole('admin'))
            $rol="admin";
         
         elseif($request->user()->hasAnyRole('foun'))
            $rol="foun";
         
         elseif($request->user()->hasAnyRole('task0'))
            $rol="task0";
         
         elseif($request->user()->hasAnyRole('task'))
            $rol="task";
         
         elseif($request->user()->hasAnyRole('buyer'))
            $rol="buyer";


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
         $usuario= User::find($id);
          $people_id=$usuario->people_id;
        $people=  Person::where('id',$people_id)->first();
   

       
         if($request->user()->hasAnyRole('editor'))
            $rol="editor";
         elseif($request->user()->hasAnyRole('admin'))
            $rol="admin";
         
         elseif($request->user()->hasAnyRole('foun'))
            $rol="foun";
         
         elseif($request->user()->hasAnyRole('task0'))
            $rol="task0";
         
         elseif($request->user()->hasAnyRole('task'))
            $rol="task";
         
         elseif($request->user()->hasAnyRole('buyer'))
            $rol="buyer";
 $jsonuser= json_encode($usuario);
  $status= json_encode($usuario->state);

       return view('users.edit',['rol'=>$rol,'people'=>$people, 'usuario'=> $usuario, 'state'=>$jsonuser,'statu'=>$status]);
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
}
