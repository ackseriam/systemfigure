  <table id="basic-datatable" class="table dt-responsive nowrap" width="100%">
        <thead>
            <tr>
                <th>Nombre de la guia</th>
                <th>Imagen</th>
                <th>Estado de la guia</th>
                <th>Level</th>
                <th>Acción</th>

            </tr>
        </thead>
    
    @foreach($guias as $guia )
        <tbody>

            <tr>
             
                <td>{{$guia->name}}</td>
                <th> <a href="javascript: void(0);" class="text-center d-block mb-4">
                    <img src="{{ asset('images_guias/')}}/{{$guia->img}}" class="img-fluid" style="max-width: 280px;" alt="No ese encontro imagen" /></a></th>

                @if($guia->status=="inactivo")
                <th class="mt-12"><h3><span class="badge badge-primary-lighten">{{$guia->status}}</span></h3></th>
                @elseif($guia->status=="activo")
                <th class="mt-12"><h3><span class="badge badge-success-lighten">{{$guia->status}}</span></h3></th>
                @endif
                <th>{{$guia->level}}</th>
                               
              
              <th>
                 @if(!empty($multi))
                    <label>Multi por defecto</label>
               <a href="/guias/multi/{{$guia->id}}" class="btn btn-primary" title="Descargar mdi-square-edit-outline">   <i class="mdi mdi-download ml-1"></i></a><br><br>
               <label>Ingresar columna para realizar multi</label>
                     {{ Form::open(['url' => '/guias/multi/'.$guia->id.'/','method'=> 'GET', 'class' => '']) }}
               <input type="text" name="multi" placeholder="Columna a realizar el multi" class="form-control" required><br>
               <button class="btn btn-primary" type="submit">Énviar</button> 
                    {{ Form::close()}}
               @else
               <a href="/guias/{{$guia->id}}" class="btn btn-primary" title="Ver guia"> <i class="mdi mdi-account-search-outline"></i></a> 
              
                <a href="/guias/edit/{{$guia->id}}" class="btn btn-success" title="Editar guia"><i class="mdi mdi-square-edit-outline"></i></a>
                @endif
               </th>
           </tr>
        </tbody>
          @endforeach
 </table>