<?php
/**
 * Author: reaper45
 * Date: 06/06/17
 * Time: 23:25
 *
 **/
namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Easing things. Class User controller is extended by both Admin and Member.
 * Easier to implements functionality required by both.
 */

class UserController extends Controller
{
    // Show profile page
    public function getProfile($value='')
    {
        return view('user.profile');
    }

    // Show settings page
    public function getSettings($value='')
    {
        return view('user.settings');
    }
}
