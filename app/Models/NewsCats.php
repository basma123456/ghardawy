<?php

namespace App\Models;
use App\Abstracts\UnicodeModel;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;



class NewsCats extends UnicodeModel
{
    use HasTranslations;

    public $translatable = ['title' ];
    protected $table = 'news_cats';
    protected $guarded = [];

    public function news()
    {
        return $this->hasMany(News::class , 'news_cat_id' );
    }
}


