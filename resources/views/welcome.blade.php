
@include('layouts.head')
        <style>
 

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
                                 <div class="app-search">
                                <form>
                                    <div class="input-group">
                                        <p>LLamanos al +51 939 824 399</p>
                                    </div>
                                </form>
                            </div>
                                     
                            
                            </ul>
                            <ul class="list-unstyled topbar-right-menu float-right mb-0">
                                      @if (Route::has('login'))
                                    <div class="top-right links">
                                        @auth
                                            <a href="{{ url('/home') }}"><span class="text-muted mt-3">Home</span></a>
                                        @else
                                            <a href="{{ route('login') }}">Iniciar Sesion</a>
                                         <?php
                                
                                            $registers = DB::table('registers')->get();
                                            $register=$registers->last();                                 
                                    ?>
                                    @if($register->status=="si")
                                         @if (Route::has('register'))
                                                        <a href="{{ route('people.create') }}">Registro de Personas</a>
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
                        <div class="container-fluid">
                            <nav class="navbar navbar-dark navbar-expand-lg topnav-menu">
        
                                <div class="collapse navbar-collapse" id="topnav-menu-content">
                                    <ul class="navbar-nav">
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle arrow-none" href="layouts-horizontal.html#" id="topnav-dashboards" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="mdi mdi-speedometer mr-1"></i>Inicio
                                            </a>
                                            
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle arrow-none" href="layouts-horizontal.html#" id="topnav-apps" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="mdi mdi-apps mr-1"></i>Nosotros 
                                            </a>
                                           
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle arrow-none" href="layouts-horizontal.html#" id="topnav-pages" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="mdi mdi-google-pages mr-1"></i>Nuestros Programas
                                            </a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle arrow-none" href="layouts-horizontal.html#" id="topnav-layouts" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="mdi mdi-buffer mr-1"></i>Requisitos
                                            </a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle arrow-none" href="layouts-horizontal.html#" id="topnav-components" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="mdi mdi-briefcase-outline mr-1"></i>Registro
                                            </a>
                                           
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
            </div>

        <div class="flex-center position-ref full-height">
          

                    <!-- Start Content-->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="text-center">
                                    <img src="{{ asset('images/logofigure2.png') }}" alt="" height="100">
                                    <h1 class="">Figure Eight Task </h1>
                                    <p class="text-muted mt-3"> Somos una comunidad especializada en las soluciones de las tareas suministradas por la plataforma FigureEight</p>
        
                                    <button type="button" class="btn btn-success btn-sm mt-2"><i class="mdi mdi-email-outline mr-1"></i>Contactano por email</button>
                                    <button type="button" class="btn btn-info btn-sm mt-2 ml-1"><i class="mdi mdi-twitter mr-1"></i> Contactanos por twitter</button>
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->
        
                        <div class="row pt-5">
                            <div class="col-lg-5 offset-lg-1">
                                <!-- Question/Answer -->
                                <div>
                                    <div class="faq-question-q-box">Q.</div>
                                    <h4 class="faq-question" data-wow-delay=".1s">Por que nosotors?</h4>
                                    <p class="faq-answer mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                </div>
        
                                <!-- Question/Answer -->
                                <div>
                                    <div class="faq-question-q-box">Q.</div>
                                    <h4 class="faq-question">Trabaja con nosotros</h4>
                                    <p class="faq-answer mb-4">Lorem ipsum dolor sit amet, in mea nonumes dissentias dissentiunt, pro te solet oratio iriure. Cu sit consetetur moderatius intellegam, ius decore accusamus te. Ne primis suavitate disputando nam. Mutat convenirete.</p>
                                </div>
        
                                </div>
                            <div class="col-lg-5">
                                <!-- Question/Answer -->
                                <div>
                                    <div class="faq-question-q-box">Q.</div>
                                    <h4 class="faq-question">Taskeo las 24 horas</h4>
                                    <p class="faq-answer mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                </div>
        
                                <!-- Question/Answer -->
                                <div>
                                    <div class="faq-question-q-box">Q.</div>
                                    <h4 class="faq-question">Se parte de nuestra comunidad</h4>
                                    <p class="faq-answer mb-4">Lorem ipsum dolor sit amet, in mea nonumes dissentias dissentiunt, pro te solet oratio iriure. Cu sit consetetur moderatius intellegam, ius decore accusamus te. Ne primis suavitate disputando nam. Mutat convenirete.</p>
                                </div>
        
                              
        
                            </div>
                            <!--/col-md-5-->
                        </div>
                        <!-- end row -->
                        
                    </div> <!-- container -->
        </div>
    </body>
</html>
