<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Equipamento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipamentos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome_equipamento');
            $table->string('tombamento')->unique();
            $table->Integer('tipo_equipamento_id')->unsigned();
            $table->foreign('tipo_equipamento_id')->references('id')->on('tipo_equipamento')->onDelete('cascade');
            $table->timestamp('nome');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipamentos');
    }
}
