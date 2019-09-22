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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Usuarios</a></li>
                                            <li class="breadcrumb-item active">Buscar Usuario</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Buscar Usuario</h4>
                                </div>
                            </div>
                        </div>   
						 	 <!-- Inline Form -->
                         <div class="row">
                            <div class="col-md-12 center">
                                <div class="card">
                                    <div class="card-body">
                                        @if($tabla=='inactivo')
                                        <h4 class="header-title">Tabla usuarios inactivos en el sistema </h4>
                                        <p class="text-muted font-14 mb-4">
                                            En esta seccion estan listados todos los usuarios inactivos en el sistema 
                                        </p>
                                        @elseif($tabla=='bloqueado')
                                         <h4 class="header-title">Tabla usuarios bloqueados en el sistema </h4>
                                        <p class="text-muted font-14 mb-4">
                                            En esta seccion estan listados todos los usuarios bloqueados en el sistema 
                                        </p>
                                        @else
                                         <h4 class="header-title">Tabla de usuarios registrados en el sistema </h4>
                                        <p class="text-muted font-14 mb-4">
                                            En esta seccion estan listados todos los usuarios registrados en el sistema 
                                        </p>
                                        @endif
                                        <p class="text-muted mb-3">
                                        </p>
                            		  <h6 class="font-13 mt-3">Datos de usuario</h6>
                                 
								 		{{ Form::open(['route'=> 'search', 'method'=> 'GET', 'class' => '']) }}
								 		<div class="form-row align-items-center">

									 		<div class="col-auto">
									 	    	{{Form::text('username', null, ['class'=> 'form-control mb-2', 'placeholder' => 'Nombre de usuario'])}}
									 	   </div>
									 	    <div class="col-auto">
									 	    	{{Form::text('email', null, ['class'=> 'form-control mb-2', 'placeholder' => 'Correo electronico'])}}
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
                                                        <th>Nombre de Usuario</th>
                                                        <th>Email</th>
                                                        <th>Estado del usuario</th>
                                                        <th>Accion</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                	@foreach($users as $user)
                                                    <tr>
                                                        <td class="table-user">
                                                            <img src="assets/images/users/avatar-2.jpg" alt="table-user" class="mr-2 rounded-circle" />
                                                            {{$user->username}}
                                                        </td>
                                                        <td>{{$user->email}}</td>
                                                        @if($user->state=="inactivo")
                                                    <td class="mt-12"><h3><span class="badge badge-primary-lighten">{{$user->state}}</span></h3></td>
                                                    @elseif($user->state=="bloqueado")
                                                    <td class="mt-12"><h3><span class="badge badge-danger-lighten">{{$user->state}}</span></h3></td>
                                                    @elseif($user->state=="activo")
                                                    <td class="mt-8"><h3><span class="badge badge-success-lighten">{{$user->state}}</span></h3></td>
                                                    @endif
                                                        <td class="table-action">

                                                            @if(!empty($editar))
                                                            <a href="/users/edit/{{$user->id}}" class="btn btn-success" title="Editar Usuario"><i class="mdi mdi-square-edit-outline"></i></a>
                                                            @endif
                                                              @if(!empty($editar_usuario))
                                                            <a href="/users/edit_info/{{$user->id}}" class="btn btn-success" title="Editar Usuario"><i class="mdi mdi-square-edit-outline"></i></a>
                                                            @endif
                                                        </td>
                                                         <th> <a href="/users/{{$user->id}}" class="btn btn-primary" title="Ver usuario"> <i class="mdi mdi-account-search-outline"></i></a> 
                                                           
                                                           </th>
                                                           <th> <!--
                                                            <a href="/users/destroy/{{$user->id}}" title="Eliminar Usuario"  class="btn btn-danger" data-toggle="modal" target="_blank"><i class=" mdi mdi-square-edit-outline "></i> </a>-->

                                                            <a id="{{$user->id}}" class="btn btn-danger"  title="Eliminar Usuario" data-toggle="modal" target="_blank"><i class="mdi mdi-delete "></i> </a>
                                                              <script>
                                                                    $('#<?php echo $user->id?>').click(function(e){
                                                                        e.preventDefault();
                                                                      

                                                                        Swal.fire({
                                                                          type: 'info',
                                                                          title: 'Eliminar usuario!! ...',
                                                                          text: '¿Estas seguro de realizar estos cambios?. El resultado sera irreversible.',
                                                                          footer: 'Elimando guia',
                                                                           showCloseButton: true,
                                                                          showCancelButton: true,
                                                                          focusConfirm: false,
                                                                           confirmButtonText: 'Si, estoy seguro',
                                                                           cancelButtonText: 'Cancelar',

                                                                          
                                                                        }).then((result) => {
                                                                            if(result.value){
                                                                                window.location.href= '/users/destroy/{{$user->id}}';
                                                                              //  document.formac.submit();
                                                                            } else {
                                                                                Swal.fire('Cancelado', 'Buena elección :)', 'error');
                                                                            }
                                                                        }); 
                                                                    });  
                                                                    </script>
                                                           </th>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            {{$users->render()}}
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
