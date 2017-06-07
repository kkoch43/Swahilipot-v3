@extends('layouts.app')

@section('title')
  {{ config('app.name') }} | Home
@endsection

@section('content')
<div class="container" style="width: 100%;">
    <div class="row">
        <div class="col-md-2">
            <div class="panel panel-default">
                <div class="admin-profile-picture">
                    @if (Storage::disk('user_profile_pic')->has(Auth::user()->profile_pic))
                        <img class="img-responsive img-circle" src="{{ route('get.profile_pic', ['filename'=>'']) }}" title="" alt="">
                    @else
                        <img class="admin-profile-picture img-responsive img-circle" src="{{ url('img/profile.png')}}" title="" alt="">
                    @endif
                </div>
                <div class="panel-body">

                </div>
            </div>
        </div>
        <div class="col-md-10" style="padding-left: 0px;">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        You are logged in!
                    </div>
                </div>
            </div>
            <div class="col-md-8">
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">Stats</div>

                    <div class="panel-body">
                        Also Coming Soon!
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
