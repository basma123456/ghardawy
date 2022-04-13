@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    {{trans('main_trans.list_students')}}
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    {{trans('main_trans.list_students')}}
@stop
<!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <h2 class="elegantshadow text-center" >News</h2>

    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="col-xl-12 mb-30">
                        <div class="card card-statistics h-100">
                            <div class="card-body">
                                <a href="{{route('news.create')}}" class="btn btn-success btn-sm" role="button"
                                   aria-pressed="true">{{trans('main_trans.add_student')}}</a><br><br>
                                <div class="table-responsive">
                                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                           data-page-length="50"
                                           style="text-align: center">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>{{trans('Students_trans.main_p')}}</th>
                                            <th>{{trans('Students_trans.first_p')}}</th>
                                            <th>{{trans('Students_trans.second_p')}}</th>
                                            <th>{{trans('Students_trans.third_p')}}</th>
                                            <th>{{trans('Students_trans.image')}}</th>
                                            <th>{{trans('Students_trans.news_cat_id')}}</th>
                                            <th>{{trans('Students_trans.super_admin_id_or_admin_id')}}</th>
                                            <th>{{trans('Students_trans.status')}}</th>
                                            <th>{{trans('Students_trans.Processes')}}</th>
                                        </tr>
                                        </thead>
                                        <tbody>
 {{--   //here       main_p first_p second_p third_p image label news_cat_id admin_id super_admin_id--}}

                                        @isset($news)
                                            @foreach($news as $new)
                                                <tr>
                                                    <td></td>
                                                    <td>{{$new->main_p}}</td>
                                                    <td>{{$new->first_p}}</td>
                                                    <td>{{$new->second_p}}</td>
                                                    <td>{{$new->third_p}}</td>
                                                    <td><img width="150" height="100" src="{{asset('assets/images_front/news/')}}/{{$new->image}}"></td>

                                                    <td>{{$new->news_cat_id}}</td>
                                                    <td>{{$new->admin_id > 0 ? 'Admin Is ' .$new->admin_id:(
                                                    $new->super_admin_id > 0 ? 'Super Admin Is ' .$new->super_admin_id:'')
                                                    }}</td>
                                                    <td>{{$new->status ===1 ? 'Active' : 'Un Active'}}</td>

                                                    <td>
                                                    <div class="dropdown show">
                                                        <a class="btn btn-success btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            العمليات
                                                        </a>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                            <a class="dropdown-item" href=""><i style="color: #ffc107" class="far fa-eye "></i>&nbsp;  عرض بيانات الطالب</a>
                                                            <a class="dropdown-item" href="{{route('news.edit' , $new->id)}}"><i style="color:green" class="fa fa-edit"></i>&nbsp;  تعديل بيانات الطالب</a>
                                                            <button type="button" class="dropdown-item d-inline cursor" data-toggle="modal"
                                                                    data-target="#delete{{ $new->id }}"
                                                                    title="{{ trans('$new.Delete') }}"><i style="color: red" class="fa fa-trash"></i>&nbsp;  حذف بيانات الطالب</button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>



                                                <!----------------------------delete modal start------------------------------------->
                                                <!-- delete_modal_Grade -->
                                                <div class="modal fade" id="delete{{ $new->id }}" tabindex="-1" role="dialog"
                                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                                                    id="exampleModalLabel">
                                                                    {{ trans('$new.delete') }}
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                        aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="{{ route('news.destroy', $new->id) }}" method="post">
                                                                    {{ method_field('Delete') }}
                                                                    @csrf
                                                                    {{ trans('newss.warning') }}
                                                                    <input id="id" type="hidden" name="id" class="form-control"
                                                                           value="{{ $new->id }}">
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                                data-dismiss="modal">{{ trans('$new.close') }}</button>
                                                                        <button type="submit"
                                                                                class="btn btn-danger">{{ trans('$new.submit') }}</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <script>
                                                    function destFunc() {
                                                        var r = confirm('are you sure');
                                                        if (r === true){
                                                            window.location.href ='{{route("news.destroy" , $new->id)}}';            }
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
