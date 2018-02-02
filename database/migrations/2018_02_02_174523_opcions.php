<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Opcions extends Migration
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

        Schema::create('Opcions', function (Blueprint $table) {
            $table -> increments('id');
            $table -> string('desc');
            $table -> integer('consulta_id');
            $table -> increments('votos_totales');
            $table->foreign('consulta_id')->references('id')->on('Consulta');
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
        $table->dropForeign(['consulta_id']);
    }
}
