<?php

namespace App\Http\Controllers;
use App\User;
use App\Guias;
use App\Correction_user;
use Alert;
use Illuminate\Support\Facades\Auth;
use App\Correction;
use Illuminate\Http\Request;

class CorrectionsController extends Controller
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
    public function index( $level_b, Request $request)
    {
        $rol = roleuser($request); //se llama al helper en Helpers/role
        $user=User::find(auth()->user()->id);
        $user->status_login = 'activo';
        $user->save();  
         if($level_b=='0')
       {
        $guias = Guias::where(['level'=> $level_b, 'status'=>'activo'])->paginate(4);
       }else{
         $guias= Guias::where('level','!=','0')->where('level','!=','vpn0')->where('level','!=','vpn')->paginate(4);

       }
        return view('corrections.index',compact('guias'),['rol'=>$rol, 'level'=>$level_b]);
    }

    public function index_vpn( $level_b, Request $request)
    {
        $rol = roleuser($request); //se llama al helper en Helpers/role
        $user=User::find(auth()->user()->id);
        $user->status_login = 'activo';
        $user->save();  
        $user=User::find(auth()->user()->id);
        $user->status_login = 'activo';
        $user->save();  
      if($level_b=='vpn0')
      {
         $guias= Guias::where('level',$level_b)->paginate(4);
      }elseif($level_b=='vpn'){
         $guias= Guias::where('level',$level_b)->paginate(4);
      }elseif(($level_b!="vpn0")|| ($level_b!="vpn")){

        $guias=  Guias::where('level','0')->where('status','activo')->get();
        $guias_n=  Guias::where('level','!=','0')->where('status','activo')->get();

        return view('home', ["rol" => $rol,"guias" => $guias, "guias_n" => $guias_n]);
      }

        return view('corrections.index',compact('guias'),['rol'=>$rol, 'level'=>$level_b]);
    }

    public function search( $level_b, Request $request)
    {

        $rol = roleuser($request); //se llama al helper en Helpers/role
        $user=User::find(auth()->user()->id);
        $user->status_login = 'activo';
        $user->save();   

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


         $guias= Guias::where('level','!=','0')->where('level','!=','vpn')->where('level','!=','vpn0')
        //->where("level", $level)
        ->name($name)
        ->img($img)
        ->status($status)
        ->level($level)
        ->paginate(4);

    }
        
       
        return view('corrections.index',compact('guias'),['rol'=>$rol,'level'=>$level_b,'correccion_user'=>'correccion_user']);
    }

       public function search_vpn( $level_b, Request $request)
    {
        $rol = roleuser($request); //se llama al helper en Helpers/role
        $user=User::find(auth()->user()->id);
        $user->status_login = 'activo';
        $user->save();   
        $name = $request->get('name');
        $img = $request->get('img');
        $status = $request->get('status');
        $level = $request->get('level');
       if($level_b=='vpn0')
       {
      

         $guias= Guias::where('level','!=','0')->where('level','!=','1')->where('level','!=','2')->where('level','!=','3')->where('level','!=','vpn')->where('status','activo')
        //->where("level", $level)
        ->name($name)
        ->img($img)
        ->status($status)
        ->level($level)
        ->paginate(4);
    }elseif($level_b=='vpn'){


         $guias= Guias::where('level','!=','0')->where('level','!=','1')->where('level','!=','2')->where('level','!=','3')->where('level','!=','vpn0')->where('status','activo')
        //->where("level", $level)
        ->name($name)
        ->img($img)
        ->status($status)
        ->level($level)
        ->paginate(4);

    }elseif(($level_b!="vpn0")|| ($level_b!="vpn")){

        $guias=  Guias::where('level','0')->where('status','activo')->get();
        $guias_n=  Guias::where('level','!=','0')->where('status','activo')->get();

        return view('home', ["rol" => $rol,"guias" => $guias, "guias_n" => $guias_n]);
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
        
         $rol = roleuser($request); //se llama al helper en Helpers/role
         $user=User::find(auth()->user()->id);
         $user->status_login = 'activo';
         $user->save();  
         $guia= Guias::find($guia);
        // var_dump($guia);
         $campos=$guia->names_campo;
         $number_campos=$guia->number_campos;
         //var_dump($campos);
         $campo=explode(",", $campos);
        
         $number_campos_img= $guia->number_campos_img;
         $campos_img=$guia->names_campo_img;
         $campos_img=explode(",",  $campos_img);
        
     
        
         return view('corrections.create',['rol'=>$rol,'campos'=>$campo, 'number_campos'=>$number_campos,'id_guias'=>$guia->id,'campos_img'=>$campos_img, 'number_campos_img'=>$number_campos_img  ]); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $rol = roleuser($request); //se llama al helper en Helpers/role
       $user=User::find(auth()->user()->id);
       $user->status_login = 'activo';
       $user->save();  
    
       $id_users=Auth::user()->id;
       $guia= Guias::find($request->id_guias);
       $number_campos=$guia->number_campos;
       $campo_n=$guia->names_campo;
       $campo_nombre=explode(",", $campo_n);
       $number_campos_img= $guia->number_campos_img;
       $campos_img=$guia->names_campo_img;
       $campos_img_nombre=explode(",",$campos_img);
      
       $id_guias= $request->id_guias;
       $options =[
            'id_users' => $id_users,
            'id_guias' =>  $id_guias,    
        ];  
    $corrections=Correction::create($options);
 
      foreach ($campo_nombre as $campo_nombre ) 
      {
          $campos[]=['name' => $campo_nombre]; 

      }
     for ($i=0; $i < $number_campos; $i++) 
     { 
         $img='0';

               $corrections_cam =[
                'text' => $_POST[$i],
                'img'=> $img,
                'name_campo'=>$campos[$i]["name"],
                'id_corrections' => $corrections->id,
            ];
          Correction_user::create($corrections_cam);
      }

      foreach ($campos_img_nombre as $campos_img_nombre  ) 
      {
        $camposs[]=['name' => $campos_img_nombre];   
      }
                
        for ($i=0; $i < $number_campos_img; $i++)
       { 
            $img = $request->file($i);
               $name = time().$img->getClientOriginalName(); 
        $img->move(public_path().'/images_guias/', $name);

         $text='0';

               $corrections_cam_im =[
                'text' => $text,
                'img'=> $name,
               'name_campo'=> $camposs[$i]["name"],
                'id_corrections' => $corrections->id,
                
            ];
            
        Correction_user::create($corrections_cam_im);
       }
       $rol = roleuser($request); 
       $guia= Guias::find($guia->id);
       $campos=$guia->names_campo;
       $number_campos=$guia->number_campos;
       $campo=explode(",", $campos);
      
       $number_campos_img= $guia->number_campos_img;
       $campos_img=$guia->names_campo_img;
       $campos_img=explode(",",  $campos_img);


         return view('corrections.create',['exito'=>'exito','rol'=>$rol,'campos'=>$campo, 'number_campos'=>$number_campos,'id_guias'=>$guia->id,'campos_img'=>$campos_img, 'number_campos_img'=>$number_campos_img  ]); 

    
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function correc_user($id, Request $request)
    {
       $rol = roleuser($request); //se llama al helper en Helpers/role
       $user=User::find(auth()->user()->id);
       $user->status_login = 'activo';
       $user->save(); 
       $guia= Guias::find($id);
       $correc=array();
       $correcciones= Correction::where('id_guias',$id)->get();

      $text = $request->get('text');
      $img = $request->get('img');
      $name_campo = $request->get('name_campo');
    
      $number_gui=$guia->number_campos;
      $number_guia=$number_gui-1;
      $number_img_guia=$guia->number_campos_img;
      $number_campos_img=$number_img_guia-1;
      $campos_img=explode(",",$guia->names_campo_img);

      $names_campo=explode(',', $guia->names_campo);
       foreach ($correcciones as $correction) {
        $i=0; $y=0;
  
          $correction_user[]= Correction_user::where('id_corrections',$correction->id)
          ->get();
                                                                                          
        }
           

    
                                                                    
    return view('corrections/corrections_user/correc',compact('correction_user'),['rol'=>$rol, 'id'=>$id,'number_guia'=>$number_guia,'names_campo'=>$names_campo, 'campos_img'=>$campos_img,'number_campos_img'=>  '0']);

   }
  
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 public function show($id_guia,Request $request)
    {
      $rol = roleuser($request); //se llama al helper en Helpers/role
      $user=User::find(auth()->user()->id);
      $user->status_login = 'activo';
      $user->save();
         
      $guia= Guias::find($id_guia);
   
      $names_campo=explode(',', $guia->names_campo);
       $campos_img=explode(",",$guia->names_campo_img);

      $text = $request->get('text');
      $number_guia=$guia->number_campos;
      $number_campos_img=$guia->number_campos_img;
      $number_gui[]=$number_guia-1;
      $correcciones= Correction::where('id_guias',$id_guia)->get();

          foreach ($correcciones as $correction) 
          {
         $id_d[]=$correction->id;       
         }
         if(!empty($id_d))
         {
             $cound_id= count($id_d);

               foreach ($id_d as  $clave=>$valor) {
                for ($i=0; $i <  $cound_id ; $i++) { 
                    $correction_search_text= Correction_user::where("id_corrections",$id_d[$i] )
                  ->text($text)
                  ->get(); 
                  $co=count($correction_search_text);
                  if($co!=0)
                  {
                    $correction_search_text2[]=$correction_search_text;
                  }
                }
               }
  
                if(!empty($correction_search_text2))
                {
                      $co_def_text= array_unique($correction_search_text2);
                  $count_d=count($co_def_text);
                  foreach ( $co_def_text as $image) {
                      for ($i=0; $i < $count_d ; $i++) { 
                       $id_corrections[]=$co_def_text[$i][0]->id_corrections;

                        $otros_text= Correction_user::join('corrections', 'corrections.id', '=', 'correction_users.id_corrections')->join('users','users.id','=','corrections.id_users')->where("id_corrections", $id_corrections)
                        ->select('text','name_campo','username','correction_users.id as id')->get();
                        
                      }
                  }

                   // dd($co_def_text);
                    $id_co= array_unique($id_corrections);
                    $count_id=count($id_co);
                    for ($i=0; $i < $count_id; $i++) { 
                       $otros_img_d[]= Correction_user::where("id_corrections", $id_co[$i])->where('img','!=','0')->select('img','name_campo','id')->get();
                    }
        
                }else{
                  return redirect("corrections/correc_user/".$id_guia);
                }
            return  view('corrections/corrections_user/correc',compact('names_campos'),['rol'=>$rol,'names_campo'=>$names_campo,'campos_img'=> $campos_img,'number_guia'=>$number_guia,'id'=>$id_guia, 'correction_search2'=>$otros_text, 'correction_sear_img'=>  $otros_img_d, 'number_campos_img'=> $number_campos_img,'guia'=>$guia]);
          }else
           {
             return redirect("corrections/correc_user/".$id_guia);
           }

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
 