<!-- -aqui se usa dicho formulario en create y edit

 -->

{!! Form::open(['url' => '/people','class' => 'app-form', 'files' => true]) !!} <!-- Aqui el 'route' => $product->url, es para cuando se actualiza los datos 
llamando al metodo especificado en el controlador y se especifica el $product->id para identificar el id que se va actualizar,
 $product->method() es para que cuando se entre al formulario de actualizacion en ves de ser POST se convierte en PUT
 Indicado en el archivo Product.php
 
 los signos de !! es para que al imprimir html no se muestre detrasdatos como tal del usuario y por lo tanto no poderse inyectar los datos -->
<!-- Esto es para lo del formulario con laravel collective-->

<div>
    {!! Form::label('name', 'Nombres ') !!}
  <!-- en el segunda comilla se coloca los datos para editar el formulari
   por ejemplo colocando $product->title-->
    {!! Form::text('name','',['class'=> 'form-control',"required"]) !!}
</div>
<div>
   {!! Form::label('name', 'Apellidos') !!}
  <!-- en el segunda comilla se coloca los datos para editar el formulari
   por ejemplo colocando $product->title-->
    {!! Form::text('surname','',['class'=> 'form-control',"required"]) !!}
</div>
<div>
    {!! Form::label('email','Correo Electronico ') !!}
<!--    {!! Form::text('email','',['class'=> 'form-control',"required"]) !!}-->

    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" required>
 @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
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
    <select name="nacionality"class="select2 form-control " data-toggle="select2"  data-placeholder="Choose ...">
     <option value="AF">Afganist&#225;n</option>
                <option value="Albania">Albania</option>
                <option value="Alemania">Alemania</option>
                <option value="Andorra">Andorra</option>
                <option value="Angola">Angola</option>
                <option value="Anguila">Anguila</option>
                <option value="Antartida">Ant&#225;rtida</option>
                <option value="Antigua y Barbuda">Antigua y Barbuda</option>
                <option value="Antillas Neerlandesas">Antillas Neerlandesas</option>
                <option value="rabia Saudi">Arabia Saud&#237;</option>
                <option value="Argelia">Argelia</option>
                <option value="Argentina">Argentina</option>
                <option value="Armenia">Armenia</option>
                <option value="Aruba">Aruba</option>
                <option value="Australia">Australia</option>
                <option value="Austria">Austria</option>
                <option value="Bahamas">Bahamas</option>
                <option value="BH">Bahr&#233;in</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Barbados">Barbados</option>
                <option value="Belgica">B&#233;lgica</option>
                <option value="Belice">Belice</option>
                <option value="BJ">Ben&#237;n</option>
                <option value="Bermudas">Bermudas</option>
                <option value="Bolivia">Bolivia</option>
                <option value="Bosnia">Bosnia y Herzegovina</option>
                <option value="Botsuana">Botsuana</option>
                <option value="Brasil">Brasil</option>
                <option value="BN">Brun&#233;i Darussalam</option>
                <option value="BG">Bulgaria</option>
                <option value="BF">Burkina Faso</option>
                <option value="BI">Burundi</option>
                <option value="BT">But&#225;n</option>
                <option value="CV">Cabo Verde</option>
                <option value="KH">Camboya</option>
                <option value="CM">Camer&#250;n</option>
                <option value="CA">Canad&#225;</option>
                <option value="BQ">Caribe Neerland&#233;s</option>
                <option value="TD">Chad</option>
                <option value="Chile">Chile</option>
                <option value="China">China</option>
                <option value="CY">Chipre</option>
                <option value="Colombia">Colombia</option>
                <option value="Comoras">Comoras</option>
                <option value="Congo">Congo</option>
                <option value="Corea">Corea (Rep&#250;blica de)</option>
                <option value="KP">Corea (Rep&#250;blica Popular Democr&#225;tica)</option>
                <option value="CI">Costa de Marfil</option>
                <option value="Costa Rica">Costa Rica</option>
                <option value="HR">Croacia</option>
                <option value="Cuba">Cuba</option>
                <option value="CW">Curazao</option>
                <option value="Dinamarca">Dinamarca</option>
                <option value="Djibouti">Djibouti</option>
                <option value="Dominica">Dominica</option>
                <option value="Ecuador">Ecuador</option>
                <option value="EE.UU.">EE.UU.</option>
                <option value="Egipto">Egipto</option>
                <option value="El Salvador">El Salvador</option>
                <option value="ER">Eritrea</option>
                <option value="SK">Eslovaquia</option>
                <option value="SI">Eslovenia</option>
                <option value="España">Espa&#241;a</option>
                <option value="EE">Estonia</option>
                <option value="ET">Etiop&#237;a</option>
                <option value="FJ">Fiji</option>
                <option value="PH">Filipinas</option>
                <option value="FI">Finlandia</option>
                <option value="Francia">Francia</option>
                <option value="GM">Gambia</option>
                <option value="GE">Georgia</option>
                <option value="GH">Ghana</option>
                <option value="GI">Gibraltar</option>
                <option value="GD">Granada</option>
                <option value="GR">Grecia</option>
                <option value="GL">Groenlandia</option>
                <option value="GP">Guadalupe</option>
                <option value="GU">Guam</option>
                <option value="Guatemala">Guatemala</option>
                <option value="Guayana Francesa">Guayana Francesa</option>
                <option value="GN">Guinea</option>
                <option value="GQ">Guinea Ecuatorial</option>
                <option value="GW">Guinea-Bissau</option>
                <option value="GY">Guyana</option>
                <option value="HT">Hait&#237;</option>
                <option value="Honduras">Honduras</option>
                <option value="HK">Hongkong, China</option>
                <option value="HU">Hungr&#237;a</option>
                <option value="IN">India</option>
                <option value="ID">Indonesia</option>
                <option value="IQ">Irak</option>
                <option value="IR">Ir&#225;n</option>
                <option value="IE">Irlanda</option>
                <option value="IS">Islandia</option>
                <option value="KY">Islas Caim&#225;n</option>
                <option value="CK">Islas Cook</option>
                <option value="FO">Islas Feroe</option>
                <option value="FK">Islas Malvinas</option>
                <option value="MP">Islas Marianas del Norte</option>
                <option value="MH">Islas Marshall</option>
                <option value="SB">Islas Salom&#243;n</option>
                <option value="VG">Islas V&#237;rgenes Brit&#225;nicas</option>
                <option value="VI">Islas V&#237;rgenes de los Estados Unidos</option>
                <option value="IL">Israel</option>
                <option value="IT">Italia</option>
                <option value="JM">Jamaica</option>
                <option value="JP">Jap&#243;n</option>
                <option value="JO">Jordania</option>
                <option value="KZ">Kazajist&#225;n</option>
                <option value="KE">Kenia</option>
                <option value="KG">Kirguizist&#225;n</option>
                <option value="KI">Kiribati</option>
                <option value="KW">Kuwait</option>
                <option value="LA">Laos</option>
                <option value="LS">Lesoto</option>
                <option value="LV">Letonia</option>
                <option value="LB">L&#237;bano</option>
                <option value="LR">Liberia</option>
                <option value="LY">Libia</option>
                <option value="LI">Liechtenstein</option>
                <option value="LT">Lituania</option>
                <option value="LU">Luxemburgo</option>
                <option value="MO">Macao, China</option>
                <option value="MK">Macedonia</option>
                <option value="Madagascar">Madagascar</option>
                <option value="MY">Malasia</option>
                <option value="MW">Malawi</option>
                <option value="Mexico">Mexico</option>
                <option value="MV">Maldivas</option>
                <option value="ML">Mal&#237;</option>
                <option value="MT">Malta</option>
                <option value="MA">Marruecos</option>
                <option value="MQ">Martinica</option>
                <option value="MU">Mauricio</option>
                <option value="MR">Mauritania</option>
                <option value="YT">Mayotte</option>
                <option value="MX">M&#233;xico</option>
                <option value="FM">Micronesia</option>
                <option value="MD">Moldavia</option>
                <option value="MC">M&#243;naco</option>
                <option value="MN">Mongolia</option>
                <option value="ME">Montenegro</option>
                <option value="MS">Montserrat</option>
                <option value="MZ">Mozambique</option>
                <option value="MM">Myanmar</option>
                <option value="NA">Namibia</option>
                <option value="NR">Nauru</option>
                <option value="NP">Nepal</option>
                <option value="Nicaragua">Nicaragua</option>
                <option value="NE">N&#237;ger</option>
                <option value="NG">Nigeria</option>
                <option value="NU">Niue</option>
                <option value="NO">Noruega</option>
                <option value="NC">Nueva Caledonia</option>
                <option value="NZ">Nueva Zelanda</option>
                <option value="OM">Om&#225;n</option>
                <option value="NL">Pa&#237;ses Bajos</option>
                <option value="PK">Pakist&#225;n</option>
                <option value="PW">Palaos</option>
                <option value="PS">Palestina</option>
                <option value="Panama">Panam&#225;</option>
                <option value="PG">Pap&#250;a Nueva Guinea</option>
                <option value="Paraguay">Paraguay</option>
                <option value="Peru">Per&#250;</option>
                <option value="PF">Polinesia Francesa</option>
                <option value="PL">Polonia</option>
                <option value="Portugal">Portugal</option>
                <option value="Puerto Rico">Puerto Rico</option>
                <option value="QA">Qatar</option>
                <option value="Reino Unido">Reino Unido</option>
                <option value="CF">Rep&#250;blica Centroafricana</option>
                <option value="CZ">Rep&#250;blica Checa</option>
                <option value="AZ">Rep&#250;blica de Azerbaiy&#225;n</option>
                <option value="CD">Rep&#250;blica Democr&#225;tica del Congo</option>
                <option selected="selected" value="DO">Rep&#250;blica Dominicana</option>
                <option value="GA">Rep&#250;blica Gabonesa</option>
                <option value="RE">Reuni&#243;n</option>
                <option value="RW">Ruanda</option>
                <option value="RO">Ruman&#237;a</option>
                <option value="RU">Rusia</option>
                <option value="WS">Samoa</option>
                <option value="AS">Samoa Americana</option>
                <option value="KN">San Crist&#243;bal y Nieves</option>
                <option value="SM">San Marino</option>
                <option value="PM">San Pedro y Miquel&#243;n</option>
                <option value="VC">San Vicente y las Granadinas</option>
                <option value="SH">Santa Elena</option>
                <option value="LC">Santa Luc&#237;a</option>
                <option value="ST">Santo Tom&#233; y Pr&#237;ncipe</option>
                <option value="SN">Senegal</option>
                <option value="RS">Serbia</option>
                <option value="SC">Seychelles</option>
                <option value="SL">Sierra Leona</option>
                <option value="SG">Singapur</option>
                <option value="SX">Sint Maarten</option>
                <option value="SY">Siria</option>
                <option value="SO">Somalia</option>
                <option value="LK">Sri Lanka</option>
                <option value="SZ">Suazilandia</option>
                <option value="ZA">Sud&#225;frica</option>
                <option value="SD">Sud&#225;n</option>
                <option value="SS">Sud&#225;n del Sur</option>
                <option value="Suecia">Suecia</option>
                <option value="Suiza">Suiza</option>
                <option value="SR">Surinam</option>
                <option value="TH">Tailandia</option>
                <option value="TW">Taiw&#225;n</option>
                <option value="TZ">Tanzania</option>
                <option value="TJ">Tayikist&#225;n</option>
                <option value="TL">Timor Oriental</option>
                <option value="TG">Togo</option>
                <option value="TK">Tokelau</option>
                <option value="TO">Tonga</option>
                <option value="TT">Trinidad y Tobago</option>
                <option value="TN">T&#250;nez</option>
                <option value="TC">Turcas y Caicos</option>
                <option value="TM">Turkmenist&#225;n</option>
                <option value="TR">Turqu&#237;a</option>
                <option value="TV">Tuvalu</option>
                <option value="AE">UAE</option>
                <option value="UA">Ucrania</option>
                <option value="UG">Uganda</option>
                <option value="UY">Uruguay</option>
                <option value="UZ">Uzbekist&#225;n</option>
                <option value="VU">Vanuatu</option>
                <option value="VA">Vaticano</option>
                <option value="Venezuela">Venezuela</option>
                <option value="VN">Vietnam</option>
                <option value="WF">Wallis y Futuna</option>
                <option value="YE">Yemen</option>
                <option value="ZM">Zambia</option>
                <option value="ZW">Zimbabue</option>
      
       </select>
      
    </select>
</div>

<div>
    {!! Form::label('ci','Numero de identidad') !!}
    {!! Form::text('ci','',['class'=> 'form-control',"required"]) !!}
</div>
<br>
<div>
     {!! Form::label('link','Indicaciones de como debe ser la fotografia y la imagen del documento de identidad:') !!} 
    <!-- Top modal -->
    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#multiple1">Info</button> <br><br>
    {!! Form::label('image_url','Subir foto de nota con documento de identidad') !!}<br>
    {!! Form::file('image_url', $attributes = array(),['class'=> 'form-control',"required"]) !!}
    
</div>
<br>
<div>
    {!! Form::label('img_ci','Subir imagen del documento de identidad ') !!}<br>
    {!! Form::file('img_ci', $attributes = array(),['class'=> 'form-control',"required"]) !!}
</div>



<div>
    {!! Form::label('address','Dirección de residencia') !!}
    {!! Form::textarea('address','', ['class'=> 'form-control',"required"]) !!}
</div>


<br>

<div class="class">
    <input type="submit" value="Guardar" class="btn btn-primary">
</div>


{!! Form::close() !!}
    <div class="card">
    <div class="card-body">
        <!-- Modal -->
        <div id="multiple1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="multiple-oneModalLabel" aria-hidden="true">

         
   
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="multiple-oneModalLabel">Fotografia con la nota y documento de identidad en mano</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                          <i class="dripicons-information h1 text-info"></i>
                        <h5 class="mt-0">Foto de la nota con el documento de identidad  y nota </h5>
                        <p> Tome una fotografia con su rostro y una nota que diga FIGURE EIGHT TASK con el documento de identidad legible tal y como se muestra en la imagen.<br>
                        <h3 class="text-danger">Nota:</h3> <h5>LA IMAGEN NO DEBE SER NO MAYOR A 2 Mb.</h5>
                        </p>
                    </div>
                     <a href="javascript: void(0);" class="text-center d-block mb-4">
                      <img src="{{ asset('images/cedula_foto.png')}}" class="img-fluid" style="max-width: 200                           px;" alt="No existe imagen de guia" />
                     </a>    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-target="#multiple2" data-toggle="modal" data-dismiss="modal">Siguiente paso</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        

        <!-- Modal -->
        <div id="multiple2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="multiple-twoModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                       <h4 class="modal-title" id="multiple-oneModalLabel">Foto del documento de identidad</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                   <div class="modal-body">
                          <i class="dripicons-information h1 text-info"></i>
                        <h5 class="mt-0"> Documento de identidad</h5>
                        <p>Suba la imagen del documento de identidad debidamente escaneada, tal como el ejemplo</p>
                         <h3 class="text-danger">Nota:</h3> <h5>LA IMAGEN NO DEBE SER NO MAYOR A 2 Mb.</h5>
                        </p>
                         <a href="javascript: void(0);" class="text-center d-block mb-4">
                      <img src="{{ asset('images/cedula.jpg')}}" class="img-fluid" style="max-width: 450px;" alt="No existe imagen de guia" />
                     </a> 
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->




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