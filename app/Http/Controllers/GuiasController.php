<?php

namespace App\Http\Controllers;
use App\User;
use App\Correction_user;
use App\Correction;
use App\Guias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Imports\ImportUsers;
use App\Http\Requests;
use Maatwebsite\Excel\Facades\Excel;

//use Excel;
use Carbon\Carbon;
use Input;
class GuiasController extends Controller
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


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $rol = roleuser($request); //se llama al helper en Helpers/role
          if(($rol=='admin')||($rol=='foun')||($rol=='buyer'))
        {

        $user=User::find(auth()->user()->id);
        $user->status_login = 'activo';
        $user->save();  
         return view('guias.create',['rol'=>$rol]); 
     }else{
         return redirect('home');
     }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $rol = roleuser($request);
              if(($rol=='admin')||($rol=='foun')||($rol=='buyer'))
        {

        $user=User::find(auth()->user()->id);
        $user->status_login = 'activo';
        $user->save();  
        if ($request->hasFile('img')) {
        $file = $request->file('img');
       
        $name = time().$file->getClientOriginalName(); 
        $file->move(public_path().'/images_guias/', $name);
        }else{
            $name=NULL;
        }
  
        $number_campos=$request->number_campos;
        $number_campos_img=$request->number_campos_img;
        $total_campos=$number_campos+$number_campos_img;
      
          
           for ($i=0; $i < $total_campos; $i++) { 
                    $y=0;$z=1;
                                        
                    $co[]='1';
                          
                }
        $copia=implode(",", $co);

        $options =[
            'name' => $request->name,
             
            
            'status' => $request->status,
            'names_campo' => $request->names_campo,
            'number_campos' => $number_campos,
            'names_campo_img' => $request->names_campo_img,
            'number_campos_img' => $number_campos_img,
            'copiado' => $copia,
            'level'=> $request->level,
              'img'=> $name,
            
        ];

        
         if(Guias::create($options)){
            return view('guias.create',['exito'=>'error_in','rol'=>$rol]);
        }else{
            return view('guias.create',['error_in'=>'error_in','rol'=>$rol]);
        }
       }else{
          return redirect('home');
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
         $user=User::find(auth()->user()->id);
         $user->status_login = 'activo';
         $user->save();  
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
         $rol = roleuser($request); //se llama al helper en Helpers/role

        $user=User::find(auth()->user()->id);
        $user->status_login = 'activo';
        $user->save();  
        $guia=Guias::find($id);
          $level=$guia->level;
          if($level=='0'){
          if(($rol=='admin')||($rol=='foun')||($rol=='editor')||($rol=='editor0')||($rol=='buyer'))
           {
             return view('guias.edit',['rol'=>$rol,'guia'=>$guia]);
             }else{
                  return redirect('home');
              }
        }else{
             if(($rol=='admin')||($rol=='foun')||($rol=='editor')||($rol=='buyer'))
            { 
               return view('guias.edit',['rol'=>$rol,'guia'=>$guia]);
            }else{
              return redirect('home');
          }
        }
       
 }
   

     public function time(Request $request,$id)
    {
         $id = \Crypt::decrypt($id); 
         $rol = roleuser($request); //se llama al helper en Helpers/role
        $user=User::find(auth()->user()->id);
        $user->status_login = 'activo';
        $user->save();  
        $guia=Guias::find($id);
        $guia->tiempo_envio=$request->tiempo_envio;
     
         $level=$guia->level;
          if($level=='0'){
          if(($rol=='admin')||($rol=='foun')||($rol=='editor')||($rol=='editor0')||($rol=='buyer'))
           {
                  $guia->save();
               return redirect("corrections/correc_user/".$id);
             }else{
                  return redirect('home');
              }
        }else{
             if(($rol=='admin')||($rol=='foun')||($rol=='editor'))
              {      $guia->save();
                 return redirect("corrections/correc_user/".$id);
            }else{
              return redirect('home');
          }
        }

      
   //     return view('guias.edit',['rol'=>$rol,'guia'=>$guia]);
   
    }
        /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function copiado(Request $request,$id)
    {
         $rol = roleuser($request); //se llama al helper en Helpers/role
        $user=User::find(auth()->user()->id);
        $user->status_login = 'activo';
        $user->save();  
        $guia=Guias::find($id);
        $guia->id=$id;
        $level=  $guia->level;
        $copiado=$request->copiado;
        
        

        $column_cop=$copiado;
        $columna=explode(',', $column_cop);
        $counnt_colu=count($columna);
        $number_campos=$guia->number_campos;
        $number_campos_img=$guia->number_campos_img;
        $total_campos=$number_campos+$number_campos_img;
      //  var_dump($total_campos);
       // var_dump($columna);
        if($counnt_colu==1){
              $y=0;$z=1;
           for ($i=0; $i < $total_campos; $i++) { 
                    
                   if(!empty($columna[$y])){
                        
                           if($columna[$y]==$z)
                           {
                            $co[]='1';
                           }else{
                            $co[]='0';
                           } 
                           
                        }  $z++;
                }
            }else{
                  //todas
                $y=0;$z=1;

                     for ($i=0; $i < $total_campos; $i++) { 
                    
                   if(!empty($columna[$y])){
                        
                           if($columna[$y]==$z)
                           {
                            $co[]='1';
                           }else{
                            $co[]='0';
                           } 
                           
                        }else{
                           $co[]='0';
                        } $y++; $z++;
                        //echo "exi";
                } 
            }
        
        //     var_dump($co);
       
       $com= implode(',', $co);
   
       $guia->copiado=$com;
        //var_dump($com);
         

        if($guia->save()){
       
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
          
                     $correction_search2= Correction_user::orderBy("id", "DESC")->join('corrections', 'corrections.id', '=', 'correction_users.id_corrections')->join('users','users.id','=','corrections.id_users')->join('people','people.id','=','users.people_id')->where('corrections.id_guias',$id)->select('respues0','respues1','respues2','respues3','respues4','respues5','respues6','respues7','respues8','respues9','respues10','respues11','respues12','respues13','respues14','respues15','respues16','respues17','respues18','respues19','respues20','surname','tipos_campos','username','id_corrections','correction_users.id as id')
                  ->respues($text)
                  ->paginate(10);
                                                                                                  
                }


                  if(!empty( $correction_search2)){

         //   return view('corrections/corrections_user/correc',compact('correction_search2'),['level'=>$level,'exito'=>'exito','rol'=>$rol,'copiar'=>$copiar, 'id'=>$id,'number_guia'=>$number_guia,'names_campo'=>$names_campo, 'campos_img'=>$campos_img,'number_campos_img'=>  '0','guia'=>$guia,'time'=>$tiempo_envio]);
             return redirect("corrections/correc_user/".$id);

          }else{
             return redirect("corrections/correc_user/".$id);
          }

        }else{
            return view('corrections/corrections_user/correc',compact('correction_search2'),['level'=>$level,'error_in'=>'error_in','rol'=>$rol,'copiar'=>$copiar, 'id'=>$id,'number_guia'=>$number_guia,'names_campo'=>$names_campo, 'campos_img'=>$campos_img,'number_campos_img'=>  '0','guia'=>$guia,'time'=>$tiempo_envio]);
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
         $user=User::find(auth()->user()->id);
         $user->status_login = 'activo';
         $user->save(); 
       
        
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
        $guias->status=$request->status;
        
     
        if($guias->save()){

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
                  
                  return view('guias.search',compact('guias'),['exito'=>'exito','rol'=>$rol]);
            }else{
                return view('guias.edit',['error_in'=>'error_in','rol'=>$rol,'guia'=>$guia]);
            }
        



    }

        public function inactiva( Request $request, $level_b)
    {
        //$guias = Guias::all();
       $rol = roleuser($request); //se llama al helper en Helpers/role
        $user=User::find(auth()->user()->id);
        $user->status_login = 'activo';
        $user->save();  
         if($level_b=='0')
       {
        $guias = Guias::where(['level'=> $level_b, 'status'=>'inactivo'])->orderBy("id", "DESC")->paginate(4);
       }else{
         $guias= Guias::where('level','!=','0')->where('level','!=','vpn0')->where('level','!=','vpn')->where('status','inactivo')->orderBy("id", "DESC")->paginate(4);
       }
       if($level_b=='vpn0')
          {
             $guias= Guias::where('level',$level_b)->where('status','inactivo')->paginate(4);
          }elseif($level_b=='vpn'){
             $guias= Guias::where('level',$level_b)->where('status','inactivo')->paginate(4);
          }

      // dd($guias);
       return view('guias.inactivo',compact('guias'),['rol'=>$rol, 'level'=>$level_b]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function destroy(Request $request,$id,$level)
    {
        
       $guia = Guias::find($id);  
       $guia->delete();
         if(($level=='0')||($level=="vpn0")|| ($level=="vpn")||($rol=='buyer'))
       {
        $guias = Guias::where(['level'=> $level, 'status'=>'inactivo'])->orderBy("id", "DESC")->paginate(4);  
      }else{
       $guias= Guias::where('level','!=','0')->where('level','!=','vpn0')->where('level','!=','vpn')->where('status','!=','inactivo')->orderBy("id", "DESC")->paginate(4);
      }

 

        $rol = roleuser($request); //se llama al helper en Helpers/role
        $user=User::find(auth()->user()->id);
        $user->status_login = 'activo';
        $user->save();

 
      return \Redirect::route('inactiva', [$level])->with(['rol'=>$rol, 'level'=>$level,'exito'=>'exito']);
      }
      public function active(Request $request,$id)
      {
          $rol = roleuser($request); //se llama al helper en Helpers/role
         $user=User::find(auth()->user()->id);
          $user->status_login = 'activo';
          $user->save();
          $guia=Guias::find($id); 
          $level_b=$guia->level;
          $guia->status='activo';
          $guia->save();
          
             $guias = Guias::where(['level'=> $level_b, 'status'=>'inactivo'])->orderBy("id", "DESC")->paginate(4);
        return view('guias.inactivo',compact('guias'),['rol'=>$rol, 'level'=>$level_b,'exito'=>'exito']);   

        }
      


       public function multi_index(Request $request,$level)
    {
      $rol = roleuser($request); //se llama al helper en Helpers/role
      $user=User::find(auth()->user()->id);
      $user->status_login = 'activo';
      $user->save();
      if($level==0)
      {
         $guias=  Guias::where('level','!=','vpn')->where('level',$level)->where('level','!=','1')->where('level','!=','2')->where('level','!=','3')->where('level','!=','vpn0')->where('status','activo')->get();
     }else{
         $guias=  Guias::where('level','!=','vpn')->where('level','!=','0')->where('status','activo')->where('level','!=','vpn0')->get();
     }
    
        if($level=='VPN0'){
         $guias=  Guias::where('level','!=','vpn')->where('level','!=','0')->where('status','activo')->where('level','!=','1')->where('level','!=','2')->where('level','!=','3')->get();
     } if($level=='VPN'){
        $guias=  Guias::where('level','!=','vpn0')->where('level','!=','0')->where('status','activo')->where('level','!=','1')->where('level','!=','2')->where('level','!=','3')->get();
     }
       
        return view('guias.index',['rol'=>$rol, 'level'=>$level, 'guias'=>$guias,'multi'=>'multi']);
    }

    public function getImport(Request $request)
     {
       $rol = roleuser($request); //se llama al helper en Helpers/role
      $user=User::find(auth()->user()->id);
      $user->status_login = 'activo';
      $user->save();
     return view('guias.import',['rol'=>$rol]);
     }



     public function import(Request $request)
    {
                ini_set('max_execution_time', 600);

        // $name_guia = $request->get('name');
         $name_campo = $request->get('names_campo');
         $names_campo_img = $request->get('names_campo_img');
          // var_dump($name);
          $level = $request->get('level');
          $names_campo=explode(',',  $name_campo);
          $number_campos=count($names_campo);
          //$number_campos_img=count($names_campo_img);
           $file = $request->file('file');
        
            $names=  $file->getClientOriginalName(); 
            $name=explode('.', $names);
            $name= $name[0];

          
           for ($i=0; $i < $number_campos; $i++) { 
                    $y=0;$z=1;
       
                            $co[]='1';
                         
                }
       
       $com= implode(',', $co);
     //    var_dump($com);
       $guias=Guias::create([
     'name' =>  $name,
     'status' =>'activo',
     'names_campo' => $name_campo,
     'number_campos' =>$number_campos,
    // 'number_campos_img' =>$guias->number_campos_img,
     'names_campo_img' =>$names_campo_img,
     'copiado' => $com,
     'level' =>$level,
     ]);
            

  

      Excel::import(new ImportUsers, request()->file('file'));
            
        return back();

   
    
    }





        public function multi(Request $request, $id)
    {
      $rol = roleuser($request); //se llama al helper en Helpers/role
      $user=User::find(auth()->user()->id);
      $user->status_login = 'activo';
      $user->save();
      $guias= Guias::find($id);
      $level=$guias->level;
 
      $correc= Correction::where('id_guias',$id)->get();
       $multi = $request->get('multi');
     // $multi='1';
      $count=count($correc);

     
/*
      for ($i=0; $i < $count; $i++) { 
          //$id_correc[]=$correc[$i]->id;
         $correc_user[]= Correction_user::where('id_corrections',$correc[$i]->id)->get();
      }*/
         $correc_user= Correction_user::join('corrections', 'corrections.id', '=', 'correction_users.id_corrections')->join('users','users.id','=','corrections.id_users')->join('people','people.id','=','users.people_id')->where('corrections.id_guias',$id)->get();
          

      if( !empty($correc_user))
      {
      //  dd($correc_user);
        //  $count=count($correc_user);
        // for ($i=0; $i < $count; $i++) { 
            if(!empty($multi))
            {  
                    $multi_usuario=$multi-1; 
                    $res='respues'.$multi_usuario;
                     foreach ($correc_user as $key) {
                   $i=0; 
                    for($y=0; $y< 9; $y++){
                      $respues='respues'.$y;
                      $co=$key->$respues;   
                       if($respues==$res)
                       {
                        $multis[]=$key->$respues;
                       }
                    }
                   
               $i++;
                }

            }else{
                    $multi_usuario='0'; 
                    $res='respues'.$multi_usuario;
                     foreach ($correc_user as $key) {
                   $i=0; 
                    for($y=0; $y< 9; $y++){
                      $respues='respues'.$y;
                      $co=$key[$i]->$respues;   
                       if($respues==$res)
                       {
                        $multis[]=$key[$i]->$respues;
                       }
                    }
                   
               $i++;
                }
            }
            
           //  dd($multis); 
            
 
    if(!empty($multis))
   {
    $fileText = $multis;
    
 
    foreach ($fileText as $key ) {
        
        $em=implode("\r\n\n",$fileText);
      // $em = fwrite($fileText,"\n");
     //   $am=$em."<br>";
        }


        $myName = $guias->name.".txt";
        $headers = ['Content-type'=>'text/plain', 'test'=>'YoYo', 'Content-Disposition'=>sprintf('attachment; filename="%s"', $myName),'X-BooYAH'=>'WorkyWorky'];

    return \Response::make($em, 200, $headers);
        if($level==0)
      {
         $guias=  Guias::where('level','!=','vpn')->where('level',$level)->where('level','!=','1')->where('level','!=','2')->where('level','!=','3')->where('level','!=','vpn0')->where('status','activo')->get();
     }else{
         $guias=  Guias::where('level','!=','vpn')->where('level','!=','0')->where('status','activo')->where('level','!=','vpn0')->get();
     }
    
        if($level=='vpn0'){
         $guias=  Guias::where('level','!=','vpn')->where('level','!=','0')->where('status','activo')->where('level','!=','1')->where('level','!=','2')->where('level','!=','3')->get();
     }elseif($level=='vpn'){
        $guias=  Guias::where('level','!=','vpn0')->where('level','!=','0')->where('status','activo')->where('level','!=','1')->where('level','!=','2')->where('level','!=','3')->get();
     }
     return view('guias.index',['rol'=>$rol, 'level'=>$level, 'guias'=>$guias,'multi'=>'multi','exito'=>'exito']);

      }else{
     if($level==0)
      {
         $guias=  Guias::where('level','!=','vpn')->where('level',$level)->where('level','!=','1')->where('level','!=','2')->where('level','!=','3')->where('level','!=','vpn0')->where('status','activo')->get();
     }else{
         $guias=  Guias::where('level','!=','vpn')->where('level','!=','0')->where('status','activo')->where('level','!=','vpn0')->get();
     }
    
        if($level=='vpn0'){
         $guias=  Guias::where('level','!=','vpn')->where('level','!=','0')->where('status','activo')->where('level','!=','1')->where('level','!=','2')->where('level','!=','3')->get();
     }elseif($level=='vpn'){
        $guias=  Guias::where('level','!=','vpn0')->where('level','!=','0')->where('status','activo')->where('level','!=','1')->where('level','!=','2')->where('level','!=','3')->get();
     }      
    
    return view('guias.index',['rol'=>$rol, 'level'=>$level, 'guias'=>$guias,'multi'=>'multi','error'=>'error']);


   } 
     

      }
    }


}

  