@include('layouts.head')
@include('layouts.nav')
 <body>
 	           <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tablero</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Personas</a></li>
                                            <li class="breadcrumb-item active">Buscar correccion</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Buscar correccion de la guia</h4>
                                </div>
                            </div>
                        </div>   
						 	 <!-- Inline Form -->
                         <div class="row">
                            <div class="col-md-12 center">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="header-title">Ingresa los datos para la busqueda</h4>

                                        <p class="text-muted mb-3">
                                        </p>
                            		  <h6 class="font-13 mt-3">Datos de la correccion</h6>
                                 
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
								 	    <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">

                          
                                        <div class="table-responsive-sm">
                                            <table class="table table-striped table-centered mb-0" readonly>
                                                <thead>
                                                    <tr>
                                                        @foreach($names_campo as $campos)
                                                        <th>{{$campos}}</th>                                                        
                                                        @endforeach
                                                        <th>Accion</th>
                                                    </tr>
                                                </thead>
                                               
                                                      @if(!empty($correction_search2))
                                                  @foreach($correction_search2 as $correction)
                                                <tbody>

                                              
                                                    <tr>
                                                     @for($i=0; $i< $number_guia; $i++)
                                                        <td>{{$correction[$i]->text}}</td>
                                                    
                                                         @endfor
                                                        <td><a href="/corrections/correc_user/{{$id}}" class="action-icon" title="Ver corrección" class=""> <i class="mdi mdi-account-search-outline btn btn-primary "></i></a></td>
                                                   </tr>
                                                </tbody>
                                                 @endforeach
                                                    @else
                                                 <tr>
                                                    
                                                    @endif
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
