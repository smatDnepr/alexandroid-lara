<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGenrePromoSlidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genre_promo_slides', function (Blueprint $table) {
            $table->id();
			$table->unsignedInteger('order')->default(0);
			$table->text('img')->nullable();
			$table->text('title')->nullable();
			$table->text('text')->nullable();
			$table->unsignedBigInteger('genre_id')->default(0);
			$table->boolean('btn_functional')->default(0);
			$table->text('btn_link')->nullable();
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
        Schema::dropIfExists('genre_promo_slides');
    }
}
