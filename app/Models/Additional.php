<?php

namespace App\Models;
use App\Abstracts\UnicodeModel;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Additional extends UnicodeModel
{
    use HasTranslations;

    public $translatable = ['title' , 'desc'];

    protected $guarded = [];
    protected $table = 'additionals';

    public function place()
    {
        return $this->belongsTo(Place::class , 'place_id');
    }
    public function admin()
    {
        return $this->belongsTo(Admin::class , 'admin_id');

    }

    public function superAdmins()
    {
        return $this->belongsTo(SuperAdmin::class , 'super_admin_id');
    }

    public function best()
    {
        return $this->type === 'best';

    }

    public function ads()
    {
        return $this->type === 'ads';

    }

    public function special()
    {
        return $this->type === 'special';

    }


}



