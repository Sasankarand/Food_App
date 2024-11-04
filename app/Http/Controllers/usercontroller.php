<?php

namespace App\Http\Controllers;
use App\Models\Food;
use App\Models\User;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class usercontroller extends Controller
{
    public function profile(){
        return view("user.profile");
    }

    public function userdashboard(){
        $data=food::all();
        $city=Auth::user()->city;
        $street=Auth::user()->street;
        return view("user.userdashboard",compact("data","city","street"));
    }

    public function explore(){
        $data=user::all();
        $city=Auth::user()->city;
        $street=Auth::user()->street;
        return view("user.explore",compact("data","city","street"));
    }

    public function addcart($id){
        $food_detail=food::find($id);
        return redirect()->back()->with('food_detail',$food_detail);
    }

    public function checkout(Request $request,$id){
        $foodid=$id;
        $quantity=$request->quantity;
        $user_id=Auth::user()->id;

        $cart=new cart;
        $cart->user_id=$user_id;
        $cart->quantity=$quantity;
        $cart->food_id=$foodid;
        $cart->save();
        return redirect()->back();
    }
}
