@extends('layouts.app')

@section('title')
  {{ config('app.name') }} | Home
@endsection

@section('content')
<div class="container" style="width: 100%;">
    <div class="row">
        <div class="col-md-2">
            <div class="panel panel-default">
                <div class="panel-heading">Menu</div>

                <div class="panel-body">

                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="panel panel-default">
                <div class="panel-heading">Stats</div>

                <div class="panel-body">
                    Also Coming Soon!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
