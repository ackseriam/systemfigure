<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\Role_user;
use App\User;
use App\Person;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *

     * @return void
     */
    public function run()
    {
        //aqui se buscan dichos roles que estan en la BD
//para luego asignarlo al user
        $role_foun = Role::where('name','foun')->first();
        $role_admin = Role::where('name','admin')->first();
        $role_editor = Role::where('name','editor')->first();
        $role_task0 = Role::where('name','task0')->first();
        $role_task = Role::where('name','task')->first();
        $role_buyer = Role::where('name','buyer')->first();


         $person_found = Person::where('ci','1234')->first();
         $person_admin = Person::where('ci','12345')->first();
         $person_admin_2 = Person::where('ci','23244522')->first();
         $person_admin3 = Person::where('ci','20323434')->first();
         $person_admin4 = Person::where('ci','20323456')->first();
         $person_admin5 = Person::where('ci','203234567')->first();
  
  $person_foundd= $person_found->id;
         $user = new User();
         $user->username="Juffyto";
         $user->email="jusego1696@gmail.com";
         $user->password= bcrypt('123456');
         $user->ip= "127.0.0.1";
         $user->mac= "dc:85:de:85:6d:9f ";
         $user->state ="activo";
         $user->people_id =  $person_foundd;
         $user->status_login =  'inactivo';
         $user->save();
         $user->roles()->attach($role_foun);    
               
$person_adminn= $person_admin->id;
         $user = new User();
         $user->username="Mike Castillo";
         $user->email="vompiermichael.98@gmail.com";
         $user->password= bcrypt('123456');
         $user->ip= "127.0.0.1";
         $user->mac= "dc:85:de:85:6d:9f ";
         $user->state ="activo";
         $user->people_id =  $person_adminn;
         $user->status_login =  'inactivo';
         $user->save();
        $user->roles()->attach($role_admin);   

          $person_admin_2= $person_admin_2->id;
         $user = new User();
         $user->username="Leonardo Alvino";
         $user->email="josealvinokikelio@gmail.com";
         $user->password= bcrypt('123456');
         $user->ip= "127.0.0.1";
         $user->mac= "dc:85:de:85:6d:9f ";
         $user->state ="activo";
         $user->people_id =  $person_admin_2;
         $user->status_login =  'inactivo';
         $user->save();
        $user->roles()->attach($role_admin);   


         $person_admin3= $person_admin3->id;
         $user = new User();
         $user->username="Luzmary Gil ";
         $user->email="luzmarydelvalle70@gmail.com";
         $user->password= bcrypt('123456');
         $user->ip= "127.0.0.1";
         $user->mac= "dc:85:de:85:6d:9f ";
         $user->state ="activo";
         $user->people_id =  $person_admin3;
         $user->status_login =  'inactivo';
         $user->save();
        $user->roles()->attach($role_admin); 

         $person_admin4= $person_admin4->id;
         $user = new User();
         $user->username="Josue Ascenzi ";
         $user->email="josue.ascenzi@gmail.com";
         $user->password= bcrypt('123456');
         $user->ip= "127.0.0.1";
         $user->mac= "dc:85:de:85:6d:9f ";
         $user->state ="activo";
         $user->people_id =  $person_admin3;
         $user->status_login =  'inactivo';
         $user->save();
        $user->roles()->attach($role_admin); 

         $person_admin5= $person_admin5->id;
         $user = new User();
         $user->username="Luigi Holmes ";
         $user->email="luigifernando1111@gmail.com";
         $user->password= bcrypt('123456');
         $user->ip= "127.0.0.1";
         $user->mac= "dc:85:de:85:6d:9f ";
         $user->state ="activo";
         $user->people_id =  $person_admin5;
         $user->status_login =  'inactivo';
         $user->save();
        $user->roles()->attach($role_admin); 
  

        
    }
}
