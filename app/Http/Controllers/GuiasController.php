<?php

namespace App\Http\Controllers;
use App\User;
use App\Correction_user;
use App\Correction;
use App\Guias;
use Illuminate\Http\Request;
use Alert;

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
    public function index( Request $request, $level)
    {
        //$guias = Guias::all();
        $rol = roleuser($request); //se llama al helper en Helpers/role
          $user=User::find(auth()->user()->id);
          $user->status_login = 'activo';
          $user->save();
         $guias=  Guias::where('level',$level)->get();
        
       
        return view('guias.index',['rol'=>$rol, 'level'=>$level, 'guias'=>$guias]);
    }

     public function search(Request $request)
    {
        $rol = roleuser($request); //se llama al helper en Helpers/role
        $user=User::find(auth()->user()->id);
        $user->status_login = 'activo';
        $user->save();  
         
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
             $rol = roleuser($request); //se llama al helper en Helpers/role
            $user=User::find(auth()->user()->id);
            $user->status_login = 'activo';
            $user->save();  
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
        $rol = roleuser($request); //se llama al helper en Helpers/role
        $user=User::find(auth()->user()->id);
        $user->status_login = 'activo';
        $user->save();  
         
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
        $rol = roleuser($request); //se llama al helper en Helpers/role
        $user=User::find(auth()->user()->id);
        $user->status_login = 'activo';
        $user->save();  
         
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
        $rol = roleuser($request); //se llama al helper en Helpers/role
        $user=User::find(auth()->user()->id);
        $user->status_login = 'activo';
        $user->save();  
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
          $rol = roleuser($request);
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
   

        

        $options =[
            'name' => $request->name,
             
            
            'status' => $request->status,
            'names_campo' => $request->names_campo,
            'number_campos' => $request->number_campos,
            'names_campo_img' => $request->names_campo_img,
            'number_campos_img' => $request->number_campos_img,

            'level'=> $request->level,
            
              'img'=> $name,
            
        ];
        
         if(Guias::create($options)){
            return view('guias.create',['exito'=>'error_in','rol'=>$rol]);
        }else{
            return view('guias.create',['error_in'=>'error_in','rol'=>$rol]);
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
        
       
        $rol = roleuser($request); //se llama al helper en Helpers/role
        $user=User::find(auth()->user()->id);
    //    $user->status_login = 'activo';
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


        public function multi(Request $request, $id)
    {
      $rol = roleuser($request); //se llama al helper en Helpers/role
      $user=User::find(auth()->user()->id);
      $user->status_login = 'activo';
      $user->save();
      $guias= Guias::find($id);
      $level=$guias->level;
 
      $correc= Correction::where('id_guias',$id)->get();
    //  dd($correc);

      $count=count($correc);

      for ($i=0; $i < $count; $i++) { 
          //$id_correc[]=$correc[$i]->id;
         $correc_user[]= Correction_user::where('id_corrections',$correc[$i]->id)->get();
      }
      if( !empty($correc_user))
      {

          $count=count($correc_user);
         for ($i=0; $i < $count; $i++) { 
            for ($y=0; $y < 1; $y++) { 
               $co[]=$correc_user[$i][$y]->text;
            }
          
          } 
      
 
    
     $fileText = $co;
    
 
    foreach ($fileText as $key ) {
        
        $em=implode("\r\n",$fileText);
      // $em = fwrite($fileText,"\n");
     //   $am=$em."<br>";
        }


        $myName = $guias->name.".txt";
        $headers = ['Content-type'=>'text/plain', 'test'=>'YoYo', 'Content-Disposition'=>sprintf('attachment; filename="%s"', $myName),'X-BooYAH'=>'WorkyWorky',/*' Content-Length' => ''*/];
    return \Response::make($em, 200, $headers);
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
    
      // return view('guias.index',['rol'=>$rol, 'level'=>$level, 'guias'=>$guias,'multi'=>'multi']);

 


 return view('guias.index',['rol'=>$rol, 'level'=>$level, 'guias'=>$guias,'multi'=>'multi','error'=>'error']);

      }
    }
}
