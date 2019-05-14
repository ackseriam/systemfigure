<?php

use Illuminate\Database\Seeder;
use App\Person;
class PersonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $person= new Person();
       $person->name ="Juffyto";
       $person->surname ="Segovia";
       $person->email ="jusego1696@gmail.com";
       $person->nacionality ="Peru";
       $person->ci ="1234";
       $person->address ="Peru";
        $person->save();

       $person= new Person();
       $person->name ="Mike";
       $person->surname ="Castillo";
       $person->email ="vompiermichael.98@gmail.com";
       $person->nacionality ="Venezuela";
       $person->ci ="12345";
       $person->address ="Venezuel";
       $person->save();
    

       $person= new Person();
       $person->name ="Leonardo";
       $person->surname ="Alvino";
       $person->email ="josealvinokikelio@gmail.com";
       $person->nacionality ="Venezuela";
       $person->ci ="23244522";
       $person->address ="Venezuela";
       $person->save();

         $person= new Person();
       $person->name ="Luzmary";
       $person->surname ="Gil";
       $person->email ="luzmarydelvalle70@gmail.com";
       $person->nacionality ="Venezuela";
       $person->ci ="20323434";
       $person->address ="Venezuela";
       $person->save();

       $person= new Person();
       $person->name ="Josue";
       $person->surname ="Ascenzi";
       $person->email ="josue.ascenzi@gmail.com"; 
       $person->nacionality ="Mexico";
       $person->ci ="20323456";
       $person->address ="Venezuela";
       $person->save();

       $person= new Person();
       $person->name ="Luigi";
       $person->surname ="Holmes";
       $person->email ="luigifernando1111@gmail.com"; 
       $person->nacionality ="Venezuela";
       $person->ci ="20323456";
       $person->address ="Venezuela";
       $person->save();
    }
}
