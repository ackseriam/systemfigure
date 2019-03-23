<!DOCTYPE html>
<html lang="">

    <head>
        <meta charset="utf-8" />
        <title>Figure taskeros</title>
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

    </head>

@include('layouts.nav')

    <body>
        <br><br>
        
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        @if($tabla=='inactivo')
                                        <h4 class="header-title">Tabla usuarios inactivos en el sistema </h4>
                                        <p class="text-muted font-14 mb-4">
                                            En esta seccion estan listados todos los usuarios inactivos en el sistema 
                                        </p>
                                        @elseif($tabla=='bloqueado')
                                         <h4 class="header-title">Tabla usuarios bloqueados en el sistema </h4>
                                        <p class="text-muted font-14 mb-4">
                                            En esta seccion estan listados todos los usuarios bloqueados en el sistema 
                                        </p>
                                        @else
                                         <h4 class="header-title">Tabla de usuarios registrados en el sistema </h4>
                                        <p class="text-muted font-14 mb-4">
                                            En esta seccion estan listados todos los usuarios registrados en el sistema 
                                        </p>
                                        @endif
                                        <!--
                                        <div class="dropdown float-right">

                                                    <a href="javascript: void(0);" class="right-bar-toggle">Ver todos</a>

                                            </div><br>-->


                                        <table id="basic-datatable" class="table dt-responsive nowrap" width="100%">
                                          

                                            <thead>
                                                <tr>
                                                    <th>Username</th>
                                                    <th>email</th>
                                                    <th>Estado de usuario</th>
                                                    <th>Nombre</th>
                                                    <th>Acción</th>

                                                </tr>
                                            </thead>
                                        
                                        @foreach($usuarios as $usuario )
                                            <tbody>

                                                <tr>
                                                    
                                                    <td>{{$usuario->username}}</td>
                                                    <th>{{$usuario->email}}</th>

                                                    @if($usuario->state=="inactivo")
                                                    <th class="mt-12"><h3><span class="badge badge-primary-lighten">{{$usuario->state}}</span></h3></th>
                                                    @elseif($usuario->state=="bloqueado")
                                                    <th class="mt-12"><h3><span class="badge badge-danger-lighten">{{$usuario->state}}</span></h3></th>
                                                    @elseif($usuario->state=="activo")
                                                    <th class="mt-12"><h3><span class="badge badge-success-lighten">{{$usuario->state}}</span></h3></th>
                                                    @endif
                                                    <th>{{$usuario->name}}</th>
                                                    
                                                  <th> <a href="/users/{{$usuario->id}}" class="btn btn-primary" title="Ver usuario"> <i class="mdi mdi-account-search-outline"></i></a> 
                                                    @if(!empty($editar))
                                                    <a href="/users/edit/{{$usuario->id}}" class="btn btn-success" title="Editar Usuario"><i class="mdi mdi-square-edit-outline"></i></a>
                                                    @endif
                                                   </th>
                                               </tr>
                                            </tbody>
                                              @endforeach
                                        </table>

                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                        </div>
            </body>

                <!-- Footer Start -->
               
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                2018 - 2019 ©Figure Taskeros
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

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>

        <!-- END wrapper -->


     

        <div class="rightbar-overlay"></div>


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

