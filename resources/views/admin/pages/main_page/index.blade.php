@extends('layouts.master')
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
            background-color: #474e5d;
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
    </style>
    @toastr_css
@section('title')
    {{trans('admin_main_page.main_page')}}
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    {{trans('admin_main_page.list_students')}}
@stop
<!-- breadcrumb -->
@endsection
@section('content')
    {{--    {{dd($how_we_work_paragraphs)}}--}}
    <!-- row -->
    <div class="about-section">
        <h2>Main Page</h2>
    </div>

    <br>
    <br>

    <label class="btn btn-success">
        <a href="{{url(route('main.create'))}}"> {{trans('admin_main_page.Add_New_One')}} </a>
    </label>
    <label class="btn btn-primary">
        <a href="{{url(route('main.edit' , $mains->id))}}"> {{trans('admin_main_page.Edit')}} </a>
    </label>
{{--    <label class="btn btn-danger">--}}
{{--        <a href="{{url(route('main.destroy' , $mains->id))}}"> {{trans('admin_main_page.Delete')}} </a>--}}
{{--    </label>--}}

    <br>
    <br>

    <div class="row text-center">
        {{--        <div  class="column">--}}
        {{--        </div>--}}

        {{--        <div  class="column">--}}
        <div class="offset-1 col-10">
            <div class="card w-100">
                <img class="ImgClass" src="{{asset('/assets/images_front/bg_photos/')}}/{{$mains->bg_photo}}" alt="Jane" style="width:100%">
                <div class="container">
                    <p></p>
                </div>
            </div>
        </div>
        {{--        </div>--}}
        {{--        ['upper_paragraphsAr'=>$upper_paragraphsAr ,'upper_paragraphsEn'=>$upper_paragraphsEn ,'upper_paragraphsRu'=>$upper_paragraphsRu ,'how_we_work_paragraphsAr'=>$how_we_work_paragraphsAr ,'how_we_work_paragraphsEn'=>$how_we_work_paragraphsEn ,'how_we_work_paragraphsRu'=>$how_we_work_paragraphsRu  ]);--}}



    </div>
    <br>
    <br>
    <br>
    <h3 class="alert alert-info w-50"> {{trans('admin_main_page.Title1')}} </h3>

    <div class="row">
        <div class="column">
            <div class="card">
                <div class="container bg-light">
                    <ul class="p-3">
                            <li class="w-100 text-left p-2">{{$mains->getTranslation('title1', 'ar')}}</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <div class="container bg-light">
                    <ul class="p-3">
                            <li class="w-100 text-left p-2">{{$mains->getTranslation('title1', 'en')}}</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <div class="container bg-light">
                    <ul class="p-3">
                            <li class="w-100 text-left p-2">{{$mains->getTranslation('title1', 'ru')}}</li>
                    </ul>
                </div>
            </div>
        </div>


    </div>

    <br><br>
    <h3 class="alert alert-info w-50"> {{trans('admin_main_page.Title2')}} </h3>

    <div class="row">
        <div class="column">
            <div class="card">
                <div class="container bg-light">
                    <ul class="p-3">
                        <li class="w-100 text-left p-2">{{$mains->getTranslation('title2', 'ar')}}</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <div class="container bg-light">
                    <ul class="p-3">
                        <li class="w-100 text-left p-2">{{$mains->getTranslation('title2', 'en')}}</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <div class="container bg-light">
                    <ul class="p-3">
                        <li class="w-100 text-left p-2">{{$mains->getTranslation('title2', 'ru')}}</li>
                    </ul>
                </div>
            </div>
        </div>


    </div>

    <br>
    <br>


    <h3 class="alert alert-info w-50"> {{trans('admin_main_page.Top_Description')}} </h3>

    <div class="row">
        <div class="column">
            <div class="card">
                <div class="container bg-light">
                    <ul class="p-3">
                        <li class="w-100 text-left p-2">{{$mains->getTranslation('top_desc', 'ar')}}</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <div class="container bg-light">
                    <ul class="p-3">
                        <li class="w-100 text-left p-2">{{$mains->getTranslation('top_desc', 'en')}}</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <div class="container bg-light">
                    <ul class="p-3">
                        <li class="w-100 text-left p-2">{{$mains->getTranslation('top_desc', 'ru')}}</li>
                    </ul>
                </div>
            </div>
        </div>


    </div>



    <br>
    <br>


    <h3 class="alert alert-info w-50"> {{trans('admin_main_page.Left_Description')}} </h3>

    <div class="row">
        <div class="column">
            <div class="card">
                <div class="container bg-light">
                    <ul class="p-3">
                        <li class="w-100 text-left p-2">{{$mains->getTranslation('left_desc', 'ar')}}</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <div class="container bg-light">
                    <ul class="p-3">
                        <li class="w-100 text-left p-2">{{$mains->getTranslation('left_desc', 'en')}}</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <div class="container bg-light">
                    <ul class="p-3">
                        <li class="w-100 text-left p-2">{{$mains->getTranslation('left_desc', 'ru')}}</li>
                    </ul>
                </div>
            </div>
        </div>


    </div>


    <br>
    <br>


    <h3 class="alert alert-info w-50"> {{trans('admin_main_page.Middle_Description')}} </h3>

    <div class="row">
        <div class="column">
            <div class="card">
                <div class="container bg-light">
                    <ul class="p-3">
                        <li class="w-100 text-left p-2">{{$mains->getTranslation('middle_desc', 'ar')}}</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <div class="container bg-light">
                    <ul class="p-3">
                        <li class="w-100 text-left p-2">{{$mains->getTranslation('middle_desc', 'en')}}</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <div class="container bg-light">
                    <ul class="p-3">
                        <li class="w-100 text-left p-2">{{$mains->getTranslation('middle_desc', 'ru')}}</li>
                    </ul>
                </div>
            </div>
        </div>


    </div>

    <br>
    <br>


    <h3 class="alert alert-info w-50"> {{trans('admin_main_page.Right_Description')}} </h3>

    <div class="row">
        <div class="column">
            <div class="card">
                <div class="container bg-light">
                    <ul class="p-3">
                        <li class="w-100 text-left p-2">{{$mains->getTranslation('right_desc', 'ar')}}</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <div class="container bg-light">
                    <ul class="p-3">
                        <li class="w-100 text-left p-2">{{$mains->getTranslation('right_desc', 'en')}}</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <div class="container bg-light">
                    <ul class="p-3">
                        <li class="w-100 text-left p-2">{{$mains->getTranslation('right_desc', 'ru')}}</li>
                    </ul>
                </div>
            </div>
        </div>


    </div>

    <br>
    <br>


    <h3 class="alert alert-info w-50"> {{trans('admin_main_page.Website')}} </h3>

    <div class="row">
        <div class="column">
            <div class="card">
                <div class="container bg-light">
                    <ul class="p-3">
                        <li class="w-100 text-left p-2">{{$mains->website}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>

    <h3 class="alert alert-info w-50"> {{trans('admin_main_page.Categories')}} </h3>

    <div class="row">
        @foreach($cats as $cat)
        <div class="column">
            <div class="card">
                <div class="container bg-light">
                    <ul class="p-3">
                        <li class="w-100 text-left p-2">  <img src="{{asset('/assets/images_front/category/')}}/{{$cat->image}}" height="200" width="200" /> <div class="p-3"><b class="text-primary">{{$cat->title }}</b></div></li>
                    </ul>
                </div>
            </div>
        </div>
            @endforeach
    </div>


    <!-- row closed -->
@endsection
@section('js')
    @toastr_js
    @toastr_render
@endsection
