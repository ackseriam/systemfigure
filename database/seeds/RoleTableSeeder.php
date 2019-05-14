<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
    	/*automaticamente se va a guardar estos roles por defectos cuando
        se ejecute el archivo del seeder*/
        $role= new Role();
        $role->name ="foun";
        $role->description ="Founder";
        $role->save();

        $role= new Role();
        $role->name ="admin";
        $role->description ="Administrador";
        $role->save();

        $role= new Role();
        $role->name ="editor";
        $role->description ="Editor";
        $role->save();
        
        $role= new Role();
        $role->name ="editor0";
        $role->description ="Editor0";
        $role->save();

        $role= new Role();
        $role->name ="task0";
        $role->description ="taskerlevel0";
        $role->save();

        $role= new Role();
        $role->name ="task";
        $role->description ="taskerlevel";
        $role->save();

        $role= new Role();
        $role->name ="buyer";
        $role->description ="Buyer";
        $role->save();

         $role= new Role();
        $role->name ="vpnlevel";
        $role->description ="VPNlvl";
        $role->save();

    
    }
}

