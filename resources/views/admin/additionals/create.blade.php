@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    {{ trans('admin_additions.Add_Teacher') }}
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    {{ trans('admin_additions.Add_Teacher') }}
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
{{--title desc type place_id admin_id super_admin_id status  // here --}}

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

                            <form action="{{  \LaravelLocalization::localizeURL(route('additions.store')) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">
                                    <div class="col">
                                        <label for="title_ar">{{trans('admin_additions.title_ar')}}</label>
                                        <input type="text"  value="{{old('title_ar')}}" name="title_ar" class="form-control">
                                        @error('title_ar')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="title_en">{{trans('admin_additions.title_en')}}</label>
                                        <input type="text"  value="{{old('title_en')}}" name="title_en" class="form-control">
                                        @error('title_en')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                    <div class="col">
                                        <label for="title_ru">{{trans('admin_additions.title_ru')}}</label>
                                        <input type="text"  value="{{old('title_ru')}}" name="title_ru" class="form-control">
                                        @error('title_ru')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                </div>
                                <br>




                                <div class="form-row">
                                    <div class="col">
                                        <label for="desc_ar">{{trans('admin_additions.desc_ar')}}</label>
                                        <textarea name="desc_ar"   class="form-control" rows="4">{{old('desc_ar')}}</textarea>
                                        @error('desc_ar')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="desc_en">{{trans('admin_additions.desc_en')}}</label>
                                        <textarea name="desc_en"  class="form-control" rows="4">{{old('desc_en')}}</textarea>
                                        @error('desc_en')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                    <div class="col">
                                        <label for="desc_ru">{{trans('admin_additions.desc_ru')}}</label>
                                        <textarea name="desc_ru" class="form-control" rows="4">{{old('desc_ru')}}</textarea>
                                        @error('desc_ru')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                </div>
                                <br>

                                <br>
                                <hr>
                                <br>
                                <br>

                                {{--                        ///////////////////search box///////////////////////--}}



                                <div class="text-center w-25 search-custom">
                                    <input type="text" name="search" id="search" class="form-control"  value="{{old('search')}}" placeholder="{{trans('admin_additions.search_here')}}" /><span class='hide btn btn-secondary btn-sm float-right' id='x_dismiss'>x</span>
                                </div>
                                <div id="search_list">

                                </div>

                                {{--                        ///////////////////search box///////////////////////--}}



                                <br>
                                <div class="form-row">
                                    <div class="col">
                                        <label for="my_seller_name">{{trans('admin_additions.seller')}}</label>
                                        <input type="text" value="{{old('my_seller_name')}}" class="form-control" name="my_seller_name" id="my_seller_name">
                                        <input type="hidden"  value="{{old('place_id')}}" name="place_id" id="my_place_id">
                                        @error('place_id')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <br>
                                <br>
                                <hr>
                                <br>


                                <div class="form-row">
                                    <div class="form-group col">
                                        <label for="type">{{trans('admin_additions.type')}}</label>
                                        <select class="custom-select my-1 mr-sm-2 form-control" style="height: max-content" name="type">
                                            <option>{{trans('admin_additions.choose')}}<span class="text-dark">&#x26DB;</span></option>
                                                <option value='ads' {{ old('type') == 'ads' ? 'selected' : '' }}>{{trans('admin_additions.ads')}}</option>
                                            <option value="best" {{ old('type') == 'best' ? 'selected' : '' }}>{{trans('admin_additions.best_places')}}</option>
                                            <option value="special" {{ old('type') == 'special' ? 'selected' : '' }}>{{trans('admin_additions.special_places')}}</option>

                                        </select>
                                        @error('type')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <br>
                                <hr>
                                <br>

                                <div class="form-row">
                                    <div class="form-group col">
                                        <label for="type">{{trans('admin_additions.status')}}</label>
                                        <select class="custom-select my-1 mr-sm-2 form-control" style="height: max-content" name="status">
                                            <option>{{trans('admin_additions.Choose')}} <span class="text-dark">&#x26DB;</span></option>
                                            <option value="{{(int)1}}" {{ old('status') == '1' ? 'selected' : '' }}>{{trans('admin_additions.active')}}</option>
                                            <option value='{{(int)0}}' {{ old('status') == '0' ? 'selected' : '' }}>{{trans('admin_additions.deactive')}}</option>

                                        </select>
                                        @error('type')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <br>
                                <hr>
                                <br>





                                <br>
                                <br>

                                <br>
                                <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" type="submit">{{trans('admin_additions.next')}}</button>
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
                    url:"{{route('search.places')}}",
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

            var myId =  document.getElementById('my_place_id');
            var myName = document.getElementById('my_seller_name');
            myId.value =  myVal;
            myName.value = myNameVal;
        }


        ////////////////////////

    </script>

@endsection
