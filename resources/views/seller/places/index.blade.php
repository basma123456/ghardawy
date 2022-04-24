@extends('layouts.seller_master')
@section('css')
    <style>

        .column {
            float: left;
            width: 33.3%;
            margin-bottom: 16px;
            padding: 0 8px;
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            margin: 8px;
        }

        .about-section {
            padding: 50px;
            text-align: center;
            /*background-color: #17a2b8;*/
            background-color: rgba(7, 111, 248 , 0.1);

            color: white;
        }

        .container {
            padding: 0 16px;
        }

        .container::after, .row::after {
            content: "";
            clear: both;
            display: table;
        }

        .title {
            color: grey;
        }

        .button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
        }

        .button:hover {
            background-color: #555;
        }

        @media screen and (max-width: 650px) {
            .column {
                width: 100%;
                display: block;
            }
        }

        .ImgClass{
            max-height: 40em;
            object-fit: cover;
        }
        .img-container{
            height: 40em;
            background-color: white;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            background-size: cover;
        }
        .borderRadius {
            /*border-radius : 100px;*/
            /*height: 5em;*/
            /*width: 10em;*/
            width:100%;
            padding:10px;
            font-weight:bold;

        }
    </style>
    @toastr_css
@section('title')
    {{trans('sellers_places.place')}}
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
    {{--    {{dd($how_we_work_paragraphs)}}--}}
    <!-- row -->
    <div class="about-section">
        <h2>{{trans('sellers_places.place')}}</h2>
    </div>
@isset($place)
    <!--------------------test ------------------------------->

    <!-------------------------end test ------------------------>

    <br>
    <br>











    <!-------------------------->


    <div class="container">
        <div class="dropdown">
            <button class="btn btn-lg btn-info dropdown-toggle" type="button" data-toggle="dropdown">{{trans('sellers_places.processes')}}
                <span class="caret"></span></button>
            <ul class="dropdown-menu">
                <li><a   class="borderRadius btn btn-sm btn-light d-inline-block" href="{{url(route('places_sellers.edit' , $place->id))}}"><i style="color:green" class="fa fa-edit"></i>{{trans('sellers_places.edit_place')}}</a></li>
                <li><a class="borderRadius btn btn-sm btn-light d-inline-block" href="{{url(route('places_sellers.create'))}}">{{trans('sellers_places.add_new_place')}}</a></li>
                <li> <a  class="borderRadius btn btn-sm btn-light d-inline-block" href="{{url(route('add.branch.seller', $place->id))}}"><i style="color:green" class="fa fa-plus"></i>{{trans('sellers_places.add_new_branch')}}</a></li>
                <li><a class="borderRadius btn btn-sm btn-light d-inline-block" href="{{url(route('show.branch.seller' , $place->id))}}">{{trans('sellers_places.show_branches')}}</a></li>
{{--                <li> <button type="button" class="bg-light d-inline cursor borderRadius btn btn-sm" data-toggle="modal"--}}
{{--                             data-target="#delete{{ $place->id }}"--}}
{{--                             title="{{trans('sellers_places.delete')}}"><i style="color: red" class="fa fa-trash"></i>{{trans('sellers_places.delete')}}</button></li>--}}
            </ul>
        </div>
    </div>
    <!------------------------->
    <br>
    <br>

    <div class="row text-center">
        {{--        <div  class="column">--}}
        {{--        </div>--}}

        {{--        <div  class="column">--}}
        <div class="offset-1 col-10">
            <div class="card">
                        <div>
                            <img class="best_places w-100 img-container" src="{{asset('assets/images_front/places/')}}/{{$place->photos()[1]}}" alt="">
                            <img src="{{asset('assets/images_front/places/')}}/{{$place->photos()[0]}}" class="rounded-circle px-1 d-inline-block mt-0 ml-0 imgLogo"  alt="">

                        </div>

                    <div class="uk-position-top-right d-flex px-3 p-5">
                    </div>

            </div>
        </div>
        {{--        </div>--}}
        {{--        ['upper_paragraphsAr'=>$upper_paragraphsAr ,'upper_paragraphsEn'=>$upper_paragraphsEn ,'upper_paragraphsRu'=>$upper_paragraphsRu ,'how_we_work_paragraphsAr'=>$how_we_work_paragraphsAr ,'how_we_work_paragraphsEn'=>$how_we_work_paragraphsEn ,'how_we_work_paragraphsRu'=>$how_we_work_paragraphsRu  ]);--}}



    </div>
    <br>
    <br>
    <br>
    <h3 class="alert alert-info w-50">{{trans('sellers_places.title')}}</h3>

    <div class="row">
        <div class="column">
            <div class="card">
                <div class="container bg-light">
                    <ul class="p-3">
                        <li class="w-100 text-left p-2">{{$place->getTranslation('title', 'ar')}}</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <div class="container bg-light">
                    <ul class="p-3">
                        <li class="w-100 text-left p-2">{{$place->getTranslation('title', 'en')}}</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <div class="container bg-light">
                    <ul class="p-3">
                        <li class="w-100 text-left p-2">{{$place->getTranslation('title', 'ru')}}</li>
                    </ul>
                </div>
            </div>
        </div>


    </div>

    <br><br>



    <h3 class="alert alert-info w-50">{{trans('sellers_places.desc')}}</h3>

    <div class="row">
        <div class="column">
            <div class="card">
                <div class="container bg-light">
                    <ul class="p-3">
                        <li class="w-100 text-left p-2">{{$place->getTranslation('desc', 'ar')}}</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <div class="container bg-light">
                    <ul class="p-3">
                        <li class="w-100 text-left p-2">{{$place->getTranslation('desc', 'en')}}</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <div class="container bg-light">
                    <ul class="p-3">
                        <li class="w-100 text-left p-2">{{$place->getTranslation('desc', 'ru')}}</li>
                    </ul>
                </div>
            </div>
        </div>


    </div>



    <br>
    <br>


    <h3 class="alert alert-info w-50">{{trans('sellers_places.address')}}</h3>

    <div class="row">
        <div class="column">
            <div class="card">
                <div class="container bg-light">
                    <ul class="p-3">
                        <li class="w-100 text-left p-2">{{$place->getTranslation('address', 'ar')}}</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <div class="container bg-light">
                    <ul class="p-3">
                        <li class="w-100 text-left p-2">{{$place->getTranslation('address', 'en')}}</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <div class="container bg-light">
                    <ul class="p-3">
                        <li class="w-100 text-left p-2">{{$place->getTranslation('address', 'ru')}}</li>
                    </ul>
                </div>
            </div>
        </div>


    </div>


    <br>
    <br>






    <h3 class="alert alert-info w-50">{{trans('sellers_places.email')}}</h3>

    <div class="row">
        <div class="column">
            <div class="card">
                <div class="container bg-light">
                    <ul class="p-3">
                        <li class="w-100 text-left p-2  text-primary font-bold">{{$place->email}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>
    <h3 class="alert alert-info w-50">{{trans('sellers_places.phone')}}</h3>

    <div class="row">
        <div class="column">
            <div class="card">
                <div class="container bg-light">
                    <ul class="p-3">
                        <li class="w-100 text-left p-2  text-primary font-bold">{{$place->phone}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>

    <h3 class="alert alert-info w-50">{{trans('sellers_places.likes_by_admin')}}</h3>

    <div class="row">
        <div class="column">
            <div class="card">
                <div class="container bg-light">
                    <ul class="p-3">
                        <li class="w-100 text-left p-2 text-primary font-bold">{{$place->likes}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>
    <h3 class="alert alert-info w-50">{{trans('sellers_places.dislikes_by_admin')}}</h3>

    <div class="row">
        <div class="column">
            <div class="card">
                <div class="container bg-light">
                    <ul class="p-3">
                        <li class="w-100 text-left p-2 text-primary font-bold">{{$place->unlikes}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <br>
    <br>
    <h3 class="alert alert-info w-50">{{trans('sellers_places.joining_data')}}</h3>

    <div class="row">
        <div class="column">
            <div class="card">
                <div class="container bg-light">
                    <ul class="p-3">
                        <li class="w-100 text-left p-2  text-primary font-bold">{{$place->joining_date}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <br>
    <br>
    <br>
    <h3 class="alert alert-info w-50">{{trans('sellers_places.menu_photos')}}</h3>

    <div class="row">
        @foreach($place->menu() as $img)

            <div class="column">
                <div class="card">
                    <div class="container bg-light text-center">
                        <ul class="p-3 text-center">
                            <li class="w-100 text-left p-2">  <img src="{{asset('/assets/images_front/places/')}}/{{$img}}" height="200" class="w-100 p-4" /></li>
                        </ul>
                    </div>
                </div>
            </div>
        @endforeach
    </div>


    <br>
    <br>
    <br>


    <h3 class="alert alert-info w-50">{{trans('sellers_places.images')}}</h3>

    <div class="row">
        @foreach($place->photos() as $img)

            <div class="column">
                <div class="card">
                    <div class="container bg-light text-center">
                        <ul class="p-3 text-center">
                            <li class="w-100 text-left p-2">  <img src="{{asset('/assets/images_front/places/')}}/{{$img}}" height="200" class="w-100 p-4" /></li>
                        </ul>
                    </div>
                </div>
            </div>









            <!----------------------------delete modal start------------------------------------->
            <!-- delete_modal_Grade -->
            <div class="modal fade" id="delete{{ $place->id }}" tabindex="-1" role="dialog"
                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                id="exampleModalLabel">
                                {{trans('sellers_places.delete')}}
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
                                {{trans('sellers_places.warning')}}
                                <input id="id" type="hidden" name="id" class="form-control"
                                       value="{{ $place->id }}">
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">{{trans('sellers_places.close')}}</button>
                                    <button type="submit"
                                            class="btn btn-danger">{{trans('sellers_places.submit')}}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                function destFunc() {
                    var r = confirm("{{trans('sellers_places.Are_you_sure_you_want_to_delete')}}");
                    if (r === true){
                        window.location.href ='{{route("places.destroy" , $place->id)}}';            }
                }
            </script>
            <!-----------------------------delete modal end------------------------------------>


        @endforeach
    </div>


@endisset

    <!-- row closed -->
@endsection
@section('js')
    @toastr_js
    @toastr_render
@endsection
