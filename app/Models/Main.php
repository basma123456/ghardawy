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


    public function cats()
    {
        return Category::select('id' , 'image' , 'title')->find([$this->left_upper_cat , $this->right_upper_cat , $this->screen_cat , $this->bottom_big_cat ,$this->bottom_left_upper_cat , $this->bottom_left_lower_cat]);
    }









}


