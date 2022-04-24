@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    {{trans('admin_news_cats.list_news_cats')}}
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    {{trans('admin_news_cats.list_students')}}
@stop
<!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <h2 class="elegantshadow text-center" > {{trans('admin_news_cats.news_categories')}}</h2>

    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="col-xl-12 mb-30">
                        <div class="card card-statistics h-100">
                            <div class="card-body">
                                <a href="{{route('newscats.create')}}" class="btn btn-success btn-sm" role="button"
                                   aria-pressed="true">{{trans('admin_news_cats.add_news_cat')}}</a><br><br>
                                <div class="table-responsive">
                                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                           data-page-length="50"
                                           style="text-align: center">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>{{trans('admin_news_cats.title')}}</th>

                                            <th>{{trans('admin_news_cats.status')}}</th>
                                            <th>{{trans('admin_news_cats.admin_or_super_admin')}}</th>
                                            <th>{{trans('admin_news_cats.Processes')}}</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @isset($newscats)
                                            @foreach($newscats as $newscat)
                                                <tr   class="{{$newscat->status == (int)1?'opacity-bg-success text-dark' : 'opacity-bg-danger text-dark'}} ">
                                                <td></td>
                                                <td>{{$newscat->title}}</td>
                                                 <td  class="{{$newscat->status == (int)1?'bg-success text-light' : 'bg-danger text-light'}} opacity_td">{{$newscat->status ===1 ? trans('admin_news_cats.active') : trans('admin_news_cats.deactive')}}</td>
                                                <td>{{$newscat->admin_id > 0 ? trans('admin_news_cats.admin_is') . ' ' .$newscat->admin_id:(
                                                $newscat->super_admin_id > 0 ? trans('admin_news_cats.super_admin_is') . ' '  .$newscat->super_admin_id:'')
                                                }}</td>
                                                <td>
                                                    <div class="dropdown show">
                                                        <a class="btn btn-success btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            {{trans('admin_news_cats.Processes')}}
                                                        </a>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                            <a class="dropdown-item" href="{{route('newscats.show' , $newscat->id)}}"><i style="color: #ffc107" class="far fa-eye "></i>&nbsp;     {{trans('admin_news_cats.show')}}</a>
                                                            <a class="dropdown-item" href="{{route('newscats.edit' , $newscat->id)}}"><i style="color:green" class="fa fa-edit"></i>&nbsp;      {{trans('admin_news_cats.edit')}}</a>
                                                            <button type="button" class="dropdown-item d-inline cursor" data-toggle="modal"
                                                                    data-target="#delete{{ $newscat->id }}"
                                                                    title="{{ trans('admin_news_cats.Delete') }}"><i style="color: red" class="fa fa-trash"></i>&nbsp;    {{ trans('admin_news_cats.Delete') }}</button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>



                                                <!----------------------------delete modal start------------------------------------->
                                                <!-- delete_modal_Grade -->
                                                <div class="modal fade" id="delete{{ $newscat->id }}" tabindex="-1" role="dialog"
                                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                                                    id="exampleModalLabel">
                                                                    {{ trans('admin_news_cats.Delete') }}
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                        aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="{{ route('newscats.destroy', $newscat->id) }}" method="post">
                                                                    {{ method_field('Delete') }}
                                                                    @csrf

                                                                    <input id="id" type="hidden" name="id" class="form-control"
                                                                           value="{{ $newscat->id }}">
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                                data-dismiss="modal">{{ trans('admin_news_cats.close') }}</button>
                                                                        <button type="submit"
                                                                                class="btn btn-danger">{{ trans('admin_news_cats.submit') }}</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <script>
                                                    function destFunc() {
                                                        var r = confirm("{{ trans('admin_news_cats.Are_you_sure_you_want_to_delete') }}");
                                                        if (r === true){
                                                            window.location.href ='{{route("newscats.destroy" , $newscat->id)}}';            }
                                                    }
                                                </script>
                                                <!-----------------------------delete modal end------------------------------------>

                                        @endforeach
                                        @endisset
                                    </table>
                                </div>
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
