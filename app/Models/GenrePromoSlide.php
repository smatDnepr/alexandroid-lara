<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class GenrePromoSlide extends Model
{
    use HasFactory;
	use HasTranslations;
	
	protected $table = 'genre_promo_slides';
	
	protected $fillable = ['order', 'img', 'title', 'text', 'genre_id', 'btn_functional', 'btn_link'];
	
	public $translatable = ['title', 'text'];
	
	public function genre()
	{
		return $this->belongsTo(Genre::class);
	}
}
