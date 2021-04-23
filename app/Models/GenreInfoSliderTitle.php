<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class GenreInfoSliderTitle extends Model
{
    use HasFactory;
	use HasTranslations;
	
	protected $table = 'genre_info_slider_titles';
	
	public $translatable = ['title'];
	
	protected $fillable = ['title', 'genre_id', 'background'];
	
}
