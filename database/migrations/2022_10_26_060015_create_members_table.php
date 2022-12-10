<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name_uz')->nullable();
            $table->string('name_ru')->nullable();
            $table->string('name_en')->nullable();
            $table->string('name_kr')->nullable();
            $table->mediumText('description_uz')->nullable();
            $table->mediumText('description_ru')->nullable();
            $table->mediumText('description_en')->nullable();
            $table->mediumText('description_kr')->nullable();
            $table->integer('council_id')->nullable();
            $table->string('image')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('members');
    }
}
