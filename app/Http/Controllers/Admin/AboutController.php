<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Category;
use App\Traits\GuardTrait;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AboutController extends Controller
{
    use GuardTrait;
    use ImageTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::latest()->first();
       $arr = [ 'upper_paragraphs' => ['Ar' => explode( '-',$about->getTranslation('upper_paragraphs' , 'ar') ),
                            'En' => explode( '-',$about->getTranslation('upper_paragraphs' , 'en') )  ,
                            'Ru' => explode( '-',$about->getTranslation('upper_paragraphs' , 'ru') )
         ],
                'how_we_work_paragraphs' => [
                            'Ar' => explode( '-',$about->getTranslation('how_we_work_paragraphs' , 'ar') ),
                            'En' => explode( '-',$about->getTranslation('how_we_work_paragraphs' , 'en') ),
                           'Ru' =>  explode( '-',$about->getTranslation('how_we_work_paragraphs' , 'ru') )
        ]];
        $mYcategories = ['big_cat'=>'' , 'first_cat'=>'' , 'last_cat'=>''];
        $mYcategories = Category::Select('title' , 'id')->where('id' , $about->big_cat)->
                                    orwhere('id' , $about->first_cat)->
                                    orwhere('id' , $about->last_cat)->
                                    get();

        return view('admin.pages.about_page.index' ,compact('arr' , 'about' , 'mYcategories'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cats = Category::latest()->get();
        return view('admin.pages.about_page.create' , ['cats' => $cats]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

//        dd($request->all());

        $oldAbout = About::latest()->first();
        if(isset($oldAbout)){
            $oldAbout->delete();
        }

        $photo = $this->saveImage($request->photo , '/assets/images_front/bg_photos' , '1');

        $aboutPage = About::create([
            'upper_paragraphs' => ['ar' => implode("-",[$request->upper_paragraphs1_ar ,
                $request->upper_paragraphs2_ar ,
                $request->upper_paragraphs3_ar ,
                $request->upper_paragraphs4_ar]) ,
                                    'en' => implode("-",[$request->upper_paragraphs1_en ,
                                        $request->upper_paragraphs2_en ,
                                        $request->upper_paragraphs3_en ,
                                        $request->upper_paragraphs4_en])
                                    ,
                                    'ru' => implode("-",[$request->upper_paragraphs1_ru ,
                                        $request->upper_paragraphs2_ru ,
                                        $request->upper_paragraphs3_ru ,
                                        $request->upper_paragraphs4_ru]) ],

            'how_we_work_paragraphs' => ['ar' => implode("-",[$request->how_we_work_paragraphs1_ar ,
                                                                   $request->how_we_work_paragraphs2_ar ,
                                                                    $request->how_we_work_paragraphs3_ar ,
                                                                    $request->how_we_work_paragraphs4_ar ,
                                                                    $request->how_we_work_paragraphs5_ar ,
                                                                    $request->how_we_work_paragraphs6_ar ,
                                                                    $request->how_we_work_paragraphs7_ar]) ,
                                        'en' => implode("-", [$request->how_we_work_paragraphs1_en ,
                                                                    $request->how_we_work_paragraphs2_en ,
                                                                    $request->how_we_work_paragraphs3_en ,
                                                                    $request->how_we_work_paragraphs4_en ,
                                                                    $request->how_we_work_paragraphs5_en ,
                                                                    $request->how_we_work_paragraphs6_en ,
                                                                    $request->how_we_work_paragraphs7_en]) ,
                                            'ru' => implode("-",[$request->how_we_work_paragraphs1_ru ,
                                                                    $request->how_we_work_paragraphs2_ru ,
                                                                    $request->how_we_work_paragraphs3_ru ,
                                                                    $request->how_we_work_paragraphs4_ru ,
                                                                    $request->how_we_work_paragraphs5_ru ,
                                                                    $request->how_we_work_paragraphs6_ru ,
                                                                    $request->how_we_work_paragraphs7_ru])]
                                            ,

                                                'big_cat' => $request->big_cat,
                                                'first_cat' => $request->first_cat,
                                                'last_cat' => $request->last_cat,
                                                'photo' => $photo,

                                            ]);

        toastr()->success(trans("global1.success_create"));

        return redirect(route('about_page.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $about = About::find($id);
        $cats = Category::latest()->get();

        return view('admin/pages/about_page/edit' , compact('cats' , 'about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $about= About::find($id);

        $photo = $this->updatePhoto($request->photo , '/assets/images_front/bg_photos' , $about->getOriginal('photo') , $request ,$request->hasFile('photo'), File::class , $about->photo );

        $about->update([
            'upper_paragraphs' => ['ar' => implode("-",[$request->upper_paragraphs1_ar ,
                $request->upper_paragraphs2_ar ,
                $request->upper_paragraphs3_ar ,
                $request->upper_paragraphs4_ar]) ,
                'en' => implode("-",[$request->upper_paragraphs1_en ,
                    $request->upper_paragraphs2_en ,
                    $request->upper_paragraphs3_en ,
                    $request->upper_paragraphs4_en])
                ,
                'ru' => implode("-",[$request->upper_paragraphs1_ru ,
                    $request->upper_paragraphs2_ru ,
                    $request->upper_paragraphs3_ru ,
                    $request->upper_paragraphs4_ru]) ],

            'how_we_work_paragraphs' => ['ar' => implode("-",[$request->how_we_work_paragraphs1_ar ,
                $request->how_we_work_paragraphs2_ar ,
                $request->how_we_work_paragraphs3_ar ,
                $request->how_we_work_paragraphs4_ar ,
                $request->how_we_work_paragraphs5_ar ,
                $request->how_we_work_paragraphs6_ar ,
                $request->how_we_work_paragraphs7_ar]) ,
                'en' => implode("-", [$request->how_we_work_paragraphs1_en ,
                    $request->how_we_work_paragraphs2_en ,
                    $request->how_we_work_paragraphs3_en ,
                    $request->how_we_work_paragraphs4_en ,
                    $request->how_we_work_paragraphs5_en ,
                    $request->how_we_work_paragraphs6_en ,
                    $request->how_we_work_paragraphs7_en]) ,
                'ru' => implode("-",[$request->how_we_work_paragraphs1_ru ,
                    $request->how_we_work_paragraphs2_ru ,
                    $request->how_we_work_paragraphs3_ru ,
                    $request->how_we_work_paragraphs4_ru ,
                    $request->how_we_work_paragraphs5_ru ,
                    $request->how_we_work_paragraphs6_ru ,
                    $request->how_we_work_paragraphs7_ru])]
            ,

            'big_cat' => $request->big_cat,
            'first_cat' => $request->first_cat,
            'last_cat' => $request->last_cat,
            'photo' => $photo,

        ]);

        toastr()->success(trans("global1.success_create"));

        return redirect(route('about_page.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
}
