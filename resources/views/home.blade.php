
@include('layouts.head')
@include('layouts.nav',[$rol])
<body>
 
                  <div class="wrapper">
                          <!-- Start Content-->
                                                  <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Tablero</h4>
                                </div>
                            </div>
                        </div>

                        <!-- end page title -->
                        <div class="row">
                            <div class="col-xl-8">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-2">Task Level 0 activos. </h4>
                                            <div class="slimscroll" style="max-height: 171px;">
                                                 
                                                <div class="timeline-alt pb-0">
                                                     @foreach($guias as $guia )
                                                    <div class="timeline-item">
                                                        <i class="mdi mdi-upload bg-info-lighten text-info timeline-icon"></i>
                                                        <div class="timeline-item-info">
                                                            <a href="/guias/{{$guia->id}}" class="text-info font-weight-bold mb-1 d-block">{{$guia->name}}</a>
                                                            <a href="javascript: void(0);" class="text-center d-block mb-4">
                                                              <img src="{{ asset('images_guias/')}}/{{$guia->img}}" class="img-fluid" style="max-width: 500px;" alt="No ese encontro imagen" /></a>
                                                            <p class="mb-0 pb-2">
                                                                <small class="text-muted">5 minutes ago</small>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                    <!--
                                                    <div class="timeline-item">
                                                        <i class="mdi mdi-airplane bg-primary-lighten text-primary timeline-icon"></i>
                                                        <div class="timeline-item-info">
                                                            <a href="#" class="text-primary font-weight-bold mb-1 d-block">Product on the Bootstrap Market</a>
                                                            <small>Dave Gamache added
                                                                <span class="font-weight-bold">Admin Dashboard</span>
                                                            </small>
                                                            <p class="mb-0 pb-2">
                                                                <small class="text-muted">30 minutes ago</small>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    -->
                                                </div>
                                                <!-- end timeline -->
                                            </div> <!-- end slimscroll -->
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                            <div class="dropdown float-right">

                                                    <a href="javascript: void(0);" class="right-bar-toggle">Ver todos</a>

                                            </div><br>

                                            <h4 class="header-title mb-2">Usuarios En linea  </h4>

                                            <div class="slimscroll" style="max-height: 171px;">
                                                <div class="timeline-alt pb-0">
                                                     @if(Auth::check())
                                                    <div class="timeline-item">
                                                         @foreach(App\user::all() as $user)
                                                    
                                                              <i class="mdi mdi-airplane bg-primary-lighten text-primary timeline-icon"></i>
                                                        <div class="timeline-item-info">

                                                              @if($user->isOnline())
                                                              <div class="media">
                                                                <img class="mr-3 rounded-circle" src="{{ asset('images/users/avatar-2.jpg')}}" width="40" alt="Generic placeholder image">
                                                                <div class="media-body">
                                                                    <h5 class="mt-0 mb-1">{{$user->username}}</h5>
                                                                    <span class="font-13">{{$user->email}}</span>
                                                                </div>
                                                                <i class="mdi mdi-checkbox-blank-circle text-success"></i>
                                                            </div><br>
                                                              
                                                        
                                                            
                                                            @else
                                                             <div class="media">
                                                                <img class="mr-3 rounded-circle" src="{{ asset('images/users/avatar-2.jpg')}}" width="40" alt="Generic placeholder image">
                                                                <div class="media-body">
                                                                    <h5 class="mt-0 mb-1">{{$user->username}}</h5>
                                                                    <span class="font-13">{{$user->email}}</span>
                                                                </div>
                                                                <i class="mdi mdi-checkbox-blank-circle text-primary"></i>
                                                            </div>
                                                            <p class="mb-0 pb-2">
                                                                <small class="text-muted">5 minutes ago</small>

                                                            </p>
                                                             @endif
                                                        </div>          
                                                         @endforeach
                                                    </div>
                                                      @endif
                                                </div>
                                                <!-- end timeline -->
                                            </div> <!-- end slimscroll -->
                                        
                                      
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div>
                          <div class="row">
                            <div class="col-xl-8">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-2">Task Level  activos. </h4>
                                            <div class="slimscroll" style="max-height: 171px;">
                                                 
                                                <div class="timeline-alt pb-0">
                                                    @if(($rol=='admin')||($rol=='foun')||($rol=='editor')||($rol=='task'))
                                                     @foreach($guias_n as $guia_n )
                                                    <div class="timeline-item">
                                                        <i class="mdi mdi-upload bg-info-lighten text-primary timeline-icon"></i>
                                                        <div class="timeline-item-primary">
                                                            <a href="/guias/{{$guia_n->id}}" class="text-primary font-weight-bold mb-1 d-block">{{$guia_n->name}}</a>
                                                            <a href="javascript: void(0);" class="text-center d-block mb-0">
                                                              <img src="{{ asset('images_guias/')}}/{{$guia_n->img}}" class="img-fluid" style="max-width: 500px;" alt="No ese encontro imagen" /></a>
                                                            <p class="mb-0 pb-2">
                                                                <small class="text-muted">5 minutes ago</small>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                    @else
                                                    <h3>Esta sección es solo para usuarios de nivel</h3>
                                                    @endif

                                                </div>
                                                <!-- end timeline -->
                                            </div> <!-- end slimscroll -->
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->
                        <div class="row">
                            <div class="col-xl-8">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-2">Actividades del sistema</h4>
                                            <div class="slimscroll" style="max-height: 171px;">
                                                <div class="timeline-alt pb-0">
                                                    <div class="timeline-item">
                                                        <i class="mdi mdi-upload bg-info-lighten text-info timeline-icon"></i>
                                                        <div class="timeline-item-info">
                                                            <a href="#" class="text-info font-weight-bold mb-1 d-block">Robert se acaba de registrar</a>
                                                            <small>Robert Guillen registrado a las 2:30pm!</small>
                                                            <p class="mb-0 pb-2">
                                                                <small class="text-muted">5 minutes ago</small>
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <div class="timeline-item">
                                                        <i class="mdi mdi-airplane bg-primary-lighten text-primary timeline-icon"></i>
                                                        <div class="timeline-item-info">
                                                            <a href="#" class="text-primary font-weight-bold mb-1 d-block">Mike Castillo ha enviado la Correccion</a>
                                                            <small>Dave Gamache added
                                                                <span class="font-weight-bold">Admin Dashboard</span>
                                                            </small>
                                                            <p class="mb-0 pb-2">
                                                                <small class="text-muted">30 minutes ago</small>
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <div class="timeline-item">
                                                        <i class="mdi mdi-microphone bg-info-lighten text-info timeline-icon"></i>
                                                        <div class="timeline-item-info">
                                                            <a href="#" class="text-info font-weight-bold mb-1 d-block">Robert Delaney</a>
                                                            <small>Send you message
                                                                <span class="font-weight-bold">"Are you there?"</span>
                                                            </small>
                                                            <p class="mb-0 pb-2">
                                                                <small class="text-muted">2 hours ago</small>
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <div class="timeline-item">
                                                        <i class="mdi mdi-upload bg-primary-lighten text-primary timeline-icon"></i>
                                                        <div class="timeline-item-info">
                                                            <a href="#" class="text-primary font-weight-bold mb-1 d-block">Audrey Tobey</a>
                                                            <small>Uploaded a photo
                                                                <span class="font-weight-bold">"Error.jpg"</span>
                                                            </small>
                                                            <p class="mb-0 pb-2">
                                                                <small class="text-muted">14 hours ago</small>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end timeline -->
                                            </div> <!-- end slimscroll -->
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div>                    
                    </div>
                        <!-- Right Sidebar -->
                
                    <!-- /Right-bar -->


       

                    </body>
@include('layouts.footer')