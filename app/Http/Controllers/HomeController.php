<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Food;

class HomeController extends Controller
{
    public function index(){
        return view("home");
    }

    public function redirects(){
        $usertype=Auth::user()->usertype;

        if($usertype=="1"){
            return view("admin.adminhome");
        }
        else if($usertype=="2"){
            return view("seller.sellerhome");
        }
        else{
            $data=food::all();
            $city=Auth::user()->city;
            $street=Auth::user()->street;
            return view("user.userdashboard",compact("data","city","street"));
        }

}
}
