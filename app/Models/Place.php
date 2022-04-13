<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;


use App\Abstracts\UnicodeModel;

use Illuminate\Support\Facades\DB;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Builder;

    class Place extends UnicodeModel
    {

        use HasTranslations;

        public $translatable = ['title', 'address', 'desc'];

        protected $guarded = [];

        protected $table = 'places';


        public function category()
        {
            return $this->belongsTo(Category::class, 'category_id');
        }

        public function seller()
        {
            return $this->belongsTo(Seller::class, 'seller_id');
        }

        public function admin()
        {
            return $this->belongsTo(Admin::class, 'admin_id');

        }

        public function superAdmin()
        {
            return $this->belongsTo(SuperAdmin::class, 'super_admin_id');

        }

        public function photos()
        {
            return json_decode($this->image , true);
        }

        public function menu()
        {
            return json_decode($this->menu , true);
        }

        public function comments()
        {
            return $this->hasMany(Comment::class, 'place_id');

        }


        /***************many to many relationship *************/
        public function regions()
        {
            return $this->belongsToMany(Region::class , 'place_regions' ,'place_id' , 'region_id')
                ->withPivot('address', 'desc', 'phone', 'admin_id' , 'super_admin_id' , 'created_at' , 'updated_at');
        }

        public function likes()
        {
            return $this->sum('likes');
        }

        public function likes_cats($cat_id)
        {
            return $this->where('category_id' , $cat_id)->sum('likes');
        }

        /**************/
        public function additions()
        {
            return $this->hasMany(Additional::class);
        }
        /*********************/

        /*****************liked and unliked related functions**********/
        public function users_liked_places()
        {
            return $this->belongsToMany(User::class , 'liked_unliked_places' ,'place_id' , 'user_id')
                ->withPivot('liked_status');
        }

        public function likes_unlikes()
        {
//            return $this->hasMany(LikesUnlikesPlaces::class , 'place_id');
            return LikesUnlikesPlaces::where('place_id' , $this->id)->count();
        }

        public function liked_unliked_places()
        {
            return $this->hasMany(LikesUnlikesPlaces::class , 'place_id');
        }
    /*****************liked and unliked related functions**********/
        /*****************liked and unliked related functions*********
         * @return mixed
         */
        /*****************liked and unliked related functions**********/


    }
