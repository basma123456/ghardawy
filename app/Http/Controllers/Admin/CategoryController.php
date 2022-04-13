<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Models\Place;
use App\Traits\general;
use App\Traits\GuardTrait;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
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
        $categories = Category::latest()->paginate(1);
        return view('admin.categories.index' , compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        try {
            $validated = $request->validated();


//            if($request->hasfile('image'))
//            {
//                $i = 1;
//                $i++;
//
//                foreach($request->file('image') as $file)
//                {
//                    $i++;
//                    $name = time().$i.'.'.$file->extension();
//                    $file->move(public_path().'/assets/images_front/category/', $name);
//
//                    $data[] = $name;
//                }
//            }
           $data = $this->saveImage( $request->image ,'/assets/images_front/category/' , 1 );


            $cats = Category::create([
                'title' => ['ar' => $request->title_ar, 'en' => $request->title_en],
                'about_page' => ['ar' => $request->about_page_ar, 'en' => $request->about_page_en],
                'likes' => (int)$request->likes,
                'unlikes' => (int)$request->unlikes,
                'status' => (int)$request->status,
                'image' => $data,

                'super_admin_id' => $this->getGuard() === 'super-admin' ? $this->getGuardId() : null,
                'admin_id' => $this->getGuard() === 'admin' ? $this->getGuardId() : null,
            ]);

            toastr()->success(__("global1.success_create"));
            return redirect(route('category.index'));
        }

        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()] );

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {

        return view('admin.categories.update' , compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, Category $category)
    {
        try {

            $validated = $request->validated();

            /******************************************/
//           $m = json_decode($category->image , true);
//            $data = $this->updateNow($category->getOriginal('image') , $request->hasfile('image') , request('image') , $m , '/assets/images_front/category/' , File::class);


            $data = $this->updatePhoto( $request->image , '/assets/images_front/category/' , $category->getOriginal('image')  , $request ,$request->hasfile('image')  , File::class , $category->image);
//           ($category->getOriginal('image') , $request->hasfile('image') , request('image') , $m , '/assets/images_front/category/' , File::class);

                /****************************************/



//            if(request()->hasFile('image') && request('image') != '') {
//                $imagePath2 = public_path('/assets/images_front/category/'.$category->image);
//                if(File::exists($imagePath2)){
//                    unlink($imagePath2);
//                }
//                $image_value = $this->saveImage($request->image, 'assets/images_front/category');
//            }else{
//                $image_value = $category->getOriginal('image');
//            }

            $category->title = ['ar' => $request->title_ar, 'en' => $request->title_en];
            $category->about_page = ['ar' => $request->about_page_ar, 'en' => $request->about_page_en];
            /************/
            $category->status = (int)$request->status;
            $category->likes = (int)$request->likes;
            $category->image = $data;

            $category->unlikes = (int)$request->unlikes;
            $category->super_admin_id = $this->getGuard() === 'super-admin' ? $this->getGuardId() : null;
            $category->admin_id = $this->getGuard() === 'admin' ? $this->getGuardId() : null;

            $category->save();
            toastr()->success(__("global1.success_create"));
            return redirect(route('category.index'))->with(['success_msg', 'congratulations , it has been updated successfully']);
        }

        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()] );

        }

    }




    /************************************************************/
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */


    public function destroy(Category $category)
    {
        try{
            $deletion = $category->delete();
            if(File::exists(public_path('/assets/images_front/category/'.$category->image))) {
                $this->deleteUploadedImage($category->image, '/assets/images_front/category/');
            }
            toastr()->error($this->deletion($deletion , trans('messages.deletion') , trans('messages.not_completed')));
            return redirect()->back();
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /****************************************************/




}
