<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $table = 'groups';

    protected $fillable = [
        'community_id','name','image_path','type'
    ];

    public function community()
    {
        return $this->belongsTo(Community::class, 'community_id');
    }

    public function groupuser()
    {
        return $this->belongsToMany(User::class, 'group_users', 'group_id', 'user_id')
                    ->withPivot('role');
    }

    public function getGroupAdminAttribute()
    {
        return GroupUser::where('group_id',$this->id)
                            ->where('role','admin')
                            ->first();
    }

    public function getIsAdminAttribute()
    {
        return GroupUser::where('group_id',$this->id)
                            ->where('user_id',auth()->user()->id)
                            ->where('role','admin')
                            ->first();
    }

    public function getIsUserAttribute()
    {
        return GroupUser::where('group_id',$this->id)
                            ->where('user_id',auth()->user()->id)
                            ->where('role','user')
                            ->first();
    }

    public function getImagePathUrlAttribute()
    {
        return asset('storage/' . str_replace('public/', '', $this->image_path));
    }

   

 
    public function getUserIdsAttribute(){
        return GroupUser::where("group_id",$this->id)
                            ->get();
    }
    public function getMemberIdsAttribute()
    {
       $userids = $this->user_ids->pluck('user_id')->toArray();
       return User::whereIn("id",$userids)
       ->pluck('id');
    }

    public function getUserNameAttribute()
{
    $userIds = $this->user_ids->pluck('user_id')->toArray();
    $userNames = User::whereIn('id', $userIds)->pluck('name')->toArray();
    return $userNames;
}
    

}
