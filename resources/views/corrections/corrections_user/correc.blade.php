@include('layouts.head')
@include('layouts.nav')


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
                               
                               <div class="row"><div class="col-lg-1"> </div>
                                      <div class="col-lg-4"> 
                                      <label>Puede agregar otra corrección presionando el siguiente botón:</label> 
                                      <div class="form-row align-items-center">
                                        <a href="{{ url('corrections/create') }}/{{$id}}" target="_blank" class="btn btn-primary">Agregar corrección</a>
                                      </div>
                                      </div>
                                       <div class="col-lg-3"> 
                                         <label>Tiempo de envio de la guia:</label> 
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
                                     {{ Form::close()}}
                                      <div class="col-lg-3">
                                             @if(($rol=='admin')||($rol=='foun')||($rol=='editor')||($rol=='editor0'))   
                                             <label>Colocar el numero de la columna que desea copiar. O todas.(Seperarlo con comas)</label>

                                                         
                                          {{ Form::open(['url' => 'guias/copiado/'.$id.'/','method'=> 'GET', 'class' => '']) }}
                                          <div class="form-row align-items-center">

                                                <div class="col-auto">
                                                    {{Form::text('copiado', null, ['class'=> 'form-control mb-2', 'placeholder' => 'Escribir el numero de la columna'])}}
                                                 </div>

                                                        
                                                  <div class="col-auto">
                                                    <button type="submit" class="btn btn-primary mb-2">Enviar</button>
                                                </div>
                                          </div>
                                           {{ Form::close()}}  
                                          @endif
                                    </div>
                                 
                               </div>          
                                                                
                         </div>       
                                     
                                                
                               <div class="col-xl-12">
                                          <div class="card">
                                              <div class="card-body">
                                                @if(!empty($time))
                                                <h3 class="text text-success">Tiempo de envio:  {{$time}}</h3>
                                                @endif
                                                <div class="row">
                                                    <div class="col-lg-10">

                                                    <div class="table dt-responsive nowrap">
                                                      <table class="table table-striped table-bordered table-centered mb-0" onmousedown='return false;' onselectstart="return false;">
                                                          <thead>
                                                              <tr>
                                                                  @foreach($names_campo as $campos)
                                                                  <th>{{$campos}}</th>

                                                                  @endforeach
                                                              <th>Acción</th>     
                                                              </tr>
                                                          </thead>
                                                             
                                                          <tbody>
                                                              @if(!empty($correction_search2))
                                                                                                                                                                                                                                    
                                                                   @foreach($correction_search2 as $correction)
                                                                     <?php $i=0; ?>
                                                                      <tr>
                                                                         @for($y=0; $y< 9; $y++)
                                                                         <?php  $respues='respues'.$y;?>
                                                                          @if($correction->$respues!=null)
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
                                                                                <td>
                                                                                <input type="text" name="" readonly="readonly" class="form-control" value="{{$correction->$respues}}" id="listen_{{$correction->$respues}}">  
                                                                           <button type="button" id="copyClip" data-clipboard-target="#listen_{{$correction->$respues}}" class="btn btn-primary"><i class=" mdi mdi-content-copy"></i></button>
                                                                              </td>

                                                                              @endif
                                                                              @else
                                                                               <td>
                                                                                <input type="text" name="" readonly="readonly" class="form-control" value="{{$correction->$respues}}">  
                                                                         
                                                                              </td>
                                                                              @endif

                                                                         @endif
                                                                         @endfor
                                                                         
                                                                          <td>Responsable de la corrección: <p class="text-title"> {{$correction->username}}</p>
                                                                        <div id="consul">
                                                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#full-width-modal">Ver mas detalles  </button>

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
                                                                   @if(($rol=='admin')||($rol=='foun')||($rol=='editor')||($rol=='editor0'))
                                                                   <td> Editar corrección:<br><a href="/corrections/editar/{{$correction->id}}" class="btn btn-success" data-toggle="modal" target="_blank">Editar  </a></td><td>Eliminar corrección:<br><a href="/corrections/destroy/{{$correction->id}}" class="btn btn-danger" data-toggle="modal" target="_blank">Delete </a></td>@endif
                                                                      </tr>    
                                                                      <?php $i++;?>
                                                                   @endforeach
                                                              @endif

                                                          </tbody>        
                                                        </table>  
                                                         @if(!empty($correction_search2))
                                                         {{$correction_search2->render()}} 
                                                         @endif
                                                  </div> <!-- end table-responsive-->
                                                </div>

                                                  
                                                </div>
                                              </div> <!-- end card body-->
                                              
                                              @if(($rol=='admin')||($rol=='foun')||($rol=='editor'))
                                                <div class="col-lg-2">   
                                                   <label>Ingresar columna para realizar multi</label>
                                                         {{ Form::open(['url' => '/guias/multi/'.$guia->id.'/','method'=> 'GET', 'class' => '']) }}
                                                   <input type="text" name="multi" placeholder="Columna a realizar el multi" class="form-control" required><br>
                                                   <button class="btn btn-success" type="submit">Descargar multi</button> 
                                                        {{ Form::close()}}
                                                </div>
                                                @endif
                                          </div> <!-- end card -->
                                      </div><!-- end col-->
                                  
                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                            </div> <!-- end col -->
                        </div>
         
 
            
           
 
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