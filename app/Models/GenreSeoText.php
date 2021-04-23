<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class GenreSeoText extends Model
{
    use HasFactory;
	use HasTranslations;
	
	protected $table = 'genre_seo_texts';
	protected $fillable = ['text', 'genre_id'];
	
	public $translatable = ['text'];
}
