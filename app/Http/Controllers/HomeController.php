<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        // if the user trying to login and his/her user type is user they will redirect to dashboarrd page
        if(Auth::user()->usertype == 'user')
        {
            return view('dashboard');
        }
        // if the user trying to login and his/her user type is not for a user for an example admin and then they will redirect to admin page
        else
        {
            return view('admin.home');
        }
    }
}
