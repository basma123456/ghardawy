@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    {{trans('admin_additions.additions')}}
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
                                <a href="{{route('additions.create')}}" class="btn btn-success btn-sm" role="button"
                                   aria-pressed="true">{{trans('admin_additions.add_addition')}}</a><br><br>
                                <div class="table-responsive">
                                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                           data-page-length="50"
                                           style="text-align: center">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>{{trans('admin_additions.title')}}</th>
                                            <th>{{trans('admin_additions.desc')}}</th>

                                            <th>{{trans('admin_additions.type')}}</th>

                                            <th>{{trans('admin_additions.place')}}</th>

                                            <th>{{trans('admin_additions.status')}}</th>
                                            <th>{{trans('admin_additions.admin_or_super_admin')}}</th>

                                            <th>{{trans('admin_additions.Processes')}}</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @isset($additionss)
                                            @foreach($additionss as $additions)
                                                <tr  class="{{$additions->status == (int)1?'opacity-bg-success text-dark' : 'opacity-bg-danger text-dark'}} " >
                                                    <td></td>
                                                    <td>{{$additions->title}}</td>
                                                    <td>{{$additions->desc}}</td>
                                                    <td>{{$additions->type}}</td>

                                                    <td>{{$additions->place_id }}</td>

                                                    <td class="{{$additions->status == (int)1?'bg-success text-light' : 'bg-danger text-light'}} opacity_td">{{$additions->status ===1 ? trans('admin_additions.active') : trans('admin_additions.deactive')}}</td>
                                                    <td>{{$additions->admin_id > 0 ?  trans('admin_additions.admin_is') . ' ' .$additions->admin_id:(
                                                $additions->super_admin_id > 0 ? trans('admin_additions.super_admin_is') . ' ' .$additions->super_admin_id:'')
                                                }}</td>
                                                    <td>
                                                        <div class="dropdown show">
                                                            <a class="btn btn-success btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                {{trans('admin_additions.operations')}}
                                                            </a>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <button type="button" class="dropdown-item d-inline cursor" data-toggle="modal"
                                                                        data-target="#delete{{ $additions->id }}"
                                                                        title="{{trans('admin_additions.delete')}}"><i style="color: red" class="fa fa-trash"></i>&nbsp;  {{trans('admin_additions.delete')}}</button>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>



                                                <!----------------------------delete modal start------------------------------------->
                                                <!-- delete_modal_Grade -->
                                                <div class="modal fade" id="delete{{ $additions->id }}" tabindex="-1" role="dialog"
                                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                                                    id="exampleModalLabel">
                                                                    {{trans('admin_additions.delete')}}
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                        aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="{{ route('additions.destroy', $additions->id) }}" method="post">
                                                                    {{ method_field('Delete') }}
                                                                    @csrf

                                                                    <input id="id" type="hidden" name="id" class="form-control"
                                                                           value="{{ $additions->id }}">
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                                data-dismiss="modal">{{trans('admin_additions.close')}}</button>
                                                                        <button type="submit"
                                                                                class="btn btn-danger">{{ trans('$additions.submit') }}</button>
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
                                                            window.location.href ='{{route("places.destroy" , $additions->id)}}';            }
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
                   @isset($additions) {{$additionss->links()}} @endisset

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
