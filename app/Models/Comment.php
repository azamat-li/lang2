<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Posts;

class Comment extends Model
{
    use HasFactory;
		protected $guarded = [];

		public function post() 
		{
			 return $this->belongsTo(Posts::class);
		}
}
