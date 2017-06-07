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

  @endsection
