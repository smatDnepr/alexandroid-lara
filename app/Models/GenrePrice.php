<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class GenrePrice extends Model
{
    use HasFactory, HasTranslations;
	
	protected $table = 'genre_prices';
	
	protected $fillable = ['order', 'title', 'description', 'money', 'genre_id'];
	
	public $translatable = ['title', 'description'];
	
	public function genre()
	{
		return $this->belongsTo(Genre::class);
	}
}
