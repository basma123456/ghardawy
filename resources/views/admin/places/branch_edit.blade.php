@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    {{ trans('admin_places.edit_branch') }}
@stop
@endsection
@section('page-header')

    <!-- breadcrumb -->
@section('PageTitle')
    {{ trans('admin_places.edit_branch') }}
@stop
<!-- breadcrumb -->
@endsection
@section('content')
    @if($errors)
        @foreach ($errors->all() as $error)
            <div>{{ $error }}</div>
        @endforeach
    @endif
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
    <h2 class="elegantshadow text-center" >{{trans('admin_places.Branches')}}</h2>

    <div class="row">
        <div class="col-md-12 mb-30">

            <div class="card card-statistics h-100">
                <div class="card-body">

{{--                    @if(session()->has('error'))--}}
{{--                        <div class="alert alert-danger alert-dismissible fade show" role="alert">--}}
{{--                            <strong>{{ session()->get('error') }}</strong>--}}
{{--                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">--}}


{{--                                <span aria-hidden="true">&times;</span>--}}
{{--                            </button>--}}
{{--                        </div>--}}
{{--                    @endif--}}
                    <div class="col-xs-12">
                        <div class="col-md-12">
                            <br>

                            <form action="{{\LaravelLocalization::localizeURL(url('branches.update' , [$place , $placeRegion]))}}" method="post" enctype="multipart/form-data">
                                @csrf
{{--                                place_id region_id address desc phone admin_id super_admin_id--}}

                                <div class="form-row">
                                        {{--                        ///////////////////search box///////////////////////--}}



                                        <input type="hidden" value="{{$place}}" name="place_id" />
                                    <input type="hidden" value="{{$placeRegion}}" name="place_region" />


                                    <div class="text-center w-25 search-custom">
                                            <input type="text" name="search" id="search" class="form-control"  value="{{old('search')}}" placeholder="search here For regions" /><span style="margin-top: -37px;" class='hide btn btn-secondary btn-sm float-right flex' id='x_dismiss'>x</span>
                                        </div>
                                        <div id="search_list">

                                        </div>

                                        {{--                        ///////////////////search box///////////////////////--}}
                                        <br>
                                        <div>
                                            <div class="col">
                                                <input   type="text" placeholder="{{trans('admin_places.region')}}" value="{{old('my_region_name' , $placeRegion->regions->government . ' , ' .  $placeRegion->regions->city . ' , ' .  $placeRegion->regions->district  )}}" class="form-control" name="my_region_name" id="my_region_name">
                                                <input type="hidden"  value="{{old('region_id', $placeRegion->region_id ?? '')}}" name="region_id" id="my_region_id">
                                                @error('region_id')
                                                <div class="alert alert-danger">{{$message}}</div>
                                                @enderror
                                            </div>
                                        </div>

                                </div>

                                    <hr>
                                <div class="form-row">
                                    <div class="col">
                                        <label for="address_ar">{{trans('admin_places.address_ar')}}</label>
                                        <input name="address_ar" class="form-control" value="{{old('address_ar', $placeRegion->getTranslation('address' , 'ar') ?? '')}}" />
                                        @error('address_ar')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="address_en">{{trans('admin_places.address_en')}}</label>
                                        <input name="address_en" class="form-control"  value="{{old('address_en', $placeRegion->getTranslation('address' , 'en')  ?? '')}}" />
                                        @error('address_en')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                    <div class="col">
                                        <label for="address_ru">{{trans('admin_places.address_ru')}}</label>
                                        <input name="address_ru" class="form-control"  value="{{old('address_ru', $placeRegion->getTranslation('address' , 'ru') ?? '')}}" />
                                        @error('address_ru')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                </div>
                                <hr>

                                <br>

                                <div class="form-row">
                                    <div class="col">
                                        <label for="desc_ar">{{trans('admin_places.desc_ar')}}</label>
                                        <textarea name="desc_ar" class="form-control" rows="4">{{old('desc_ar', $placeRegion->getTranslation('desc' , 'ar') ?? '')}}</textarea>
                                        @error('desc_ar')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="desc_en">{{trans('admin_places.desc_en')}}</label>
                                        <textarea name="desc_en" class="form-control" rows="4">{{old('desc_en', $placeRegion->getTranslation('desc' , 'en') ?? '')}}</textarea>
                                        @error('desc_en')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                    <div class="col">
                                        <label for="desc_ru">{{trans('admin_places.desc_ru')}}</label>
                                        <textarea name="desc_ru" class="form-control" rows="4">{{old('desc_ru', $placeRegion->getTranslation('desc' , 'ru') ?? '')}}</textarea>
                                        @error('desc_ru')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                </div>
                                <hr>

                                <div class="col">
                                    <label for="desc_ru">{{trans('admin_places.phone')}}</label>
                                    <input name="phone" class="form-control" value="{{old('phone', $placeRegion->phone ?? '')}}" />
                                    @error('phone')
                                    <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                </div>

                                <br>
                                <hr>
                                <div class="col">
                                    <label for="status">{{trans('admin_places.status')}}</label>
                                    <select  class="form-control h-75" name="status" >
                                        <option  value="" class="form-control" > Choose Status </option>
                                        <option  value="{{(int)1}}"  {{ old('status' , $placeRegion->status) == (int)1 ? 'selected' : '' }} class="form-control" > {{trans('admin_places.active')}} </option>
                                        <option  value="{{(int)0}}" {{ old('status' , $placeRegion->status) == (int)0 ? 'selected' : '' }} class="form-control" > {{trans('admin_places.un_active')}} </option>


                                    </select>
                                    @error('status')
                                    <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <br>
                                <br>

                              <span> <input type="hidden" id="placeRegion" name="place_region"   value="{{old('place_region', $placeRegion->place_region ?? '')}}" />
                                  @error('place_region')
                                  <div class="alert alert-danger">{{$message}}</div>
                                  @enderror

                              </span>

                                <br>
                                <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" type="submit">{{trans('admin_places.Next')}}</button>
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
                    url:"{{route('search.region.branch')}}",
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


            var placeRegion = document.getElementById('placeRegion');
            var myId =  document.getElementById('my_region_id');
            var myName = document.getElementById('my_region_name');
            myId.value =  myVal;
            myName.value = myNameVal;
            placeRegion.value =  myVal + "{{$place}}" ;
        }


        ////////////////////////

    </script>

@endsection
