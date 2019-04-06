<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableImagesNamesGuias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('guias', function (Blueprint $table) {
            $table->string('names_campo_img')->after('number_campos_img')->nullable();
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
            $table->dropColumn('names_campo_img');
        });
    }
}
