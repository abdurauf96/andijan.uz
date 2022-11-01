<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOldDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('old_documents', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->mediumText('title_uz')->nullable();
            $table->mediumText('title_ru')->nullable();
            $table->mediumText('title_en')->nullable();
            $table->mediumText('organ_uz')->nullable();
            $table->mediumText('organ_ru')->nullable();
            $table->mediumText('organ_en')->nullable();
            $table->string('date')->nullable();
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
        Schema::drop('old_documents');
    }
}
