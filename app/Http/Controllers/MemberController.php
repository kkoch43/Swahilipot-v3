<?php
/**
 * Author: reaper45
 * Date: 06/06/17
 * Time: 23:23
 *
 **/
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends UserController
{
    // Set the admin middleware for this class
    public function __construct()
    {
        $this->middleware('auth');
    }
}
