
<template lang="">
	<section>
		<div class="form-group position-relative mb-3">
	   		<label for="validationTooltip02">Numero de campos de las imagenes</label>
	            <input type="text" class="form-control" id="validationTooltip02" placeholder="Numero de campos" data-toggle="touchspin"  name="number_campos_img" required>
	            <div class="valid-tooltip">
	            Muy bien
	        </div>
	        <div class="invalid-tooltip">
	           El campo no puede quedar vacio
	        </div>
       </div>
	   <div class="form-group position-relative mb-3"> 
	   	   <label for="validationTooltip03">Nombre  de campos de las imagenes</label>
		   
		    {!! Form::text('names_campo_img','',['class'=> 'form-control','id'=>"validationTooltip03", "placeholder"=>"Nombre de los campos", "required"]) !!}
	        <div class="valid-tooltip">
	            Muy bien
	        </div>
	        <div class="invalid-tooltip">
	           El campo no puede quedar vacio
	        </div>
	   </div>
                        
                   

	</section>
</template>

