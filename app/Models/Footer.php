<?php

namespace App\Models;
use App\Abstracts\UnicodeModel;
use Spatie\Translatable\HasTranslations;

use Illuminate\Database\Eloquent\Model;

class Footer extends UnicodeModel
{
    use HasTranslations;

    public $translatable = ['address' , 'description'];
    protected $guarded = [];
    protected $table = 'footer';

}



