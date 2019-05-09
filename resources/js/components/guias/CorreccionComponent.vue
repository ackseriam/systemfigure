<template lang="">

                   
     
<form action="" @submit.prevent="registrarcorrec" class="needs-validation" novalidate>

  <br> 
 
<div class="form-group position-relative mb-3"> 

  

   <!--
   <input type="text" @input="checkExist($event)" class="form-control" placeholder="Email*" v-model="text">-->

<div v-for="(value, index) in campos"> {{ value }} : {{index}}

  <label for="validationTooltip03">{{ value[index] }}</label>

   <!--<input type="text" v-model="index"  class="form-control" id="validationTooltip03" placeholder="Nombre de los campos" required>-->
    <input type="text" @input="checkExist($event)" v-model="index" id="" class="form-control" id="validationTooltip03" placeholder="Nombre de los campos" required>
 </div>
	 <!--
   <input type="text" @input="checkExist($event)" class="form-control" placeholder="Email*" v-model="text">-->
    
    <div class="valid-tooltip">
        Muy bien
    </div>
    <div class="invalid-tooltip">
       El campo no puede quedar vacio
    </div>
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
  props:{
        number_campos: {
            type:String
        },
        id_guias: {
            type:Number
        },
        campos:{
        type:Array 
        }

    },

  data() {
  	return{
  
    index: [],
    text:  "",
    index1: []
    
  		
  	}
    
  },

  methods: {
  	checkExist(event){
                //Asignamos la imagen a  nuestra data
            
                this.index = event.target.value;
        
         
         
          
       
            },

 
  	registrarcorrec(){
      console.log(this.index);
      
	  
  		let me= this;
               axios({
    			method: 'POST',
    			url: '/corrections',
    			 dataType: "json",
    			data:{

    		    	text: this.index,
              id_guias: this.id_guias,
		  			
		  			

    			},
    			headers:{
    				'Accept':'application/json',
    				'Content-Type': 'application/json',
    				 
    			}

    		}).then(function(response){
  			Toast.fire({
				  type: 'success',
				  title: 'La corrección ha sido insterda'
				})


  		}).catch(function (error){
  			console.log('error');
  		Toast.fire({
				  type: 'error',
				  title: 'Corrección no creada'
				})
  		})
  	}

  

}
}


	console.log('Component mounted.');
</script>
