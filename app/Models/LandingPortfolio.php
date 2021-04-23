<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LandingPortfolio extends Model
{
    use HasFactory;

	protected $table = 'landing_portfolios';
	protected $fillable = ['order', 'portfolio_id'];

	public function portfolio()
    {
        return $this->hasOne(Portfolio::class, 'id', 'portfolio_id');
    }

}
