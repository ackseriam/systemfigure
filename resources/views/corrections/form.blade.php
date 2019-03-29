
{!! Form::open(['url' => '/corrections','class' => 'app-form', 'files' => true]) !!}   

 @for($i=0;  $i < $number_campos; $i++)
  {!! Form::label('text', $campos[$i]) !!} 
  <br> 
   <div class="form-group mb-3">                              
    {!! Form::text($i,'',['class'=> 'form-control']) !!}

  </div>  

@endfor
<input type="hidden" name="id_guias" value="{{$id_guias}}">

<br>
<div class="class">
    <input type="submit" value="Guardar" class="btn btn-primary">
</div>
{!! Form::close() !!}
</div>



