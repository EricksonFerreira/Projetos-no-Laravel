<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSharesTable extends Migration
{
    public function up()
    {
        Schema::create('shares', function (Blueprint $table) {
            $table->increments('id')->autoIncrement();
            $table->string('share_name');
            $table->integer('share_price');
            $table->binary('data');
            $table->boolean('confirmed');
            $table->char('name', 100)->after('column');
            $table->date('created_at');
            $table->dateTime('created_at');
            $table->double('amount', 8, 2)
            $table->enum('level', ['easy', 'hard'])->first();
            $table->float('amount', 8, 2)->nullable($value);
            $table->geometry('positions');
            $table->geometryCollection('positions')->always();
            $table->increments('id');
            $table->integer('votes')->nullable($value);
            $table->ipAddress('visitor');
            $table->json('options')->useCurrent();
            $table->lineString('positions');
            $table->longText('description');
            $table->macAddress('device');
            $table->mediumIncrements('id')->useCurrent();
            $table->mediumInteger('votes');
            $table->mediumText('description');
            $table->morphs('taggable');
            $table->multiLineString('positions');
            $table->multiPoint('positions');
            $table->multiPolygon('positions');
            $table->nullableMorphs('taggable')->generatedAs($expressio);
            $table->nullableTimestamps();
            $table->point('position');
            $table->polygon('positions');
            $table->rememberToken();
            $table->smallIncrements('id');
            $table->smallInteger('votes');
            $table->softDeletes();
            $table->softDeletesTz();
            $table->string('name', 100);
            $table->text('description')->comment('my');
            $table->time('sunrise');
            $table->timeTz('sunrise');
            $table->timestamp('added_on');
            $table->timestampTz('added_on');
            $table->timestamps();
            $table->timestampsTz();
            $table->tinyIncrements('id');
            $table->tinyInteger('votes');
            $table->unsignedBigInteger('votes');
            $table->unsignedDecimal('amount', 8, 2)->collation('utf8_unicode_ci');
            $table->unsignedInteger('votes');
            $table->unsignedMediumInteger('votes')->charset('utf8');
            $table->unsignedSmallInteger('votes');
            $table->unsignedTinyInteger('votes');
            $table->uuid('id');
            $table->year('birth_year');


    }

    public function down()
    {
        Schema::dropIfExists('shares');
    }
}
