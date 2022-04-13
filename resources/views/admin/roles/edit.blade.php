@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    {{trans('Students_trans.Student_Edit')}}
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    {{trans('Students_trans.Student_Edit')}}
@stop
<!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ \LaravelLocalization::localizeURL(route('roles.update', $role->id)) }}" method="post" autocomplete="off">
                        @method('PUT')
                        @csrf
                        <h6 style="font-family: 'Cairo', sans-serif;color: blue">{{trans('Students_trans.personal_information')}}</h6><br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{trans('Students_trans.name_ar')}} : <span class="text-danger">*</span></label>
                                    <input value="{{ $role->getTranslation('name', 'ar') }}" type="text" name="Name_ar"  class="form-control">
                                    @error('name_ar')
                                    <span class="alert alert-danger">
                                        {{$message}}
                                    </span>
                                    @enderror

                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{trans('Students_trans.name_en')}} : <span class="text-danger">*</span></label>
                                    <input value="{{ $role->getTranslation('name', 'en') }}" class="form-control" name="Name_en" type="text" >
                                    @error('name_en')
                                    <span class="alert alert-danger">
                                        {{$message}}
                                    </span>
                                    @enderror

                                </div>
                            </div>
                        </div>
<br>
                        @foreach(config('global.permessions') as $name => $value)
                            <div class="form-check">
                                <input @if( in_array( $name ,json_decode($role->permessions))) checked @endif class="form-check-input" name="permessions[]" type="checkbox" value="{{$name}}" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    {{$value}}
                                </label>
                            </div>
                        @endforeach
                        @error('permessions')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror

<br>
                        <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" type="submit">{{trans('Students_trans.submit')}}</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
@endsection
@section('js')
    @toastr_js
    @toastr_render
    {{--    <script>--}}
    {{--        $(document).ready(function () {--}}
    {{--            $('select[name="Grade_id"]').on('change', function () {--}}
    {{--                var Grade_id = $(this).val();--}}
    {{--                if (Grade_id) {--}}
    {{--                    $.ajax({--}}
    {{--                        url: "{{ URL::to('Get_classrooms') }}/" + Grade_id,--}}
    {{--                        type: "GET",--}}
    {{--                        dataType: "json",--}}
    {{--                        success: function (data) {--}}
    {{--                            $('select[name="Classroom_id"]').empty();--}}
    {{--                            $.each(data, function (key, value) {--}}
    {{--                                $('select[name="Classroom_id"]').append('<option selected disabled >{{trans('Parent_trans.Choose')}}...</option>');--}}
    {{--                                $('select[name="Classroom_id"]').append('<option value="' + key + '">' + value + '</option>');--}}
    {{--                            });--}}

    {{--                        },--}}
    {{--                    });--}}
    {{--                }--}}

    {{--                else {--}}
    {{--                    console.log('AJAX load did not work');--}}
    {{--                }--}}
    {{--            });--}}
    {{--        });--}}
    {{--    </script>--}}


    {{--    <script>--}}
    {{--        $(document).ready(function () {--}}
    {{--            $('select[name="Classroom_id"]').on('change', function () {--}}
    {{--                var Classroom_id = $(this).val();--}}
    {{--                if (Classroom_id) {--}}
    {{--                    $.ajax({--}}
    {{--                        url: "{{ URL::to('Get_Sections') }}/" + Classroom_id,--}}
    {{--                        type: "GET",--}}
    {{--                        dataType: "json",--}}
    {{--                        success: function (data) {--}}
    {{--                            $('select[name="section_id"]').empty();--}}
    {{--                            $.each(data, function (key, value) {--}}
    {{--                                $('select[name="section_id"]').append('<option value="' + key + '">' + value + '</option>');--}}
    {{--                            });--}}

    {{--                        },--}}
    {{--                    });--}}
    {{--                }--}}

    {{--                else {--}}
    {{--                    console.log('AJAX load did not work');--}}
    {{--                }--}}
    {{--            });--}}
    {{--        });--}}
    {{--    </script>--}}
@endsection
