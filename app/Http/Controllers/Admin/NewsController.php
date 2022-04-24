<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsRequest;
use App\Models\News;
use App\Models\NewsCats;
use App\Traits\general;
use App\Traits\GuardTrait;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class NewsController extends Controller
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
        $news = News::with('newsCats')->latest()->paginate(5);
        return view('admin.pages.news.index' , ['news' => $news]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $newscats = NewsCats::latest()->get();
        return view('admin.pages.news.create' , ['newscats' => $newscats]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsRequest $request)
    {
        try {
            $validated = $request->validated();
            $news = News::create([
                'main_p' => ['ar' => $request->main_p_ar, 'en' => $request->main_p_en, 'ru' => $request->main_p_ru],
                'first_p' => ['ar' => $request->first_p_ar, 'en' => $request->first_p_en, 'ru' => $request->first_p_ru],
                'second_p' => ['ar' => $request->second_p_ar, 'en' => $request->second_p_en, 'ru' => $request->second_p_ru],
                'third_p' => ['ar' => $request->third_p_ar, 'en' => $request->third_p_en, 'ru' => $request->third_p_ru],
                'image' => $this->saveImage($request->image, '/assets/images_front/news/', '1'),
                'label' => ['ar' => $request->label_ar, 'en' => $request->label_en, 'ru' => $request->label_ru],
                'status' => $request->status,
                'news_cat_id' => $request->news_cat_id,
                'super_admin_id' => $this->getGuard() === 'super-admin' ? $this->getGuardId() : null,
                'admin_id' => $this->getGuard() === 'admin' ? $this->getGuardId() : null,
            ]);
            toastr()->success(trans("global1.success_create"));
            return redirect(route('news.index'));
        }

        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }

    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        $new = $news;
        $catsnews = NewsCats::latest()->get();
        return view('admin.pages.news.update' , ['new' => $new , 'catsnews' => $catsnews]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(NewsRequest $request, News $news)
    {
           try {
               $validated = $request->validated();

                    $news->update([
                        'main_p' => ['ar' => $request->main_p_ar , 'en' => $request->main_p_en , 'ru' => $request->main_p_ru],
                        'first_p' => ['ar' => $request->first_p_ar , 'en' => $request->first_p_en , 'ru' => $request->first_p_ru],
                        'second_p' => ['ar' => $request->second_p_ar , 'en' => $request->second_p_en , 'ru' => $request->second_p_ru],
                        'third_p' => ['ar' => $request->third_p_ar , 'en' => $request->third_p_en , 'ru' => $request->third_p_ru],
                        'image' => $this->updatePhoto($request->image , '/assets/images_front/news/' , $news->getOriginal('image') , $request , $request->hasFile('image') , File::class , $news->image),
                        'label' => ['ar' => $request->label_ar , 'en' => $request->label_en , 'ru' => $request->label_ru],
                        'news_cat_id' => $request->news_cat_id,
                        'status' => $request->status,
                        'super_admin_id' => $this->getGuard() === 'super-admin' ? $this->getGuardId() : null,
                        'admin_id' => $this->getGuard() === 'admin' ? $this->getGuardId() : null,
                    ]);
                    toastr()->success(trans("global1.success_create"));
               return redirect(route('news.index'));
            }

            catch (\Exception $e){
                return redirect()->back()->withErrors(['error' => $e->getMessage()]);
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        try{
            $deletion = $news->delete();
            if(File::exists(public_path('/assets/images_front/news/'.$news->image))) {
                $this->deleteUploadedImage($news->image , '/assets/images_front/news/');
            }
            toastr()->error($this->deletion($deletion , trans('messages.deletion') , trans('messages.not_completed')));
            return redirect()->back();
        }

        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }

    }

}
