<?php

namespace App\Http\Controllers;
use App\User;
use App\Guias;
use App\Correction_user;
use Illuminate\Support\Facades\Auth;
use App\Correction;
use App\Role; 
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
        $guias = Guias::where(['level'=> $level_b, 'status'=>'activo'])->orderBy("id", "DESC")->paginate(4);
       }else{
         $guias= Guias::where('level','!=','0')->where('level','!=','vpn0')->where('level','!=','vpn')->orderBy("id", "DESC")->paginate(4);

       }
      // dd($guias);
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

        $guias=  Guias::where('level','0')->where('status','activo')->orderBy("id", "DESC")->get();
        $guias_n=  Guias::where('level','!=','0')->where('status','activo')->orderBy("id", "DESC")->get();

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

       if($level_b=='0')
       {         
        $guias= Guias::where('level','0')->where('status','activo')->orderBy("id", "ASC")
        ->name($name)
        ->paginate(6);
    }else{


         $guias= Guias::where('level','!=','0')->where('level','!=','vpn')->where('status','activo')->where('level','!=','vpn0')->orderBy("id", "ASC")
        //->where("level", $level)
        ->name($name)
        ->paginate(6);

    }
        
       
        return view('corrections.index',compact('guias'),['rol'=>$rol,'level'=>$level_b]);
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
      

         $guias= Guias::where('level','!=','0')->where('level','!=','1')->where('level','!=','2')->where('level','!=','3')->where('level','!=','vpn')->where('status','activo')->orderBy("id", "DESC")
        //->where("level", $level)
        ->name($name)
        ->img($img)
        ->status($status)
        ->level($level)
        ->paginate(4);
    }elseif($level_b=='vpn'){


         $guias= Guias::where('level','!=','0')->where('level','!=','1')->where('level','!=','2')->where('level','!=','3')->where('level','!=','vpn0')->where('status','activo')->orderBy("id", "DESC")
        //->where("level", $level)
        ->name($name)
        ->img($img)
        ->status($status)
        ->level($level)
        ->paginate(4);

    }elseif(($level_b!="vpn0")|| ($level_b!="vpn")){

        $guias=  Guias::where('level','0')->where('status','activo')->orderBy("id", "DESC")->get();
        $guias_n=  Guias::where('level','!=','0')->where('status','activo')->orderBy("id", "DESC")->get();

        return view('home', ["rol" => $rol,"guias" => $guias, "guias_n" => $guias_n]);
      }
        
       
        return view('corrections.index',compact('guias'),['rol'=>$rol,'level'=>$level_b]);
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
       $campo_nombre_img=explode(",", $campos_img);
       $number_campos_total=$number_campos+$number_campos_img;

       for ($i=0; $i < $number_campos_total; $i++) { 
         if(!empty($campo_nombre[$i]))
          {
            $tipos_campos[]='texto';
          }else{
              $tipos_campos[]='img';
          }
       }
    
       
      $tipos_campos=implode(',', $tipos_campos);
   
       $campos_def=$campo_n."".$campos_img;
     // dd($campos_def);
       $id_guias= $request->id_guias;
       $options =[
            'id_users' => $id_users,
            'id_guias' =>  $id_guias,    
        ];  
    $corrections=Correction::create($options);
  
      for ($i=0; $i <  $number_campos; $i++) 
        {                   
          if($i==0)
          {
                   $respuestas =[
                    'respues'.$i =>  $_POST['respues'.$i],
                    ];

                 $correction= Correction_user::create($respuestas);
                 }elseif($i>0){$y=0;
                 $id= $correction->id;
                
                  $correc = Correction_user::find($id);
                  $correc->id=$id; $respues='respues'.$i;
                  $correc->$respues=$_POST['respues'.$i];
                  $correc->tipos_campos=$tipos_campos;
                  $correc->id_corrections=$corrections->id;
                     $correc->save();
            
            }
       
           }
                
        for ($i=0; $i < $number_campos_img; $i++)
       { 
 
              $img = $request->file($i);
                $name = time().$img->getClientOriginalName(); 
               
            

           if($i==0)
          {
                    $img->move(public_path().'/images_guias/', $name);
                   $respuestas =[
                    'respues'.$i =>  $name];

                 $correction= Correction_user::all();
                 $corre=$correction->last();
                 $id=$corre->id;
                 $corre->id=$id;$y=$number_campos;
                 $respues='respues'.$y;
                 $corre->$respues=$name;
                 $y++;
                 $corre->save();
                
           
                 }elseif($i>0)
             {   $y=0;
                    $img->move(public_path().'/images_guias/', $name);
                 $id= $corre->id;
                
                    $correc = Correction_user::find($id);
                  $correc->id=$id; $respues='respues'.$i;
                  $correc->$respues=$name;
                  $correc->tipos_campos=$tipos_campos;
                  $correc->id_corrections=$corrections->id;
                  $correc->save();
          
         }
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
        $copiar=$guia->copiado;
       $correc=array();
       $correcciones= Correction::where('id_guias',$id)->get();

      $text = $request->get('respues');
    
      $tiempo_envio=$guia->tiempo_envio;  
    
      $number_gui=$guia->number_campos;
      $number_guia=$number_gui-1;
      $number_img_guia=$guia->number_campos_img;
      $number_campos_img=$number_img_guia-1;
      $campos_img=explode(",",$guia->names_campo_img);

      $names_campo=explode(',', $guia->names_campo);
          if(!empty($number_img_guia)){
          $names_campo = array_collapse([$names_campo,$campos_img]);
        }
       foreach ($correcciones as $correction) {
        $i=0; $y=0;
  
          $correction_user[]= Correction_user::where('id_corrections',$correction->id)
          ->get();
                                                                                          
        }


          if(!empty( $correction_user)){

    return view('corrections/corrections_user/correc',compact('correction_user'),['rol'=>$rol,'copiar'=>$copiar, 'id'=>$id,'number_guia'=>$number_guia,'names_campo'=>$names_campo, 'campos_img'=>$campos_img,'number_campos_img'=>  '0','guia'=>$guia,'time'=>$tiempo_envio]);
  }else{
    $correction_user = array('' );
     return view('corrections/corrections_user/correc',['copiar'=>$copiar,'correction_user'=>$correction_user,'rol'=>$rol, 'id'=>$id,'number_guia'=>$number_guia,'names_campo'=>$names_campo, 'campos_img'=>$campos_img,'number_campos_img'=>  '0','guia'=>$guia,'time'=>$tiempo_envio]);
  }

   }
  
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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


          
     $names_campo = array_collapse([$names_campo,$campos_img]);
        
      $tiempo_envio=$guia->tiempo_envio;  
      $respues = $request->get('text');
      $number_guia=$guia->number_campos;
      $number_campos_img=$guia->number_campos_img;
      $copiar=$guia->copiado;
      $number_gui[]=$number_guia-1;
      $correcciones= Correction::where('id_guias',$id_guia)->get();

          $correction_search_text= Correction_user::orderBy("id", "DESC")->join('corrections', 'corrections.id', '=', 'correction_users.id_corrections')->join('users','users.id','=','corrections.id_users')->join('people','people.id','=','users.people_id')->where('corrections.id_guias',$id_guia)->select('respues0','respues1','respues2','respues3','respues4','respues5','respues6','respues7','respues8','respues9','respues10','respues11','respues12','respues13','respues14','respues15','respues16','respues17','respues18','respues19','respues20','surname','tipos_campos','username','id_corrections','correction_users.id as id')
                  ->respues($respues)
                  ->paginate(3);
   
         if(!empty($correction_search_text))
         {
       $correction_search2=$correction_search_text;
          
        //   dd($correction_search_text);
        return  view('corrections/corrections_user/correc',compact('correction_search2'),['copiar'=>$copiar,'user'=>$user,'rol'=>$rol,'names_campo'=>$names_campo,'campos_img'=> $campos_img,'number_guia'=>$number_guia,'id'=>$id_guia, 'number_campos_img'=> $number_campos_img,'guia'=>$guia,'time'=>$tiempo_envio]);
         }else
           {
           return redirect("corrections/correc_user/".$id_guia);
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
        $user=User::find(auth()->user()->id);
        $user->status_login = 'activo';
        $user->save();
       
        $correction= Correction_user::join('corrections', 'corrections.id', '=', 'correction_users.id_corrections')->join('guias','guias.id','=','corrections.id_guias')->where("correction_users.id",$id)->get();
       $correction_id=$id;
       $id_guias=$correction[0]->id_guias;

        //$roles=Role::leftjoin('roles_user', 'roles_user.roles_id', '=', 'roles.id')->where('roles_user.user_id','=',$id )->select('roles.name')->get();
 
   //  dd($correction); 
      $names_campo=explode(',', $correction[0]->names_campo);

     return view('corrections.edit',['campos'=>$names_campo,'id_guias'=>$id_guias,'rol'=>$rol,'correction'=>$correction,'correction_id'=>$correction_id]);
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
          $user=User::find(auth()->user()->id);
          $user->status_login = 'activo';
          $user->save();
          $correction_n= Correction_user::join('corrections', 'corrections.id', '=', 'correction_users.id_corrections')->join('guias','guias.id','=','corrections.id_guias')->where("correction_users.id",$id)->get();
        
            $number_campos=$correction_n[0]->number_campos;
           for ($i=0; $i < 5; $i++) 
            { 
               $corre = Correction_user::find($id); 
               $id=$corre->id;
               $corre->id=$id;
               $respues='respues'.$i;
               $corre->$respues=$request->$respues;
               $corre->tipos_campos=$corre->tipos_campos;
               $corre->id_corrections=$corre->id_corrections;
               $corre->save();
                   
             
            }
               $correction_n= Correction_user::join('corrections', 'corrections.id', '=', 'correction_users.id_corrections')->join('guias','guias.id','=','corrections.id_guias')->where("correction_users.id",$id)->get();
               $id_guias=$correction_n[0]->id_guias;
           
          
               $names_campo=explode(',', $correction_n[0]->names_campo);

      return view('corrections.edit',['exito'=>'exito','campos'=>$names_campo,'id_guias'=>$id_guias,'rol'=>$rol,'correction'=>$correction_n,'correction_id'=>$id]);      
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $correction = Correction_user::find($id);
         $correction_user=$correction->id;
         $correction->delete();
  
      
     $rol = roleuser($request); //se llama al helper en Helpers/role
        $user=User::find(auth()->user()->id);
         $user->status_login = 'activo';
          $user->save();
       $guias=  Guias::where('level','0')->where('status','activo')->get();
       $guias_n=  Guias::where('level','!=','0')->where('status','activo')->get();
       $role=array();



         if(Auth::check()){
             foreach(User::all() as $user)
             {
                 if($user->isOnline())  {
                  if(($rol=="admin")||($rol=="foun")){
                    $users_ac[]= User::join('people', 'users.people_id', '=', 'people.id')->where("users.id", $user->id)
                        ->select('people.name as name','people.surname as surname','people.email as email','users.id as id')->get();
                      }else{
                        $users_ac[]= User::join('people', 'users.people_id', '=', 'people.id')->where("users.id", $user->id)
                        ->select('people.name as name','people.surname as surname','users.id as id')->get();
                      }
                   

                    $role[]= Role::join('roles_user', 'roles_user.roles_id', '=', 'roles.id')->where("roles_user.user_id", $user->id)
                        ->select('roles.name','roles.description')->get();
                   
              }else{
                 if(($rol=="admin")||($rol=="foun")){
                    $users_inac= User::leftjoin('people', 'users.people_id', '=', 'people.id')->where("users.id", "!=",$user->id)->where('users.status_login','inactivo')
                        ->select('people.name as name','people.surname as surname','people.email as email','users.id as id')->get();
                      }else{
                        $users_inac= User::leftjoin('people', 'users.people_id', '=', 'people.id')->where("users.id", "!=",$user->id)->where('users.status_login','inactivo')
                        ->select('people.name as name','people.surname as surname','users.id as id')->get();
                      }
                    $role2[]= Role::join('roles_user', 'roles_user.roles_id', '=', 'roles.id')->where("roles_user.user_id", $user->id)
                        ->select('roles.name','roles.description')->get();

              }
             }
          foreach ( $users_ac as $user) {
              $i=0;
             
               $role[]= Role::join('roles_user', 'roles_user.roles_id', '=', 'roles.id')->where("roles_user.user_id", $user[$i]->id)
                        ->select('roles.name','roles.description')->get();
              $i++;
          }

         }

 return view('home', ["exito"=>"exito","roles"=>$role,"role2"=>$role2,"users_ac"=>$users_ac,"users_inac"=>$users_inac,"rol" => $rol,"guias" => $guias, "guias_n" => $guias_n]);

    }


}
 