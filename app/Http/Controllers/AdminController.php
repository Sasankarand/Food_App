<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Cart;
use App\Models\Food;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    public function user(){
        $data=user::all();

        return view("admin.user",compact("data"));
    }

    public function deleteuser($id){
        $data=user::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function admin_orders(){
        $data1 = DB::table("carts")
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
        return view("admin.admin_order",compact("data1"));
    }

    public function deleteorder($id){
        $data1=cart::find($id);
        $data1->delete();
        return redirect()->back();
    }

    public function admin_foods(){
        $data2=food::all();
        return view("admin.admin_foods",compact("data2"));
    }

    public function removefood($id){
        $data1=food::find($id);
        $data1->delete();
        return redirect()->back();
    }


}
