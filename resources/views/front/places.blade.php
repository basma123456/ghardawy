
@extends('layouts_front.master')

@section('css')
    @toastr_css
    <style>
        .noImageStyle{
            background-color: #2986ff8f;
            height: 24.5em;
        }
    </style>
@endsection




@section('main')
<section class="main">
    <!-- best places -->
    <div class="best-places">
        <div class="container">
            <!-- search -->
            <div class="head-border" style="background-repeat: no-repeat;">
                <form method="get" action="{{route('get.cat.region')}}"  class="col-lg-6 col-12 my-4 m-auto border border-primary p-0 shadow w-85-md">
                    @csrf
                    <div class="d-flex justify-content-around">
                        <select name="cat_id" class="form-select rounded-0 text-center txt-col-main uk-text-bolder py-3" aria-label="Default select example">
                            <option selected>Categories</option>
                            @foreach($cats as $cat)
                            <option value="{{$cat->id}}">{{$cat->title}}</option>
                                @endforeach
                        </select>
                        <select name="region_id"  class="form-select rounded-0 text-center txt-col-main uk-text-bolder py-3" aria-label="Default select example">
                            <option selected>All Regions</option>
                            @foreach($regions as $region)
                            <option value="{{$region->id}}">{{$region->government}} {{$region->city}} {{$region->district}}</option>
                                @endforeach
                        </select>
                    </div>
                    <a  class="btn btn-primary w-100 rounded-0 uk-text-bolder py-3"><input type="submit" value="search" /></a>
                </form>
            </div>
            <!-- pleaces -->
            <div class="my-4">
                <div class="row">
                    @isset($places)
                        @foreach($places as $place)

                            <!-- place -->
                            <div class="uk-cover-container col-md-6 col-12 my-3">
                                <a href="{{url('place_page/')}}/{{$place->id}}">
                                    <div class="noImageStyle">
{{--                                        <img src="{{asset('assets/images_front/places/'.$place->photos()[0])}}" alt="">--}}
                                        <img class="placeImage" src="{{asset($place->photos()[0] ? 'assets/images_front/places/'.$place->photos()[1] : 'assets/images_front/places/no_image.png')}}"  />

                                    </div>
                                </a>
                                <div class="uk-position-top-left d-flex mx-2 px-3">
{{--                                    <img src="{{asset('assets/images_front/places/'.$place->photos()[1])}}" class="rounded-circle px-1" style="width: 55px; height: 50px;" alt="">--}}
                                    <h2 class="text-white m-0 widthPlaceTitle">{{$place->title}}</h2>

                                    <img src="{{asset($place->photos()[1] ? 'assets/images_front/places/'.$place->photos()[0] : 'assets/images_front/places/no_image.png')}}"  class="rounded-circle px-1" style="width: 55px; height: 50px;" alt=""/>
                                </div>
                                <div class="uk-position-top-right d-flex px-3">
                                    <h2 class="text-white">like {{$place->likes}}</h2>
                                </div>
                                <div class="uk-position-bottom-center d-flex align-items-baseline pb-4 uk-panel">
                                    <p class="text-white text-center p-3 p-md-4 p-sm-5">{{$place->desc}}.</p>
                                </div>
                            </div>
                        @endforeach
                       {{$places->links()}}
                    @endisset
                </div>
            </div>
        </div>
    </div>
</section>
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
                    url:"{{url('places/')}}"+"/"+catId+"/"+regionId,
                    type:"GET",
                    data:{'search':query},
                    success:function(data){
                        // $('#search_list').html(data);
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
