<?php
/**
 * Author: reaper45
 * Date: 06/06/17
 * Time: 23:11
 *
 **/
  ?>
  @extends('layouts.app')

  @section('title')
      {{ config('app.name') }}
      {{ Auth::user()->usertype == 'super' ? "| Admin Profile" : "| Member Profile" }}
  @endsection

  @section('style')

  @endsection

  @section('content')

      <div class="container" style="width: 100%; padding-top: 50px; padding-left: 60px;">
          <div class="row">
              <br>

              <div class="col-md-4" >

                  <div class="dp">
                      <img src="{{ "https://www.gravatar.com/avatar/". md5(strtolower(trim(Auth::user()->email))) .  "?d=wavatar" }}" width="200" height="200"/>

                  </div>
                  <h3>
                      Username
                  </h3>

              </div>

              <div class="col-md-7 col-md-offset-1">
                  <h2>Timeline</h2>

                  <!-- Timeline of the user, forum topics, statuses etc -->


              </div>

          </div>
      </div>

  @endsection
