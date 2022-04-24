<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Additional;
use App\Models\Category;
use App\Models\Main;
use App\Models\Place;
use App\Models\Region;
use App\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//dd(Category::all());
//        $cats = Category::with('countPlaces')->latest()->get();
//        $cats = Category::with(['places' =>
//            function ($query) {
//               $query->select(DB::raw('COUNT(category_id)'));
//            }
//
//        ])->get();


//        $catsCounts = DB::table("categories")->join('places' , 'categories.id' , '='  , 'places.category_id')
//            ->join( null , '='  , 'places.category_id')
//            ->select(DB::raw("COUNT(*) as count_row"))
////            ->orderBy("created_at")
////            ->groupBy(DB::raw("year(created_at)"))
//            ->get();

//        dd($catsCounts);

        $cats = Category::withCount('places')->latest()->get();
//          $m =  $cats->places()->get();
//          $m->likes_unlikes();
//        dd($m->likes_unlikes());

       $regions = Region::latest()->get();
        $mains = Main::first();
        $additions = Additional::with('place')->where('type' , 'best')->where('status' , 1)->latest()->get();
        $frontCats = [];
        foreach ($cats as $cat){
            if($cat->id == $mains->left_upper_cat ){
                $frontCats['left_upper_cat'] = $cat;
            }elseif($cat->id == $mains->right_upper_cat ){
                $frontCats['right_upper_cat'] = $cat;
            }elseif($cat->id == $mains->screen_cat){
                $frontCats['screen_cat'] = $cat;
            }elseif($cat->id == $mains->bottom_big_cat){
                $frontCats['bottom_big_cat'] = $cat;
            }elseif($cat->id == $mains->bottom_left_upper_cat){
                $frontCats['bottom_left_upper_cat'] = $cat;
            }elseif($cat->id == $mains->bottom_left_lower_cat){
                $frontCats['bottom_left_lower_cat'] = $cat;
            }
        }




//
//        $cats2 = Place::withCount([
//            'liked_unliked_places',
//            'liked_unliked_places as pending_comments_count' => function (Builder $query) {
//                $query->where('liked_status', 1);
//            },
//        ])->where('category_id' , '34')->first();
//
////        dd([ $cats2->liked_unliked_places ,
////         $cats2->pending_comments_count]);
//dd($cats2);

        return view('front.index' , ['cats' => $cats , 'regions' => $regions , 'mains' => $mains , 'frontCats' => $frontCats , 'additions' => $additions ]);
    }

    /***************************************/

    public function getPlacesByCatId($catId)
    {
//        latest()->paginate(10);
        $places = Place::where('category_id' , $catId)->where('status' , 1)->latest()->paginate(5);
        $cats = Category::withCount('places')->latest()->get();
        $regions = Region::latest()->get();

        //with('comments')
        return view('front.places' ,['places' => $places , 'cats' => $cats , 'regions' => $regions]);

    }


//    public function getPlacesByCatIdRegionId($catId , $regionId)
//    {
//        $places = Place::where('category_id' , $catId)
//                        ->where('region_id' , $regionId)
//                        ->get();
//
//        return view('front.places' , compact('places'));
//
//    }




    public function getPlacesByCatIdRegionId(Request $request)
    {



        /*******************/
        $cats = Category::select('id' , 'title')->where('status' , 1)->latest()->get();
        $regions = Region::latest('id' , 'government' , 'district' , 'city')->get();
        $region_id = $request->region_id;


        $places = Place::with(['regions' =>
        function($query) use ($region_id){
            $query->where('region_id' , $region_id);
        }

        ])->where('category_id' , $request->cat_id)->paginate(5);

//        if(!isset($places[0]) && $request->region_id){
//            $places = Place::latest()->where('status' , 1)->paginate(5);
//
//        }


        if(isset($places) ) {

            return view('front.places' , ['places' => $places , 'regions' => $regions , 'cats' => $cats]);
        }else{
            return redirect()->back();
        }

    }




    /******************************************/
}
