@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    {{ trans('admin_regions.edit_region') }}
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    {{ trans('admin_regions.Add_Teacher') }}
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

                            <form action="{{ \LaravelLocalization::localizeURL(route('regions.update', $region->id))}}" method="post" enctype="multipart/form-data">
                                @method('Put')
                                @csrf
                                <input name="id" type="hidden" value="{{$region->id}}"  />
                                <div class="form-row">
                                    <div class="col">
                                        <label for="government_ar">{{trans('admin_regions.government_ar')}}</label>
                                        <input type="text"  value="{{old('government_ar', $region->getTranslation('government', 'ar'))}}" name="government_ar" class="form-control">
                                        @error('government_ar')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="government_en">{{trans('admin_regions.government_en')}}</label>
                                        <input type="text"  value="{{old('government_en', $region->getTranslation('government', 'en'))}}" name="government_en" class="form-control">
                                        @error('government_en')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                    <div class="col">
                                        <label for="government_ru">{{trans('admin_regions.government_ru')}}</label>
                                        <input type="text"  value="{{old('government_ru', $region->getTranslation('government', 'ru'))}}" name="government_ru" class="form-control">
                                        @error('government_ru')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                </div>


                                <br>

                                <div class="form-row">
                                    <div class="col">
                                        <label for="city_ar">{{trans('admin_regions.city_ar')}}</label>
                                        <input name="city_ar"   class="form-control" value="{{old('city_ar' ,$region->getTranslation('city' , 'ar'))}}" />
                                        @error('city_ar')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="city_en">{{trans('admin_regions.city_en')}}</label>
                                        <input name="city_en"  class="form-control" value="{{old('city_en',$region->getTranslation('city' , 'en'))}}" />
                                        @error('city_en')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                    <div class="col">
                                        <label for="city_ru">{{trans('admin_regions.city_ru')}}</label>
                                        <input name="city_ru" class="form-control" value="{{old('city_ru',$region->getTranslation('city' , 'ru'))}}" />
                                        @error('city_ru')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                </div>
                                <br>



                                <div class="form-row">
                                    <div class="col">
                                        <label for="district_ar">{{trans('admin_regions.district_ar')}}</label>
                                        <input name="district_ar"   class="form-control" value="{{old('district_ar' ,$region->getTranslation('district' , 'ar'))}}" />
                                        @error('district_ar')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="district_en">{{trans('admin_regions.district_en')}}</label>
                                        <input name="district_en"  class="form-control" value="{{old('district_en',$region->getTranslation('district' , 'en'))}}" />
                                        @error('district_en')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                    <div class="col">
                                        <label for="district_ru">{{trans('admin_regions.district_ru')}}</label>
                                        <input name="district_ru" class="form-control" value="{{old('district_ru',$region->getTranslation('district' , 'ru'))}}" />
                                        @error('district_ru')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                </div>
                                <br>



                                <div class="form-row">
                                    <div class="col">
                                        <label for="desc_ar">{{trans('admin_regions.desc_ar')}}</label>
                                        <textarea name="desc_ar" class="form-control" rows="4">{{old('desc_ar',$region->getTranslation('desc' , 'ar'))}}</textarea>
                                        @error('desc_ar')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="desc_en">{{trans('admin_regions.desc_en')}}</label>
                                        <textarea name="desc_en" class="form-control" rows="4">{{old('desc_en',$region->getTranslation('desc' , 'en'))}}</textarea>
                                        @error('desc_en')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                    <div class="col">
                                        <label for="desc_ru">{{trans('admin_regions.desc_ru')}}</label>
                                        <textarea name="desc_ru" class="form-control" rows="4">{{old('desc_ru',$region->getTranslation('desc' , 'ru'))}}</textarea>
                                        @error('desc_ru')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                </div>

                                <br>


                                <hr>


                                <br>
                                <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" type="submit">{{trans('admin_regions.Next')}}</button>
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
