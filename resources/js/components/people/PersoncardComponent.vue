
<template lang="">
<section>
    <div class="row">

         <person-card-component v-bind:person="person" v-for="person in people" :key="person.id">
         </person-card-component>
   </div>
</section>
</template>
<script>
export default {
    data(){
        return{
          people: [],
          endpoint:'http://localhost:8000/people'
        
        
        }
    },

    created(){//aqui se ejecuta cuando el objeto ya ha sido creado 
this.fetchPeople() 
    },
    methods: { 
         fetchPeople(){ 
        axios.get(this.endpoint).then(response=>(this.people=response.data.data))
          }
        }
    }

</script>


<template lang="">
<div class="card">
        <header class="bg-primary padding">
            
        </header>
          <div class="card">
                <header class="bg-primary padding">
                    
                </header>
                    <p class="card-text">{{person.name}}}</p>

                    <h2 class="card-title">{{person.surname}}</h2>
                    <br>
                      <h2 class="card-title">{{person.imagen}}</h2>
                      <br>
                           <h2 class="card-title">{{person.nacionality}}</h2><br>
                             <h2 class="card-title">{{person.address}}</h2>

             </div>
       
    </div>
 </template>
<script>


export default {
  
    props:{
        person: {
            type:Object

        }

    }
   
//console.log(this.props);
}

</script>

