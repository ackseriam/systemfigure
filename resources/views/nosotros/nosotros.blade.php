
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
  <link rel="stylesheet" href="{{ asset('css/vendor/animate.css') }}">

     <script src="https://unpkg.com/scrollreveal"></script>
       <script src="{{ asset('js/vendor/wow.min.js') }}" ></script> 
     <script>
        ScrollReveal({ duration: 1000 })
    </script>
<!-- animsition.css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animsition/4.0.2/css/animsition.css">
<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- animsition.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/animsition/4.0.2/js/animsition.min.js"></script>
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
                                            <a class="nav-link dropdown-toggle arrow-none" href="#requisitos" >
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

        <div class="flex-center position-ref ">
                        <!-- Start Content-->
             <div class="container-fluid">
                            <section class="wow fadeInDown">

                                <div class="row">
                                    <div class="col-sm-12" ><br>

                                        <div class="text-center">
                                           <img src="{{ asset('images/logofigure2.png') }}" alt="" height="100">
                                             <div class="container">
                                                <div class="row ">
                                                    <div class="col-12">
                                                          <section class="wow fadeInDown" data-wow-delay="1s">
                                                            <div class="text-center">                  
                                                                      <h1 class=" headline" >BOARD MEMBERS / STAFF ADMINISTRATIVO</h1>
                                                                
                                                             </div> 
                                                         </section> 
                                                    </div>  
                                                 </div> 

                                            </div><br>
                                         
                                        </div>
                                    </div><!-- end col -->
                                </div><!-- end row -->

                            </section>

                <!-- end container -->
                    <br><br>
             </div>
         </div>
         
         <br>
         
            
                <section class=" wow slideInLeft" data-wow-duration="4s">
                    <div class="container">
                       <div class="col-sm-12" >
                                
                              </div>
                          <div class="row ">
                               <div class="col-lg-6 text-md-right" > 
                                 <section class=""  data-wow-iteration="infinite" data-wow-duration="1500ms"> 
                                 
                                        <img src="{{ asset('images/staff_figure/juffyto.jpg') }}" height="400" class="mr-2 rounded-circle" alt="" >
                                  
                               </section>
                                 </div>
                                  <div class="col-lg-6"> 
                                     <h3 class=" mt-3 widget">Juffyto Segovia - Owner, Ceo, Founder.</h3>
                                        <h5 class="punchline text-md-left" >“Hola ¿Qué tal? Yo soy Juffyto Segovia creador y fundador de la comunidad Figure Eight Task, te invito a ser parte de nuestra comunidad de trabajo, siempre estamos activos con nuevas opciones para generar ingresos extra por internet.” <br>
                                      <a href="https://www.facebook.com/JuffySegovia/"  target="_blank"   class="btn btn-primary btn-sm mt-2 ml-1"><i class=" mdi mdi-facebook  mr-1"></i></a>
                                      <a href="https://twitter.com/Juffyto"  target="_blank"   class="btn btn-info btn-sm mt-2 ml-1"><i class=" mdi mdi-twitter  mr-1"></i></a>
                                    <a href="https://www.instagram.com/juffyto/"  target="_blank"  class="btn btn-danger btn-sm mt-2 ml-1" ><i class="  mdi mdi-instagram   mr-1"></i></a>

                                     <a href="https://www.linkedin.com/in/junior-segovia-chalco-974ab6194/"  target="_blank"  class="btn btn-primary btn-sm mt-2 ml-1" ><i class="  mdi mdi-linkedin   mr-1"></i></a>
                                    
                                    <a href="https://www.cam.tv/juffyf8task"  target="_blank"  class="btn btn-secondary btn-sm mt-2 ml-1" ><i class="  mdi mdi-cam mr-1">cam</i></a>
                                        </h5>
                                 </div>
                                 
                          
                           </div> <!-- end col -->
                    </div>
                        <!-- end row -->
                </section>
                <br><br><br>
                   <section class=" wow slideInRight" data-wow-duration="1s">
                          <div class="container-fluid"  >
                            <div class="row ">
                                <div class="col-12">

                                    <div class="text-center">
                                          
                                        <div class="row ">
                              
                                            <div class="col-md-6">
                                                <div class="text-center mt-3 pl-1  offset-lg-1">
                                                      
                                                    <h3 class=" mt-3 text-md-right">Luzmary Gil – Administrator, COO, Co – Founder. </h3>
                                                    <h5 class="punchline text-md-right " >“¡Me arriesgue y gane! Te toca a ti te ofrecemos las mejores herramientas <br> para generar ganancias extras, o hacer de este tu trabajo con buenos<br> ingresos, ser Tu propio jefe. Ven, ¿qué esperas? Únete y gana, sácale provecho,<br> 24 horas activos para ti. Yo soy Luzmary Gil, administradora de esta comunidad.”
                                                       <br>
                                                      <a href="https://www.facebook.com/luzmary.gil"  target="_blank"   class="btn btn-primary btn-sm mt-2 ml-1"><i class=" mdi mdi-facebook  mr-1"></i></a>
                                                      <a href="https://twitter.com/GilLuzmary"  target="_blank"   class="btn btn-info btn-sm mt-2 ml-1"><i class=" mdi mdi-twitter  mr-1"></i></a>
                                                    <a href="https://www.instagram.com/luzmarygil_/"  target="_blank"  class="btn btn-danger btn-sm mt-2 ml-1" ><i class="  mdi mdi-instagram   mr-1"></i></a>
                                                    </h5>
                                                   
                                                  
                                                </div>
                                            </div> <!-- end col-->
                                            <div class="col-md-6">
                                                <div class="text-md-left mt-3 pl-1 ">
                                                      <img src="{{ asset('images/staff_figure/luz.png') }}" height="400" class="mr-2 rounded-circle"  alt="" >
                                                   
                                                </div>
                                            </div> <!-- end col-->
                                        </div> <!-- end row-->
                                    </div> <!-- end /.text-center-->

                                </div> <!-- end col -->
                            </div>
                            <!-- end row -->
                         </div>
                        </section>
                          <br><br><br>
                              <section class="wow slideInLeft" data-wow-duration="1s"  >
                                    <div class="container-fluid" >
                                          <div class="row ">
                                              <div class="col-12">

                                                  <div class="text-center">
                                                        
                                                      <div class="row ">
                                            
                                                          <div class="col-md-6">
                                                              <div class="text-md-right mt-3 pl-1  offset-lg-1">
                                                                    
                                                                      <img src="{{ asset('images/staff_figure/josue.jpg') }}"  height="450" class=" rounded-circle"  alt="" >

                                                                
                                                              </div>
                                                          </div> <!-- end col-->
                                                          <div class="col-md-6">
                                                              <div class="text-md-left mt-3 pl-1 ">
                                                                
                                                                    <h3 class=" mt-3 ">Josue Ascenzi – Administrator, COO, Co – Founder. </h3>
                                                                  <h5 class="punchline text-md-left  " >“¡Hola! Mi nombre es Josué, y desde el año 2016 me dedico a los negocios por internet,<br> especialmente el mundo de los minijobs. En el 2018 junto a Juffyto, Mike,<br> Leonardo, Luigi y Luzmary dimos inicio a la Comunidad Internacional Figure Eight Task Online;<br> proyecto en expansión, y ahora es cuando vamos a crecer. ¿Tienes alguna pregunta sobre<br> F8Task o nuestra Comunidad?”<br>
                                                                      <a href="https://www.facebook.com/jascenzi"  target="_blank"   class="btn btn-primary btn-sm mt-2 ml-1"><i class=" mdi mdi-facebook  mr-1"></i></a>
                                                                      <a href="https://www.instagram.com/josueascenzi/"  target="_blank"  class="btn btn-danger btn-sm mt-2 ml-1" ><i class="  mdi mdi-instagram   mr-1"></i></a>
                                                                  </h5>
                                                                
                                                              </div>
                                                          </div> <!-- end col-->
                                                      </div> <!-- end row-->
                                                  </div> <!-- end /.text-center-->

                                              </div> <!-- end col -->
                                          </div>
                                          <!-- end row -->
                                     </div>
                              </section>
                              <br><br><br><br>

                              <section class="wow slideInRight"  data-wow-duration="1s" >
                                    <div class="container-fluid">
                                          <div class="row ">
                                              <div class="col-12">

                                                  <div class="text-center">
                                                        
                                                      <div class="row ">
                                            
                                                         <div class="col-md-6">
                                                                <div class="text-center mt-3 pl-1  offset-lg-1">
                                                                      
                                                                    <h3 class="punchline mt-3 text-md-right">Michael Castillo - Administrator, Co-founder, <br>Chief Customer Officer (CCO).</h3>
                                                                    <h5 class="punchline text-md-right " >

                                                                      “¡Hola, buenas! Soy Michael Castillo, administrador y jefe responsable del servicio y atención al <br> cliente de la comunidad Figure Eight Task, si tienes cualquier<br> duda sobre una task, sobre el servidor privado en discord, sobre nuestra comunidad <br>y cualquier otro tema, estaré encantado de asistirte y ayudarte en todo lo que pueda.”<br>
                                                                       <a href="https://www.facebook.com/michaeldavid.perdomocastillo.1"  target="_blank"   class="btn btn-primary btn-sm mt-2 ml-1"><i class=" mdi mdi-facebook  mr-1"></i></a>
                                                                      <a href="https://twitter.com/Mikecastillo89"  target="_blank"   class="btn btn-info btn-sm mt-2 ml-1"><i class=" mdi mdi-twitter  mr-1"></i></a>
                                                                    <a href="https://www.instagram.com/mikecastillo7/"  target="_blank"  class="btn btn-danger btn-sm mt-2 ml-1" ><i class="  mdi mdi-instagram   mr-1"></i></a>
                                                                    </h5>
                                                                    <br>

                                                                  
                                                                </div>
                                                            </div> <!-- end col-->
                                                            <div class="col-md-6">
                                                                <div class="text-md-left mt-3 pl-1 ">
                                                                      <img src="{{ asset('images/staff_figure/mike.png') }}" height="400" class="mr-2 rounded-circle"  alt="" >
                                                                   
                                                                </div>
                                                            </div> <!-- end col-->
                                                      </div> <!-- end row-->
                                                  </div> <!-- end /.text-center-->

                                              </div> <!-- end col -->
                                          </div>
                                          <!-- end row -->
                                     </div>
                              </section>
                              <br><br><br><br>
                                 <section class="wow slideInLeft" data-wow-duration="1s" >
                                    <div class="container-fluid" >
                                          <div class="row ">
                                              <div class="col-12">

                                                  <div class="text-center">
                                                        
                                                      <div class="row ">
                                            
                                                          <div class="col-md-6">
                                                              <div class="text-md-right mt-3 pl-1  offset-lg-1">
                                                                    
                                                                      <img src="{{ asset('images/staff_figure/luigi.png') }}" width="300" height="400" class=" rounded-circle"  alt="" >

                                                                
                                                              </div>
                                                          </div> <!-- end col-->
                                                          <div class="col-md-6">
                                                              <div class="text-md-left mt-3 pl-1 ">
                                                                
                                                                    <h3 class=" mt-3 ">Luis Silva– Administrator, COO, Co – Founder.  </h3>
                                                                  <h5 class="text-md-left punchline " >”Buen día chicos soy Luigi administrador de la comunidad F8Task, estoy para lo <br>que necesiten no dudes en contactarme si tienes alguna duda de como ingresar con nosotros<br> y únete a la comunidad Figure Eight Task.”<br>
                                                                    
                                                                        <a href="https://www.facebook.com/luigi.fernandez.737001"  target="_blank"   class="btn btn-primary btn-sm mt-2 ml-1"><i class=" mdi mdi-facebook  mr-1"></i></a>
                                                                      
                                                                  </h5>
                                                                 
                                                              </div>
                                                          </div> <!-- end col-->
                                                      </div> <!-- end row-->
                                                  </div> <!-- end /.text-center-->

                                              </div> <!-- end col -->
                                          </div>
                                          <!-- end row -->
                                     </div>
                                </section>
                              <br><br><br><br>

                              <section class="wow slideInRight"  data-wow-duration="1s">
                                    <div class="container-fluid">
                                          <div class="row ">
                                              <div class="col-12">

                                                  <div class="text-center">
                                                        
                                                      <div class="row ">
                                            
                                                         <div class="col-md-6">
                                                                <div class="text-center mt-3 pl-1  offset-lg-1">
                                                                      
                                                                    <h3 class=" mt-3 text-md-right">Leonardo Alvino– Administrator, COO, Co – Founder. </h3>
                                                                    <h5 class="text-md-right punchline" >

                                                                     “Hola, Soy Leonardo Alvino, mi objetivo es mejorar tu forma de taskear, supervisar que <br>aprendas cada día, mas, ayudarte con herramientas para que tu rendimiento <br>al momento de generar divisas, sea rápido y agradable. Te ayudamos a derrotar la crisis.”
                                                                     <br>
                                                                         <a href="https://www.facebook.com/leonardo.alvino.3517"  target="_blank"   class="btn btn-primary btn-sm mt-2 ml-1"><i class=" mdi mdi-facebook  mr-1"></i></a>
                                                                       <a href="https://www.instagram.com/leonardoalvino1/"  target="_blank"  class="btn btn-danger btn-sm mt-2 ml-1" ><i class="  mdi mdi-instagram   mr-1"></i></a>
                                                                    </h5>
                                                                  
                                                                </div>
                                                            </div> <!-- end col-->
                                                            <div class="col-md-6">
                                                                <div class="text-md-left mt-3 pl-1 ">
                                                                      <img src="{{ asset('images/staff_figure/leonardo.png') }}" height="400" class="mr-2 rounded-circle"  alt="" >
                                                                   
                                                                </div>
                                                            </div> <!-- end col-->
                                                      </div> <!-- end row-->
                                                  </div> <!-- end /.text-center-->

                                              </div> <!-- end col -->
                                          </div>
                                          <!-- end row -->
                                     </div>
                              </section>
                              <br><br><br><br><br><br>
                                <div class="flex-center position-ref ">
                                                <!-- Start Content-->
                                     <div class="container-fluid">
                                                    <section class="wow fadeInDown">

                                                        <div class="row">
                                                            <div class="col-sm-12" ><br>

                                                                <div class="text-center">
                                                                   <img src="{{ asset('images/logofigure2.png') }}" alt="" height="100">
                                                                     <div class="container">
                                                                        <div class="row ">
                                                                            <div class="col-12">
                                                                                  <section class="wow fadeInDown" data-wow-delay="1s">
                                                                                    <div class="text-center">                  
                                                                                              <h1 class=" headline" >MODERATOR / STAFF DE EDICIÓN</h1>
                                                                                        
                                                                                     </div> 
                                                                                 </section> 
                                                                            </div>  
                                                                         </div> 

                                                                    </div><br>
                                                                 
                                                                </div>
                                                            </div><!-- end col -->
                                                        </div><!-- end row -->

                                                    </section>

                                        <!-- end container -->
                                            <br><br>
                                     </div>
                                 </div><br><br><br>

                                  <section class="wow slideInLeft" data-wow-duration="1s"  >
                                    <div class="container-fluid" >
                                          <div class="row ">
                                              <div class="col-12">

                                                  <div class="text-center">
                                                        
                                                      <div class="row ">
                                            
                                                          <div class="col-md-4">
                                                              <div class="text-md-center  mt-3 pl-1  offset-lg-1">
                                                                    
                                                                      <img src="{{ asset('images/staff_figure/abril.jpg') }}" height="400" class=" rounded-circle"  alt="" >
                                                                        <h3 class=" mt-3 "> Abril María Vivas – Moderator, Editor. </h3>
                                                                  <h5 class="text-md-center punchline " >“Hola soy Abril Vivas diseñador gráfico y miembro de la comunidad f8task desde 2018. Happy virus comprometida a apoyarles en su desempeño en esta comunidad.”
                                                                    <br>
                                                                      <a href="http://fb.com/amarivhime"  target="_blank"   class="btn btn-primary btn-sm mt-2 ml-1"><i class=" mdi mdi-facebook  mr-1"></i></a>
                                                                  </h5>
                                                              </div>
                                                          </div> <!-- end col-->
                                                          <div class="col-md-4">
                                                              <div class="text-md-center mt-3 pl-1 ">
                                                                  <img src="{{ asset('images/staff_figure/maria.png') }}" height="400" class=" rounded-circle"  alt="" >
                                                                        <h3 class=" mt-3 ">María de los Ángeles – Moderator, Editor. </h3>
                                                                  <h5 class="text-md-center punchline " >“¡Hola, bienvenidos! Soy María La Cruz editora de esta comunidad. Te invito a formar parte de esta maravillosa familia, no te arrepentirás ;)”<br>
                                                                     <a href="https://www.facebook.com/BlueMALH"  target="_blank"   class="btn btn-primary btn-sm mt-2 ml-1"><i class=" mdi mdi-facebook  mr-1"></i></a>
                                                                      <a href="https://www.instagram.com/helloitsmaria98/"  target="_blank"  class="btn btn-danger btn-sm mt-2 ml-1" ><i class="  mdi mdi-instagram   mr-1"></i></a>
                                                                    
                                                                  </h5>
                                                              </div>
                                                          </div> <!-- end col-->
                                                           <div class="col-md-4">
                                                               <div class="text-md-center mt-3 pl-1 ">
                                                                  <img src="{{ asset('images/staff_figure/jorge.png') }}" height="400" class="rounded-circle"  alt="" >
                                                                        <h3 class=" mt-3 text-md-center">Jorge Mendez – Moderator, Editor. </h3>
                                                                  <h5 class="text-md-center  punchline " >“Mi nombre es Jorge Mendez, llevo 10 años trabajando como freelancer, bilingüe, conocedor de la plataforma Crowdflower <br>ahora Figure-Eight, actualmente manejo el cargo de editor en nuestro grupo f8task, si necesitas algunos tips o ayuda en alguna tarea de F8 cuenta con mi ayuda.
                                                                    <br>
                                                                     <a href="https://www.facebook.com/KuarTx"  target="_blank"   class="btn btn-primary btn-sm mt-2 ml-1"><i class=" mdi mdi-facebook  mr-1"></i></a>
                                                                      <a href="https://www.instagram.com/jlmendezm/"  target="_blank"  class="btn btn-danger btn-sm mt-2 ml-1" ><i class="  mdi mdi-instagram   mr-1"></i></a>

                                                                  </h5>
                                                              </div>
                                                            </div>
                                                          </div> <!-- end col-->
                                                      </div> <!-- end row-->
                                                  </div> <!-- end /.text-center-->

                                              </div> <!-- end col -->
                                          </div>
                                          <!-- end row -->
                                     </div>
                                </section>

                                <br><br><br>
                               <section class="wow slideInRight" data-wow-duration="4s" >
                                    <div class="container-fluid" >
                                          <div class="row ">
                                              <div class="col-12">

                                                  <div class="text-center">
                                                        
                                                      <div class="row ">
                                            
                                                          <div class="col-md-4">
                                                              <div class="text-md-center  mt-3 pl-1  offset-lg-1">
                                                                    
                                                                      <img src="{{ asset('images/staff_figure/oscar.png') }}" height="400" class=" rounded-circle"  alt="" >
                                                                        <h3 class=" mt-3 ">Oscar Natera – Moderator, Editor. </h3>
                                                                  <h5 class="text-md-center punchline " >“Hola, soy Oscar Natera editor de la comunidad Figure Eight Task y te invito a ser parte de esta comunidad”
                                                                    <br>
                                                                     <a href="https://www.facebook.com/michaeldavid.perdomocastillo.1"  target="_blank"   class="btn btn-primary btn-sm mt-2 ml-1"><i class=" mdi mdi-facebook  mr-1"></i></a>
                                                                      <a href="https://twitter.com/oscarnatera9"  target="_blank"   class="btn btn-info btn-sm mt-2 ml-1"><i class=" mdi mdi-twitter  mr-1"></i></a>
                                                                  
                                                                  </h5>
                                                              </div>
                                                          </div> <!-- end col-->
                                                          <div class="col-md-4">
                                                              <div class="text-md-center mt-3 pl-1 ">
                                                                  <img src="{{ asset('images/staff_figure/paul.png') }}" height="400" class=" rounded-circle"  alt="" >
                                                                        <h3 class=" mt-3 ">Paul Ramirez – Moderator, Editor. </h3>
                                                                  <h5 class="text-md-center punchline " >“Hola, Mi Nombre Es Paul Ramirez, Realizo Trabajos (JOBS) De La Plataforma Figure Eight, Desde Hace Aproximadamente 3 Años,<br> Y Actualmente Soy Editor De Este Gran Grupo De Trabajo Y Gran Comunidad, F8 TASK ONLINE.”<br>
                                                                     <a href="https://www.facebook.com/paulmoder.ramirez"  target="_blank"   class="btn btn-primary btn-sm mt-2 ml-1"><i class=" mdi mdi-facebook  mr-1"></i></a>
                                                                     

                                                                  </h5>
                                                              </div>
                                                          </div> <!-- end col-->
                                                           <div class="col-md-4">
                                                               <div class="text-md-center mt-3 pl-1 ">
                                                                  <img src="{{ asset('images/staff_figure/adolfo.png') }}" height="400" class="rounded-circle"  alt="" >
                                                                        <h3 class=" mt-3 text-md-center">Enmanuel Villarreal – Moderator, Editor.</h3>
                                                                  <h5 class="text-md-center  punchline " >"Hola, soy Enmanuel, editor de la comunidad f8task, estoy aquí para ayudarte en lo que pueda ¡mucha suerte y trabaja duro!”<br>
                                                                <a href="https://www.facebook.com/enmanuel.villarreal.31"  target="_blank"   class="btn btn-primary btn-sm mt-2 ml-1"><i class=" mdi mdi-facebook  mr-1"></i></a>
                                                                
                                                                    <a href="https://www.instagram.com/enmanuel.villarreal.31/"  target="_blank"  class="btn btn-danger btn-sm mt-2 ml-1" ><i class="  mdi mdi-instagram   mr-1"></i></a>
                                                                  </h5>
                                                              </div>
                                                            </div>
                                                          </div> <!-- end col-->
                                                      </div> <!-- end row-->
                                                  </div> <!-- end /.text-center-->

                                              </div> <!-- end col -->
                                          </div>
                                          <!-- end row -->
                                     </div>
                                </section>

                            
                               <br><br><br>
                               <section class="wow slideInLeft" data-wow-duration="4s" >
                                    <div class="container-fluid" >
                                          <div class="row ">
                                              <div class="col-12">

                                                  <div class="text-center">
                                                        
                                                      <div class="row ">
                                            
                                                          <div class="col-md-4">
                                                              <div class="text-md-center mt-3 pl-1 ">
                                                                  <img src="{{ asset('images/staff_figure/emmanuel.png') }}" height="400" class=" rounded-circle"  alt="" >
                                                                        <h3 class="text-md-center  mt-3 ">Adolfo Peña – Moderator, Editor.</h3>
                                                                  <h5 class="ttext-md-center punchline " >“Hola bienvenido a la comunidad mi nombre es Adolfo soy editor de guías nivel cero, también puedo ayudarte a entender paso a paso el uso y métodos de trabajo que te ofrece la comunidad Figure Eigth Task entre ellos herramientas, tips, formas de trabajo, entre otras ventajas que te ofrece esta comunidad gracias por preferirnos un cordial saludo.” <br><a href="https://www.facebook.com/adolfo.j.pena.1"  target="_blank"   class="btn btn-primary btn-sm mt-2 ml-1"><i class=" mdi mdi-facebook  mr-1"></i></a>
                                                                    <a href="https://www.instagram.com/adolfo.j08/"  target="_blank"  class="btn btn-danger btn-sm mt-2 ml-1" ><i class="  mdi mdi-instagram   mr-1"></i></a>

                                                                  </h5>
                                                              </div>
                                                          </div> <!-- end col-->
                                                           <div class="col-md-4">
                                                               <div class="text-md-center mt-3 pl-1 ">
                                                                  <img src="{{ asset('images/staff_figure/katiuska.png') }}" height="400" class="rounded-circle"  alt="" >
                                                                        <h3 class=" mt-3 text-md-center">Katiuska Millan – Moderator, Editor.</h3>
                                                                  <h5 class="text-md-center  punchline " >“Hola, espero estén bien. Yo soy Katiuska Millán, editora lvl0 de la comunidad Figure Eight. Una comunidad donde somos una familia, ayudando en cada uno de los trabajos, en la cual siempre estamos activos las 24h. Te invito a ser parte de esta comunidad, donde tienes una oportunidad de aprender junto con nosotros.” <br><a href="https://www.facebook.com/la.chiq.15"  target="_blank"   class="btn btn-primary btn-sm mt-2 ml-1"><i class=" mdi mdi-facebook  mr-1"></i></a>
                                                                    

                                                                  </h5>
                                                              </div>
                                                            </div>
                                                              <div class="col-md-4">
                                                               <div class="text-md-center mt-3 pl-1 ">
                                                                  <img src="{{ asset('images/staff_figure/Gregorio.png') }}" height="400" class="rounded-circle"  alt="" >
                                                                        <h3 class=" mt-3 text-md-center">Gregorio Rengel – Moderator, Editor.</h3>
                                                                  <h5 class="text-md-center  punchline " >“Hola, Yo soy Gregorio Rengel, editor lvl0 de la comunidad Figure Eight, donde te brindamos apoyo, y te ayudamos en las tareas que estén disponible, brindando una seguridad extrema, aparte de una comunidad somos un grupo llamado familia, te invito a ser parte de esta comunidad.” <br><a href="https://www.facebook.com/gregorio.rengel.5"  target="_blank"   class="btn btn-primary btn-sm mt-2 ml-1"><i class=" mdi mdi-facebook  mr-1"></i></a>
                                                                     

                                                                  </h5>
                                                              </div>
                                                            </div>
                                                          </div> <!-- end col-->
                                                      </div> <!-- end row-->
                                                  </div> <!-- end /.text-center-->

                                              </div> <!-- end col -->
                                          </div>
                                          <!-- end row -->
                                     </div>
                                </section>


                 

     
        <!-- end page -->
    </body><br><br>

    <script>
        $(document).ready(function() {
  $(".animsition").animsition({
    inClass: 'fade-in-right',
    outClass: 'fade-out-right',
    inDuration: 1500,
    outDuration: 800,
    linkElement: '.animsition-link',
    // e.g. linkElement: 'a:not([target="_blank"]):not([href^="#"])'
    loading: true,
    loadingParentElement: 'body', //animsition wrapper element
    loadingClass: 'animsition-loading',
    loadingInner: '', // e.g '<img src="loading.svg" />'
    timeout: false,
    timeoutCountdown: 5000,
    onLoadEvent: true,
    browser: [ 'animation-duration', '-webkit-animation-duration'],
    // "browser" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
    // The default setting is to disable the "animsition" in a browser that does not support "animation-duration".
    overlay : false,
    overlayClass : 'animsition-overlay-slide',
    overlayParentElement : 'body',
    transition: function(url){ window.location.href = url; }
  });
});
       // ScrollReveal().reveal('.headline')
        ScrollReveal().reveal('.tagline', { delay: 500 })
        ScrollReveal().reveal('.punchline', { delay: 2000 })


    </script>
      <script>
    ScrollReveal().reveal('.headline', { duration: 2000 });
    ScrollReveal().reveal('.widget', { interval: 500 });
  </script>
   <script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();
    document.getElementById('moar').onclick = function() {
      var section = document.createElement('section');
      section.className = 'section--purple wow fadeInDown';
      this.parentNode.insertBefore(section, this);
    };
  </script>

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
