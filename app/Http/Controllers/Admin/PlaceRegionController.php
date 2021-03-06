<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BranchRequest;
use App\Models\Place;
use App\Models\PlaceRegion;
use App\Models\Region;
use App\Traits\general;
use App\Traits\GuardTrait;
use App\Traits\SearchSelectTrait;
use Illuminate\Http\Request;

//reprsents branches





class PlaceRegionController extends Controller
{
    use general;
    use GuardTrait;
    use SearchSelectTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */




    /******************************************note****************************************************/
    //note that this function adds a new branch which related to the place id given not to show index page
    public function index($place)
    {
        return view('admin.places.add_branch' , ['place'=>$place]);
    }
    /***************************************************************************************************/



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BranchRequest $request)
    {
//            dd($request->all());
        $place_region = PlaceRegion::create([
            'place_id' => $request->place_id ,
            'address' => ['ar' => $request->address_ar, 'en' => $request->address_en , 'ru' => $request->address_ru],
            'desc' => ['ar' => $request->desc_ar, 'en' => $request->desc_en , 'ru' => $request->desc_ru],
            'phone' => $request->phone  ,
//            'place_region' => $request->place_region,
            'region_id' => $request->region_id ,
            'admin_id' => $this->getGuard() === 'admin' ? $this->getGuardId() : null,
            'super_admin_id' => $this->getGuard() === 'super-admin' ? $this->getGuardId() : null,
        ]);

            return redirect(url(route('places.index')));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PlaceRegion  $placeRegion
     * @return \Illuminate\Http\Response
     */
    public function editBranch($place , $placeRegionGet)
    {
//        $sumn = Place::sum('likes');
//        dd($sumn);
        $placeRegion =  PlaceRegion::find($placeRegionGet);
        return view('admin.places.branch_edit' , ['place' => $place , 'placeRegion' => $placeRegion]);
    }


    public function showAll($place)
    {

        $placeRegions = PlaceRegion::with('regions')->with('places')->where('place_id',(int)$place)->get();
        return view('admin.places.showBranches' , ['place' => $place , 'placeRegions'=>$placeRegions]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PlaceRegion  $placeRegion
     * @return \Illuminate\Http\Response
     */
//    public function update(Request $request, PlaceRegion $placeRegion)
//    {
//        //
//    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PlaceRegion  $placeRegion
     * @return \Illuminate\Http\Response
     */
    public function destroyRegion($id)
    {

        try{
            $placeRegion = PlaceRegion::find($id);
            if(isset($placeRegion)) {
                $deletion =  $placeRegion->delete();
            }
            toastr()->error($this->deletion($deletion , trans('messages.deletion') , trans('messages.not_completed')));
            return redirect()->back();
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }

    }

    public function search(Request $request)
    {
      return  $this->regionSearch(Region::class , $request);

    }


}
