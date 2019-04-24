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

     $guias= Guias::where('level','!=','VPN')->where('level','!=','VPN0')->orderBy("id", "DESC")
        ->name($name)
        ->img($img)
        ->status($status)
        ->level($level)
        ->paginate(4);
       
      //  var_dump($guias);
       return view('guias.search',compact('guias'),['rol'=>$rol]);
    }

    public function search_0(Request $request)
    {
        $rol = roleuser($request);
            $name = $request->get('name');
            $img = $request->get('img');
            $status = $request->get('status');
            $level = $request->get('level'); 
       

         $guias= Guias::where('level','!=','VPN')->where('level','!=','VPN0')->where('level','!=','1')->where('level','!=','2')->where('level','!=','3')->orderBy("id", "DESC")
            ->name($name)
            ->img($img)
            ->status($status)
            ->level($level)
            ->paginate(4);

        return view('guias.search',compact('guias'),['rol'=>$rol]);
      
    }

   
        public function search_vpn0(Request $request)
    {
        $rol = roleuser($request); 
        //$guias= Guias::all();
         
        $name = $request->get('name');
        $img = $request->get('img');
        $status = $request->get('status');
        $level = $request->get('level');

     $guias= Guias::where('level','!=','VPN')->where('level','!=','0')->where('level','!=','1')->where('level','!=','2')->where('level','!=','3')->orderBy("id", "DESC")
        ->name($name)
        ->img($img)
        ->status($status)
        ->level($level)
        ->paginate(4);
       
      //  var_dump($guias);
       return view('guias.search',compact('guias'),['rol'=>$rol,'vpn0'=>'vpn0']);
    }
    
        public function search_vpn(Request $request)
    {
        $rol = roleuser($request); 
        //$guias= Guias::all();
         
        $name = $request->get('name');
        $img = $request->get('img');
        $status = $request->get('status');
        $level = $request->get('level');

     $guias= Guias::where('level','!=','VPN0')->where('level','!=','0')->where('level','!=','1')->where('level','!=','2')->where('level','!=','3')->orderBy("id", "DESC")
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
   /*  header("Access-Control-Allow-Origin: *");
      header("Content-Type: application/json; charset=UTF-8"); 

echo json_encode($request);
        //      $file = $request->input('img');
             if ($request->hasFile('img')) {
                echo "dasda";
             }

    */  

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
         $guias=  Guias::where('level','0')->where('status','activo')->get();
         $guias_n=  Guias::where('level','!=','0')->where('status','activo')->get();

           return view('guias.show',['rol'=>$rol,'guia'=>$guia]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
         $rol = roleuser($request);
        $guia=Guias::find($id);
        return view('guias.edit',['rol'=>$rol,'guia'=>$guia]);
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
        var_dump($request->number_campos);
        
        $guias= Guias::find($id);
          if ($request->hasFile('img')) {
        $file = $request->file('img');
       

      
        $name = time().$file->getClientOriginalName(); 
        $file->move(public_path().'/images_guias/', $name);
    }else{
         $name=$guias->img;
    }
      
        $guias->name=$request->name;
        $guias->level=$request->level;
        $guias->img=$name;
        $guias->names_campo=$request->names_campo;
        $guias->number_campos=$request->number_campos;
        $guias->number_campos_img=$request->number_campos_img;
        $guias->names_campo_img=$request->names_campo_img;
        
        if($guias->save()){
            return redirect('guias/search');
            }else{
                return view('guias.edit',['rol'=>$rol,'guia'=>$guia]);
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