

@include('layouts.head')


    <body class="authentication-bg">

        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                                    
                    <div class="col-lg-6">
                        <div class="card">
                            <!-- Logo-->
                            <div class="card-header pt-4 pb-4 text-center bg-primary">
                                <a href="#">
                                    <span><img src="{{ asset('images/logo2.png') }}" alt="" width="200"></span>
                                </a>
                            </div><br>
                              

                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <h4 class="text-dark-50 text-center mt-0 font-weight-bold">Registrar datos personales </h4>
                                    <p class="text-muted mb-4">Sus datos personales solo seran usados para uso exclusivamente de la plataforma para su seguridad y para la comunidad</p>
                                </div>


                                @include('people.form')
                             <div class="text-center w-75 m-auto">
                                     <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-1">
                                            <p class="text-muted mb-4">
                                            <a class="btn btn-primary" href="{{ url('') }}">
                                                {{ __('Volver al inicio') }}
                                            </a>
                                            </p>
                                     </div>
                                  </div>
                               </div>

                            </div> <!-- end card-body -->
                            
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p class="text-muted">¿Ya tienes una cuenta? <a href="{{url('login')}}" class="text-muted ml-1"><b>Inciar sesión</b></a></p>
                            </div> <!-- end col-->
                        </div>

                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <footer class="footer footer-alt">
           2019 © Figure Taskeros
        </footer>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
    </body>


@include('layouts.footer')
                        