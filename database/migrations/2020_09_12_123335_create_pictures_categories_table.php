<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePicturesCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pictures_categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('picture_id');
            $table->unsignedBigInteger('category_id');

            $table->foreign('picture_id')->references('id')->on('pictures');
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pictures_categories');
    }
}
