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
       <link rel="shortcut icon" href="{{ asset('images/faviicon.ico') }}">


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

 @if(!empty($exito))
       <link href="{{ asset('js/sweetalert/sweetalert2.css') }}" rel="stylesheet" />
     @endif

    </head>

@include('layouts.nav')

    <body>
        <br><br>
        
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Tabla de personas pendientes para realizar usuario </h4>
                                        <p class="text-muted font-14 mb-4">
                                            En esta seccion estan listados todas las personas registradas en el sistema 
                                        </p>

                                        <div class="table-responsive-lg">
                                            <table class="table table-striped table-centered mb-0">
                                          

                                            <thead>
                                                <tr>
                                                    <th>Nombre</th>
                                                    <th>Apellido</th>
                                                    <th>Nacionalidad</th>
                                                    <th>Cedula</th>
                                                    <th>Link de facebook</th>
                                                    <th>Dirección</th>
                                                    <th>Acción </th>
                                                </tr>
                                            </thead>
                                        
                                        @foreach($people as $person )
                                            <tbody>
                                                <tr>
                                                    
                                                    <td>{{$person->name}}</td>
                                                    <th>{{$person->surname}}</th>
                                                    <th>{{$person->nacionality}}</th>
                                                    <th>{{$person->ci}}</th>
                                                    <th><a href="{{$person->link}}" target="_blank">{{$person->link}}</a></th>
                                                    <th>{{$person->address}}</th>
                                                    
                                                  <th> <a href="/people/{{$person->id}}" class="btn btn-primary"><i class="mdi mdi-account-search-outline"></i></a> </th>
                                                  <th> <a href="/people/destroy/{{$person->id}}" class="btn btn-danger"><i class="mdi mdi-delete "></i> </a> </th>
                                               </tr>
                                            </tbody>
                                              @endforeach
                                        </table>

                                    </div> <!-- end card body-->
                                </div>
                                </div> <!-- end card -->
                            </div><!-- end col-->
                        </div>
            </body>

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
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>

        <!-- END wrapper -->


     

        <div class="rightbar-overlay"></div>


        <script src="{{ asset('js/app.min.js') }}"></script>

        @if(!empty($exito))
            <script src="{{ asset('js/sweetalert/sweetalert2.js') }}"></script>
            <script src="{{ asset('js/sweetalert/sweetalert2.all.js') }}"></script>
                                           <!-- Include this after the sweet alert js file -->
            <!--    @include('sweet::alert')-->
            <script>

            Swal.fire({
              title: 'Información eliminada con exito.',
              html:
                'Gracias por colaborar en la plataforma. ',
              width: 600,
              padding: '2em',
              background: '#fff url()',
              backdrop: `
               rgba(27, 101, 176, 0.3)
                url("/images/logo2.png")
                center left
                no-repeat
              `
            })
            </script>
            @endif

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

