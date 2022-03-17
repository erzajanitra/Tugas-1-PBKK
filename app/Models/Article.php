<?php
//  dibuat ppake command -> php artisan make:model -m Article
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function category(){
        // 1 postingan punya 1 kategori
        return $this->belongsTo(Category::class);
    }

    public function author(){
        // relasi dengan user 
        // 1 postingan punya 1 kategori
        return $this->belongsTo(User::class,'user_id');
        
        // return $this->belongsTo(User::class,'user_id');
    }
}
