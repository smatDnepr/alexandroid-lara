<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Whitecube\Sluggable\HasSlug;

class Portfolio extends Model
{
    use HasFactory;
	use HasTranslations;
	use HasSlug;


	protected $table        = 'portfolios';
	protected $fillable     = ['title', 'slug', 'date', 'partner_id', 'partner_title', 'genre_id'];
	public    $translatable = ['title', 'slug', 'partner_title'];
	public    $sluggable    = 'title';


	public function genre()
	{
		return $this->belongsTo(Genre::class);
	}


	public function partner()
	{
		return $this->belongsTo(Partner::class);
	}


	public function images()
	{
		return $this->hasMany(PortfolioImage::class);
	}


	// Аксессор для столбца Date. При получении из базы (чтобы показать в привычном виде).
	public function getDateAttribute($value)
	{
		if ( isset($value) ) {
			$date = Carbon::createFromFormat('Y-m-d', $value)->format('d.m.Y');
			return $date;
		} else {
			return NULL;
		}
	}


	// Мутатор для столбца Date. При сохранении в базу (чтобы сохранить в нужном формате).
	public function setDateAttribute($value)
	{
		if ( isset($value) ) {
			$date = Carbon::createFromFormat('d.m.Y', $value)->format('Y-m-d');
			$this->attributes['date'] = $date;
		}
	}
}
