<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MainRequest;
use App\Models\About;
use App\Models\Category;
use App\Models\Main;
use App\Traits\general;
use App\Traits\GuardTrait;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class MainPageController extends Controller
{
    use ImageTrait;
    use GuardTrait;
    use general;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $mains = Main::latest()->first();
        $cats =$mains->cats();
        return view('admin.pages.main_page.index' , ['mains' => $mains , 'cats' => $cats]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cats = Category::latest()->get();
        return view('admin.pages.main_page.create' , ['cats' => $cats]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response

     */
    public function store(MainRequest $request)
    {
        try {

            $photo = $this->saveImage($request->bg_photo, '/assets/images_front/bg_photos', '1');

            $oldMains = Main::latest()->first();
            if(isset($oldMains)){
                $oldMains->delete();
            }

            $main = Main::create([
                'title1' => ['ar' => $request->title_ar, 'en' => $request->title_en, 'ru' => $request->title_ru],
                'title2' => ['ar' => $request->title2_ar, 'en' => $request->title2_en, 'ru' => $request->title2_ru],
                'top_desc' => ['ar' => $request->top_desc_ar, 'en' => $request->top_desc_en, 'ru' => $request->top_desc_ru],
                'left_desc' => ['ar' => $request->left_desc_ar, 'en' => $request->left_desc_en, 'ru' => $request->left_desc_ru],
                'middle_desc' => ['ar' => $request->middle_desc_ar, 'en' => $request->middle_desc_en, 'ru' => $request->middle_desc_ru],
                'right_desc' => ['ar' => $request->right_desc_ar, 'en' => $request->right_desc_en, 'ru' => $request->right_desc_ru],
                'website' => $request->website,
                'left_upper_cat' => $request->left_upper_cat,
                'right_upper_cat' => $request->right_upper_cat,
                'screen_cat' => $request->screen_cat,
                'bottom_big_cat' => $request->bottom_big_cat,
                'bottom_left_upper_cat' => $request->bottom_left_upper_cat,
                'bottom_left_lower_cat' => $request->bottom_left_lower_cat,
                'bg_photo' => $photo,
            ]);



            $cats = Category::where('id', $request->left_upper_cat)
                ->orWhere('id', $request->right_upper_cat)
                ->orWhere('id', $request->screen_cat)
                ->orWhere('id', $request->bottom_big_cat)
                ->orWhere('id', $request->bottom_left_upper_cat)
                ->orWhere('id', $request->bottom_left_lower_cat)
                ->update(['at_front_page' => 1]);


            toastr()->success(trans("global1.success_create"));

            return redirect()->back();
        }


        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()] );

        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Main  $main
     * @return \Illuminate\Http\Response
     */
    public function edit(Main $main)
    {
        $mains = $main;
        $cats = Category::latest()->get();

        return view('admin.pages.main_page.edit' , ['mains' => $mains , 'cats' => $cats ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Main  $main
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Main $main)
    {
      $updatedPhoto =  $this->updatePhoto( $request->bg_photo , '/assets/images_front/bg_photos/' , $main->getOriginal('bg_photo') , $request , $request->hasfile('bg_photo') , File::class , $main->bg_photo);
//                dd($request->all());

        /**************************************/

        $main->update([
            'title1' => ['ar' => $request->title1_ar , 'en' => $request->title1_en , 'ru' => $request->title1_ru ],
            'title2' => ['ar' => $request->title2_ar , 'en' => $request->title2_en , 'ru' => $request->title2_ru ],
            'top_desc' => ['ar' => $request->top_desc_ar , 'en' => $request->top_desc_en , 'ru' => $request->top_desc_ru ],
            'left_desc' => ['ar' => $request->left_desc_ar , 'en' => $request->left_desc_en , 'ru' => $request->left_desc_ru ],
            'middle_desc' => ['ar' => $request->middle_desc_ar , 'en' => $request->middle_desc_en , 'ru' => $request->middle_desc_ru ],
            'right_desc' => ['ar' => $request->right_desc_ar , 'en' => $request->right_desc_en , 'ru' => $request->right_desc_ru ],
            'website' => $request->website ,
            'left_upper_cat' => $request->left_upper_cat,
            'right_upper_cat' => $request->right_upper_cat,
            'screen_cat' => $request->screen_cat ,
            'bottom_big_cat' => $request->bottom_big_cat ,
            'bottom_left_upper_cat' => $request->bottom_left_upper_cat ,
            'bottom_left_lower_cat' => $request->bottom_left_lower_cat,
            'bg_photo' => $updatedPhoto,

        ]);

        $cats = Category::where('id' , $request->left_upper_cat )
            ->orWhere('id' , $request->right_upper_cat)
            ->orWhere('id' , $request->screen_cat)
            ->orWhere('id' , $request->bottom_big_cat)
            ->orWhere('id' , $request->bottom_left_upper_cat)
            ->orWhere( 'id' , $request->bottom_left_lower_cat )
            ->update(['at_front_page' => 1]);




        //dd($main->left_upper_cat);
        toastr()->success(trans("global1.success_create"));

        return redirect('super-admin/main');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Main  $main
     * @return \Illuminate\Http\Response
     */
//    public function destroy(Main $main)
//    {
//        $main->destroy();
//        redirect()->back();
//    }
}
