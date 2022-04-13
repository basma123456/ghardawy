<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Additional;
use App\Models\Category;
use App\Models\Place;
use App\Traits\general;
use App\Traits\GuardTrait;
use App\Traits\ImageTrait;
use App\Traits\SearchSelectTrait;
use Illuminate\Http\Request;


class AdditionalController extends Controller
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
        $additionss = Additional::latest()->paginate(5);
        return view('admin.additionals.index' , compact('additionss'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cats = Category::get();
        return view('admin.additionals.create' , ['cats' => $cats]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $arr = ['ads' => Additional::where('type','ads')->where('status' , 1)->get() , 'special' => Additional::where('type','special')->where('status' , 1)->get()];


        $additions = Additional::create([
            'place_id' => $request->place_id ,
            'title' => ['ar' => $request->title_ar, 'en' => $request->title_en , 'ru' => $request->title_ru],
            'desc' => ['ar' => $request->desc_ar, 'en' => $request->desc_en , 'ru' => $request->desc_ru],
            'type' => $request->type,
            'status' => $request->status ,
            'admin_id' => $this->getGuard() === 'admin' ? $this->getGuardId() : null,
            'super_admin_id' => $this->getGuard() === 'super-admin' ? $this->getGuardId() : null,
        ]);

        /////deleting first of ads  if the count of old ones exceeds 3/////
        if(count($arr['ads']) > 3){
            $arr['ads'][0]->delete();
        }

        /////deleting first special place if the count of old ones exceeds 3/////
        if(count($arr['special']) > 3){
            $arr['special'][0]->delete();
        }

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Additional  $additional
     * @return \Illuminate\Http\Response
     */
    public function show(Additional $additional)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Additional  $additional
     * @return \Illuminate\Http\Response
     */
    public function edit(Additional $additional)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Additional  $additional
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Additional $additional)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Additional  $additional
     * @return \Illuminate\Http\Response
     */
    public function destroy(Additional $additional)
    {
        try{
            $additional->delete();
            toastr()->error(__("global1.delete"));
            return redirect(route('category.index'));

        }

        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()] );

        }

    }

//    public function my_search($model ,  $myRequest , $title = 'title'  , $rowname = 'name' , $firstTH = 'Title', $secondTH = 'Email'  , $secondTD='email' ,$thirdTH=null , $thirdTD=null, $link=null , $endLink=null )

    public function search(Request $request)
    {
        return $this->my_search(Place::class , $request , 'title' , 'title' );
    }
}
