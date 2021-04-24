<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyEmail extends Model
{
    use HasFactory;

	protected $table = 'my_emails';

	protected $fillable = ['email'];
}
