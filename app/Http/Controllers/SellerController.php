<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        return view("seller.orders");
    }

    public function wallet(){
        return view("seller.wallet");
    }

    public function myfoods(){
        $data=food::all();
        $usermail=Auth::user()->email;
        return view("seller.myfoods",compact("data","usermail"));
    }

    public function upload(Request $request){
        $data=new food;

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
}
