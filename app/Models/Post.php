<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;
use App\Models\Category;

class Post extends Model
{
    use HasFactory;


    //Relations 1:N (inversa) a post belong to a user.

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    //Relations 1:N (inversa) a post belong to a category.

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
