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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Usuario</a></li>
                                            <li class="breadcrumb-item active">Editar usuario</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Editar usuario</h4>
                                </div>
                            </div>
                        </div>   
                         <div class="row">
		                    <div class="col-12">
		                        <div class="card-header pt-2 pb-1 text-center bg-primary">
		                                        <a href="#">
		                                            <span><img src="{{ asset('images/logo2.png') }}" alt="" width="50"></span>
		                                        </a>
		                                    </div>
		                        <div class="card">
		                            <div class="card-body"> 
		                                 <div class="row">
		                                <div class="col-lg-3">
		                                </div>    
		                                <div class="col-lg-6">
		                                      <!-- Logo-->
		                                     <div class="text-center w-75 m-auto">
		                                    <h4 class="text-dark-50 text-center mt-0 font-weight-bold">Editar usuario seleccionado </h4>
		                                    <p class="text-muted mb-4">Asegurese de enviar los datos correctamente.</p>
		                                </div>
		                                <div class="row">
		                                	<div class="col-lg-8"></div>
		                                  <div class="col-lg-4">   
                                        <a href="{{ url('corrections/create') }}/" target="_blank" class="btn btn-success">Ver datos de persona</a>
                                      </div><br>
		                                </div>
		                                
		                                
		                               @include('users.editform')
		                               </div>
		                                
		                                </div> <!-- end col -->
		                            </div>
		                            </div>
		                        </div>
                          </div>
                       </div> <!-- end card-->
   

@include('layouts.footer')
