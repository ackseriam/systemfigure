@include('layouts.head')

 <div class="row">
    <div class="col-lg-4" ></div>
    <div class="col-lg-4" >
        <div class="text-center">
           <img src="{{ asset('images/logofigure2.png') }}" alt="" height="300">
       </div>
   </div>
   <div class="col-sm-4" ></div><br>
</div>

<p>Hola, {{$username}}</p><br>
<p>La comunidad internacional Figure Eight Task se complace en anunciarle que se acaba de aprobar su usuario en la plataforma, sea bienvenido.  </p>
<p>Datos para ingresar: <br>
Usuario:{{$username}}<br>
Email: {{$email}}<br>
Contraseña: {{$password}}<br>
Dirigete a la plataforma para iniciar sesión: <a href="http://f8task.com/login">http://f8task.com/login</a>
</p>