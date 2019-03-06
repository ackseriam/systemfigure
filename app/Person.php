<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    //
    
    public $fillable = ['name','surname','email','img_url','img_ci','nacionality','ci','address']; //Todos los campos aqui

    public function url(){

       
      return $this->id ? 'people.update' : 'people.store'; 
   
        }
        public function method(){
          return $this->id ? 'PUT' : 'POST'; 
        }
    
}
