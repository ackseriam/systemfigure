<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Correction_user extends Model
{
    public $fillable = ['respues0','respues1','respues2','respues3','respues4','respues5','respues6','respues7','respues8','respues9','respues10','respues11','respues12','respues13','respues14','respues15','respues16','respues17','respues18','respues19','respues20','tipos_campos','id_corrections'];
 
   public function scopeRespues($query, $respues)
    {
   // for ($i=0; $i<20; $i++) { 
      if($respues)
        return $query->where('respues0', 'LIKE', "%$respues%"); //el % al principio es para todo valor o caracter que comience o termine con el valor se relacione
   //}
   # code...
 }
}
   
 /*
  public function scopeRespues0($query, $respues0)
    {
      if($respues0)
        return $query->where('respues0', 'LIKE', "%$respues0%"); //el % al principio es para todo valor o caracter que comience o termine con el valor se relacione
    }
      public function scopeRespues1($query, $respues2)
    {
      if($respues1)
        return $query->where('respues1', 'LIKE', "%$respues1%"); //el % al principio es para todo valor o caracter que comience o termine con el valor se relacione
    }
          public function scopeRespues2($query, $respues2)
    {
      if($respues2)
        return $query->where('respues2', 'LIKE', "%$respues2%"); //el % al principio es para todo valor o caracter que comience o termine con el valor se relacione
    }
    public function scopeRespues3($query, $respues3)
    {
      if($respues3)
        return $query->where('respues3', 'LIKE', "%$respues3%"); //el % al principio es para todo valor o caracter que comience o termine con el valor se relacione
    }
        public function scopeRespues4($query, $respues4)
    {
      if($respues4)
        return $query->where('respues4', 'LIKE', "%$respues4%"); //el % al principio es para todo valor o caracter que comience o termine con el valor se relacione
    }
   
        public function scopeRespues5($query, $respues5)
    {
      if($respues5)
        return $query->where('respues5', 'LIKE', "%$respues5%"); //el % al principio es para todo valor o caracter que comience o termine con el valor se relacione
    }
        public function scopeRespues6($query, $respues6)
    {
      if($respues6)
        return $query->where('respues6', 'LIKE', "%$respues6%"); //el % al principio es para todo valor o caracter que comience o termine con el valor se relacione
    }
        public function scopeRespues7($query, $respues7)
    {
      if($respues7)
        return $query->where('respues7', 'LIKE', "%$respues7%"); //el % al principio es para todo valor o caracter que comience o termine con el valor se relacione
    }
        public function scopeRespues8($query, $respues8)
    {
      if($respues8)
        return $query->where('respues8', 'LIKE', "%$respues8%"); //el % al principio es para todo valor o caracter que comience o termine con el valor se relacione
    }
        public function scopeRespues9($query, $respues9)
    {
      if($respues9)
        return $query->where('respues9', 'LIKE', "%$respues9%"); //el % al principio es para todo valor o caracter que comience o termine con el valor se relacione
    }
        public function scopeRespues10($query, $respues2)
    {
      if($respues10)
        return $query->where('respues10', 'LIKE', "%$respues10%"); //el % al principio es para todo valor o caracter que comience o termine con el valor se relacione
    }
        public function scopeRespues11($query, $respues2)
    {
      if($respues11)
        return $query->where('respues11', 'LIKE', "%$respues11%"); //el % al principio es para todo valor o caracter que comience o termine con el valor se relacione
    }
        public function scopeRespues12($query, $respues2)
    {
      if($respues12)
        return $query->where('respues12', 'LIKE', "%$respues12%"); //el % al principio es para todo valor o caracter que comience o termine con el valor se relacione
    }
        public function scopeRespues13($query, $respues2)
    {
      if($respues13)
        return $query->where('respues13', 'LIKE', "%$respues13%"); //el % al principio es para todo valor o caracter que comience o termine con el valor se relacione
    }
        public function scopeRespues14($query, $respues2)
    {
      if($respues14)
        return $query->where('respues14', 'LIKE', "%$respues14%"); //el % al principio es para todo valor o caracter que comience o termine con el valor se relacione
    }
        public function scopeRespues15($query, $respues2)
    {
      if($respues15)
        return $query->where('respues15', 'LIKE', "%$respues15%"); //el % al principio es para todo valor o caracter que comience o termine con el valor se relacione
    }
        public function scopeRespues16($query, $respues2)
    {
      if($respues16)
        return $query->where('respues16', 'LIKE', "%$respues16%"); //el % al principio es para todo valor o caracter que comience o termine con el valor se relacione
    }
        public function scopeRespues17($query, $respues2)
    {
      if($respues17)
        return $query->where('respues17', 'LIKE', "%$respues17%"); //el % al principio es para todo valor o caracter que comience o termine con el valor se relacione
    }
        public function scopeRespues18($query, $respues2)
    {
      if($respues18)
        return $query->where('respues18', 'LIKE', "%$respues18%"); //el % al principio es para todo valor o caracter que comience o termine con el valor se relacione
    }
        public function scopeRespues19($query, $respues2)
    {
      if($respues19)
        return $query->where('respues19', 'LIKE', "%$respues19%"); //el % al principio es para todo valor o caracter que comience o termine con el valor se relacione
    }
        public function scopeRespues20($query, $respues2)
    {
      if($respues20)
        return $query->where('respues20', 'LIKE', "%$respues20%"); //el % al principio es para todo valor o caracter que comience o termine con el valor se relacione
    }*/


