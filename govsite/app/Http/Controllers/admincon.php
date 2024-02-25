<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class admincon extends Controller
{
    function login()
    {
        return view('admin');
    }
    function getdata(Request $req)
    {
        print_r($req->all());
    }
}
