<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Vots extends Migration
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
            $table -> integer('consulta_id');
            $table -> integer('opcion_id');
            $table -> integer('user_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('consulta_id')->references('id')->on('Consulta');
            $table->foreign('opcion_id')->references('id')->on('Opcions');

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
