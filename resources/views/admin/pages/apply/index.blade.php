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
    <h2 class="elegantshadow text-center" >Applications For Places</h2>

    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="col-xl-12 mb-30">
                        <div class="card card-statistics h-100">
                            <div class="card-body">
                                <a href="{{route('apply_place.create')}}" class="btn btn-success btn-sm" role="button"
                                   aria-pressed="true">{{trans('main_trans.add_student')}}</a><br><br>
                                <div class="table-responsive">
                                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                           data-page-length="50"
                                           style="text-align: center">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>{{trans('Students_trans.title')}}</th>
                                            <th>{{trans('Students_trans.description')}}</th>
                                            <th>{{trans('Students_trans.place_progress')}}</th>
                                            <th>{{trans('Students_trans.phone')}}</th>
                                            <th>{{trans('Students_trans.address')}}</th>
                                            <th>{{trans('Students_trans.seen')}}</th>
                                            <th>{{trans('Students_trans.status')}}</th>
                                            <th>{{trans('Students_trans.super_admin_id_or_admin_id')}}</th>
                                            <th>{{trans('Students_trans.Processes')}}</th>
                                        </tr>
                                        </thead>
                                        <tbody>
 {{--   //here       main_p first_p second_p third_p image label news_cat_id admin_id super_admin_id--}}

                                        @isset($applications)
                                            @foreach($applications as $application)
                                                <tr>
                                                    <td></td>
                                                    <td>{{$application->title}}</td>
                                                    <td>{{$application->description}}</td>
                                                    <td>{{$application->place_progress}}</td>
                                                    <td>{{$application->phone}}</td>
                                                    <td>{{$application->address}}</td>
                                                    <td>{{$application->seen}}</td>
                                                    <td>{{$application->status}}</td>
                                                    <td>{{$application->admin_id > 0 ? 'Admin Is ' .$application->admin_id:(
                                                    $application->super_admin_id > 0 ? 'Super Admin Is ' .$application->super_admin_id:'')
                                                    }}</td>

                                                    <td>
                                                    <div class="dropdown show">
                                                        <a class="btn btn-success btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            العمليات
                                                        </a>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                            <a class="dropdown-item" href=""><i style="color: #ffc107" class="far fa-eye "></i>&nbsp;  عرض بيانات الطالب</a>
                                                            <a class="dropdown-item" href="{{route('news.edit' , $application->id)}}"><i style="color:green" class="fa fa-edit"></i>&nbsp;  تعديل بيانات الطالب</a>
                                                            <button type="button" class="dropdown-item d-inline cursor" data-toggle="modal"
                                                                    data-target="#delete{{ $application->id }}"
                                                                    title="{{ trans('$application.Delete') }}"><i style="color: red" class="fa fa-trash"></i>&nbsp;  حذف بيانات الطالب</button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>



                                                <!----------------------------delete modal start------------------------------------->
                                                <!-- delete_modal_Grade -->
                                                <div class="modal fade" id="delete{{ $application->id }}" tabindex="-1" role="dialog"
                                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                                                    id="exampleModalLabel">
                                                                    {{ trans('$application.delete') }}
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                        aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="{{ route('apply_place.destroy', $application->id) }}" method="post">
                                                                    {{ method_field('Delete') }}
                                                                    @csrf
                                                                    {{ trans('newss.warning') }}
                                                                    <input id="id" type="hidden" name="id" class="form-control"
                                                                           value="{{ $application->id }}">
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                                data-dismiss="modal">{{ trans('$application.close') }}</button>
                                                                        <button type="submit"
                                                                                class="btn btn-danger">{{ trans('$application.submit') }}</button>
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
                                                            window.location.href ='{{route("apply_place.destroy" , $application->id)}}';            }
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