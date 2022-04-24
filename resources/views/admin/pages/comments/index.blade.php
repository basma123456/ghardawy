@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    {{trans('admin_places.list_comments')}}
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    {{trans('admin_places.list_comments')}}
@stop
<!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <h2 class="elegantshadow text-center" >{{trans('admin_places.comments')}}</h2>

    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="col-xl-12 mb-30">
                        <div class="card card-statistics h-100">
                            <div class="card-body">
                                <br><br>
                                <div class="table-responsive">
                                    @if(isset($comments) && $comments->count() > 0)

                                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                           data-page-length="50"
                                           style="text-align: center">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>{{trans('admin_places.desc')}}</th>
                                            <th>{{trans('admin_places.user_id')}}</th>
                                            <th>{{trans('admin_places.place_id')}}</th>
                                            <th>{{trans('admin_places.likes')}}</th>
                                            <th>{{trans('admin_places.unlikes')}}</th>
                                            <th>{{trans('admin_places.created_at')}}</th>
                                            <th>{{trans('admin_places.Status')}}</th>

                                            <th>{{trans('admin_places.Processes')}}</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {{--   //here       main_p first_p second_p third_p image label comments_cat_id admin_id super_admin_id--}}

                                            @foreach($comments as $comment)
                                                <tr  class="{{$comment->status == (int)1?'opacity-bg-success text-dark' : 'opacity-bg-danger text-dark'}}">
                                                    <td></td>
                                                    <td>{{$comment->desc}}</td>
                                                    <td>{{$comment->user->name}}</td>
                                                    <td>{{$comment->place->title}}</td>
                                                    <td>{{$comment->likes}}</td>
                                                    <td>{{$comment->unlikes}}</td>
                                                    <td>{{$comment->created_at}}</td>

                                                    <td  class="text-white {{$comment->status == (int)1?'bg-success text-light' : 'bg-danger text-light'}} opacity_td">{{$comment->status ==(int)1 ? trans('admin_places.active') : trans('admin_places.deactive')}}</td>

                                                    <td>
                                                        <div class="dropdown show">
                                                            <a class="btn btn-success btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                {{trans('admin_places.Processes')}}
                                                            </a>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <button type="button" class="dropdown-item d-inline cursor" data-toggle="modal"
                                                                        data-target="#delete{{ $comment->id }}"
                                                                        title="{{trans('admin_places.delete')}}"><i style="color: red" class="fa fa-trash"></i>&nbsp;  {{trans('admin_places.delete')}} </button>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>



                                                <!----------------------------delete modal start------------------------------------->
                                                <!-- delete_modal_Grade -->
                                                <div class="modal fade" id="delete{{ $comment->id }}" tabindex="-1" role="dialog"
                                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                                                    id="exampleModalLabel">
                                                                    {{trans('admin_places.delete')}}
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                        aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="{{ route('comments.destroy', $comment->id) }}" method="post">
                                                                    {{ method_field('Delete') }}
                                                                    @csrf
                                                                    {{trans("admin_places.warning")}}
                                                                    <input id="id" type="hidden" name="id" class="form-control"
                                                                           value="{{ $comment->id }}">
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                                data-dismiss="modal"> {{trans('admin_places.close')}}</button>
                                                                        <button type="submit"
                                                                                class="btn btn-danger"> {{trans('admin_places.submit')}}</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <script>
                                                    function destFunc() {
                                                        var r = confirm('{{trans("admin_places.Are_you_sure_you_want_to_delete")}}');
                                                        if (r === true){
                                                            window.location.href ='{{route("comments.destroy" , $comment->id)}}';            }
                                                    }
                                                </script>
                                                <!-----------------------------delete modal end------------------------------------>

                                            @endforeach
                                            <div> {{$comments->links()}}</div>
                                        </tbody>
                                    </table>
                                    @else
                                        <h3>{{trans("admin_places.no_comments")}}</h3>
                                    @endif

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
