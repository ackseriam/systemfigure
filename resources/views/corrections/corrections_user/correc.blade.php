@include('layouts.head')
@include('layouts.nav')
 <body >
 	           <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right" onmousedown='return false;' onselectstart="return false;">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tablero</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Personas</a></li>
                                            <li class="breadcrumb-item active">Buscar correccion</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title" onmousedown='return false;' onselectstart="return false;">Buscar correccion de la guia</h4>
                                </div>
                            </div>
                        </div>   
						 	 <!-- Inline Form -->
                         <div class="row">
                            <div class="col-md-12 center">
                                <div class="card">
                                    <div class="card-body">
                                        <div onmousedown='return false;' onselectstart="return false;">
                                            <h4 class="header-title">Ingresa los datos para la busqueda</h4>

                                        <p class="text-muted mb-3">
                                        </p>
                                      <h6 class="font-13 mt-3">Datos de la correccion</h6>
                                        </div>
                                        
                                 
								 		{{ Form::open(['url' => 'corrections/show/'.$id.'/','method'=> 'GET', 'class' => '']) }}
								 		<div class="form-row align-items-center">

									 		<div class="col-auto">
									 	    	{{Form::text('text', null, ['class'=> 'form-control mb-2', 'placeholder' => 'Texto de la corrección'])}}
									 	   </div>

                                          
									 	    <div class="col-auto">
                                                    <button type="submit" class="btn btn-primary mb-2">Buscar</button>
                                                </div>
								 	     </div>
								 	</div>
								 	  {{ Form::close()}}
								 	    <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">

                          
                                        <div class="table-responsive-sm">
                                            <table class="table table-striped table-centered mb-0" onmousedown='return false;' onselectstart="return false;">
                                                <thead>
                                                    <tr>
                                                        @foreach($names_campo as $campos)
                                                        <th>{{$campos}}</th>            
                                                        @endforeach
                                                        
                                                         <th>Acción<th>  

                                                    </tr>
                                                </thead>
                                                   
                                                <tbody>
                                                    @if(!empty($correction_search2))
                                                    
                                                     <tr>
                                                         @foreach($correction_search2 as $correction)
                                                   
                                                    @if($correction->text != '0')
                                                      <td><input type="text" name="" readonly="readonly" class="form-control" value="{{$correction->text}}" id="e{{$correction->text}}">  
                                                      <button type="button" id="copyClip" data-clipboard-target="#e{{$correction->text}}" class="btn btn-primary"><i class=" mdi mdi-content-copy"></i></button>
                                                      </td> 
                                                      @else

                                                      
                                                      @endif
                                                      @endforeach
                                                    @endif
                                                      
                                                     <td>
                                                           @if($number_campos_img > '0')
                                                           <button class="btn btn-primary"> Ver ímagenes de la corrección</button> 
                                                           @endif
                                                            @if(!empty($correction_search2))
                                                           <button class="btn btn-primary"> Ver detalles de la corrección</button>
                                                           @endif
                                                      </td>
                                                     </tr>
                                                       

                                                </tbody>        
                                              </table>   
                                        </div> <!-- end table-responsive-->

                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                                   
                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                            </div> <!-- end col -->
                        </div>
				 
 	    
 	 			   
 </body>

@include('layouts.footer')
