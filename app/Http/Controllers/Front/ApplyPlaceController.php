<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\ApplyPlaceRequest;
use App\Models\ApplyPlace;
use Illuminate\Http\Request;

class ApplyPlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.apply');
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
    public function store(ApplyPlaceRequest $request)
    {
//        dd($request->all());
        $place = new ApplyPlace();
        $place->title = $request->title;
        $place->description = $request->desc;
        $place->address = $request->address;
        $place->phone = $request->phone;
        $place->place_progress = $request->place_progress;
        $place->seen = 0;
        $place->save();

        return redirect('main');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ApplyPlace  $applyPlace
     * @return \Illuminate\Http\Response
     */
    public function show(ApplyPlace $applyPlace)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ApplyPlace  $applyPlace
     * @return \Illuminate\Http\Response
     */
    public function edit(ApplyPlace $applyPlace)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ApplyPlace  $applyPlace
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ApplyPlace $applyPlace)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ApplyPlace  $applyPlace
     * @return \Illuminate\Http\Response
     */
    public function destroy(ApplyPlace $applyPlace)
    {
        //
    }
}
