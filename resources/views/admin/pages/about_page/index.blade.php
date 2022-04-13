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
{{--    {{dd($how_we_work_paragraphs)}}--}}
    <!-- row -->
    <div class="about-section">
        <h2>About Us Page</h2>
    </div>

    <br>
    <br>

    <label class="btn btn-success">
        <a href="{{url(route('about_page.create'))}}"> Add New One </a>
    </label>
        <label class="btn btn-primary">
            <a href="{{url(route('about_page.edit' , $about->id))}}"> Edit </a>
        </label>
    <label class="btn btn-danger">
        <a href="{{url(route('about_page.destroy' , $about->id))}}"> Delete </a>
    </label>

    <br>
    <br>

        <div class="row text-center">
{{--        <div  class="column">--}}
{{--        </div>--}}

{{--        <div  class="column">--}}
        <div class="offset-1 col-10">
            <div class="card w-100">
                <img class="ImgClass" src="{{asset('/assets/images_front/bg_photos/')}}/{{$about->photo}}" alt="Jane" style="width:100%">
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
    <h3 class="alert alert-info w-50">The Upper Paragraphs</h3>

    <div class="row">
        <div class="column">
            <div class="card">
                <div class="container bg-light">
                    <ul class="p-3">
                    @foreach($arr['upper_paragraphs']['Ar'] as $upper_paragraphsArItem)
                        <li class="w-100 text-left p-2">{{$upper_paragraphsArItem}}</li>
                    @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <div class="container bg-light">
                    <ul class="p-3">
                    @foreach($arr['upper_paragraphs']['En'] as $upper_paragraphsEnItem)
                        <li class="w-100 text-left p-2">{{$upper_paragraphsEnItem}}</li>
                    @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <div class="container bg-light">
                    <ul class="p-3">
                    @foreach($arr['upper_paragraphs']['Ru'] as $upper_paragraphsRuItem)
                        <li class="w-100 text-left p-2">{{$upper_paragraphsRuItem}}</li>
                    @endforeach
                    </ul>
                </div>
            </div>
        </div>


    </div>

    <br><br>
    <h3 class="alert alert-info w-50">How we work paragraphs</h3>

    <div class="row">
        <div class="column">
            <div class="card">
                <div class="container bg-light">
                    <ul class="p-3">
                    @foreach($arr['how_we_work_paragraphs']['Ar'] as $how_we_work_paragraphsArItem)
                        <li class="w-100 text-left p-2">{{$how_we_work_paragraphsArItem}}</li>
                    @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <div class="container bg-light">
                    <ul class="p-3">
                    @foreach($arr['how_we_work_paragraphs']['En'] as $how_we_work_paragraphsEnItem)
                        <li class="w-100 text-left p-2">{{$how_we_work_paragraphsEnItem}}</li>
                    @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <div class="container bg-light">
                    <ul class="p-3">
                    @foreach($arr['how_we_work_paragraphs']['Ru'] as $how_we_work_paragraphsRuItem)
                        <li class="w-100 text-left p-2">{{$how_we_work_paragraphsRuItem}}</li>
                    @endforeach
                    </ul>
                </div>
            </div>
        </div>


    </div>

    <br>
    <br>


    <h3 class="alert alert-info w-50">Categories</h3>

    <div class="row">

        @foreach($mYcategories as $key=>$val)

            <div class="column">


                <div class="card">
                <div class="container bg-light">
                    <b>{{$key}}</b> : {{$mYcategories[$key]->title}}
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
