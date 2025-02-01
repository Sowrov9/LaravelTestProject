<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function index(){
        $users=DB::select("select * from lr_users");
        // print_r($users);
        return view("user.index",compact("users"));
    }

    function create(){
        return view("user.create");
    }
    function store(Request $request){
        // print_r($request->all());
        DB::select("insert into lr_users(name,email,phone)values('$request->name','$request->email','$request->phone')");
    }
}
