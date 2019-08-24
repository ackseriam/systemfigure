<?php

namespace App\Http\Controllers;


use App\User;
use App\Person;
use Illuminate\Http\Request;
use App\Http\Resources\PeopleCollection;
class PeopleController extends Controller
{
     public function __construct()
    {

      $this->middleware('sessiontimeout');
      $this->middleware('auth', ['except'=> ['create','store']]);
      $this->middleware('users_ac');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function aprobacion(Request $request)
    {
        $rol = roleuser($request); //se llama al helper en Helpers/role
        if(($rol=='admin')||($rol=='foun'))
        {
             
              $user=User::find(auth()->user()->id);
              $user->status_login = 'activo';
              $user->save(); 

               $people= Person::leftjoin('users', 'users.people_id', '=', 'people.id')->where('users.people_id')
               ->select('people.id as id', 'people.name as name','people.link as link','people.surname as surname','people.nacionality as nacionality','people.ci as ci','people.address as address')->get();
               
               $people_contr="people";
          
               return view('people.aprob',['rol'=>$rol,'people'=>$people]);
       }else{
        return redirect('home');
       }
    }   

    public function index(Request $request)
    {

        $rol = roleuser($request); //se llama al helper en Helpers/role
        if(($rol=='admin')||($rol=='foun'))
        {
            $user=User::find(auth()->user()->id);
        $user->status_login = 'activo';
        $user->save(); 
        $people = Person::all();
        $rol = roleuser($request); 
        $people_contr="people";
  
        return view('people.index',['rol'=>$rol,'people'=>$people]);
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
    return view('people.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
          if ($request->hasFile('image_url')) {
            $file = $request->file('image_url');
             $file2 = $request->file('img_ci');

        
            $name = time().$file->getClientOriginalName(); 
            $file->move(public_path().'/images_user/', $name);

             $name2 = time().$file2->getClientOriginalName(); 
            $file2->move(public_path().'/images_user/', $name2);
                
        }

            $options =[
                'name' => $request->name,
                'surname' => $request->surname,
                'email' => $request->email,
                'link' => $request->link,
                'img_url'=> $name,
                'img_ci'=> $name2,
                'nacionality' => $request->nacionality,
                'ci' => $request->ci,
                'address' => $request->address
            ];
           
            if(Person::create($options)){
                return view('people.create',['exito_register'=>'exito_register']);
            }else{
                return view('people.create');
            }
     

        
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
           $people= Person::find($id);
           $usuario=  User::where('people_id',$id)->first();
          
            $user=User::find(auth()->user()->id);
            $user->status_login = 'activo';
            $user->save();  

            $usuario1=0;
            $usuario2=$usuario;

            if(!empty($usuario))
                $usuario2=$usuario;
            else
                 $usuario2=$usuario1;
               

           return view('people.show',['rol'=>$rol,'people'=>$people, 'usuario'=> $usuario2]);
        }else{
            return redirect('home');
        }

    }

    public function search(Request $request)
    {
        $rol = roleuser($request); //se llama al helper en Helpers/role
      if(($rol=='admin')||($rol=='foun'))
        {
          
        $rol = roleuser($request); //se llama al helper en Helpers/role
        $user=User::find(auth()->user()->id);
        $user->status_login = 'activo';
        $user->save();  
        
        $name = $request->get('name');
        $surname = $request->get('surname');
        $nacionality = $request->get('nacionality');
        $address = $request->get('address');
        $ci = $request->get('ci');

        $people= Person::orderBy("id", "DESC")
        ->name($name)
        ->surname($surname)
        ->nacionality($nacionality)
        ->address($address)
        ->ci($ci)

        ->paginate(4);
        return view('people.search',compact('people'),['rol'=>$rol]);
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
           
            $people= Person::find($id);
            $people_id=$people->people_id;

            //$roles=Role::leftjoin('roles_user', 'roles_user.roles_id', '=', 'roles.id')->where('roles_user.user_id','=',$id )->select('roles.name')->get();
     
           
          return view('people.edit',['rol'=>$rol,'people'=>$people,'people_id'=>$people_id]);
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
    public function update(Request $request, $id)
    {
        $rol = roleuser($request); //se llama al helper en Helpers/role
           if(($rol=='admin')||($rol=='foun'))
        {
             $user=User::find(auth()->user()->id);
             $user->status_login = 'activo';
             $user->save();
            $people=Person::find($id);
            $people_id=$people->people_id;
            $people->name = $request->name;
            $people->surname = $request->surname;
            $people->address = $request->address;
            $people->ci = $request->ci;

              if ($request->hasFile('image_url')) {
            $file = $request->file('image_url');
            $name = time().$file->getClientOriginalName(); 
            $file->move(public_path().'/images_user/', $name);    
            }

          if ($request->file('img_ci')) {
             $file2 = $request->file('img_ci');
             $name2 = time().$file2->getClientOriginalName(); 
             $file2->move(public_path().'/images_user/', $name2);
            }
        
          if($request->image_url!=NULL)  
            $people->img_url= $name;  
            else
              $people->img_url=  $people->img_url;

          if($request->img_ci!=NULL)  
            $people->img_ci= $name2;  
            else
              $people->img_ci=  $people->ci;

            if($people->save()){
                 return view('people.edit',['exito'=>'exito','rol'=>$rol,'people'=>$people,'people_id'=>$people_id]);
            }else{
                return view('people.edit',['error_in'=>'error_in','rol'=>$rol,'people'=>$people,'people_id'=>$people_id]);
            }
        }else{
            return redirect('home');
        }  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
      
         $rol = roleuser($request); 
           if(($rol=='admin')||($rol=='foun'))
        {

             $people = Person::find($id);
             $id_people=$people->id;
             $people->delete();
               $people= Person::leftjoin('users', 'users.people_id', '=', 'people.id')->where('users.people_id')
           ->select('people.id as id', 'people.name as name', 'people.surname as surname','people.nacionality as nacionality','people.ci as ci','people.address as address')->get();
              $people_contr="people";
  

           return view('people.aprob',['exito'=>'exito','rol'=>$rol,'people'=> $people]);
        }else{
          return redirect('home');  
        }
    }
}
