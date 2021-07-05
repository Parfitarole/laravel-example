<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    /**
     *  Each account can have many posts
     */
    public function id()
    {
        return $this->hasMany(Post::class);
    }
}
