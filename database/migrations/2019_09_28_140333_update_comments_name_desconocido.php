<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateCommentsNameDesconocido extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
      public function up()
    {
        Schema::table('comments', function (Blueprint $table) {
          $table->string('name_desconocido')->after('user_id')->nullable();
        
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comments', function (Blueprint $table){
           $table->dropColumn('name_desconocido');
           
        });
    }
}
