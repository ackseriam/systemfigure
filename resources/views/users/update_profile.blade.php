



{!! Form::open(['url' => ['/users/update_profile',$usuario->id],'class' => 'needs-validation', 'files' => true, "novalidate"]) !!}
@method('PUT')   

<body class="authentication-bg">
    @csrf
 
               <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Nueva contraseña') }}</label>

                  <div class="col-md-8">
                      <input id="password" type="text" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" value="" name="password" required>

                      @if ($errors->has('password'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('password') }}</strong>
                          </span>
                      @endif
                  </div>
                </div>
                <!--
                  <div class="form-group row">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar contraseña') }}</label>

                      <div class="col-md-8">
                                <input id="password-confirm" type="text" class="form-control" name="password_confirmation" value=""required>
                            </div>
                </div>-->
   
  </body>   
<script>
  var vue = new Vue({
  el:"#ap",
  data: {

  }
})
</script>
<br>
<div class="">
    <input type="submit" value="Guardar" class="btn btn-primary">
</div>


 

{!! Form::close() !!}