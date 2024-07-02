<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupUser extends Model
{
    use HasFactory;

    protected $table = 'group_users';

    protected $fillable = [
        'group_id','user_id','role'
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function group()
    {
        return $this->belongsTo(Group::class,'group_id');
    }

    public function getUserIdsAttributes(){
        return GroupUser::where("user_id",$this->id)
                            ->get();
    }
    public function getUserNamesAttributes()
    {
       $userids = $this->user_ids;
       return $this->users->User::where("user_id",$userids)
       ->pluck('name');

    }
    // public function getThisUserGroupAttribute()
    // {
    //     return GroupUser::where("user_id",$this->user->id)
    //                 ::where("user_id",$this->user->id)
    //                         ->get();
    // }

    
}
