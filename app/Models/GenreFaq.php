<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class GenreFaq extends Model
{
    use HasFactory;
	use HasTranslations;
	
	protected $table = 'genre_faqs';
	
	public $translatable = ['question', 'answer'];
	
	protected $fillable = ['question', 'answer', 'order', 'genre_id'];
}
