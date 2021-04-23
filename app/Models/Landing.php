<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Landing extends Model
{
    use HasFactory;
	use HasTranslations;

	protected $table = 'landings';
	protected $fillable     = ['title'];
	public    $translatable = ['title'];
}
