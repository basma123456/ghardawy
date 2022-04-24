@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    {{ trans('admin_categories.update_categories') }}
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    {{ trans('admin_categories.Add_Teacher') }}
@stop
<!-- breadcrumb -->
@endsection
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- row -->
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">

                    @if(session()->has('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>{{ session()->get('error') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">


                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <div class="col-xs-12">
                        <div class="col-md-12">
                            <br>

                            <form action="{{ \LaravelLocalization::localizeURL(route('category.update' , $category->id))}}" method="post" enctype="multipart/form-data">
                                @method('Put')
                                @csrf
                                <input type="hidden" name="id" value="{{$category->id}}">
                                <div class="form-row">
                                    <div class="col">
                                        <label for="title_ar">{{trans('admin_categories.title_ar')}}</label>
                                        <input type="text"  value="{{ $category->getTranslation('title', 'ar') }}"  name="title_ar" class="form-control">
                                        @error('title_ar')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="title_en">{{trans('admin_categories.title_en')}}</label>
                                        <input type="text"  value="{{ $category->getTranslation('title', 'en') }}"   name="title_en" class="form-control">
                                        @error('title_en')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                    <div class="col">
                                        <label for="title_ru">{{trans('admin_categories.title_ru')}}</label>
                                        <input type="text"  value="{{ $category->getTranslation('title', 'ru') }}"   name="title_ru" class="form-control">
                                        @error('title_ru')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                </div>
                                <br>



                                <div class="form-row">
                                    <div class="col">
                                        <label for="title">{{trans('admin_categories.about_page_ar')}}</label>
                                        <textarea name="about_page_ar" class="form-control" rows="4">   {{ $category->getTranslation('about_page', 'ar') }}  </textarea>
                                        @error('about_page_ar')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="about_page_en">{{trans('admin_categories.about_page_en')}}</label>
                                        <textarea name="about_page_en" class="form-control" rows="4">   {{ $category->getTranslation('about_page', 'en') }}    </textarea>
                                        @error('about_page_en')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                    <div class="col">
                                        <label for="about_page_ru">{{trans('admin_categories.about_page_ru')}}</label>
                                        <textarea name="about_page_ru" class="form-control" rows="4">   {{ $category->getTranslation('about_page', 'ru') }}    </textarea>
                                        @error('about_page_ru')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                </div>
                                <br>



                                <div class="form-row">
                                    <div class="col">
                                        <label for="likes">{{trans('admin_categories.likes')}}</label>
                                        <input type="number" name="likes"   value="{{ $category->likes }}"    class="form-control" min="0" >
                                        @error('likes')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="unlikes">{{trans('admin_categories.unlikes')}}</label>
                                        <input type="number" name="unlikes"   value="{{ $category->unlikes }}"  class="form-control" min="0">
                                        @error('unlikes')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <div class="form-group col">
                                        <label for="status">{{trans('admin_categories.status')}}</label>
                                        <select class="custom-select my-1 mr-sm-2 form-control" style="height: max-content" name="status">
                                            <option disabled>{{trans('admin_categories.Choose')}} <span class="text-dark">&#x26DB;</span></option>
                                            <option {{$category->status===(int)0 ? 'selected' : ''}} value="{{(int)0}}">{{trans('admin_categories.deactive')}}</option>
                                            <option {{$category->status===(int)1 ? 'selected' : ''}}  value="{{(int)1}}">{{trans('admin_categories.active')}}</option>

                                        </select>
                                        @error('status')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col">
                                        <label for="image">{{trans('admin_categories.image')}}</label>
                                        <input type="file" class="form-control" name="image" />
                                        @error('image')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                </div>
                                <br>

                                <br>
                                <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" type="submit">{{trans('admin_categories.Next')}}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
@endsection
@section('js')
    @toastr_js
    @toastr_render
@endsection
