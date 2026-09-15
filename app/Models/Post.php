<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    //kalau misal nama table di database tidak sama dgn model misal model Post tapi nama tabel misal "Belum_post" atau table dgn nama lain maka kodingnya seprti di bawah
    // protected $tbale = 'belum_post';
    
    use HasFactory;

    protected $fillable = ['title', 'slug', 'author_id', 'body', 'category_id'];

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo 
    {
        return $this->belongsTo(Category::class);    
    }
}
