@extends('layouts.seller_master')
@section('css')
    @toastr_css
@section('title')
    {{trans('sellers_places.show_branches')}}
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
                        <div class="card card-statistics h-100">
                            <div class="card-body">
{{--                                <a href="{{route('places.create')}}" class="btn btn-success btn-sm" role="button"--}}
{{--                                   aria-pressed="true">{{trans('sellers_places.add_branch')}}</a><br><br>--}}
                                <div class="table-responsive">
                                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                           data-page-length="50"
                                           style="text-align: center">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>{{trans('sellers_places.place')}}</th>
                                            <th>{{trans('sellers_places.region')}}</th>
                                            <th>{{trans('sellers_places.admin_or_super_admin')}}</th>
                                            <th>{{trans('sellers_places.desc')}}</th>
                                            <th>{{trans('sellers_places.phone')}}</th>

                                            <th>{{trans('sellers_places.Processes')}}</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @isset($placeRegions)
                                            @foreach($placeRegions as $placeRegion)
                                                <tr>
                                                    <td></td>
                                                    <td>{{$placeRegion->places->title }}</td>
                                                    <td>{{$placeRegion->regions->government }} , {{$placeRegion->regions->city}} , {{$placeRegion->regions->district}}</td>


                                                    <td>{{$placeRegion->admin_id > 0 ? trans('sellers_places.admin_is') . ' ' .$placeRegion->admin_id:(
                                                $placeRegion->super_admin_id > 0 ? trans('sellers_places.super_admin_is') . ' ' .$placeRegion->super_admin_id:'')
                                                }}</td>
                                                    <td>{{$placeRegion->desc}}</td>
                                                    <td>{{$placeRegion->phone}}</td>
                                                    <td>
                                                        <div class="dropdown show">
                                                            <a class="btn btn-success btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                العمليات
                                                            </a>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <a class="dropdown-item" href="{{route('edit.branch.seller' , [$place , $placeRegion->id])}}"><i style="color: #ffc107" class="far fa-eye "></i>&nbsp; {{ trans('sellers_places.update_branch') }}</a>

                                                                <button type="button" class="dropdown-item d-inline cursor" data-toggle="modal"
                                                                        data-target="#delete{{ $placeRegion->id }}"
                                                                        title="{{ trans('sellers_places.delete') }}"><i style="color: red" class="fa fa-trash"></i>&nbsp;  {{ trans('sellers_places.delete') }}</button>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>



                                                <!----------------------------delete modal start------------------------------------->
                                                <!-- delete_modal_Grade -->
                                                <div class="modal fade" id="delete{{ $placeRegion->id }}" tabindex="-1" role="dialog"
                                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                                                    id="exampleModalLabel">
                                                                    {{ trans('sellers_places.delete') }}
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                        aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="{{ route('branch.destroy.seller', $placeRegion->id) }}" method="post">
                                                                    @csrf
                                                                    {{ trans('sellers_places.warning') }}
                                                                    <input id="id" type="hidden" name="id" class="form-control"
                                                                           value="{{ $placeRegion->id }}">
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                                data-dismiss="modal">{{ trans('sellers_places.close') }}</button>
                                                                        <button type="submit"
                                                                                class="btn btn-danger">{{ trans('sellers_places.submit') }}</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <script>
                                                    function destFunc() {
                                                        var r = confirm("{{ trans('sellers_places.Are_you_sure_you_want_to_delete') }}");
                                                        if (r === true){
                                                            window.location.href ='{{route("places.destroy" , $placeRegion->id)}}';            }
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
