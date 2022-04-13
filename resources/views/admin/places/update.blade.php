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

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif



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
                            <form action="{{route('places.update', $place->id)}}" method="post" enctype="multipart/form-data">
                                @method('Put')
                                @csrf
                                <input name="id" type="hidden" value="{{$place->id}}"  />
                                <div class="form-row">
                                    <div class="col">
                                        <label for="title_ar">{{trans('Teacher_trans.title_ar')}}</label>
                                        <input type="text"  value="{{old('title_ar', $place->getTranslation('title', 'ar'))}}" name="title_ar" class="form-control">
                                        @error('title_ar')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="title_en">{{trans('Teacher_trans.title_en')}}</label>
                                        <input type="text"  value="{{old('title_en', $place->getTranslation('title', 'en'))}}" name="title_en" class="form-control">
                                        @error('title_en')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                    <div class="col">
                                        <label for="title_ru">{{trans('Teacher_trans.title_ru')}}</label>
                                        <input type="text"  value="{{old('title_ru', $place->getTranslation('title', 'ru'))}}" name="title_ru" class="form-control">
                                        @error('title_ru')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                </div>
                                <br>
                                <!--email-->
                                <div class="form-row">
                                    <div class="col">
                                        <label for="email">{{trans('Teacher_trans.email')}}</label>
                                        <input type="email"  value="{{old('email', $place->email) ?? ''}}" name="email" class="form-control">
                                        @error('email')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>


                                </div>

                                <br>
                                <div class="form-row">
                                    <div class="col">
                                        <label for="phone">{{trans('Teacher_trans.phone')}}</label>
                                        <input type="text"  value="{{old('phone', $place->phone)}}" name="phone" class="form-control">
                                        @error('phone')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>


                                </div>

                                <br>

                                <div class="form-row">
                                    <div class="col">
                                        <label for="address_ar">{{trans('Teacher_trans.address_ar')}}</label>
                                        <textarea name="address_ar"   class="form-control" rows="4">{{old('address_ar' ,$place->getTranslation('address' , 'ar'))}}</textarea>
                                        @error('address_ar')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="address_en">{{trans('Teacher_trans.address_en')}}</label>
                                        <textarea name="address_en"  class="form-control" rows="4">{{old('address_en',$place->getTranslation('address' , 'en'))}}</textarea>
                                        @error('address_en')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                    <div class="col">
                                        <label for="address_ru">{{trans('Teacher_trans.address_ru')}}</label>
                                        <textarea name="address_ru" class="form-control" rows="4">{{old('address_ru',$place->getTranslation('address' , 'ru'))}}</textarea>
                                        @error('address_ru')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                </div>
                                <br>

                                <div class="form-row">
                                    <div class="col">
                                        <label for="desc_ar">{{trans('Teacher_trans.desc_ar')}}</label>
                                        <textarea name="desc_ar" class="form-control" rows="4">{{old('desc_ar',$place->getTranslation('desc' , 'ar'))}}</textarea>
                                        @error('desc_ar')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="desc_en">{{trans('Teacher_trans.desc_en')}}</label>
                                        <textarea name="desc_en" class="form-control" rows="4">{{old('desc_en',$place->getTranslation('desc' , 'en'))}}</textarea>
                                        @error('desc_en')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                    <div class="col">
                                        <label for="desc_ru">{{trans('Teacher_trans.desc_ru')}}</label>
                                        <textarea name="desc_ru" class="form-control" rows="4">{{old('desc_ru',$place->getTranslation('desc' , 'ru'))}}</textarea>
                                        @error('desc_ru')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                </div>

                                <br>


                                <div class="form-row">
                                    <div class="col">
                                        <label for="likes">{{trans('Teacher_trans.likes')}}</label>
                                        <input type="number" name="likes"  value="{{old('likes', $place->likes)}}" class="form-control"  min="0">
                                        @error('likes')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="unlikes">{{trans('Teacher_trans.unlikes')}}</label>
                                        <input type="number" name="unlikes"  value="{{old('unlikes', $place->unlikes)}}" class="form-control" min="0" >
                                        @error('unlikes')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <div class="form-group col">
                                        <label for="status">{{trans('Teacher_trans.status')}}</label>
                                        <select class="custom-select my-1 mr-sm-2 form-control" style="height: max-content" name="status">
                                            <option disabled>{{trans('Parent_trans.Choose')}} <span class="text-dark">&#x26DB;</span></option>
                                            <option value="{{(int)0}}" {{ old('status' , (int)$place->status) == (int)0 ? 'selected' : '' }}>{{trans('Parent_trans.deactive')}}</option>
                                            <option value="{{(int)1}}" {{ old('status' , (int)$place->status) == (int)1 ? 'selected' : '' }}>{{trans('Parent_trans.active')}}</option>

                                        </select>
                                        @error('status')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>

                                <br>
                                <hr>
                                <br>
                                <div class="row">

                                    <div class="form-group col">
                                        <label for="image">{{trans('Teacher_trans.image')}}</label>
                                        <input type="file" class="form-control"   name="image[]"  value="{{old('image.0')}}" />
                                        @error('image')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>


                                    <div class="form-group col">
                                        <label for="image2">{{trans('Teacher_trans.image2')}}</label>
                                        <input type="file" class="form-control" name="image[]"  value="{{old('image.1')}}" />
                                        @error('image2')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="form-group col">
                                        <label for="image3">{{trans('Teacher_trans.image3')}}</label>
                                        <input type="file" class="form-control" name="image[]"  value="{{old('image.2')}}" />
                                        @error('image3')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col">
                                        <label for="image4">{{trans('Teacher_trans.image4')}}</label>
                                        <input type="file" class="form-control" name="image[]"  value="{{old('image.3')}}" />
                                        @error('image4')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="form-group col">
                                        <label for="bg_image">{{trans('Teacher_trans.bg_image')}}</label>
                                        <input type="file" class="form-control" name="image[]"  value="{{old('image.4')}}" />
                                        @error('bg_image')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col">
                                        <label for="bottom_images1">{{trans('Teacher_trans.bottom_images1')}}</label>
                                        <input type="file" class="form-control" name="image[]"  value="{{old('image.5')}}" />
                                        @error('bottom_images[]')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                    <br>

                                    <div class="form-group col">
                                        <label for="bottom_images2">{{trans('Teacher_trans.bottom_images2')}}</label>
                                        <input type="file" class="form-control" name="image[]"  value="{{old('image.6')}}" />
                                        @error('bottom_images[]')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>


                                </div>
                                <br>
                                <hr>
                                <br>
                                <div class="form-row">

                                    <!-- menu images only -->
                                    <div class="form-group col">
                                        <label for="menu[]">{{trans('Teacher_trans.menu[]')}}</label>
                                        <input type="file" class="form-control" name="menu[]"  value="{{old('menu.0')}}" />
                                        @error('menu[]')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <!--------------------------->
                                    <div class="form-group col">
                                        <label for="menu[]">{{trans('Teacher_trans.menu[]')}}</label>
                                        <input type="file" class="form-control" name="menu[]"  value="{{old('menu.1')}}" />
                                        @error('menu[]')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <!--------------------------->

                                    <div class="form-group col">
                                        <label for="menu[]">{{trans('Teacher_trans.menu[]')}}</label>
                                        <input type="file" class="form-control" name="menu[]"  value="{{old('menu.2')}}" />
                                        @error('menu[]')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <!--------------------------->

                                    <div class="form-group col">
                                        <label for="menu[]">{{trans('Teacher_trans.menu[]')}}</label>
                                        <input type="file" class="form-control" name="menu[]"  value="{{old('menu.3')}}" />
                                        @error('menu[]')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <!-- menu images only -->

                                </div>
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



                                    {{--                        ///////////////////search box///////////////////////--}}



                                    <div class="text-center w-25 search-custom">
                                        <input type="text" name="search" id="search" class="form-control"  value="{{old('search')}}" placeholder="search here" /><span class='hide btn btn-secondary btn-sm float-right' id='x_dismiss'>x</span>
                                    </div>
                                    <div id="search_list">

                                    </div>

                                    {{--                        ///////////////////search box///////////////////////--}}


                                </div>
                                <br>
                                <div class="form-row">
                                    <div class="col">
                                        <label for="my_seller_name">{{trans('Teacher_trans.seller')}}</label>
                                        <input type="text" value="{{old('my_seller_name' , $place->seller->name)}}" class="form-control" name="my_seller_name" id="my_seller_name">
                                        <input type="hidden"  value="{{old('seller_id' , $place->seller->id)}}" name="seller_id" id="my_seller_id">
                                        @error('seller_id')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>

                                <br>
                                <div class="form-row">
                                    <div class="col">
                                        <label for="category">{{trans('Teacher_trans.category')}}</label>
                                        <select name="category" class="form-control p-2">
                                            <option>Choose category</option>
                                            @foreach($categories as $category)
                                                <option class="form-control"  value="{{(int)$category->id}}" {{ old('category' , (int)$place->category->id) == (int)$category->id ? 'selected' : '' }} >{{$category->title}}</option>
                                            @endforeach
                                        </select>
                                        @error('category')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>

                                <br>
                                <div class="form-row">
                                    <div class="form-group col">
                                        <label for="joining_date">joining_date:</label>
                                        <input class="form-control" type="date" name="joining_date"  value="{{old('joining_date' , $place->joining_date)}}" id="joining_date" >
                                        @error('joining_date')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror

                                    </div>
                                </div>
                                <br>

                                <br>
                                <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" type="submit">{{trans('Parent_trans.Next')}}</button>
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


    <script>
        // $.ajaxSetup({
        //     headers: {
        //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //     }
        // });
        $(document).ready(function(){
            $('#search').on('keyup' , function(){
                $('#x_dismiss').addClass('show');

                var query = $(this).val();

                $.ajax({
                    url:"{{route('search.seller')}}",
                    type:"GET",
                    data:{'search':query},
                    success:function(data){
                        $('#search_list').html(data);
                    }
                });
            });

            /////////////////////


            ///////////////////////////

            $('#x_dismiss').on('click' ,function(){
                $('#table-live-search').fadeOut();
                $('#x_dismiss').removeClass('show');

            });



        });


        ///////////////////get value  from seller search to an input field////////////////////


        function getVal(object) {
            var myVal = object.getAttribute('data-val');
            var myNameVal = object.getAttribute('data-name');

            var myId =  document.getElementById('my_seller_id');
            var myName = document.getElementById('my_seller_name');
            myId.value =  myVal;
            myName.value = myNameVal;
        }


        ////////////////////////

    </script>

@endsection
