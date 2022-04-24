@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    {{trans('admin_sellers.list_sellers')}}
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
                                <a href="{{route('sellers.create')}}" class="btn btn-success btn-sm" role="button"
                                   aria-pressed="true">{{trans('admin_sellers.add_seller')}}</a><br><br>
                                <div class="table-responsive">
                                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                           data-page-length="50"
                                           style="text-align: center">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>{{trans('admin_sellers.name')}}</th>
                                            <th>{{trans('admin_sellers.email')}}</th>
                                            <th>{{trans('admin_sellers.role')}}</th>
                                            <th>{{trans('admin_sellers.status')}}</th>
                                            <th>{{trans('admin_sellers.created_at')}}</th>
                                            <th>{{trans('admin_sellers.updated_at')}}</th>
                                            <th>{{trans('admin_sellers.Processes')}}</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @isset($sellers)
                                            @foreach($sellers as $seller)
                                        <tr  class="{{$seller->status == (int)1?'opacity-bg-success text-dark' : 'opacity-bg-danger text-dark'}} " >
                                            <td></td>
                                            <td>{{$seller->name}}</td>
                                            <td>{{$seller->email}}</td>
                                            <td>{{$seller->role_id}}</td>
                                            <td  class="{{$seller->status == (int)1?'bg-success text-light' : 'bg-danger text-light'}} opacity_td">{{$seller->status == (int)1? trans('admin_sellers.active') :  trans('admin_sellers.deactive')}}</td>
                                            <td>{{$seller->created_at}}</td>
                                            <td>{{$seller->updated_at}}</td>
                                            <td>
                                                <div class="dropdown show">
                                                    <a class="btn btn-success btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
{{--                                                        {{trans('admin_sellers.processes')}}--}}
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                        <a class="dropdown-item" href="{{route('sellers.edit' , $seller->id)}}"><i style="color:green" class="fa fa-edit"></i>&nbsp;{{trans('admin_sellers.edit_seller')}}</a>

                                                        <button type="button" class="dropdown-item d-inline cursor" data-toggle="modal"
                                                                data-target="#delete{{ $seller->id }}"
                                                                title="{{trans('admin_sellers.delete')}}"><i style="color: red" class="fa fa-trash"></i>{{trans('admin_sellers.delete')}}</button>

                                                    </div>
                                                </div>
                                            </td>
                                        </tr>



                                        <!----------------------------delete modal start------------------------------------->
                                        <!-- delete_modal_Grade -->
                                        <div class="modal fade" id="delete{{ $seller->id }}" tabindex="-1" role="dialog"
                                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                                            id="exampleModalLabel">
                                                            {{trans('admin_sellers.delete')}}
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('sellers.destroy', $seller->id) }}" method="post">
                                                            {{ method_field('Delete') }}
                                                            @csrf
                                                            {{trans('admin_sellers.warning')}}
                                                            <input id="id" type="hidden" name="id" class="form-control"
                                                                   value="{{ $seller->id }}">
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">{{trans('admin_sellers.close')}}</button>
                                                                <button type="submit"
                                                                        class="btn btn-danger">{{trans('admin_sellers.submit')}}</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <script>
                                            function destFunc() {
                                                var r = confirm("{{trans('admin_sellers.Are_you_sure_you_want_to_delete')}}");
                                                if (r === true){
                                                    window.location.href ='{{route("sellers.destroy" , $seller->id)}}';            }
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

    <!-- pagination links -->
    <div class="text-left margin-auto d-flex justify-content-center">
        {{$sellers->links()}}
    </div>
    <!-- end pagination links -->




    <!-- row closed -->
@endsection
@section('js')
    @toastr_js
    @toastr_render
@endsection
