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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tablerp</a></li>
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
                                            <div class="col-lg-5">
                                                <!-- Product image -->
                                                <h3>Foto</h3>

                                                <a href="javascript: void(0);" class="text-center d-block mb-4">
                                                    <img src="{{ asset('images_user/')}}/{{$people->img_url}}" class="img-fluid" style="max-width: 280px;" alt="No existe imagen de usaurio" />
                                                </a>
                                                <h3>Cedula</h3>
                                                 <a href="javascript: void(0);" class="text-center d-block mb-4">
                                                    <img src="{{ asset('images_user/')}}/{{$people->img_ci}}" class="img-fluid" style="max-width: 280px;" alt="No existe imagen de usaurio" />
                                                </a>
                                                	
                                            </div> <!-- end col -->
                                            <div class="col-lg-7">
                                                <div class="pl-lg-4">
                                                    <!-- Product title -->
                                                    <h3 class="mt-0"> {{$usuario->username}}   <a href="javascript: void(0);" class="text-muted"><i class="mdi mdi-square-edit-outline ml-2"></i></a> </h3>
                                                      <h3 class="mt-0">{{$usuario->email}}</h3>
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
                                                        <h2><span class="badge badge-success-lighten">Activo</span></h2>
                                                       </div>
                                                   @elseif($usuario->state =='inactivo')
                                                   <div class="mt-12">
                                                        <h2><span class="badge badge-primary-lighten">Inactivo</span></h2>
                                                    </div>
                                                     @elseif($usuario->state =='bloqueado')
                                                   <div class="mt-12">
                                                        <h2><span class="badge badge-danger-lighten">Bloqueado</span></h2>
                                                    </div>
                                                    @endif
                                                    <!-- Product description -->
                                                    <div class="mt-4">
                                                        <h6 class="font-14">Cedula : </h6>
                                                        <h3> {{$people->ci}}</h3>
                                                    </div>
                                                    <div class="mt-4">
                                                        <h6 class="font-14">Pais de residencia: </h6>
                                                        <h3> {{$people->nacionality}}</h3>
                                                    </div>
                                              
                                                    <!-- Quantity -->
												
												  
												  <div class="mt-4">
                                                        <div class="d-flex">
                                                            <button type="button" class="btn btn-primary ml-2" @click="isShowing ^= true"><i class=""></i> Ver datos de persona</button>
                                                          
                                                        </div>
                                                    </div>
											
                                                
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->
                                         
                                                <div class="table-responsive mt-4" v-show="isShowing">
												  <table class="table table-bordered table-centered mb-0">
												      <thead class="thead-light">
												          <tr>
												              <th>Nombre de persona</th>
												              <th>Cedula</th>
												              <th>Dirección</th>
												          </tr>
												      </thead>
												      <tbody>
												          <tr>
												              <td>{{$people->name}} {{$people->surname}}</td>
												              <td>{{$people->ci}}</td>
												              <td>
												         		{{$people->address}}
												              </td>
												              
												          </tr>
												      </tbody>
												  </table>
												</div> 
												
                                        </div> <!-- end row-->
                                       </div>
                                        
                                        
                                     <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
             
                            			
                        
                    </div>
                        <!-- end row-->
                        
                    </div> <!-- container -->

                       <!--
                                        <div id="app">
                                        <person-component v-bind:usuario="{{$usuario}}"></person-component>																	
                                     </div> -->

             
<script>
	var vue = new Vue({
  el:"#ap",
  data: {
    isShowing:false,
  }
})
</script>

@include('layouts.footer')

