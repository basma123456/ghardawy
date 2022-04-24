<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FooterRequest;
use App\Models\Footer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $footer = Footer::latest()->get()->first();

        return view('admin.footer.index' , compact('footer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.footer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FooterRequest $request)
    {
        DB::beginTransaction();
        try {

            $oldFooter = Footer::latest()->delete();

        $footer = new Footer();
        $footer->phone = json_encode($request->phone);
        $footer->email1 = $request->email1;
        $footer->email2 = $request->email2;
        $footer->description =  ['ar' => $request->description_ar, 'en' => $request->description_en , 'ru' => $request->description_ru];
        $footer->address =  ['ar' => $request->address_ar, 'en' => $request->address_en , 'ru' => $request->address_ru];
        $footer->save();
            DB::commit();

            toastSuccess('you have added one record successfully');
        return redirect(url(route('footer.index')));
        }
        catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withErrors(['error' => $e->getMessage()] );

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function show(Footer $footer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function edit(Footer $footer)
    {
        return view('admin.footer.update' , compact('footer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function update(FooterRequest $request, Footer $footer)
    {
        DB::beginTransaction();
        try {


            $footer->phone = json_encode($request->phone);
            $footer->email1 = $request->email1;
            $footer->email2 = $request->email2;
            $footer->description =  ['ar' => $request->description_ar, 'en' => $request->description_en , 'ru' => $request->description_ru];
            $footer->address =  ['ar' => $request->address_ar, 'en' => $request->address_en , 'ru' => $request->address_ru];
            $footer->save();
            DB::commit();

            toastSuccess('you have added one record successfully');
            return redirect(url(route('footer.index')));
        }
        catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withErrors(['error' => $e->getMessage()] );

        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Footer  $footer
     * @return \Illuminate\Http\Response
     */
}
