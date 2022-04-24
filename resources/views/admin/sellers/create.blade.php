@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    {{ trans('admin_sellers.Add_sellers') }}
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    {{ trans('admin_sellers.Add_Teacher') }}
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

                            <form action="{{  \LaravelLocalization::localizeURL(route('sellers.store')) }}" method="post">
                                @csrf
                                <div class="form-row">
                                    <div class="col">
                                        <label for="title">{{trans('admin_sellers.Email')}}</label>
                                        <input type="email" name="Email" value="{{old('Email')}}" class="form-control">
                                        @error('Email')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="title">{{trans('admin_sellers.Password')}}</label>
                                        <input type="password" name="Password" class="form-control">
                                        @error('Password')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <br>


                                <div class="form-row">
                                    <div class="col">
                                        <label for="title">{{trans('admin_sellers.Name_ar')}}</label>
                                        <input type="text" name="Name_ar" value="{{old('Name_ar')}}" class="form-control">
                                        @error('Name_ar')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="title">{{trans('admin_sellers.Name_en')}}</label>
                                        <input type="text" name="Name_en" value="{{old('Name_en')}}" class="form-control">
                                        @error('Name_en')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="title">{{trans('admin_sellers.Name_ru')}}</label>
                                        <input type="text" name="Name_ru" value="{{old('Name_ru')}}" class="form-control">
                                        @error('Name_ru')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                </div>
                                <br>
                                <br>

                                <div class="form-row">
                                    <div class="col">
                                        <label for="title">{{trans('admin_sellers.joining_date')}}</label>
                                        <div class='input-group date'>
                                            <input class="form-control" type="text"  id="datepicker-action" name="joining_date" value="{{old('joining_date')}}" data-date-format="yyyy-mm-dd">
                                        </div>
                                        @error('joining_date')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <br>

                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">{{trans('admin_sellers.Address_ar')}}</label>
                                    <textarea class="form-control" name="Address_ar" value="{{old('Address_ar')}}"
                                              id="exampleFormControlTextarea1" rows="4"></textarea>
                                    @error('Address_ar')
                                    <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">{{trans('admin_sellers.Address_en')}}</label>
                                    <textarea class="form-control" name="Address_en" value="{{old('Address_en')}}"
                                              id="exampleFormControlTextarea1" rows="4"></textarea>
                                    @error('Address_en')
                                    <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">{{trans('admin_sellers.Address_ru')}}</label>
                                    <textarea class="form-control" name="Address_ru" value="{{old('Address_ru')}}"
                                              id="exampleFormControlTextarea1" rows="4"></textarea>
                                    @error('Address_ru')
                                    <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlTextarea12">{{trans('admin_sellers.status')}}</label>

                                    <select class="form-control col-3 p-1" for="exampleFormControlTextarea12"
                                            name="status"
                                            id="exampleFormControlTextarea12" >
                                        <option value="" selected >....</option>

                                        <option class="form-control col-3" value="{{(int)0}}">{{trans('admin_sellers.Deacive')}}</option>
                                        <option class="form-control col-3" value="{{(int)1}}">{{trans('admin_sellers.Active')}}</option>

                                    </select>
                                    @error('status')
                                    <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <br>
                                <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" type="submit">{{trans('admin_sellers.Next')}}</button>
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
