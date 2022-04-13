<?php

namespace App\Models;

use App\Abstracts\UnicodePivot;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class PlaceRegion extends UnicodePivot
{

    use HasTranslations;

    public $translatable = [ 'address', 'desc'];

    protected $table = 'place_regions';

    protected $guarded = [];
    public function regions(){
        return $this->belongsTo(Region::class , 'region_id');
    }

    public function places(){
        return $this->belongsTo(Place::class , 'place_id');
    }

}



