@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    {{trans('admin_apply.apply_index')}}
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    {{trans('admin_apply.list_students')}}
@stop
<!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <h2 class="elegantshadow text-center" > {{trans('admin_apply.application_for_places')}}</h2>

    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="col-xl-12 mb-30">
                        <div class="card card-statistics h-100">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                           data-page-length="50"
                                           style="text-align: center">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>{{trans('admin_apply.title')}}</th>
                                            <th>{{trans('admin_apply.description')}}</th>
                                            <th>{{trans('admin_apply.place_progress')}}</th>
                                            <th>{{trans('admin_apply.phone')}}</th>
                                            <th>{{trans('admin_apply.address')}}</th>
                                            <th>{{trans('admin_apply.seen')}}</th>
                                            <th>{{trans('admin_apply.status')}}</th>
                                            <th>{{trans('admin_apply.super_admin_id_or_admin_id')}}</th>
                                            <th>{{trans('admin_apply.Processes')}}</th>
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
                                                            {{trans('admin_apply.Processes')}}
                                                        </a>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                            <a class="dropdown-item" href="{{route('apply_place.show',$application->id)}}"><i style="color: #ffc107" class="far fa-eye "></i>{{trans('admin_apply.show')}}</a>
{{--                                                            <a class="dropdown-item" href="{{route('news.edit' , $application->id)}}"><i style="color:green" class="fa fa-edit"></i>&nbsp;  تعديل بيانات الطالب</a>--}}
                                                            <button type="button" class="dropdown-item d-inline cursor" data-toggle="modal"
                                                                    data-target="#delete{{ $application->id }}"
                                                                    title="{{trans('admin_apply.delete')}}"><i style="color: red" class="fa fa-trash"></i>&nbsp;  {{trans('admin_apply.delete')}}  </button>
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
                                                                    {{trans('admin_apply.delete')}}
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
                                                                    <input id="id" type="hidden" name="id" class="form-control"
                                                                           value="{{ $application->id }}">
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                                data-dismiss="modal">{{trans('admin_apply.close')}}</button>
                                                                        <button type="submit"
                                                                                class="btn btn-danger">{{trans('admin_apply.submit')}}</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <script>
                                                    function destFunc() {
                                                        var r = confirm("trans('admin_apply.Are_you_sure_you_want_to_delete')");
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
