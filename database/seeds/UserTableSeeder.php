<?php

use Illuminate\Database\Seeder;
use App\Role;
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
         $person_editor = Person::where('ci','20431682')->first();
         $person_task0 = Person::where('ci','23244522')->first();
         $person_task = Person::where('ci','20323434')->first();
         $person_buyer = Person::where('ci','20323456')->first();
  
  $person_foundd= $person_found->id;
         $user = new User();
         $user->username="juffyto";
         $user->email="juffyto@gmail.com";
         $user->password= bcrypt('1234');
         $user->ip= "127.0.0.1";
         $user->mac= "dc:85:de:85:6d:9f ";
         $user->state ="activo";
         $user->people_id =  $person_foundd;
         $user->save();
         $user->roles()->attach($role_foun);	
               
$person_adminn= $person_admin->id;
         $user = new User();
         $user->username="mike";
         $user->email="mike@gmail.com";
         $user->password= bcrypt('1234');
         $user->ip= "127.0.0.1";
         $user->mac= "dc:85:de:85:6d:9f ";
         $user->state ="activo";
         $user->people_id =  $person_adminn;
         $user->save();
        $user->roles()->attach($role_admin);	

$person_editorr= $person_editor->id;
         $user = new User();
         $user->username="yix";
         $user->email="jorge_yix@hotmail.com";
         $user->password= bcrypt('123456');
         $user->ip= "127.0.0.1";
         $user->mac= "dc:85:de:85:6d:9f ";
         $user->state ="activo";
         $user->people_id =  $person_editorr;
         $user->save();
        $user->roles()->attach($role_editor);  

  $person_task00= $person_task0->id;
         $user = new User();
         $user->username="emma";
         $user->email="emma@gmail.com";
         $user->password= bcrypt('123456');
         $user->ip= "127.0.0.1";
         $user->mac= "dc:85:de:85:6d:9f ";
         $user->state ="activo";
         $user->people_id =  $person_task00;
         $user->save();
        $user->roles()->attach($role_task0 );    


 $person_task= $person_task->id;
         $user = new User();
         $user->username="juann";
         $user->email="juana@gmail.com";
         $user->password= bcrypt('123456');
         $user->ip= "127.0.0.1";
         $user->mac= "dc:85:de:85:6d:9f ";
         $user->state ="activo";
         $user->people_id =  $person_task;
         $user->save();
        $user->roles()->attach($role_task); 

        $person_buyer= $person_buyer->id;
         $user = new User();
         $user->username="alex";
         $user->email="alex@gmail.com";
         $user->password= bcrypt('123456');
         $user->ip= "127.0.0.1";
         $user->mac= "dc:85:de:85:6d:9f ";
         $user->state ="activo";
         $user->people_id =  $person_buyer;
         $user->save();
        $user->roles()->attach($role_buyer);    

        
    }
}
