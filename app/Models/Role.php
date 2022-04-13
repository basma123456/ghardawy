<?php

namespace App\Models;

use App\Abstracts\UnicodeModel;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Role extends UnicodeModel
{

    use HasTranslations;

    public $translatable = ['name'];
    protected $guarded = [];
    protected $table='roles';

    public function users()
    {
        $this->hasMany(User::class);
    }

    public function getPermessionAttribute($permessions)
    {

        return json_decode($permessions , true);

    }

}
