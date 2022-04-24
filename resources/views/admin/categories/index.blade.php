@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    {{trans('admin_categories.list_categories')}}
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    {{trans('admin_categories.list_students')}}
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
                                <a href="{{route('category.create')}}" class="btn btn-success btn-sm" role="button"
                                   aria-pressed="true">{{trans('admin_categories.add_category')}}</a><br><br>
                                <div class="table-responsive">
                                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                           data-page-length="50"
                                           style="text-align: center">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>{{trans('admin_categories.title')}}</th>
                                            <th>{{trans('admin_categories.about_page')}}</th>
                                            <th>{{trans('admin_categories.image')}}</th>

                                            <th>{{trans('admin_categories.status')}}</th>
                                            <th>{{trans('admin_categories.admin_or_super_admin')}}</th>
                                            <th>{{trans('admin_categories.likes')}}</th>
                                            <th>{{trans('admin_categories.unlikes')}}</th>

                                            <th>{{trans('admin_categories.Processes')}}</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @isset($categories)
                                            @foreach($categories as $category)
                                                <tr  class="{{$category->status == (int)1?'opacity-bg-success text-dark' : 'opacity-bg-danger text-dark'}} ">
                                                <td></td>
                                                <td>{{$category->title}}</td>
                                                <td>{{$category->about_page}}</td>
                                                <td><img src="{{asset('assets/images_front/category/')}}/{{$category->image}}" height="100" width="200" /></td>
                                                <td class="{{$category->status == (int)1?'bg-success text-light' : 'bg-danger text-light'}} opacity_td">{{$category->status ===1 ? trans('admin_categories.active') : trans('admin_categories.deactive')}}</td>
                                                <td>{{$category->admin_id > 0 ? trans('admin_categories.admin_is')  .$category->admin_id:(
                                                $category->super_admin_id > 0 ? trans('admin_categories.super_admin_is')  .$category->super_admin_id:'')
                                                }}</td>
                                                <td>{{$category->likes}}</td>
                                                <td>{{$category->unlikes}}</td>

                                                <td>
                                                    <div class="dropdown show">
                                                        <a class="btn btn-success btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            {{trans('admin_categories.processes')}}
                                                        </a>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
{{--                                                            <a class="dropdown-item" href=""><i style="color: #ffc107" class="far fa-eye "></i>&nbsp;    {{ trans('admin_categories.show') }}</a>--}}
                                                            <a class="dropdown-item" href="{{route('category.edit' , $category->id)}}"><i style="color:green" class="fa fa-edit"></i>{{trans('admin_categories.edit')}}</a>
                                                            <button type="button" class="dropdown-item d-inline cursor" data-toggle="modal"
                                                                    data-target="#delete{{ $category->id }}"
                                                                    title="{{ trans('admin_categories.Delete') }}"><i style="color: red" class="fa fa-trash"></i>&nbsp;    {{ trans('admin_categories.Delete') }}</button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>




                                                <!----------------------------delete modal start------------------------------------->
                                                <!-- delete_modal_Grade -->
                                                <div class="modal fade" id="delete{{ $category->id }}" tabindex="-1" role="dialog"
                                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                                                    id="exampleModalLabel">
                                                                    {{ trans('admin_categories.Delete') }}
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                        aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="{{ route('category.destroy', $category->id) }}" method="post">
                                                                    {{ method_field('Delete') }}
                                                                    @csrf

                                                                    <input id="id" type="hidden" name="id" class="form-control"
                                                                           value="{{ $category->id }}">
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                                data-dismiss="modal">{{ trans('admin_categories.close') }}</button>
                                                                        <button type="submit"
                                                                                class="btn btn-danger">{{ trans('admin_categories.submit') }}</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <script>
                                                    function destFunc() {
                                                        var r = confirm('{{ trans("admin_categories.Are_you_sure_you_want_to_delete") }}');
                                                        if (r === true){
                                                            window.location.href ='{{route("category.destroy" , $category->id)}}';            }
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
                 @isset($categories)   {{$categories->links()}}  @endisset

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
