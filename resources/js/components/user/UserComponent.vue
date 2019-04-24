<template lang="">

<section>
	 <div class="row">
        <div class="col-lg-7">
            <div class="pl-lg-4 text-center">
            		<h4 class="mt-0">Actualmente el usuario es:</h4>
              <h2><span class="badge badge-primary-lighten">{{statu}}</span></h2>
                <!-- Product title -->
       
                
            </div>
           
        </div>
         <div class="pl-lg-4"  style="margin-top:30px">
               <p>Para cambiar el estado del usuario {{usuario.username}}. Por favor presionar cualquiera de las opciones mostradas a continuación</p>
        </div>
		<div class="col-lg-7">
			<div v-if="status.state === 'activo'" >
				<div class="row center">
					<form @submit.prevent="inactive">
					 <div class="pl-lg-4">
			        <!-- Product title -->
			        <input type="hidden" v-model="status" value="">
			        <input type="hidden" v-model="state" value="inactivo">
					
						   <button  class="btn btn-primary" type="submit">Inactivo</button>
			         </div>
			     </form>
			     <form @submit.prevent="locked">
				      <div class="pl-lg-4 " style="margin-left: 30px;">
				        <input type="hidden" name="datos" value="">
			            <input type="hidden" name="states" value="bloqueado">
					     
						   	<button  class="btn btn-danger" type="submit">Bloqueado</button>	
				      </div>
				</form>
					
				</div>
				
				  

	       </div>

			<div v-else-if="status.state  === 'inactivo'">
			<form @submit.prevent="activo">
			       <div class="pl-lg-4">
					        <!-- Product title -->
				        <h4 class="mt-0">Cambiar estado a Activo:  </h4>
						 <button  class="btn btn-success" @click="activo">Activo</button>
				   </div>
			   </form>
			 <form @submit.prevent="locked">
			   <div class="pl-lg-4 " style="margin-top: 30px;">
			        <!-- Product title -->
			        <h4 class="mt-0">Cambiar estado a Bloqueado:  </h4>
				   	<button  class="btn btn-danger"  @click="locked">Bloqueado</button>	
			   </div>
			 </form>
	       </div>
	       	<div v-else-if="status.state  === 'bloqueado'">
	       	<form @submit.prevent="activo">
		       <div class="pl-lg-4 " style="margin-top: 30px;">
				        <!-- Product title -->
			         <h4 class="mt-0">Cambiar estado a Activo:  </h4>
					 <button  class="btn btn-success" @click="activo">Activo</button>
			   </div>
			  </form>
			  	<form @submit.prevent="inactive">
			   <div class="pl-lg-4 " style="margin-top: 30px;">
			        <!-- Product title -->
			        <h4 class="mt-0">Cambiar estado a Inactivo:  </h4>
				   	<button  class="btn btn-primary" @click="inactive">Inactivo</button>
			   </div>
			</form>
	       </div>
		</div>
 </div>
</section>

 </template>
<script>
export default {
	
    props:{
        status: {
            type:Object
        },
        usuario: {
            type:Object
        },
        statu:{
        type:String	
        }

    },

    methods:{

    	inactive: function(){
    		this.statu = 'Inactivo';
    		axios({
    			method: 'PUT',
    			url: '/users/update/',
    			data:{
    				state:'inactivo',
    		    	datos:this.status
    			},
    			headers:{
    				'Accept':'application/json',
    				'Content-Type': 'application/json'
    			}

    		})
    		.then(function(res){
    			Toast.fire({
				  type: 'success',
				  title: 'Estado del usuario modificado'
				})
    		})
    		.catch(function(err){
    			console.log(err);
    		});
    		
    	},
    	activo: function(){
    		this.statu = 'Activo';
    		axios({
    			method: 'PUT',
    			url: '/users/update/',
    			data:{
    				state:'activo',
    		    	datos:this.status
    			},
    			headers:{
    				'Accept':'application/json',
    				'Content-Type': 'application/json'
    			}

    		})
    		.then(function(res){
    			Toast.fire({
				  type: 'success',
				  title: 'Estado del usuario modificado'
				}),
				this.$forceUpdate();
				  
    		})
    		.catch(function(err){
    			console.log(err);
    		});
    
    	},
    	locked: function(){
    		this.statu = 'Bloqueado';
    		axios({
    			method: 'PUT',
    			url: '/users/update/',
    			data:{
    				state:'bloqueado',
    		    	datos:this.status
    			},
    			headers:{
    				'Accept':'application/json',
    				'Content-Type': 'application/json'
    			}

    		})
    		.then(function(res){
    			Toast.fire({
				  type: 'success',
				  title: 'Estado del usuario modificado'
				})
    		})
    		.catch(function(err){
    			console.log(err);
    		});
    		
    	}
    }

}
</script>