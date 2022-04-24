@extends('layouts.master')
@section('css')
    @toastr_css
@section('main_p')
    {{ trans('admin_news.edit_news') }}
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    {{ trans('admin_news.Add_Teacher') }}
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

                            <form action="{{\LaravelLocalization::localizeURL(route('news.update' , $new->id))}}" method="post" enctype="multipart/form-data">
                                @method('Put')
                                @csrf
 {{--   //here       main_p first_p second_p third_p image label news_cat_id admin_id super_admin_id--}}

                                <input type="hidden" name="id" value="{{$new->id}}">
                                <div class="form-row">
                                    <div class="col">
                                        <label for="main_p_ar">{{trans('admin_news.main_p_ar')}}</label>
                                        <input type="text"  value="{{ $new->getTranslation('main_p', 'ar') }}"  name="main_p_ar" class="form-control">
                                        @error('main_p_ar')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="main_p_en">{{trans('admin_news.main_p_en')}}</label>
                                        <input type="text"  value="{{ $new->getTranslation('main_p', 'en') }}"   name="main_p_en" class="form-control">
                                        @error('main_p_en')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="main_p_ru">{{trans('admin_news.main_p_ru')}}</label>
                                        <input type="text"  value="{{ $new->getTranslation('main_p', 'ru') }}"  name="main_p_ru" class="form-control">
                                        @error('main_p_ru')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                </div>
                                <br>

                                <div class="form-row">
                                    <div class="col">
                                        <label for="first_p_ar">{{trans('admin_news.first_p_ar')}}</label>
                                        <input type="text"  value="{{ $new->getTranslation('first_p', 'ar') }}"  name="first_p_ar" class="form-control">
                                        @error('first_p_ar')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="first_p_en">{{trans('admin_news.first_p_en')}}</label>
                                        <input type="text"  value="{{ $new->getTranslation('first_p', 'en') }}"   name="first_p_en" class="form-control">
                                        @error('first_p_en')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="first_p_ru">{{trans('admin_news.first_p_ru')}}</label>
                                        <input type="text"  value="{{ $new->getTranslation('first_p', 'ru') }}"  name="first_p_ru" class="form-control">
                                        @error('first_p_ru')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                </div>
                                <br>


                                <div class="form-row">
                                    <div class="col">
                                        <label for="second_p_ar">{{trans('admin_news.second_p_ar')}}</label>
                                        <input type="text"  value="{{ $new->getTranslation('second_p', 'ar') }}"  name="second_p_ar" class="form-control">
                                        @error('second_p_ar')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="second_p_en">{{trans('admin_news.second_p_en')}}</label>
                                        <input type="text"  value="{{ $new->getTranslation('second_p', 'en') }}"   name="second_p_en" class="form-control">
                                        @error('second_p_en')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="second_p_ru">{{trans('admin_news.second_p_ru')}}</label>
                                        <input type="text"  value="{{ $new->getTranslation('second_p', 'ru') }}"  name="second_p_ru" class="form-control">
                                        @error('second_p_ru')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                </div>
                                <br>

                                <div class="form-row">
                                    <div class="col">
                                        <label for="third_p_ar">{{trans('admin_news.third_p_ar')}}</label>
                                        <input type="text"  value="{{ $new->getTranslation('third_p', 'ar') }}"  name="third_p_ar" class="form-control">
                                        @error('third_p_ar')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="third_p_en">{{trans('admin_news.third_p_en')}}</label>
                                        <input type="text"  value="{{ $new->getTranslation('third_p', 'en') }}"   name="third_p_en" class="form-control">
                                        @error('third_p_en')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="third_p_ru">{{trans('admin_news.third_p_ru')}}</label>
                                        <input type="text"  value="{{ $new->getTranslation('third_p', 'ru') }}"  name="third_p_ru" class="form-control">
                                        @error('third_p_ru')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                </div>
                                <br>
                                <div class="form-row">
                                    <div class="col">
                                        <label for="label_ar">{{trans('admin_news.label_ar')}}</label>
                                        <textarea  name="label_ar" class="form-control"> {{old('label_ar' , $new->getTranslation('label', 'ar'))  }} </textarea>
                                        @error('label_ar')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="label_en">{{trans('admin_news.label_en')}}</label>
                                        <textarea  name="label_en" class="form-control"> {{old('label_en' , $new->getTranslation('label', 'en'))  }} </textarea>

                                        @error('label_en')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="label_ru">{{trans('admin_news.label_ru')}}</label>
                                        <textarea  name="label_ru" class="form-control">{{old('label_ru' , $new->getTranslation('label', 'ru'))  }}</textarea>

                                        @error('label_ru')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                </div>
                                <br>


                                <div class="form-row">
                                    <div class="form-group col">
                                        <label for="status">{{trans('admin_news.image')}}</label>
                                        <input type="file" class="my-1 mr-sm-2 form-control" style="height: max-content" name="image" />
                                        @error('image')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                </div>
                                <br>

                                <div class="form-row">
                                    <div class="form-group col">
                                        <label for="news_cat_id">{{trans('admin_news.news_cat_id')}}</label>
                                        <select class="custom-select my-1 mr-sm-2 form-control" style="height: max-content" name="news_cat_id">
                                            <option disabled>{{trans('admin_news.Choose')}} <span class="text-dark">&#x26DB;</span></option>
                                            @foreach($catsnews as $catsnew)
                                            <option  value="{{$catsnew->id}}" {{(int)$new->news_cat_id===(int)$catsnew->id ? 'selected' : ''}}>{{$catsnew->title}}</option>
                                            @endforeach
                                        </select>
                                        @error('status')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                </div>
                                <br>



                                <div class="form-row">
                                    <div class="form-group col">
                                        <label for="status">{{trans('admin_news.status')}}</label>
                                        <select class="custom-select my-1 mr-sm-2 form-control" style="height: max-content" name="status">
                                            <option disabled>{{trans('admin_news.Choose')}} <span class="text-dark">&#x26DB;</span></option>
                                            <option {{$new->status===(int)0 ? 'selected' : ''}} value="{{(int)0}}">{{trans('admin_news.deactive')}}</option>
                                            <option {{$new->status===(int)1 ? 'selected' : ''}}  value="{{(int)1}}">{{trans('admin_news.active')}}</option>

                                        </select>
                                        @error('status')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                </div>
                                <br>

                                <br>
                                <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" type="submit">{{trans('admin_news.Next')}}</button>
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
