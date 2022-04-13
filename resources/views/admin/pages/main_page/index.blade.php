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

    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="col-xl-12 mb-30">
                        <div class="card card-statistics h-100">
                            <div class="card-body">
                                <a href="{{route('main.create')}}" class="btn btn-success btn-sm" role="button"
                                   aria-pressed="true">{{trans('main_trans.add_student')}}</a><br><br>
                                <div class="table-responsive">
                                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                           data-page-length="50"
                                           style="text-align: center">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>{{trans('Students_trans.title')}}</th>
                                            <th>{{trans('Students_trans.about_page')}}</th>

                                            <th>{{trans('Students_trans.image')}}</th>
                                            <th>{{trans('Students_trans.image')}}</th>
                                            <th>{{trans('Students_trans.image')}}</th>
                                            <th>{{trans('Students_trans.image')}}</th>
                                            <th>{{trans('Students_trans.image')}}</th>
                                            <th>{{trans('Students_trans.image')}}</th>
                                            <th>{{trans('Students_trans.image')}}</th>

                                            <th>{{trans('Students_trans.menu')}}</th>

                                            <th>{{trans('Students_trans.status')}}</th>
                                            <th>{{trans('Students_trans.admin_or_super_admin')}}</th>
                                            <th>{{trans('Students_trans.likes')}}</th>
                                            <th>{{trans('Students_trans.unlikes')}}</th>

                                            <th>{{trans('Students_trans.Processes')}}</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @isset($mains)
                                            @foreach($mains as $main)
                                                <tr>
                                                    <td></td>
                                                    <td>{{$main->title}}</td>
                                                    <td>{{$main->address}}</td>
                                                    @if(is_array($main))
                                                        @foreach($main as $img)
                                                            <td><img src="{{asset('assets/images_front/places/')}}/{{$img}}" class="p-1" height="100" width="200" /></td>
                                                        @endforeach
                                                    @endif

                                                    <td>
                                                        @if(is_array($main))
                                                            @foreach($main as $oneMenu)
                                                                <img src="{{asset('assets/images_front/places/')}}/{{$oneMenu}}" class="p-1 py-2" height="100" width="200" />
                                                            @endforeach
                                                        @endif
                                                    </td>

                                                    <td>{{$main->status ===1 ? 'Active' : 'Un Active'}}</td>
                                                    <td>{{$main->admin_id > 0 ? 'Admin Is ' .$main->admin_id:(
                                                $main->super_admin_id > 0 ? 'Super Admin Is ' .$main->super_admin_id:'')
                                                }}</td>
                                                    <td>{{$main->likes}}</td>
                                                    <td>{{$main->unlikes}}</td>
                                                    <td>
                                                        <div class="dropdown show">
                                                            <a class="btn btn-success btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                العمليات
                                                            </a>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <a class="dropdown-item" href=""><i style="color: #ffc107" class="far fa-eye "></i>&nbsp;  عرض بيانات الطالب</a>
                                                                <a class="dropdown-item" href="{{route('branches.show' , $main->id)}}"><i style="color: #ffc107" class="far fa-eye "></i>&nbsp;  عرض الفروع </a>

                                                                <a class="dropdown-item" href="{{route('places.edit' , $main->id)}}"><i style="color:green" class="fa fa-edit"></i>&nbsp;  تعديل بيانات الطالب</a>
                                                                <a class="dropdown-item" href="{{route('places.add.regions' , $main->id)}}"><i style="color:green" class="fa fa-plus"></i>&nbsp;  اضافة فروع </a>
                                                                <button type="button" class="dropdown-item d-inline cursor" data-toggle="modal"
                                                                        data-target="#delete{{ $main->id }}"
                                                                        title="{{ trans('$main.Delete') }}"><i style="color: red" class="fa fa-trash"></i>&nbsp;  حذف بيانات الطالب</button>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>



                                                <!----------------------------delete modal start------------------------------------->
                                                <!-- delete_modal_Grade -->
                                                <div class="modal fade" id="delete{{ $main->id }}" tabindex="-1" role="dialog"
                                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                                                    id="exampleModalLabel">
                                                                    {{ trans('$main.delete') }}
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                        aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="{{ route('places.destroy', $main->id) }}" method="post">
                                                                    {{ method_field('Delete') }}
                                                                    @csrf
                                                                    {{ trans('newss.warning') }}
                                                                    <input id="id" type="hidden" name="id" class="form-control"
                                                                           value="{{ $main->id }}">
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                                data-dismiss="modal">{{ trans('$main.close') }}</button>
                                                                        <button type="submit"
                                                                                class="btn btn-danger">{{ trans('$main.submit') }}</button>
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
                                                            window.location.href ='{{route("places.destroy" , $main->id)}}';            }
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
