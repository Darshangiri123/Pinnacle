<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = [
        'user_id','group_id','title','content','image_path'
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function getImagePathUrlAttribute()
    {
        return asset('storage/' . str_replace('public/', '', $this->image_path));
    }

    public function likes()
    {
        return $this->belongsToMany(User::class, 'likes', 'post_id', 'user_id')->withTimestamps();
    }
    
    public function getCountLikesAttribute()
    {
        return $this->likes()->where('like', true)->count();
    }
    public function getUserNameAttribute(){
        return User::where('id', $this->user_id)->get();
    }

    public function name(){
        return User::where('id', $this->user_id)->get();
    }
}
