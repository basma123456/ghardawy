@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    {{ trans('admin_main_page.Add_main_page') }}
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    {{ trans('admin_main_page.Add_Teacher') }}
@stop
<!-- breadcrumb -->
@endsection
@section('content')
{{--    @if(count($errors) > 0 )--}}
{{--        <div class="alert alert-danger alert-dismissible fade show" role="alert">--}}
{{--            <button type="button" class="close" data-dismiss="alert" aria-label="Close">--}}
{{--                <span aria-hidden="true">&times;</span>--}}
{{--            </button>--}}
{{--            <ul class="p-0 m-0" style="list-style: none;">--}}
{{--                @foreach($errors->all() as $error)--}}
{{--                    <li>{{$error}}</li>--}}
{{--                @endforeach--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    @endif--}}
    <!-- row -->
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">

                    @if(session()->has('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>{{ session()->get('error') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">


                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <div class="col-xs-12">
                        <div class="col-md-12">
                            <br>

                            <form action="{{\LaravelLocalization::localizeURL(route('main.store'))}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">
                                    <div class="col">
                                        <label for="title_ar">{{trans('admin_main_page.title_ar')}}</label>
                                        <input type="text"  value="{{old('title_ar')}}" name="title_ar" class="form-control">
                                        @error('title_ar')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="title_en">{{trans('admin_main_page.title_en')}}</label>
                                        <input type="text"  value="{{old('title_en')}}" name="title_en" class="form-control">
                                        @error('title_en')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                    <div class="col">
                                        <label for="title_ru">{{trans('admin_main_page.title_ru')}}</label>
                                        <input type="text"  value="{{old('title_ru')}}" name="title_ru" class="form-control">
                                        @error('title_ru')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                </div>
                                <br>

                                <div class="form-row">
                                    <div class="col">
                                        <label for="title2_ar">{{trans('admin_main_page.title2_ar')}}</label>
                                        <input type="text"  value="{{old('title2_ar')}}" name="title2_ar" class="form-control">
                                        @error('title2_ar')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="title2_en">{{trans('admin_main_page.title2_en')}}</label>
                                        <input type="text"  value="{{old('title2_en')}}" name="title2_en" class="form-control">
                                        @error('title2_en')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                    <div class="col">
                                        <label for="title2_ru">{{trans('admin_main_page.title2_ru')}}</label>
                                        <input type="text"  value="{{old('title2_ru')}}" name="title2_ru" class="form-control">
                                        @error('title2_ru')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                </div>
                                <br>



                                <div class="form-row">
                                    <div class="col">
                                        <label for="top_desc_ar">{{trans('admin_main_page.top_desc_ar')}}</label>
                                        <textarea name="top_desc_ar"   class="form-control" rows="4">{{old('top_desc_ar')}}</textarea>
                                        @error('top_desc_ar')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="top_desc_en">{{trans('admin_main_page.top_desc_en')}}</label>
                                        <textarea name="top_desc_en"  class="form-control" rows="4">{{old('top_desc_en')}}</textarea>
                                        @error('top_desc_en')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                    <div class="col">
                                        <label for="top_desc_ru">{{trans('admin_main_page.top_desc_ru')}}</label>
                                        <textarea name="top_desc_ru" class="form-control" rows="4">{{old('top_desc_ru')}}</textarea>
                                        @error('top_desc_ru')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                </div>
                                <br>

                                <div class="form-row">
                                    <div class="col">
                                        <label for="left_desc_ar">{{trans('admin_main_page.left_desc_ar')}}</label>
                                        <textarea name="left_desc_ar" class="form-control" rows="4">{{old('left_desc_ar')}}</textarea>
                                        @error('left_desc_ar')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="left_desc_en">{{trans('admin_main_page.left_desc_en')}}</label>
                                        <textarea name="left_desc_en" class="form-control" rows="4">{{old('left_desc_en')}}</textarea>
                                        @error('left_desc_en')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                    <div class="col">
                                        <label for="left_desc_ru">{{trans('admin_main_page.left_desc_ru')}}</label>
                                        <textarea name="left_desc_ru" class="form-control" rows="4">{{old('left_desc_ru')}}</textarea>
                                        @error('left_desc_ru')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                </div>

                                <br>

                                <div class="form-row">
                                    <div class="col">
                                        <label for="middle_desc_ar">{{trans('admin_main_page.middle_desc_ar')}}</label>
                                        <textarea name="middle_desc_ar" class="form-control" rows="4">{{old('middle_desc_ar')}}</textarea>
                                        @error('middle_desc_ar')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="middle_desc_en">{{trans('admin_main_page.middle_desc_en')}}</label>
                                        <textarea name="middle_desc_en" class="form-control" rows="4">{{old('middle_desc_en')}}</textarea>
                                        @error('middle_desc_en')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                    <div class="col">
                                        <label for="middle_desc_ru">{{trans('admin_main_page.middle_desc_ru')}}</label>
                                        <textarea name="middle_desc_ru" class="form-control" rows="4">{{old('middle_desc_ru')}}</textarea>
                                        @error('middle_desc_ru')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                </div>

                                <br>


                                <div class="form-row">
                                    <div class="col">
                                        <label for="right_desc_ar">{{trans('admin_main_page.right_desc_ar')}}</label>
                                        <textarea name="right_desc_ar" class="form-control" rows="4">{{old('right_desc_ar')}}</textarea>
                                        @error('right_desc_ar')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="right_desc_en">{{trans('admin_main_page.right_desc_en')}}</label>
                                        <textarea name="right_desc_en" class="form-control" rows="4">{{old('right_desc_en')}}</textarea>
                                        @error('right_desc_en')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                    <div class="col">
                                        <label for="right_desc_ru">{{trans('admin_main_page.right_desc_ru')}}</label>
                                        <textarea name="right_desc_ru" class="form-control" rows="4">{{old('right_desc_ru')}}</textarea>
                                        @error('right_desc_ru')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                </div>

                                <br>


                                <div class="form-row">
                                    <div class="col">
                                        <label for="website">{{trans('admin_main_page.website')}}</label>
                                        <input type="text" name="website"  value="{{old('website')}}" class="form-control" >
                                        @error('website')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <div class="form-group col">
                                        <label for="left_upper_cat">{{trans('admin_main_page.left_upper_cat')}}</label>
                                        <select class="custom-select my-1 mr-sm-2 form-control" style="height: max-content" name="left_upper_cat">
                                            <option>{{trans('admin_main_page.Choose')}} <span class="text-dark">&#x26DB;</span></option>
                                            @foreach($cats as $cat)
                                                <option value="{{(int)$cat->id}}" {{ old('left_upper_cat') == (int)$cat->id ? 'selected' : '' }}>{{$cat->title}}</option>
                                            @endforeach
                                        </select>
                                        @error('left_upper_cat')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>

                                <br>
                                <hr>
                                <br>
                                <div class="form-row">
                                    <div class="form-group col">
                                        <label for="right_upper_cat">{{trans('admin_main_page.right_upper_cat')}}</label>
                                        <select class="custom-select my-1 mr-sm-2 form-control" style="height: max-content" name="right_upper_cat">
                                            <option>{{trans('admin_main_page.Choose')}} <span class="text-dark">&#x26DB;</span></option>
                                            @foreach($cats as $cat)
                                                <option value="{{(int)$cat->id}}" {{ old('right_upper_cat') == (int)$cat->id ? 'selected' : '' }}>{{$cat->title}}</option>
                                            @endforeach
                                        </select>
                                        @error('right_upper_cat')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <br>
                                <hr>
                                <br>
                                <div class="form-row">
                                    <div class="form-group col">
                                        <label for="screen_cat">{{trans('admin_main_page.screen_cat')}}</label>
                                        <select class="custom-select my-1 mr-sm-2 form-control" style="height: max-content" name="screen_cat">
                                            <option>{{trans('admin_main_page.Choose')}} <span class="text-dark">&#x26DB;</span></option>
                                            @foreach($cats as $cat)
                                                <option value="{{(int)$cat->id}}" {{ old('screen_cat') == (int)$cat->id ? 'selected' : '' }}>{{$cat->title}}</option>
                                            @endforeach
                                        </select>
                                        @error('screen_cat')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <br>
                                <hr>
                                <br>
                                <div class="form-row">
                                    <div class="form-group col">
                                        <label for="bottom_big_cat">{{trans('admin_main_page.bottom_big_cat')}}</label>
                                        <select class="custom-select my-1 mr-sm-2 form-control" style="height: max-content" name="bottom_big_cat">
                                            <option>{{trans('admin_main_page.Choose')}} <span class="text-dark">&#x26DB;</span></option>
                                            @foreach($cats as $cat)
                                                <option value="{{(int)$cat->id}}" {{ old('bottom_big_cat') == (int)$cat->id ? 'selected' : '' }}>{{$cat->title}}</option>
                                            @endforeach
                                        </select>
                                        @error('bottom_big_cat')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <br>
                                <hr>
                                <br>
                                <div class="form-row">
                                    <div class="form-group col">
                                        <label for="bottom_left_upper_cat">{{trans('admin_main_page.bottom_left_upper_cat')}}</label>
                                        <select class="custom-select my-1 mr-sm-2 form-control" style="height: max-content" name="bottom_left_upper_cat">
                                            <option>{{trans('admin_main_page.Choose')}} <span class="text-dark">&#x26DB;</span></option>
                                            @foreach($cats as $cat)
                                                <option value="{{(int)$cat->id}}" {{ old('bottom_left_upper_cat') == (int)$cat->id ? 'selected' : '' }}>{{$cat->title}}</option>
                                            @endforeach
                                        </select>
                                        @error('bottom_left_upper_cat')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <br>
                                <hr>
                                <br>
                                <div class="form-row">
                                    <div class="form-group col">
                                        <label for="bottom_left_lower_cat">{{trans('admin_main_page.bottom_left_lower_cat')}}</label>
                                        <select class="custom-select my-1 mr-sm-2 form-control" style="height: max-content" name="bottom_left_lower_cat">
                                            <option>{{trans('admin_main_page.Choose')}} <span class="text-dark">&#x26DB;</span></option>
                                            @foreach($cats as $cat)
                                                <option value="{{(int)$cat->id}}" {{ old('bottom_left_lower_cat') == (int)$cat->id ? 'selected' : '' }}>{{$cat->title}}</option>
                                            @endforeach
                                        </select>
                                        @error('bottom_left_lower_cat')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <br>
                                <hr>
                                <br>


                                <div class="row">
                                    <div class="form-group col">
                                        <label for="bg_photo">{{trans('admin_main_page.bg_photo')}}</label>
                                        <input type="file" class="form-control" name="bg_photo"  value="{{old('bg_photo')}}" />
                                        @error('bg_photo')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <br>
                                <br>
                                <hr>
                                <br>
                                <br>
                                <hr>
                                <br>

                                <div class="form-row">
{{--                                    <div class="col">--}}
{{--                                        <label for="seller_id">{{trans('admin_main_page.seller_id')}}</label>--}}
{{--                                        <select name="seller" class="form-control">--}}
{{--                                            <option>Choose Seller</option>--}}
{{--                                            @foreach($sellers as $seller)--}}
{{--                                            <option value="{{$seller->id}}">{{$seller->name}}</option>--}}
{{--                                            @endforeach--}}
{{--                                        </select>--}}
{{--                                        @error('seller_id')--}}
{{--                                        <div class="alert alert-danger">{{$message}}</div>--}}
{{--                                        @enderror--}}
{{--                                    </div>--}}





                                <br>
                                <br>

                                <br>
                                <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" type="submit">{{trans('admin_main_page.Next')}}</button>
                                </div>
                            </form>
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


{{--    <script>--}}
{{--        // $.ajaxSetup({--}}
{{--        //     headers: {--}}
{{--        //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
{{--        //     }--}}
{{--        // });--}}
{{--        $(document).ready(function(){--}}
{{--            $('#search').on('keyup' , function(){--}}
{{--                $('#x_dismiss').addClass('show');--}}

{{--                var query = $(this).val();--}}

{{--                $.ajax({--}}
{{--                    url:"{{route('search.seller')}}",--}}
{{--                    type:"GET",--}}
{{--                    data:{'search':query},--}}
{{--                    success:function(data){--}}
{{--                        $('#search_list').html(data);--}}
{{--                    }--}}
{{--                });--}}
{{--            });--}}

{{--            /////////////////////--}}


{{--            ///////////////////////////--}}

{{--            $('#x_dismiss').on('click' ,function(){--}}
{{--                $('#table-live-search').fadeOut();--}}
{{--                $('#x_dismiss').removeClass('show');--}}

{{--            });--}}



{{--        });--}}


{{--    ///////////////////get value  from seller search to an input field////////////////////--}}


{{--        function getVal(object) {--}}
{{--            var myVal = object.getAttribute('data-val');--}}
{{--            var myNameVal = object.getAttribute('data-name');--}}

{{--            var myId =  document.getElementById('my_seller_id');--}}
{{--            var myName = document.getElementById('my_seller_name');--}}
{{--              myId.value =  myVal;--}}
{{--              myName.value = myNameVal;--}}
{{--        }--}}


{{--        ////////////////////////--}}

{{--    </script>--}}

@endsection
