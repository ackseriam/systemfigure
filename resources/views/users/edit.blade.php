


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
                                            <li class="breadcrumb-item active">Usuario registrado</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Usuario registrado</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-7">
                                                <div class="pl-lg-4">
                                                    <!-- Product title -->
                                                    <h3 class="mt-0"> Usuario: {{$usuario->username}}   </h3>
                                                      <h3 class="mt-0">Email: {{$usuario->email}}</h3>
                                                    <p class="mb-1">Fecha de registro del usuario: {{$usuario->created_at}} </p>
                                                    <p class="font-16">
                                                        <span class="text-warning mdi mdi-star"></span>
                                                        <span class="text-warning mdi mdi-star"></span>
                                                        <span class="text-warning mdi mdi-star"></span>
                                                        <span class="text-warning mdi mdi-star"></span>
                                                        <span class="text-warning mdi mdi-star"></span>
                                                    </p>
                                                     @if($usuario->state =='activo')
                                                       <div class="mt-12">
                                                      <h2 v-if="isShowing == false"><span class="badge badge-success-lighten">Activo</span><a href="javascript: void(0);" class="text-muted" @click="isShowing ^= true"><h4>Cambiar estado</h4> <i class="mdi mdi-square-edit-outline ml-2"></i></a> </h2>
                                              <!--       <status-mutation ></status-mutation>-->
                                           
                                                       </div>
                                                   @elseif($usuario->state =='inactivo')
                                                   <div class="mt-12">
                                                       <h2 v-if="isShowing == false"><span class="badge badge-primary-lighten">Inactivo</span><a href="javascript: void(0);" class="text-muted" @click="isShowing ^= true"><i class="mdi mdi-square-edit-outline ml-2"></i></a> </h2>
                                                    </div>
                                                     @elseif($usuario->state =='bloqueado')
                                                   <div class="mt-12">
                                                      <h2 v-if="isShowing == false"><span class="badge badge-danger-lighten">Bloqueado</span><a href="javascript: void(0);" class="text-muted" @click="isShowing ^= true"><i class="mdi mdi-square-edit-outline ml-2"></i></a> </h2>
                                                        
                                                    </div>
                                                    @endif
                                                    <!-- Product description -->
                                                    <div class="mt-4">
                                                        <h3 class="mt-0">Cedula : {{$people->ci}}</h3>
                                                        <h3> </h3>
                                                    </div>
                                                    <div class="mt-4">
                                                        <h3 class="mt-0">Pais de residencia: {{$people->nacionality}}</h3>
                                                      
                                                    </div>
                                                
                                                    </div>
                                                </div>
                                              <div class="col-lg-5" v-show="isShowing">
                                                   
                                                    <user-status-component :status="{{$state}}" :usuario="{{$usuario}}" :statu="{{$statu}}"></user-status-component>
                                                    
                                            </div> <!-- end col -->
                                            </div> <!-- end col -->
                                                
                                        </div> <!-- end row-->
                                       </div>
                                        
                                        
                                     <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
             
                                        
                        
                    </div>
                        <!-- end row-->
                        
                    </div> <!-- container -->

                 
                                      
             
<script>
    var vue = new Vue({
  el:"#ap",
  data: {
    isShowing:false,
  
  },
})
</script>
@include('layouts.footer')

