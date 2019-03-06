<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableEmilPeople extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    
     public function up()
    {
        Schema::table('people', function (Blueprint $table) {
            $table->string('email')->after('surname');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('people', function (Blueprint $table){
            $table->dropColumn('email');
        });
    }
}

