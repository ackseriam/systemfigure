
@include('layouts.head')
@include('layouts.nav',[$rol])
<body>
 
                  <div class="wrapper">
                          <!-- Start Content-->
                                                  <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <!--
                                    <div class="page-title-right">
                                        <form class="form-inline">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="text" class="form-control form-control-light" id="dash-daterange">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text bg-primary border-primary text-white">
                                                            <i class="mdi mdi-calendar-range font-13"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="javascript: void(0);" class="btn btn-primary ml-2">
                                                <i class="mdi mdi-autorenew"></i>
                                            </a>
                                            <a href="javascript: void(0);" class="btn btn-primary ml-1">
                                                <i class="mdi mdi-filter-variant"></i>
                                            </a>
                                        </form>
                                    </div>-->
                                    <h4 class="page-title">Tablero</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        <div class="row">
                            <div class="col-xl-8">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-2">Tareas recientes </h4>
                                            <div class="slimscroll" style="max-height: 171px;">
                                                <div class="timeline-alt pb-0">
                                                    <div class="timeline-item">
                                                        <i class="mdi mdi-upload bg-info-lighten text-info timeline-icon"></i>
                                                        <div class="timeline-item-info">
                                                            <a href="#" class="text-info font-weight-bold mb-1 d-block">You sold an item</a>
                                                            <small>Paul Burgess just purchased “Hyper - Admin Dashboard”dsaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa!</small>
                                                            <p class="mb-0 pb-2">
                                                                <small class="text-muted">5 minutes ago</small>
                                                            </p>
                                                        </div>
                                                    </div>

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
        <div class="right-bar">

            <div class="rightbar-title">
                <a href="javascript:void(0);" class="right-bar-toggle float-right">
                    <i class="dripicons-cross noti-icon"></i>
                </a>
                <h5 class="m-0">Confi</h5>
            </div>

            <div class="slimscroll-menu rightbar-content">

                <!-- Settings -->
                <hr class="mt-0" />
                <h5 class="pl-3">Basic Settings</h5>
                <hr class="mb-0" />

                <div class="p-3">
                    <div class="custom-control custom-checkbox mb-2">
                        <input type="checkbox" class="custom-control-input" id="notifications-check" checked>
                        <label class="custom-control-label" for="notifications-check">Notifications</label>
                    </div>

                    <div class="custom-control custom-checkbox mb-2">
                        <input type="checkbox" class="custom-control-input" id="api-access-check">
                        <label class="custom-control-label" for="api-access-check">API Access</label>
                    </div>

                    <div class="custom-control custom-checkbox mb-2">
                        <input type="checkbox" class="custom-control-input" id="auto-updates-check" checked>
                        <label class="custom-control-label" for="auto-updates-check">Auto Updates</label>
                    </div>

                    <div class="custom-control custom-checkbox mb-2">
                        <input type="checkbox" class="custom-control-input" id="online-status-check" checked>
                        <label class="custom-control-label" for="online-status-check">Online Status</label>
                    </div>

                    <div class="custom-control custom-checkbox mb-2">
                        <input type="checkbox" class="custom-control-input" id="auto-payout-check">
                        <label class="custom-control-label" for="auto-payout-check">Auto Payout</label>
                    </div>

                </div>


                <!-- Timeline -->
                <hr class="mt-0" />
                <h5 class="pl-3">Recent Activity</h5>
                <hr class="mb-0" />
                <div class="pl-2 pr-2">
                    <div class="timeline-alt">
                        <div class="timeline-item">
                            <i class="mdi mdi-upload bg-info-lighten text-info timeline-icon"></i>
                            <div class="timeline-item-info">
                                <a href="ui-general.html#" class="text-info font-weight-bold mb-1 d-block">You sold an item</a>
                                <small>Paul Burgess just purchased “Hyper - Admin Dashboard”!</small>
                                <p class="mb-0 pb-2">
                                    <small class="text-muted">5 minutes ago</small>
                                </p>
                            </div>
                        </div>

                        <div class="timeline-item">
                            <i class="mdi mdi-airplane bg-primary-lighten text-primary timeline-icon"></i>
                            <div class="timeline-item-info">
                                <a href="ui-general.html#" class="text-primary font-weight-bold mb-1 d-block">Product on the Bootstrap Market</a>
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
                                <a href="ui-general.html#" class="text-info font-weight-bold mb-1 d-block">Robert Delaney</a>
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
                                <a href="ui-general.html#" class="text-primary font-weight-bold mb-1 d-block">Audrey Tobey</a>
                                <small>Uploaded a photo
                                    <span class="font-weight-bold">"Error.jpg"</span>
                                </small>
                                <p class="mb-0 pb-2">
                                    <small class="text-muted">14 hours ago</small>
                                </p>
                            </div>
                        </div>

                        <div class="timeline-item">
                            <i class="mdi mdi-upload bg-info-lighten text-info timeline-icon"></i>
                            <div class="timeline-item-info">
                                <a href="ui-general.html#" class="text-info font-weight-bold mb-1 d-block">You sold an item</a>
                                <small>Paul Burgess just purchased “Hyper - Admin Dashboard”!</small>
                                <p class="mb-0 pb-2">
                                    <small class="text-muted">1 day ago</small>
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div class="rightbar-overlay"></div>
        <!-- /Right-bar -->

                    </body>
@include('layouts.footer')