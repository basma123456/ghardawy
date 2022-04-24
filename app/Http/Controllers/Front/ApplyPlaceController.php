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




}
