{!! Form::open(['url' => ['/registers/update',$register->id],'class' => 'needs-validation',"novalidate"]) !!}
@method('PUT')   
    <div id="ap">
    
    <div class="form-group position-relative mb-3">
        <label for="validationTooltip01">Cambiar el estado del Registro </label>
       	<div class="form-group mb-3">        
	      <h4 class="header-title">Estado del registro</h4>
	       <select class="form-control" name="status"> 
	          <option value="{{$register->status}}">{{$register->status}}</option>
	          @if($register->status=="si")
	          <option value="no">No</option>
	          @else          
	          <option value="si">Si</option>
	          @endif
	      </select>   
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