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
                            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show ">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                        
                                    <div class="row">
                                    
                                        <div class="col-md-12">
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
                                                  
                                                    <!-- project title-->
                                                    <h3 class="mt-0">
                                                        {{$post->title}}
                                                    </h3>

                                                
                                                    <div class="">Post informativo</div>

                                                    <h5>Contenido de Post:</h5>
                                                       <ul class="">
                                                       
                                                        <li class="">
                                                            <div class="mb-2">
                                                                <h5 class="mb-1">Click a editar, si requiere hacerlo</h5>
                                                                
                                                                    <div id="editor2">
                                                                          {!! $post->content !!}
                                                                    </div>
                                                                   <div id="editor1">
                                                                        {!! Form::open(['url' => ['/post/update',$post->id]]) !!}
                                                                            @method('PUT')  
                                                                          <textarea name="content"  id="summernote-basic">{!! $post->content !!}</textarea> 
                                                                           <button id="guardar" type="submit" class="btn btn-success btn-sm mt-2" ><i class="mdi mdi-content-save-outline mr-1"></i> Guardar</button>
                                                                              {!! Form::close() !!}
                                                                   </div> 
                                                               
                                                              
                                                               
                                                            </div>
                                                        </li>
                                                    </ul> <!-- end list-->
                                                 
                                                     <button id="edit" class="btn btn-primary btn-sm"><i class="mdi mdi-pencil mr-1"></i> Edit</button>
                                                                
                                                    <p class="text-muted mb-2">
                                                       
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
                                                            {!! Form::open(['url' => '/comments','class' => 'needs-validation']) !!}   

                                                            @csrf
                                                            <h4 class="mt-0 mb-3">Comentarios ({{$count_comment}} )</h4>
                                                            
                                                            <textarea class="form-control form-control-light mb-2"  id="validationTooltip01" name="comentario" placeholder="Escribir mensaje" id="example-textarea" rows="3" required>{{old('comentario')}}</textarea>

                                                            <div class="valid-tooltip">
                                                                Muy bien
                                                            </div>
                                                            <div class="invalid-tooltip">
                                                               El campo no puede quedar vacio
                                                            </div>
                                                            <input type="hidden" name="post_id" value=" {{$post->id}}">
                                                                  
                                                              @if(!empty(Auth::user()))
                                                              
                                                           

                                                             @else
                                                               
                                                             {!! Form::text('name_desconocido','',['class'=> 'form-control', 'id'=>"validationTooltip02", "placeholder"=>"Nombre de usuario", "required", 'value'=>"{{old('name_desconocido')}}"]) !!}
                                                               <div class="valid-tooltip">
                                                                Muy bien
                                                            </div>
                                                            <div class="invalid-tooltip">
                                                               El campo no puede quedar vacio
                                                            </div>
                                                             @endif
                                                             <h4>Nombre:</h4>
                                                                <div class="text-right">
                                                                    <div class="btn-group mb-2 ml-2">
                                                                        <input type="submit" value="Enviar" class="btn btn-primary">
                                                                    </div>
                                                                </div>

                                                                {!! Form::close() !!}
                                                                
                                                                  @foreach($comments as $comment)
                                                                <div class="media mt-2">
                                                                    @if($comment->user_id!=NULL)
                                                                     <?php
                                
                                                                        $user = DB::table('users')
                                                                    ->where('users.id',$comment->user_id)
                                                                    ->get();
                                                                     
                                                                        ?>
                                                                        @if($user[0]->img_profile!=NULL)
                                                                        
                                                                        <img class="mr-2 avatar-sm rounded-circle" src="{{ asset('images/')}}/{{$user[0]->img_profile}}" alt="Generic placeholder image">
                                                                        @else
                                                                       <img class="mr-2 avatar-sm rounded-circle" src="{{ asset('images/users/desconocido.jpg') }}" alt="Generic placeholder image">
                                                                        @endif

                                                                    @else
                                                                    <img class="mr-2 avatar-sm rounded-circle" src="{{ asset('images/users/desconocido.jpg') }}" alt="Generic placeholder image">
                                                                    @endif
                                                                    <div class="media-body">

                                                                        <h5 class="mt-0">{{$comment->name_desconocido}}</h5>
                                                                        {{$comment->content}}  

                                                          
                                                                    </div>
                                                                     @if(!empty(Auth::user()))
                                                                       @if(!empty($rol))
                                                                             @if(($rol=='admin')||($rol=='foun'))
                                                                                  <a href="/comments/destroy/{{$comment->id}}" class="btn btn-secondary"> <i class="mdi mdi-delete"></i></a>
                                                                              @endif
                                                                          @endif
                                                                  
                                                                    @endif
                                                                   
                                                                </div>
                                                                <br>
                                                                @endforeach

                                                                
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

  <script type="text/javascript">
        $(document).ready(function() {
            $('#editor1').hide();
            $('#guardar').hide();
            $("#edit").click(function(){
                $("#editor1").show();
                  $('#guardar').show();
                $("#editor2").hide();
                 $("#edit").hide();

            });
            //initialize summernote
           
        });
 
  </script>

@include('layouts.footer')


</html>

