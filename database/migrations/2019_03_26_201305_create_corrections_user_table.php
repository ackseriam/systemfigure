<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCorrectionsUserTable extends Migration
{
  /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('correction_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('text');
            $table->string('img');
            $table->string('name_campo');
            $table->integer('id_corrections')->unsigned()->nullable();
            $table->foreign('id_corrections')->references('id')->on('corrections')->onDelete('set null');
            $table->timestamps();
   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('corrections_user');
    }
}
