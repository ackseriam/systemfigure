@include('layouts.head')

                                  
<body class="authentication-bg">

                <div class="account-pages mt-5 mb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card">

                                    <!-- Logo -->
                                    <div class="card-header pt-4 pb-4 text-center bg-primary">
                                        <a href="#">
                                            <span><img src="{{ asset('images/logo2.png') }}" alt="" height="80"></span>
                                        </a>
                                    </div>

                                    <div class="card-body p-4">
                                        
                                        <div class="text-center w-75 m-auto">
                                            <h4 class="text-dark-50 text-center mt-0 font-weight-bold">{{ __('Iniciar sesión') }}</h4>
                                            <p class="text-muted mb-4">Ingrese su correo electronico y contraseña para acceder al panel administrativo.</p>
                                        </div>
                                          @if(!empty($sesion))
                                            <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <strong>Sesion previa activa- </strong>  cerrar dicha sesion y vuelva a intentarlo o hable con el Administrador
                                             </div>
                                        @endif
                                        @if(!empty($estado))
                                        @if($status=='bloqueado')
                                            <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <strong>Usted ha sido bloqueado- </strong> Ha sido bloqueado permanentemente de la plataforma, si cree que se trata de un error contactese con el Administrador o soporte(figureeighttasks@gmail.com)
                                             </div>
                                            @elseif($status=='inactivo') 
                                                 <div class="alert alert-info alert-dismissible bg-info text-white border-0 fade show" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <strong>Inactivo- </strong> Actualmente su estado es inactivo en la plataforma, para cambiarlo por favor, contactarse con el Administrador o al soporte(figureeighttasks@gmail.com)
                                             </div>
                                             @endif
                                        @endif
                                         @if(!empty($error_in))
                                             <div class="alert alert-info alert-dismissible bg-info text-white border-0 fade show" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <strong>Inactivo- </strong> Actualmente su estado es inactivo en la plataforma, para cambiarlo por favor, contactarse con el Administrador o al soporte(figureeighttasks@gmail.com)
                                             </div>
                                            @endif
                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf

                                            <div class="form-group">
                                                <label for="email">{{ __('Correo electronico ') }}</label>
                                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                                    @if ($errors->has('email'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                        </span>
                                                    @endif
                                            </div>

                                            <div class="form-group">
                                                <a href="{{ route('password.request') }}" class="text-muted float-right"><small>¿Olvido su contraseña?</small></a>
                                                <label for="password">Contraseña</label>
                                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                              
                                                @if ($errors->has('password'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif
                                            </div>

                                            <div class="form-group mb-3">
                                                <div class="custom-control custom-checkbox">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                        <label class="form-check-label" for="remember">
                                                            {{ __('Remember Me') }}
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row mb-0">
                                                <div class="col-md-8 offset-md-4">
                                                    <button type="submit" class="btn btn-primary">
                                                        {{ __('Login') }}
                                                    </button>
                                                </div>
                                           </div>
                                           <div class="form-group row mb-0">
                                                <div class="col-md-8 offset-md-2">
                                                    @if (Route::has('password.request'))
                                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                                            {{ __('¿Olvidastes tu contraseña?') }}
                                                        </a>
                                                    @endif
                                                 </div>
                                           </div>

                                        </form>
                                    </div> <!-- end card-body -->
                                </div>
                        <!-- end card -->
                            <!--
                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p class="text-muted">¿ <a href="pages-register.html" class="text-muted ml-1"><b>Sign Up</b></a></p>
                            </div>                         </div>-->
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->
        
        <footer class="footer footer-alt">
            2018 - 2019 © Figure Eight Task
        </footer>

            @if(!empty($_REQUEST['error_in'] ))
           
            <script>

              Swal.fire({
              type: 'info',
              title: 'Tiempo de inactividad ...',
              text: 'No ha tenido actividad en los ultimos minutos. Ingrese de nuevo a la plataforma !',
              footer: '¡Muy bien!'
            })
            </script>
            @endif
        <!-- App js -->
        <script src="assets/js/app.min.js"></script>


        </body>

  