
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

      
         <br>

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
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body"> 
                                 <div class="row">
                                <div class="col-lg-3">
                                </div>    
                                <div class="col-lg-6">
                                      <!-- Logo-->
                                     <div class="text-center w-75 m-auto">
                                    <h4 class="text-dark-50 text-center mt-0 font-weight-bold">Redactar Post </h4>
                                    <p class="text-muted mb-4">Asegurese de enviar los datos correctamente.</p>
                                </div>
                               @include('post.form')

                               </div>
                               
                                </div> <!-- end col -->
                            </div>
                            </div>
                        </div>
                    </div>
         
          

     
        <!-- end page -->
    </body><br><br>

  

    

               


@include('layouts.footer')

</html>
<!-- integrar editor:               https://www.kerneldev.com/2018/01/11/using-summernote-wysiwyg-editor-with-laravel/
https://www.codewall.co.uk/install-summernote-with-laravel-tutorial/
-->