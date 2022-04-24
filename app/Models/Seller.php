<?php


namespace App\Models;

use App\Abstracts\UnicodeAuthenticate;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Spatie\Translatable\HasTranslations;
use Illuminate\Notifications\Notifiable;

class Seller extends UnicodeAuthenticate
{
    use Notifiable;
    use HasTranslations;


    public $translatable = ['name' , 'address'];

    protected $guarded = [];
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


    public function place()
    {
        return $this->hasOne(Place::class , 'seller_id');
    }



}
