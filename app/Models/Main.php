<?php

namespace App\Models;
use App\Abstracts\UnicodeModel;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Main extends UnicodeModel
{
    use HasTranslations;

    public $translatable = ['title1' , 'title2', 'top_desc' , 'left_desc' , 'middle_desc' , 'right_desc' ];
    protected $table = 'mains';
    protected $guarded = [];


    public function cats($foreignId)
    {
        return$this->hasOne(Category::class , $foreignId);
    }


    public function left_upper_cat()
    {
        return Category::find($this->left_upper_cat);
    }

    public function right_upper_cat()
    {
        return Category::find($this->right_upper_cat);
    }

    public function screen_cat()
    {
        return Category::find($this->screen_cat);
    }

    public function bottom_big_cat()
    {
        return Category::find($this->bottom_big_cat);
    }

    public function bottom_left_upper_cat()
    {
        return Category::find($this->bottom_left_upper_cat);
    }

    public function bottom_left_lower_cat()
    {
        return Category::find($this->bottom_left_lower_cat);
    }


}


