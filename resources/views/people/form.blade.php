<!-- -aqui se usa dicho formulario en create y edit

 -->

{!! Form::open(['url' => '/people','class' => 'app-form', 'files' => true]) !!} <!-- Aqui el 'route' => $product->url, es para cuando se actualiza los datos 
llamando al metodo especificado en el controlador y se especifica el $product->id para identificar el id que se va actualizar,
 $product->method() es para que cuando se entre al formulario de actualizacion en ves de ser POST se convierte en PUT
 Indicado en el archivo Product.php
 
 los signos de !! es para que al imprimir html no se muestre detrasdatos como tal del usuario y por lo tanto no poderse inyectar los datos -->
<!-- Esto es para lo del formulario con laravel collective-->

<div>
    {!! Form::label('name', 'Nombre completo') !!}
  <!-- en el segunda comilla se coloca los datos para editar el formulari
   por ejemplo colocando $product->title-->
    {!! Form::text('name','',['class'=> 'form-control']) !!}
</div>
<div>
    {!! Form::label('surname', 'Apellido completo') !!}
  <!-- en el segunda comilla se coloca los datos para editar el formulari
   por ejemplo colocando $product->title-->
    {!! Form::text('surname','',['class'=> 'form-control']) !!}
</div>
<div>
    {!! Form::label('email','Correo Electronico ') !!}
    {!! Form::text('email','', ['class'=> 'form-control']) !!}
</div>

<div>
    {!! Form::label('nacionality','Nacionalidad ') !!}
    {!! Form::text('nacionality','', ['class'=> 'form-control']) !!}
</div>

<div>
    {!! Form::label('ci','Cedula de identidad') !!}
    {!! Form::text('ci','', ['class'=> 'form-control']) !!}
</div>
<br>
<div>
    {!! Form::label('image_url','Subir foto de nota con la cedula') !!}
    {!! Form::file('image_url', $attributes = array()) !!}
</div>
<br>
<div>
    {!! Form::label('img_ci','Subir imagen de la cedula') !!}
    {!! Form::file('img_ci', $attributes = array()) !!}
</div>



<div>
    {!! Form::label('address','Dirección de residencia') !!}
    {!! Form::textarea('address','', ['class'=> 'form-control']) !!}
</div>


<br>

<div class="class">
    <input type="submit" value="Guardar" class="btn btn-primary">
</div>


{!! Form::close() !!}
