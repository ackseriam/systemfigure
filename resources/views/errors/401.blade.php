
@include('layouts.head')

        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card">
                            <!-- Logo -->
                            <div class="card-header pt-4 pb-4 text-center bg-primary">
                                <a href="index.html">
                                    <span><img src="{{ asset('images/logo2.png') }}" alt="" width="200"></span>
                                </a>
                            </div>

                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h1 class="text-error">4<i class="mdi mdi-emoticon-sad"></i>4</h1>
                                    <h4 class="text-uppercase text-danger mt-3">No estas autorizado para ingresar a esta sección</h4>
                                    <p class="text-muted mt-3">Esta seccion del sistema solo esta permitido para un grupo de usuarios en la cual usted no pertenece.</p>

                                    <a class="btn btn-info mt-3" href="{{ route('home') }}"><i class="mdi mdi-reply"></i> Regresar </a>
                                </div>
                            </div> <!-- end card-body-->
                        </div>
                        <!-- end card -->
                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->
          </body>

