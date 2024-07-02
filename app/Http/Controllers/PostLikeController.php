<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Like;


class PostLikeController extends Controller
{
    public function like(Post $post, $gid)
    {
        $user = auth()->user();
        
        $LikeExist = $user->likes()->where('post_id', $post->id)->first();

        if ($LikeExist) 
        {   
            $user->likes()->detach($post->id);
            return redirect()->route('front.groups.posts.index',[$gid,$post->id]);
        } 
        else 
        {
            $user->likes()->attach($post->id, ['like' => true]);
            return redirect()->route('front.groups.posts.index',[ $gid,$post->id]);    
        }
    }
}
