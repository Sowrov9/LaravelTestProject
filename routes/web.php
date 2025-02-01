<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get("/user/{id?}", function($id){
//     echo "The id is {$id}";
// });
Route::get("/v/{name?}/{age?}",function($name,$age){
    echo "My name is $name. I'm $age years old.";
});
Route::get("/user-page",function(){
    return view("user");
});
Route::get("user-page/{userName}",function($name){
    return view("user",["name"=>$name]);
});
// Route::get("user-man/{man?}",function($man){
//     return view("user",compact("man"));
// });

Route::get("userlist",function(){
    $users=[
        ["id"=>1,"name"=>"Sowrov","has-girlfriend"=>"No"],
        ["id"=>2,"name"=>"Shawon","has-girlfriend"=>"No"],
        ["id"=>3,"name"=>"Delwar","has-girlfriend"=>"Yes"],
        ["id"=>3,"name"=>"Rana","has-girlfriend"=>"No"],
        ["id"=>4,"name"=>"Razib","has-girlfriend"=>"Yes"],
        ["id"=>5,"name"=>"Salman","has-girlfriend"=>"Yes"],
        ["id"=>5,"name"=>"Aslam","has-girlfriend"=>"No"],
    ];
    return view("userlist",compact("users"));
});

Route::get("/role",[RoleController::class,"index"]);
Route::get("/role/create",[RoleController::class,"create"]);
Route::post("/role/store",[RoleController::class,"store"]);
Route::get("/role/update",[RoleController::class,"update"]);

// Route::get("/customer/{name}/{place}",[CustomerController::class,"index"]);
Route::get("/customer",[CustomerController::class,"index"]);
Route::get("/customer/create",[CustomerController::class,"create"]);


Route::get("/user",[UserController::class,"index"]);
Route::get("/user/create",[UserController::class,"create"]);
Route::post("/user/store",[UserController::class,"store"]);
