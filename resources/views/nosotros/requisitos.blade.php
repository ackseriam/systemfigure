<!-- 
💸 *¿Deseas formar parte de la Comunidad Figure Eight Task?*💰

📌 Ten en cuentas lo siguiente:

☑ Se te pedirá verificación de datos, fotos de documento nacional + número de identidad.
☑ Selfie con tu documento + hoja blanca con el nombre de la comunidad "Figure Eight Task".
☑ Anotación de datos personales reales.
☑ Número de celular.
☑ Correo electrónico.
☑ Tener Cuenta Discord (Si aún no tienes uno, crea una cuenta aqui https://discordapp.com/).
☑ Buena reputación y ser colaborativo en el trabajo de grupo.
☑ Membresía de nivel de 10$ mensuales (procesador de pago skrill y otros).
☑ Ingreso nivel 0 gratis (referencia mediante Ysense o Neobux necesaria).
☑ Exclusividad con el grupo en ciertos aspectos

💸 *¿Deseas ser comprador en la Comunidad Figure Eight Task?*💰

☑ Comunícate con nosotros por nuestros medios de contacto.

 -->


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
                                                                      <h1 class=" headline" >Requisitos</h1>
                                                                
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
         
            
                        <div class="row"><div class="col-2"></div>
                            <div class="col-8">
                                   <div class="tab-content border-top-0 mb-4">
                                    <div class="tab-pane show active" id="mdi-icons">
                                        <div class="card shadow-none p-3">
                                              <section class=" wow slideInLeft" data-wow-duration="2s">
                                                <div class="container">
                                                 
                                                      <div class="row ">
                                                           <div class="col-lg-12 text-md-center" > 
                                                             <section class=""  data-wow-iteration="infinite" data-wow-duration="1500ms"> 
                                                                    <h1 class=" mt-3 punchline">  <img src="{{ asset('images/small/money.svg') }}" height="50" alt="" > ¿Deseas formar parte de la Comunidad Figure Eight Task?  <img src="{{ asset('images/small/bolsa.svg') }}" height="50" alt="" ></h1>     
                                                           </section>
                                                             </div>
                                                       </div> <!-- end col -->
                                                      </div>
                                                      <!-- end row -->
                                              </section>
                                               <section class=" wow slideInRight" data-wow-duration="4s">
                                                      <div class="container-fluid"  >
                                                            <div class="row "> 
                                                                 <div class="col-md-6" style="left:170px;">
                                                                        <h3 class=" mt-3 text-md-left widget " ><img src="{{ asset('images/small/toch.svg') }}" height="30" alt="" > Ten en cuentas lo siguiente:</h3>
                                                                 </div><div  class="col-md-3"></div>
                                                                 <div class="col-md-3"> 
                                                                      <section class="wow pulse"  data-wow-iteration="infinite" data-wow-duration="5500ms"> 
                                                                      <div class="text-md-left " > 
                                                                          <img src="{{ asset('images/logofigure2.png') }}" height="150" alt="" >
                                                                      </div>
                                                                     </section>
                                                                </div> 
                                                              </div>
                                                            </div>                       
                                                                       
                                                </section><br><br><br>
                              <section class="wow slideInLeft" data-wow-duration="7s"  >
                                        <div class="container-fluid" >
                                              <div class="row ">
                                          <div class="col-12" style="top: 50px">
                                              <div class="text-center">
                                                    <h3 class="text-md-left widget " ><i class=" mdi mdi-checkbox-multiple-marked "></i> Se te pedirá verificación de datos, fotos de documento nacional + número de identidad.<br>
                                                    </h3><br>
                                                     <h3 class="text-md-left widget " ><i class=" mdi mdi-checkbox-multiple-marked "></i> Selfie con tu documento + hoja blanca con el nombre de la comunidad "Figure Eight Task".</h3><br>
                                                     <h3 class="text-md-left widget " ><i class=" mdi mdi-checkbox-multiple-marked "></i> Anotación de datos personales reales.</h3><br>
                                                     <h3 class="text-md-left widget " ><i class=" mdi mdi-checkbox-multiple-marked "></i>  Número de celular..</h3><br>
                                                     <h3 class="text-md-left widget " ><i class=" mdi mdi-checkbox-multiple-marked "></i> Correo electrónico.</h3><br>
                                                     <h3 class="text-md-left widget " > <i class=" mdi mdi-checkbox-multiple-marked "></i> Tener Cuenta Discord (Si aún no tienes uno, crea una cuenta aqui (https://discordapp.com/).</h3><br>
                                                      <h3 class="text-md-left widget " > <i class=" mdi mdi-checkbox-multiple-marked "></i> Buena reputación y ser colaborativo en el trabajo de grupo.</h3><br>
                                                       <h3 class="text-md-left widget " ><i class=" mdi mdi-checkbox-multiple-marked "></i> Membresía de nivel de 10$ mensuales (procesador de pago skrill y otros)..</h3><br>
                                                        <h3 class="text-md-left widget " > <i class=" mdi mdi-checkbox-multiple-marked "></i> Ingreso nivel 0 gratis (referencia mediante Ysense o Neobux necesaria).</h3><br><br>
                                                 </div>
                                           </div> <!-- end col-->
                                        </div>
                                      </div>
                               </section><br><br>
                               
                             
              
                                      
                              </div>
                                      <!-- end row -->
                          </div>
              
                                         </div>
                                    </div>
                                 </div>
                          
           

                                <br><br><br>
                             
                 

     
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
                                     <a href="https://twitter.com/EightTask"  target="_blank"   class="btn btn-success btn-sm mt-2 ml-1"><i class=" mdi mdi-twitter  mr-1"></i></a>
                                    <a href="https://www.instagram.com/f8task/"  target="_blank"  class="btn btn-primary btn-sm mt-2 ml-1" ><i class="  mdi mdi-instagram   mr-1"></i></a>
                                    <a href="https://www.youtube.com/channel/UC1Qzqg18r_VghlQjZiNk2MA/videos"  target="_blank"  class="btn btn-danger btn-sm mt-2 ml-1" ><i class="  mdi mdi-youtube mr-1"></i></a>
                                     <a href="https://www.linkedin.com/company/figureeighttask/"  target="_blank"   class="btn btn-primary btn-sm mt-2 ml-1"><i class=" mdi mdi-linkedin  mr-1"></i></a>
                                 <a href="javascript: void(0);">Acerca de nosotros</a>
                                    <a href="javascript: void(0);">Soporte</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </footer>

    

               
                <!-- end Footer -->

</html>
