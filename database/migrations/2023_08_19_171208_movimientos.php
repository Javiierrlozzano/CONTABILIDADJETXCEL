<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Movimientos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Movimientos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_Caja')->unsigned();
            $table->bigInteger('id_Codigos')->unsigned();
            $table->bigInteger('id_Usuario')->unsigned();
            $table->string('Tipo');
            $table->string('Valor');
            $table->foreign('id_Caja')->references('id')->on('cajas')->onDelete('cascade');
            $table->foreign('id_Codigos')->references('id')->on('codigos')->onDelete('cascade');
            $table->foreign('id_Usuario')->references('id')->on('usuarios')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
