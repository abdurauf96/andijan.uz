<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvestmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investments', function (Blueprint $table) {
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
            $table->string('image')->nullable();
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
        Schema::drop('investments');
    }
}
