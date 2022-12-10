<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCouncilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('councils', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->mediumText('title_uz')->nullable();
            $table->mediumText('title_ru')->nullable();
            $table->mediumText('title_en')->nullable();
            $table->mediumText('title_kr')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('councils');
    }
}
