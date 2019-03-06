@include('layouts.head')
@include('layouts.nav')
 <body>
 	<div class="container">
 		<div class="row">
 			<div class="col-md-12">
 				<div class="page-header">
 					<h1>Busqueda de usuarios</h1>
 					{{ Form:open(['route'=>'users', 'method'=>'GET', 'class' =>'form-inline pull-right'])}}
 					{{ Form:open(['route'=>'users', 'method'=>'GET', 'class' =>'form-inline pull-right'])}}
 				</div>
 			</div>
 	     </div>
 	</div>
 	
 </body>

@include('layouts.footer')
