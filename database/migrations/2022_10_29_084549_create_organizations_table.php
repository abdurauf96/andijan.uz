<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrganizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizations', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('title_uz')->nullable();
            $table->string('title_ru')->nullable();
            $table->string('title_en')->nullable();
            $table->string('position_uz')->nullable();
            $table->string('position_ru')->nullable();
            $table->string('position_en')->nullable();
            $table->string('image')->nullable();
            $table->string('statute')->nullable();
            $table->mediumText('addres_uz')->nullable();
            $table->mediumText('addres_ru')->nullable();
            $table->mediumText('addres_en')->nullable();
            $table->string('phone')->nullable();
            $table->string('website')->nullable();
            $table->string('email')->nullable();
            $table->string('fax')->nullable();
            $table->string('reception_time_uz')->nullable();
            $table->string('reception_time_ru')->nullable();
            $table->string('reception_time_en')->nullable();
            $table->string('telegram')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->integer('view')->nullable()->default(0);
            $table->string('slug')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('director')->nullable();
            $table->string('director_image')->nullable();
            $table->string('director_phone')->nullable();
            $table->text('director_info_uz')->nullable();
            $table->text('director_info_ru')->nullable();
            $table->text('director_info_en')->nullable();
            $table->string('director_facebook')->nullable();
            $table->string('director_telegram')->nullable();
            $table->string('director_instagram')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('organizations');
    }
}
