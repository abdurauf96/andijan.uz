<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSpeechesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('speeches', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->mediumText('title_uz')->nullable();
            $table->mediumText('title_ru')->nullable();
            $table->mediumText('title_en')->nullable();
            $table->mediumText('title_kr')->nullable();
            $table->text('body_uz')->nullable();
            $table->text('body_ru')->nullable();
            $table->text('body_en')->nullable();
            $table->text('body_kr')->nullable();
            $table->string('image')->nullable();
            $table->string('file')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('speeches');
    }
}
