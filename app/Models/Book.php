<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'pages',
        'publisher_id',
        'author_id',
        'category_id'
    ];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function publisher()
    {
        return $this->belongsTo(Publisher::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function users()
    {
         return $this->belongsToMany(User::class, 'borrowings')
        ->withPivot('id', 'borrowed_at', 'returned_at')
        ->withTimestamps();
    }
}
