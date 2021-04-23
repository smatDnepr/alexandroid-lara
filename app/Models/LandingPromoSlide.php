<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class LandingPromoSlide extends Model
{
    use HasFactory;
	use HasTranslations;

	protected $table = 'landing_promo_slides';
	protected $fillable = ['order', 'img', 'title', 'text', 'btn_functional', 'btn_link'];
	public $translatable = ['title', 'text'];
}
