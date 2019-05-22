{!! Form::open(['url' => ['/people/update',$people->id],'class' => 'needs-validation', 'files' => true, "novalidate"]) !!}
@method('PUT')   
    <div id="ap">
    
    <div class="form-group position-relative mb-3">
        <label for="validationTooltip01">Nombre de la persona </label>
        {!! Form::text('name',$people->name,['class'=> 'form-control', 'id'=>"validationTooltip01", "placeholder"=>"Nombre de la persona", "required"]) !!}
        <div class="valid-tooltip">
            Muy bien
        </div>
        <div class="invalid-tooltip">
           El campo no puede quedar vacio
        </div>
    </div>
    <div class="form-group position-relative mb-3">
        <label for="validationTooltip02">Apellido de la persona </label>
        {!! Form::text('surname',$people->surname,['class'=> 'form-control', 'id'=>"validationTooltip02", "placeholder"=>"Apellido", "required"]) !!}
        <div class="valid-tooltip">
            Muy bien
        </div>
        <div class="invalid-tooltip">
           El campo no puede quedar vacio
        </div>
    </div>
    <div class="form-group position-relative mb-3">
        <label for="validationTooltip03">Cedula de identidad </label>
        
        {!! Form::text('ci',$people->ci, ['class'=> 'form-control','id'=>"validationTooltip03", "placeholder"=>"Cedula", "required"]) !!}

        <div class="valid-tooltip">
            Muy bien
        </div>
        <div class="invalid-tooltip">
           El campo no puede quedar vacio
        </div>
    </div>
    <div class="form-group position-relative mb-3">
        <label for="validationTooltip04">Dirección de residencia </label>
        
        {!! Form::text('address',$people->address, ['class'=> 'form-control','id'=>"validationTooltip04", "placeholder"=>"Direccion", "required"]) !!}

        <div class="valid-tooltip">
            Muy bien
        </div>
        <div class="invalid-tooltip">
           El campo no puede quedar vacio
        </div>
    </div>
    <div class="form-group position-relative mb-3">
        <label for="validationTooltip01">Editar la nota con la cedula </label>
      {!! Form::file('image_url', $attributes = array()) !!}
       <button type="button" class="btn btn-primary ml-2" @click="isShowing ^= true"><i class=""></i> Ver imagen</button>
    </div><br>  
     
     <div class="col-lg-5"  v-show="isShowing">

        <a href="javascript: void(0);" class="text-center d-block mb-4">
            <img src="{{ asset('images_user/')}}/{{$people->img_url}}" class="img-fluid" style="max-width: 280px;" alt="No existe imagen de usaurio" />
        </a> 
    </div> 

     <div class="form-group position-relative mb-3">
        <label for="validationTooltip01">Editar la imagen de la cedula</label>
      {!! Form::file('img_ci', $attributes = array()) !!}
      <button type="button" class="btn btn-primary ml-2" @click="isShowing2 ^= true"><i class=""></i> Ver imagen</button>
    </div>
     <div class="col-lg-5"  v-show="isShowing2">
         <a href="javascript: void(0);" class="text-center d-block mb-4">
            <img src="{{ asset('images_user/')}}/{{$people->img_ci}}" class="img-fluid" style="max-width: 280px;" alt="No existe imagen de usaurio" />
        </a>
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