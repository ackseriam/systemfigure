<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

 public function roles(){
    return $this->belongsToMany('App\Role'); //aqui se relaciona este modelo con los roles con la relacion de muchos  a muchos es decir un usuario puede tener varios roles

}
 public function authoraizeRole($roles)
    {
        /* 
        Aqui se comprueba que el rol este autorizado para realizar 
        dicha accion
        */
        if($this->hasAnyRole($roles)){
            return true;
        }
        abort(401, 'No estas autorizado para ingresar aca'); 
    }
    
    public function hasAnyRole($roles){
        //aqui se ve si el usuario tiene mas de un rol
        //determnando si los datos que trae son un arreglo
        if(is_array($roles))
        {
            //si es un array va a iterear
            foreach ($roles as $role) {
            if($this->hasRole($role)){
                return true;
            }         
            }
        }else{
        /*si no es un array es decir si solo tiene un rol
         se comprueba que tenga rol con la funcion hasRole
         */   
         if($this->hasRole($roles)){
            return true;
         }
        }
        return false;
    }

    public function hasRole($role){
        //aqui se comprueba si el usuario tiene un rol
        if($this->roles()->where('name',$role)->first()){
    return true;
        }
        return false;
    }

 public function person_user($id){
        //aqui se comprueba si el usuario tiene un rol
        if($this->users()->where('people_id',$id)->first()){
    return true;
        }
        return false;
    }


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password', 'ip','mac', 'people_id','state'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
