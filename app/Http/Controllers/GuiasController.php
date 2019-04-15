<?php

namespace App\Http\Controllers;

use App\Guias;
use Illuminate\Http\Request;

class GuiasController extends Controller
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
    public function index( Request $request, $level)
    {
        //$guias = Guias::all();
        $rol = roleuser($request); 
         $guias=  Guias::where('level',$level)->get();
        
       
        return view('guias.index',['rol'=>$rol, 'level'=>$level, 'guias'=>$guias]);
    }
     public function search(Request $request)
    {
        $rol = roleuser($request); 
        //$guias= Guias::all();
         
        $name = $request->get('name');
        $img = $request->get('img');
        $status = $request->get('status');
        $level = $request->get('level');

     $guias= Guias::orderBy("id", "DESC")
        ->name($name)
        ->img($img)
        ->status($status)
        ->level($level)
        ->paginate(4);
       
      //  var_dump($guias);
       return view('guias.search',compact('guias'),['rol'=>$rol]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
         $rol = roleuser($request); 
         return view('guias.create',['rol'=>$rol]); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          if ($request->hasFile('img')) {
        $file = $request->file('img');
       

    
        $name = time().$file->getClientOriginalName(); 
        $file->move(public_path().'/images_guias/', $name);

        
            
    }

        $options =[
            'name' => $request->name,
            'img'=> $name,
            'status' => $request->status,
            'names_campo' => $request->names_campo,
            'number_campos' => $request->number_campos,
            'names_campo_img' => $request->names_campo_img,
            'number_campos_img' => $request->number_campos_img,

            'level'=> $request->level,
            
            
        ];
         if(Guias::create($options)){
            return redirect('guias/search');
        }else{
            return view('guias.create');
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
         $rol = roleuser($request);
         $guia= Guias::find($id);

           return view('guias.show',['rol'=>$rol,'guia'=>$guia]);

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
