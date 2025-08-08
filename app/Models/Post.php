<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tag;

class Post extends Model
{
    // protected $fillable = ['body'];

    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory;

    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
