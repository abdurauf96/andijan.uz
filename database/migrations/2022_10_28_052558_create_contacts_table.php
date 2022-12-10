<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->text('addres_uz')->nullable();
            $table->text('addres_ru')->nullable();
            $table->text('addres_en')->nullable();
            $table->text('addres_kr')->nullable();
            $table->text('phone_uz')->nullable();
            $table->text('phone_ru')->nullable();
            $table->text('phone_en')->nullable();
            $table->text('phone_kr')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('contacts');
    }
}
