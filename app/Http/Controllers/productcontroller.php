<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Session;


class productcontroller extends Controller
{
    function index()
    {
        $data =Product::all();
        return view('product',['products'=>$data]);
    }
    function detail($id)
    {
        $product=Product::find($id);
        return view('details',['product'=>$product]);
    }
    function search(Request $req)
    {

        $data=Product::where('name','like','%'.$req->input('query').'%')->get();
        return view('search',['products'=>$data]);
    }
    function addToCart(Request $req)
    {
        if ($req->session()->has('userdata'))
        {
            $cart=new Cart;
            $cart->user_id=$req->session()->get('userdata')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return view('add_to_cart');

        }
        else{
            return view('login');
        }
    }
    static function cartitem()
    {
        $userId=Session::get('userdata')['id'];
        return Cart::where('user_id',$userId)->count();
    }
}
