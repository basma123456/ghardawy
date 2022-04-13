<?php

namespace App\Models;

use App\Abstracts\UnicodeModel;
use Illuminate\Database\Eloquent\Model;

use Spatie\Translatable\HasTranslations;

class Category extends UnicodeModel
{

    use HasTranslations;

    public $translatable = ['title' , 'about_page'];
    protected $guarded = [];
    protected $table = 'categories';

    public function admins()
    {
        return $this->belongsTo(Admin::class , 'admin_id');
    }

    public function superAdmins()
    {
        return $this->belongsTo(SuperAdmin::class , 'super_admin_id');
    }

    public function photos()
    {
     return json_decode($this->image , true);
    }

    public function bottomPhotos()
    {
        return json_decode($this->bottom_images , true);
    }

    public function places()
    {
        return $this->hasMany(Place::class , 'category_id');
    }

    public function countPlaces()
    {
        return 10;
//       return $this->places() != null ?   $this->places()->count() :  0;
    }


}
