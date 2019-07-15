{!! Form::open(['url' => '/guias/','class' => 'needs-validation', 'files' => true, "novalidate"]) !!}   



  <br> 
                        
    <div id="ap">
    <div class="form-group position-relative mb-3">
        <label for="validationTooltip01">Nombre de la guia</label>
        {!! Form::text('name','',['class'=> 'form-control', 'id'=>"validationTooltip01", "placeholder"=>"Nombre de guia", "required"]) !!}
        <div class="valid-tooltip">
            Muy bien
        </div>
        <div class="invalid-tooltip">
           El campo no puede quedar vacio
        </div>
    </div>
   <div class="form-group mb-3">        
	    <h4 class="header-title">Level</h4>
	   

	    <select class="custom-select mt-3" name="level" required>

	        <option value="0">Level 0</option>
	        <option value="1">Level 1</option>
	        <option value="2">Level 2</option>
	        <option value="3">Level 3</option>
          <option value="vpn">VPN Lvl </option>
	    </select> 
  </div>
   <br>
 <div class="form-group position-relative mb-3">
		<label for="validationTooltip02">Numero de campos de texto</label>
        <input type="text" class="form-control" id="validationTooltip02" placeholder="Numero de campos" data-toggle="touchspin"  name="number_campos" required>
        <div class="valid-tooltip">
        Muy bien
    </div>
    <div class="invalid-tooltip">
       El campo no puede quedar vacio
    </div>
</div>


<div class="form-group position-relative mb-3"> 
	   <label for="validationTooltip03">Nombre  de campos de texto</label>
   <div class="tags-default">
      <input type="text" id="validationTooltip03" name="names_campo" data-role="tagsinput" placeholder="Agregar campos" required />
  </div>
   
    <div class="valid-tooltip">
        Muy bien
    </div>
    <div class="invalid-tooltip">
       El campo no puede quedar vacio
    </div>
</div>
                             

 
 <div class="form-group mb-3">  
    {!! Form::label('img','Subir imagen') !!}
    {!! Form::file('img', $attributes = array(), ['class'=> 'form-control',"required" ]) !!}
</div>


  <div class="form-group mb-3">        
    <h4 class="header-title">¿Existen imagenes en esta guia?</h4>
    <button type="button" class="btn btn-primary"  @click="isShowing ^= true">Presionar si existen imagenes</button>
  </div>
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


</div>
 <input type="hidden" name="status" value="activo">           
<script>
	var vue = new Vue({
  el:"#ap",
  data: {
    isShowing:false,
  }
})
</script>
<br>
<div class="class">
    <input type="submit" value="Guardar" class="btn btn-primary">
</div>
{!! Form::close() !!}

