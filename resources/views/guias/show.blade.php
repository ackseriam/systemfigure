@include('layouts.head')
@include('layouts.nav')
           <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tablero</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Guias</a></li>
                                            <li class="breadcrumb-item active">Guia </li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Guia </h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <!-- Product image -->
                                                <h3>Foto de guia</h3>

                                                <a href="javascript: void(0);" class="text-center d-block mb-4">
                                                    <img src="{{ asset('images_guias/')}}/{{$guia->img}}" class="img-fluid" style="max-width: 600px;" alt="No existe imagen de guia" />
                                                </a>	
                                            </div> <!-- end col -->
                                            <div class="col-lg-6">
                                                <div class="pl-lg-4">
                                                    <!-- Product title -->
                                                    <h3 class="mt-0"> {{$guia->name}}   
                                                    	@if(($rol=='admin') ||($rol=='foun') )
                                                    
                                                    	<a href="/guias/edit/{{$guia->id}}" class="text-muted" title="Editar guia"><i class="mdi mdi-square-edit-outline ml-2"></i></a> 
                                                    	@endif
                                                    </h3>
                                                    <p class="mb-1">Fecha de registro de la guia: {{$guia->created_at}} </p>
                                                    <p class="font-16">
                                                        <span class="text-warning mdi mdi-star"></span>
                                                        <span class="text-warning mdi mdi-star"></span>
                                                        <span class="text-warning mdi mdi-star"></span>
                                                        <span class="text-warning mdi mdi-star"></span>
                                                        <span class="text-warning mdi mdi-star"></span>
                                                    </p>
													 @if($guia->status =='activo')
									                   <div class="mt-12">
                                                        <h2><span class="badge badge-success-lighten">Activo</span></h2>
                                                       </div>
                                                   @elseif($guia->status =='inactivo')
                                                   <div class="mt-12">
                                                        <h2><span class="badge badge-primary-lighten">Inactivo</span></h2>
                                                    </div>
                                                     @elseif($guia->status =='bloqueado')
                                                   <div class="mt-12">
                                                        <h2><span class="badge badge-danger-lighten">Bloqueado</span></h2>
                                                    </div>
                                                    @endif
                                                    <!-- Product description -->
                                                    <div class="mt-4">
                                                        <h6 class="font-14">Nombre de los campos de la guia : </h6>
                                                        <h3> {{$guia->names_campo}}</h3>
                                                    </div>

                                                      <div class="mt-4">
                                                        <div class="d-flex">
                                                        	<a href="/corrections/create/{{$guia->id}}" class="action-icon" title="Enviar corrección" target="_blank"><i class="mdi mdi-plus btn btn-primary "  > Enviar corrección.</i></a>
                                                            
                                                          
                                                        </div>
                                                    </div>
                                                      <div class="mt-4">
                                                        <div class="d-flex">
                                                            <a href="/corrections/correc_user/{{$guia->id}}" class="action-icon" title="Ver correcciones" target="_blank"><i class="mdi mdi-account-search-outline btn btn-primary "  target="_blank"> Ver correcciones.</i></a>
                                                            
                                                          
                                                        </div>
                                                    </div>

                                              
                                                    <!-- Quantity -->
												
												  
												  
											
                                                
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->
                                         
                                           
												
                                        </div> <!-- end row-->
                                       </div>
                                        
                                        
                                     <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div>



@include('layouts.footer')