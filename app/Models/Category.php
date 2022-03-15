<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    // field yg tidak boleh diisi lewat thinker/database seeder

    public function articles()
    {
        // menghubungkan category dgn article
        // 1 kategori bisa dimiliki banyak post
         return $this->hasMany(Article::class);
    }
}
