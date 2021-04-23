<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLandingPromoSlidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landing_promo_slides', function (Blueprint $table) {
            $table->id();
			$table->unsignedInteger('order')->default(0);
			$table->text('img')->nullable();
			$table->text('title')->nullable();
			$table->text('text')->nullable();
			$table->boolean('btn_functional')->default(0);
			$table->text('btn_link')->nullable();
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
        Schema::dropIfExists('landing_promo_slides');
    }
}
