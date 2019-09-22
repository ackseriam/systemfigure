
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
                                            <a class="nav-link dropdown-toggle arrow-none" href="#programas">
                                                <i class="mdi mdi-google-pages mr-1"></i>Nuestros Programas
                                            </a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle arrow-none" href="#requisitos" >
                                                <i class="mdi mdi-buffer mr-1"></i>Requisitos
                                            </a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </nav>
                        </div>
            </div>

        <div class="flex-center position-ref ">
          

                    <!-- Start Content-->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12" ><br>
                                <div class="text-center">
                                   <img src="{{ asset('images/logofigure2.png') }}" alt="" height="100">
                                    <h1 class="">Figure Eight Task </h1>
                                    <p class="text-muted mt-3"> Somos una comunidad especializada en las soluciones de las tareas suministradas por la plataforma FigureEight</p>

                                    <a href="https://www.instagram.com/f8task/"  target="_blank"  class="btn btn-success btn-sm mt-2"><i class="mdi mdi-email-outline mr-1"></i> </a>
                                    <!--

                                    <a href="https://www.instagram.com/f8task/"   target="_blank"   class="btn btn-info btn-sm mt-2 ml-1"><i class="mdi mdi-twitter mr-1"></i> </a>-->

                                    <a href="https://www.facebook.com/f8task/"  target="_blank"   class="btn btn-primary btn-sm mt-2 ml-1"><i class=" mdi mdi-facebook  mr-1"></i></a>


                                    <a href="https://www.instagram.com/f8task/"  target="_blank"  class="btn btn-primary btn-sm mt-2 ml-1" ><i class="  mdi mdi-instagram   mr-1"></i></a>
                                    <a href="https://www.youtube.com/channel/UC1Qzqg18r_VghlQjZiNk2MA/videos"  target="_blank"  class="btn btn-danger btn-sm mt-2 ml-1" ><i class="  mdi mdi-youtube mr-1"></i></a>
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->
        
                        <div class="row pt-5">
                            <div class="col-lg-5 offset-lg-1">
                                <!-- Question/Answer -->
                                <div>
                                    <div class="faq-question-q-box">Q.</div>
                                    <h4 class="faq-question" data-wow-delay=".1s">¿Por que nosotros?</h4>
                                    <p class="faq-answer mb-4">Somos los mejores en lo que hacemos, ofrecemos atención las 24 horas con nuestro equipo activo en todo momento.</p>
                                </div>
        
                                <!-- Question/Answer -->
                                <div>
                                    <div class="faq-question-q-box">Q.</div>
                                    <h4 class="faq-question">Trabaja con nosotros</h4>
                                    <p class="faq-answer mb-4">En nuestro servidor tendras acceso a nuestras guias y acceso a videos mostrando tips para hacer los diferentes task .</p>
                                </div>
        
                                </div>
                            <div class="col-lg-5">
                                <!-- Question/Answer -->
                                
        
                                <!-- Question/Answer -->
                                <div>
                                    <div class="faq-question-q-box">Q.</div>
                                    <h4 class="faq-question">Se parte de nuestra comunidad</h4>
                                    <p class="faq-answer mb-4">En nuestra comunidad estaras 100% asesorado para hacer los diferentes task en el momento indicado.</p>
                                </div>   
                                   <!-- Question/Answer -->
                                <div>
                                    <div class="faq-question-q-box">Q.</div>
                                    <h4 class="faq-question">Taskeo las 24 horas</h4>
                                    <p class="faq-answer mb-4">Lorem ipsum dolor sit amet, in mea nonumes dissentias dissentiunt, pro te solet oratio iriure. Cu sit consetetur moderatius intellegam, ius decore accusamus te. Ne primis suavitate disputando nam. Mutat convenirete.</p>
                                </div>                          
        
                            </div>
                            

                            <!--/col-md-5-->
                        </div>  
                        <!-- end row -->
              <div class="container"  style="top: 20px;">
                <div class="row justify-content-center">
                    <div class="col-12">

                        <div class="text-center">
                              
                            <div class="row mt-5">
                                <div class="col-md-4">
                                    <div class="text-center mt-3 pl-1 pr-1">
                                          <i class="dripicons-clock bg-primary maintenance-icon text-white mb-2"></i>
                                    
                                        <h5 class="text-uppercase">Acceso las 24 horas</h5>
                                      
                                    </div>
                                </div> <!-- end col-->
                                <div class="col-md-4">
                                    <div class="text-center mt-3 pl-1 pr-1">
                                           <i class="dripicons-jewel bg-primary maintenance-icon text-white mb-2"></i>
                                        <h5 class="text-uppercase">Comprometidos en lo que hacemos</h5>
                                      
                                    </div>
                                </div> <!-- end col-->
                                <div class="col-md-4">
                                    <div class="text-center mt-3 pl-1 pr-1">
                                        <i class="dripicons-jewel bg-primary maintenance-icon text-white mb-2"></i>
                                        <h5 class="text-uppercase">Excelencia</h5>
                                       
                                    </div>
                                </div> <!-- end col-->
                            </div> <!-- end row-->
                        </div> <!-- end /.text-center-->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>

            <!-- end container -->
                <br><br>
                <div  id="nosotros">
                          <div class="container"  style="top: 100px;" >
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="text-center">
                                <h1 class="mt-4">Nosotros <img src="{{ asset('images/logofigure2.png') }}" alt="" height="100"></h1>
                                <h3 class="mt-4">Comunidad Figure Eight task </h3>
                              
                               
                                    <h4 class="text-muted">Somos una comunidad dedicada a la asesoría e interacción de trabajo por internet , de distintas formas y paginas, principalmente Figure Eight. Contamos con un servidor de discord de trabajo y compra/venta de divisas electrónicas de manera segura  .</h4>
                                 
                             </div>
                             <br>
                         </div>
                         
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->

                    <!-- Start Content-->
                    <div class="container-fluid">
                      <div class="text-center">
                              <img src="{{ asset('images/welcome.png') }}" alt="" height="500" width="1500">
                          </div>
                    </div>
               </div>
               <!--
                <div  id="requisitos">
                          <div class="container"  style="top: 100px;" >
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="text-center">
                                <h1 class="mt-4">Requisitos <img src="{{ asset('images/logofigure2.png') }}" alt="" height="100"></h1>
                                <h3 class="mt-4">Requisitos de la comunidad Figure Eight task </h3>
                              
                               
                                    <h4 class="text-muted">Para ingresar a nuestra comunidad de Figure Eight Task, se necesita los siguientes requisitos:</h4>
                                 
                             </div>
                             <br>
                         </div>
                         
                        </div>                     </div>
                </div>-->

                   <!--
                 <div  id="programas">
                          <div class="container"  style="top: 100px;" >
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="text-center">
                                <h1 class="mt-4">Nuestros programas <img src="{{ asset('images/logofigure2.png') }}" alt="" height="100"></h1>
                                <h3 class="mt-4">Nuestros programas en nuestra comunidad </h3>
                              
                               
                                    <h4 class="text-muted">Para ingresar a nuestra comunidad de Figure Eight Task, se necesita los siguientes requisitos:</h4>
                                 
                             </div>
                             <br>
                         </div>
                         
                        </div> <!-- end col -->
                    </div>
                </div>-->

                </div>
              
     </div> <!-- container -->

     
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
                                 <a href="javascript: void(0);">Acerca de nosotros</a>
                                    <a href="javascript: void(0);">Soporte</a>
                                    <a href="javascript: void(0);">Contactanos</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

</html>
