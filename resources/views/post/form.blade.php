{!! Form::open(['url' => '/post/','class' => 'needs-validation', 'files' => true, "novalidate"]) !!}   

 @csrf

  <br> 
                        
    <div id="ap">
    <div class="form-group position-relative mb-3">
        <label for="validationTooltip01">Titulo del Post</label>
        {!! Form::text('title','',['class'=> 'form-control', 'id'=>"validationTooltip01", "placeholder"=>"Titulo del post", "required"]) !!}
        <div class="valid-tooltip">
            Muy bien
        </div>
        <div class="invalid-tooltip">
           El campo no puede quedar vacio
        </div>
    </div>
   
   <br>
 <div class="form-group position-relative mb-3">
		<label for="validationTooltip02">Contenido del post</label>
    <textarea class="form-control" name="content" cols="30" rows="10"  id="validationTooltip02" placeholder="Contenido del post" data-toggle="touchspin"   required></textarea>

        <div class="valid-tooltip">
        Muy bien
    </div>
    <div class="invalid-tooltip">
       El campo no puede quedar vacio
    </div>
</div>

<!-- probar con el vue creado GuiasComponent.vue-->
  </div>

           
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

