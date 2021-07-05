<?php

namespace App\Models;

use App\Models\Account;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * Get the account associated with the post
     */
    public function account_id()
    {
        return $this->belongsTo(Account::class);
    }

    /**
     * Get the account associated with the post
     */
    public function testMethod()
    {
        return 'WORKING';
    }
}
