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
                
              <th> <a href="/guias/{{$guia->id}}" class="btn btn-primary" title="Ver guia"> <i class="mdi mdi-account-search-outline"></i></a> 
              
                <a href="/guias/edit/{{$guia->id}}" class="btn btn-success" title="Editar guia"><i class="mdi mdi-square-edit-outline"></i></a>
            
               </th>
           </tr>
        </tbody>
          @endforeach
 </table>