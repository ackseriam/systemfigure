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
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function aprobacion(Request $request)
    {
       
       $people= Person::leftjoin('users', 'users.people_id', '=', 'people.id')->where('users.people_id')
       ->select('people.id as id', 'people.name as name', 'people.surname as surname','people.nacionality as nacionality','people.ci as ci','people.address as address')->get();
       

      
      $rol = roleuser($request); 
         
       $people_contr="people";
  
return view('people.aprob',['rol'=>$rol,'people'=>$people]);
    }   

    public function index(Request $request)
    {
        $people = Person::all();
        $rol = roleuser($request); 
        $people_contr="people";
  
        return view('people.index',['rol'=>$rol,'people'=>$people]);
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
            'img_url'=> $name,
            'img_ci'=> $name2,
            'nacionality' => $request->nacionality,
            'ci' => $request->ci,
            'address' => $request->address
        ];
       
        if(Person::create($options)){
            return redirect('/');
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
        $people= Person::find($id);
        $usuario=  User::where('people_id',$id)->first();
       $rol = roleuser($request); 

        $usuario1=0;
        $usuario2=$usuario;

        if(!empty($usuario))
            $usuario2=$usuario;
        else
             $usuario2=$usuario1;
           

       return view('people.show',['rol'=>$rol,'people'=>$people, 'usuario'=> $usuario2]);
    }

    public function search(Request $request)
    {

          
       $rol = roleuser($request); 
        
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
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
