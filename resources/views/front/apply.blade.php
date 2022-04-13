
@extends('layouts_front.master')

@section('css')
    @toastr_css
@endsection

@section('header')
    @include('layouts_front.nav')
@endsection


@section('main')


    <!-- start main -->
<section class="main">
    <div class="container">
        <form action="{{route('apply.store')}}" method="post" class="my-5 p-3 rounded-3 w-75 m-auto">
            @csrf
            <div class="row my-2">
                <div class="col-4">
                    <input type="text" class="form-control" name="title" placeholder="place name">
                    @error('title')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror

                </div>
                <div class="col-8">
                    <input type="text" class="form-control" name="desc" placeholder="about place">
                    @error('desc')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror

                </div>
            </div>
            <div class="row my-2">
                <div class="col-4">
                    <input type="text" class="form-control" name="address" placeholder="address">
                    @error('address')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror

                </div>
                <div class="col-8">
                    <input type="text" class="form-control" name="phone" placeholder="phone number">
                    @error('phone')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror

                </div>
            </div>
            <div class="my-5">
                <textarea class="form-control" name="place_progress" placeholder="What are you progress ?" rows="3"></textarea>
                @error('place_progress')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror

            </div>
            <p class="text-center">Click submit and we 'll contact with you</p>
            <button type="submit" class="btn btn-primary col-12">Submit</button>
        </form>
    </div>

</section>
<!-- End main -->
@endsection
