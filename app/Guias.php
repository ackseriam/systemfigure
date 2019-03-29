<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guias extends Model
{
    public $fillable = ['name','img','status','level','created_at']; //Todos los campos aqui

    public function scopeName($query, $name)
    {
      if($name)
        return $query->where('name', 'LIKE', "%$name%"); //el % al principio es para todo valor o caracter que comience o termine con el valor se relacione
    }

    public function scopeImg($query, $img)
    {
      if($img)
        return $query->where('img', 'LIKE', "%$img%"); //el % al principio es para todo valor o caracter que comience o termine con el valor se relacione
    }
    
    public function scopeStatus($query, $status)
    {
      if($status)
        return $query->where('status', 'LIKE', "%$status%");
    }

     public function scopeLevel($query, $level)
    {
      if($level)
        return $query->where('level', 'LIKE', "%$level%");
    }

}
