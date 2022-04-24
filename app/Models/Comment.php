<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;


class Comment extends Model
{

    protected $table='comments';
    protected $guarded = [];




    public function place()
    {
        return $this->belongsTo(Place::class , 'place_id');
    }

    public function user()
    {
        return $this->belongsTo(User::Class , 'user_id');
    }


}


