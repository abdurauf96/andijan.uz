<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('title_uz')->nullable();
            $table->string('title_ru')->nullable();
            $table->string('title_en')->nullable();
            $table->string('title_kr')->nullable();
            $table->text('body_uz')->nullable();
            $table->text('body_ru')->nullable();
            $table->text('body_en')->nullable();
            $table->text('body_kr')->nullable();
            $table->string('hokim_image')->nullable();
            $table->text('hokim_text_uz')->nullable();
            $table->text('hokim_text_ru')->nullable();
            $table->text('hokim_text_en')->nullable();
            $table->text('hokim_text_kr')->nullable();
            $table->string('addres_uz')->nullable();
            $table->string('addres_ru')->nullable();
            $table->string('addres_en')->nullable();
            $table->string('addres_kr')->nullable();
            $table->string('phone1')->nullable();
            $table->string('phone2')->nullable();
            $table->string('exat')->nullable();
            $table->string('website')->nullable();
            $table->string('work_time')->nullable();
            $table->string('decision')->nullable();
            $table->string('statute')->nullable();
            $table->string('slug')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cities');
    }
}
