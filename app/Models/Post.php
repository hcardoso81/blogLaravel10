<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Post extends Model
{
    use HasFactory;


    //Relations 1:N (inverse) a post belong to a user.

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    //Relations 1:N (inverse) a post belong to a category.

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    //Relations N:N, many posts belong to many tags

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    //Relations 1:1 Polimorfica

    public function image(): MorphOne
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
