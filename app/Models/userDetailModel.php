<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userDetailModel extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongToOne(User::class);
    }
}
