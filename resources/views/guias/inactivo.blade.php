@include('layouts.head')
@include('layouts.nav')
 <body>
 	           <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right" onmousedown='return false;' onselectstart="return false;">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tablero</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Correcciones</a></li>
                                            <li class="breadcrumb-item active">Buscar correciones</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title" onmousedown='return false;' onselectstart="return false;">Buscar guia para enviar Corrección</h4>
                                </div>
                            </div>
                        </div>   

						 	 <!-- Inline Form -->
                         <div class="row">
                            <div class="col-md-12 center">
                                <div class="card">
                                    <div class="card-body">
                                        <div onmousedown='return false;' onselectstart="return false;">
                                        <h4 class="header-title">Ingresa los datos de la guia para enviar la correccion</h4>
                                         <p class="text-muted mb-4">Buscar los datos de la guia para </p>

                                        <p class="text-muted mb-3">
                                        </p>
                            		  <h6 class="font-13 mt-3">Datos de la guia </h6>
                                    </div>
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
								 	    <div class="col-xl-12" onmousedown='return false;' onselectstart="return false;">
                                <div class="card">
                                    <div class="card-body">

                                  
                                        <div class="table-responsive-sm" >
                                            <table class="table table-striped table-centered mb-0" >
                                                <thead>
                                                    <tr>
                                                        <th>Nombre</th>
                                                        <th>Imagen</th>
                                                        <th>Estado</th>
                                                        <th>Level</th>
                                                        <th>Acción</th>
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
                                                         <td>
                                                          <a href="/guias/active/{{$guia->id}}" class="btn btn-success" title="Activar guia">Activar <i class="mdi mdi-square-edit-outline"></i></a> 
                                                          <a  id="delet"   class="btn btn-danger" title="Eliminar guia" >Eliminar Guia</a>
                                                          <a href="/guias/{{$guia->id}}" class="btn btn-primary" title="Ver guia"> <i class="mdi mdi-account-search-outline"></i></a> 
					                                               				      <!-- item-->
					                                  
					                                    <form  name="formac" action="/guias/destroy/{{$guia->id}}" method="POST" style="display: none;">
					                                        @csrf
					                                        <input type="hidden" name="status" value="inactive">
					                                    </form>



					                                  <script>
					                                  	
					                                        $('#delet').click(function(e){
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
					                                                    document.formac.action = '/guias/destroy/{{$guia->id}}';
					                                                    document.formac.submit();
					                                                } else {
					                                                    Swal.fire('Cancelado', 'Buena elección :)', 'error');
					                                                }
					                                            }); 
					                                        });


					                                        
					                                    </script>
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
