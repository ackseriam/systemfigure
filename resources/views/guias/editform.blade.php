{!! Form::open(['url' => ['/guias/update',$guia->id],'class' => 'needs-validation', 'files' => true, "novalidate"]) !!}
@method('PUT')   
    <div id="ap">
    	
    <div class="form-group position-relative mb-3">
        <label for="validationTooltip01">Nombre de la guia</label>
        {!! Form::text('name',$guia->name,['class'=> 'form-control', 'id'=>"validationTooltip01", "placeholder"=>"Nombre de guia", "required"]) !!}
        <div class="valid-tooltip">
            Muy bien
        </div>
        <div class="invalid-tooltip">
           El campo no puede quedar vacio
        </div>
    </div>
   <div class="form-group mb-3">        
	    <h4 class="header-title">Level</h4>
	   

	    <select class="custom-select mt-3" name="level" required >
	    	<option value="{{$guia->level}}">Level {{$guia->level}}</option>
	        <option value="0">Level 0</option>
	        <option value="1">Level 1</option>
	        <option value="2">Level 2</option>
	        <option value="3">Level 3</option>
	    </select> 
  </div>
   <br>
 <div class="form-group position-relative mb-3">
		<label for="validationTooltip02">Numero de campos</label>
        <input type="text" class="form-control" id="validationTooltip02" placeholder="Numero de campos" value="{{$guia->number_campos}}" data-toggle="touchspin"  name="number_campos" required>
        <div class="valid-tooltip">
        Muy bien
    </div>
    <div class="invalid-tooltip">
       El campo no puede quedar vacio
    </div>
</div>



<div class="form-group position-relative mb-3"> 
	   <label for="validationTooltip03">Nombre  de campos de texto</label>
   
    {!! Form::text('names_campo',$guia->names_campo,['class'=> 'form-control','id'=>"validationTooltip03", "placeholder"=>"Nombre de los campos", "required"]) !!}
    <div class="valid-tooltip">
        Muy bien
    </div>
    <div class="invalid-tooltip">
       El campo no puede quedar vacio
    </div>
</div>
                             

 <div class="form-group mb-3"> 
 	 <label>Imagen de guia: </label>
      <a href="javascript: void(0);" class="text-center d-block mb-0">
      <img src="{{ asset('images_guias/')}}/{{$guia->img}}" class="img-fluid" style="max-width: 800px;" alt="No ese encontro imagen" /></a>
 </div>
 @if($guia->img == null)
  <div class="form-group mb-3">        
    <h4 class="header-title">Actualmente la guia no contiene una imagen..</h4>
    <button type="button" class="btn btn-primary"  @click="isShowing2 ^= true">Presionar si requiere insertar la imagen</button>
  </div>
   <div v-show="isShowing2">
	 <div class="form-group mb-3">  
	 	
	    {!! Form::label('img','Editar imagen') !!}
	    {!! Form::file('img', $attributes = array(),  ['class'=> 'form-control',"required" ]) !!}
	</div>
  </div>
  @else

   <div class="form-group mb-3">        
    <h4 class="header-title">Actualmente contiene una imagen..</h4>
    <button type="button" class="btn btn-primary"  @click="isShowing2 ^= true">Presionar si requiere editar la imagen</button>
  </div>
   <div v-show="isShowing2">
	 <div class="form-group mb-3">  
	    {!! Form::label('img','Editar imagen') !!}
	    {!! Form::file('img', $attributes = array(),  ['class'=> 'form-control',"required" ]) !!}
	</div>
  </div>

  @endif
@if($guia->number_campos_img != null)
 <div class="form-group mb-3">  
 	<h3 class="header-title">Editar Campo de imagenes</h3>
 		<div class="form-group position-relative mb-3">
	   		<label for="validationTooltip02">Numero de campos de las imagenes</label>
	            <input type="text" class="form-control" id="validationTooltip02" placeholder="Numero de campos" data-toggle="touchspin" value="{{}}"   name="number_campos_img" >
	            <div class="valid-tooltip">
	            Muy bien
	        </div>
	        <div class="invalid-tooltip">
	           El campo no puede quedar vacio
	        </div>
       </div>

 </div>
 @else
 <div class="form-group mb-3">        
    <h4 class="header-title">Actualmente no existen campos de imagenes en esa guia.</h4>
    <button type="button" class="btn btn-primary"  @click="isShowing ^= true">Presionar si existen imagenes</button>
  </div>
@endif
  
  <div v-show="isShowing">
  	
  	 	<div class="form-group position-relative mb-3">
	   		<label for="validationTooltip02">Numero de campos de las imagenes</label>
	            <input type="text" class="form-control" id="validationTooltip02" placeholder="Numero de campos" data-toggle="touchspin"  name="number_campos_img" >
	            <div class="valid-tooltip">
	            Muy bien
	        </div>
	        <div class="invalid-tooltip">
	           El campo no puede quedar vacio
	        </div>
       </div>
     <div class="form-group position-relative mb-3"> 
   	   <label for="validationTooltip03">Nombre  de campos de las imagenes</label>
	   
	    {!! Form::text('names_campo_img','',['class'=> 'form-control','id'=>"validationTooltip03", "placeholder"=>"Nombre de los campos", ]) !!}
        <div class="valid-tooltip">
            Muy bien
        </div>
        <div class="invalid-tooltip">
           El campo no puede quedar vacio
        </div>
   </div>
<!-- probar con el vue creado GuiasComponent.vue-->
  </div>
<br>


</div>
<div class="class">
    <input type="submit" value="Guardar" class="btn btn-primary">
</div>
 <input type="hidden" name="status" value="activo">           
<script>
	var vue = new Vue({
  el:"#ap",
  data: {
    isShowing:false,
    isShowing2:false,
  },

    })

</script>


{!! Form::close() !!}