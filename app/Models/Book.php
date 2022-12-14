<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code',
        'title',
        'cover_url',
        'description',
        'price',
        'published_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'published_at' => 'datetime'
    ];

    public function authors()
    {
        return $this->belongsToMany(Author::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function languages()
    {
        return $this->belongsToMany(Language::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }


    public function scopeLanguaged($query, $languages)
    {
        return $query->whereHas('languages', function ($q) use ($languages) {
            $q->whereIn('languages.id', $languages);
        });
    }

    public function scopeCategorized($query, $categories)
    {
        return $query->whereHas('categories', function ($q) use ($categories) {
            $q->whereIn('categories.id', $categories);
        });
    }

    public function wantToReadUsers()
    {
        return $this->belongsToMany(User::class, 'want_to_read_books', 'book_id', 'user_id')->withTimestamps();
    }


    public function averageRating()
    {
        return $this->reviews()
            ->selectRaw('avg(star) as value, book_id')
            ->groupBy('book_id');
    }
}
