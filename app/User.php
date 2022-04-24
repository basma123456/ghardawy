<?php

namespace App;

use App\Models\Comment;
use App\Models\Place;
use App\Models\Role;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','phone'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function role()
    {
        return $this->belongsTo(Role::class , 'role_id');
    }

    public function hasAbility($permessions)
    {
        $role = $this->role;
        if(!$role){
            return false;
        }

        foreach (json_decode($role->permessions,true) as $permession){
            if(is_array($permessions) && in_array($permession , $permessions)){
                return true;
            }elseif(is_string($permessions) && strcmp($permessions , $permession) == 0){
                return true;
            }
        }
        return false;
    }

    public function likedUnlikedPlaces()
    {
        return $this->belongsToMany(Place::class , 'liked_unliked_places' ,'user_id' , 'place_id')
            ->withPivot(  'liked_status');
    }


    public function comments()
    {
        return $this->hasMany(Comment::Class , 'user_id');
    }


}
