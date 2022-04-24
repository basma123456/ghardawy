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

                            <form action="{{\LaravelLocalization::localizeURL(route('roles.store'))}}" method="post">
                                @csrf

                                <div class="form-row">
                                    <div class="col">
                                        <label for="title">{{trans('Teacher_trans.Name_ar')}}</label>
                                        <input type="text" name="Name_ar" class="form-control">
                                        @error('Name_ar')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="title">{{trans('Teacher_trans.Name_en')}}</label>
                                        <input type="text" name="Name_en" class="form-control">
                                        @error('Name_en')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <br>

                                @foreach(config('global.permessions') as $name => $value)
                                <div class="form-check">
                                    <input class="form-check-input" name="permessions[]" type="checkbox" value="{{$name}}" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        {{$value}}
                                    </label>
                                </div>
                                @endforeach
                                @error('permessions')
                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror


                                {{--                                /***********************************************************************/--}}

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
