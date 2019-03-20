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
                                            <li class="breadcrumb-item active">Buscar persona</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Buscar Persona</h4>
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
                            		  <h6 class="font-13 mt-3">Datos de la persona</h6>
                                 
								 		{{ Form::open(['route'=> 'searchperson', 'method'=> 'GET', 'class' => '']) }}
								 		<div class="form-row align-items-center">

									 		<div class="col-auto">
									 	    	{{Form::text('name', null, ['class'=> 'form-control mb-2', 'placeholder' => 'Nombre de la persona'])}}
									 	   </div>
                                           <div class="col-auto">
                                                {{Form::text('surname', null, ['class'=> 'form-control mb-2', 'placeholder' => 'Apellido de la persona'])}}
                                           </div>
									 	      <div class="col-auto">
									 	    	{{Form::text('address', null, ['class'=> 'form-control mb-2', 'placeholder' => 'Direccion'])}}
									 	    </div>
                                            <div class="col-auto">
                                                {{Form::text('ci', null, ['class'=> 'form-control mb-2', 'placeholder' => 'Cedula'])}}
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
                                            <table class="table table-striped table-centered mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Cedula</th>
                                                        <th>Nombre</th>
                                                        <th>Apellido</th>
                                                        <th>Nacionalidad</th>
                                                        <th>Direccion</th>
                                                        <th>Accion</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                	@foreach($people as $person)
                                                    <tr>
                                                        <td class="table-user">
                                                            {{$person->ci}}
                                                        </td>
                                                        <td>{{$person->name}}</td>
                                                        <td>{{$person->surname}}</td>
                                                        <td>{{$person->nacionality}}</td>
                                                        <td>{{$person->address}}</td>
                                                        <td class="table-action">
                                                            <a href="/people/edit/{{$person->id}}" class="action-icon" title="Editar"> <i class="mdi mdi-pencil"></i></a>
                                                            <a href="/people/{{$person->id}}" class="action-icon" title="Buscar"> <i class="mdi mdi-account-search-outline"></i></a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            {{$people->render()}}
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
