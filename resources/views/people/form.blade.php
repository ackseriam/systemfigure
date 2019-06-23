<!-- -aqui se usa dicho formulario en create y edit

 -->

{!! Form::open(['url' => '/people','class' => 'app-form', 'files' => true]) !!} <!-- Aqui el 'route' => $product->url, es para cuando se actualiza los datos 
llamando al metodo especificado en el controlador y se especifica el $product->id para identificar el id que se va actualizar,
 $product->method() es para que cuando se entre al formulario de actualizacion en ves de ser POST se convierte en PUT
 Indicado en el archivo Product.php
 
 los signos de !! es para que al imprimir html no se muestre detrasdatos como tal del usuario y por lo tanto no poderse inyectar los datos -->
<!-- Esto es para lo del formulario con laravel collective-->

<div>
    {!! Form::label('name', 'Nombre ') !!}
  <!-- en el segunda comilla se coloca los datos para editar el formulari
   por ejemplo colocando $product->title-->
    {!! Form::text('name','',['class'=> 'form-control',"required"]) !!}
</div>
<div>
   {!! Form::label('name', 'Apellido') !!}
  <!-- en el segunda comilla se coloca los datos para editar el formulari
   por ejemplo colocando $product->title-->
    {!! Form::text('surname','',['class'=> 'form-control',"required"]) !!}
</div>
<div>
    {!! Form::label('email','Correo Electronico ') !!}
    {!! Form::text('email','',['class'=> 'form-control',"required"]) !!}
</div><br>
<div>
    {!! Form::label('link','Link de su perfil de Facebook. (Ingresa aqui para indicaciones:) ') !!}
    <!-- Top modal -->
    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#multiple-one">Info</button>  

</p>
    {!! Form::text('link','',['class'=> 'form-control',"required"]) !!}
</div>
  
<div>
    {!! Form::label('nacionality','Nacionalidad ') !!}
    {!! Form::text('nacionality','',['class'=> 'form-control',"required"]) !!}
</div>

<div>
    {!! Form::label('ci','Cedula de identidad') !!}
    {!! Form::text('ci','',['class'=> 'form-control',"required"]) !!}
</div>
<br>
<div>
    {!! Form::label('image_url','Subir foto de nota con la cedula') !!}
    {!! Form::file('image_url', $attributes = array(),['class'=> 'form-control',"required"]) !!}
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
    <div class="card">
    <div class="card-body">
        <!-- Modal -->
        <div id="multiple-one" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="multiple-oneModalLabel" aria-hidden="true">

         
   
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="multiple-oneModalLabel">Encontrar tu URL de Facebook</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                          <i class="dripicons-information h1 text-info"></i>
                        <h5 class="mt-0">Perfil de Facebook</h5>
                        <p>Inicie sesión en <a href="https://www.facebook.com/"  target="_blank" >Facebook</a> , luego haga clic en su nombre en la parte superior derecha de la pantalla.
                        </p>
                    </div>
                     <a href="javascript: void(0);" class="text-center d-block mb-4">
                      <img src="{{ asset('images/Help_facebook1.png')}}" class="img-fluid" style="max-width: 450px;" alt="No existe imagen de guia" />
                     </a>    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-target="#multiple-two" data-toggle="modal" data-dismiss="modal">Siguiente paso</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <!-- Modal -->
        <div id="multiple-two" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="multiple-twoModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                       <h4 class="modal-title" id="multiple-oneModalLabel">Encontrar tu URL de Facebook</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                   <div class="modal-body">
                          <i class="dripicons-information h1 text-info"></i>
                        <h5 class="mt-0">Perfil de Facebook</h5>
                        <p>Copie la URL del perfil de Facebook en la barra de direcciones de su navegador.</p>
                         <a href="javascript: void(0);" class="text-center d-block mb-4">
                      <img src="{{ asset('images/Help_facebook.png')}}" class="img-fluid" style="max-width: 450px;" alt="No existe imagen de guia" />
                     </a> 
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

    </div> <!-- end card-body-->
</div> <!-- end card-->