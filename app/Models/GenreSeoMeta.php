<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class GenreSeoMeta extends Model
{
    use HasFactory;
	use HasTranslations;

	protected $table = 'genre_seo_metas';

	protected $fillable = ['genre_id', 'meta_title', 'meta_description', 'meta_keywords'];

	public $translatable = ['meta_title', 'meta_description', 'meta_keywords'];
}
