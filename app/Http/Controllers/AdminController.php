<?php
/**
 * Author: reaper45
 * Date: 06/06/17
 * Time: 23:25
 *
 **/
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends UserController
{
  // Set the admin middleware for this class
  public function __construct()
  {
      $this->middleware('admin');
  }

  // Show the application dashboard.
  public function index(Request $request)
  {
    return view('user.admin.dashboard');
  }
}
