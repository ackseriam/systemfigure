<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Correction_user extends Model
{
    public $fillable = ['text','img','name_campo','id_corrections'];
  public function scopeText($query, $text)
    {
      if($text)
        return $query->where('text', 'LIKE', "%$text%"); //el % al principio es para todo valor o caracter que comience o termine con el valor se relacione
    }
/*
    public function scopeImg($query, $img)
    {
      if($img)
        return $query->where('img', 'LIKE', "%$img%"); //el % al principio es para todo valor o caracter que comience o termine con el valor se relacione
    }
    
    public function scopeName_campo($query, $name_campo)
    {
      if($name_campo)
        return $query->where('name_campo', 'LIKE', "%$name_campo%");
    }*/

}
