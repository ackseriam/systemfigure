                                                         <tr>
                                                            
                                                          <td><input type="text" name="" readonly="readonly" class="form-control" value="{{$correction[$i][0]->respues0}}" id="listen_{{$correction[$i][0]->id}}">  
                                                          <button type="button" id="copyClip" data-clipboard-target="#listen_{{$correction[$i][0]->id}}" class="btn btn-primary"><i class=" mdi mdi-content-copy"></i></button>
                                                        </td>
                                                             
                                                          <?php $i++; ?>
                                                          @endforeach
                                                     </tr>
               /*
                         if(!empty($correction_search_text2))
                {

                     $co_def_text= array_unique($correction_search_text2);
                  $count_d=count($co_def_text);
                
                  foreach ($co_def_text as $image) {
                      for ($i=0; $i < $count_d; $i++)
                      { 
                         $corrections=$co_def_text;
                         $count_c=count($corrections);
                       for ($y=0; $y <  $count_c; $y++) {

                         $correc=$corrections[$y];

                          $count=count($correc);
                          for ($i=0; $i < $count; $i++) { 
                           $id[]=$correc[$i]->id;
                          }
                         }
                        
                      }
                  }    
                    $id_d=array_unique($id);


                      foreach ($id_d as $id) 
                      {
                        $otros_text[]= Correction_user::join('corrections', 'corrections.id', '=', 'correction_users.id_corrections')->join('users','users.id','=','corrections.id_users')->join('people','people.id','=','users.people_id')->where("correction_users.id", $id)
                       ->select('text','name','surname','name_campo','username','id_corrections','correction_users.id as id')->get();

                      }
                     $count_otro=count($otros_text);
                    
                    
                     $otros_text2=array_chunk($otros_text, $number_guia);
           
                   
                      $co_def_text= array_unique($correction_search_text2);
                      $count_d=count($correction_search_text2);
                      $otros_text_p[]= Correction_user::join('corrections', 'corrections.id', '=', 'correction_users.id_corrections')->join('users','users.id','=','corrections.id_users')->join('people','people.id','=','users.people_id')->where("id_corrections", $co_def_text[0][0]->id_corrections)->select('text','name','surname','name_campo','username','id_corrections','correction_users.id as id')->get();
                       if($count_otro<$number_guia) {    

                               $otros_text3= $otros_text_p;
                               $count_o=count($otros_text3); 
                               $otros_text2=NULL;

                                   foreach ($otros_text3 as $user) {
 
                                    for ($i=0; $i < 1; $i++) { 
                                     $username[]= $user[$i][0]->name." ".$user[$i][0]->surname;
                                    }
                                  }
                                
                                 $user=array_unique($username);
                               
                                 for ($i=0; $i < 1; $i++) { 
                                   $usero[]=$user[$i];
                                 }
                               
                       }else{
                               $otros_text2=$otros_text;
                               $count_o=count($otros_text2); 
                               $otros_text3=NULL;
                     
                                   foreach ($otros_text2 as $user) {

                                    for ($i=0; $i < 1; $i++) { 
                                     $username[]= $user[$i]->name." ".$user[$i]->surname;
                                    }
                                  }
                                
                                 $user=array_unique($username);
                               
                                 for ($i=0; $i < 1; $i++) { 
                                   $usero[]=$user[$i];
                                 }
                               
                       } 
                        
                   
                     foreach ($id_d as $id)
                      {
                       $otros_img_d[]=Correction_user::join('corrections', 'corrections.id', '=', 'correction_users.id_corrections')->join('users','users.id','=','corrections.id_users')->where("correction_users.id", $id)->where('correction_users.img','!=','0')->select('img','name_campo')->get();
                      }
                   
        
                }else{
               return redirect("corrections/correc_user/".$id_guia);
                 }

        return  view('corrections/corrections_user/correc',['count_o'=>$count_o,'user'=>$user,'rol'=>$rol,'names_campo'=>$names_campo,'campos_img'=> $campos_img,'number_guia'=>$number_guia,'id'=>$id_guia, 'correction_search2'=>$otros_text2,'correction_search3'=>$otros_text3, 'correction_sear_img'=>  $otros_img_d, 'number_campos_img'=> $number_campos_img,'guia'=>$guia]);
         }else
           {
           return redirect("corrections/correc_user/".$id_guia);
           }*/

 @include('layouts.head')
@include('layouts.nav')

 <body >
     <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right" onmousedown='return false;' onselectstart="return false;">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tablero</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Personas</a></li>
                                            <li class="breadcrumb-item active">Buscar correccion</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title" onmousedown='return false;' onselectstart="return false;">Buscar correccion de la guia</h4>
                                </div>
                            </div>
                        </div>   
               <!-- Inline Form -->
                         <div class="row">
                            <div class="col-md-12 center">
                                <div class="card">
                                    <div class="card-body">
                                        <div onmousedown='return false;' onselectstart="return false;">
                                            <h4 class="header-title">Ingresa los datos para la busqueda</h4>

                                        <p class="text-muted mb-3">
                                        </p>
                                      <h6 class="font-13 mt-3">Datos de la correccion</h6>
                                        </div>
                                        
                                 
                    {{ Form::open(['url' => 'corrections/show/'.$id.'/','method'=> 'GET', 'class' => '']) }}
                    <div class="form-row align-items-center">

                      <div class="col-auto">
                          {{Form::text('text', null, ['class'=> 'form-control mb-2', 'placeholder' => 'Texto de la corrección'])}}
                       </div>

                                          
                                    <div class="col-auto">
                                      <button type="submit" class="btn btn-primary mb-2">Buscar</button>
                                  </div>
                       </div>
                  </div>
                    {{ Form::close()}}
                                      <div class="col-lg-2">   
                                        <a href="{{ url('corrections/create') }}/{{$id}}" target="_blank" class="btn btn-primary">Agregar corrección</a>
                                      </div>
                                     
                                     
                                      
              <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                      <div class="row">
                                          <div class="col-lg-9">
                                          <div class="table-responsive-sm">
                                            <table class="table table-striped table-centered mb-0" onmousedown='return false;' onselectstart="return false;">
                                                <thead>
                                                    <tr>
                                                        @foreach($names_campo as $campos)
                                                        <th>{{$campos}}</th>            
                                                        @endforeach
                                                    
                                                    </tr>
                                                </thead>
                                                   
                                                <tbody>
                                                    @if(!empty($correction_search2))
                                                         @foreach($correction_search2 as $correction)
                                                      <tr>
                                                        @if($correction != '0')
                                                        @for($i=0; $i< $number_guia; $i++)
                                                          <td><input type="text" name="" readonly="readonly" class="form-control" value="{{$correction[$i][0]->text}}" id="listen_{{$correction[$i][0]->id}}">  
                                                          <button type="button" id="copyClip" data-clipboard-target="#listen_{{$correction[$i][0]->id}}" class="btn btn-primary"><i class=" mdi mdi-content-copy"></i></button>
                                                            
                                                          @endfor
                                                          @endif
                                                          @endforeach
                                                     </tr>
                                                     @endif
                                                </tbody>        
                                              </table>   
                                        </div> <!-- end table-responsive-->
                                      </div>

                                      <div class="col-lg-3">
                                          <div class="table-responsive-sm">
                                            <table class="table table-striped table-centered mb-0" onmousedown='return false;' onselectstart="return false;">
                                                <thead>
                                                    <tr>
                                                        <th>Accion</th>
                                                    </tr>
                                                </thead>
                                                   
                                                <tbody>
                                                    @if(!empty($user))
                                                     @foreach($user as $users)
                                                        <tr>
                                                           <td>
                                                              <div id="consul">
                                                                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#full-width-modal">Detalles  </button>
                                                              </div>
                                                                
                                                         </td>
                                                       </tr>
                                                           <div id="full-width-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="primary-header-modalLabel" aria-hidden="true">
                                                             <div class="modal-dialog modal-full-width">
                                                                  <div class="modal-content">
                                                                    <div class="modal-header modal-colored-header bg-primary">
                                                                    <h4 class="modal-title" id="primary-header-modalLabel">{{$guia->name}}</h4>
                                                                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                      </div>
                                                                      <div class="modal-body">
                                                                        <h5 class="mt-0">Fecha</h5>
                                                                        <p>Guia creada :{{$guia->created_at}}</p><br>
                                                                        <h5 class="mt-0">Detalle de la corrección:</h5>
                                                                        <br>
                                                                         <h5 class="mt-0"> Usuario que realizo la corrección: {{$users}}</h5>
                                                                        <p>  
                                                     
                                                                  </p><br>
                                                              </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light" data-dismiss="modal">Cerrar ventana</button>
                                                       
                                                    </div>

                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->

                                                     @endforeach
                                                     @endif

                                                </tbody>        
                                              </table>   
                                        </div> <!-- end table-responsive-->
                                      </div>
                                        
                                      </div>

      
                              


                                    </div> <!-- end card body-->
                                    @if(($rol=='admin')||($rol=='foun')||($rol=='editor'))
                                      <div class="col-lg-2">   
                                         <a href="/corrections/multi/{{$id}}" class="btn btn-success" title="Descargar multi ">   <i class="mdi mdi-download ml-1"></i>Descargar multi</a>
                                      </div>
                                      @endif
                                </div> <!-- end card -->
                            </div><!-- end col-->
                                  
                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                            </div> <!-- end col -->
                        </div>
         
                                 <div id="full-width-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="primary-header-modalLabel" aria-hidden="true">
                                     <div class="modal-dialog modal-full-width">
                                   <div class="modal-content">
                                             <div class="modal-header modal-colored-header bg-primary">
                                                                    <h4 class="modal-title" id="primary-header-modalLabel"></h4>
                                                                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                      </div>
                                                                      <div class="modal-body">
                                                                        <h5 class="mt-0">Fecha</h5>
                                                                        <p>Guia creada :</p><br>
                                                                        <h5 class="mt-0">Detalle de la corrección:</h5>
                                                                        <br>
                                                                                                                                             
                                                                   
                                                                        
                                                                        
                                                                         <h5 class="mt-0"> Usuario que realizo la corrección:</h5>
                                                                        <p>  

                                                                         
                                                        <div class="row">
                                                            
                                                              <div class="col-lg-6">
                                                                    <h5 class="mt-0"> Campos:</h5>
                                                                    @foreach($names_campo as $campos)
                                                                     <input type="text" name=""  class="form-control" value="  {{$campos}}" >
                                                                    
                                                                   @endforeach  
                                                               </div> 
                                                                
                                                           
                                                                 <div class="col-lg-6">
                                                                <div class="col-lg-4">
                                                                     <input type="text" name="" readonly="readonly" class="form-control" value=""  id=""> 
                                                               </div>
                                                                 <div class="col-lg-2">
                                                                     <button type="button" id="copyClip"  data-clipboard-target="#list_}" class="btn btn-primary"><i class=" mdi mdi-content-copy"></i></button>
                                                                </div>
                                                               
                                                                </div>
                                                        </div>
                                                     
                                                   </p><br>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light" data-dismiss="modal">Cerrar ventana</button>
                                                       
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
 
            
           
 </body>
<script>
  new Vue({
  el: '#consul',
  methods: {
    consul: function (message) {
      alert(message);
    }
  }
})
</script>
@include('layouts.footer')
@if(!empty($error))

        <div class="rightbar-overlay"></div>
  <script src="{{ asset('js/sweetalert/sweetalert2.js') }}"></script>
    <script src="{{ asset('js/sweetalert/sweetalert2.all.js') }}"></script>


<script>


  Swal.fire({
  type: 'error',
  title: 'Oops...',
  text: 'El multi no tiene suficientes correcciones para descargar el archivo!',
  footer: '<a href>Quieres ingresar una corrección?</a>'
})
</script>
@endif
  <td>
                                                   @if($number_campos_img > '0')
                                                   <button class="btn btn-success" " data-toggle="modal" data-target="#img-width-modal"> Ver ímagenes de la corrección</button> 

                                                   @endif
                                                                      
                                                              <div id="full-width-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="primary-header-modalLabel" aria-hidden="true">
                                                             <div class="modal-dialog modal-full-width">
                                                                  <div class="modal-content">
                                                                    <div class="modal-header modal-colored-header bg-primary">
                                                                    <h4 class="modal-title" id="primary-header-modalLabel">{{$guia->name}}</h4>
                                                                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                      </div>
                                                                      <div class="modal-body">
                                                                        <h5 class="mt-0">Fecha</h5>
                                                                        <p>Guia creada :{{$guia->created_at}}</p><br>
                                                                        <h5 class="mt-0">Detalle de la corrección:</h5>
                                                                        <br>
                                                                                                                                             
                                                                   
                                                                        
                                                                         <?php $username= $correction[$i][0]->username ?>
                                                                         <h5 class="mt-0"> Usuario que realizo la corrección: {{$username}}</h5>
                                                                        <p>  

                                                                         
                                                        <div class="row">
                                                            
                                                              <div class="col-lg-6">
                                                                    <h5 class="mt-0"> Campos:</h5>
                                                                    @foreach($names_campo as $campos)
                                                                     <input type="text" name=""  class="form-control" value="  {{$campos}}" >
                                                                    
                                                                   @endforeach  
                                                               </div> 
                                                                
                                                           
                                                                 <div class="col-lg-6">
                                                                <div class="col-lg-4">
                                                                     <input type="text" name="" readonly="readonly" class="form-control" value="{{$correction[$i][0]->text}}"  id="list_{{$correction[$i][0]->id}}"> 
                                                               </div>
                                                                 <div class="col-lg-2">
                                                                     <button type="button" id="copyClip"  data-clipboard-target="#list_{{$correction[$i][0]->id}}" class="btn btn-primary"><i class=" mdi mdi-content-copy"></i></button>
                                                                </div>
                                                               
                                                                </div>
                                                        </div>
                                                     
                                                   </p><br>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light" data-dismiss="modal">Cerrar ventana</button>
                                                       
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                          
                                            <div id="img-width-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="success-header-modalLabel" aria-hidden="true">
                                                     <div class="modal-dialog modal-full-width">
                                                         <div class="modal-content">
                                                             <div class="modal-header modal-colored-header bg-success">
                                                                    <h4 class="modal-title" id="primary-header-modalLabel">{{$guia->name}}</h4>
                                                                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                      </div>
                                                                      <div class="modal-body">
                                                                        <h5 class="mt-0">Fecha</h5>
                                                                        <p>Guia creada :{{$guia->created_at}}</p><br>
                                                                        <h5 class="mt-0">Detalle de la corrección:</h5>
                                                                        <br>
                                                                      
                                                                       
                                                                   
                                                                         <?php $username= $correction[$i][0]->username ?>
                                                                         <h5 class="mt-0"> Usuario que realizo la corrección: {{$username}}</h5>
                                                                        <p>  

                                                                         

                                                        <div class="row">
                                                              <div class="col-lg-6">
                                                                    <h5 class="mt-0"> Campos:</h5>
                                                                    @foreach($campos_img as $campos)
                                                                     <input type="text" name=""  class="form-control" value="  {{$campos}}" >
                                                                    
                                                                   @endforeach  
                                                               </div> 
                                                                
                                                                 @if(!empty($correction_sear_img))
                                                                 <div class="col-lg-6">

                                                                    @foreach($correction_sear_img as $correction)
                                                                   
                                                                      
                                                                 @for($i=0; $i < $number_campos_img; $i++)
                                                                   
                                                                         <img src="{{ asset('images_guias/')}}/{{$correction[$i]->img}}" class="img-fluid" style="max-width: 600px;" alt="No ese encontro imagen" />
                                                                   
                                                                   @endfor
                                                                   @endforeach
                                                                    @endif
                                                                </div>
                                                        </div>
                                                     
                                                   </p><br>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light" data-dismiss="modal">Cerrar ventana</button>
                                                       
                                                    </div>

                                                </div>
                                            </div><
                                        </div>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#full-width-modal">Detalles  </button>
                                                           
                                                      </td>

@include('layouts.head')
@include('layouts.nav')

 <body >
 	           <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right" onmousedown='return false;' onselectstart="return false;">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tablero</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Personas</a></li>
                                            <li class="breadcrumb-item active">Buscar correccion</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title" onmousedown='return false;' onselectstart="return false;">Buscar correccion de la guia</h4>
                                </div>
                            </div>
                        </div>   
						 	 <!-- Inline Form -->
                         <div class="row">
                            <div class="col-md-12 center">
                                <div class="card">
                                    <div class="card-body">
                                        <div onmousedown='return false;' onselectstart="return false;">
                                            <h4 class="header-title">Ingresa los datos para la busqueda</h4>

                                        <p class="text-muted mb-3">
                                        </p>
                                      <h6 class="font-13 mt-3">Datos de la correccion</h6>
                                        </div>
                                        
                                 
								 		{{ Form::open(['url' => 'corrections/show/'.$id.'/','method'=> 'GET', 'class' => '']) }}
								 		<div class="form-row align-items-center">

									 		<div class="col-auto">
									 	    	{{Form::text('text', null, ['class'=> 'form-control mb-2', 'placeholder' => 'Texto de la corrección'])}}
									 	   </div>

                                          
            									 	    <div class="col-auto">
                                      <button type="submit" class="btn btn-primary mb-2">Buscar</button>
                                  </div>
								 	     </div>
								 	</div>
								 	  {{ Form::close()}}
                                      <div class="col-lg-2">   
                                        <a href="{{ url('corrections/create') }}/{{$id}}" target="_blank" class="btn btn-primary">Agregar corrección</a>
                                      </div>
                                     
                                     
                                      
							<div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive-sm">
                                            <table class="table table-striped table-centered mb-0" onmousedown='return false;' onselectstart="return false;">
                                                <thead>
                                                    <tr>
                                                        @foreach($names_campo as $campos)
                                                        <th>{{$campos}}</th>            
                                                        @endforeach
                                                        
                                                         <th>Acción<th>  

                                                    </tr>
                                                </thead>
                                                   
                                                <tbody>
                                                    @if(!empty($correction_search2))
                                                    
                                                     <tr>
                                                         @foreach($correction_search2 as $correction)
                                                   
                                                    <?php $i=0;?>
                                                    @if($correction[$i]->text != '0')
                                                      <td><input type="text" name="" readonly="readonly" class="form-control" value="{{$correction[$i]->text}}" id="listen_{{$correction[$i]->id}}">  
                                                      <button type="button" id="copyClip" data-clipboard-target="#listen_{{$correction[$i]->id}}" class="btn btn-primary"><i class=" mdi mdi-content-copy"></i></button>
                                                      </td> 
                                                      @else
                                                        @endif
                                                       <?php $i++;?>
                                                     
                                                      @endforeach
                                                    @endif
                                                      
                                                  <td>
                                                   @if($number_campos_img > '0')
                                                   <button class="btn btn-success" " data-toggle="modal" data-target="#img-width-modal"> Ver ímagenes de la corrección</button> 

                                                   @endif
                                                    @if(!empty($correction_search2))
                                                           
                                                                        <!-- Primary Header Modal -->
                                                                        
                                                              <div id="full-width-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="primary-header-modalLabel" aria-hidden="true">
                                                             <div class="modal-dialog modal-full-width">
                                                                  <div class="modal-content">
                                                                    <div class="modal-header modal-colored-header bg-primary">
                                                                    <h4 class="modal-title" id="primary-header-modalLabel">{{$guia->name}}</h4>
                                                                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                      </div>
                                                                      <div class="modal-body">
                                                                        <h5 class="mt-0">Fecha</h5>
                                                                        <p>Guia creada :{{$guia->created_at}}</p><br>
                                                                        <h5 class="mt-0">Detalle de la corrección:</h5>
                                                                        <br>
                                                                        @foreach($correction_search2 as $correction)
                                                                        <?php $i=0;?>
                                                                         <?php $username= $correction[$i]->username ?>
                                                                         <h5 class="mt-0"> Usuario que realizo la corrección: {{$username}}</h5>
                                                                        <p>  
                                                                          <?php $i++;?>
                                                                          @endforeach
                                                        <div class="row">
                                                            
                                                              <div class="col-lg-6">
                                                                    <h5 class="mt-0"> Campos:</h5>
                                                                    @foreach($names_campo as $campos)
                                                                     <input type="text" name=""  class="form-control" value="  {{$campos}}" >
                                                                    
                                                                   @endforeach  
                                                               </div> 
                                                                
                                                                 @if(!empty($correction_search2))
                                                                 <div class="col-lg-6">

                                                                @foreach($correction_search2 as $correction)
                                                                   <?php $i=0;?>
                                                                   @if($correction[$i]->text != '0')
                                                             
                                                                <div class="col-lg-4">
                                                                     <input type="text" name="" readonly="readonly" class="form-control" value="{{$correction[$i]->text}}"  id="list_{{$correction[$i]->id}}"> 
                                                               </div>
                                                                 <div class="col-lg-2">
                                                                     <button type="button" id="copyClip"  data-clipboard-target="#list_{{$correction[$i]->id}}" class="btn btn-primary"><i class=" mdi mdi-content-copy"></i></button>
                                                                </div>
                                                                @endif
                                                                  <?php $i++;?>
                                                     
                                                               @endforeach
                                                                @endif
                                                                </div>
                                                        </div>
                                                     
                                                   </p><br>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light" data-dismiss="modal">Cerrar ventana</button>
                                                       
                                                    </div>

                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->
                                           <!-- Primary Header Modal -->
                                            <div id="img-width-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="success-header-modalLabel" aria-hidden="true">
                                                     <div class="modal-dialog modal-full-width">
                                                         <div class="modal-content">
                                                             <div class="modal-header modal-colored-header bg-success">
                                                                    <h4 class="modal-title" id="primary-header-modalLabel">{{$guia->name}}</h4>
                                                                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                      </div>
                                                                      <div class="modal-body">
                                                                        <h5 class="mt-0">Fecha</h5>
                                                                        <p>Guia creada :{{$guia->created_at}}</p><br>
                                                                        <h5 class="mt-0">Detalle de la corrección:</h5>
                                                                        <br>
                                                                         @foreach($correction_search2 as $correction)
                                                                        <?php $i=0;?>
                                                                         <?php $username= $correction[$i]->username ?>
                                                                         <h5 class="mt-0"> Usuario que realizo la corrección: {{$username}}</h5>
                                                                        <p>  
                                                                          <?php $i++;?>
                                                                          @endforeach

                                                        <div class="row">
                                                              <div class="col-lg-6">
                                                                    <h5 class="mt-0"> Campos:</h5>
                                                                    @foreach($campos_img as $campos)
                                                                     <input type="text" name=""  class="form-control" value="  {{$campos}}" >
                                                                    
                                                                   @endforeach  
                                                               </div> 
                                                                
                                                                 @if(!empty($correction_sear_img))
                                                                 <div class="col-lg-6">

                                                                    @foreach($correction_sear_img as $correction)
                                                                   
                                                                      
                                                                 @for($i=0; $i < $number_campos_img; $i++)
                                                                   
                                                                         <img src="{{ asset('images_guias/')}}/{{$correction[$i]->img}}" class="img-fluid" style="max-width: 600px;" alt="No ese encontro imagen" />
                                                                   
                                                                   @endfor
                                                                   @endforeach
                                                                    @endif
                                                                </div>
                                                        </div>
                                                     
                                                   </p><br>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light" data-dismiss="modal">Cerrar ventana</button>
                                                       
                                                    </div>

                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#full-width-modal">Detalles  </button>
                                                           @endif
                                                      </td>
                                                     </tr>
                                                       

                                                </tbody>        
                                              </table>   

                                        </div> <!-- end table-responsive-->

                                    </div> <!-- end card body-->
                                    @if(($rol=='admin')||($rol=='foun')||($rol=='editor'))
                                      <div class="col-lg-2">   
                                         <a href="/corrections/multi/{{$id}}" class="btn btn-success" title="Descargar multi ">   <i class="mdi mdi-download ml-1"></i>Descargar multi</a>
                                      </div>
                                      @endif
                                </div> <!-- end card -->
                            </div><!-- end col-->
                                  
                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                            </div> <!-- end col -->
                        </div>
				 
 	    
 	 			   
 </body>

@include('layouts.footer')
@if(!empty($error))

        <div class="rightbar-overlay"></div>
  <script src="{{ asset('js/sweetalert/sweetalert2.js') }}"></script>
    <script src="{{ asset('js/sweetalert/sweetalert2.all.js') }}"></script>
<script>

  Swal.fire({
  type: 'error',
  title: 'Oops...',
  text: 'El multi no tiene suficientes correcciones para descargar el archivo!',
  footer: '<a href>Quieres ingresar una corrección?</a>'
})
</script>
@endif



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
         $guias= Guias::where('level','!=','0')->where('level','!=','vpn0')->where('level','!=','vpn')->orderBy("id", "DESC")->paginate(4);

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


         $guias= Guias::where('level','!=','0')->where('level','!=','vpn')->where('level','!=','vpn0')->orderBy("id", "DESC")
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
          ->text($text)
       

        ->paginate(4);
                                                                                          
        }
        if(!empty( $correction_user)){

    return view('corrections/corrections_user/correc',compact('correction_user'),['rol'=>$rol, 'id'=>$id,'number_guia'=>$number_guia,'names_campo'=>$names_campo, 'campos_img'=>$campos_img,'number_campos_img'=>  '0']);
  }else{
    $correction_user = array('' );
     return view('corrections/corrections_user/correc',['correction_user'=>$correction_user,'rol'=>$rol, 'id'=>$id,'number_guia'=>$number_guia,'names_campo'=>$names_campo, 'campos_img'=>$campos_img,'number_campos_img'=>  '0']);
  }

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
                  $count_d=count($correction_search_text2);
                  foreach ( $correction_search_text2 as $image) {
                      for ($i=0; $i < $count_d ; $i++) { 
                       $id_corrections[]=$correction_search_text2[$i][0]->id_corrections;
                       
                        $otros_text[]= Correction_user::join('corrections', 'corrections.id', '=', 'correction_users.id_corrections')->join('users','users.id','=','corrections.id_users')->where("id_corrections", $id_corrections[$i])
                        ->select('text','name_campo','username','correction_users.id as id')->text($text)->get();
                        
                      }
                  }

                   // dd($otros_text);
                 //   $id_co= array_unique($id_corrections);
                    $count_id=count($id_corrections);
                    for ($i=0; $i < $count_id; $i++) { 
                       $otros_img_d[]= Correction_user::where("id_corrections", $id_corrections[$i])->where('img','!=','0')->select('img','name_campo','id')->get();
                    }
        
                }else{
                 return redirect("corrections/correc_user/".$id_guia);
                }   
        return  view('corrections/corrections_user/correc',['rol'=>$rol,'names_campo'=>$names_campo,'campos_img'=> $campos_img,'number_guia'=>$number_guia,'id'=>$id_guia, 'correction_search2'=>$otros_text, 'correction_sear_img'=>  $otros_img_d, 'number_campos_img'=> $number_campos_img,'guia'=>$guia]);
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
         $guias= Guias::where('level','!=','0')->where('level','!=','vpn0')->where('level','!=','vpn')->orderBy("id", "DESC")->paginate(4);

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


         $guias= Guias::where('level','!=','0')->where('level','!=','vpn')->where('level','!=','vpn0')->orderBy("id", "DESC")
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
        if(!empty( $correction_user)){

    return view('corrections/corrections_user/correc',compact('correction_user'),['rol'=>$rol, 'id'=>$id,'number_guia'=>$number_guia,'names_campo'=>$names_campo, 'campos_img'=>$campos_img,'number_campos_img'=>  '0']);
  }else{
    $correction_user = array('' );
     return view('corrections/corrections_user/correc',['correction_user'=>$correction_user,'rol'=>$rol, 'id'=>$id,'number_guia'=>$number_guia,'names_campo'=>$names_campo, 'campos_img'=>$campos_img,'number_campos_img'=>  '0']);
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
                
                  foreach ($co_def_text as $image) {
                      for ($i=0; $i < $count_d; $i++)
                      { 
                         $corrections=$co_def_text;
                         $count_c=count($corrections);
                       for ($y=0; $y <  $count_c; $y++) {

                         $correc=$corrections[$y];

                          $count=count($correc);
                          for ($i=0; $i < $count; $i++) { 
                           $id[]=$correc[$i]->id;
                          }
                         }
                        
                      }
                  }    
                    $id_d=array_unique($id);


                      foreach ($id_d as $id) 
                      {
                        $otros_text[]= Correction_user::join('corrections', 'corrections.id', '=', 'correction_users.id_corrections')->join('users','users.id','=','corrections.id_users')->join('people','people.id','=','users.people_id')->where("correction_users.id", $id)
                       ->select('text','name','surname','name_campo','username','id_corrections','correction_users.id as id')->get();

                      }
                     $count_otro=count($otros_text);
                      /*
                      
                      for ($i=0; $i < $count_otro; $i++) { 
                        if($i>8){
                          $otross[]=$otros_text[$i];
                          $id=$otros_text[$i][0]->id;
                        }
                        $otro=$otros_text[$i];
                      }*/
                    
                     $otros_text2=array_chunk($otros_text, $number_guia);
            //    dd($otros_text);
                   
                      $co_def_text= array_unique($correction_search_text2);
                      $count_d=count($correction_search_text2);
                      $otros_text_p[]= Correction_user::join('corrections', 'corrections.id', '=', 'correction_users.id_corrections')->join('users','users.id','=','corrections.id_users')->join('people','people.id','=','users.people_id')->where("id_corrections", $co_def_text[0][0]->id_corrections)->select('text','name','surname','name_campo','username','id_corrections','correction_users.id as id')->get();
                     
                       if($count_otro<$number_guia) {    

                               $otros_text3= $otros_text_p;
                               $count_o=count($otros_text3); 
                               $otros_text2=NULL;

                                   foreach ($otros_text3 as $user) {
 
                                    for ($i=0; $i < 1; $i++) { 
                                     $username[]= $user[$i][0]->name." ".$user[$i][0]->surname;
                                    }
                                  }
                                
                                 $user=array_unique($username);
                               
                                 for ($i=0; $i < 1; $i++) { 
                                   $usero[]=$user[$i];
                                 }
                               
                       }else{
                               $otros_text2=$otros_text;
                               $count_o=count($otros_text2); 
                               $otros_text3=NULL;
                     
                                   foreach ($otros_text2 as $user) {

                                    for ($i=0; $i < 1; $i++) { 
                                     $username[]= $user[$i]->name." ".$user[$i]->surname;
                                    }
                                  }
                                
                                 $user=array_unique($username);
                               
                                 for ($i=0; $i < 1; $i++) { 
                                   $usero[]=$user[$i];
                                 }
                               
                       } 
                        
                   
                     foreach ($id_d as $id)
                      {
                       $otros_img_d[]=Correction_user::join('corrections', 'corrections.id', '=', 'correction_users.id_corrections')->join('users','users.id','=','corrections.id_users')->where("correction_users.id", $id)->where('correction_users.img','!=','0')->select('img','name_campo')->get();
                      }
                   
        
                }else{
               return redirect("corrections/correc_user/".$id_guia);
                 }

        return  view('corrections/corrections_user/correc',['count_o'=>$count_o,'user'=>$user,'rol'=>$rol,'names_campo'=>$names_campo,'campos_img'=> $campos_img,'number_guia'=>$number_guia,'id'=>$id_guia, 'correction_search2'=>$otros_text2,'correction_search3'=>$otros_text3, 'correction_sear_img'=>  $otros_img_d, 'number_campos_img'=> $number_campos_img,'guia'=>$guia]);
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
 