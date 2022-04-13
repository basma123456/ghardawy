<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsCatsRequest;
use App\Models\NewsCats;
use App\Traits\general;
use App\Traits\GuardTrait;
use Illuminate\Http\Request;

class NewsCatsController extends Controller
{
    use GuardTrait;
    use general;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newscats = NewsCats::latest()->get();
        return view('admin.news_cats.index' , ['newscats' => $newscats]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news_cats.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsCatsRequest $request)
    {
        try {
            $validated = $request->validated();



            $cats = NewsCats::create([
                'title' => ['ar' => $request->title_ar, 'en' => $request->title_en],
                'status' => (int)$request->status,

                'super_admin_id' => $this->getGuard() === 'super-admin' ? $this->getGuardId() : null,
                'admin_id' => $this->getGuard() === 'admin' ? $this->getGuardId() : null,
            ]);

            toastr()->success(__("global1.success_create"));
            return redirect(route('newscatsadmins.index'));
        }

        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()] );

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NewsCats  $newsCats
     * @return \Illuminate\Http\Response
     */
    public function show(NewsCats $newsCats)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NewsCats  $newsCats
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request , $id)
    {
        $newscats = NewsCats::find($id);
        return view('admin.news_cats.update' , ['newscats' => $newscats]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NewsCats  $newsCats
     * @return \Illuminate\Http\Response
     */
    public function update(NewsCatsRequest $request, NewsCats $newsCats , $id)
    {
        try {
            $validated = $request->validated();
            $newsCats = NewsCats::find($id);

            $newsCats->title = ['ar'=> $request->title_ar , 'en' => $request->title_en , 'ru'=> $request->ru];
            $newsCats->status = $request->status;
            $newsCats->super_admin_id = $this->getGuard() === 'super-admin' ? $this->getGuardId() : null;
            $newsCats->admin_id = $this->getGuard() === 'admin' ? $this->getGuardId() : null;

            $newsCats->save();
            toastr()->success(__('Updating Process Have Been Done Successfully'));
           return redirect(route('newscats.index'));
        }

        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()] );

        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NewsCats  $newsCats
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewsCats $newsCats , $id)
    {
       try{
            $newsCats = NewsCats::find($id);
            $deletion = $newsCats->delete();
           toastr()->error(__($this->deletion($deletion , 'You Have Deleted Successfully' , 'the deletion process have not been done yet')));
            return redirect()->back();
       }

       catch (\Exception $e) {
           return redirect()->back()->withErrors(['error' => $e->getMessage()] );

       }

    }
}
