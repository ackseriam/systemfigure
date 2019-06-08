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
            $table->string('respues0')->nullable();
            $table->string('respues1')->nullable();
            $table->string('respues2')->nullable();
            $table->string('respues3')->nullable();
            $table->string('respues4')->nullable();
            $table->string('respues5')->nullable();
            $table->string('respues6')->nullable();
            $table->string('respues7')->nullable();
            $table->string('respues8')->nullable();
            $table->string('respues9')->nullable();
            $table->string('respues10')->nullable();
            $table->string('respues11')->nullable();
            $table->string('respues12')->nullable();
            $table->string('respues13')->nullable();
            $table->string('respues14')->nullable();
            $table->string('respues15')->nullable();
            $table->string('respues16')->nullable();
            $table->string('respues17')->nullable();
            $table->string('respues18')->nullable();
            $table->string('respues19')->nullable();
            $table->string('respues20')->nullable();
            $table->string('tipos_campos')->nullable();

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
