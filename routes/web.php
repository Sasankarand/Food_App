<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\usercontroller;



//homecontroller routes
Route::get("/",[HomeController::class,"index"]);
Route::get("/redirects",[HomeController::class,"redirects"]);

//admincontroller routes
Route::get("/users",[AdminController::class,"user"]);
Route::get("/admin_orders",[AdminController::class,"admin_orders"]);
Route::get("/deleteuser/{id}",[AdminController::class,"deleteuser"]);
Route::get("/deleteorder/{id}",[AdminController::class,"deleteorder"]);
Route::get("/admin_foods",[AdminController::class,"admin_foods"]);
Route::get("/removefood/{id}",[AdminController::class,"removefood"]);


//sellercontroller routes
Route::get("/sellerdashboard",[SellerController::class,"sellerdashboard"]);
Route::get("/addnewfood",[SellerController::class,"addnewfood"]);
Route::get("/orders",[SellerController::class,"orders"]);
Route::get("/wallet",[SellerController::class,"wallet"]);
Route::get("/myfoods",[SellerController::class,"myfoods"]);
    Route::post("/uploadfood",[SellerController::class,"upload"]);
    Route::post("/update/{id}",[SellerController::class,"update"]);
    Route::post("/statuspass/{id}",[SellerController::class,"statuspass"]);
Route::get("/deletefood/{id}",[SellerController::class,"deletefood"]);
Route::get("/updatefood/{id}",[SellerController::class,"updatefood"]);

//usercontroller routes
Route::get("/profile",[usercontroller::class,"profile"]);
Route::get("/userdashboard",[usercontroller::class,"userdashboard"]);
Route::get("/explore",[usercontroller::class,"explore"]);
    Route::post("/addcart/{id}",[usercontroller::class,"addcart"]);
    Route::post("/checkout/{data}",[usercontroller::class,"checkout"]);
    Route::post("/status_finalpass/{id}",[usercontroller::class,"status_finalpass"]);
    Route::post("/cancelorder/{id}",[usercontroller::class,"cancelorder"]);
Route::get("/oders",[usercontroller::class,"oders"]);






Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
