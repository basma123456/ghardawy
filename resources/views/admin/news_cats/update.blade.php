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
                            <form action="{{route('newscats.update' , $newscats->id)}}" method="post" enctype="multipart/form-data">
                                @method('Put')
                                @csrf
                                <input type="hidden" name="id" value="{{$newscats->id}}">
                                <div class="form-row">
                                    <div class="col">
                                        <label for="title_ar">{{trans('Teacher_trans.title_ar')}}</label>
                                        <input type="text"  value="{{ $newscats->getTranslation('title', 'ar') }}"  name="title_ar" class="form-control">
                                        @error('title_ar')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="title_en">{{trans('Teacher_trans.title_en')}}</label>
                                        <input type="text"  value="{{ $newscats->getTranslation('title', 'en') }}"   name="title_en" class="form-control">
                                        @error('title_en')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="title_ru">{{trans('Teacher_trans.title_ru')}}</label>
                                        <input type="text"  value="{{ $newscats->getTranslation('title', 'ru') }}"  name="title_ru" class="form-control">
                                        @error('title_ru')
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
                                            <option {{$newscats->status===(int)0 ? 'selected' : ''}} value="{{(int)0}}">{{trans('Parent_trans.deactive')}}</option>
                                            <option {{$newscats->status===(int)1 ? 'selected' : ''}}  value="{{(int)1}}">{{trans('Parent_trans.active')}}</option>

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
