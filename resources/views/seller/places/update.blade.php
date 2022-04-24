@extends('layouts.seller_master')
@section('css')
    @toastr_css
@section('title')
    {{ trans('sellers_places.edit_place') }}
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    {{ trans('sellers_places.Add_Teacher') }}
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

                            <form action="{{\LaravelLocalization::localizeURL(route('places_sellers.update', $place->id))}}" method="post" enctype="multipart/form-data">
                                @method('Put')
                                @csrf
                                <input name="id" type="hidden" value="{{$place->id}}"  />
                                <div class="form-row">
                                    <div class="col">
                                        <label for="title_ar">{{trans('sellers_places.title_ar')}}</label>
                                        <input type="text"  value="{{old('title_ar', $place->getTranslation('title', 'ar'))}}" name="title_ar" class="form-control">
                                        @error('title_ar')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="title_en">{{trans('sellers_places.title_en')}}</label>
                                        <input type="text"  value="{{old('title_en', $place->getTranslation('title', 'en'))}}" name="title_en" class="form-control">
                                        @error('title_en')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                    <div class="col">
                                        <label for="title_ru">{{trans('sellers_places.title_ru')}}</label>
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
                                        <label for="email">{{trans('sellers_places.email')}}</label>
                                        <input type="email"  value="{{old('email', $place->email) ?? ''}}" name="email" class="form-control">
                                        @error('email')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>


                                </div>

                                <br>
                                <div class="form-row">
                                    <div class="col">
                                        <label for="phone">{{trans('sellers_places.phone')}}</label>
                                        <input type="text"  value="{{old('phone', $place->phone)}}" name="phone" class="form-control">
                                        @error('phone')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>


                                </div>

                                <br>

                                <div class="form-row">
                                    <div class="col">
                                        <label for="address_ar">{{trans('sellers_places.address_ar')}}</label>
                                        <textarea name="address_ar"   class="form-control" rows="4">{{old('address_ar' ,$place->getTranslation('address' , 'ar'))}}</textarea>
                                        @error('address_ar')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="address_en">{{trans('sellers_places.address_en')}}</label>
                                        <textarea name="address_en"  class="form-control" rows="4">{{old('address_en',$place->getTranslation('address' , 'en'))}}</textarea>
                                        @error('address_en')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                    <div class="col">
                                        <label for="address_ru">{{trans('sellers_places.address_ru')}}</label>
                                        <textarea name="address_ru" class="form-control" rows="4">{{old('address_ru',$place->getTranslation('address' , 'ru'))}}</textarea>
                                        @error('address_ru')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                </div>
                                <br>

                                <div class="form-row">
                                    <div class="col">
                                        <label for="desc_ar">{{trans('sellers_places.desc_ar')}}</label>
                                        <textarea name="desc_ar" class="form-control" rows="4">{{old('desc_ar',$place->getTranslation('desc' , 'ar'))}}</textarea>
                                        @error('desc_ar')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="desc_en">{{trans('sellers_places.desc_en')}}</label>
                                        <textarea name="desc_en" class="form-control" rows="4">{{old('desc_en',$place->getTranslation('desc' , 'en'))}}</textarea>
                                        @error('desc_en')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                    <div class="col">
                                        <label for="desc_ru">{{trans('sellers_places.desc_ru')}}</label>
                                        <textarea name="desc_ru" class="form-control" rows="4">{{old('desc_ru',$place->getTranslation('desc' , 'ru'))}}</textarea>
                                        @error('desc_ru')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                </div>

                                <br>


                                <br>
                                <hr>
                                <br>
                                <div class="row">

                                    <div class="form-group col">
                                        <label for="image">{{trans('sellers_places.image')}}</label>
                                        <input type="file" class="form-control"   name="image[]"  value="{{old('image.0')}}" />
                                        @error('image')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>


                                    <div class="form-group col">
                                        <label for="image2">{{trans('sellers_places.image2')}}</label>
                                        <input type="file" class="form-control" name="image[]"  value="{{old('image.1')}}" />
                                        @error('image')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="form-group col">
                                        <label for="image3">{{trans('sellers_places.image3')}}</label>
                                        <input type="file" class="form-control" name="image[]"  value="{{old('image.2')}}" />
                                        @error('image')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col">
                                        <label for="image4">{{trans('sellers_places.image4')}}</label>
                                        <input type="file" class="form-control" name="image[]"  value="{{old('image.3')}}" />
                                        @error('image')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="form-group col">
                                        <label for="bg_image">{{trans('sellers_places.image5')}}</label>
                                        <input type="file" class="form-control" name="image[]"  value="{{old('image.4')}}" />
                                        @error('image')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col">
                                        <label for="bottom_images1">{{trans('sellers_places.bottom_images1')}}</label>
                                        <input type="file" class="form-control" name="image[]"  value="{{old('image.5')}}" />
                                        @error('image')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                    <br>

                                    <div class="form-group col">
                                        <label for="bottom_images2">{{trans('sellers_places.bottom_images2')}}</label>
                                        <input type="file" class="form-control" name="image[]"  value="{{old('image.6')}}" />
                                        @error('image')
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
                                        <label for="menu[]">{{trans('sellers_places.menu[]')}}</label>
                                        <input type="file" class="form-control" name="menu[]"  value="{{old('menu.0')}}" />
                                        @error('menu')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <!--------------------------->
                                    <div class="form-group col">
                                        <label for="menu[]">{{trans('sellers_places.menu[]')}}</label>
                                        <input type="file" class="form-control" name="menu[]"  value="{{old('menu.1')}}" />
                                        @error('menu[]')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <!--------------------------->

                                    <div class="form-group col">
                                        <label for="menu[]">{{trans('sellers_places.menu[]')}}</label>
                                        <input type="file" class="form-control" name="menu[]"  value="{{old('menu.2')}}" />
                                        @error('menu[]')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <!--------------------------->

                                    <div class="form-group col">
                                        <label for="menu[]">{{trans('sellers_places.menu[]')}}</label>
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
                                    {{--                                        <label for="seller_id">{{trans('sellers_places.seller_id')}}</label>--}}
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



                                    {{--                        ///////////////////search box///////////////////////--}}


                                </div>
                                <br>

                                <br>
                                <div class="form-row">
                                    <div class="col">
                                        <label for="category">{{trans('sellers_places.category')}}</label>
                                        <select name="category" class="form-control p-2">
                                            <option>{{trans('sellers_places.Choose_category')}}</option>
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
                                <br>
                                <hr>

                                <br>
                                <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" type="submit">{{trans('sellers_places.Next')}}</button>
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
