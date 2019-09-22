<img src="{{ asset('images/logofigure2.png') }}" alt="" height="100">
<p>Hola, {{$username}}</p><br>
<p>La comunidad de {{ config('app.name') }} se complace en anunciarle que se acaba de aprobar su  usuario en la plataforma  </p>
<p>Datos para ingresar: <br>
Usuario:{{$username}}<br>
Email: {{$email}}<br>
Contraseña: {{$password}}<br>
Dirigete a la plataforma para iniciar sesión: <a href="http://f8task.com/login">http://f8task.com/login</a>
</p>