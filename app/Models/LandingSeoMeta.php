<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class LandingSeoMeta extends Model
{
    use HasFactory;
	use HasTranslations;

	protected $table = 'landing_seo_metas';

	protected $fillable = ['meta_title', 'meta_description', 'meta_keywords'];

	public $translatable = ['meta_title', 'meta_description', 'meta_keywords'];
}
