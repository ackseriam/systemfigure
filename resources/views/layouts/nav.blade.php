        <!-- ========== Left Sidebar Start ========== -->
 
 @if ($rol === 'foun')                                                     
            <div class="left-side-menu">

                <div class="slimscroll-menu">

                    <!-- LOGO -->
                    <a href="index.html" class="logo text-center">
                        <span class="logo-lg">
                            <img src="{{ asset('images/logo2.png') }}" alt="" height="60">
                        </span>
                        <span class="logo-sm">
                            <img src="{{ asset('images/logo_sm.png') }}" alt="" height="16">
                        </span>
                    </a>

                    <!--- Sidemenu -->
                    <ul class="metismenu side-nav">

                        <li class="side-nav-title side-nav-item">Administrativo- Fundador</li>

                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="dripicons-meter"></i>
                               
                                <span> tablero</span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="{{ route('home') }}">Ver tablero</a>
                                </li>
                            </ul>
                        </li>
            
                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="dripicons-copy"></i>
                                <span> Usuarios </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="{{ url('users') }}">Lista general de usuarios</a>
                                </li>
                                <li>
                                    <a href="{{ url('users/index_edit') }}">Cambio de status de usuario</a>
                                </li>

                                <li>
                                    <a href="{{ url('users/locked') }}">Bloqueados</a>
                                </li>
                                <li>
                                    <a href="{{ url('users/inactivity') }}">Lista de usuarios Inactivos</a>
                                </li>
                                <li>
                                    <a href="{{ url('users/search') }}">Buscar usuario</a>
                                </li>
                            </ul>
                        </li>

                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="dripicons-browser"></i>
                                 <?php
                                
                                    $person = DB::table('people')
                                ->leftjoin('users', 'users.people_id', '=', 'people.id')
                                ->where('users.people_id')
                                ->count();
                                 
                                    ?>
                                <span> Personas  @if($person!=0)<span class="badge badge-success float-right">{{$person}}@endif</span>  </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="{{ url('people') }}">Lista general de personas</a>
                                </li>
                                <li>
                                    <a href="{{ url('people/aprobacion') }}">Lista de personas por aprobación @if($person!=0)<span class="badge badge-danger float-right">{{$person}}@endif </a>
                                </li>
                                <li>
                                    <a href="{{ url('people/search') }}">Buscar persona</a>
                                </li>   
                            </ul>
                        </li>

                           <li class="side-nav-title side-nav-item mt-1">Guias en general </li>
                           <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="mdi mdi-plus "></i>
                              
                                <span> Insertar Guia</span>
                                 <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="{{ url('guias/create') }}">Registrar </a>
                                </li>
                            </ul>
                        </li>
                        <li class="side-nav-title side-nav-item mt-1">Guias  </li>
                         <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="dripicons-document"></i>
                                <span>Guias inactivas  </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="{{ url('guias/inactiva/0') }}">Guias inactivas  lvl0</a>
                                </li>
                                <li>
                                    <a href="{{ url('guias/inactiva/1') }}">Guias inactivas  lvl</a>
                                </li>
                            </ul>
                        </li>
                        
                        
                         <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="dripicons-document"></i>
                                <span>Guias y correcciones  </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="{{ url('corrections/index/0') }}">Guias y correcciones  lvl0</a>
                                </li>
                                <li>
                                    <a href="{{ url('corrections/index/1') }}">Guias y correcciones  lvl</a>
                                </li>
                                   <li>
                                         <a href="{{ url('corrections/index_vpn/vpn') }}">Guias y Correcciones VPN lvl</a>
                                        </li>
                                    
                                </li>
                            </ul>
                        </li>

                       
                       
                     

                        <li class="side-nav-title side-nav-item mt-1">Otros</li>
                         <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="dripicons-browser"></i>
                                <span> Acciones a la Base de datos</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                      
                                <li>
                                    <a href="{{url('guias/getImport') }}">Importar data de guias drive</a>
                                </li>   
                            </ul>
                        </li>
            
                    </ul>

                    <!-- Help Box -->
                    <div class="help-box text-white text-center">
                        <a href="javascript: void(0);" class="float-right close-btn text-white">
                            <i class="mdi mdi-close"></i>
                        </a>
                        <img src="{{ asset('/images/help-icon.svg') }}" height="90" alt="Helper Icon Image" />
                        <h5 class="mt-3">Bienvenido </h5>
                        <p class="mb-3">Recuerde hacer un uso correcto del sistema</p>
                        <a href="javascript: void(0);" class="btn btn-outline-light btn-sm">Hacemos este especio para su seguridad</a>
                    </div>
                    <!-- end Help Box -->
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

               <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Topbar Start -->
                    <div class="navbar-custom">
                        <ul class="list-unstyled topbar-right-menu float-right mb-0">
                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="dripicons-bell noti-icon"></i>
                                    <span class="noti-icon-badge"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg">

                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5 class="m-0">
                                            <span class="float-right">
                                                <a href="javascript: void(0);" class="text-dark">
                                                    <small>Marcar todo como leido</small>
                                                </a>
                                            </span>Notificación
                                        </h5>
                                    </div>

                                    <div class="slimscroll" style="max-height: 230px;">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-primary">
                                                <i class="mdi mdi-comment-account-outline"></i>
                                            </div>
                                            <p class="notify-details">Caleb Flakelar commented on Admin
                                                <small class="text-muted">1 min ago</small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-info">
                                                <i class="mdi mdi-account-plus"></i>
                                            </div>
                                            <p class="notify-details">New user registered.
                                                <small class="text-muted">5 hours ago</small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon">
                                                <img src="{{ asset('images/users/avatar-2.jpg') }}" class="img-fluid rounded-circle" alt="" /> </div>
                                            <p class="notify-details">Cristina Pride</p>
                                            <p class="text-muted mb-0 user-msg">
                                                <small>Hi, How are you? What about our next meeting</small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-primary">
                                                <i class="mdi mdi-comment-account-outline"></i>
                                            </div>
                                            <p class="notify-details">Caleb Flakelar commented on Admin
                                                <small class="text-muted">4 days ago</small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon">
                                                <img src="{{ asset('images/users/avatar-4.jpg') }}" class="img-fluid rounded-circle" alt="" /> </div>
                                            <p class="notify-details">Karen Robinson</p>
                                            <p class="text-muted mb-0 user-msg">
                                                <small>Wow ! this admin looks good and awesome design</small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-info">
                                                <i class="mdi mdi-heart"></i>
                                            </div>
                                            <p class="notify-details">Carlos Crouch liked
                                                <b>Admin</b>
                                                <small class="text-muted">13 days ago</small>
                                            </p>
                                        </a>
                                    </div>

                                    <!-- All-->
                                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                        Ver todo
                                    </a>

                                </div>
                            </li>

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle nav-user arrow-none mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                                    aria-expanded="false">
                                    <span class="account-user-avatar"> 
                                        <img src="{{ asset('images/logo2.png') }}" alt="user-image" class="rounded-circle">
                                    </span>
                                    <span>
                                        <span class="account-user-name"> {{ Auth::user()->username }} </span>
                                        <span class="account-position">Fundador</span>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                                    <!-- item-->
                                    <div class=" dropdown-header noti-title">
                                        <h6 class="text-overflow m-0">Bienvenido !</h6>
                                    </div>
                                    <!-- item-->
                                    <a href="{{ url('users/profile') }}" class="dropdown-item notify-item">
                                        <i class="mdi mdi-account-circle mr-1"></i>
                                        <span>Mi cuenta</span>
                                    </a>

                                    <!-- item-->
                                    <a href="{{ url('users/edit_profile') }}/{{ Auth::user()->id }}" class="dropdown-item notify-item">
                                        <i class="mdi mdi-account-edit mr-1"></i>
                                        <span>Configuración</span>
                                    </a>
                                    <!-- item-->
                                   <a  id="a" class="dropdown-item notify-item">
                                        <i class="mdi mdi-logout mr-1"></i>
                                        {{ __('Logout') }}  
                                    </a>
                                    <form id="logout-form" name="storyForm" action="{{ url('users/logout')}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>


                                    <script>
                                        $('#a').click(function(e){
                                            e.preventDefault();
                                          

                                            Swal.fire({
                                              type: 'info',
                                              title: 'Salida de la plataforma!! ...',
                                              text: '¿Estas seguro de salir de la plataforma?, de igual manera recordamos que la plataforma  luego de algunos minutos cierra sesion por inactividad.',
                                              footer: 'Muchas gracias por elegirnos',
                                               showCloseButton: true,
                                              showCancelButton: true,
                                              focusConfirm: false,
                                               confirmButtonText: 'Si, deseo salir!',
                                               cancelButtonText: 'Cancelar',

                                              
                                            }).then((result) => {
                                                if(result.value){
                                                    document.storyForm.action = '{{ url('users/logout')}}';
                                                    document.storyForm.submit();
                                                } else {
                                                    Swal.fire('Cancelado', 'Buena elección :)', 'error');
                                                }
                                            }); 
                                        });


                                        
                                    </script>

                                </div>
                            </li>

                        </ul>
                        <button class="button-menu-mobile open-left disable-btn">
                            <i class="mdi mdi-menu"></i>
                        </button>
                        <div class="app-search">
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="mdi mdi-magnify"></span>
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit">Buscar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                   
                    <!-- end Topbar -->
               </div>
       
            </div>
            @elseif ($rol== 'admin')
            <div class="left-side-menu">

                <div class="slimscroll-menu">

                    <!-- LOGO -->
                    <a href="index.html" class="logo text-center">
                        <span class="logo-lg">
                            <img src="{{ asset('images/logo2.png') }}" alt="" height="60">
                        </span>
                        <span class="logo-sm">
                            <img src="{{ asset('images/logo_sm.png') }}" alt="" height="16">
                        </span>
                    </a>

                    <!--- Sidemenu -->
                    <ul class="metismenu side-nav">

                        <li class="side-nav-title side-nav-item">Administrativo- Fundador</li>

                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="dripicons-meter"></i>
                                <span class="badge badge-success float-right">2</span>
                                <span> tablero</span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="{{ route('home') }}">Ver tablero</a>
                                </li>
                            </ul>
                        </li>
            
                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="dripicons-copy"></i>
                                <span> Usuarios </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="{{ url('users') }}">Lista general de usuarios</a>
                                </li>
                                <li>
                                    <a href="{{ url('users/index_edit') }}">Cambio de status de usuario</a>
                                </li>

                                <li>
                                    <a href="{{ url('users/locked') }}">Bloqueados</a>
                                </li>
                                <li>
                                    <a href="{{ url('users/inactivity') }}">Lista de usuarios Inactivos</a>
                                </li>
                                <li>
                                    <a href="{{ url('users/search') }}">Buscar usuario</a>
                                </li>
                            </ul>
                        </li>

                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="dripicons-browser"></i>
                                <span> Personas  </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="{{ url('people') }}">Lista general de personas</a>
                                </li>
                                <li>
                                    <a href="{{ url('people/aprobacion') }}">Lista de personas por aprobación</a>
                                </li>
                                <li>
                                    <a href="{{ url('people/search') }}">Buscar persona</a>
                                </li>   
                            </ul>
                        </li>

                           <li class="side-nav-title side-nav-item mt-1">Guias en general </li>
                           <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="mdi mdi-plus "></i>
                              
                                <span> Insertar Guia</span>
                                 <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="{{ url('guias/create') }}">Registrar </a>
                                </li>
                            </ul>
                        </li>
                        <li class="side-nav-title side-nav-item mt-1">Guias  </li>
                      
                        
                        
                           <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="dripicons-document"></i>
                                <span>Guias y correcciones  </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="{{ url('corrections/index/0') }}">Guias y correcciones  lvl0</a>
                                </li>
                                <li>
                                    <a href="{{ url('corrections/index/1') }}">Guias y correcciones  lvl</a>
                                </li>
                               
                           <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="dripicons-document"></i>
                                <span>Guias y correcciones VPN </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="{{ url('corrections/index_vpn/vpn0') }}">Guias y correcciones lvl0</a>
                                </li>
                                <li>
                                    <a href="{{ url('corrections/index_vpn/vpn') }}">Guias y Correcciones lvl</a>
                                </li>
                            </ul>
                        </li>
                            </ul>
                        </li>
                      
                   
                     

                        <li class="side-nav-title side-nav-item mt-1">Otros</li>
                         <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="dripicons-browser"></i>
                                <span> Acciones a la Base de datos</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                      
                                <li>
                                    <a href="{{url('guias/getImport') }}">Importar data de guias drive</a>
                                </li>   
                            </ul>
                        </li>
            
                    </ul>

                    <!-- Help Box -->
                    <div class="help-box text-white text-center">
                        <a href="javascript: void(0);" class="float-right close-btn text-white">
                            <i class="mdi mdi-close"></i>
                        </a>
                        <img src="{{ asset('/images/help-icon.svg') }}" height="90" alt="Helper Icon Image" />
                        <h5 class="mt-3">Bienvenido </h5>
                        <p class="mb-3">Recuerde hacer un uso correcto del sistema</p>
                        <a href="javascript: void(0);" class="btn btn-outline-light btn-sm">Hacemos este especio para su seguridad</a>
                    </div>
                    <!-- end Help Box -->
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

               <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Topbar Start -->
                    <div class="navbar-custom">
                        <ul class="list-unstyled topbar-right-menu float-right mb-0">
                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="dripicons-bell noti-icon"></i>
                                    <span class="noti-icon-badge"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg">

                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5 class="m-0">
                                            <span class="float-right">
                                                <a href="javascript: void(0);" class="text-dark">
                                                    <small>Marcar todo como leido</small>
                                                </a>
                                            </span>Notificación
                                        </h5>
                                    </div>

                                    <div class="slimscroll" style="max-height: 230px;">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-primary">
                                                <i class="mdi mdi-comment-account-outline"></i>
                                            </div>
                                            <p class="notify-details">Caleb Flakelar commented on Admin
                                                <small class="text-muted">1 min ago</small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-info">
                                                <i class="mdi mdi-account-plus"></i>
                                            </div>
                                            <p class="notify-details">New user registered.
                                                <small class="text-muted">5 hours ago</small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon">
                                                <img src="assets/images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                            <p class="notify-details">Cristina Pride</p>
                                            <p class="text-muted mb-0 user-msg">
                                                <small>Hi, How are you? What about our next meeting</small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-primary">
                                                <i class="mdi mdi-comment-account-outline"></i>
                                            </div>
                                            <p class="notify-details">Caleb Flakelar commented on Admin
                                                <small class="text-muted">4 days ago</small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon">
                                                <img src="{{ asset('images/users/avatar-4.jpg') }}" class="img-fluid rounded-circle" alt="" /> </div>
                                            <p class="notify-details">Karen Robinson</p>
                                            <p class="text-muted mb-0 user-msg">
                                                <small>Wow ! this admin looks good and awesome design</small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-info">
                                                <i class="mdi mdi-heart"></i>
                                            </div>
                                            <p class="notify-details">Carlos Crouch liked
                                                <b>Admin</b>
                                                <small class="text-muted">13 days ago</small>
                                            </p>
                                        </a>
                                    </div>

                                    <!-- All-->
                                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                        Ver todo
                                    </a>

                                </div>
                            </li>

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle nav-user arrow-none mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                                    aria-expanded="false">
                                   <span class="account-user-avatar"> 
                                        <img src="{{ asset('images/logo2.png') }}" alt="user-image" class="rounded-circle">
                                    </span>
                                    <span>
                                        <span class="account-user-name"> {{ Auth::user()->username }} </span>
                                        <span class="account-position">Administrador</span>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                                    <!-- item-->
                                    <div class=" dropdown-header noti-title">
                                        <h6 class="text-overflow m-0">Bienvenido !</h6>
                                    </div>

                                  <!-- item-->
                                    <a href="{{ url('users/profile') }}" class="dropdown-item notify-item">
                                        <i class="mdi mdi-account-circle mr-1"></i>
                                        <span>Mi cuenta</span>
                                    </a>

                                    <!-- item-->
                                    <a href="{{ url('users/edit_profile') }}/{{ Auth::user()->id }}" class="dropdown-item notify-item">
                                        <i class="mdi mdi-account-edit mr-1"></i>
                                        <span>Configuración</span>
                                    </a>

                       

                                       <!-- item-->
                                   <a  id="a" class="dropdown-item notify-item">
                                        <i class="mdi mdi-logout mr-1"></i>
                                        {{ __('Logout') }}  
                                    </a>
                                    <form id="logout-form" name="storyForm" action="{{ url('users/logout')}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>


                                  <script>
                                        $('#a').click(function(e){
                                            e.preventDefault();
                                          

                                            Swal.fire({
                                              type: 'info',
                                              title: 'Salida de la plataforma!! ...',
                                              text: '¿Estas seguro de salir de la plataforma?, de igual manera recordamos que la plataforma  luego de algunos minutos cierra sesion por inactividad.',
                                              footer: 'Muchas gracias por elegirnos',
                                               showCloseButton: true,
                                              showCancelButton: true,
                                              focusConfirm: false,
                                               confirmButtonText: 'Si, deseo salir!',
                                               cancelButtonText: 'Cancelar',

                                              
                                            }).then((result) => {
                                                if(result.value){
                                                    document.storyForm.action = '{{ url('users/logout')}}';
                                                    document.storyForm.submit();
                                                } else {
                                                    Swal.fire('Cancelado', 'Buena elección :)', 'error');
                                                }
                                            }); 
                                        });


                                        
                                    </script>
                                </div>
                            </li>

                        </ul>
                        <button class="button-menu-mobile open-left disable-btn">
                            <i class="mdi mdi-menu"></i>
                        </button>
                        <div class="app-search">
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="mdi mdi-magnify"></span>
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit">Buscar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                   
                    <!-- end Topbar -->
               </div>
       
            </div>

         @elseif ($rol== 'editor')
            <div class="left-side-menu">

                <div class="slimscroll-menu">

                    <!-- LOGO -->
                    <a href="index.html" class="logo text-center">
                        <span class="logo-lg">
                            <img src="{{ asset('images/logo2.png') }}" alt="" height="60">
                        </span>
                        <span class="logo-sm">
                            <img src="{{ asset('images/logo_sm.png') }}" alt="" height="16">
                        </span>
                    </a>

                    <!--- Sidemenu -->
                    <ul class="metismenu side-nav">

                        <li class="side-nav-title side-nav-item">Administrativo- Editor</li>

                          <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="dripicons-meter"></i>
                                <span class="badge badge-success float-right">2</span>
                                <span> tablero</span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="{{ route('home') }}">Ver tablero</a>
                                </li>
                            </ul>
                        </li>
            
                     <li class="side-nav-title side-nav-item mt-1">Guias  </li>
                      
                        
                        
                         <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="dripicons-document"></i>
                                <span>Guias y correcciones  </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="{{ url('corrections/index/0') }}">Guias y correcciones  lvl0</a>
                                </li>
                                <li>
                                    <a href="{{ url('corrections/index/1') }}">Guias y correcciones  lvl</a>
                                </li>
                               
                           <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="dripicons-document"></i>
                                <span>Guias y correcciones VPN </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="{{ url('corrections/index_vpn/vpn0') }}">Guias y correcciones lvl0</a>
                                </li>
                                <li>
                                    <a href="{{ url('corrections/index_vpn/vpn') }}">Guias y Correcciones lvl</a>
                                </li>
                            </ul>
                        </li>
                            </ul>
                        </li>
                      
                
                     

                    
                    <!-- end Help Box -->
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

               <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Topbar Start -->
                    <div class="navbar-custom">
                        <ul class="list-unstyled topbar-right-menu float-right mb-0">
                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="dripicons-bell noti-icon"></i>
                                    <span class="noti-icon-badge"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg">

                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5 class="m-0">
                                            <span class="float-right">
                                                <a href="javascript: void(0);" class="text-dark">
                                                    <small>Marcar todo como leido</small>
                                                </a>
                                            </span>Notificación
                                        </h5>
                                    </div>

                                    <div class="slimscroll" style="max-height: 230px;">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-primary">
                                                <i class="mdi mdi-comment-account-outline"></i>
                                            </div>
                                            <p class="notify-details">Caleb Flakelar commented on Admin
                                                <small class="text-muted">1 min ago</small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-info">
                                                <i class="mdi mdi-account-plus"></i>
                                            </div>
                                            <p class="notify-details">New user registered.
                                                <small class="text-muted">5 hours ago</small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon">
                                                <img src="assets/images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                            <p class="notify-details">Cristina Pride</p>
                                            <p class="text-muted mb-0 user-msg">
                                                <small>Hi, How are you? What about our next meeting</small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-primary">
                                                <i class="mdi mdi-comment-account-outline"></i>
                                            </div>
                                            <p class="notify-details">Caleb Flakelar commented on Admin
                                                <small class="text-muted">4 days ago</small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon">
                                                <img src="{{ asset('images/users/avatar-4.jpg') }}" class="img-fluid rounded-circle" alt="" /> </div>
                                            <p class="notify-details">Karen Robinson</p>
                                            <p class="text-muted mb-0 user-msg">
                                                <small>Wow ! this admin looks good and awesome design</small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-info">
                                                <i class="mdi mdi-heart"></i>
                                            </div>
                                            <p class="notify-details">Carlos Crouch liked
                                                <b>Admin</b>
                                                <small class="text-muted">13 days ago</small>
                                            </p>
                                        </a>
                                    </div>

                                    <!-- All-->
                                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                        Ver todo
                                    </a>

                                </div>
                            </li>

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle nav-user arrow-none mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                                    aria-expanded="false">
                                   <span class="account-user-avatar"> 
                                        <img src="{{ asset('images/logo2.png') }}" alt="user-image" class="rounded-circle">
                                    </span>
                                    <span>
                                        <span class="account-user-name"> {{ Auth::user()->username }} </span>
                                        <span class="account-position">Editor</span>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                                    <!-- item-->
                                    <div class=" dropdown-header noti-title">
                                        <h6 class="text-overflow m-0">Bienvenido !</h6>
                                    </div>

                                   <!-- item-->
                                    <a href="{{ url('users/profile') }}" class="dropdown-item notify-item">
                                        <i class="mdi mdi-account-circle mr-1"></i>
                                        <span>Mi cuenta</span>
                                    </a>

                                    <!-- item-->
                                    <a href="{{ url('users/edit_profile') }}/{{ Auth::user()->id }}" class="dropdown-item notify-item">
                                        <i class="mdi mdi-account-edit mr-1"></i>
                                        <span>Configuración</span>
                                    </a>

                                     <!-- 
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-lifebuoy mr-1"></i>
                                        <span>Soporte</span>
                                    </a>-->
            
                                    <!-- 
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-lock-outline mr-1"></i>
                                        <span>Lock Screen</span>
                                    </a>-->

                                    <!-- item-->
                                   <a  id="a" class="dropdown-item notify-item">
                                        <i class="mdi mdi-logout mr-1"></i>
                                        {{ __('Logout') }}  
                                    </a>
                                    <form id="logout-form" name="storyForm" action="{{ url('users/logout')}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>


                                  <script>
                                        $('#a').click(function(e){
                                            e.preventDefault();
                                          

                                            Swal.fire({
                                              type: 'info',
                                              title: 'Salida de la plataforma!! ...',
                                              text: '¿Estas seguro de salir de la plataforma?, de igual manera recordamos que la plataforma  luego de algunos minutos cierra sesion por inactividad.',
                                              footer: 'Muchas gracias por elegirnos',
                                               showCloseButton: true,
                                              showCancelButton: true,
                                              focusConfirm: false,
                                               confirmButtonText: 'Si, deseo salir!',
                                               cancelButtonText: 'Cancelar',

                                              
                                            }).then((result) => {
                                                if(result.value){
                                                    document.storyForm.action = '{{ url('users/logout')}}';
                                                    document.storyForm.submit();
                                                } else {
                                                    Swal.fire('Cancelado', 'Buena elección :)', 'error');
                                                }
                                            }); 
                                        });


                                        
                                    </script>
                                </div>
                            </li>

                        </ul>
                        <button class="button-menu-mobile open-left disable-btn">
                            <i class="mdi mdi-menu"></i>
                        </button>
                        <div class="app-search">
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="mdi mdi-magnify"></span>
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit">Buscar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                   
                    <!-- end Topbar -->
               </div>
       
            </div>

         @elseif ($rol== 'editor0')
            <div class="left-side-menu">

                <div class="slimscroll-menu">

                    <!-- LOGO -->
                    <a href="index.html" class="logo text-center">
                        <span class="logo-lg">
                            <img src="{{ asset('images/logo2.png') }}" alt="" height="60">
                        </span>
                        <span class="logo-sm">
                            <img src="{{ asset('images/logo_sm.png') }}" alt="" height="16">
                        </span>
                    </a>

                    <!--- Sidemenu -->
                    <ul class="metismenu side-nav">

                        <li class="side-nav-title side-nav-item">Administrativo- Editor lvl0</li>

                          <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="dripicons-meter"></i>
                                <span class="badge badge-success float-right">2</span>
                                <span> tablero</span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="{{ route('home') }}">Ver tablero</a>
                                </li>
                            </ul>
                        </li>
            
                     <li class="side-nav-title side-nav-item mt-1">Guias  </li>
                      
                        
                          <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="dripicons-briefcase"></i>
                                <span> Multis </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="{{ url('guias/multi_index/0') }}">Multis disponibles Tasks level 0</a>
                                </li>
                                                        
                            </ul>
                        </li>
                         <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="dripicons-document"></i>
                                <span>Guias y correcciones  </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="{{ url('corrections/index/0') }}">Guias y correcciones  lvl0</a>
                                </li>
                                <li>
                                    <a href="{{ url('corrections/index/1') }}">Guias y correcciones  lvl</a>
                                </li>
                            </ul>
                        </li>
                      
                       <li class="side-nav-title side-nav-item mt-1">Guias VPN</li>
                  
                          <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="dripicons-briefcase"></i>
                                <span> Multis VPN</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="{{ url('guias/multi_index/VPN0') }}">Multis disponibles VPN lvl0</a>
                                </li>                    
                            </ul>
                        </li>

                       
                         <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="dripicons-document"></i>
                                <span>Guias y correcciones VPN </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="{{ url('corrections/index_vpn/vpn0') }}">Guias y correcciones lvl0</a>
                                </li>
                                <li>
                                    <a href="{{ url('corrections/index_vpn/vpn') }}">Guias y Correcciones lvl</a>
                                </li>
                            </ul>
                        </li>
                     

                    
                    <!-- end Help Box -->
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

               <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Topbar Start -->
                    <div class="navbar-custom">
                        <ul class="list-unstyled topbar-right-menu float-right mb-0">
                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="dripicons-bell noti-icon"></i>
                                    <span class="noti-icon-badge"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg">

                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5 class="m-0">
                                            <span class="float-right">
                                                <a href="javascript: void(0);" class="text-dark">
                                                    <small>Marcar todo como leido</small>
                                                </a>
                                            </span>Notificación
                                        </h5>
                                    </div>

                                    <div class="slimscroll" style="max-height: 230px;">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-primary">
                                                <i class="mdi mdi-comment-account-outline"></i>
                                            </div>
                                            <p class="notify-details">Caleb Flakelar commented on Admin
                                                <small class="text-muted">1 min ago</small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-info">
                                                <i class="mdi mdi-account-plus"></i>
                                            </div>
                                            <p class="notify-details">New user registered.
                                                <small class="text-muted">5 hours ago</small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon">
                                                <img src="assets/images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                            <p class="notify-details">Cristina Pride</p>
                                            <p class="text-muted mb-0 user-msg">
                                                <small>Hi, How are you? What about our next meeting</small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-primary">
                                                <i class="mdi mdi-comment-account-outline"></i>
                                            </div>
                                            <p class="notify-details">Caleb Flakelar commented on Admin
                                                <small class="text-muted">4 days ago</small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon">
                                                <img src="{{ asset('images/users/avatar-4.jpg') }}" class="img-fluid rounded-circle" alt="" /> </div>
                                            <p class="notify-details">Karen Robinson</p>
                                            <p class="text-muted mb-0 user-msg">
                                                <small>Wow ! this admin looks good and awesome design</small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-info">
                                                <i class="mdi mdi-heart"></i>
                                            </div>
                                            <p class="notify-details">Carlos Crouch liked
                                                <b>Admin</b>
                                                <small class="text-muted">13 days ago</small>
                                            </p>
                                        </a>
                                    </div>

                                    <!-- All-->
                                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                        Ver todo
                                    </a>

                                </div>
                            </li>

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle nav-user arrow-none mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                                    aria-expanded="false">
                                   <span class="account-user-avatar"> 
                                        <img src="{{ asset('images/logo2.png') }}" alt="user-image" class="rounded-circle">
                                    </span>
                                    <span>
                                        <span class="account-user-name"> {{ Auth::user()->username }} </span>
                                        <span class="account-position">Editor</span>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                                    <!-- item-->
                                    <div class=" dropdown-header noti-title">
                                        <h6 class="text-overflow m-0">Bienvenido !</h6>
                                    </div>

                                   <!-- item-->
                                    <a href="{{ url('users/profile') }}" class="dropdown-item notify-item">
                                        <i class="mdi mdi-account-circle mr-1"></i>
                                        <span>Mi cuenta</span>
                                    </a>

                                    <!-- item-->
                                    <a href="{{ url('users/edit_profile') }}/{{ Auth::user()->id }}" class="dropdown-item notify-item">
                                        <i class="mdi mdi-account-edit mr-1"></i>
                                        <span>Configuración</span>
                                    </a>

                                     <!-- 
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-lifebuoy mr-1"></i>
                                        <span>Soporte</span>
                                    </a>-->
            
                                    <!-- 
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-lock-outline mr-1"></i>
                                        <span>Lock Screen</span>
                                    </a>-->

                                    <!-- item-->
                                   <a  id="a" class="dropdown-item notify-item">
                                        <i class="mdi mdi-logout mr-1"></i>
                                        {{ __('Logout') }}  
                                    </a>
                                    <form id="logout-form" name="storyForm" action="{{ url('users/logout')}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>


                                  <script>
                                        $('#a').click(function(e){
                                            e.preventDefault();
                                          

                                            Swal.fire({
                                              type: 'info',
                                              title: 'Salida de la plataforma!! ...',
                                              text: '¿Estas seguro de salir de la plataforma?, de igual manera recordamos que la plataforma  luego de algunos minutos cierra sesion por inactividad.',
                                              footer: 'Muchas gracias por elegirnos',
                                               showCloseButton: true,
                                              showCancelButton: true,
                                              focusConfirm: false,
                                               confirmButtonText: 'Si, deseo salir!',
                                               cancelButtonText: 'Cancelar',

                                              
                                            }).then((result) => {
                                                if(result.value){
                                                    document.storyForm.action = '{{ url('users/logout')}}';
                                                    document.storyForm.submit();
                                                } else {
                                                    Swal.fire('Cancelado', 'Buena elección :)', 'error');
                                                }
                                            }); 
                                        });


                                        
                                    </script>
                                </div>
                            </li>

                        </ul>
                        <button class="button-menu-mobile open-left disable-btn">
                            <i class="mdi mdi-menu"></i>
                        </button>
                        <div class="app-search">
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="mdi mdi-magnify"></span>
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit">Buscar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                   
                    <!-- end Topbar -->
               </div>
       
            </div>
         @elseif ($rol== 'task')
            <div class="left-side-menu">

                <div class="slimscroll-menu">

                    <!-- LOGO -->
                    <a href="index.html" class="logo text-center">
                        <span class="logo-lg">
                            <img src="{{ asset('images/logo2.png') }}" alt="" height="60">
                        </span>
                        <span class="logo-sm">
                            <img src="{{ asset('images/logo_sm.png') }}" alt="" height="16">
                        </span>
                    </a>

                    <!--- Sidemenu -->
                    <ul class="metismenu side-nav">

                        <li class="side-nav-title side-nav-item">Administrativo- Taskero de Level </li>

                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="dripicons-meter"></i>
                                <span class="badge badge-success float-right">2</span>
                                <span> tablero</span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="{{ route('home') }}">Ver tablero</a>
                                </li>
                            </ul>
                        </li>

                       <li class="side-nav-title side-nav-item mt-1">Guias  </li>
                      
                        
                      
                         <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="dripicons-document"></i>
                                <span>Guias y correcciones  </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="{{ url('corrections/index/0') }}">Guias y correcciones  lvl0</a>
                                </li>
                                <li>
                                    <a href="{{ url('corrections/index/1') }}">Guias y correcciones  lvl</a>
                                </li>
                            </ul>
                        </li>
                    
            
                    </ul>

                    <!-- Help Box -->
                    <div class="help-box text-white text-center">
                        <a href="javascript: void(0);" class="float-right close-btn text-white">
                            <i class="mdi mdi-close"></i>
                        </a>
                        <img src="{{ asset('/images/help-icon.svg') }}" height="90" alt="Helper Icon Image" />
                        <h5 class="mt-3">Bienvenido </h5>
                        <p class="mb-3">Recuerde hacer un uso correcto del sistema</p>
                        <a href="javascript: void(0);" class="btn btn-outline-light btn-sm">Hacemos este especio para su seguridad</a>
                    </div>
                    <!-- end Help Box -->
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

               <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Topbar Start -->
                    <div class="navbar-custom">
                        <ul class="list-unstyled topbar-right-menu float-right mb-0">
                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="dripicons-bell noti-icon"></i>
                                    <span class="noti-icon-badge"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg">

                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5 class="m-0">
                                            <span class="float-right">
                                                <a href="javascript: void(0);" class="text-dark">
                                                    <small>Marcar todo como leido</small>
                                                </a>
                                            </span>Notificación
                                        </h5>
                                    </div>

                                    <div class="slimscroll" style="max-height: 230px;">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-primary">
                                                <i class="mdi mdi-comment-account-outline"></i>
                                            </div>
                                            <p class="notify-details">Caleb Flakelar commented on Admin
                                                <small class="text-muted">1 min ago</small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-info">
                                                <i class="mdi mdi-account-plus"></i>
                                            </div>
                                            <p class="notify-details">New user registered.
                                                <small class="text-muted">5 hours ago</small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon">
                                                <img src="assets/images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                            <p class="notify-details">Cristina Pride</p>
                                            <p class="text-muted mb-0 user-msg">
                                                <small>Hi, How are you? What about our next meeting</small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-primary">
                                                <i class="mdi mdi-comment-account-outline"></i>
                                            </div>
                                            <p class="notify-details">Caleb Flakelar commented on Admin
                                                <small class="text-muted">4 days ago</small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon">
                                                <img src="{{ asset('images/users/avatar-4.jpg') }}" class="img-fluid rounded-circle" alt="" /> </div>
                                            <p class="notify-details">Karen Robinson</p>
                                            <p class="text-muted mb-0 user-msg">
                                                <small>Wow ! this admin looks good and awesome design</small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-info">
                                                <i class="mdi mdi-heart"></i>
                                            </div>
                                            <p class="notify-details">Carlos Crouch liked
                                                <b>Admin</b>
                                                <small class="text-muted">13 days ago</small>
                                            </p>
                                        </a>
                                    </div>

                                    <!-- All-->
                                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                        Ver todo
                                    </a>

                                </div>
                            </li>

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle nav-user arrow-none mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                                    aria-expanded="false">
                                    <span class="account-user-avatar"> 
                                        <img src="{{ asset('images/logo2.png') }}" alt="user-image" class="rounded-circle">
                                    </span>
                                    <span>
                                        <span class="account-user-name"> {{ Auth::user()->username }} </span>
                                        <span class="account-position">Taskero level</span>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                                    <!-- item-->
                                    <div class=" dropdown-header noti-title">
                                        <h6 class="text-overflow m-0">Bienvenido !</h6>
                                    </div>

                                  <!-- item-->
                                    <a href="{{ url('users/profile') }}" class="dropdown-item notify-item">
                                        <i class="mdi mdi-account-circle mr-1"></i>
                                        <span>Mi cuenta</span>
                                    </a>

                                    <!-- item-->
                                    <a href="{{ url('users/edit_profile') }}/{{ Auth::user()->id }}" class="dropdown-item notify-item">
                                        <i class="mdi mdi-account-edit mr-1"></i>
                                        <span>Configuración</span>
                                    </a>

                                  <!-- 
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-lifebuoy mr-1"></i>
                                        <span>Soporte</span>
                                    </a>-->
            
                                    <!-- 
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-lock-outline mr-1"></i>
                                        <span>Lock Screen</span>
                                    </a>-->
                                     <!-- item-->
                                   <a  id="a" class="dropdown-item notify-item">
                                        <i class="mdi mdi-logout mr-1"></i>
                                        {{ __('Logout') }}  
                                    </a>
                                    <form id="logout-form" name="storyForm" action="{{ url('users/logout')}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>


                                  <script>
                                        $('#a').click(function(e){
                                            e.preventDefault();
                                          

                                            Swal.fire({
                                              type: 'info',
                                              title: 'Salida de la plataforma!! ...',
                                              text: '¿Estas seguro de salir de la plataforma?, de igual manera recordamos que la plataforma  luego de algunos minutos cierra sesion por inactividad.',
                                              footer: 'Muchas gracias por elegirnos',
                                               showCloseButton: true,
                                              showCancelButton: true,
                                              focusConfirm: false,
                                               confirmButtonText: 'Si, deseo salir!',
                                               cancelButtonText: 'Cancelar',

                                              
                                            }).then((result) => {
                                                if(result.value){
                                                    document.storyForm.action = '{{ url('users/logout')}}';
                                                    document.storyForm.submit();
                                                } else {
                                                    Swal.fire('Cancelado', 'Buena elección :)', 'error');
                                                }
                                            }); 
                                        });


                                        
                                    </script>

                                </div>
                            </li>

                        </ul>
                        <button class="button-menu-mobile open-left disable-btn">
                            <i class="mdi mdi-menu"></i>
                        </button>
                        <div class="app-search">
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="mdi mdi-magnify"></span>
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit">Buscar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                   
                    <!-- end Topbar -->
               </div>
       
            </div>
            

            @elseif ($rol== 'vpnlevel')
            <div class="left-side-menu">

                <div class="slimscroll-menu">

                    <!-- LOGO -->
                    <a href="index.html" class="logo text-center">
                        <span class="logo-lg">
                            <img src="{{ asset('images/logo2.png') }}" alt="" height="60">
                        </span>
                        <span class="logo-sm">
                            <img src="{{ asset('images/logo_sm.png') }}" alt="" height="16">
                        </span>
                    </a>

                    <!--- Sidemenu -->
                    <ul class="metismenu side-nav">

                        <li class="side-nav-title side-nav-item">Administrativo- Taskero de Level </li>

                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="dripicons-meter"></i>
                                <span class="badge badge-success float-right">2</span>
                                <span> tablero</span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="{{ route('home') }}">Ver tablero</a>
                                </li>
                            </ul>
                        </li>

                    <li class="side-nav-title side-nav-item mt-1">Guias </li>
                       
                         <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="dripicons-document"></i>
                                <span>Guias y correcciones  </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="{{ url('corrections/index/0') }}">Guias y correcciones  lvl0</a>
                                </li>
                                <li>
                                    <a href="{{ url('corrections/index/1') }}">Guias y correcciones  lvl</a>
                                </li>
                               
                           <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="dripicons-document"></i>
                                <span>Guias y correcciones VPN </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="{{ url('corrections/index_vpn/vpn0') }}">Guias y correcciones lvl0</a>
                                </li>
                                <li>
                                    <a href="{{ url('corrections/index_vpn/vpn') }}">Guias y Correcciones lvl</a>
                                </li>
                            </ul>
                        </li>
                            </ul>
                        </li>

                    <!-- Help Box -->
                    <div class="help-box text-white text-center">
                        <a href="javascript: void(0);" class="float-right close-btn text-white">
                            <i class="mdi mdi-close"></i>
                        </a>
                        <img src="{{ asset('/images/help-icon.svg') }}" height="90" alt="Helper Icon Image" />
                        <h5 class="mt-3">Bienvenido </h5>
                        <p class="mb-3">Recuerde hacer un uso correcto del sistema</p>
                        <a href="javascript: void(0);" class="btn btn-outline-light btn-sm">Hacemos este especio para su seguridad</a>
                    </div>
                    <!-- end Help Box -->
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

               <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Topbar Start -->
                    <div class="navbar-custom">
                        <ul class="list-unstyled topbar-right-menu float-right mb-0">
                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="dripicons-bell noti-icon"></i>
                                    <span class="noti-icon-badge"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg">

                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5 class="m-0">
                                            <span class="float-right">
                                                <a href="javascript: void(0);" class="text-dark">
                                                    <small>Marcar todo como leido</small>
                                                </a>
                                            </span>Notificación
                                        </h5>
                                    </div>

                                    <div class="slimscroll" style="max-height: 230px;">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-primary">
                                                <i class="mdi mdi-comment-account-outline"></i>
                                            </div>
                                            <p class="notify-details">Caleb Flakelar commented on Admin
                                                <small class="text-muted">1 min ago</small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-info">
                                                <i class="mdi mdi-account-plus"></i>
                                            </div>
                                            <p class="notify-details">New user registered.
                                                <small class="text-muted">5 hours ago</small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon">
                                                <img src="assets/images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                            <p class="notify-details">Cristina Pride</p>
                                            <p class="text-muted mb-0 user-msg">
                                                <small>Hi, How are you? What about our next meeting</small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-primary">
                                                <i class="mdi mdi-comment-account-outline"></i>
                                            </div>
                                            <p class="notify-details">Caleb Flakelar commented on Admin
                                                <small class="text-muted">4 days ago</small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon">
                                                <img src="{{ asset('images/users/avatar-4.jpg') }}" class="img-fluid rounded-circle" alt="" /> </div>
                                            <p class="notify-details">Karen Robinson</p>
                                            <p class="text-muted mb-0 user-msg">
                                                <small>Wow ! this admin looks good and awesome design</small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-info">
                                                <i class="mdi mdi-heart"></i>
                                            </div>
                                            <p class="notify-details">Carlos Crouch liked
                                                <b>Admin</b>
                                                <small class="text-muted">13 days ago</small>
                                            </p>
                                        </a>
                                    </div>

                                    <!-- All-->
                                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                        Ver todo
                                    </a>

                                </div>
                            </li>

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle nav-user arrow-none mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                                    aria-expanded="false">
                                    <span class="account-user-avatar"> 
                                        <img src="{{ asset('images/logo2.png') }}" alt="user-image" class="rounded-circle">
                                    </span>                                    <span>
                                        <span class="account-user-name"> {{ Auth::user()->username }} </span>
                                        <span class="account-position">Taskero Level / VPN</span>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                                    <!-- item-->
                                    <div class=" dropdown-header noti-title">
                                        <h6 class="text-overflow m-0">Bienvenido !</h6>
                                    </div>
                                   <!-- item-->
                                    <a href="{{ url('users/profile') }}" class="dropdown-item notify-item">
                                        <i class="mdi mdi-account-circle mr-1"></i>
                                        <span>Mi cuenta</span>
                                    </a>

                                    <!-- item-->
                                    <a href="{{ url('users/edit_profile') }}/{{ Auth::user()->id }}" class="dropdown-item notify-item">
                                        <i class="mdi mdi-account-edit mr-1"></i>
                                        <span>Configuración</span>
                                    </a>
                                    <!-- 
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-lifebuoy mr-1"></i>
                                        <span>Soporte</span>
                                    </a>-->
            
                                    <!-- 
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-lock-outline mr-1"></i>
                                        <span>Lock Screen</span>
                                    </a>--> 
                                      <!-- item-->
                                   <a  id="a" class="dropdown-item notify-item">
                                        <i class="mdi mdi-logout mr-1"></i>
                                        {{ __('Logout') }}  
                                    </a>
                                    <form id="logout-form" name="storyForm" action="{{ url('users/logout')}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>


                                  <script>
                                        $('#a').click(function(e){
                                            e.preventDefault();
                                          

                                            Swal.fire({
                                              type: 'info',
                                              title: 'Salida de la plataforma!! ...',
                                              text: '¿Estas seguro de salir de la plataforma?, de igual manera recordamos que la plataforma  luego de algunos minutos cierra sesion por inactividad.',
                                              footer: 'Muchas gracias por elegirnos',
                                               showCloseButton: true,
                                              showCancelButton: true,
                                              focusConfirm: false,
                                               confirmButtonText: 'Si, deseo salir!',
                                               cancelButtonText: 'Cancelar',

                                              
                                            }).then((result) => {
                                                if(result.value){
                                                    document.storyForm.action = '{{ url('users/logout')}}';
                                                    document.storyForm.submit();
                                                } else {
                                                    Swal.fire('Cancelado', 'Buena elección :)', 'error');
                                                }
                                            }); 
                                        });


                                        
                                    </script>

                                </div>
                            </li>

                        </ul>
                        <button class="button-menu-mobile open-left disable-btn">
                            <i class="mdi mdi-menu"></i>
                        </button>
                        <div class="app-search">
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="mdi mdi-magnify"></span>
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit">Buscar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                   
                    <!-- end Topbar -->
               </div>
       
            </div>

          @elseif ($rol== 'task0')
            <div class="left-side-menu">

                <div class="slimscroll-menu">

                    <!-- LOGO -->
                    <a href="index.html" class="logo text-center">
                        <span class="logo-lg">
                            <img src="{{ asset('images/logo2.png') }}" alt="" height="60">
                        </span>
                        <span class="logo-sm">
                            <img src="{{ asset('images/logo_sm.png') }}" alt="" height="16">
                        </span>
                    </a>

                    <!--- Sidemenu -->
                    <ul class="metismenu side-nav">

                        <li class="side-nav-title side-nav-item">Administrativo- Taskero de Level 0 </li>

                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="dripicons-meter"></i>
                                <span class="badge badge-success float-right">2</span>
                                <span> tablero</span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="{{ route('home') }}">Ver tablero</a>
                                </li>
                            </ul>
                        </li>
                  <li class="side-nav-title side-nav-item mt-1">Guias </li>
                       
                      
                         <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="dripicons-document"></i>
                                <span>Guias y Correcciones </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="{{ url('corrections/index/0') }}">Guias y correcciones lvl0</a>
                                </li>
                            </ul>
                        </li>

            
                    </ul>

                    <!-- Help Box -->
                    <div class="help-box text-white text-center">
                        <a href="javascript: void(0);" class="float-right close-btn text-white">
                            <i class="mdi mdi-close"></i>
                        </a>
                        <img src="{{ asset('/images/help-icon.svg') }}" height="90" alt="Helper Icon Image" />
                        <h5 class="mt-3">Bienvenido </h5>
                        <p class="mb-3">Recuerde hacer un uso correcto del sistema</p>
                        <a href="javascript: void(0);" class="btn btn-outline-light btn-sm">Hacemos este especio para su seguridad</a>
                    </div>
                    <!-- end Help Box -->
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

               <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Topbar Start -->
                    <div class="navbar-custom">
                        <ul class="list-unstyled topbar-right-menu float-right mb-0">
                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="dripicons-bell noti-icon"></i>
                                    <span class="noti-icon-badge"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg">

                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5 class="m-0">
                                            <span class="float-right">
                                                <a href="javascript: void(0);" class="text-dark">
                                                    <small>Marcar todo como leido</small>
                                                </a>
                                            </span>Notificación
                                        </h5>
                                    </div>

                                    <div class="slimscroll" style="max-height: 230px;">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-primary">
                                                <i class="mdi mdi-comment-account-outline"></i>
                                            </div>
                                            <p class="notify-details">Caleb Flakelar commented on Admin
                                                <small class="text-muted">1 min ago</small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-info">
                                                <i class="mdi mdi-account-plus"></i>
                                            </div>
                                            <p class="notify-details">New user registered.
                                                <small class="text-muted">5 hours ago</small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon">
                                                <img src="assets/images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                            <p class="notify-details">Cristina Pride</p>
                                            <p class="text-muted mb-0 user-msg">
                                                <small>Hi, How are you? What about our next meeting</small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-primary">
                                                <i class="mdi mdi-comment-account-outline"></i>
                                            </div>
                                            <p class="notify-details">Caleb Flakelar commented on Admin
                                                <small class="text-muted">4 days ago</small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon">
                                                <img src="{{ asset('images/users/avatar-4.jpg') }}" class="img-fluid rounded-circle" alt="" /> </div>
                                            <p class="notify-details">Karen Robinson</p>
                                            <p class="text-muted mb-0 user-msg">
                                                <small>Wow ! this admin looks good and awesome design</small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-info">
                                                <i class="mdi mdi-heart"></i>
                                            </div>
                                            <p class="notify-details">Carlos Crouch liked
                                                <b>Admin</b>
                                                <small class="text-muted">13 days ago</small>
                                            </p>
                                        </a>
                                    </div>

                                    <!-- All-->
                                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                        Ver todo
                                    </a>

                                </div>
                            </li>

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle nav-user arrow-none mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                                    aria-expanded="false">
                                    <span class="account-user-avatar"> 
                                        <img src="{{ asset('images/logo2.png') }}" alt="user-image" class="rounded-circle">
                                    </span>
                                    <span>
                                        <span class="account-user-name"> {{ Auth::user()->username }} </span>
                                        <span class="account-position">Taskero level 0</span>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                                    <!-- item-->
                                    <div class=" dropdown-header noti-title">
                                        <h6 class="text-overflow m-0">Bienvenido !</h6>
                                    </div>
                                   <!-- item-->
                                    <a href="{{ url('users/profile') }}" class="dropdown-item notify-item">
                                        <i class="mdi mdi-account-circle mr-1"></i>
                                        <span>Mi cuenta</span>
                                    </a>

                                    <!-- item-->
                                    <a href="{{ url('users/edit_profile') }}/{{ Auth::user()->id }}" class="dropdown-item notify-item">
                                        <i class="mdi mdi-account-edit mr-1"></i>
                                        <span>Configuración</span>
                                    </a>

                                    <!-- 
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-lifebuoy mr-1"></i>
                                        <span>Soporte</span>
                                    </a>-->
            
                                    <!-- 
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-lock-outline mr-1"></i>
                                        <span>Lock Screen</span>
                                    </a>-->

                                  <!-- item-->
                                   <a  id="a" class="dropdown-item notify-item">
                                        <i class="mdi mdi-logout mr-1"></i>
                                        {{ __('Logout') }}  
                                    </a>
                                    <form id="logout-form" name="storyForm" action="{{ url('users/logout')}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>


                                  <script>
                                        $('#a').click(function(e){
                                            e.preventDefault();
                                          

                                            Swal.fire({
                                              type: 'info',
                                              title: 'Salida de la plataforma!! ...',
                                              text: '¿Estas seguro de salir de la plataforma?, de igual manera recordamos que la plataforma  luego de algunos minutos cierra sesion por inactividad.',
                                              footer: 'Muchas gracias por elegirnos',
                                               showCloseButton: true,
                                              showCancelButton: true,
                                              focusConfirm: false,
                                               confirmButtonText: 'Si, deseo salir!',
                                               cancelButtonText: 'Cancelar',

                                              
                                            }).then((result) => {
                                                if(result.value){
                                                    document.storyForm.action = '{{ url('users/logout')}}';
                                                    document.storyForm.submit();
                                                } else {
                                                    Swal.fire('Cancelado', 'Buena elección :)', 'error');
                                                }
                                            }); 
                                        });    
                                    </script>

                                </div>
                            </li>

                        </ul>
                        <button class="button-menu-mobile open-left disable-btn">
                            <i class="mdi mdi-menu"></i>
                        </button>
                        <div class="app-search">
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="mdi mdi-magnify"></span>
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit">Buscar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                   
                    <!-- end Topbar -->
               </div>
       
            </div>   

          @elseif ($rol== 'buyer')
            <div class="left-side-menu">

                <div class="slimscroll-menu">

                    <!-- LOGO -->
                    <a href="index.html" class="logo text-center">
                        <span class="logo-lg">
                            <img src="{{ asset('images/logo2.png') }}" alt="" height="60">
                        </span>
                        <span class="logo-sm">
                            <img src="{{ asset('images/logo_sm.png') }}" alt="" height="16">
                        </span>
                    </a>

                    <!--- Sidemenu -->
                    <ul class="metismenu side-nav">

                        <li class="side-nav-title side-nav-item">Administrativo- Compradores </li>

                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="dripicons-meter"></i>
                                <span class="badge badge-success float-right">2</span>
                                <span> tablero</span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="index.html">Ver tablero</a>
                                </li>
                            </ul>
                        </li>

                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="dripicons-graph-pie"></i>
                                <span> Compradores </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="charts-chartjs.html">Lista de compradores</a>
                                </li>
                                <li>
                                    <a href="charts-brite.html"> Compradores Lista negra</a>
                                </li>
                            </ul>
                        </li>

                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="dripicons-list"></i>
                                <span> Productos a la venta </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="tables-basic.html">Lista de productos </a>
                                </li>
                                <li>
                                    <a href="tables-datatable.html">Ingresar prodcuto para vender</a>
                                </li>
                            </ul>
                        </li>
                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="dripicons-list"></i>
                                <span> Cuentas a la venta </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="tables-basic.html">Lista de cuentas disponibles </a>
                                </li>
                                <li>
                                    <a href="tables-datatable.html">Ingresar cuentas a la Venta</a>
                                </li>
                            </ul>
                        </li>
            
                    </ul>

                    <!-- Help Box -->
                    <div class="help-box text-white text-center">
                        <a href="javascript: void(0);" class="float-right close-btn text-white">
                            <i class="mdi mdi-close"></i>
                        </a>
                        <img src="{{ asset('/images/help-icon.svg') }}" height="90" alt="Helper Icon Image" />
                        <h5 class="mt-3">Bienvenido </h5>
                        <p class="mb-3">Recuerde hacer un uso correcto del sistema</p>
                        <a href="javascript: void(0);" class="btn btn-outline-light btn-sm">Hacemos este especio para su seguridad</a>
                    </div>
                    <!-- end Help Box -->
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

               <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Topbar Start -->
                    <div class="navbar-custom">
                        <ul class="list-unstyled topbar-right-menu float-right mb-0">

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle nav-user arrow-none mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                                    aria-expanded="false">
                                     <span class="account-user-avatar"> 
                                        <img src="{{ asset('images/logo2.png') }}" alt="user-image" class="rounded-circle">
                                    </span>
                                    <span>
                                        <span class="account-user-name"> {{ Auth::user()->username }} </span>
                                        <span class="account-position">Comprador</span>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                                    <!-- item-->
                                    <div class=" dropdown-header noti-title">
                                        <h6 class="text-overflow m-0">Bienvenido !</h6>
                                    </div>

                                  <!-- item-->
                                    <a href="{{ url('users/profile') }}" class="dropdown-item notify-item">
                                        <i class="mdi mdi-account-circle mr-1"></i>
                                        <span>Mi cuenta</span>
                                    </a>

                                    <!-- item-->
                                    <a href="{{ url('users/edit_profile') }}/{{ Auth::user()->id }}" class="dropdown-item notify-item">
                                        <i class="mdi mdi-account-edit mr-1"></i>
                                        <span>Configuración</span>
                                    </a>

                                    <!--
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-lifebuoy mr-1"></i>
                                        <span>Soporte</span>
                                    </a> item-->

                                    <!--
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-lock-outline mr-1"></i>
                                        <span>Lock Screen</span>
                                    </a> item-->
  <!-- item-->
                                   <a  id="a" class="dropdown-item notify-item">
                                        <i class="mdi mdi-logout mr-1"></i>
                                        {{ __('Logout') }}  
                                    </a>
                                    <form id="logout-form" name="storyForm" action="{{ url('users/logout')}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>


                                  <script>
                                        $('#a').click(function(e){
                                            e.preventDefault();
                                          

                                            Swal.fire({
                                              type: 'info',
                                              title: 'Salida de la plataforma!! ...',
                                              text: '¿Estas seguro de salir de la plataforma?, de igual manera recordamos que la plataforma  luego de algunos minutos cierra sesion por inactividad.',
                                              footer: 'Muchas gracias por elegirnos',
                                               showCloseButton: true,
                                              showCancelButton: true,
                                              focusConfirm: false,
                                               confirmButtonText: 'Si, deseo salir!',
                                               cancelButtonText: 'Cancelar',

                                              
                                            }).then((result) => {
                                                if(result.value){
                                                    document.storyForm.action = '{{ url('users/logout')}}';
                                                    document.storyForm.submit();
                                                } else {
                                                    Swal.fire('Cancelado', 'Buena elección :)', 'error');
                                                }
                                            }); 
                                        });


                                        
                                    </script>

                                </div>
                            </li>

                        </ul>
                        <button class="button-menu-mobile open-left disable-btn">
                            <i class="mdi mdi-menu"></i>
                        </button>
                        <div class="app-search">
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="mdi mdi-magnify"></span>
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit">Buscar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                   
                    <!-- end Topbar -->
               </div>
       
            </div>   

@endif

<!--
<div id="app">  
 <main class="py-4">
            @yield('content')
        </main>

</div>
-->