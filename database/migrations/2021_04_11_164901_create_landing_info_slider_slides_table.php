<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLandingInfoSliderSlidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landing_info_slider_slides', function (Blueprint $table) {
            $table->id();
			$table->unsignedBigInteger('order')->default(0);
			$table->text('title')->nullable();
			$table->text('text')->nullable();
			$table->text('img')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('landing_info_slider_slides');
    }
}
