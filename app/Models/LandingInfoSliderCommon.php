<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class LandingInfoSliderCommon extends Model
{
    use HasFactory;
	use HasTranslations;

	protected $table = 'landing_info_slider_commons';
	protected $fillable = ['title', 'subtitle', 'background'];
	public $translatable = ['title', 'subtitle'];
}
