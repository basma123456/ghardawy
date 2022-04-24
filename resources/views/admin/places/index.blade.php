@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    {{trans('admin_places.list_places')}}
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    {{trans('admin_places.list_students')}}
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
                                <a href="{{route('places.create')}}" class="btn btn-success btn-sm" role="button"
                                   aria-pressed="true">{{trans('admin_places.add_place')}}</a><br><br>
                                <div class="table-responsive">
                                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                           data-page-length="50"
                                           style="text-align: center">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>{{trans('admin_places.title')}}</th>
                                            <th>{{trans('admin_places.about_page')}}</th>

                                            <th>{{trans('admin_places.logo')}}</th>
                                            <th>{{trans('admin_places.image')}}</th>
                                            <th>{{trans('admin_places.image')}}</th>
                                            <th>{{trans('admin_places.image')}}</th>
                                            <th>{{trans('admin_places.image')}}</th>
                                            <th>{{trans('admin_places.image')}}</th>

                                            <th  colspan="6">{{trans('admin_places.menu')}}</th>

                                            <th>{{trans('admin_places.status')}}</th>
                                            <th>{{trans('admin_places.admin_or_super_admin')}}</th>
                                            <th>{{trans('admin_places.likes')}}</th>
                                            <th>{{trans('admin_places.unlikes')}}</th>

                                            <th>{{trans('admin_places.Processes')}}</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @isset($places)
                                            @foreach($places as $place)
                                                <tr  class="{{$place->status == (int)1?'opacity-bg-success text-dark' : 'opacity-bg-danger text-dark'}}">
                                                    <td></td>
                                                    <td>{{$place->title}}</td>
                                                    <td>{{$place->address}}</td>
                                                    @if(is_array($place->photos()))
                                                       @isset($place->photos()[0])
                                                        <td><img src="{{asset('assets/images_front/places/')}}/{{$place->photos()[0]}}" class="p-1 bg-secondary" height="100" width="200" /></td>
                                                       @else
                                                        <td><img src="{{asset('assets/images_front/places/no_image.png')}}" class="p-1 bg-secondary" height="100" width="200" /></td>
                                                        @endisset
                                                        <!---------------------------------------------->
                                                       @isset($place->photos()[1])
                                                           <td><img src="{{asset('assets/images_front/places/')}}/{{$place->photos()[1]}}" class="p-1 bg-secondary" height="100" width="200" /></td>
                                                       @else
                                                           <td><img src="{{asset('assets/images_front/places/no_image.png')}}" class="p-1 bg-secondary" height="100" width="200" /></td>
                                                       @endisset

                                                       <!---------------------------------------------->

                                                       @isset($place->photos()[2])
                                                           <td><img src="{{asset('assets/images_front/places/')}}/{{$place->photos()[2]}}" class="p-1 bg-secondary" height="100" width="200" /></td>
                                                       @else
                                                           <td><img src="{{asset('assets/images_front/places/no_image.png')}}" class="p-1 bg-secondary" height="100" width="200" /></td>
                                                       @endisset
                                                       <!---------------------------------------------->

                                                       @isset($place->photos()[3])
                                                           <td><img src="{{asset('assets/images_front/places/')}}/{{$place->photos()[3]}}" class="p-1 bg-secondary" height="100" width="200" /></td>
                                                       @else
                                                           <td><img src="{{asset('assets/images_front/places/no_image.png')}}" class="p-1 bg-secondary" height="100" width="200" /></td>
                                                       @endisset
                                                       <!---------------------------------------------->

                                                       @isset($place->photos()[4])
                                                           <td><img src="{{asset('assets/images_front/places/')}}/{{$place->photos()[4]}}" class="p-1 bg-secondary" height="100" width="200" /></td>
                                                       @else
                                                           <td><img src="{{asset('fassets/images_front/places/no_image.png')}}" class="p-1 bg-secondary" height="100" width="200" /></td>
                                                       @endisset
                                                       <!---------------------------------------------->


                                                       @isset($place->photos()[5])
                                                           <td><img src="{{asset('assets/images_front/places/')}}/{{$place->photos()[5]}}" class="p-1 bg-secondary" height="100" width="200" /></td>
                                                       @else
                                                           <td><img src="{{asset('assets/images_front/places/no_image.png')}}" class="p-1 bg-secondary" height="100" width="200" /></td>
                                                       @endisset


                                                    @endif

                                                    <td colspan="6" >
                                                    @if(is_array($place->menu()))
                                                        @foreach($place->menu() as $oneMenu)
                                                            <img src="{{asset('assets/images_front/places/')}}/{{$oneMenu}}" class="p-1 py-2" height="100" width="200" />
                                                        @endforeach
                                                    @endif
                                                    </td>

                                                    <td >{{$place->status ===1 ? trans('admin_places.Active') : trans('admin_places.Un_Active')}}</td>
                                                    <td>{{$place->admin_id > 0 ? trans('admin_places.Admin_Is') . ' ' .$place->admin_id:(
                                                $place->super_admin_id > 0 ? trans('admin_places.super_Admin_Is') . ' ' .$place->super_admin_id:'')
                                                }}</td>
                                                    <td>{{$place->likes}}</td>
                                                    <td>{{$place->unlikes}}</td>
                                                    <td>
                                                        <div class="dropdown show">
                                                            <a class="btn btn-success btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                {{trans('admin_places.processes')}}
                                                            </a>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <a class="dropdown-item" href="{{route('places.show' , $place->id)}}"><i style="color: #ffc107" class="far fa-eye "></i>&nbsp;{{trans('admin_places.show_place')}}</a>
                                                                <a class="dropdown-item" href="{{route('branches.show' , $place->id)}}"><i style="color: #ffc107" class="far fa-eye "></i>&nbsp;  {{ trans('admin_places.show_branches')}} </a>

                                                                <a class="dropdown-item" href="{{route('places.edit' , $place->id)}}"><i style="color:green" class="fa fa-edit"></i>&nbsp; {{ trans('admin_places.edit_place')}} </a>
                                                                <a class="dropdown-item" href="{{route('places.add.regions' , $place->id)}}"><i style="color:green" class="fa fa-plus"></i>&nbsp;   {{ trans('admin_places.add_branch')}}</a>
                                                               <a class="dropdown-item"  href="{{url(route('get.comments' , $place->id))}}"><i style="color: #ffc107" class="far fa-eye "></i>&nbsp;{{ trans('admin_places.comments')}}</a>
                                                                <button type="button" class="dropdown-item d-inline cursor" data-toggle="modal"
                                                                        data-target="#delete{{ $place->id }}"
                                                                        title="{{ trans('admin_places.delete_place')}}"><i style="color: red" class="fa fa-trash"></i>&nbsp;   {{ trans('admin_places.delete_place')}}</button>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>



                                                <!----------------------------delete modal start------------------------------------->
                                                <!-- delete_modal_Grade -->
                                                <div class="modal fade" id="delete{{ $place->id }}" tabindex="-1" role="dialog"
                                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                                                    id="exampleModalLabel">
                                                                    {{ trans('admin_places.delete_place')}}
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                        aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="{{ route('places.destroy', $place->id) }}" method="post">
                                                                    {{ method_field('Delete') }}
                                                                    @csrf

                                                                    <input id="id" type="hidden" name="id" class="form-control"
                                                                           value="{{ $place->id }}">
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                                data-dismiss="modal"> {{ trans('admin_places.close')}}</button>
                                                                        <button type="submit"
                                                                                class="btn btn-danger"> {{ trans('admin_places.submit')}}</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <script>
                                                    function destFunc() {
                                                        var r = confirm("{{ trans('admin_places.Are_you_sure_you_want_to_delete')}}");
                                                        if (r === true){
                                                            window.location.href ='{{route("places.destroy" , $place->id)}}';            }
                                                    }
                                                </script>
                                                <!-----------------------------delete modal end------------------------------------>

                                        @endforeach
                                        {{$places->links()}}
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
