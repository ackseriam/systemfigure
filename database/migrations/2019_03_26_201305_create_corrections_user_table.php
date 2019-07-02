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
            $table->binary('respues0')->nullable();

            $table->binary('respues1')->nullable();
            $table->binary('respues2')->nullable();
            $table->binary('respues3')->nullable();
            $table->binary('respues4')->nullable();
            $table->binary('respues5')->nullable();
            $table->binary('respues6')->nullable();
            $table->binary('respues7')->nullable();
            $table->binary('respues8')->nullable();
            $table->binary('respues9')->nullable();
            $table->binary('respues10')->nullable();
            $table->binary('respues11')->nullable();
            $table->binary('respues12')->nullable();
            $table->binary('respues13')->nullable();
            $table->binary('respues14')->nullable();
            $table->binary('respues15')->nullable();
            $table->binary('respues16')->nullable();
            $table->binary('respues17')->nullable();
            $table->binary('respues18')->nullable();
            $table->binary('respues19')->nullable();
            $table->binary('respues20')->nullable();
            $table->binary('tipos_campos')->nullable();

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
