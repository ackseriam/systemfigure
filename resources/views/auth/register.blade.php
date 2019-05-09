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
                                            <h4 class="text-dark-50 text-center mt-0 font-weight-bold">{{ __('Registro de usuario') }}</h4>
                                            <p class="text-muted mb-4">Ingrese los datos indicados en el formulario</p>
                                        </div>

                     <form method="POST" action="{{ route('register') }}">
                         @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                            <div class="col-md-8">
                                <input id="name" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ $nick}}" required autofocus  readonly="readonly" />

                                @if ($errors->has('username'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"  value="{{$person->email}} "required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-8">
                                <input id="password" type="text" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" value="{{$password}}"name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-8">
                                <input id="password-confirm" type="text" class="form-control" name="password_confirmation" value="{{$password}}"required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Rol') }}</label>

                            <div class="col-md-8">
                                <select class="form-control" name="rol"> 
                                <option value="admin">Administrador</option>
                                <option value="editor">Editor</option>
                                <option value="task">Taskero de Level</option>
                                <option value="task0">Taskero de Level0</option>

                                </select>   
                             </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Persona') }}</label>

                            <div class="col-md-8">
                            <select class="form-control" name="person">
                                
                                <option value="{{$person->id}}">{{$person->name}}, {{$person->ci}}</option>
                               
                            </select>
                            </div>
                            
                        </div>
                        <input type="hidden" value="activo">

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                   </form>
                            </div> <!-- end card-body -->
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

@include('layouts.footer')
