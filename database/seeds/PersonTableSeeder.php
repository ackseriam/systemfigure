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
       $person->nacionality ="Peru";
       $person->ci ="1234";
       $person->address ="Peru";
        $person->save();

       $person= new Person();
       $person->name ="Mike";
       $person->surname ="Castillo";
       $person->nacionality ="Venezuela";
       $person->ci ="12345";
       $person->address ="Venezuel";
       $person->save();
      
       $person= new Person();
       $person->name ="Jorge";
       $person->surname ="Guillen";
       $person->nacionality ="Venezuela";
       $person->ci ="20431682";
       $person->address ="Venezuela";
       $person->save();

       $person= new Person();
       $person->name ="Emmanuel";
       $person->surname ="Santander";
       $person->nacionality ="Venezuela";
       $person->ci ="23244522";
       $person->address ="Venezuela";
       $person->save();

         $person= new Person();
       $person->name ="Juana";
       $person->surname ="Villabuena";
       $person->nacionality ="Venezuela";
       $person->ci ="20323434";
       $person->address ="Venezuela";
       $person->save();

       $person= new Person();
       $person->name ="Alexander";
       $person->surname ="Gomez";
       $person->nacionality ="Mexico";
       $person->ci ="20323456";
       $person->address ="Venezuela";
       $person->save();
    }
}
