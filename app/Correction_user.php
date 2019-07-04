<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Correction_user extends Model
{
    public $fillable = ['respues0','respues1','respues2','respues3','respues4','respues5','respues6','respues7','respues8','respues9','respues10','respues11','respues12','respues13','respues14','respues15','respues16','respues17','respues18','respues19','respues20','tipos_campos','id_corrections'];
 
    public function scopeRespues($query, $respues)
    {
      for ($i=0; $i<20; $i++) { 
      if($respues)
      	$respuess='respues'.$i;
     
        return $query->where($respuess, 'LIKE', "%$respues%"); //el % al principio es para todo valor o caracter que comience o termine con el valor se relacione
    }
  }
}

