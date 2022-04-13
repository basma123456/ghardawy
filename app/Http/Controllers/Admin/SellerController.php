<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SellerRequest;
use App\Http\Requests\SellerUpdate;
use App\Models\Seller;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use App\Traits\GuardTrait;

class SellerController extends Controller
{
    use GuardTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sellers = Seller::select(['id' ,'name' , 'email' , 'role_id' , 'status' , 'created_at' , 'updated_at'])->latest()->paginate(10);
        return  view('admin.sellers.index' , compact('sellers'));
    }
    /*******************************/
    public function unseenSellers()
    {
        $sellers = Seller::select(['id' ,'name' , 'email' , 'role_id' , 'status' , 'created_at' , 'updated_at'])->where('admin_id' , null)->where('super_admin_id' , null)->latest()->paginate(10);
        return  view('admin.sellers.index' , compact('sellers'));
    }
    /*******************************/
    public function unActiveSellers()
    {
        $sellers = Seller::select(['id' ,'name' , 'email' , 'role_id' , 'status' , 'created_at' , 'updated_at'])->where('status' , 0)->latest()->paginate(10);
        return  view('admin.sellers.index' , compact('sellers'));
    }
    /******************************/
    public function ActiveSellers()
    {
        $sellers = Seller::select(['id' ,'name' , 'email' , 'role_id' , 'status' , 'created_at' , 'updated_at'])->where('status' , 1)->latest()->paginate(10);
        return  view('admin.sellers.index' , compact('sellers'));
    }
    /******************************/


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sellers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SellerRequest $request)
    {
        try {

            /************/
            $request->status == (int)1 ? $role_id = (int)3 : $role_id = null;
            $super_admin = $this->getGuard()==='super-admin'?$this->getGuardId():null;
            $admin = $this->getGuard()==='admin'?$this->getGuardId():null;

            /**********/



            $role =  Seller::create([
                'name' => ['ar' =>  $request->Name_ar , 'en' => $request->Name_en],
                'email' =>$request->Email,
                'joining_date' =>$request->joining_date,

                'password' =>bcrypt($request->Password),
                'address' => ['ar' =>  $request->Address_ar , 'en' => $request->Address_en],
                'role_id' => $role_id,
                'super_admin_id' => $super_admin,
                'admin_id' => $admin,
                'status' => (int)$request->status,
            ]);

            toastr()->success(__("global1.success_create"));
            return redirect(route('sellers.index'))->with(['success_msg' , 'congratulations , it has been added successfully']);
        }
        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()] );

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function show(Seller $seller)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function edit(Seller $seller)
    {
        return view('admin.sellers.edit' , compact('seller'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function update(SellerUpdate $request, Seller $seller)
    {
        try {

//            dd(auth()->guard('seller')->getName());
//           dd(  Auth::guard('seller')->user()->name);

//            dd($this->getGuard());
                $seller->name = ['ar' =>  $request->Name_ar , 'en' => $request->Name_en];
                $seller->email  = $request->Email;
                $seller->joining_date =$request->joining_date;
                $seller->password = bcrypt($request->Password);
                $seller->address = ['ar' =>  $request->Address_ar , 'en' => $request->Address_en];
                /************/
                $request->status == (int)1 ? $seller->role_id = (int)3 : $seller->role_id = null;
                /**********/
                $seller->status = (int)$request->status;
                $seller->super_admin_id = $this->getGuard()==='super-admin'?$this->getGuardId():null;
                $seller->admin_id = $this->getGuard()==='admin'?$this->getGuardId():null;

            $seller->save();
            toastr()->success(__("global1.success_create"));
            return redirect(route('sellers.index'))->with(['success_msg' , 'congratulations , it has been added successfully']);
        }
        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()] );

        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seller $seller)
    {
        try {

            $deletion = $seller->delete();

//            if(File::exists(public_path('/assets/images_front/news_images/'.$news->image))) {
//                $this->deleteUploadedImage($news->image, '/assets/images_front/news_images/');
//            }

            if (isset($deletion)) {
                toastr()->error(trans('messages.deletion'));
                return redirect()->back();
            }else{
                toastr()->error(trans('messages.not_completed'));
                return redirect()->back();
            }

        }
        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }

    }
}
