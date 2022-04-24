<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PlaceRequest;
use App\Http\Requests\PlaceUpdateRequest;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Place;
use App\Models\PlaceRegion;
use App\Models\Seller;
use App\Traits\general;
use App\Traits\GuardTrait;
use App\Traits\ImageTrait;
use App\Traits\SearchSelectTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class PlaceController extends Controller
{
    use SearchSelectTrait;
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
        $places = Place::latest()->paginate(5);

        //with('comments')
        return view('admin.places.index' , compact('places'));
    }
    /********************************************************************************/

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sellers = Seller::latest()->get();
        $categories = Category::latest()->get();
        return view('admin.places.create' , ['sellers' => $sellers , 'categories'=>$categories ]);
    }
    /********************************************************************************/

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PlaceRequest $request)
    {


        try {

            $place = Place::create([
                'title' => ['ar' => $request->title_ar, 'en' => $request->title_en , 'ru' => $request->title_ru],
                'address' => ['ar' => $request->address_ar, 'en' => $request->address_en , 'ru' => $request->address_ru],
                'email' => $request->email,
                'phone' => $request->phone,
                'desc' => ['ar' => $request->desc_ar, 'en' => $request->desc_en , 'ru' => $request->desc_ru],
                'status' => (int)$request->status != null ? (int)$request->status :0,
                'likes' => (int)$request->likes,
                'unlikes' => (int)$request->unlikes,
                'image' => $this->saveMultipleImages($request->hasFile('image'), $request->file('image'), '/assets/images_front/places/') ,
                'menu' => $this->saveMultipleImages($request->hasFile('menu'), $request->file('menu'), '/assets/images_front/places/' ,9) ,
                'seller_id' => $request->seller_id,
                'category_id' => $request->category,
                'joining_date' => $request->joining_date,
                'admin_id' => $this->getGuard() === 'admin' ? $this->getGuardId() : null,
                'super_admin_id' => $this->getGuard() === 'super-admin' ? $this->getGuardId() : null,
            ]);


            $cat = Category::find($place->category_id);

            $cat->countPlaces = $cat->getOriginal('countPlaces') + 1;
            $cat->likes = $cat->getOriginal('likes') + $place->likes;
            $cat->unlikes = $cat->getOriginal('unlikes') + $place->unlikes;
            $cat->save();

            if ($place) {

                toastr()->success(trans("global1.success_create"));
                return redirect(route('places.index'));
            } else {
                toastr()->error(trans("global1.error"));
                return redirect()->back();

            }
        }

        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()] );

        }

    }
    /********************************************************************************/

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function show(Place $place)
    {
        return view('admin.places.show_place' , compact('place'));
    }
//
    /**
     * Show the form for editing the spe
     * cified resource.
     *
     * @param  \App\Models\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function edit(Place $place)
    {
        $sellers = Seller::select('id' , 'name')->latest()->get();
        $categories = Category::select('id' , 'title')->latest()->get();
        return view('admin.places.update' , ['sellers' => $sellers , 'categories'=>$categories , 'place'=>$place ]);
    }
    /********************************************************************************/

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function update(PlaceUpdateRequest $request, Place $place)
    {
        try {

            $validated = $request->validated();


            /******************updating path of images************************/
            $m = is_string($place->image) ? json_decode($place->image , true) :$place->image;

            $data = $this->updateNow($place->getOriginal('image') , $request->hasfile('image') , $request->image , $m , '/assets/images_front/places/' , File::class);
            $m2 = is_string($place->menu) ? json_decode($place->menu , true) :$place->menu;
            $data2 = $this->updateNow($place->getOriginal('menu') , $request->hasfile('menu') , $request->menu , $m2 , '/assets/images_front/places/' , File::class , 9);
            /*********************end updating path of images*******************/



            $place->title = ['ar' => $request->title_ar, 'en' => $request->title_en , 'ru' => $request->title_ru];
            $place->address = ['ar' => $request->address_ar, 'en' => $request->address_en , 'ru' => $request->address_ru];
            $place->desc = ['ar' => $request->desc_ar, 'en' => $request->desc_en , 'ru' => $request->desc_ru];
            /************/
            $place->email = $request->email;
            $place->phone = $request->phone;

            $place->status = (int)$request->status;
//            $place->image = is_array($data)?json_encode($data):$data;
//            $place->menu = is_array($data2)?json_encode($data2):$data2;

            $place->image = $data;
            $place->menu = $data2;


            $place->likes = (int)$request->likes;
            $place->unlikes = (int)$request->unlikes;
            $place->seller_id = (int)$request->seller_id;
            $place->category_id = (int)$request->category;
            $place->joining_date = $request->joining_date;
            $place->super_admin_id = $this->getGuard() === 'super-admin' ? $this->getGuardId() : null;
            $place->admin_id = $this->getGuard() === 'admin' ? $this->getGuardId() : null;
            $oldLikes = $place->getOriginal('likes');
            $oldUnLikes = $place->getOriginal('unlikes');

            $place->save();


            $cat = Category::find($place->category_id);

            $cat->likes = $cat->getOriginal('likes') - $oldLikes +$place->likes > -1 ?$cat->getOriginal('likes') - $oldLikes +$place->likes  : 0;
            $cat->unlikes =  $cat->getOriginal('unlikes') - $oldUnLikes +$place->unlikes > -1 ?  $cat->getOriginal('unlikes') - $oldUnLikes +$place->unlikes : 0;

            $cat->save();

            toastr()->success(trans("global1.success_create"));
            return redirect(route('places.index'))->with(['success_msg', 'congratulations , it has been updated successfully']);
        }

        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()] );

        }

    }
    /********************************************************************************/

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function destroy(Place $place)
    {
        try{
            $deletion = $place->delete();
            foreach (json_decode($place->image) as $img) {

                if(File::exists(public_path('/assets/images_front/places/'.$img))) {
                    $this->deleteUploadedImage($img , '/assets/images_front/places/');
                }
            }

            foreach (json_decode($place->menu) as $menu) {

                if ( File::exists(public_path('/assets/images_front/places/'.$menu))){
                    $this->deleteUploadedImage($menu , '/assets/images_front/places/');
                }
            }

            $cat = Category::find($place->category_id);
            $oldCash = $cat->getOriginal('countPlaces') > 0 ? $cat->getOriginal('countPlaces') : 1;
            $cat->countPlaces  = $oldCash - 1;

            //note i suggest that if the value of the catOriginalLIKES likes is greater than the value of the place likes  then the value of the oldlikes will be the ordininary
            // but if the  catOriginalLIKES less than place likes so the value of the old likes will be place likes also to avoid any error

            $oldLikes = $cat->getOriginal('likes') > $place->likes ? $cat->getOriginal('likes') : $place->likes;
            $oldUnLikes = $cat->getOriginal('unlikes') > $place->unlikes ? $cat->getOriginal('unlikes') : $place->unlikes;


            $cat->likes = $oldLikes - $place->likes;
            $cat->unlikes = $oldUnLikes - $place->unlikes;

            $cat->save();

            toastr()->error($this->deletion($deletion , trans('messages.deletion') , trans('messages.not_completed')));
            return redirect(route('places.index'));
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }

    }

    /********************************************************************************/
    public function search(Request $request)
    {
        return $this->my_search(Seller::class , $request , 'name');
//        public function my_search($model ,  $myRequest , $title = 'title' , $link=null , $endLink=null)

    }
    /**************************************************************/


}
