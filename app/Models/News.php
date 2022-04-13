<?php

namespace App\Models;

use App\Abstracts\UnicodeModel;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class News extends UnicodeModel
{
    use HasTranslations;

    protected $table = 'newss';
    public $translatable = ['main_p' , 'first_p' , 'second_p'  , 'third_p' , 'label'];
    protected $guarded = [];

}






