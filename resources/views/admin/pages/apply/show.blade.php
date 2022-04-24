@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    {{trans('admin_apply.apply_show')}}
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    {{trans('admin_apply.Student_details')}}
@stop
<!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="card-body">
                        <div class="tab nav-border">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active show" id="home-02-tab" data-toggle="tab" href="#home-02"
                                       role="tab" aria-controls="home-02"
                                       aria-selected="true">{{trans('admin_apply.Student_details')}}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-02-tab" data-toggle="tab" href="#profile-02"
                                       role="tab" aria-controls="profile-02"
                                       aria-selected="false">{{trans('admin_apply.Attachments')}}</a>
                                </li>
                            </ul>
                            @if(isset($applyPlace))
                                <div class="tab-content">
                                    <div class="tab-pane fade active show" id="home-02" role="tabpanel"
                                         aria-labelledby="home-02-tab">
                                        <table class="table table-striped table-hover" style="text-align:center">
                                            <tbody>
                                            <tr>
                                                <th class="text-success" scope="row">{{trans('admin_apply.title')}}</th>
                                                <td>{{ $applyPlace->title }}</td>
                                                <th class="text-success" scope="row">{{trans('admin_apply.phone')}}</th>
                                                <td>{{$applyPlace->phone}}</td>
                                                <th class="text-success" scope="row">{{trans('admin_apply.created_at')}}</th>
                                                <td>{{$applyPlace->created_at}}</td>
                                            </tr>

                                            <tr>
                                                <th class="text-success" scope="row">{{trans('admin_apply.status')}}</th>
                                                <td>{{ $applyPlace->status}}</td>
                                                <th class="text-success" scope="row">{{trans('admin_apply.admin')}}</th>
                                                <td>{{$applyPlace->admin}}</td>
                                                <th class="text-success" scope="row">{{trans('admin_apply.super_admin')}}</th>
                                                <td>{{ $applyPlace->super_admin}}</td>
                                            </tr>


                                            <tr>
                                                <th class="text-success" scope="row">{{trans('admin_apply.desc')}}</th>
                                                <td colspan="6">{{ $applyPlace->description}}</td>
                                            </tr>

                                            <tr>
                                                <th class="text-success" scope="row">{{trans('admin_apply.place_progress')}}</th>
                                                <td colspan="6">{{ $applyPlace->place_progress}}</td>
                                            </tr>
                                            <tr>
                                                <th class="text-success" scope="row">{{trans('admin_apply.address')}}</th>
                                                <td colspan="6">{{ $applyPlace->address}}</td>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>


                                    <!--/***************************************************/-->
                                    <div class="tab-pane fade" id="profile-02" role="tabpanel"
                                         aria-labelledby="profile-02-tab">
                                        <div class="card card-statistics">
                                            <div class="card-body">
                                                <form method="post" action="{{route('apply_place.update' , $applyPlace->id)}}" enctype="multipart/form-data">
                                                    @method('PUT')
                                                    @csrf
{{--                                                            <input type="file" accept="image/*" name="photos[]" multiple required>--}}
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                        <label class="btn btn-primary  {{$applyPlace->status == 'no_action_yet'?'active focus':''}}">
                                                            <input type="radio" name="options"   id="option1" value="no_action_yet" {{$applyPlace->status == 'no_action_yet'?'checked':''}}> {{trans('admin_apply.no_action_yet')}}
                                                        </label>
                                                        <label class="btn btn-secondary  {{$applyPlace->status == 'postponed'?'active focus':''}}">
                                                            <input type="radio" name="options"  value="postponed" id="option2"  {{$applyPlace->status == 'postponed'?'checked':''}}> {{trans('admin_apply.postponed')}}
                                                        </label>
                                                        <label class="btn btn-success  {{$applyPlace->status == 'accepted'?'active focus':''}}">
                                                            <input type="radio" name="options"  value="accepted"  id="option3"  {{$applyPlace->status == 'accepted'?'checked':''}}> {{trans('admin_apply.accepted')}}
                                                        </label>
                                                        <label class="btn btn-danger  {{$applyPlace->status == 'rejected'?'active focus':''}}">
                                                            <input type="radio" name="options"  value="rejected"  id="option3"  {{$applyPlace->status == 'rejected'?'checked':''}}> {{trans('admin_apply.rejected')}}
                                                        </label>
                                                        <label class="btn btn-warning  {{$applyPlace->status == 'called'?'active focus':''}}">
                                                            <input type="radio" name="options" value="called"   id="option3"  {{$applyPlace->status == 'called'?'checked':''}}> {{trans('admin_apply.called')}}
                                                        </label>

                                                    </div>
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <button type="submit" class="button button-border x-small">
                                                        {{trans('admin_apply.submit')}}
                                                    </button>
                                                </form>
                                            </div>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>

                </div>
            </div>

            <!-- row closed -->
            @endsection
            @section('js')
                @toastr_js
                @toastr_render
@endsection
