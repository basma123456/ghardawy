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
    @if(count($errors) > 0 )
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <ul class="p-0 m-0" style="list-style: none;">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h2 class="elegantshadow text-center" >News</h2>

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
{{--   //here       main_p first_p second_p third_p image label news_cat_id admin_id super_admin_id--}}

                            <form action="{{route('news.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">
                                    <div class="col">
                                        <label for="main_p_ar">{{trans('Teacher_trans.main_p_ar')}}</label>
                                        <textarea  name="main_p_ar" class="form-control"> {{old('main_p_ar')}} </textarea>
                                        @error('main_p_ar')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="main_p_en">{{trans('Teacher_trans.main_p_en')}}</label>
                                        <textarea  name="main_p_en" class="form-control"> {{old('main_p_en')}} </textarea>

                                        @error('main_p_en')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="main_p_ru">{{trans('Teacher_trans.main_p_ru')}}</label>
                                        <textarea  name="main_p_ru" class="form-control"> {{old('main_p_ru')}} </textarea>

                                        @error('main_p_ru')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                </div>
                                <br>

                                <div class="form-row">
                                    <div class="col">
                                        <label for="first_p_ar">{{trans('Teacher_trans.first_p_ar')}}</label>
                                        <textarea  name="first_p_ar" class="form-control"> {{old('first_p_ar')}} </textarea>
                                        @error('first_p_ar')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="first_p_en">{{trans('Teacher_trans.first_p_en')}}</label>
                                        <textarea  name="first_p_en" class="form-control"> {{old('first_p_en')}} </textarea>

                                        @error('first_p_en')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="first_p_ru">{{trans('Teacher_trans.first_p_ru')}}</label>
                                        <textarea  name="first_p_ru" class="form-control"> {{old('first_p_ru')}} </textarea>

                                        @error('first_p_ru')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                </div>
                                <br>

                                <div class="form-row">
                                    <div class="col">
                                        <label for="second_p_ar">{{trans('Teacher_trans.second_p_ar')}}</label>
                                        <textarea  name="second_p_ar" class="form-control"> {{old('second_p_ar')}} </textarea>
                                        @error('second_p_ar')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="second_p_en">{{trans('Teacher_trans.second_p_en')}}</label>
                                        <textarea  name="second_p_en" class="form-control"> {{old('second_p_en')}} </textarea>

                                        @error('second_p_en')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="second_p_ru">{{trans('Teacher_trans.second_p_ru')}}</label>
                                        <textarea  name="second_p_ru" class="form-control"> {{old('second_p_ru')}} </textarea>

                                        @error('second_p_ru')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                </div>
                                <br>

                                <div class="form-row">
                                    <div class="col">
                                        <label for="third_p_ar">{{trans('Teacher_trans.third_p_ar')}}</label>
                                        <textarea  name="third_p_ar" class="form-control"> {{old('third_p_ar')}} </textarea>
                                        @error('third_p_ar')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="third_p_en">{{trans('Teacher_trans.third_p_en')}}</label>
                                        <textarea  name="third_p_en" class="form-control"> {{old('third_p_en')}} </textarea>

                                        @error('third_p_en')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="third_p_ru">{{trans('Teacher_trans.third_p_ru')}}</label>
                                        <textarea  name="third_p_ru" class="form-control"> {{old('third_p_ru')}} </textarea>

                                        @error('third_p_ru')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                </div>
                                <br>

                                <div class="form-row">
                                    <div class="col">
                                        <label for="label_ar">{{trans('Teacher_trans.label_ar')}}</label>
                                        <textarea  name="label_ar" class="form-control"> {{old('label_ar')}} </textarea>
                                        @error('label_ar')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="label_en">{{trans('Teacher_trans.label_en')}}</label>
                                        <textarea  name="label_en" class="form-control"> {{old('label_en')}} </textarea>

                                        @error('label_en')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="label_ru">{{trans('Teacher_trans.label_ru')}}</label>
                                        <textarea  name="label_ru" class="form-control"> {{old('label_ru')}} </textarea>

                                        @error('label_ru')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                </div>
                                <br>

                                <div class="form-row">
                                    <div class="col">
                                        <label for="image">{{trans('Teacher_trans.image')}}</label>
                                        <input type="file" name="image" class="form-control"  value='{{old('image')}}' />
                                        @error('image')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <br>


                                <div class="form-row">
                                    <div class="col">
                                        <label for="news_cat_id">{{trans('Teacher_trans.news_cat_id')}}</label>
                                        <select  name="news_cat_id" class="form-control">
                                            @foreach($newscats as $newscat)
                                            <option  value="{{$newscat->id}}" class="form-control" {{(int)old('news_cat_id') === (int)$newscat->id ? 'selected' : ''}} > {{$newscat->title}} </option>
                                            @endforeach
                                        </select>
                                        @error('news_cat_id')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <br>

                                <div class="form-row">
                                    <div class="form-group col">
                                        <label for="status">{{trans('Teacher_trans.status')}}</label>
                                        <select class="custom-select my-1 mr-sm-2 form-control" style="height: max-content" name="status">
                                            <option selected disabled>{{trans('Parent_trans.Choose')}} <span class="text-dark">&#x26DB;</span></option>
                                            <option value="{{(int)0}}">{{trans('Parent_trans.deactive')}}</option>
                                            <option value="{{(int)1}}">{{trans('Parent_trans.active')}}</option>

                                        </select>
                                        @error('status')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>

                                <br>
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
