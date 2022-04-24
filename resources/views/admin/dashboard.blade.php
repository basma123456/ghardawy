@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    {{trans('admin_sellers.dashboard')}}
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    {{trans('admin_sellers.list_students')}}
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
                        <div class="card card-statistics h-100">
                            <div class="card-body">
                                <h2>HI .... {{Auth::guard('super-admin')->user()->name}}</h2>
                            </div>
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
