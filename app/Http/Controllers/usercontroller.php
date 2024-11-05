<?php

namespace App\Http\Controllers;
use App\Models\Food;
use App\Models\User;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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

    public function oders(){
        $userid=Auth::user()->id;
        $results = Cart::where('user_id', $userid)
        ->join('users', 'carts.user_id', '=', 'users.id')
        ->join('food', 'carts.food_id', '=', 'food.id')
        ->select(
            'users.name as user_name',
            'food.name as food_name',
            'food.vendor_name',
            'food.price',
            'food.image',
            'carts.quantity',
            'carts.created_at',
            'carts.id',
            'carts.status',
            'users.phone_number',
            'users.street'
        )

        ->get();

        return view("user.oders",compact("results"));
    }

    public function addcart($id){
        $food_detail=food::find($id);
        return redirect()->back()->with('food_detail',$food_detail);
    }

    public function checkout(Request $request,$id){
        $foodid=$id;
        $data=food::find($id);
        $data2=$data->vendor_id;
        $quantity=$request->quantity;
        $user_id=Auth::user()->id;

        $cart=new cart;
        $cart->user_id=$user_id;
        $cart->cartvendor_id=$data2;
        $cart->quantity=$quantity;
        $cart->food_id=$foodid;
        $cart->save();
        return redirect()->back();
    }

    public function status_finalpass($id){
        $cart_detail=cart::find($id);
        $cart_detail->status="Success";
        $cart_detail->save();
        return redirect()->back();
    }

    public function cancelorder($id){
        $cart_detail=cart::find($id);
        $cart_detail->status="Canceled By Customer";
        $cart_detail->save();
        return redirect()->back();
    }
}
