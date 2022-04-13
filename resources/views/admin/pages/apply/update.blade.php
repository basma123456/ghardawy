@extends('layouts.master')
@section('css')
    @toastr_css
@section('main_p')
    {{ trans('Teacher_trans.Add_Teacher') }}
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    {{ trans('Teacher_trans.Add_Teacher') }}
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
                            <form action="{{route('news.update' , $new->id)}}" method="post" enctype="multipart/form-data">
                                @method('Put')
                                @csrf
 {{--   //here       main_p first_p second_p third_p image label news_cat_id admin_id super_admin_id--}}

                                <input type="hidden" name="id" value="{{$new->id}}">
                                <div class="form-row">
                                    <div class="col">
                                        <label for="main_p_ar">{{trans('Teacher_trans.main_p_ar')}}</label>
                                        <input type="text"  value="{{ $new->getTranslation('main_p', 'ar') }}"  name="main_p_ar" class="form-control">
                                        @error('main_p_ar')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="main_p_en">{{trans('Teacher_trans.main_p_en')}}</label>
                                        <input type="text"  value="{{ $new->getTranslation('main_p', 'en') }}"   name="main_p_en" class="form-control">
                                        @error('main_p_en')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="main_p_ru">{{trans('Teacher_trans.main_p_ru')}}</label>
                                        <input type="text"  value="{{ $new->getTranslation('main_p', 'ru') }}"  name="main_p_ru" class="form-control">
                                        @error('main_p_ru')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                </div>
                                <br>

                                <div class="form-row">
                                    <div class="col">
                                        <label for="first_p_ar">{{trans('Teacher_trans.first_p_ar')}}</label>
                                        <input type="text"  value="{{ $new->getTranslation('first_p', 'ar') }}"  name="first_p_ar" class="form-control">
                                        @error('first_p_ar')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="first_p_en">{{trans('Teacher_trans.first_p_en')}}</label>
                                        <input type="text"  value="{{ $new->getTranslation('first_p', 'en') }}"   name="first_p_en" class="form-control">
                                        @error('first_p_en')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="first_p_ru">{{trans('Teacher_trans.first_p_ru')}}</label>
                                        <input type="text"  value="{{ $new->getTranslation('first_p', 'ru') }}"  name="first_p_ru" class="form-control">
                                        @error('first_p_ru')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                </div>
                                <br>


                                <div class="form-row">
                                    <div class="col">
                                        <label for="second_p_ar">{{trans('Teacher_trans.second_p_ar')}}</label>
                                        <input type="text"  value="{{ $new->getTranslation('second_p', 'ar') }}"  name="second_p_ar" class="form-control">
                                        @error('second_p_ar')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="second_p_en">{{trans('Teacher_trans.second_p_en')}}</label>
                                        <input type="text"  value="{{ $new->getTranslation('second_p', 'en') }}"   name="second_p_en" class="form-control">
                                        @error('second_p_en')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="second_p_ru">{{trans('Teacher_trans.second_p_ru')}}</label>
                                        <input type="text"  value="{{ $new->getTranslation('second_p', 'ru') }}"  name="second_p_ru" class="form-control">
                                        @error('second_p_ru')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                </div>
                                <br>

                                <div class="form-row">
                                    <div class="col">
                                        <label for="third_p_ar">{{trans('Teacher_trans.third_p_ar')}}</label>
                                        <input type="text"  value="{{ $new->getTranslation('third_p', 'ar') }}"  name="third_p_ar" class="form-control">
                                        @error('third_p_ar')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="third_p_en">{{trans('Teacher_trans.third_p_en')}}</label>
                                        <input type="text"  value="{{ $new->getTranslation('third_p', 'en') }}"   name="third_p_en" class="form-control">
                                        @error('third_p_en')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="third_p_ru">{{trans('Teacher_trans.third_p_ru')}}</label>
                                        <input type="text"  value="{{ $new->getTranslation('third_p', 'ru') }}"  name="third_p_ru" class="form-control">
                                        @error('third_p_ru')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                </div>
                                <br>


                                <div class="form-row">
                                    <div class="form-group col">
                                        <label for="status">{{trans('Teacher_trans.image')}}</label>
                                        <input type="file" class="my-1 mr-sm-2 form-control" style="height: max-content" name="image" />
                                        @error('image')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                </div>
                                <br>

                                <div class="form-row">
                                    <div class="form-group col">
                                        <label for="news_cat_id">{{trans('Teacher_trans.news_cat_id')}}</label>
                                        <select class="custom-select my-1 mr-sm-2 form-control" style="height: max-content" name="news_cat_id">
                                            <option disabled>{{trans('Parent_trans.Choose')}} <span class="text-dark">&#x26DB;</span></option>
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
                                        <label for="status">{{trans('Teacher_trans.status')}}</label>
                                        <select class="custom-select my-1 mr-sm-2 form-control" style="height: max-content" name="status">
                                            <option disabled>{{trans('Parent_trans.Choose')}} <span class="text-dark">&#x26DB;</span></option>
                                            <option {{$new->status===(int)0 ? 'selected' : ''}} value="{{(int)0}}">{{trans('Parent_trans.deactive')}}</option>
                                            <option {{$new->status===(int)1 ? 'selected' : ''}}  value="{{(int)1}}">{{trans('Parent_trans.active')}}</option>

                                        </select>
                                        @error('status')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                </div>
                                <br>

                                <br>
                                <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" type="submit">{{trans('Parent_trans.Next')}}</button>
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
