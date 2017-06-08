@extends('layouts.app')

@section('title')
  {{ config('app.name') }} | Home
@endsection

@section('style')
    <style>

    </style>
@endsection
@section('content')
<div class="container" style="width: 100%;">
    <div class="row">
        <!--Side Bar nav-->
        <div class="col-md-2" style="padding-left: 0px;">
            <div class="panel panel-default dashboard-panel">
                <div class="admin-profile-picture">
                    @if (Storage::disk('user_profile_pic')->has(Auth::user()->profile_pic))
                        <img class="img-responsive img-circle" src="{{ route('get.profile_pic', ['filename'=>'']) }}" title="" alt="">
                    @else
                        <img class="admin-profile-picture img-responsive img-circle" src="{{ url('img/profile.png')}}" title="" alt="">
                    @endif
                </div>
                <hr style="margin: 0 auto;"/>
                <div class="admin-details text-center">
                    <span class="fa-2x">{{ Auth::user()->name }}</span> | Admin<span class="online"></span>
                    <p>Since: &nbsp; &nbsp; {{ explode(' ', Auth::user()->created_at )[0]}}</p>
                </div>
                {{-- <div class="" id="accordion" role="tablist" aria-multiselectable="true"> --}}
                    <a class="list-group-item active" href="#sph-nav-dashboard" role="button"
                    data-toggle="collapse" data-parent="#accordion"
                    aria-expanded="true" aria-controls="sph-dashboard">
                        <i class="fa-home fa"></i>Dashboard
                        <i class="fa fa-angle-right pull-right" aria-hidden="true"></i>
                    </a>
                    <div id="sph-nav-dashboard" class="panel-collapse collapse" role="tabpanel">
                        <a class="list-group-item" href="#">Active</a>
                        <a class="list-group-item" href="#">New Member</a>
                    </div>

                    <a class="list-group-item collapsed" href="#sph-nav-members" role="button"
                    data-toggle="collapse" data-parent="#accordion"
                    aria-expanded="false" aria-controls="sph-members">
                        <i class="fa icon-people icons icon"></i>SPH Members
                        <i class="fa fa-angle-right pull-right" aria-hidden="true"></i>
                    </a>
                    <div id="sph-nav-members" class="panel-collapse collapse" role="tabpanel">
                        <a class="list-group-item" href="#">Active</a>
                        <a class="list-group-item" href="#">New Member</a>
                    </div>

                    <a class="list-group-item collapsed" href="#sph-nav-messaging" role="button"
                    data-toggle="collapse" data-parent="#accordion"
                    aria-expanded="false" aria-controls="sph-messaging">
                        <i class="fa fa-envelope-o"></i>Messaging
                        <i class="fa fa-angle-right pull-right" aria-hidden="true"></i>
                    </a>
                    <div id="sph-nav-messaging" class="panel-collapse collapse" role="tabpanel">
                        <a class="list-group-item" href="#">Active</a>
                        <a class="list-group-item" href="#">New Member</a>
                    </div>

                    <a class="list-group-item" href="#">
                        <i class="fa fa-coffee"></i>Startups
                    </a>
                    <a class="list-group-item" href="#">
                        <i class="fa icon-globe icons icon"></i>Website
                    </a>
                    <a class="list-group-item collapsed" href="#sph-nav-calender" role="button"
                    data-toggle="collapse" data-parent="#accordion"
                    aria-expanded="false" aria-controls="sph-calendar">
                        <i class="fa fa-calendar-o"></i>Calendar
                        <i class="fa fa-angle-right pull-right" aria-hidden="true"></i>
                    </a>
                    <div id="sph-nav-calender" class="panel-collapse collapse" role="tabpanel">
                        <a class="list-group-item" href="#">Active</a>
                        <a class="list-group-item" href="#">New Member</a>
                    </div>

                    <a class="list-group-item collapsed" href="#sph-nav-logs" role="button"
                    data-toggle="collapse" data-parent="#accordion"
                    aria-expanded="false" aria-controls="sph-logs">
                        <i class="fa fa-history"></i>Logs
                        <i class="fa fa-angle-right pull-right" aria-hidden="true"></i>
                    </a>
                    <div id="sph-nav-logs" class="panel-collapse collapse" role="tabpanel">
                        <a class="list-group-item" href="#">Admin Logs</a>
                        <a class="list-group-item" href="#">Member Logs</a>
                    </div>

                    <a class="list-group-item collapsed" href="#sph-nav-settings" role="button"
                    data-toggle="collapse" data-parent="#accordion"
                    aria-expanded="false" aria-controls="sph-settings">
                        <i class="fa icon-settings icons icon"></i>Settings
                        <i class="fa fa-angle-right pull-right" aria-hidden="true"></i>
                    </a>
                    <div id="sph-nav-settings" class="panel-collapse collapse" role="tabpanel">
                        <a class="list-group-item" href="#">Preference</a>
                        <a class="list-group-item" href="#">Edit Profile</a>
                        <a class="list-group-item" href="#">Reset password</a>
                        <a class="list-group-item" href="#">Sign Out</a>
                    </div>
                {{-- </div> --}}
            </div>
        </div>
        <!--End side bar-->

        <div class="col-md-10 dashboard-container" style="padding-left: 0px;">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="fa-2x panel-heading">Dashboard</div>

                    <div class="panel-body">
                        You are logged in!
                    </div>
                </div>
            </div>

            <!--Statistics cards-->
            <div class="col-md-8" style="padding: 0px;">
                <div class="col-md-6">
                    <div class="card">
                        <div class="fa-2x">Members <i class="icon-user icons icon pull-right" aria-hidden="true"></i></div>
                        <div class="card-content text-center">
                            <span class="fa-3x">623</span>
                            <p>Registered Members</p>
                        </div>
                        <hr/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="fa-2x">Site Visits <i class=" pull-right" aria-hidden="true"></i></div>
                        <div class="card-content text-center">
                            <span class="fa-3x">122</span>
                            <p>This Week</p>
                        </div>
                        <hr/>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card">
                        <div class="fa-2x">App Downloads <i class=" pull-right" aria-hidden="true"></i></div>
                        <div class="card-content text-center">
                        </div>
                        <hr/>
                    </div>
                </div>
            </div>
            <!--End cards-->

            <!--Right report column-->
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="fa-2x panel-heading">Report</div>
                    <div class="media">
                        <div class="media-left">
                            <i class="icon-folder icons fa-3x"></i>
                        </div>
                        <div class="media-body">
                            <span class="media-heading">Sent SMS</span>
                            <div class="progress progress-mini">
                                <div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%;">
                                    <span class="sr-only">60% Complete</span>
                                </div>
                            </div>
                        </div>
                     </div>
                    {{-- <a class="list-group-item" href="#">
                        <i class="fa fa-folder"></i>Settings
                    </a>
                    <a class="list-group-item" href="#">
                        <i class="fa fa-file-o"></i>Settings
                    </a>
                    <a class="list-group-item" href="#">
                        <i class="fa fa-file-o"></i>Settings
                    </a> --}}
                </div>
            </div>
            <!--End Column-->

        </div>
    </div>
</div>
@endsection
