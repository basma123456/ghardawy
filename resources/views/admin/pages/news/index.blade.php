@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    {{trans('admin_news.list_news')}}
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    {{trans('admin_news.list_news')}}
@stop
<!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <h2 class="elegantshadow text-center" >{{trans('admin_news.news')}}</h2>

    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="col-xl-12 mb-30">
                        <div class="card card-statistics h-100">
                            <div class="card-body">
                                <a href="{{route('news.create')}}" class="btn btn-success btn-sm" role="button"
                                   aria-pressed="true">{{trans('admin_news.add_news')}}</a><br><br>
                                <div class="table-responsive">
                                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                           data-page-length="50"
                                           style="text-align: center">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>{{trans('admin_news.label')}}</th>
                                            <th>{{trans('admin_news.main_p')}}</th>
                                            <th>{{trans('admin_news.first_p')}}</th>
                                            <th>{{trans('admin_news.second_p')}}</th>
                                            <th>{{trans('admin_news.third_p')}}</th>
                                            <th>{{trans('admin_news.image')}}</th>
                                            <th>{{trans('admin_news.news_cat_id')}}</th>
                                            <th>{{trans('admin_news.super_admin_id_or_admin_id')}}</th>
                                            <th>{{trans('admin_news.Status')}}</th>
                                            <th>{{trans('admin_news.Processes')}}</th>
                                        </tr>
                                        </thead>
                                        <tbody>
 {{--   //here       main_p first_p second_p third_p image label news_cat_id admin_id super_admin_id--}}

                                        @isset($news)
                                            @foreach($news as $new)
                                                <tr  class="{{$new->status == (int)1?'opacity-bg-success text-dark' : 'opacity-bg-danger text-dark'}}">
                                                    <td></td>
                                                    <td>{{$new->label}}</td>
                                                    <td>{{$new->main_p}}</td>
                                                    <td>{{$new->first_p}}</td>
                                                    <td>{{$new->second_p}}</td>
                                                    <td>{{$new->third_p}}</td>
                                                    <td><img width="150" height="100" src="{{asset('assets/images_front/news/')}}/{{$new->image}}"></td>

                                                    <td>{{$new->newsCats->title}}</td>
                                                    <td>{{$new->admin_id > 0 ?  trans('admin_news.admin_is') . ' '.$new->admin_id:(
                                                    $new->super_admin_id > 0 ?  trans('admin_news.super_admin_is') . ' ' .$new->super_admin_id:'')
                                                    }}</td>
                                                    <td  class="text-white {{$new->status == (int)1?'bg-success text-light' : 'bg-danger text-light'}} opacity_td">{{$new->status ==(int)1 ? trans('admin_news.active') : trans('admin_news.deactive')}}</td>

                                                    <td>
                                                    <div class="dropdown show">
                                                        <a class="btn btn-success btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            {{trans('admin_news.Processes')}}
                                                        </a>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
{{--                                                            <a class="dropdown-item" href=""><i style="color: #ffc107" class="far fa-eye "></i>&nbsp;      {{trans('admin_news.show')}} </a>--}}
                                                            <a class="dropdown-item" href="{{route('news.edit' , $new->id)}}"><i style="color:green" class="fa fa-edit"></i>&nbsp;  {{trans('admin_news.edit')}} </a>
                                                            <button type="button" class="dropdown-item d-inline cursor" data-toggle="modal"
                                                                    data-target="#delete{{ $new->id }}"
                                                                    title="{{trans('admin_news.delete')}}"><i style="color: red" class="fa fa-trash"></i>&nbsp;  {{trans('admin_news.delete')}} </button>
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
                                                                    {{trans('admin_news.delete')}}
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

                                                                    <input id="id" type="hidden" name="id" class="form-control"
                                                                           value="{{ $new->id }}">
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                                data-dismiss="modal"> {{trans('admin_news.close')}}</button>
                                                                        <button type="submit"
                                                                                class="btn btn-danger"> {{trans('admin_news.submit')}}</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <script>
                                                    function destFunc() {
                                                        var r = confirm('{{trans("admin_news.Are_you_sure_you_want_to_delete")}}');
                                                        if (r === true){
                                                            window.location.href ='{{route("news.destroy" , $new->id)}}';            }
                                                    }
                                                </script>
                                                <!-----------------------------delete modal end------------------------------------>

                                        @endforeach
                                       <div> {{$news->links()}}</div>
                                        @endisset
                                        </tbody>
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
