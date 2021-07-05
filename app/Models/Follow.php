<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    use HasFactory;

    public function userFollowed()
    {
        return $this->belongsTo(Models\Accounts::class, 'user_followed_id');
    }
}
