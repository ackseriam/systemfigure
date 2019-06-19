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
            $table->string('respues0',1000)->nullable();

            $table->string('respues1',1000)->nullable();
            $table->string('respues2',1000)->nullable();
            $table->string('respues3',1000)->nullable();
            $table->string('respues4',1000)->nullable();
            $table->string('respues5',1000)->nullable();
            $table->string('respues6',1000)->nullable();
            $table->string('respues7',1000)->nullable();
            $table->string('respues8',1000)->nullable();
            $table->string('respues9',1000)->nullable();
            $table->string('respues10',1000)->nullable();
            $table->string('respues11',1000)->nullable();
            $table->string('respues12',1000)->nullable();
            $table->string('respues13',1000)->nullable();
            $table->string('respues14',1000)->nullable();
            $table->string('respues15',1000)->nullable();
            $table->string('respues16',1000)->nullable();
            $table->string('respues17',1000)->nullable();
            $table->string('respues18',1000)->nullable();
            $table->string('respues19',1000)->nullable();
            $table->string('respues20',1000)->nullable();
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
