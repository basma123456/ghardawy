<?php

namespace App\Models;

use App\Abstracts\UnicodeModel;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class About extends UnicodeModel
{
    use HasTranslations;

    public $translatable = ['upper_paragraphs' , 'how_we_work_paragraphs'];
    protected $table = "about";
    protected $guarded = [];


//    public function firstCategory()
//    {
//      return  $this->belongsTo(Category::class , 'first_cat' );
//    }
//    public function lastCategory()
//    {
//        return  $this->belongsTo(Category::class , 'last_cat' );
//    }


}






