@include('layouts.head')
@include('layouts.nav')
             <div id="ap">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tablero</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Usuarios</a></li>
                                            <li class="breadcrumb-item active">Consultando el estado del registro de la plataforma</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Registro de la plataforma</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                        <div class="col-12">
                            <div class="card-header pt-2 pb-1 text-center bg-primary">
                                            <a href="#">
                                                <span><img src="{{ asset('images/logo2.png') }}" alt="" width="50"></span>
                                            </a>
                                        </div>
                            <div class="card">
                                <div class="card-body"> 
                                     <div class="row">
                                    <div class="col-lg-3">
                                    </div>    
                                    <div class="col-lg-6">
                                          <!-- Logo-->
                                         <div class="text-center w-75 m-auto">
                                        <h4 class="text-dark-50 text-center mt-0 font-weight-bold">Inertar correccion a la guia </h4>
                                        <p class="text-muted mb-4">Asegurese de enviar los datos correctamente.</p>
                                    </div>
                                    
                                   @include('registers.edit')
                                   </div>
                                    
                                    </div> <!-- end col -->
                                </div>
                                </div>
                            </div>
                          </div>
                        <!-- end row-->
                        
                    </div> <!-- container -->
                  </div>

                 
                                      
             
<script>
    var vue = new Vue({
  el:"#ap",
  data: {
    isShowing:false,
  
  },
})
</script>
@include('layouts.footer')

