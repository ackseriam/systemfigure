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
                                                    @if($correction->text != '0')
                                          
                                                      <td><input type="text" name="" readonly="readonly" class="form-control" value="{{$correction->text}}" id="listen_{{$correction->id}}">  
                                                      <button type="button" id="copyClip" data-clipboard-target="#listen_{{$correction->id}}" class="btn btn-primary"><i class=" mdi mdi-content-copy"></i></button>
                                                      </td> 
                                                      @else

                                                      
                                                      @endif
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
                                                                         <?php $username= $correction_search2[0]->username ?>
                                                                         <h5 class="mt-0"> Usuario que realizo la corrección: {{$username}}</h5>
                                                                        <p>  

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
                                                                  @if($correction->text != '0')
                                                             
                                                                <div class="col-lg-4">
                                                                     <input type="text" name="" readonly="readonly" class="form-control" value="{{$correction->text}}"  id="list_{{$correction->id}}"> 
                                                               </div>
                                                                 <div class="col-lg-2">
                                                                     <button type="button" id="copyClip"  data-clipboard-target="#list_{{$correction->id}}" class="btn btn-primary"><i class=" mdi mdi-content-copy"></i></button>
                                                                </div>
                                                                @endif
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
                                                                         <?php $username= $correction_search2[0]->username ?>
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
                                </div> <!-- end card -->
                            </div><!-- end col-->
                                   
                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                            </div> <!-- end col -->
                        </div>
				 
 	    
 	 			   
 </body>

@include('layouts.footer')
