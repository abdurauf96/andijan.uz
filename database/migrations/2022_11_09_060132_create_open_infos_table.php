<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOpenInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('open_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->mediumText('title_uz')->nullable();
            $table->mediumText('title_ru')->nullable();
            $table->mediumText('title_en')->nullable();
            $table->mediumText('title_kr')->nullable();
            $table->text('passport_uz')->nullable();
            $table->text('passport_ru')->nullable();
            $table->text('passport_en')->nullable();
            $table->text('passport_kr')->nullable();
            $table->text('table_uz')->nullable();
            $table->text('table_ru')->nullable();
            $table->text('table_en')->nullable();
            $table->text('table_kr')->nullable();
            $table->mediumText('slug')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('open_infos');
    }
}
