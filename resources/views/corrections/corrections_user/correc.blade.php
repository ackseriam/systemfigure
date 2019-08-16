<!DOCTYPE html>
<html lang="">

    <head>
        <meta charset="utf-8" />
        <title>Figure Eight Task</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <!-- App favicon -->
      <!--  <link rel="shortcut icon" href="{{ asset('images/faviicon.ico') }}">-->

        <link  rel="shortcut icon" href="{{ asset('faviicon.ico') }}">

        <!-- third party css -->
        <link href="{{ asset('css/vendor/jquery-jvectormap-1.2.2.css') }} " rel="stylesheet" type="text/css" />
      <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- third party css end -->
    <!-- Scripts -->
  <!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

<script src="{{asset('js/app.js')}}"></script>
        <!-- App css -->
        <link href="{{ asset('css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/app.min.css') }}" rel="stylesheet" type="text/css" />

           <!-- Plugins css-->
        <link href="{{ asset('css/vendor/bootstrap-tagsinput.css') }}" rel="stylesheet" />
     <link href="{{ asset('css/vendor/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css') }}" rel="stylesheet" />

     @if(!empty($exito) || !empty($exito_register) || !empty($error_in))
       <link href="{{ asset('js/sweetalert/sweetalert2.css') }}" rel="stylesheet" />
     @endif

     

    </head>
    <style type="text/css">
        /* Bootstrap tagsinput */
.bootstrap-tagsinput {
  box-shadow: none;
  padding: 10px 16px 8px;
  width: 100%;
  line-height: 1;
  border: 1px solid  #464f5b;
  background-color: #464f5b;
   color: #e3eaef;
}

.bootstrap-tagsinput .label-info {
  background-color: #5d6dc3;
  color: #e3eaef;
  background: linear-gradient(to top, #5d6dc3, #3c86d8);
  display: inline-block;
  padding: 8px 16px;
  font-size: 16px;
  margin: 3px 1px;
  border-radius: 3px;


} 


table {
  border: 1px solid rgb(200, 200, 200);
  border-collapse: collapse;
  font-size: .9rem;
  width: 100%;
}

tr {
  text-align: center;
}



th {
 
  border: 1px solid rgb(160, 160, 160);
  color: rgb(255, 255, 255);
  padding: .8rem;
}

td {
  border: 1px solid rgb(160, 160, 160);
  padding: .8rem;
}



.table-container {
  margin: 0 0 1rem;
  overflow: auto;
  overflow-y: auto;
  width: 100%;
}


/*  Estilos para que las barras de desplazamiento horizontal se vean en los dispositivos IOS */

.table-container::-webkit-scrollbar {
  -webkit-appearance: none;
  width: 14px;
  height: 14px;
}

.table-container::-webkit-scrollbar-thumb {

  border-radius: 8px;
  border: 3px solid #fff;
}
  </style>


 <body class="enlarged" data-keep-enlarged="true">

  

        <!-- Begin page -->
        <div class="wrapper">
       
      @include('layouts.nav')

               <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->
     <!-- Start Content-->
                    <div class="container-fluid" >

                    
                        <!-- start page title -->
                        <div class="row" onmousedown='return false;' onselectstart="return false;">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right" onmousedown='return false;' onselectstart="return false;">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);" onmousedown='return false;' onselectstart="return false;">Tablero</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);" onmousedown='return false;' onselectstart="return false;">Corrección</a></li>
                                            <li class="breadcrumb-item active"onmousedown='return false;' onselectstart="return false;" >Buscar correccion</li>
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
                              <div class="row">
                                 <div class="col-lg-4"> 
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

                                       {{ Form::close()}}
                                 </div>
                                     <div class="col-lg-4"> 
                                              <div onmousedown='return false;' onselectstart="return false;">
                                                  <h4 class="header-title"  onmousedown='return false;' onselectstart="return false;">Nombre de la guia </h4>

                                              <p class="text-muted mb-3">
                                              </p>
                                            <h4 class="text text-info">{{$guia->name}}n</h4>
                                         
                                              </div>
                                       </div>
                                      <div class="col-lg-1" nmousedown='return false;' onselectstart="return false;"> 
                                              @if(($rol=='admin')||($rol=='foun'))
                                             <a href="/guias/edit/{{$guia->id}}" class="btn btn-info " title="Editar guia"><i class="mdi mdi-square-edit-outline"></i></a>
                                            @endif
                                      </div> 
                             </div>  <div onmousedown='return false;' onselectstart="return false;"><br ><br><br></div>
                               <div class="row" ><div class="col-lg-1" onmousedown='return false;' onselectstart="return false;"> </div>
                                      <div class="col-lg-4" onmousedown='return false;' onselectstart="return false;"> 
                                      <label onmousedown='return false;' onselectstart="return false;">Puede agregar otra corrección presionando el siguiente botón:</label> 
                                      <div class="form-row align-items-center"><br><br>
                                        <a href="{{ url('corrections/create') }}/{{$id}}" target="_blank" class="btn btn-primary">Agregar corrección</a>
                                      </div>
                                      </div>
                                       @if($level=='0')
                                            @if(($rol=='admin')||($rol=='foun')||($rol=='editor')||($rol=='editor0'))   
                                                 <div class="col-lg-3"> 
                                                   <label onmousedown='return false;' onselectstart="return false;">Tiempo de envio de la guia:</label> 
                                                     {{ Form::open(['url' => 'guias/time/'.$id.'/','method'=> 'GET', 'class' => '']) }}
                                                     <br>
                                                    <div class="form-row align-items-center" >

                                                          <div class="col-auto">
                                                              {{Form::text('tiempo_envio', null, ['class'=> 'form-control mb-2', 'placeholder' => 'Tiempo de envio'])}}
                                                           </div>

                                                                  
                                                            <div class="col-auto">
                                                              <button type="submit" class="btn btn-primary mb-2">Enviar</button>
                                                          </div>
                                                    </div>
                                               </div>
                                           @endif
                                            @else
                                             @if(($rol=='admin')||($rol=='foun')||($rol=='editor'))                                             
                                             <div class="col-lg-3"> 
                                                   <label onmousedown='return false;' onselectstart="return false;">Tiempo de envio de la guia:</label> 
                                                     {{ Form::open(['url' => 'guias/time/'.$id.'/','method'=> 'GET', 'class' => '']) }}
                                                     <br>
                                                    <div class="form-row align-items-center" >

                                                          <div class="col-auto">
                                                              {{Form::text('tiempo_envio', null, ['class'=> 'form-control mb-2', 'placeholder' => 'Tiempo de envio'])}}
                                                           </div>

                                                                  
                                                            <div class="col-auto">
                                                              <button type="submit" class="btn btn-primary mb-2">Enviar</button>
                                                          </div>
                                                    </div>
                                               </div>                                               
                                          @endif
                                           @endif
                                     {{ Form::close()}}
                                      <div class="col-lg-3">
                                          @if($level=='0')
                                             @if(($rol=='admin')||($rol=='foun')||($rol=='editor')||($rol=='editor0'))   
                                             <label onmousedown='return false;' onselectstart="return false;">Colocar el numero de la columna que desea copiar. O todas.(Seperarlo con comas)</label>
                                                 {{ Form::open(['url' => 'guias/copiado/'.$id.'/','method'=> 'GET', 'class' => '']) }}
                                          <div class="form-row align-items-center">
                                            <input type="hidden"  name="respues">

                                                <div class="col-auto">
                                                    {{Form::text('copiado', null, ['class'=> 'form-control mb-2', 'placeholder' => 'Escribir el numero de la columna'])}}
                                                 </div>

                                                        
                                                  <div class="col-auto">
                                                    <button type="submit" class="btn btn-primary mb-2">Enviar</button>
                                                </div>
                                          </div>
                                           {{ Form::close()}}  
                                             @endif
                                            @else
                                            @if($level!='0')
                                              @if(($rol=='admin')||($rol=='foun')||($rol=='editor')) 
                                                <label onmousedown='return false;' onselectstart="return false;">Colocar el numero de la columna que desea copiar. O todas.(Seperarlo con comas)</label>
                                                   {{ Form::open(['url' => 'guias/copiado/'.$id.'/','method'=> 'GET', 'class' => '']) }}
                                          <div class="form-row align-items-center">
                                            <input type="hidden"  name="respues">

                                                <div class="col-auto">
                                                    {{Form::text('copiado', null, ['class'=> 'form-control mb-2', 'placeholder' => 'Escribir el numero de la columna'])}}
                                                 </div>

                                                        
                                                  <div class="col-auto">
                                                    <button type="submit" class="btn btn-primary mb-2">Enviar</button>
                                                </div>
                                          </div>
                                           {{ Form::close()}}  
                                          @endif
                                                @endif         
                                       
                                          @endif
                                    </div>
                                 
                               </div>          
                                                                
                            
                           </div>
                         </div>      
                                     
                                                
                               <div class="col-xl-12">
                                          <div class="card">
                                              <div class="card-body">
                                                @if(!empty($time))
                                                <h3 class="text text-success">Tiempo de envio:  {{$time}}</h3>
                                                @endif
                                                <div class="row"  onmousedown='return false;' onselectstart="return false;">
                                                    <div class="col-lg-12">

                                                    <div class="dt-responsive">
                                                    <div class="table-container">
                                                      <table class="table table dt-responsive nowrap table-striped table-bordered table-centered mb-0" onmousedown='return false;' onselectstart="return false;">
                                                          <thead>
                                                              <tr> 
                                                                   <?php $names_campos=array_filter($names_campo); ?>
                                                                  @foreach($names_campos as $campos)
                                                                  <th>{{$campos}}</th>

                                                                  @endforeach
                                                                  @if($level=='0')
                                                                      @if(($rol=='admin')||($rol=='foun')||($rol=='editor')||($rol=='editor0'))   
                                                                          <th>Usuario</th>   
                                                                          <th>Acción</th>   
                                                                        @endif  
                                                                        @else
                                                                        @if(($rol=='admin')||($rol=='foun')||($rol=='editor'))
                                                                          <th>Usuario</th>  
                                                                         <th>Acción</th>   
                                                                        @endif
                                                                    @endif
                                                              </tr>
                                                          </thead>
                                                             
                                                          <tbody>
                                                              @if(!empty($correction_search2))
                                                                                                                                                                                                                                    
                                                                   @foreach($correction_search2 as $correction)
                                                                     <?php $i=0; ?>
                                                                     @if($i==1)
                                                                      <tr >
                                                                        @else
                                                                         <tr>
                                                                        @endif
                                                                       
                                                                         @for($y=0; $y< $number_guia; $y++)
                                                                         <?php  $respues='respues'.$y;?>
                                                                         @if(!empty($correction))     
                                                                          @if($correction->$respues==null)
                                                                             <td >
                                                                                <input type="hidden" name="" readonly="readonly" class="form-control" value="{{$correction->$respues}}" id="{{$correction->$respues}}"> {{$correction->$respues}}<br>
                                                                              
                                                                              </td>
                                                                          @else
                                                                             <?php $ex= explode(',', $copiar); ?>
                                                                              @if($ex[$y]=='1')

                                                                              @if (strpos($correction->$respues, '.jpg'))
                                                                                 <td>
                                                                              <button class="btn btn-success" " data-toggle="modal" data-target="#img-width-modal"> Ver ímagen</button> 

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
                                                                                              
                                                                                        <div class="row">
                                                                                              <div class="col-lg-6">
                                                                                                    <h5 class="mt-0"> Imagen:</h5>
                                                                                                  
                                                                                               </div> 
                                                                                                 <div class="col-lg-6">
                                                                                                         <img src="{{ asset('images_guias/')}}/{{$correction->$respues}}" class="img-fluid" style="max-width: 600px;" alt="No ese encontro imagen" />
             
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
                                                                              </td>
                                                                            @else
                                                                                <td style="height: auto;"><div class="scro">
                                                                                <input type="hidden" name="" readonly="readonly" class="form-control" value="{{$correction->$respues}}" id="{{$correction->$respues}}"> {{$correction->$respues}}</div><br>
                                                                           <button type="button" id="copyClip" data-clipboard-text="{{$correction->$respues}}" class="btn btn-primary"><i class=" mdi mdi-content-copy"></i></button>
                                                                              </td>

                                                                              @endif
                                                                              @else
                                                                               <td>
                                                                                 <input type="hidden" name="" readonly="readonly" class="form-control" value="{{$correction->$respues}}" id="{{$correction->$respues}}"> {{$correction->$respues}}<br>
                                                                         
                                                                              </td>
                                                                              @endif

                                                                         @endif
                                                                         @endif
                                                                         @endfor
                                                                         @if($level=='0')
                                                                          @if(($rol=='admin')||($rol=='foun')||($rol=='editor')||($rol=='editor0'))
                                                                          <td>Usuario:<p class="text-title"> 
                                                                            {{$correction->username}}</p>
                                                                        <div id="consul">
                                                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#full-width-modal"><i class="mdi mdi-file-search-outline "></i> </button>

                                                                        </div>

                                                                          
                                                                           <div id="full-width-modal" class="modal fade" tabindex="3" role="dialog" aria-labelledby="primary-header-modalLabel" aria-hidden="true">
                                                                             <div class="modal-dialog modal-full-width">
                                                                            <div class="modal-content">
                                                                              <div class="modal-header modal-colored-header bg-primary">
                                                                              <h4 class="modal-title" id="primary-header-modalLabel">{{$guia->name}}</h4>
                                                                               <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                  <h5 class="mt-0">Fecha</h5>
                                                                                  <p>Guia creada :{{$guia->created_at}}</p><br>
                                                                                
                                                                               
                                                                                  <br>
                                                                        </div>
                                                                          <div class="modal-footer">
                                                                              <button type="button" class="btn btn-light" data-dismiss="modal">Cerrar ventana</button>
                                                                             
                                                                          </div>

                                                                            </div><!-- /.modal-content -->
                                                                        </div><!-- /.modal-dialog -->
                                                                    </div><!-- /.modal -->
                                                                   </td> @endif
                                                                    @else  @if(($rol=='admin')||($rol=='foun')||($rol=='editor'))
                                                                      <td>Usuario:<p class="text-title"> {{$correction->username}}</p>
                                                                        <div id="consul">
                                                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#full-width-modal"><i class="mdi mdi-file-search-outline "></i> </button>

                                                                        </div>
                                                                           <div id="full-width-modal" class="modal fade" tabindex="3" role="dialog" aria-labelledby="primary-header-modalLabel" aria-hidden="true">
                                                                             <div class="modal-dialog modal-full-width">
                                                                            <div class="modal-content">
                                                                                      <div class="modal-header modal-colored-header bg-primary">
                                                                                             <h4 class="modal-title" id="primary-header-modalLabel">{{$guia->name}}</h4>
                                                                                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                                        </div>
                                                                                        <div class="modal-body">
                                                                                          <h5 class="mt-0">Fecha</h5>
                                                                                          <p>Guia creada :{{$guia->created_at}}</p><br>
                                                                                          <br>
                                                                                       </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-light" data-dismiss="modal">Cerrar ventana</button>
                                                                                </div>

                                                                              </div><!-- /.modal-content -->
                                                                          </div><!-- /.modal-dialog -->
                                                                      </div><!-- /.modal -->
                                                                   </td>  
                                                                    @endif
                                                                    @endif
                                                                     @if($level=='0')
                                                                        @if(($rol=='admin')||($rol=='foun')||($rol=='editor')||($rol=='editor0'))   
                                                                              <td> <a href="/corrections/editar/{{$correction->id}}" title="Editar Corrección"  class="btn btn-success" data-toggle="modal" target="_blank"><i class=" mdi mdi-square-edit-outline "></i> </a><a id="{{$correction->id}}" class="btn btn-danger"  title="Eliminar Corrección" data-toggle="modal" target="_blank"><i class="mdi mdi-delete "></i> </a></td>
                                                                                <script>
                                                                    $('#<?php echo $correction->id?>').click(function(e){
                                                                        e.preventDefault();
                                                                      

                                                                        Swal.fire({
                                                                          type: 'info',
                                                                          title: 'Eliminar guia!! ...',
                                                                          text: '¿Estas seguro de realizar estos cambios?. El resultado sera irreversible.',
                                                                          footer: 'Elimando guia',
                                                                           showCloseButton: true,
                                                                          showCancelButton: true,
                                                                          focusConfirm: false,
                                                                           confirmButtonText: 'Si, estoy seguro',
                                                                           cancelButtonText: 'Cancelar',

                                                                          
                                                                        }).then((result) => {
                                                                            if(result.value){
                                                                                window.location.href= '/corrections/destroy/{{$guia->id}}/{{$correction->id}}';
                                                                              //  document.formac.submit();
                                                                            } else {
                                                                                Swal.fire('Cancelado', 'Buena elección :)', 'error');
                                                                            }
                                                                        }); 
                                                                    });  
                                                                    </script>
                                                                  @endif

                                                                       @else
                                                                          @if(($rol=='admin')||($rol=='foun')||($rol=='editor'))
                                                                              <td> <a href="/corrections/editar/{{$correction->id}}" title="Editar Corrección"  class="btn btn-success" data-toggle="modal" target="_blank"><i class=" mdi mdi-square-edit-outline "></i> </a><a id="{{$correction->id}}" class="btn btn-danger"  title="Eliminar Corrección" data-toggle="modal" target="_blank"><i class="mdi mdi-delete "></i> </a></td>
                                                                                <script>
                                                                                $('#<?php echo $correction->id?>').click(function(e){
                                                                                    e.preventDefault();
                                                                                  

                                                                                    Swal.fire({
                                                                                      type: 'info',
                                                                                      title: 'Eliminar guia!! ...',
                                                                                      text: '¿Estas seguro de realizar estos cambios?. El resultado sera irreversible.',
                                                                                      footer: 'Elimando guia',
                                                                                       showCloseButton: true,
                                                                                      showCancelButton: true,
                                                                                      focusConfirm: false,
                                                                                       confirmButtonText: 'Si, estoy seguro',
                                                                                       cancelButtonText: 'Cancelar',

                                                                                      
                                                                                    }).then((result) => {
                                                                                        if(result.value){
                                                                                            window.location.href= '/corrections/destroy/{{$guia->id}}/{{$correction->id}}';
                                                                                          //  document.formac.submit();
                                                                                        } else {
                                                                                            Swal.fire('Cancelado', 'Buena elección :)', 'error');
                                                                                        }
                                                                                    }); 
                                                                                });

                                                                                    
                                                                                </script>

                                                                          @endif
                                                                    
                                                                 
                                                                
                                                                   @endif
                                                                      </tr>    
                                                                      <?php $i++;?>
                                                                   @endforeach
                                                              @endif

                                                          </tbody>        
                                                        </table> 
                                                        </div>
                                                         @if(!empty($yes))
                                                        
                                                         @else
                                                          {{$correction_search2->render()}} 
                                                         @endif
                                                  </div> <!-- end table-responsive-->
                                                </div>

                                                  
                                                </div>
                                              </div> <!-- end card body-->
                                              
                                               @if($level=='0')
                                               @if(($rol=='admin')||($rol=='foun')||($rol=='editor')||($rol=='editor0'))  
                                                    <div class="col-lg-2">   
                                                       <label>Ingresar columna para realizar multi</label>
                                                             {{ Form::open(['url' => '/guias/multi/'.$guia->id.'/','method'=> 'GET', 'class' => '']) }}
                                                       <input type="text" name="multi" placeholder="Columna a realizar el multi" class="form-control" required><br>
                                                       <button class="btn btn-success" type="submit">Descargar multi</button> 
                                                            {{ Form::close()}}
                                                    </div>
                                                @endif
                                                @else
                                                   @if(($rol=='admin')||($rol=='foun')||($rol=='editor'))
                                                           <div class="col-lg-2">   
                                                           <label>Ingresar columna para realizar multi</label>
                                                                 {{ Form::open(['url' => '/guias/multi/'.$guia->id.'/','method'=> 'GET', 'class' => '']) }}
                                                           <input type="text" name="multi" placeholder="Columna a realizar el multi" class="form-control" required><br>
                                                           <button class="btn btn-success" type="submit">Descargar multi</button> 
                                                                {{ Form::close()}}
                                                        </div>
                                                @endif
                                                @endif
                                          </div> <!-- end card -->
                                      </div><!-- end col-->
                                  
                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                            </div> <!-- end col -->
                        </div>
         
 
            
      </body>
    

        <script src="{{ asset('js/vendor/jquery.dataTables.js') }}"></script>
        <script src="{{ asset('js/vendor/dataTables.bootstrap4.js') }}"></script>
        <script src="{{ asset('js/vendor/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('js/vendor/responsive.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('js/vendor/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('js/vendor/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('js/vendor/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('js/vendor/buttons.flash.min.js') }}"></script>
        <script src="{{ asset('js/vendor/buttons.print.min.js') }}"></script>
        <script src="{{ asset('js/vendor/dataTables.keyTable.min.js') }}"></script>
        <script src="{{ asset('js/vendor/dataTables.select.min.js') }}"></script>

   

           <!-- Include this after the sweet alert js file -->
        <!-- demo app -->
    <!--    <script src="{{ asset('js/pages/demo.datatable-init.js') }}"></script>
-->

          <script type="text/javascript">
           
    $("#basic-datatable").DataTable({keys:!0,language:{paginate:{
        previous:"<i class='mdi mdi-chevron-left'>",
        next:"<i class='mdi mdi-chevron-right'>"}}
        ,drawCallback:function(){$(".dataTables_paginate > .pagination").addClass("pagination-rounded")}});

          </script>


      
 
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

</html>
