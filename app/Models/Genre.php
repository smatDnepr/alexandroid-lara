<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Whitecube\Sluggable\HasSlug;


class Genre extends Model
{

	use HasFactory;
	use HasTranslations;
	use HasSlug;

	protected $table        = 'genres';
	protected $fillable     = ['title', 'slug', 'is_published'];
	public    $translatable = ['title', 'slug'];
	public    $sluggable    = 'title';


	public function portfolios()
	{
		return $this->hasMany(Portfolio::class);
	}


	public function promoSlides()
	{
		return $this->hasMany(GenrePromoSlide::class);
	}


	public function prices()
	{
		return $this->hasMany(GenrePrice::class);
	}
}
