
@extends('layouts_front.master')

@section('css')
    @toastr_css
@endsection


@section('main')


    <!-- start main -->
<section class="main">
    <div class="container">

        <form action="{{\LaravelLocalization::localizeURL(route('apply.store'))}}" method="post" class="my-5 p-3 rounded-3 w-75 m-auto">
            @csrf
            <div class="row my-2">
                <div class="col-4">
                    <input type="text" class="form-control" name="title" placeholder="{{trans('front_apply.place_name')}}">
                    @error('title')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror

                </div>
                <div class="col-8">
                    <input type="text" class="form-control" name="desc" placeholder="{{trans('front_apply.about_place')}}">
                    @error('desc')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror

                </div>
            </div>
            <div class="row my-2">
                <div class="col-4">
                    <input type="text" class="form-control" name="address" placeholder="{{trans('front_apply.address')}}">
                    @error('address')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror

                </div>
                <div class="col-8">
                    <input type="text" class="form-control" name="phone" placeholder="{{trans('front_apply.phone_number')}}">
                    @error('phone')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror

                </div>
            </div>
            <div class="my-5">
                <textarea class="form-control" name="place_progress" placeholder="{{trans('front_apply.What_are_you_progress')}} ?" rows="3"></textarea>
                @error('place_progress')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror

            </div>
            <p class="text-center">{{trans('front_apply.Click_submit_and_we_ll_contact_with_you')}}</p>
            <button type="submit" class="btn btn-primary col-12">{{trans('front_apply.Submit')}}</button>
        </form>
    </div>

</section>
<!-- End main -->
@endsection
