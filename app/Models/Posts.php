<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;

    protected $fillable = ['body'];

    public function user() {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
