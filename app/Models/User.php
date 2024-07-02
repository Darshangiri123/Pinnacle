<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'mobile',
        'address',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function userinfo()
    {
        return $this->hasOne(UserInfo::class,"user_id");
    }

    public function getMyGroupAttribute()
    {
        return GroupUser::where("user_id",$this->id)
                            ->get();
    }

    public function getGroupListAttribute()
    {
        $groups = [];
        if (!empty($this->my_group)) {
            $mygroup = $this->my_group;
            foreach ($mygroup as $key => $value) {
                $groups[$key] = $value;
            }
        }
        
        return $groups ;
    }

    public function likes()
    {
        return $this->belongsToMany(Post::class, 'likes', 'user_id', 'post_id')->withTimestamps();
    }

    public function getUserDetailsAttribute()
    {
        return User::where('id', $this->id)->first();
    }

    public function getCurrentGroupIdAttribute()
    {
        return $this->my_group;
    
       
    }
    public function getAllUserDetailsAttribute()
    {
        return User::all();
    }

    public function getUserNameAttribute()
    {
        $userIds = $this->receiverId->toArray();
        $userNames = User::whereIn('id', $userIds)->pluck('name');
        return $userNames;
    }

    
}


