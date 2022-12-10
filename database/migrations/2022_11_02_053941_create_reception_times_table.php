<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReceptionTimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reception_times', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('title_uz')->nullable();
            $table->string('title_ru')->nullable();
            $table->string('title_en')->nullable();
            $table->string('title_kr')->nullable();
            $table->mediumText('body_uz')->nullable();
            $table->mediumText('body_ru')->nullable();
            $table->mediumText('body_en')->nullable();
            $table->mediumText('body_kr')->nullable();
            $table->string('image')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('reception_times');
    }
}
