<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegionRequest;
use App\Models\Region;
use App\Traits\general;
use App\Traits\GuardTrait;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    use general;
    use GuardTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regions = Region::latest()->get();
        return view('admin.regions.index' , ['regions' => $regions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.regions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegionRequest $request)
    {
//               dd($request->all());
        $region = Region::create([
            'government' => ['ar' => $request->government_ar , 'en' => $request->government_en , 'ru' => $request->government_ru],
            'city' => ['ar' => $request->city_ar , 'en' => $request->city_en , 'ru' => $request->city_ru],
            'district' => ['ar' => $request->district_ar , 'en' => $request->district_en , 'ru' => $request->district_ru],
            'desc' => ['ar' => $request->desc_ar , 'en' => $request->desc_en , 'ru' => $request->desc_ru],
            'admin_id' => $this->getGuard() === 'admin' ? $this->getGuardId() : null,
            'super_admin_id' => $this->getGuard() === 'super-admin' ? $this->getGuardId() : null
        ]);
        if($region){
            toastr()->success(__("global1.success_create"));
            return view('admin.regions.index');
        }else{
            toastr()->error(__("global1.not_complete"));
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function show(Region $region)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function edit(Region $region)
    {
        return view('admin.regions.update' , ['region' => $region]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Region $region)
    {
       try {
                $region->government = ['ar' => $request->government_ar , 'en' => $request->government_en , 'ru' => $request->government_ru];
                $region->district = ['ar' => $request->district_ar , 'en' => $request->district_en , 'ru' => $request->district_ru];
                $region->city = ['ar' => $request->city_ar , 'en' => $request->city_en , 'ru' => $request->city_ru];
                $region->desc = ['ar' => $request->desc_ar , 'en' => $request->desc_en , 'ru' => $request->desc_ru];
                $region->admin_id = $this->getGuard() === 'admin' ? $this->getGuardId() : null;
                $region->super_admin_id = $this->getGuard() === 'super-admin' ? $this->getGuardId() : null;
                $regionSuccess = $region->save();
                if($regionSuccess){
                    toastr()->success(__("global1.success_create"));
                    return view('admin.regions.index');
                }else{
                    toastr()->error(__("global1.not_completed"));
                    return view('admin.regions.index');
                }
        }

       catch (\Exception $e) {
           return redirect()->back()->withErrors(['error' => $e->getMessage()] );

       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function destroy(Region $region)
    {
        try{
            $deletion = $region->delete();
            toastr()->error($this->deletion($deletion , trans('messages.deletion') , trans('messages.not_completed')));
            return redirect()->back();
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }

    }
}
