<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;
    protected $table='likes';
    protected $fillables=[
        'user_id', 'post_id', 'like'
    ];

    
}
