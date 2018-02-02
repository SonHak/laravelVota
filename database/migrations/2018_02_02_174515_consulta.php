<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Consulta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::enableForeignKeyConstraints();

        Schema::create('Consulta', function (Blueprint $table) {
            $table -> increments('id');
            $table -> string('titulo');
            $table -> string('desc');
            $table -> integer('user_id')->unsigned();
            $table -> dateTime('horaInicio');
            $table -> dateTime('horaFinal');
            
            $table->foreign('user_id')->references('id')->on('users');
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
    }
}
