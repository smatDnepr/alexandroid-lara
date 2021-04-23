<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGenreFaqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genre_faqs', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('order')->default(0);
            $table->unsignedBigInteger('genre_id')->default(0);
            $table->text('question');
            $table->text('answer');
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
        Schema::dropIfExists('genre_faqs');
    }
}
