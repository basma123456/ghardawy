@include('layouts_front.head')
@include('layouts_front.header')

@yield('css')
<style>
    .h-cat {
        height: 100% !important;
    }
    img{
        object-fit: cover;
    }

</style>

@yield('title')

@yield('main')

{{--<x-login-modal name="basma from component" :users="$users"/>--}}

@include('layouts_front.modal')

@include('layouts_front.footer')
