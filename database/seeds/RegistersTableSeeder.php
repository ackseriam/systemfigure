<?php

use Illuminate\Database\Seeder;
use App\Register;
class RegistersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $register= new Register();
       $register->status ="si";
        $register->save();    }
}
