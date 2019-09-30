<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	protected $fillable = [
         'content','name_desconocido','user_id','post_id'
    ];
    public function post() {

    return $this->belongsTo('App\Models\Post');//aqui  se refiero que muchos comentarios solo pertenece a un post, todo lo contrario a hasMany, que busca un post en muchos comentarios
     }

       public function user() {

    return $this->belongsTo('App\User');// para saber que usuario ha escrito el post
     }
}
