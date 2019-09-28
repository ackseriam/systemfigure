
@include('layouts.head')

        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card">
                            <!-- Logo -->
                            <div class="card-header pt-4 pb-4 text-center bg-primary">
                                <a href="{{ route('home') }}">
                                    <span><img src="{{ asset('images/logo2.png') }}" alt="" width="200"></span>
                                </a>
                            </div>

                            <div class="card-body p-4">

                                <div class="text-center">
                                    <img src="assets/images/startman.svg" height="120" alt="File not found Image">

                                    <h1 class="text-error mt-4">500</h1>
                                    <h4 class="text-uppercase text-danger mt-3">Error interno del servidor</h4>
                                    <p class="text-muted mt-3">¿Por qué no intentas actualizar tu página? o puedes contactar a nuestro equipo de  <a href="https://www.facebook.com/f8task/" class="text-muted"><b>soporte en Facebook</b></a></p>

                                    <a class="btn btn-info mt-3" href="{{ route('home') }}"><i class="mdi mdi-reply"></i> Regresar</a>
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

