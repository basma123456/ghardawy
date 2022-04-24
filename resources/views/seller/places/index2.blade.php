@extends('layouts.seller_master')
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
                                <a href="{{route('places_sellers.create')}}" class="btn btn-success btn-sm" role="button"
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

                                            <th>{{trans('Students_trans.logo')}}</th>
                                            <th>{{trans('Students_trans.image')}}</th>
                                            <th>{{trans('Students_trans.image')}}</th>
                                            <th>{{trans('Students_trans.image')}}</th>
                                            <th>{{trans('Students_trans.image')}}</th>
                                            <th>{{trans('Students_trans.image')}}</th>

                                            <th  colspan="6">{{trans('Students_trans.menu')}}</th>

                                            <th>{{trans('Students_trans.status')}}</th>
                                            <th>{{trans('Students_trans.admin_or_super_admin')}}</th>
                                            <th>{{trans('Students_trans.likes')}}</th>
                                            <th>{{trans('Students_trans.unlikes')}}</th>

                                            <th>{{trans('Students_trans.Processes')}}</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @isset($place)
                                                <tr>
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
                                                           <td><img src="{{asset('assets/images_front/places/no_image.png')}}" class="p-1 bg-secondary" height="100" width="200" /></td>
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

                                                    <td>{{$place->status ===1 ? 'Active' : 'Un Active'}}</td>
                                                    <td>{{$place->admin_id > 0 ? 'Admin Is ' .$place->admin_id:(
                                                $place->super_admin_id > 0 ? 'Super Admin Is ' .$place->super_admin_id:'')
                                                }}</td>
                                                    <td>{{$place->likes}}</td>
                                                    <td>{{$place->unlikes}}</td>
                                                    <td>
                                                        <div class="dropdown show">
                                                            <a class="btn btn-success btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                العمليات
                                                            </a>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <a class="dropdown-item" href=""><i style="color: #ffc107" class="far fa-eye "></i>&nbsp;  عرض بيانات الطالب</a>
                                                                <a class="dropdown-item" href="{{route('branches.show' , $place->id)}}"><i style="color: #ffc107" class="far fa-eye "></i>&nbsp;  عرض الفروع </a>

                                                                <a class="dropdown-item" href="{{route('places_sellers.edit' , $place->id)}}"><i style="color:green" class="fa fa-edit"></i>&nbsp;  تعديل بيانات الطالب</a>
                                                                <a class="dropdown-item" href="{{route('places_sellers.add.regions' , $place->id)}}"><i style="color:green" class="fa fa-plus"></i>&nbsp;  اضافة فروع </a>
                                                                <button type="button" class="dropdown-item d-inline cursor" data-toggle="modal"
                                                                        data-target="#delete{{ $place->id }}"
                                                                        title="{{ trans('$place.Delete') }}"><i style="color: red" class="fa fa-trash"></i>&nbsp;  حذف بيانات الطالب</button>
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
                                                                    {{ trans('$place.delete') }}
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                        aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="{{ route('places_sellers.destroy', $place->id) }}" method="post">
                                                                    {{ method_field('Delete') }}
                                                                    @csrf
                                                                    {{ trans('newss.warning') }}
                                                                    <input id="id" type="hidden" name="id" class="form-control"
                                                                           value="{{ $place->id }}">
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                                data-dismiss="modal">{{ trans('$place.close') }}</button>
                                                                        <button type="submit"
                                                                                class="btn btn-danger">{{ trans('$place.submit') }}</button>
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
                                                            window.location.href ='{{route("places.destroy" , $place->id)}}';            }
                                                    }
                                                </script>
                                                <!-----------------------------delete modal end------------------------------------>

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
