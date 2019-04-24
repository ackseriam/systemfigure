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
                                         @if($level==0)
                                         
                                        <h4 class="header-title">Tabla de guias level 0 </h4>
                                        <p class="text-muted font-14 mb-4">
                                            En esta seccion estan listados todas las guias level 0
                                        </p>
                                        @include('guias.level')
                                        @else
                                         <h4 class="header-title">Tabla de guias de level </h4>
                                        <p class="text-muted font-14 mb-4">
                                             En esta seccion estan listados todas las guias de level 
                                        </p>
                                        @include('guias.level')
                                        @endif
     

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

