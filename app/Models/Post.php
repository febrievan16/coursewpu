<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    //kalau misal nama table di database tidak sama dgn model misal model Post tapi nama tabel misal "Belum_post" atau table dgn nama lain maka kodinganya seprti di bawah
    // protected $tbale = 'belum_post';

    use HasFactory;

    protected $fillable = ['title', 'slug', 'author_id', 'body', 'category_id'];

    protected $with = ['author', 'category'];

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }


    public function scopeFilter(Builder $query, array $filters): void
    {
        $query->when($filters['search'] ?? false, function ($query, $search)  {
           return $query->where('title', 'like', '%' . $search . '%');
        });

        $query->when($filters['category'] ?? false, function ($query, $category)  {
           return $query->whereHas(
            'category', 
            fn(Builder $query) => 
            $query->where('slug', $category)
           );
        });

        $query->when($filters['author'] ?? false, function ($query, $author)  {
           return $query->whereHas(
            'author', 
            fn(Builder $query) => 
            $query->where('username', $author)
           );
        });

    }
}