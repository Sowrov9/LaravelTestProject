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
        return redirect("/user");
    }
    function edit($id){
        $user=DB::select("select * from lr_users where id=$id");
        return view("user.update", compact("user"));
    }
    function update(Request $request){
        // print_r($request->all());
        // DB::select("update lr_users set name='$request->name',email='$request->email',phone='$request->phone' where id='$request->id'");
        DB::table('users')->where('id', $request->id)->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone
        ]);
        return redirect("/user")->with('success','User has been updated');
    }
    function destroy($id){
        DB::table('users')->where('id',$id)->delete();
        return redirect("/user")->with("delete","User has been deleted");
    }
}
