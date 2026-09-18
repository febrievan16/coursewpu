<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    //kalau misal nama table di database tidak sama dgn model misal model Post tapi nama tabel misal "Belum_post" atau table dgn nama lain maka kodingnya seprti di bawah
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

    /**
     * Local query scope untuk pencarian berdasarkan title, author (name), dan category (name).
     * Penggunaan: Post::search($keyword)->get();
     */
    public function scopeSearch(Builder $query, ?string $search): Builder
    {
        if (blank($search)) {
            return $query;
        }

        return $query->where(function (Builder $query) use ($search) {
            $query->where('title', 'like', '%' . $search . '%')
                ->orWhereHas('author', function (Builder $query) use ($search) {
                    $query->where('name', 'like', '%' . $search . '%');
                })
                ->orWhereHas('category', function (Builder $query) use ($search) {
                    $query->where('name', 'like', '%' . $search . '%');
                });
        });
    }
}
