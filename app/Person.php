<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    //
    
    public $fillable = ['name','surname','email','link','img_url','img_ci','nacionality','ci','address']; //Todos los campos aqui

    public function url(){

       
      return $this->id ? 'people.update' : 'people.store'; 
   
        }
    public function method(){
      return $this->id ? 'PUT' : 'POST'; 
    }

    public function scopeName($query, $name)
    {
      if($name)
        return $query->where('name', 'LIKE', "%$name%"); //el % al principio es para todo valor o caracter que comience o termine con el valor se relacione
    }

    public function scopeSurname($query, $surname)
    {
      if($surname)
        return $query->where('surname', 'LIKE', "%$surname%"); //el % al principio es para todo valor o caracter que comience o termine con el valor se relacione
    }
    
    public function scopeNacionality($query, $nacionality)
    {
      if($nacionality)
        return $query->where('nacionality', 'LIKE', "%$nacionality%");
    }

     public function scopeAddress($query, $address)
    {
      if($address)
        return $query->where('address', 'LIKE', "%$address%");
    }

     public function scopeCi($query, $ci)
    {
      if($ci)
        return $query->where('ci', 'LIKE', "%$ci%");
    }
    

}
