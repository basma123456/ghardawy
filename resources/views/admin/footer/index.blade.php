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
@section('address')
    {{trans('admin_footer.footer')}}
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    {{trans('admin_footer.footer')}}
@stop
<!-- breadcrumb -->
@endsection
@section('content')
    {{--    {{dd($how_we_work_paragraphs)}}--}}
    <!-- row -->
    <div class="about-section">
        <h2>{{trans('admin_footer.footer')}}</h2>
    </div>

    <br>
    <br>
    <label class="btn btn-warning">
    <a  href="{{route('footer.edit' , $footer->id)}}">{{trans('admin_footer.edit')}}</a>
    </label>



    <label class="btn btn-success">
        <a href="{{url(route('footer.create'))}}"> {{trans('admin_footer.Add_New_One')}} </a>
    </label>

    <br>
    <br>

    <div class="row text-center">
        {{--        <div  class="column">--}}
        {{--        </div>--}}

        {{--        <div  class="column">--}}
        {{--        </div>--}}
        {{--        ['upper_paragraphsAr'=>$upper_paragraphsAr ,'upper_paragraphsEn'=>$upper_paragraphsEn ,'upper_paragraphsRu'=>$upper_paragraphsRu ,'how_we_work_paragraphsAr'=>$how_we_work_paragraphsAr ,'how_we_work_paragraphsEn'=>$how_we_work_paragraphsEn ,'how_we_work_paragraphsRu'=>$how_we_work_paragraphsRu  ]);--}}



    </div>
    <br>
    <br>
    <br>
    <h3 class="alert alert-info w-50"> {{trans('admin_footer.address')}} </h3>

    <div class="row">
        <div class="column">
            <div class="card">
                <div class="container bg-light">
                    <ul class="p-3">
                        <li class="w-100 text-left p-2">{{$footer->getTranslation('address', 'ar')}}</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <div class="container bg-light">
                    <ul class="p-3">
                        <li class="w-100 text-left p-2">{{$footer->getTranslation('address', 'en')}}</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <div class="container bg-light">
                    <ul class="p-3">
                        <li class="w-100 text-left p-2">{{$footer->getTranslation('address', 'ru')}}</li>
                    </ul>
                </div>
            </div>
        </div>


    </div>

    <br><br>
    <h3 class="alert alert-info w-50"> {{trans('admin_footer.desc')}} </h3>

    <div class="row">
        <div class="column">
            <div class="card">
                <div class="container bg-light">
                    <ul class="p-3">
                        <li class="w-100 text-left p-2">{{$footer->getTranslation('description', 'ar')}}</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <div class="container bg-light">
                    <ul class="p-3">
                        <li class="w-100 text-left p-2">{{$footer->getTranslation('description', 'en')}}</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <div class="container bg-light">
                    <ul class="p-3">
                        <li class="w-100 text-left p-2">{{$footer->getTranslation('description', 'ru')}}</li>
                    </ul>
                </div>
            </div>
        </div>


    </div>

    <br>
    <br>


    <h3 class="alert alert-info w-50"> {{trans('admin_footer.email')}} </h3>

    <div class="row">
        <div class="column">
            <div class="card">
                <div class="container bg-light">
                    <ul class="p-3">
                        <li class="w-100 text-left p-2">{{$footer->email1}}</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <div class="container bg-light">
                    <ul class="p-3">
                        <li class="w-100 text-left p-2">{{$footer->email2}}</li>
                    </ul>
                </div>
            </div>
        </div>



    </div>



    <br>
    <br>


    <h3 class="alert alert-info w-50"> {{trans('admin_footer.phone')}} </h3>

    <div class="row">

        @foreach(json_decode($footer->phone) as $phone)
        <div class="column">
            <div class="card">
                <div class="container bg-light">
                    <ul class="p-3">
                        <li class="w-100 text-left p-2">{{$phone}}</li>
                    </ul>
                </div>
            </div>
        </div>
            @endforeach




    </div>


    <br>
    <br>





    <!-- row closed -->
@endsection
@section('js')
    @toastr_js
    @toastr_render
@endsection
