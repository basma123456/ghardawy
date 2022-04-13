<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\changeStatusApplicationRequest;
use App\Models\ApplyPlace;
use App\Traits\GuardTrait;
use Illuminate\Http\Request;

class ApplyPlaceController extends Controller
{
    use GuardTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $applications = ApplyPlace::latest()->paginate(5);
        return view('admin.pages.apply.index' , ['applications'=>$applications]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**********************************************************/
    public function unseenApplications()
    {
        $applications = ApplyPlace::where('seen' , 0)->latest()->paginate(5);
        return view('admin.pages.apply.index' , ['applications'=>$applications]);

    }
    public function seenApplications()
    {
        $applications = ApplyPlace::where('seen' , 1)->latest()->paginate(5);
        return view('admin.pages.apply.index' , ['applications'=>$applications]);

    }
    public function calledApplications()
    {
        $applications = ApplyPlace::where('status' , 'called')->latest()->paginate(5);
        return view('admin.pages.apply.index' , ['applications'=>$applications]);

    }
    public function postponedApplications()
    {
        $applications = ApplyPlace::where('status' , 'postponed')->latest()->paginate(5);
        return view('admin.pages.apply.index' , ['applications'=>$applications]);

    }
    public function acceptedApplications()
    {
        $applications = ApplyPlace::where('status' , 'accepted')->latest()->paginate(5);
        return view('admin.pages.apply.index' , ['applications'=>$applications]);

    }
    public function rejectedApplications()
    {
        $applications = ApplyPlace::where('status' , 'rejected')->latest()->paginate(5);
        return view('admin.pages.apply.index' , ['applications'=>$applications]);

    }
    public function noActionYetApplications()
    {
        $applications = ApplyPlace::where('status' , 'no_action_yet')->latest()->paginate(5);
        return view('admin.pages.apply.index' , ['applications'=>$applications]);

    }
    /**********************************************************/


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ApplyPlace  $applyPlace
     * @return \Illuminate\Http\Response
     */
    public function show(ApplyPlace $applyPlace)
    {
//        $application = $applyPlace;
        $applyPlace->seen = 1;
        $applyPlace->admin_id = $this->getGuard() === 'admin' ? $this->getGuardId() : null;
        $applyPlace->super_admin_id = $this->getGuard() === 'super-admin' ? $this->getGuardId() : null;

        $applyPlace->save();
        return view('admin.pages.apply.show' , ['applyPlace' => $applyPlace]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ApplyPlace  $applyPlace
     * @return \Illuminate\Http\Response
     */
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ApplyPlace  $applyPlace
     * @return \Illuminate\Http\Response
     */
    public function update(changeStatusApplicationRequest $request, ApplyPlace $applyPlace)
    {
        try {
            $applyPlace->status = $request->options;
            $applyPlace->admin_id = $this->getGuard() === 'admin' ? $this->getGuardId() : null;
            $applyPlace->super_admin_id = $this->getGuard() === 'super-admin' ? $this->getGuardId() : null;

            $applyPlace->save();
            toastr()->success(__("Congratulations ,  You Have Updated Status  Successfully"));
            return
                redirect()->back();

        }
            catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ApplyPlace  $applyPlace
     * @return \Illuminate\Http\Response
     */
    public function destroy(ApplyPlace $applyPlace)
    {
        try{
        $applyPlace->delete();
        toastr()->success(__("You Have Been Deleted This Record Successfully"));
        return redirect()->back();
        }

        catch (\Exception $e){
        return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
