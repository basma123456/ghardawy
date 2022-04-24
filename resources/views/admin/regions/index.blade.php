@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    {{trans('admin_regions.list_regions')}}
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    {{trans('admin_regions.list_students')}}
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
                                <a href="{{route('regions.create')}}" class="btn btn-success btn-sm" role="button"
                                   aria-pressed="true">{{trans('admin_regions.add_region')}}</a><br><br>
                                <div class="table-responsive">
                                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                           data-page-length="50"
                                           style="text-align: center">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>{{trans('admin_regions.government')}}</th>

                                            <th>{{trans('admin_regions.city')}}</th>
                                            <th>{{trans('admin_regions.district')}}</th>
                                            <th>{{trans('admin_regions.desc')}}</th>

                                            <th>{{trans('admin_regions.admin_or_super_admin')}}</th>


                                            <th>{{trans('admin_regions.Processes')}}</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @isset($regions)
                                            @foreach($regions as $region)
                                                <tr>
                                                    <td></td>
                                                    <td>{{$region->government}}</td>
                                                    <td>{{$region->city}}</td>


                                                    <td>{{$region->district}}</td>
                                                    <td>{{$region->desc}}</td>

                                                    <td>{{$region->admin_id > 0 ? trans('admin_regions.Admin_Is') . ' ' .$region->admin_id:(
                                                $region->super_admin_id > 0 ? trans('admin_regions.Super_Admin_Is') . ' ' .$region->super_admin_id:'')}}</td>
                                                    <td>
                                                        <div class="dropdown show">
                                                            <a class="btn btn-success btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                {{trans('admin_regions.processes')}}
                                                            </a>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <a class="dropdown-item" href="{{route('regions.edit' , $region->id)}}"><i style="color:green" class="fa fa-edit"></i>&nbsp;  {{trans('admin_regions.edit')}}</a>
                                                                <button type="button" class="dropdown-item d-inline cursor" data-toggle="modal"
                                                                        data-target="#delete{{ $region->id }}"
                                                                        title="{{trans('admin_regions.delete')}}"><i style="color: red" class="fa fa-trash"></i>&nbsp; {{trans('admin_regions.delete')}}</button>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>



                                                <!----------------------------delete modal start------------------------------------->
                                                <!-- delete_modal_Grade -->
                                                <div class="modal fade" id="delete{{ $region->id }}" tabindex="-1" role="dialog"
                                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                                                    id="exampleModalLabel">
                                                                    {{trans('admin_regions.delete')}}
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                        aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="{{ route('regions.destroy', $region->id) }}" method="post">
                                                                    {{ method_field('Delete') }}
                                                                    @csrf
                                                                    {{ trans('admin_regions.warning') }}
                                                                    <input id="id" type="hidden" name="id" class="form-control"
                                                                           value="{{ $region->id }}">
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                                data-dismiss="modal">{{trans('admin_regions.close')}}</button>
                                                                        <button type="submit"
                                                                                class="btn btn-danger">{{trans('admin_regions.submit')}}</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <script>
                                                    function destFunc() {
                                                        var r = confirm("{{trans('admin_regions.Are_you_sure_you_want_to_delete')}}");
                                                        if (r === true){
                                                            window.location.href ='{{route("regions.destroy" , $region->id)}}';            }
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
