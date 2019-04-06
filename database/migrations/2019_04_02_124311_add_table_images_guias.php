<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableImagesGuias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::table('guias', function (Blueprint $table) {
            $table->string('number_campos_img')->after('number_campos')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::table('guias', function (Blueprint $table){
            $table->dropColumn('number_campos_img');
        });
    }
}
