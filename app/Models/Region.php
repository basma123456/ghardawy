<?php

namespace App\Models;

use App\Abstracts\UnicodeModel;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Region extends UnicodeModel
{
    use HasTranslations;

    public $translatable = ['government' , 'city' , 'district' , 'desc' ];
    protected $guarded = [];
    protected $table = 'regions';


    public function places()
    {
        return $this->belongsToMany(Place::class , 'place_regions' ,'region_id' , 'place_id')
            ->withPivot('address', 'desc', 'phone', 'admin_id' , 'super_admin_id' , 'created_at' , 'updated_at');
    }



}





