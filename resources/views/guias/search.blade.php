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
                                            <li class="breadcrumb-item active">Buscar guia</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Buscar Guia</h4>
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
                            		  <h6 class="font-13 mt-3">Datos de la guia</h6>
                                 
								 		{{ Form::open(['route'=> 'search_guias', 'method'=> 'GET', 'class' => '']) }}
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
                                                        <td>{{$guia->img}}</td>
                                                         <td>{{$guia->status}}</td>
                                                        <td>{{$guia->level}}</td>
                                                        <td class="table-action">
                                                            <a href="/guias/edit/{{$guia->id}}" class="action-icon" title="Editar"> <i class="mdi mdi-pencil"></i></a>
                                                            <a href="/guias/{{$guia->id}}" class="action-icon" title="Buscar"> <i class="mdi mdi-account-search-outline"></i></a>
                                                        </td>
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
