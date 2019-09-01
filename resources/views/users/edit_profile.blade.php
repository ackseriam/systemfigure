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
                                                
                                                    @if(!empty($img_profile))
                                                        <span class="float-left m-2 mr-4"><img src="{{ asset('images/')}}/{{$img_profile}}"
                                                         style="height: 100px;" alt="" class="rounded-circle img-thumbnail"></span>
                                                    @else
                                                    <span class="float-left m-2 mr-4"><img src="{{ asset('images/logo2.png') }}" style="height: 100px;" alt="" class="rounded-circle img-thumbnail"></span>
                                                    @endif
                                                    <div class="media-body">

                                                        <h4 class="mt-1 mb-1 text-white">{{$people->name}} {{$people->surname}}</h4>
                                                   
                                                            @if($role->name == 'foun')
                                                             <h1 class="badge badge-danger">
                                                            Fundador de la plataforma</h3>@elseif($role->name == 'admin') <h1 class="badge badge-info">{{$role->description}} de la plataforma</h3>@elseif($role->name == 'editor') <span class="badge badge-success">{{$role->description}}</span>@elseif($role->name == 'editor0') <span class="badge badge-success">{{$role->description}} de la plataforma</span>@elseif($role->name == 'task') <span class="badge badge-primary">{{$role->description}} de la plataforma</span>@elseif($role->name == 'task0') <span class="badge">{{$role->description}} de la plataforma</span>
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
                                        </div> <!-- end row -->

                                    </div> <!-- end card-body/ profile-user-box-->
                                </div><!--end profile/ card -->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->

                         <div class="row">
                            <div class="col-12">
                                             
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
                                          <!--<div class="col-lg-4">   
                                        <a href="{{ url('people') }}/{{$people_id}}"  class="btn btn-success">Ver datos de persona</a>
                                      </div><br>-->
                                        </div><br>
                                        
                                        
                                       @include('users.update_profile')
                                       </div>
                                        
                                        </div> <!-- end col -->
                                    </div>
                                    </div>
                                </div>
                          </div>
             
                                        
                        
                    </div>
                        <!-- end row-->
                        
                    </div> <!-- container -->

                 
                                      
             

@include('layouts.footer')

