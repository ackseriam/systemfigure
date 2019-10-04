<!DOCTYPE html>
<html lang="">

    <head>
        <meta charset="utf-8" />
        <title>Figure Eight Task</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">

         <!-- third party css -->
        <link href="{{ asset('css/vendor/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />

        <link href="{{ asset('css/vendor/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/vendor/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/vendor/select.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <!-- third party css end -->

        <!-- App css -->
        <link href="{{ asset('css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/app.min.css') }}" rel="stylesheet" type="text/css" />
         <script src="{{ asset('js/app.js') }}" defer></script>
<script src="{{asset('js/app.js')}}"></script>
 <link href="{{ asset('js/sweetalert/sweetalert2.css') }}" rel="stylesheet" />


  

    </head>

@include('layouts.nav')
 <body>
 	           <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right" onmousedown='return false;' onselectstart="return false;">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tablero</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Correcciones</a></li>
                                            <li class="breadcrumb-item active">Buscar correciones</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title" onmousedown='return false;' onselectstart="return false;">Buscar guia para enviar Corrección</h4>
                                </div>
                            </div>
                        </div>   
						 	 <!-- Inline Form -->
                         <div class="row">
                            <div class="col-md-12 center">
                                <div class="card">
                                    <div class="card-body">
                                        <div onmousedown='return false;' onselectstart="return false;">
                                        <h4 class="header-title">Ingresa los datos de la guia para enviar la correccion</h4>
                                         <p class="text-muted mb-4">Buscar los datos de la guia para </p>

                                        <p class="text-muted mb-3">
                                        </p>
                            		  <h6 class="font-13 mt-3">Datos de la guia </h6>
                                    </div>
                                        @if($level==0)
								 		{{ Form::open(['url'=> 'corrections/search/0', 'method'=> 'GET', 'class' => '']) }}
                                        @else
                                        {{ Form::open(['url'=> 'corrections/search/1', 'method'=> 'GET', 'class' => '']) }}
                                        @endif
								 		<div class="form-row align-items-center">

									 		<div class="col-auto">
									 	    	{{Form::text('name', null, ['class'=> 'form-control mb-2', 'placeholder' => 'Nombre de la guia'])}}
									 	   </div>
                                           <div class="col-auto">
                                               
                                           </div>
									 	   
									 	    <div class="col-auto">
                                                    <button type="submit" class="btn btn-primary mb-2">Buscar</button>
                                                </div>
								 	     </div>
								 	</div>
								 	  {{ Form::close()}}
								 	    <div class="col-xl-12" >
                                <div class="card">
                                    <div class="card-body">

                                      
                                               <table id="basic-datatable" class="table dt-responsive nowrap" width="100%">    
                                                  <thead>
                                                    <tr>
                                                        <th>Nombre</th>
                                                        <th>Imagen</th>
                                                        <th>Estado</th>
                                                        <th>Level</th>
                                                        <th>Correcciones</th>
                                                        <th>Guia</th>
                                                    </tr>
                                                </thead>
                                                   
                                                <tbody>
                                                 @foreach($guias as $guia)
                                                    <tr>
                                                        <td>{{$guia->name}}</td>
                                                        <td><a href="javascript: void(0);" class="text-center d-block mb-4">
                                                        <img src="{{ asset('images_guias/')}}/{{$guia->img}}" class="img-fluid" style="max-width: 280px;" alt="No ese encontro imagen" /></a></td>
                                                         <td>{{$guia->status}}</td>
                                                        <td>{{$guia->level}}</td>
                                                        
                                                       
                                                         <td class="table-action">
                                                            <a href="/corrections/correc_user/{{$guia->id}}" class="action-icon" title="Ver correcciones" class=""> <i class="mdi mdi-account-search-outline btn btn-primary "></i></a>
                                                        
                                                            <a href="/corrections/create/{{$guia->id}}" class="action-icon" title="Enviar corrección" class=""> <i class="mdi mdi-plus btn btn-primary "></i></a>
                                                        </td>
                                                        <td>
                                                          <a href="/guias/{{$guia->id}}" class="btn btn-primary" title="Ver guia"> <i class="mdi mdi-account-search-outline"></i></a> 
                                                       
                                                         
                                                        @if(($rol=='foun') || ($rol=='admin'))
                                                      
                                                       
              
                                                          <a href="/guias/edit/{{$guia->id}}" class="btn btn-success" title="Editar guia"><i class="mdi mdi-square-edit-outline"></i></a>
                                                       
                                                       @endif
                                                       </td>
                                                       
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                                
                                            </table>
                                            {{$guias->render()}}
                                      
                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                                   
                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                            </div> <!-- end col -->
                        </div>

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
                                    <a href="{{route('nosotros')}}">Acerca de nosotros</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
				 
 	    
 	 			   
 </body>
     <script src="{{ asset('js/app.min.js') }}"></script>

        <script src="{{ asset('js/vendor/jquery.dataTables.js') }}"></script>
        <script src="{{ asset('js/vendor/dataTables.bootstrap4.js') }}"></script>
        <script src="{{ asset('js/vendor/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('js/vendor/responsive.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('js/vendor/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('js/vendor/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('js/vendor/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('js/vendor/buttons.flash.min.js') }}"></script>
        <script src="{{ asset('js/vendor/buttons.print.min.js') }}"></script>
        <script src="{{ asset('js/vendor/dataTables.keyTable.min.js') }}"></script>
        <script src="{{ asset('js/vendor/dataTables.select.min.js') }}"></script>
   

           <!-- Include this after the sweet alert js file -->
        <!-- demo app -->
    <!--    <script src="{{ asset('js/pages/demo.datatable-init.js') }}"></script>
-->

          <script type="text/javascript">
           
    $("#basic-datatable").DataTable({keys:!0,language:{paginate:{
        previous:"<i class='mdi mdi-chevron-left'>",
        next:"<i class='mdi mdi-chevron-right'>"}}
        ,drawCallback:function(){$(".dataTables_paginate > .pagination").addClass("pagination-rounded")}});

          </script>
    </body>
</html>

