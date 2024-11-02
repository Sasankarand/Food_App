<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usercontroller extends Controller
{
    public function profile(){
        return view("user.profile");
    }
    public function userdashboard(){
        return view("user.userdashboard");
    }
}
