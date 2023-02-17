<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class MyController extends Controller
{
    //insert function
    function insert(Request $req)
    {
        $p_name = $req->get('p_name');
        $p_price = $req->get('p_price');
        $pimage = $req->file('image')->getClientOrignalName();

        //move upload file code here..
        $req->image->move(public_path('images'),$pimage);

        return $req->input();
    }
}
