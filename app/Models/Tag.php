<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tag extends Model
{
    use HasFactory;

    //Relations N:N, many tags belong to many posts

    public function posts(): BelongsToMany
    {
        return $this->belongsToMany(Post::class);
    }
}
