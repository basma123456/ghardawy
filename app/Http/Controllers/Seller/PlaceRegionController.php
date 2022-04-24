<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Http\Requests\BranchRequest;
use App\Models\Place;
use App\Models\PlaceRegion;
use App\Traits\GuardTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlaceRegionController extends Controller
{
    use GuardTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function showAll($place)
    {

        $placeRegions = PlaceRegion::with('regions')->with('places')->where('place_id',(int)$place)->get();
        return view('seller.places.showBranches' , ['place' => $place , 'placeRegions'=>$placeRegions]);
    }






    public function addBranch($place)
    {
        if(Auth::guard('seller')->id() > 0){
            return view('seller.places.add_branch' , compact('place'));
        }

    }
    /********************************************************/


    public function addBranchSubmit(BranchRequest $request)
    {
        if(Auth::guard('seller')->id() > 0){
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

            return redirect()->back();

        }

    }

    /*****************************************************/

    public function editBranch($place , $placeRegionGet)
    {
        $placeRegion =  PlaceRegion::find($placeRegionGet);
        return view('seller.places.branch_edit' , ['place' => $place , 'placeRegion' => $placeRegion]);
    }

    /*******************************************************/
    public function editBranchSubmit(BranchRequest $request , $place , $placeRegionGet)
    {

        $placeRegion =  PlaceRegion::find($placeRegionGet);
        $placeRegion->place_id  = $place;
        $placeRegion->region_id = $request->region_id;
        $placeRegion->address = ['ar' => $request->address_ar, 'en' => $request->address_en , 'ru'=> $request-> address_ru];
        $placeRegion->desc = ['ar' => $request->desc_ar, 'en' => $request->desc_en , 'ru'=> $request-> desc_ru];
        $placeRegion->phone = $request->phone;
        $placeRegion->save();

        return redirect(route('show.branch.seller' , $place));

    }
    /*************************************************/

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PlaceRegion  $placeRegion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
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
}
