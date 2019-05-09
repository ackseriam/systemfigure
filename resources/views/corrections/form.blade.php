
{!! Form::open(['url' => '/corrections','class' => 'app-form', 'files' => true]) !!}   

 @for($i=0;  $i < $number_campos; $i++)
  {!! Form::label('text', $campos[$i]) !!} 
  <br> 
   <div class="form-group mb-3">                              
    {!! Form::text($i,'',['class'=> 'form-control']) !!}

  </div>  

@endfor
<br>
@if(!empty($number_campos_img))
 <h4 class="header-title">Imagenes del formulario</h4>
<br>
 @for($y=0;  $y < $number_campos_img; $y++)
   <div class="form-group mb-3">  
  {!! Form::label('text', $campos_img[$y]) !!}
  </div>

    <div class="form-group mb-3">  
    {!! Form::label('img','Subir imagen') !!}
    {!! Form::file($y, $attributes = array(), ['class'=> 'form-control',"required" ]) !!}
</div> 

@endfor
@endif
<input type="hidden" name="id_guias" value="{{$id_guias}}">
<br>
<div class="class">
    <input type="submit" value="Guardar" class="btn btn-primary">
</div>
{!! Form::close() !!}
</div>



