@extends('layouts.seller_master')
@section('css')
    @toastr_css
@section('title')
    {{trans('sellers_places.dashboard')}}
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    {{trans('sellers_places.list_students')}}
@stop
<!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->

    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="col-xl-12 mb-30">
                        <h2 class="text-center">{{trans('sellers_places.HI')}} .... {{Auth::guard('seller')->user()->name}}</h2>
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
