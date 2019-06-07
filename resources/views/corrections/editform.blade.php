{!! Form::open(['url' => ['/corrections/update',$correction_id],'class' => 'needs-validation', 'files' => true, "novalidate"]) !!}
@method('PUT')   
    <div id="ap">
    
    <div class="form-group position-relative mb-3">
       @for($i=0;  $i < $number_campos; $i++)
			  {!! Form::label('text', $campos[$i]) !!} 
			  <br> 
			   <div class="form-group mb-3">                              
			    {!! Form::text('respues'.$i,'',['class'=> 'form-control',"required"]) !!}

			  </div>  

        {!! Form::text('respues'.$i,$correction->respues.$i,['class'=> 'form-control', 'id'=>"validationTooltip01", "placeholder"=>"Datos de la respuesta", "required"]) !!}
        <div class="valid-tooltip">
            Muy bien
        </div>
        <div class="invalid-tooltip">
           El campo no puede quedar vacio
        </div>
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