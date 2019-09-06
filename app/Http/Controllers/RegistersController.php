<?php

namespace App\Http\Controllers;
use App\Register;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RegistersController extends Controller
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
    public function index()
    {
        //
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
    public function show($id)
    {
      

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {
       $rol = roleuser($request); //se llama al helper en Helpers/role
         if(($rol=='admin')||($rol=='foun'))
        {
            $user=User::find(auth()->user()->id);
            $user->status_login = 'activo';
            $user->save(); 
        $user=User::find(auth()->user()->id);
        $user->status_login = 'activo';
        $user->save(); 
         $register=Register::find($id);
        return view('registers.register',['role'=>$rol,'rol'=>$rol,'register'=> $register]);
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
        $rol = roleuser($request); 
       if(($rol=='admin')||($rol=='foun'))
        {
          $register=Register::find($id);
          $register->status= $request->status;
          
        if($register->save()){
             return view('registers.register',['role'=>$rol,'rol'=>$rol,'register'=> $register,'exito'=>'exito']);
         

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
    public function destroy($id)
    {
        //
    }
}
