<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublicChat extends Model
{
    use HasFactory;
    protected $table = 'publicchats';

    protected $fillable = [
        'publicChatName',
        'sender_id',
        'message',
        'receiver_id',
    ];

    public function sender(){
        return $this->belongsTo(User::class, 'sender_id');
    }

    public function getPublicChatNamesAttribute(){
        return PublicChat::get('publicChatName');
    }
    public function publicchatname(){
        return PublicChat::where('group_id', $this->id)->first()->publicChatName;
    }
    
   
}
