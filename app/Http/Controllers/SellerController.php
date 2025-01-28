<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Cart;
use App\Models\Food;
use Illuminate\Support\Facades\Auth;

class SellerController extends Controller
{
    public function sellerdashboard(){
        return view("seller.sellerhome");
    }

    public function addnewfood(){
        return view("seller.addnewfood");
    }

    public function orders(){
        $vendor_id=Auth::user()->id;
        $results = Cart::where('cartvendor_id', $vendor_id)
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


        return view("seller.orders",compact("results"));
    }

    public function wallet(){
        $vendor_id=Auth::user()->id;
        $results = Cart::where('cartvendor_id', $vendor_id)
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

            $results1 = Cart::where('cartvendor_id', $vendor_id)
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

            $results2 = Cart::where('cartvendor_id', $vendor_id)
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

            $results3 = Cart::where('cartvendor_id', $vendor_id)
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

        $count = Cart::where('cartvendor_id', $vendor_id)
            ->join('users', 'carts.user_id', '=', 'users.id')
            ->join('food', 'carts.food_id', '=', 'food.id')
            ->where('carts.status', 'success') // Only rows where status is "success"
            ->count();
        return view("seller.wallet",compact("results","count","results1","results2","results3"));
    }

    public function myfoods(){
        $data=food::all();
        $usermail=Auth::user()->email;
        return view("seller.myfoods",compact("data","usermail"));
    }

    public function upload(Request $request){
        $data=new food;
        $vendorid=Auth::user()->id;
        $phone=Auth::user()->phone_number;
        $vendorname=Auth::user()->name;

        //getting users email
        $mail=Auth::user()->email;

        $image=$request->image;

        //creating name for image
        $imagename=time().".". $image->getClientOriginalExtension();

            //move image to public/foodimage
            $image->move("foodimage",$imagename);
            //assign to database
            $data->image=$imagename;

        $data->name=$request->foodname;
        $data->price=$request->price;
        $data->description=$request->description;
        $data->email=$mail;
        $data->phone_number=$phone;
        $data->vendor_name=$vendorname;
        $data->vendor_id=$vendorid;
        $data->save();
        return redirect()->back();
    }

    public function deletefood($id){
        $data=food::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function updatefood($id){
        $data=food::find($id);
        return view("seller.updatefood",compact("data"));
    }

    public function update(Request $request, $id){
        $data=food::find($id);
        $data->name=$request->foodname;
        $data->price=$request->price;
        $data->description=$request->description;
        $data->save();
        return redirect()->back();
    }
    public function statuspass($id){
        $data=cart::find($id);
        $data->status="Pending";
        $data->save();
        return redirect()->back();
    }
}
