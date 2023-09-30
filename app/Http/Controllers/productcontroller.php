<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class productcontroller extends Controller
{
    function index()
    {
        $data =Product::all();
        return view('product',['products'=>$data]);
    }
    function detail($id)
    {
        $data=Product::find($id);
        return view('details',['product'=>$data]);
    }
}
