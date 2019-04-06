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
                                            <li class="breadcrumb-item active">Buscar correciones</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Buscar guia para enviar Corrección</h4>
                                </div>
                            </div>
                        </div>   
						 	 <!-- Inline Form -->
                         <div class="row">
                            <div class="col-md-12 center">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="header-title">Ingresa los datos de la guia para enviar la correccion</h4>
                                         <p class="text-muted mb-4">Buscar los datos de la guia para </p>

                                        <p class="text-muted mb-3">
                                        </p>
                            		  <h6 class="font-13 mt-3">Datos de la guia </h6>
                                        @if($level==0)
								 		{{ Form::open(['url'=> 'corrections/search/0', 'method'=> 'GET', 'class' => '']) }}
                                        @else
                                        {{ Form::open(['url'=> 'corrections/search/1', 'method'=> 'GET', 'class' => '']) }}
                                        @endif
								 		<div class="form-row align-items-center">

									 		<div class="col-auto">
									 	    	{{Form::text('name', null, ['class'=> 'form-control mb-2', 'placeholder' => 'Nombre de la guia'])}}
									 	   </div>
                                           <div class="col-auto">
                                               
                                           </div>
									 	      <div class="col-auto">
									 	    	{{Form::text('status', null, ['class'=> 'form-control mb-2', 'placeholder' => 'status'])}}
									 	    </div>
                                            <div class="col-auto">
                                                {{Form::text('level', null, ['class'=> 'form-control mb-2', 'placeholder' => 'level'])}}
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
                                                        <th>Nombre</th>
                                                        <th>Imagen</th>
                                                        <th>Estado</th>
                                                        <th>Level</th>
                                                        <th>Accion</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                	@foreach($guias as $guia)
                                                    <tr readonly>
                                                        <td>{{$guia->name}}</td>
                                                        <td><a href="javascript: void(0);" class="text-center d-block mb-4">
                                                        <img src="{{ asset('images_guias/')}}/{{$guia->img}}" class="img-fluid" style="max-width: 280px;" alt="No ese encontro imagen" /></a></td>
                                                         <td>{{$guia->status}}</td>
                                                        <td>{{$guia->level}}</td>
                                                        
                                                        @if(!empty($correccion_user))
                                                        <td class="table-action">
                                                            <a href="/corrections/show/{{$guia->id}}" class="action-icon" title="Ver correcciones" class=""> <i class="mdi mdi-account-search-outline btn btn-primary "></i></a>
                                                        </td>@else

                                                        <td class="table-action">
                                                            <a href="/corrections/create/{{$guia->id}}" class="action-icon" title="Enviar corrección" class=""> <i class="mdi mdi-plus btn btn-primary "></i></a>
                                                        </td>
                                                        @endif
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            {{$guias->render()}}
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
