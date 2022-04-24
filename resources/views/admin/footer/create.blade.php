@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    {{ trans('admin_footer.Add_footer') }}
@stop
@endsection
@section('page-header')

    <!-- breadcrumb -->
@section('PageTitle')
    {{ trans('admin_footer.Add_Teacher') }}
@stop
<!-- breadcrumb -->
@endsection
@section('content')
    @if(count($errors) > 0 )
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <ul class="p-0 m-0" style="list-style: none;">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
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

                            <form action="{{\LaravelLocalization::localizeURL(route('footer.store'))}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">
                                    <div class="col">
                                        <label for="description_ar">{{trans('admin_footer.description_ar')}}</label>
                                        <input type="text"  value="{{old('description_ar')}}" name="description_ar" class="form-control">
                                        @error('description_ar')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="description_en">{{trans('admin_footer.description_en')}}</label>
                                        <input type="text"  value="{{old('description_en')}}" name="description_en" class="form-control">
                                        @error('description_en')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                    <div class="col">
                                        <label for="description_ru">{{trans('admin_footer.description_ru')}}</label>
                                        <input type="text"  value="{{old('description_ru')}}" name="description_ru" class="form-control">
                                        @error('description_ru')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                </div>
                                <hr>
                                <br>


                                <div class="form-row">
                                    <div class="col">
                                        <label for="address_ar">{{trans('admin_footer.address_ar')}}</label>
                                        <input name="address_ar"  class="form-control" value="{{old('address_ar')}}" />
                                        @error('address_ar')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="address_en">{{trans('admin_footer.address_en')}}</label>
                                        <input name="address_en"  class="form-control" value="{{old('address_en')}}" />
                                        @error('address_en')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                    <div class="col">
                                        <label for="address_ru">{{trans('admin_footer.address_ru')}}</label>
                                        <input name="address_ru" class="form-control" value="{{old('address_ru')}}" />
                                        @error('address_ru')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                </div>
                                <hr>
                                <br>
                                <div class="form-row">
                                    <div class="col">
                                        <label for="email1">{{trans('admin_footer.email1')}}</label>
                                        <input type="email"  value="{{old('email1')}}" name="email1" class="form-control">
                                        @error('email1')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="email2">{{trans('admin_footer.email2')}}</label>
                                        <input type="email"  value="{{old('email2')}}" name="email2" class="form-control">
                                        @error('email2')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>


                                </div>

                                <hr>


                                <br>
                                <div class="form-row">
                                    <div class="col">
                                        <label for="phone[]">{{trans('admin_footer.phone[]')}}</label>
                                        <input type="text"  value="{{old('phone[]')}}" name="phone[]" class="form-control">
                                        @error('phone')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="phone[]">{{trans('admin_footer.phone[]')}}</label>
                                        <input type="text"  value="{{old('phone[]')}}" name="phone[]" class="form-control">
                                        @error('phone[]')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="phone[]">{{trans('admin_footer.phone[]')}}</label>
                                        <input type="text"  value="{{old('phone[]')}}" name="phone[]" class="form-control">
                                        @error('phone[]')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>


                                </div>

                                <hr>



                                <br>
                                <br>




                                <br>
                                <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" type="submit">{{trans('admin_footer.Next')}}</button>
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
