<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGenreInfoSliderSlidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genre_info_slider_slides', function (Blueprint $table) {
            $table->id();
			$table->unsignedBigInteger('order')->default(0);
			$table->unsignedBigInteger('genre_id')->default(0);
			$table->text('title')->nullable();
			$table->text('text')->nullable();
			$table->text('img')->nullable();
            $table->timestamps();
			$table->foreign('genre_id')->references('id')->on('genres')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('genre_info_slider_slides');
    }
}
