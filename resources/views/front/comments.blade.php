
@extends('layouts_front.master')

@section('css')
    @toastr_css
@endsection

@section('main')
@if(count($comments) > 0 )
    <div class="container">

    @foreach($comments as $comment)
        <br>
    <div class="uk-card uk-card-primary uk-width-2-2@m">
        <div class="uk-card-header">
            <div class="uk-grid-small uk-flex-middle" uk-grid>
                <div class="uk-width-auto">
                    <img  class="rounded-circle px-1" style="width: 55px; height: 50px;" src="{{asset('assets/images_bg_front/pexels-ray-piedra-1478442.png')}}">
                </div>
                <div class="uk-width-expand">
                    <h3 class="uk-card-title uk-margin-remove-bottom">{{$comment->user->name}}</h3>
                </div>
            </div>
            <div class="uk-grid-small uk-flex-middle" uk-grid>
                <p class="px-3">
                    <i class="{{(int)$comment->unlikes === (int)1 ? 'uk-text-danger fa-solid fa-thumbs-down' : 'text-white fa-solid fa-thumbs-up'}}"></i> {{(int)$comment->unlikes === (int)1 ? trans('front_comment.Dislike') : trans('front_comment.Like')}}
                </p>
                <p class="px-3">
                   {{ trans('front_comment.since')}} &nbsp; <small>{{$comment->created_at}}</small>
                </p>
            </div>
        </div>
        <hr class="list-inline">
        <div class="uk-card-body">
            <p>{{$comment->desc}}.</p>
        </div>
    </div>
        @endforeach
    <br>
    {{$comments->links()}}
    <a class="btn btn-primary text-white btn-sm m-5" onclick="javascript:history.go(-1)">{{trans('front_comment.back')}}</a>
    </div>

@else
    <div class="container">
        <br>
        <br>
        <div class="uk-card uk-card-primary uk-width-2-2@m">
            <div class="uk-card-header">
                <div class="uk-grid-small uk-flex-middle" uk-grid>
                    <div class="uk-width-expand text-center">
                        <h5>{{trans('front_comment.There_is_No_Comments_Yet')}}</h5>
                    </div>
                </div>
                <a class="btn btn-light text-black btn-sm w-25" onclick="javascript:history.go(-1)">{{trans('front_comment.back')}}</a>

            </div>
        </div>
        <br>
        <br>

    </div>
    @endisset
@endsection
