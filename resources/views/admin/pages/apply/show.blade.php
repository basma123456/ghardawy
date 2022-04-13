@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    {{trans('Students_trans.Student_details')}}
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    {{trans('Students_trans.Student_details')}}
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
                                       aria-selected="true">{{trans('Students_trans.Student_details')}}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-02-tab" data-toggle="tab" href="#profile-02"
                                       role="tab" aria-controls="profile-02"
                                       aria-selected="false">{{trans('Students_trans.Attachments')}}</a>
                                </li>
                            </ul>
                            @if(isset($applyPlace))
                                <div class="tab-content">
                                    <div class="tab-pane fade active show" id="home-02" role="tabpanel"
                                         aria-labelledby="home-02-tab">
                                        <table class="table table-striped table-hover" style="text-align:center">
                                            <tbody>
                                            <tr>
                                                <th class="text-success" scope="row">{{trans('Students_trans.title')}}</th>
                                                <td>{{ $applyPlace->title }}</td>
                                                <th class="text-success" scope="row">{{trans('Students_trans.phone')}}</th>
                                                <td>{{$applyPlace->phone}}</td>
                                                <th class="text-success" scope="row">{{trans('Students_trans.created_at')}}</th>
                                                <td>{{$applyPlace->created_at}}</td>
                                            </tr>

                                            <tr>
                                                <th class="text-success" scope="row">{{trans('Students_trans.status')}}</th>
                                                <td>{{ $applyPlace->status}}</td>
                                                <th class="text-success" scope="row">{{trans('Students_trans.admin')}}</th>
                                                <td>{{$applyPlace->admin}}</td>
                                                <th class="text-success" scope="row">{{trans('Students_trans.super_admin')}}</th>
                                                <td>{{ $applyPlace->super_admin}}</td>
                                            </tr>


                                            <tr>
                                                <th class="text-success" scope="row">{{trans('Students_trans.desc')}}</th>
                                                <td colspan="6">{{ $applyPlace->description}}</td>
                                            </tr>

                                            <tr>
                                                <th class="text-success" scope="row">{{trans('Students_trans.place_progress')}}</th>
                                                <td colspan="6">{{ $applyPlace->place_progress}}</td>
                                            </tr>
                                            <tr>
                                                <th class="text-success" scope="row">{{trans('Students_trans.address')}}</th>
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
                                                            <input type="radio" name="options"   id="option1" value="no_action_yet" {{$applyPlace->status == 'no_action_yet'?'checked':''}}> no_action_yet
                                                        </label>
                                                        <label class="btn btn-secondary  {{$applyPlace->status == 'postponed'?'active focus':''}}">
                                                            <input type="radio" name="options"  value="postponed" id="option2"  {{$applyPlace->status == 'postponed'?'checked':''}}> postponed
                                                        </label>
                                                        <label class="btn btn-success  {{$applyPlace->status == 'accepted'?'active focus':''}}">
                                                            <input type="radio" name="options"  value="accepted"  id="option3"  {{$applyPlace->status == 'accepted'?'checked':''}}> accepted
                                                        </label>
                                                        <label class="btn btn-danger  {{$applyPlace->status == 'rejected'?'active focus':''}}">
                                                            <input type="radio" name="options"  value="rejected"  id="option3"  {{$applyPlace->status == 'rejected'?'checked':''}}> rejected
                                                        </label>
                                                        <label class="btn btn-warning  {{$applyPlace->status == 'called'?'active focus':''}}">
                                                            <input type="radio" name="options" value="called"   id="option3"  {{$applyPlace->status == 'called'?'checked':''}}> called
                                                        </label>

                                                    </div>
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <button type="submit" class="button button-border x-small">
                                                        {{trans('Students_trans.submit')}}
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
