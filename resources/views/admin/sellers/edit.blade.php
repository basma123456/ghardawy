@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
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

    {{--    @if($errors->any())--}}
    {{--        <div class="alert alert-danger">--}}
    {{--            <p><strong>Opps Something went wrong</strong></p>--}}
    {{--            <ul>--}}
    {{--                @foreach ($errors->all() as $error)--}}
    {{--                    <li>{{ $error }}</li>--}}
    {{--                @endforeach--}}
    {{--            </ul>--}}
    {{--        </div>--}}
    {{--    @endif--}}
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
                            <form action="{{  \LaravelLocalization::localizeURL(route('sellers.update' , $seller->id)) }}" method="post">
                                @method('PUT')
                                @csrf
                                <div class="form-row">
                                    <div class="col">
                                        <label for="title">{{trans('Teacher_trans.Email')}}</label>
                                        <input type="email" name="Email" value="{{$seller->email ?$seller->email: old('Email')}}" class="form-control">
                                        @error('Email')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="title">{{trans('Teacher_trans.Password')}}</label>
                                        <input type="password" name="Password" class="form-control">
                                        @error('Password')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <br>

                                <div class="form-row">
                                    <div class="col">
                                        <label for="title">{{trans('Teacher_trans.Name_ar')}}</label>
                                        <input type="text" name="Name_ar" value="{{ $seller->getTranslation('name', 'ar')? $seller->getTranslation('name', 'ar') :  old('Name_ar')}}" class="form-control">
                                        @error('Name_ar')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="title">{{trans('Teacher_trans.Name_en')}}</label>
                                        <input type="text" name="Name_en"  value="{{ $seller->getTranslation('name', 'en')? $seller->getTranslation('name', 'en') :  old('Name_en')}}" class="form-control">
                                        @error('Name_en')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <br>
                                <br>

                                <div class="form-row">
                                    <div class="col">
                                        <label for="title">{{trans('Teacher_trans.joining_date')}}</label>
                                        <div class='input-group date'>
                                            <input class="form-control" type="text"  id="datepicker-action" name="joining_date" value="{{$seller->joining_date ? $seller->joining_date : old('joining_date')}}" data-date-format="yyyy-mm-dd">
                                        </div>
                                        @error('joining_date')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <br>

                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">{{trans('Teacher_trans.Address_ar')}}</label>
                                    <textarea class="form-control" name="Address_ar"
                                              id="exampleFormControlTextarea1" rows="4">{{ $seller->getTranslation('address', 'ar')? $seller->getTranslation('address', 'ar') :  old('Address_ar')}}</textarea>
                                    @error('Address_ar')
                                    <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">{{trans('Teacher_trans.Address_en')}}</label>
                                    <textarea class="form-control" name="Address_en"
                                              id="exampleFormControlTextarea1" rows="4">{{ $seller->getTranslation('address', 'en')? $seller->getTranslation('address', 'en') :  old('Address_en')}}</textarea>
                                    @error('Address_en')
                                    <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea12">{{trans('Teacher_trans.status')}}</label>

                                    <select class="form-control col-3 p-1" for="exampleFormControlTextarea12"
                                            name="status"
                                            id="exampleFormControlTextarea12" >
                                        <option value=""  >....</option>

                                        <option class="form-control col-3"   value="{{(int)0}}" {{ $seller->status === (int)0 ?  'selected': ''}}>Deacive</option>
                                        <option class="form-control col-3" value="{{(int)1}}" {{ $seller->status === (int)1 ?  'selected': ''}}>Active</option>

                                    </select>
                                    @error('status')
                                    <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                </div>
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
