<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Category;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::latest()->first();

//        $item = $about->getTranslation('upper_paragraphs' , 'ar');
        $upper_paragraphsArray = explode( '-',$about->upper_paragraphs );

        /******************************************************/
        $how_we_work_paragraphsArray = explode( '-',$about->how_we_work_paragraphs );



//        $categories=Category::all();
        $categories = Category::Select('title' , 'id' , 'image' , 'likes' , 'countPlaces')->where('id' , $about->big_cat)->orwhere('id' , $about->first_cat)->orwhere('id' , $about->last_cat)->get();
        $mYcategories['big_cat'] = $categories[0];
        $mYcategories['first_cat'] = $categories[1];
        $mYcategories['last_cat'] = $categories[2];

        return view('front.about' , ['upper_paragraphsArray'=>$upper_paragraphsArray   ,'how_we_work_paragraphsArray'=>$how_we_work_paragraphsArray  , 'about'=>$about , 'mYcategories' => $mYcategories]);



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        //
    }
}
