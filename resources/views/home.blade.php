
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

                    <!-- Start Content-->
                    <div class="container-fluid">
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
                                                </div>
                                                <!-- end timeline -->
                                            </div> <!-- end slimscroll -->
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                                   <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-2">Task Level  activos. </h4>
                                            <div class="slimscroll" style="max-height: 300px;">
                                                 
                                                <div class="timeline-alt pb-0">
                                                    @if(($rol=='admin')||($rol=='foun')||($rol=='editor')||($rol=='task')||($rol=='vpnlevel'))
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

                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                            <div class="dropdown float-right">

                                                    <a href="javascript: void(0);" class="right-bar-toggle">Ver todos</a>

                                            </div><br>

                                            <h4 class="header-title mb-2">Usuarios En linea  </h4>

                                            <div class="slimscroll" style="max-height: 600px;">
                                                <div class="timeline-alt pb-0">
                                                     @if(Auth::check())
                                                    <div class="timeline-item">

                                                         @foreach($users_ac as $user)
                                                              <i class="mdi mdi-airplane bg-success-lighten text-success timeline-icon"></i>

                                                        <div class="timeline-item-info">
                                                              <div class="media">
                                                                 <?php $i=0; $j=0;?>  

                                                                  @if(!empty($user[$i]->img_profile))
                                                                 
                                                                          <img class="mr-3 rounded-circle" src="{{ asset('images/')}}/{{$user[$i]->img_profile}}" width="40" alt="Generic placeholder image">
                                                                    @else
                                                                    <img class="mr-3 rounded-circle" src="{{ asset('images/logo2.png')}}" width="40" alt="Generic placeholder image">
                                                                    @endif
                                                               
                                                                <div class="media-body">
                                                                 
                                                                    <h5 class="mt-0 mb-1">{{$user[$i]->name}} {{$user[$i]->surname}} 
                                                                          <?php
                                                                    $roles = DB::table('roles')
                                                                ->leftjoin('roles_user', 'roles_user.roles_id', '=', 'roles.id')
                                                                ->where('roles_user.user_id', $user[$i]->id)
                                                                ->select('roles.name','roles.description')
                                                                ->get(1);
                                                                    $ultimo = last($roles);
                                                                    $role = last($ultimo);
                                                                    ?>

                                                                    @if($role->name == 'foun') <span class="badge badge-danger">{{$role->description}}</span>@elseif($role->name == 'admin') <span class="badge badge-info">{{$role->description}}</span>@elseif($role->name == 'editor') <span class="badge badge-success">{{$role->description}}</span>@elseif($role->name == 'editor0') <span class="badge badge-success">{{$role->description}}</span>@elseif($role->name == 'task') <span class="badge badge-primary">{{$role->description}}</span>@elseif($role->name == 'task0') <span class="badge">{{$role->description}}</span>@endif 
                                                                     </h5>
                                                                     @if(!empty($user[$i]->email))
                                                                    <span class="font-13">{{$user[$i]->email}}</span>
                                                                    @else <span class="font-13">{{$role->description}}</span>
                                                                    @endif
                                                                <?php $i++; $j++;?>
                                                                </div>
                                                                <i class="mdi mdi-checkbox-blank-circle text-success"></i>
                                                            </div><br>
                                                         </div>  
                                                                 @endforeach

                                                        </div>   
                                                     <div class="timeline-item">
                                                            @foreach($users_inac as $useri)

                                                             <i class="mdi mdi-airplane bg-primary-lighten text-primary timeline-icon"></i>
                                                        <div class="timeline-item-info">
                                                             <div class="media">
                                                                @if(!empty($useri->img_profile))
                                                                 
                                                                          <img class="mr-3 rounded-circle" src="{{ asset('images/')}}/{{$useri->img_profile}}" width="40" alt="Generic placeholder image">
                                                                    @else
                                                                    <img class="mr-3 rounded-circle" src="{{ asset('images/logo2.png')}}" width="40" alt="Generic placeholder image">
                                                                    @endif
                                                               
                                                                <div class="media-body">
                                                                    
                                                                    <h5 class="mt-0 mb-1">{{$useri->name}} {{$useri->surname}}
                                                                     <?php
                                                                    $roles = DB::table('roles')
                                                                ->join('roles_user', 'roles_user.roles_id', '=', 'roles.id')
                                                                ->where('roles_user.user_id', $useri->id)
                                                                ->select('roles.name','roles.description')
                                                                ->get(1);
                                                                 $ultimo = last($roles);
                                                                    $role = last($ultimo);
                                                                   
                                                          
                                                                    ?>
                                                                    
                                                                    @if($role->name == 'foun') <span class="badge badge-danger">{{$role->description}}</span>@elseif($role->name == 'admin') <span class="badge badge-info">{{$role->description}}</span>@elseif($role->name == 'editor') <span class="badge badge-success">{{$role->description}}</span>@elseif($role->name == 'editor0') <span class="badge badge-success">{{$role->description}}</span>@elseif($role->name == 'task') <span class="badge badge-primary">{{$role->description}}</span>@elseif($role->name == 'task0') <span class="badge">{{$role->description}}</span>@endif 
                                                                    </h5>
                                                                    @if(!empty($useri->email))
                                                                    <span class="font-13">{{$useri->email}}</span>
                                                                    @else <span class="font-13">{{$role->description}}</span>
                                                                    @endif
                                                                
                                                                    
                                                                </div>
                                                                <i class="mdi mdi-checkbox-blank-circle text-primary"></i>
                                                            </div>
                                                            <p class="mb-0 pb-2">
                                                                <small class="text-muted">5 minutes ago</small>

                                                            </p>
                                                          
                                                        </div>   
                                                            
                                                         @endforeach
                                                     </div>
                                                    </div>
                                                      @endif
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