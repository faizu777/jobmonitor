<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\table_employe;
class employeedatacontroller extends Controller
{
    function InsertData(Request $request) 
    {
        
    }
    function ShowData() 
    {
        $model=new table_employe();
        $data=$model::all();
        $new=compact('data');
        return view('layout/index')->with('new',$new,);
    }
    function DeleteData(Request $id)
    {

    }
}
