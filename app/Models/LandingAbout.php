<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class LandingAbout extends Model
{
    use HasFactory;
	use HasTranslations;

	protected $table = 'landing_abouts';

	protected $fillable     = ['text', 'background', 'picture'];
	public    $translatable = ['text'];
}
