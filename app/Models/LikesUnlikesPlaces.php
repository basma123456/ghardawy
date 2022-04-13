<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Builder;


class LikesUnlikesPlaces extends Pivot
{

    protected $guarded = [];
    protected $table = 'liked_unliked_places';

    public function users(){
        return $this->belongsTo(User::class , 'user_id');
    }



    public function places(){
        return $this->belongsTo(Place::class , 'place_id');
    }

}
