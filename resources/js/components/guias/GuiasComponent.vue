  <link href="../public/css/vendor/jquery-jvectormap-1.2.2.class" rel="stylesheet" type="text/css" />
  <link href="../public/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="../public/css/app.min.css" rel="stylesheet" type="text/css" />
<template lang="">

                                
     
<form action=""@submit.prevent="registrarguia" class="needs-validation" novalidate>

  <br> 
                        
   
    <div class="form-group position-relative mb-3">
        <label for="validationTooltip01">Nombre de la guia</label>
        <input type="text" v-model="name1" class="form-control" id="validationTooltip01" placeholder="Nombre de guia" required>
    
        <div class="valid-tooltip">
            Muy bien
        </div>
        <div class="invalid-tooltip">
           El campo no puede quedar vacio
        </div>
    </div>
   <div class="form-group mb-3">        
	    <h4 class="header-title">Level</h4>
	   

	    <select class="custom-select mt-3" v-model="level" required>

	        <option value="0">Level 0</option>
	        <option value="1">Level 1</option>
	        <option value="2">Level 2</option>
	        <option value="3">Level 3</option>
	    </select> 
  </div>
   <br>
 <div class="form-group position-relative mb-3">
		<label for="validationTooltip02">Numero de campos de texto</label>

        <input type="text" class="form-control" id="validationTooltip02" placeholder="Numero de campos"  v-model="number_campos"  data-toggle="touchspin" >
        <div class="valid-tooltip">
        Muy bien
    </div>
    <div class="invalid-tooltip">
       El campo no puede quedar vacio
    </div>
</div>



<div class="form-group position-relative mb-3"> 
	   <label for="validationTooltip03">Nombre  de campos de texto</label>
   <input type="text" v-model="names_campo" class="form-control" id="validationTooltip03" placeholder="Nombre de los campos" required>
    
    <div class="valid-tooltip">
        Muy bien
    </div>
    <div class="invalid-tooltip">
       El campo no puede quedar vacio
    </div>
</div>
                             

 
 <div class="form-group mb-3">  
    
    <label >Subir imagen</label>
 
       

        <input type="file" name="img" @change="getImage" accept="image/*">
    
</div>


  <div class="form-group mb-3">        
    <h4 class="header-title">¿Existen imagenes en esta guia?</h4>
    <button type="button" class="btn btn-primary"  @click="isShowing ^= true">Presionar si existen imagenes</button>
  </div>
  <div v-show="isShowing">
  	
  	 	<div class="form-group position-relative mb-3">
   		<label for="validationTooltip02">Numero de campos de las imagenes</label>
            <input type="text" class="form-control" id="validationTooltip02" placeholder="Numero de campos" data-toggle="touchspin" v-model="number_campos_img" >
            <div class="valid-tooltip">
            Muy bien
        </div>
        <div class="invalid-tooltip">
           El campo no puede quedar vacio
        </div>
    </div>
     <div class="form-group position-relative mb-3"> 
   	   <label for="validationTooltip03">Nombre  de campos de las imagenes</label>
	      <input type="text" v-model="names_campo_img" class="form-control" id="validationTooltip03" placeholder="Nombre de los campos" required>
	   
        <div class="valid-tooltip">
            Muy bien
        </div>
        <div class="invalid-tooltip">
           El campo no puede quedar vacio
        </div>
   </div>
<!-- probar con el vue creado GuiasComponent.vue-->
  </div>



            

<br>
<div class="class">
    <button   class="btn btn-primary">Guardar</button>
</div>


</form>
</div>

</template>
<script>
export default {

  data() {
  	return{
  	isShowing:false,
  	name1 :'',
    img :'',

  	level: '',
  	number_campos: '',
  	names_campo: '',
  	number_campos_img:'',
  	names_campo_img: ''
  		
  	}
    
  },
  	
  methods: {
  	getImage(event){
                //Asignamos la imagen a  nuestra data
                this.img = event.target.files[0];
            },

  	registrarguia(){
console.log(this.img);
    let formData = new FormData();
            formData.append('img', this.img);
             formData.append('_method', 'PUT');
               console.log(formData);
	  
  		let me= this;
               axios({
    			method: 'PUT',
    			url: '/guias/registrar',
    			 dataType: "json",
    			data:{
    				status:'activo',
    		    	name: this.name1,
		  			img: formData,
		  			level: this.level,
		  			number_campos: this.number_campos,
		  			names_campo: this.names_campo,
		  			number_campos_img: this.number_campos_img,
		  			names_campo_img: this.names_campo_img,
		  			

    			},
    			headers:{
    				'Accept':'application/json',
    				'Content-Type': 'application/json',
    				 
    			}

    		}).then(function(response){
  			Toast.fire({
				  type: 'success',
				  title: 'La guia ha sido insterda'
				})


  		}).catch(function (error){
  			console.log('error');
  		Toast.fire({
				  type: 'error',
				  title: 'Guia no creada'
				})
  		})
  	}

  

}
}


	console.log('Component mounted.');
</script>
