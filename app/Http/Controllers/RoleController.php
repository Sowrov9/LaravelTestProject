<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    function index(){
        $roles=[
            ["id"=>1, "name"=>"Sowrov","role"=>"Admin"],
            ["id"=>2, "name"=>"Shawon","role"=>"Admin"],
            ["id"=>3, "name"=>"Nayeem","role"=>"Editor"],
            ["id"=>4, "name"=>"Rahat","role"=>"Visitor"],
            ["id"=>5, "name"=>"Zia","role"=>"Reader"],
        ];
        return view("role.index",compact("roles"));
    }
    function create(){
        return view("role.create");
    }
    function store(Request $request){
        // print_r($request->all());
        $request->validate([
            "name"=>"required|min:3",
            "department"=>"required|in:Hr,Developer,Manager"
        ]);
        return redirect("/role")->with("S","Data submit successfully");
        // echo $request->name;
        // echo $request->department;
    }
    function update(){
        return view("role.update");
    }
}
