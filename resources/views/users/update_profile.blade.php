



{!! Form::open(['url' => ['/users/update_profile',$usuario->id],'class' => 'needs-validation', 'files' => true, "novalidate"]) !!}
@method('PUT')   
    
<body class="authentication-bg">
    @csrf
               <div id="ap">
                <div class="form-group mb-3">        
            <h4 class="header-title">Cambiar la imagen de su perfil usuario.</h4>
            <button type="button" class="btn btn-primary"  @click="isShowing ^= true">Presionar si requiere editar la imagen de perfil</button>
          </div>
           <div v-show="isShowing">
              <div class="form-group mb-3">  
            
              {!! Form::label('img','Editar imagen') !!}
              {!! Form::file('img', $attributes = array(),  ['class'=> 'form-control',"required" ]) !!}
           </div>
        </div>
               <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Nueva contraseña') }}</label>

                  <div class="col-md-8">
                      <input id="password" type="text" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" value="" name="password" >

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
              </div>
   
  </body>   
<script>
  var vue = new Vue({
  el:"#ap",
  data: {
    isShowing:false,
    isShowing2:false,
  }
})
</script>
<br>
<div class="">
    <input type="submit" value="Guardar" class="btn btn-primary">
</div>


 

{!! Form::close() !!}