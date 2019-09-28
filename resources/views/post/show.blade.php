
@include('layouts.head')
        <style>
 
             .wow:first-child {
      visibility: hidden;
    }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #aab8c5;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
           
        </style>


        <body>
        <!-- Topbar Start -->
                    <div class="navbar-custom topnav-navbar">
                        <div class="container-fluid">

                            <!-- LOGO -->
                            <a href="index.html" class="topnav-logo">
                                <span class="topnav-logo-lg">
                                    <img src="{{ asset('images/logo2.png') }}" alt="" height="100">
                                </span>
                                <span class="topnav-logo-sm">
                                    <img src="assets/images/logo_sm.png" alt="" height="16">
                                </span>
                            </a>
                            <ul class="list-unstyled topbar-center-menu float-center mb-12">
                                <br>
                                <div class="row">
                                      <div class="app-search">
                                    <form>
                                        <div class="input-group">
                                            <p>LLamanos al +51 939 824 399</p>
                                            <div class="text-center">
                                                
                                                 <img src="{{ asset('images/logofigure2_te.png') }}" alt="" style="right:  100px;" height="40">
                                            </div>
                                           

                                        </div>
                                    </form>
                                </div>  
                                </div>
                               
                                    
                            </ul>
                              
                            <ul class="list-unstyled topbar-right-menu float-right mb-0">
                             
                                        

                                     @if (Route::has('login'))
                                    <div class="top-right links">

                                        @auth
                                            <a href="{{ url('/home') }}"><span class="text-muted ">Home</span></a>
                                        @else
                                            <a href="{{ route('login') }}" class="btn btn-rounded  btn-lg  btn-secondary"  style="top:-30px"><h5>Iniciar Sesion</h5></a>
                                         <?php
                                
                                            $registers = DB::table('registers')->get();
                                            $register=$registers->last();

                                    ?>
                                 
                                    @if($register->status=="si")
                                         @if (Route::has('register'))
                                                        <a href="{{ route('people.create') }}" class=" btn btn-rounded  btn-dark"><h5>Registro de Personas</h5></a>
                                                    @endif
                                                @endauth
                                        @endif   
                                    @else
                                  
                                    @endif    
                                    </div>
                            </ul>
                        </div>
                    </div>
                    <div class="topnav">
                                <div class="container">
                                    <nav class="navbar navbar-dark navbar-expand-lg topnav-menu">
                
                                        <div class="collapse navbar-collapse" id="topnav-menu-content">
                                            <ul class="navbar-nav">
                                                <li class="nav-item dropdown">
                                                    <a class="nav-link dropdown-toggle arrow-none" href="layouts-horizontal.html#" id="topnav-dashboards" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="mdi mdi-speedometer mr-1"></i>Inicio
                                                    </a>
                                                    
                                                </li>
                                                <li class="nav-item dropdown">
                                                    <a class="nav-link dropdown-toggle arrow-none " href="#nosotros">
                                                        <i class="mdi mdi-apps mr-1"></i>Nosotros 
                                                    </a>
                                                   
                                                </li>
                                                  <li class="nav-item dropdown">
                                                    <a class="nav-link dropdown-toggle arrow-none" href="#requisitos" >
                                                        <i class="mdi mdi-buffer mr-1"></i>Requisitos
                                                    </a>
                                                </li>
                                                 <li class="nav-item dropdown">
                                                    <a class="nav-link dropdown-toggle arrow-none" href="{{route('post.index')}}">
                                                        <i class="mdi mdi-google-pages mr-1"></i>Blog
                                                    </a>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                    </nav>
                                </div>
                    </div>
                         <?php $count_comment=count($post->comments);
                                $user=$post->user;
                                $name_user=$user->username;
                                $comments=$post->comments;
                             ?>
      
                     <br>

                     <div class="container-fluid">
                         <!-- start page title -->
                        <div class="row">
                           <div class="col-2"></div>
                            <div class="col-8">
                                <div class="page-title-box">
                                   
                                    <h4 class="page-title">Detalles del Post</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 
                        
                                    <div class="row">
                                        <div class="col-md-2"></div>
                                        <div class="col-md-8">
                                            <!-- project card -->
                                            <div class="card d-block">
                                                <div class="card-body">
                                                    <div class="dropdown float-right">
                                                        <a href="apps-projects-details.html#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                                            <i class="dripicons-dots-3"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-142px, 20px, 0px);">
                                                            <!-- item-->
                                                            <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-pencil mr-1"></i>Edit</a>
                                                            <!-- item-->
                                                            <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-delete mr-1"></i>Delete</a>
                                                            <!-- item-->
                                                            <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-email-outline mr-1"></i>Invite</a>
                                                            <!-- item-->
                                                            <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-exit-to-app mr-1"></i>Leave</a>
                                                        </div>
                                                    </div>
                                                    <!-- project title-->
                                                    <h3 class="mt-0">
                                                        {{$post->title}}
                                                    </h3>
                                                    <div class="badge badge-secondary mb-3">Post informativo</div>

                                                    <h5>Contenido de Post:</h5>

                                                    <p class="text-muted mb-2">
                                                        {{$post->content}}.
                                                    </p>

                                                  

                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="mb-4">
                                                                <h5>Fecha de creación</h5>
                                                                <p>{{ \Carbon\Carbon::parse($post->created_at)->diffForHumans() }} </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-4">
                                                                <h5>Ultima actualización</h5>
                                                                <p>{{ \Carbon\Carbon::parse($post->update_at)->diffForHumans() }}</p>
                                                            </div>
                                                        </div>
                                                       
                                                    </div>

                                                    <div>
                                                        <h5>Publicado por:</h5>
                                                        <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mat Helme" class="d-inline-block">
                                                            <img src="{{ asset('images/')}}/{{$user->img_profile}}" class="rounded-circle img-thumbnail avatar-sm" alt="friend">
                                                        </a>
                                                          {{$name_user}} 
                
                                                       
                                                    </div>

                                                </div> <!-- end card-body-->
                                                
                                            </div> <!-- end card-->

                                            <div class="card">
                                                <div class="card-body">
                                                    
                                                    <h4 class="mt-0 mb-3">Comentarios ({{$count_comment}} )</h4>

                                                    <textarea class="form-control form-control-light mb-2" placeholder="Escribir mensaje" id="example-textarea" rows="3"></textarea>
                                                      @if(!empty(Auth::user()))
                                                     
                                                     @else
                                                       <h4>Nombre:</h4>
                                                     {!! Form::text('name','',['class'=> 'form-control', 'id'=>"validationTooltip01", "placeholder"=>"Nombre de usuario", "required", 'value'=>"{{old('name')}}"]) !!}
                                                     @endif
                                                        <div class="text-right">
                                                            <div class="btn-group mb-2">
                                                                <button type="button" class="btn btn-link btn-sm text-muted font-18"><i class="dripicons-paperclip"></i></button>
                                                            </div>
                                                            <div class="btn-group mb-2 ml-2">
                                                                <button type="button" class="btn btn-primary btn-sm">Enviar</button>
                                                            </div>
                                                        </div>

                                                        
                                                          @foreach($comments as $comment)
                                                        <div class="media mt-2">
                                                            <img class="mr-3 avatar-sm rounded-circle" src="{{ asset('images/logo2.png') }}" alt="Generic placeholder image">
                                                            <div class="media-body">
                                                                <h5 class="mt-0">Comentario del usuario</h5>
                                                                {{$comment->content}}
                                                        
                                                              
                                                                    <!--
                                                                          <div class="media mt-3">
                                                                    <a class="pr-3" href="apps-projects-details.html#">
                                                                        <img src="" class="avatar-sm rounded-circle" alt="Generic placeholder image">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <h5 class="mt-0">Kathleen Thomas</h5>
                                                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in
                                                                        vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue
                                                                        felis in faucibus.
                                                                    </div>
                                                                    </div>
                                                                -->
                                                                
                                                            </div>
                                                        </div>
                                                        @endforeach

                                                        <div class="text-center mt-2">
                                                            <a href="javascript:void(0);" class="text-danger">Load more </a>
                                                        </div>
                                                </div> <!-- end card-body-->
                                            </div>
                                            <!-- end card-->
                                        </div> <!-- end col -->

                                        <div class="col-md-2"></div>

                                 </div>
                            </div>
                                       
                      </div>
        <!-- end page -->
    </body><br><br>

  

     <!-- Footer Start -->
                <footer class="footer" onmousedown='return false;' onselectstart="return false;">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                2018 - 2019 ©Figure Eight Task
                            </div>
                           
                           
                            <div class="col-md-6">

                                <div class="text-md-right footer-links d-none d-md-block">
                                     <a href="javascript: void(0);">Contactanos</a>
                                       <a href="https://www.facebook.com/f8task/"  target="_blank"   class="btn btn-primary btn-sm mt-2 ml-1"><i class=" mdi mdi-facebook  mr-1"></i></a>
                                    <a href="https://www.instagram.com/f8task/"  target="_blank"  class="btn btn-primary btn-sm mt-2 ml-1" ><i class="  mdi mdi-instagram   mr-1"></i></a>
                                    <a href="https://www.youtube.com/channel/UC1Qzqg18r_VghlQjZiNk2MA/videos"  target="_blank"  class="btn btn-danger btn-sm mt-2 ml-1" ><i class="  mdi mdi-youtube mr-1"></i></a>
                                 <a href="javascript: void(0);">Acerca de nosotros</a>
                                    <a href="javascript: void(0);">Soporte</a>

                                 
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

</html>
