<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    // function index($name,$place){
    function index(){

        $customers=[
            ["id"=>1,"name"=>"Shahed","address"=>"Dhaka","mobile"=>"01876485968"],
            ["id"=>2,"name"=>"Nayeem","address"=>"Cumilla","mobile"=>"01456983766"],
            ["id"=>3,"name"=>"Rifat","address"=>"Noakhali","mobile"=>"01876485925"],
            ["id"=>4,"name"=>"Rahad","address"=>"Sylhet","mobile"=>"0175486936"],
            ["id"=>5,"name"=>"Nahid","address"=>"Dhaka","mobile"=>"01858795968"],
            ["id"=>6,"name"=>"Sayem","address"=>"Rajshahi","mobile"=>"01976485968"],
            ["id"=>7,"name"=>"Shihab","address"=>"Dhaka","mobile"=>"01676485968"]
        ];
        // return view("customer.index",compact("customers","name","place"));
        return view("customer.index",compact("customers"));
    }

    function create(){
        
    }
}
