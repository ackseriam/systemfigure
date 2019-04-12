<?php

namespace App\Http\Controllers;
use App\Guias;
use App\Correction_user;

use Illuminate\Support\Facades\Auth;
use App\Correction;
use Illuminate\Http\Request;

class CorrectionsController extends Controller
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
    public function index( $level_b, Request $request)
    {
         $rol = roleuser($request); 
         if($level_b=='0')
       {
        $guias = Guias::where(['level'=> $level_b, 'status'=>'activo'])->paginate(4);;
       }else{
         $guias= Guias::where('level','!=','0')->paginate(4);;

       }
        return view('corrections.index',compact('guias'),['rol'=>$rol, 'level'=>$level_b]);
    }

    public function search( $level_b, Request $request)
    {
        $rol = roleuser($request); 
        $name = $request->get('name');
        $img = $request->get('img');
        $status = $request->get('status');
        $level = $request->get('level');
       if($level_b=='0')
       {
      

         $guias= Guias::where(['level'=> $level_b, 'status'=>'activo'])
        //->where("level", $level)
        ->name($name)
        ->img($img)
        ->status($status)
        ->level($level)
        ->paginate(4);
    }else{


         $guias= Guias::where('level','!=','0')
        //->where("level", $level)
        ->name($name)
        ->img($img)
        ->status($status)
        ->level($level)
        ->paginate(4);

    }
        
       
        return view('corrections.index',compact('guias'),['rol'=>$rol,'level'=>$level_b,'correccion_user'=>'correccion_user']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($guia, Request $request)
    {
        
         $rol = roleuser($request); 
         $guia= Guias::find($guia);
        // var_dump($guia);
         $campos=$guia->names_campo;
         $number_campos=$guia->number_campos;
         //var_dump($campos);
         $campo=explode(",", $campos);
         //var_dump($campo);
        return view('corrections.create',['rol'=>$rol,'campos'=>$campo, 'number_campos'=>$number_campos,'id_guias'=>$guia->id ]); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $id_users=Auth::user()->id;
       $guia= Guias::find($request->id_guias);
       $number_campos=$guia->number_campos;
       $campo_n=$guia->names_campo;
        $campo_nombre=explode(",", $campo_n);

       $options =[
            'id_users' => $id_users,
            'id_guias' => $request->id_guias,
           
        ];
        $img='0';
  
        
    $corrections=Correction::create($options);
      foreach ($campo_nombre as $campo_nombre ) 
                {
                    $campos[]=['name' => $campo_nombre]; 
           
                }

     for ($i=0; $i < $number_campos; $i++) { 
         

               $corrections_cam =[
                'text' => $_POST[$i],
                'img'=>$img,
                'name_campo'=>$campos[$i]["name"],
                'id_corrections' => $corrections->id,
                
            ];
   

           Correction_user::create($corrections_cam);

      }
       $rol = roleuser($request); 
    return view('home',['rol'=>$rol]);

    
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function correc_user($id, Request $request)
    {
      $rol = roleuser($request); 
       $guia= Guias::find($id);
       $correc=array();
       $correcciones= Correction::where('id_guias',$id)->get();

      $text = $request->get('text');
      $img = $request->get('img');
      $name_campo = $request->get('name_campo');
    
      $number_gui=$guia->number_campos;
      $number_guia=$number_gui-1;
      $number_img_guia=$guia->number_campos_img;

      $names_campo=explode(',', $guia->names_campo);
       foreach ($correcciones as $correction) {
        $i=0; $y=0;
  
          $correction_user[]= Correction_user::where('id_corrections',$correction->id)
          ->get();
                                                                                          
        }
       //$correction_user ->paginate(4);
         

    
                                                                    
    return view('corrections/corrections_user/correc',compact('correction_user'),['rol'=>$rol, 'id'=>$id,'number_guia'=>$number_guia,'names_campo'=>$names_campo]);

   }
  
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 public function show($id,Request $request)
    {
         $rol = roleuser($request); 
      $guia= Guias::find($id);
    // var_dump($guia);
      $names_campo=explode(',', $guia->names_campo);
      $text = $request->get('text');
      $number_guia=$guia->number_campos;
     $number_gui[]=$number_guia-1;
      $correcciones= Correction::where('id_guias',$id)->get();

   
          foreach ($correcciones as $correction) {
  
  
          $correction_search_prev= Correction_user::where("id_corrections", $correction->id)
          ->text($text)
          ->get(); 
           $id=$correction_search_prev[0]->id_corrections;
         
         
          $otros_text= Correction_user::where("id_corrections", $id)->select('text','name_campo')->get();
            foreach ( $otros_text as $texts ) {
              
                 $correction_search[]=$otros_text; 
               
              }
          
        }
        $common_stuff= array_unique($correction_search);
 
  
 return  view('corrections/corrections_user/correc',compact('common_stuff'),['rol'=>$rol,'names_campo'=>$names_campo,'number_guia'=>$number_guia,'id'=>$id]);
    }

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
