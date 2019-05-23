@include('layouts.head')
@include('layouts.nav')

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                       <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tablero</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Perfil</a></li>
                                            <li class="breadcrumb-item active">Ver perfil</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Mi cuenta</h4>
                                </div>
                            </div>
                        </div>   


                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Profile -->
                                <div class="card bg-primary">
                                    <div class="card-body profile-user-box">

                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="media">
                                                    <span class="float-left m-2 mr-4"><img src="{{ asset('images/logo2.png') }}" style="height: 100px;" alt="" class="rounded-circle img-thumbnail"></span>
                                                    <div class="media-body">

                                                        <h4 class="mt-1 mb-1 text-white">{{$people->name}} {{$people->surname}}</h4>
                                                   
                                                            @if($role->name == 'foun')
                                                             <h1 class="badge badge-danger">
                                                            Fundador de la plataforma</h3>@elseif($role->name == 'admin') <h1 class="badge badge-info">{{$role->description}} de la plataforma</h3>@elseif($role->name == 'editor') <span class="badge badge-success">{{$role->description}}</span>@elseif($role->name == 'editor0') <span class="badge badge-success">{{$role->description}}</span>@elseif($role->name == 'task') <span class="badge badge-primary">{{$role->description}}</span>@elseif($role->name == 'task0') <span class="badge">{{$role->description}}</p>
                                                            @endif
                                                        <ul class="mb-0 list-inline text-light">
                                                            <li class="list-inline-item mr-3">
                                                                <h5 class="mb-1">Nacionalidad: {{$people->nacionality}}</h5>
                                                                <p class="mb-0 font-13 text-white-50"></p>
                                                            </li>                    
                                                        </ul>
                                                    </div> <!-- end media-body-->
                                                </div>
                                            </div> <!-- end col-->

                                            <div class="col-sm-4">
                                                <div class="text-center mt-sm-0 mt-3 text-sm-right">
                                                    
                                                        <a class="btn btn-light" href="{{ url('users/edit_profile') }}/{{$user->id}}"><i class="mdi mdi-account-edit mr-1"></i> Editar perfil</a>
                                                        
                                                  
                                                </div>
                                            </div> <!-- end col-->
                                        </div> <!-- end row -->

                                    </div> <!-- end card-body/ profile-user-box-->
                                </div><!--end profile/ card -->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-md-4">
                                <!-- Personal-Information -->
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mt-0 mb-3">Información del perfil</h4>
                                        <div class="text-left">
                                            <p class="text-muted"><strong>Nombre completo :</strong> <span class="ml-2">{{$people->name}} {{$people->surname}}</span></p>
                
                                            <p class="text-muted"><strong>Email :</strong> <span class="ml-2">{{$user->email}}</span></p>

                                            <p class="text-muted"><strong>Nacionalidad :</strong> <span class="ml-2">{{$people->nacionality}}</span></p>

                                            <p class="text-muted"><strong>Cédula :</strong>
                                                <span class="ml-2">{{$people->ci}} </span>
                                            </p>
                                             <p class="text-muted"><strong>Dirección :</strong>
                                                <span class="ml-2">{{$people->address}} </span>
                                            </p>
                                             <p class="text-muted"><strong>Estado del usuario :</strong> </p> @if($user->state=="inactivo")
                                                    <h3><span class="badge badge-primary-lighten">{{$user->state}}</span></h3></th>
                                                    @elseif($user->state=="bloqueado")
                                                    <h3><span class="badge badge-danger-lighten">{{$user->state}}</span></h3>
                                                    @elseif($user->state=="activo")
                                                   <h3><span class="badge badge-success-lighten">{{$user->state}}</span></h3>
                                                    @endif
                                           
                                        </div>
                                    </div>
                                </div>
                                <!-- Personal-Information -->

                                <!-- Toll free number box-->
                                <div class="card text-white bg-info overflow-hidden">
                                    <div class="card-body">
                                        <div class="toll-free-box text-center">
                                            <h4> <i class="mdi mdi-deskphone"></i> Fecha de ingreso a la plataforma {{$user->created_at}}  : 1-234-567-8901</h4>
                                        </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                                <!-- End Toll free number box-->

                            </div> <!-- end col-->
                          
                            <div class="col-md-8">

                                <!-- Chart-->
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-3">Imagenes subidas en el registro</h4>
                                        <div class="row">
                                          <div class="col-md-4">
                                                <!-- Product image -->
                                                <h6 class="header-title mb-3">Fotografia con cedula</h6>

                                                <a href="javascript: void(0);" class="text-center d-block mb-4">
                                                    <img src="{{ asset('images_user/')}}/{{$people->img_url}}" class="img-fluid" style="max-width: 280px;" alt="No existe imagen de usaurio" />
                                                </a>
                                                
                                                    
                                         </div> <!-- end col -->  
                                         <div class="col-md-2"></div>
                                          <div class="col-md-4">   
                                                <h3 class="header-title mb-3">Cedula de identidad</h3>
                                                 <a href="javascript: void(0);" class="text-center d-block mb-4">
                                                    <img src="{{ asset('images_user/')}}/{{$people->img_ci}}" class="img-fluid" style="max-width: 280px;" alt="No existe imagen de usaurio" />
                                                </a>
                                          </div>
                                    </div>
                                        </div>
                         
                                </div>
                                <!-- End Chart-->

                            </div>
                        <!-- end row -->
                        
                    </div> <!-- container -->
@include('layouts.footer')