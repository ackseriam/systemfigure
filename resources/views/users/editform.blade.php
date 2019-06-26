{!! Form::open(['url' => ['/users/update_info',$usuario->id],'class' => 'needs-validation', 'files' => true, "novalidate"]) !!}
@method('PUT')   
    <div id="ap">
    
    <div class="form-group position-relative mb-3">
        <label for="validationTooltip01">Nombre del usuario </label>
        {!! Form::text('username',$usuario->username,['class'=> 'form-control', 'id'=>"validationTooltip01", "placeholder"=>"Nombre del usuario", "required"]) !!}
        <div class="valid-tooltip">
            Muy bien
        </div>
        <div class="invalid-tooltip">
           El campo no puede quedar vacio
        </div>
    </div>
       <div class="form-group position-relative mb-3">
          <label for="email">{{ __('Correo electronico') }}</label>
              <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"  value="{{$usuario->email}} "required>

              @if ($errors->has('email'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif
          
      </div>
        <div class="form-group mb-3">        
    <h4 class="header-title">¿Editaras contraseña?</h4>
    <button type="button" class="btn btn-primary"  @click="isShowing ^= true">Presionar</button>
  </div>
 <div v-show="isShowing">
       <div class="form-group row">
              <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

              <div class="col-md-8">
                  <input id="password" type="text" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"  name="password" >

                  @if ($errors->has('password'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
              </div>
          </div>

          <div class="form-group row">
              <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar contraseña') }}</label>

              <div class="col-md-8">
                  <input id="password-confirm" type="text" class="form-control" name="password_confirmation" >
              </div>
          </div>
  </div>
   <div class="form-group mb-3">        
      <h4 class="header-title">Rol</h4>
       <select class="form-control" name="rol"> 
          <option value="{{$role}}">{{$role}}</option>
          <option value="admin">Administrador</option>
          <option value="editor">Editor lvl</option>
           <option value="editor0">Editor lvl0</option>
          <option value="task">Taskero de Level</option>
          <option value="task0">Taskero de Level0</option>
          <option value="vpnlevel">Taskero VPN level</option>
          <option value="buyer">Comprador</option>

      </select>   
  </div>
     
                        
  

   </div>
     
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