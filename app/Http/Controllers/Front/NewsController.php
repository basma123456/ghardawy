<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\NewsCats;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

class NewsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::latest()->get();
        $arr = News::latest()->limit(3)->get();

        $newscats = NewsCats::with('news')->latest()->get();

        $cats= NewsCats::with('news')->orderby('id', 'desc')->paginate(10);
//        $newscatsPages = $newscats->);
        $catArr = [];
        foreach ($newscats as $each){
            $catArr[] =  $each->news()->get();
        }
//        dd($catArr[0][0]->id);

//        $catArr = $newscats->toArray();
//        $arr = [$news->toArray()[0] , $news->toArray()[1] , $news->toArray()[2]];


        return view('front.news' , ['news' => $news , 'newscats'=>$newscats , 'arr' => $arr , 'catArr' => $catArr , 'cats' => $cats]);
    }

}
