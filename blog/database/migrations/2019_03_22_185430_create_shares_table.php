<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSharesTable extends Migration
{
    public function up()
    {
        Schema::create('shares', function (Blueprint $table) {
            $table->increments('id');
            $table->string('share_name');
            $table->integer('share_price');
            $table->integer('share_qty');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('shares');
    }
}
