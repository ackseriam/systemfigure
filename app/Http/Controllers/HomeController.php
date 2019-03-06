<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User; 

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
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
         
//var_dump($rol);
       
        return view('home', ["rol" => $rol]);

    }
}
