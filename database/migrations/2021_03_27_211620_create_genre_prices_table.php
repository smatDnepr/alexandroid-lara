<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGenrePricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genre_prices', function (Blueprint $table) {
            $table->id();
			$table->unsignedInteger('order')->default(0);
			$table->text('title')->nullable();
			$table->text('description')->nullable();
			$table->string('money')->nullable();
			$table->unsignedBigInteger('genre_id');
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
        Schema::dropIfExists('genre_prices');
    }
}
