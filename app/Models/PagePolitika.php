<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class PagePolitika extends Model
{
    use HasFactory;
	use HasTranslations;

	protected $table = 'page_politikas';

	protected $fillable     = ['title', 'text'];

	public    $translatable = ['title', 'text'];
}
