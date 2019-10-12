<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
     protected $fillable = [
        'title', 'content','user_id','description','img_post'
    ];

    public function user() 
    {
    	return $this->belongsTo('App\User','user_id'); //busca el usuario por el argumento del post, es decir que un post tiene un usuario. busca por usuario
    }
    //debido que el psot  tiene muchos comentarios tse coloca en plural comments
      public function comments(){
      	return $this->hasMany('App\Models\Comment');

      }


}
