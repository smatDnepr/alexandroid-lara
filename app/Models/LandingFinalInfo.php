<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class LandingFinalInfo extends Model
{
    use HasFactory;
	use HasTranslations;

	protected $table = 'landing_final_infos';

	protected $fillable = ['title', 'text', 'background'];

	public $translatable = ['title', 'text'];
}
