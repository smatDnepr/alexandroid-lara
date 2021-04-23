<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioImage extends Model
{
    use HasFactory;
	
	protected $table = 'portfolio_images';
	
	protected $fillable = ['order', 'portfolio_id', 'img'];
	
	
	public function portfolio()
	{
		return $this->belongsTo(Portfolio::class);
	}
	
	
	public static function storeImages(array $images, $id)
	{
		foreach ($images as $key => $value) {
			self::create([
				'order'        => $key + 1,
				'portfolio_id' => $id,
				'img'          => $value
			]);
		}
		return null;
	}
	
	
	public static function updateImages(array $images, $id)
	{
		// сначала удаляем старые записи
		self::where('portfolio_id', $id)->delete();
		
		// потом добавляем новые записи
		foreach ($images as $key => $value) {
			self::create([
				'order'        => $key + 1,
				'portfolio_id' => $id,
				'img'          => $value
			]);
		}
		
		return null;
	}
	
	
}
