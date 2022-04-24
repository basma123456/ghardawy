<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Http\Requests\PlaceRequest;
use App\Http\Requests\PlaceUpdateRequest;
use App\Http\Requests\SellerPlaceRequest;
use App\Http\Requests\SellerPlaceUpdateRequest;
use App\Models\Category;
use App\Models\Place;
use App\Models\Seller;
use App\Traits\GuardTrait;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class PlaceController extends Controller
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
        if(Auth::guard('seller')->id() > 0){

            $place = Place::where('seller_id', $this->getGuardId())->first();
            return view('seller.places.index' , compact('place'));
        }

    }



    public function create()
    {
        $sellers = Seller::select('id' , 'name')->latest()->get();
        $categories = Category::select('id' , 'title')->latest()->get();
        return view('seller.places.create' , ['sellers' => $sellers , 'categories'=>$categories  ]);
    }

    /*******************************************************************/
    public function store(SellerPlaceRequest $request)
    {
//
        DB::beginTransaction();
        try {
            $myGuardId = $this->getGuardId();
            $oldPlace = Place::where('seller_id' , Auth::guard('seller')->id())->delete();

            $place = Place::create([
                'title' => ['ar' => $request->title_ar, 'en' => $request->title_en , 'ru' => $request->title_ru],
                'address' => ['ar' => $request->address_ar, 'en' => $request->address_en , 'ru' => $request->address_ru],
                'email' => $request->email,
                'phone' => $request->phone,
                'desc' => ['ar' => $request->desc_ar, 'en' => $request->desc_en , 'ru' => $request->desc_ru],
                'status' => 0,
                'likes' => 0,
                'unlikes' => 0,
                'image' => $this->saveMultipleImages($request->hasFile('image'), $request->file('image'), '/assets/images_front/places/') ,
                'menu' => $this->saveMultipleImages($request->hasFile('menu'), $request->file('menu'), '/assets/images_front/places/' ,9) ,
                'seller_id' =>$this->getGuard() === 'seller' ? $this->getGuardId() : null,
                'category_id' => $request->category,
                'joining_date' => now(),
                'admin_id' => $this->getGuard() === 'admin' ? $this->getGuardId() : null,
                'super_admin_id' => $this->getGuard() === 'super-admin' ? $this->getGuardId() : null,
            ]);

            DB::commit();

            if ($place) {

                toastr()->success(trans("global1.success_create"));
                return redirect()->back();
            } else {
                toastr()->error(trans("global1.error"));
                return redirect()->back();

            }
        }

        catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withErrors(['error' => $e->getMessage()] );

        }

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $place = Place::find($id);
        $sellers = Seller::select('id' , 'name')->latest()->get();
        $categories = Category::select('id' , 'title')->latest()->get();
        return view('seller.places.update' , ['sellers' => $sellers , 'categories'=>$categories , 'place'=>$place ]);
    }
    /********************************************************************************/

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function update(SellerPlaceUpdateRequest $request, $id)
    {
        DB::beginTransaction();

        try {

            $validated = $request->validated();

            $place = Place::find($id);

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

            $place->status = (int)0;
            $place->image = $data;
            $place->menu = $data2;


            $place->seller_id = Auth::guard('seller')->id();
            $place->category_id = (int)$request->category;
            $place->super_admin_id = $this->getGuard() === 'super-admin' ? $this->getGuardId() : null;
            $place->admin_id = $this->getGuard() === 'admin' ? $this->getGuardId() : null;

            $place->save();


            DB::commit();

            toastr()->success(trans("global1.success_create"));
            return redirect(route('places_sellers.index'))->with(['success_msg', 'congratulations , it has been updated successfully']);
        }

        catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withErrors(['error' => $e->getMessage()] );

        }

    }
    /********************************************************************************/


}
