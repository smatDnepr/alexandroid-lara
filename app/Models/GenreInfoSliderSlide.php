<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class GenreInfoSliderSlide extends Model
{
    use HasFactory;
	use HasTranslations;

	public $translatable = ['title', 'text'];
	protected $fillable = ['order', 'title', 'text', 'img', 'genre_id'];
}
