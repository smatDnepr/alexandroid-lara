<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Partner extends Model
{
    use HasFactory, HasTranslations;
	
	protected $table = 'partners';
	
	protected $fillable = ['order', 'title', 'logo', 'link'];
	
	public $translatable = ['title'];
}
