
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
                             <a href="{{url('/')}}" class="topnav-logo">
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
                                            <a class="nav-link dropdown-toggle arrow-none" href="{{url('/')}}" id="topnav-dashboards" >
                                                <i class="mdi mdi-speedometer mr-1"></i>Inicio
                                            </a>
                                            
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle arrow-none animsition-link" href="{{route('nosotros')}}">
                                                <i class="mdi mdi-apps mr-1"></i>Nosotros 
                                            </a>
                                           
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle arrow-none" href="{{route('requisitos')}}" >
                                                <i class="mdi mdi-buffer mr-1"></i>Requisitos
                                            </a>
                                        </li>
                                         <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle arrow-none animsition-link" 
                                          data-animsition-out-class="fade-out-right"
                                          data-animsition-out-duration="2000" href="{{route('post.index')}}">
                                                <i class="mdi mdi-google-pages mr-1"></i>Blog
                                            </a>
                                        </li>
                                
                                    </ul>
                                 </div>
                              </nav>
                            </div>  
                    </div>

      
         <br>
         <div class="container-fluid">
          <!-- start page title -->
                        <div class="row">
                            <div class="col-12 text-center">
                                <div class="page-title-box">
                                    <span class="topnav-logo-lg">
                                    <img src="{{ asset('images/logofigure2.png') }}" alt="" height="100">
                                </span>
                                    <h4 class="page-title">Blog de Figure Eight Task</h4>

                                </div>
                            </div>
                            @if(!empty($rol))
                                 @if(($rol=='admin')||($rol=='foun'))
                                    <div class="col-10"></div>
                                     <div class="col-2">
                                         <a class="btn btn-danger btn-rounded mb-3" href="{{route('post.create')}}">
                                                <i class="mdi mdi-plus"></i> Crear Post nuevo
                                            </a>
                                           
                                      </div>
                                  @endif
                              @endif
                        </div>     
                      @foreach($posts as $post)
                      <div class="row">
                        <div class="col-md-1"></div>
                            <div class="col-md-10 col-md-4">
                                <!-- project card -->
                                <div class="card d-block">
                                    <div class="card-body">
                                         @if(!empty(Auth::user()))
                                           @if(!empty($rol))
                                                 @if(($rol=='admin')||($rol=='foun'))
                                                        <div class="dropdown float-right">
                                                           
                                                              <a href="/post/destroy/{{$post->id}}" class="btn btn-secondary" title="Eliminar post"><i class="mdi mdi-delete"></i></a>
                                                            
                                                        </div>
                                                  @endif
                                              @endif
                                      
                                        @endif
                                      <?php $count_comment=count($post->comments);
                                            $user=$post->user;
                                            $name_user=$user->username;
                                          ?>
                                        <!-- project title-->
                                        <h1 class="mt-0">
                                            <a href="{{ route('post.show',['post'=>$post])}}" class="text-title">{{ $post->title}}
                                        </h1>
                                        <div class="badge badge-secondary mb-3"><h3>Post informativo</h3></div>

                                        <h4 class="text-muted font-13 mb-3">{{$post->description}}<a href="{{ route('post.show',['post'=>$post])}}" class="font-weight-bold text-muted">...Ver mas</a>
                                        </h4>

                                        <!-- project detail-->
                                        <p class="mb-1">
                                            <!--<span class="pr-2 text-nowrap mb-2 d-inline-block">
                                                <i class="mdi mdi-format-list-bulleted-type text-muted"></i>
                                                <b>21</b> Tasks
                                            </span>-->
                                            <span class="text-nowrap mb-2 d-inline-block">
                                                <i class="mdi mdi-comment-multiple-outline text-muted"></i>
                                                <b>{{$count_comment}}</b> comentarios
                                            </span>
                                        </p>
                                        <div>
                                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mat Helme" class="d-inline-block">
                                                <img src="{{ asset('images/')}}/{{$user->img_profile}}" class="rounded-circle avatar-xs" alt="friend">
                                            </a>
                                               Publicado por {{$name_user}} 
                                               <div class="text-md-right mb-3">{{ \Carbon\Carbon::parse($post->created_at)->diffForHumans() }}</div>
                                               
                                            </a>
                                        </div>
                                    </div> <!-- end card-body-->
                                  
                                </div> <!-- end card-->
                            </div> <!-- end col -->

                        </div>
                   

                  @endforeach
                  <div class="row">
                     <div class="col-md-1"></div>
                            <div class="col-md-10 col-md-4">
                                 {{$posts->links()}}
                             </div>

                  </div>
          </div>
        <!-- end page -->
    </body><br><br>

  

   @include('layouts.footer')


</html>
