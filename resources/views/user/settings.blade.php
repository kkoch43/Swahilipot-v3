<?php
/**
 * Author: reaper45
 * Date: 06/06/17
 * Time: 23:48
 *
 **/
  ?>
  @extends('layouts.app')

  @section('title')
      {{ config('app.name') }}
      {{ Auth::user()->usertype == 'super' ? "| Admin Settings" : "| Member Settings" }}
  @endsection

  @section('style')

  @endsection

  @section('content')

  @endsection
