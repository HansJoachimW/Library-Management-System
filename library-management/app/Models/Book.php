<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'author', 'year_published', 'synopsis', 'genre', 'status'];

    public function borrows()
    {   
        return $this->hasMany(Borrow::class);
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'book_genres');
    }

    public function isAvailable()
    {
        return $this->status === 'available';
    }
}
