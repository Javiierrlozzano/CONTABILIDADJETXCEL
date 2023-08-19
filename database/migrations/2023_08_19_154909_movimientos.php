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
            $table->string('Caja');
            $table->string('Codigo');
            $table->bigInteger('Usuario');
            $table->string('Tipo');
            $table->foreign('Valor');
           
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
