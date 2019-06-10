@include('layouts.head')
@include('layouts.nav')
 <body>


                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right" onmousedown='return false;' onselectstart="return false;">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tablero</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Correcciones</a></li>
                                            <li class="breadcrumb-item active">Buscar correciones</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title" onmousedown='return false;' onselectstart="return false;">Buscar guia para enviar Corrección</h4>
                                </div>
                            </div>
                        </div>   
						 	 <!-- Inline Form -->
                         <div class="row">
                            <div class="col-md-12 center">
                                <div class="card">
                                    <div class="card-body">
                                        <div onmousedown='return false;' onselectstart="return false;">
                                        <h4 class="header-title">Ingresa los datos de la guia para enviar la correccion</h4>
                                         <p class="text-muted mb-4">Buscar los datos de la guia para </p>

                                        <p class="text-muted mb-3">
                                        </p>
                            		  <h6 class="font-13 mt-3">Datos de la guia </h6>
                                    </div>
                                    {!! Form::open(['url' => '/guias/import','class' => 'needs-validation', 'files' => true, "novalidate"]) !!}   



										  <br> 
										                        
										    <div id="ap">
										 
										   <div class="form-group mb-3">        
											    <h4 class="header-title">Level</h4>
											   

											    <select class="custom-select mt-3" name="level" required>

											        <option value="0">Level 0</option>
											        <option value="1">Level 1</option>
											        <option value="2">Level 2</option>
											        <option value="3">Level 3</option>
										          <option value="vpn0">VPN Lvl0 </option>
										          <option value="vpn">VPN Lvl </option>
											    </select> 
										  </div>
										   <br>
										 <div class="form-group position-relative mb-3">
												<label for="validationTooltip02">Numero de campos de texto</label>
										        <input type="text" class="form-control" id="validationTooltip02" placeholder="Numero de campos" data-toggle="touchspin"  name="number_campos" required>
										        <div class="valid-tooltip">
										        Muy bien
										    </div>
										    <div class="invalid-tooltip">
										       El campo no puede quedar vacio
										    </div>
										</div>


										<div class="form-group position-relative mb-3"> 
											   <label for="validationTooltip03">Nombre  de campos de texto</label>
										   <div class="tags-default">
										      <input type="text" id="validationTooltip03" name="names_campo" data-role="tagsinput" placeholder="Agregar campos" required />
										  </div>
										   
										    <div class="valid-tooltip">
										        Muy bien
										    </div>
										    <div class="invalid-tooltip">
										       El campo no puede quedar vacio
										    </div>
										</div>
										                             

										 
										 <div class="form-group mb-3">  
										    {!! Form::label('file','Subir archivo de excel') !!}
										    {!! Form::file('file', $attributes = array(), ['class'=> 'form-control',"required" ]) !!}
										</div>


								


										</div>
										 <input type="hidden" name="status" value="activo">           

										<br>
										<div class="class">
										    <input type="submit" value="Guardar" class="btn btn-primary">
										</div>
										{!! Form::close() !!}


                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                                   
                    </div> <!-- end card-body -->
                </div> <!-- end card -->
                           
</body>

@include('layouts.footer')