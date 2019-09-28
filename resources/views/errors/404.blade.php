
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
                                    <h1 class="text-error">4<i class="mdi mdi-emoticon-sad"></i>4</h1>
                                    <p class="text-muted mt-3">Parece que has tomado un giro equivocado. No te preocupes ... 
                                        eso
                                        nos pasa a los mejores de nosotros. Aquí está un
                                        pequeño consejo que podría ayudarte a retomar el camino..</p>

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

