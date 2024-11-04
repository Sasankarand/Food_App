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
Route::get("/deleteuser/{id}",[AdminController::class,"deleteuser"]);

//sellercontroller routes
Route::get("/sellerdashboard",[SellerController::class,"sellerdashboard"]);
Route::get("/addnewfood",[SellerController::class,"addnewfood"]);
Route::get("/orders",[SellerController::class,"orders"]);
Route::get("/wallet",[SellerController::class,"wallet"]);
Route::get("/myfoods",[SellerController::class,"myfoods"]);
    Route::post("/uploadfood",[SellerController::class,"upload"]);
    Route::post("/update/{id}",[SellerController::class,"update"]);
Route::get("/deletefood/{id}",[SellerController::class,"deletefood"]);
Route::get("/updatefood/{id}",[SellerController::class,"updatefood"]);

//usercontroller routes
Route::get("/profile",[usercontroller::class,"profile"]);
Route::get("/userdashboard",[usercontroller::class,"userdashboard"]);
Route::get("/explore",[usercontroller::class,"explore"]);
    Route::post("/addcart/{id}",[usercontroller::class,"addcart"]);
    Route::post("/checkout/{data}",[usercontroller::class,"checkout"]);






Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
