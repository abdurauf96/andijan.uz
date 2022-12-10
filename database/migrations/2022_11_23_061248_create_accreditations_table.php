<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAccreditationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accreditations', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->text('body_uz')->nullable();
            $table->text('body_ru')->nullable();
            $table->text('body_en')->nullable();
            $table->text('body_kr')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('accreditations');
    }
}
