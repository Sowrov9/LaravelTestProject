<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    function index(){
        return view("role.index");
    }
    function create(){
        return view("role.create");
    }
    function update(){
        return view("role.update");
    }
}
