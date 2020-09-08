<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePicturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('pictures', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('category');
            $table->integer('file_id')->unique()->unsigned();
            $table->timestamps();
            $table->foreign('file_id')->references('id')->on('files')->onDelete('cascade');
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('pictures');
        Schema::enableForeignKeyConstraints();
    }
}
