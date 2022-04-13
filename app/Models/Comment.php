<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Comment extends Model
{

    protected $table='comments';
    protected $guarded = [];




    public function place()
    {
        return $this->belongsTo(Place::class , 'place_id');
    }


}


