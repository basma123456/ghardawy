@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    {{ trans('Teacher_trans.Add_Teacher') }}
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    {{ trans('Teacher_trans.Add_Teacher') }}
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
                            <form action="{{route('about_page.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <!-------------------------------upper_paragraphs part------------------------->
                                    <div class="form-row">
                                    <div class="col">
                                        <label for="upper_paragraphs1_ar">{{trans('Teacher_trans.upper_paragraphs1_ar')}}</label>
                                        <input type="text"  value="{{old('upper_paragraphs1_ar')}}" name="upper_paragraphs1_ar" class="form-control">
                                        @error('upper_paragraphs1_ar')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="upper_paragraphs1_en">{{trans('Teacher_trans.upper_paragraphs1_en')}}</label>
                                        <input type="text"  value="{{old('upper_paragraphs1_en')}}" name="upper_paragraphs1_en" class="form-control">
                                        @error('upper_paragraphs1_en')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                    <div class="col">
                                        <label for="upper_paragraphs1_ru">{{trans('Teacher_trans.upper_paragraphs1_ru')}}</label>
                                        <input type="text"  value="{{old('upper_paragraphs1_ru')}}" name="upper_paragraphs1_ru" class="form-control">
                                        @error('upper_paragraphs1_ru')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                </div>
                                <br>
                                <div class="form-row">
                                    <div class="col">
                                        <label for="upper_paragraphs2_ar">{{trans('Teacher_trans.upper_paragraphs2_ar')}}</label>
                                        <input type="text"  value="{{old('upper_paragraphs2_ar')}}" name="upper_paragraphs2_ar" class="form-control">
                                        @error('upper_paragraphs2_ar')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="upper_paragraphs2_en">{{trans('Teacher_trans.upper_paragraphs2_en')}}</label>
                                        <input type="text"  value="{{old('upper_paragraphs2_en')}}" name="upper_paragraphs2_en" class="form-control">
                                        @error('upper_paragraphs2_en')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                    <div class="col">
                                        <label for="upper_paragraphs2_ru">{{trans('Teacher_trans.upper_paragraphs2_ru')}}</label>
                                        <input type="text"  value="{{old('upper_paragraphs2_ru')}}" name="upper_paragraphs2_ru" class="form-control">
                                        @error('upper_paragraphs2_ru')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                </div>
                                <br>
                                <div class="form-row">
                                    <div class="col">
                                        <label for="upper_paragraphs3_ar">{{trans('Teacher_trans.upper_paragraphs3_ar')}}</label>
                                        <input type="text"  value="{{old('upper_paragraphs3_ar')}}" name="upper_paragraphs3_ar" class="form-control">
                                        @error('upper_paragraphs3_ar')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="upper_paragraphs3_en">{{trans('Teacher_trans.upper_paragraphs3_en')}}</label>
                                        <input type="text"  value="{{old('upper_paragraphs3_en')}}" name="upper_paragraphs3_en" class="form-control">
                                        @error('upper_paragraphs3_en')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                    <div class="col">
                                        <label for="upper_paragraphs3_ru">{{trans('Teacher_trans.upper_paragraphs3_ru')}}</label>
                                        <input type="text"  value="{{old('upper_paragraphs3_ru')}}" name="upper_paragraphs3_ru" class="form-control">
                                        @error('upper_paragraphs3_ru')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                </div>
                                <br>
                                <div class="form-row">
                                    <div class="col">
                                        <label for="upper_paragraphs4_ar">{{trans('Teacher_trans.upper_paragraphs4_ar')}}</label>
                                        <input type="text"  value="{{old('upper_paragraphs4_ar')}}" name="upper_paragraphs4_ar" class="form-control">
                                        @error('upper_paragraphs4_ar')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="upper_paragraphs4_en">{{trans('Teacher_trans.upper_paragraphs4_en')}}</label>
                                        <input type="text"  value="{{old('upper_paragraphs4_en')}}" name="upper_paragraphs4_en" class="form-control">
                                        @error('upper_paragraphs4_en')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                    <div class="col">
                                        <label for="upper_paragraphs4_ru">{{trans('Teacher_trans.upper_paragraphs4_ru')}}</label>
                                        <input type="text"  value="{{old('upper_paragraphs4_ru')}}" name="upper_paragraphs4_ru" class="form-control">
                                        @error('upper_paragraphs4_ru')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                </div>
                                <br>
                                <!-------------------------------upper_paragraphs part------------------------->

                                    <br>
                                    <br>
                                    <hr>
                                    <br>
                                    <br>

                                <!-------------------------------how we work part------------------------->
                                <div class="form-row">
                                    <div class="col">
                                        <label for="how_we_work_paragraphs1_ar">{{trans('Teacher_trans.how_we_work_paragraphs1_ar')}}</label>
                                        <textarea name="how_we_work_paragraphs1_ar"   class="form-control" rows="4">{{old('how_we_work_paragraphs1_ar')}}</textarea>
                                        @error('how_we_work_paragraphs1_ar')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="how_we_work_paragraphs1_en">{{trans('Teacher_trans.how_we_work_paragraphs1_en')}}</label>
                                        <textarea name="how_we_work_paragraphs1_en"  class="form-control" rows="4">{{old('how_we_work_paragraphs1_en')}}</textarea>
                                        @error('how_we_work_paragraphs1_en')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                    <div class="col">
                                        <label for="how_we_work_paragraphs1_ru">{{trans('Teacher_trans.how_we_work_paragraphs1_ru')}}</label>
                                        <textarea name="how_we_work_paragraphs1_ru" class="form-control" rows="4">{{old('how_we_work_paragraphs1_ru')}}</textarea>
                                        @error('how_we_work_paragraphs1_ru')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                </div>
                                <br>
                                    <div class="form-row">
                                        <div class="col">
                                            <label for="how_we_work_paragraphs2_ar">{{trans('Teacher_trans.how_we_work_paragraphs2_ar')}}</label>
                                            <textarea name="how_we_work_paragraphs2_ar"   class="form-control" rows="4">{{old('how_we_work_paragraphs2_ar')}}</textarea>
                                            @error('how_we_work_paragraphs2_ar')
                                            <div class="alert alert-danger">{{$message}}</div>
                                            @enderror
                                        </div>
                                        <div class="col">
                                            <label for="how_we_work_paragraphs2_en">{{trans('Teacher_trans.how_we_work_paragraphs2_en')}}</label>
                                            <textarea name="how_we_work_paragraphs2_en"  class="form-control" rows="4">{{old('how_we_work_paragraphs2_en')}}</textarea>
                                            @error('how_we_work_paragraphs2_en')
                                            <div class="alert alert-danger">{{$message}}</div>
                                            @enderror
                                        </div>

                                        <div class="col">
                                            <label for="how_we_work_paragraphs2_ru">{{trans('Teacher_trans.how_we_work_paragraphs2_ru')}}</label>
                                            <textarea name="how_we_work_paragraphs2_ru" class="form-control" rows="4">{{old('how_we_work_paragraphs2_ru')}}</textarea>
                                            @error('how_we_work_paragraphs2_ru')
                                            <div class="alert alert-danger">{{$message}}</div>
                                            @enderror
                                        </div>

                                    </div>
                                    <br>
                                    <div class="form-row">
                                        <div class="col">
                                            <label for="how_we_work_paragraphs3_ar">{{trans('Teacher_trans.how_we_work_paragraphs3_ar')}}</label>
                                            <textarea name="how_we_work_paragraphs3_ar"   class="form-control" rows="4">{{old('how_we_work_paragraphs3_ar')}}</textarea>
                                            @error('how_we_work_paragraphs3_ar')
                                            <div class="alert alert-danger">{{$message}}</div>
                                            @enderror
                                        </div>
                                        <div class="col">
                                            <label for="how_we_work_paragraphs3_en">{{trans('Teacher_trans.how_we_work_paragraphs3_en')}}</label>
                                            <textarea name="how_we_work_paragraphs3_en"  class="form-control" rows="4">{{old('how_we_work_paragraphs3_en')}}</textarea>
                                            @error('how_we_work_paragraphs3_en')
                                            <div class="alert alert-danger">{{$message}}</div>
                                            @enderror
                                        </div>

                                        <div class="col">
                                            <label for="how_we_work_paragraphs3_ru">{{trans('Teacher_trans.how_we_work_paragraphs3_ru')}}</label>
                                            <textarea name="how_we_work_paragraphs3_ru" class="form-control" rows="4">{{old('how_we_work_paragraphs3_ru')}}</textarea>
                                            @error('how_we_work_paragraphs3_ru')
                                            <div class="alert alert-danger">{{$message}}</div>
                                            @enderror
                                        </div>

                                    </div>
                                    <br>
                                    <div class="form-row">
                                        <div class="col">
                                            <label for="how_we_work_paragraphs4_ar">{{trans('Teacher_trans.how_we_work_paragraphs4_ar')}}</label>
                                            <textarea name="how_we_work_paragraphs4_ar"   class="form-control" rows="4">{{old('how_we_work_paragraphs4_ar')}}</textarea>
                                            @error('how_we_work_paragraphs4_ar')
                                            <div class="alert alert-danger">{{$message}}</div>
                                            @enderror
                                        </div>
                                        <div class="col">
                                            <label for="how_we_work_paragraphs4_en">{{trans('Teacher_trans.how_we_work_paragraphs4_en')}}</label>
                                            <textarea name="how_we_work_paragraphs4_en"  class="form-control" rows="4">{{old('how_we_work_paragraphs4_en')}}</textarea>
                                            @error('how_we_work_paragraphs4_en')
                                            <div class="alert alert-danger">{{$message}}</div>
                                            @enderror
                                        </div>

                                        <div class="col">
                                            <label for="how_we_work_paragraphs4_ru">{{trans('Teacher_trans.how_we_work_paragraphs4_ru')}}</label>
                                            <textarea name="how_we_work_paragraphs4_ru" class="form-control" rows="4">{{old('how_we_work_paragraphs4_ru')}}</textarea>
                                            @error('how_we_work_paragraphs4_ru')
                                            <div class="alert alert-danger">{{$message}}</div>
                                            @enderror
                                        </div>

                                    </div>
                                    <br>
                                    <div class="form-row">
                                        <div class="col">
                                            <label for="how_we_work_paragraphs5_ar">{{trans('Teacher_trans.how_we_work_paragraphs5_ar')}}</label>
                                            <textarea name="how_we_work_paragraphs5_ar"   class="form-control" rows="4">{{old('how_we_work_paragraphs5_ar')}}</textarea>
                                            @error('how_we_work_paragraphs5_ar')
                                            <div class="alert alert-danger">{{$message}}</div>
                                            @enderror
                                        </div>
                                        <div class="col">
                                            <label for="how_we_work_paragraphs5_en">{{trans('Teacher_trans.how_we_work_paragraphs5_en')}}</label>
                                            <textarea name="how_we_work_paragraphs5_en"  class="form-control" rows="4">{{old('how_we_work_paragraphs5_en')}}</textarea>
                                            @error('how_we_work_paragraphs5_en')
                                            <div class="alert alert-danger">{{$message}}</div>
                                            @enderror
                                        </div>

                                        <div class="col">
                                            <label for="how_we_work_paragraphs5_ru">{{trans('Teacher_trans.how_we_work_paragraphs5_ru')}}</label>
                                            <textarea name="how_we_work_paragraphs5_ru" class="form-control" rows="4">{{old('how_we_work_paragraphs5_ru')}}</textarea>
                                            @error('how_we_work_paragraphs5_ru')
                                            <div class="alert alert-danger">{{$message}}</div>
                                            @enderror
                                        </div>

                                    </div>
                                    <br>
                                    <div class="form-row">
                                        <div class="col">
                                            <label for="how_we_work_paragraphs6_ar">{{trans('Teacher_trans.how_we_work_paragraphs6_ar')}}</label>
                                            <textarea name="how_we_work_paragraphs6_ar"   class="form-control" rows="4">{{old('how_we_work_paragraphs6_ar')}}</textarea>
                                            @error('how_we_work_paragraphs6_ar')
                                            <div class="alert alert-danger">{{$message}}</div>
                                            @enderror
                                        </div>
                                        <div class="col">
                                            <label for="how_we_work_paragraphs6_en">{{trans('Teacher_trans.how_we_work_paragraphs6_en')}}</label>
                                            <textarea name="how_we_work_paragraphs6_en"  class="form-control" rows="4">{{old('how_we_work_paragraphs6_en')}}</textarea>
                                            @error('how_we_work_paragraphs6_en')
                                            <div class="alert alert-danger">{{$message}}</div>
                                            @enderror
                                        </div>

                                        <div class="col">
                                            <label for="how_we_work_paragraphs6_ru">{{trans('Teacher_trans.how_we_work_paragraphs6_ru')}}</label>
                                            <textarea name="how_we_work_paragraphs6_ru" class="form-control" rows="4">{{old('how_we_work_paragraphs6_ru')}}</textarea>
                                            @error('how_we_work_paragraphs6_ru')
                                            <div class="alert alert-danger">{{$message}}</div>
                                            @enderror
                                        </div>

                                    </div>
                                    <br>
                                    <div class="form-row">
                                        <div class="col">
                                            <label for="how_we_work_paragraphs7_ar">{{trans('Teacher_trans.how_we_work_paragraphs7_ar')}}</label>
                                            <textarea name="how_we_work_paragraphs7_ar"   class="form-control" rows="4">{{old('how_we_work_paragraphs7_ar')}}</textarea>
                                            @error('how_we_work_paragraphs7_ar')
                                            <div class="alert alert-danger">{{$message}}</div>
                                            @enderror
                                        </div>
                                        <div class="col">
                                            <label for="how_we_work_paragraphs7_en">{{trans('Teacher_trans.how_we_work_paragraphs7_en')}}</label>
                                            <textarea name="how_we_work_paragraphs7_en"  class="form-control" rows="4">{{old('how_we_work_paragraphs7_en')}}</textarea>
                                            @error('how_we_work_paragraphs7_en')
                                            <div class="alert alert-danger">{{$message}}</div>
                                            @enderror
                                        </div>

                                        <div class="col">
                                            <label for="how_we_work_paragraphs7_ru">{{trans('Teacher_trans.how_we_work_paragraphs7_ru')}}</label>
                                            <textarea name="how_we_work_paragraphs7_ru" class="form-control" rows="4">{{old('how_we_work_paragraphs7_ru')}}</textarea>
                                            @error('how_we_work_paragraphs7_ru')
                                            <div class="alert alert-danger">{{$message}}</div>
                                            @enderror
                                        </div>

                                    </div>
                                    <br>
                                    <!------------------------------end how we work part-------------------------->


                                <hr>
                                <br>

                                <!------------------------------------------------------------------------------->

                                <div class="form-row">
                                    <div class="form-group col">
                                        <label for="big_cat">{{trans('Teacher_trans.big_cat')}}</label>
                                        <select class="custom-select my-1 mr-sm-2 form-control" style="height: max-content" name="big_cat">
                                            <option>{{trans('Parent_trans.Choose')}} <span class="text-dark">&#x26DB;</span></option>
                                            @foreach($cats as $cat)
                                                <option value="{{(int)$cat->id}}" {{ old('big_cat') == (int)$cat->id ? 'selected' : '' }}>{{$cat->title}}</option>
                                            @endforeach
                                        </select>
                                        @error('big_cat')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <br>
                                <hr>
                                <br>
                                <div class="form-row">
                                    <div class="form-group col">
                                        <label for="first_cat">{{trans('Teacher_trans.first_cat')}}</label>
                                        <select class="custom-select my-1 mr-sm-2 form-control" style="height: max-content" name="first_cat">
                                            <option>{{trans('Parent_trans.Choose')}} <span class="text-dark">&#x26DB;</span></option>
                                            @foreach($cats as $cat)
                                                <option value="{{(int)$cat->id}}" {{ old('first_cat') == (int)$cat->id ? 'selected' : '' }}>{{$cat->title}}</option>
                                            @endforeach
                                        </select>
                                        @error('first_cat')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <br>
                                <hr>
                                <br>
                                <div class="form-row">
                                    <div class="form-group col">
                                        <label for="last_cat">{{trans('Teacher_trans.last_cat')}}</label>
                                        <select class="custom-select my-1 mr-sm-2 form-control" style="height: max-content" name="last_cat">
                                            <option>{{trans('Parent_trans.Choose')}} <span class="text-dark">&#x26DB;</span></option>
                                            @foreach($cats as $cat)
                                                <option value="{{(int)$cat->id}}" {{ old('last_cat') == (int)$cat->id ? 'selected' : '' }}>{{$cat->title}}</option>
                                            @endforeach
                                        </select>
                                        @error('last_cat')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <br>
                                <hr>
                                <br>


                                <div class="row">
                                    <div class="form-group col">
                                        <label for="photo">{{trans('Teacher_trans.photo')}}</label>
                                        <input type="file" class="form-control" name="photo"  value="{{old('photo')}}" />
                                        @error('photo')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div> <!--photo-->
                                <br>
                                <br>
                                <hr>
                                <br>
                                <br>
                                <hr>
                                <br>

                                <div class="form-row">
{{--                                    <div class="col">--}}
{{--                                        <label for="seller_id">{{trans('Teacher_trans.seller_id')}}</label>--}}
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
                                <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" type="submit">{{trans('Parent_trans.Next')}}</button>
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