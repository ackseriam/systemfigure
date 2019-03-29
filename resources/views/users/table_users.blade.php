                                  <table id="basic-datatable" class="table dt-responsive nowrap" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>Username</th>
                                                    <th>email</th>
                                                    <th>Estado de usuario</th>
                                                    <th>Nombre</th>
                                                    <th>Acción</th>

                                                </tr>
                                            </thead>
                                        
                                        @foreach($usuarios as $usuario )
                                            <tbody>

                                                <tr>
                                                    
                                                    <td>{{$usuario->username}}</td>
                                                    <th>{{$usuario->email}}</th>

                                                    @if($usuario->state=="inactivo")
                                                    <th class="mt-12"><h3><span class="badge badge-primary-lighten">{{$usuario->state}}</span></h3></th>
                                                    @elseif($usuario->state=="bloqueado")
                                                    <th class="mt-12"><h3><span class="badge badge-danger-lighten">{{$usuario->state}}</span></h3></th>
                                                    @elseif($usuario->state=="activo")
                                                    <th class="mt-12"><h3><span class="badge badge-success-lighten">{{$usuario->state}}</span></h3></th>
                                                    @endif
                                                    <th>{{$usuario->name}}</th>
                                                    
                                                  <th> <a href="/users/{{$usuario->id}}" class="btn btn-primary" title="Ver usuario"> <i class="mdi mdi-account-search-outline"></i></a> 
                                                    @if(!empty($editar))
                                                    <a href="/users/edit/{{$usuario->id}}" class="btn btn-success" title="Editar Usuario"><i class="mdi mdi-square-edit-outline"></i></a>
                                                    @endif
                                                   </th>
                                               </tr>
                                            </tbody>
                                              @endforeach
                                        </table>