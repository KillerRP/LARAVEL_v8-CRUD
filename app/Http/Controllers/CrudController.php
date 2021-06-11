<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class CrudController extends Controller
{
    function index()
    {
        $data = Product::all();
        return view('product.list',["data"=>$data]);
    }

    function add(Request $req)
    {
        $product_add = new Product;
        $product_add->product_name=$req->input('productname');
        $product_add->product_quantity=$req->input('productquantity');
        $product_add->save();
        return redirect()->route('product-list');
    }

    function delete($pid)
    {
        $data=Product::where('pid',$pid)->delete();
        return redirect()->route('product-list');
    }

    function showdata($pid)
    {
        $product = Product::where('pid',$pid)->first();
        return view('product.edit',compact('product'));
    }

    function update(Request $req)
    {
        $product=Product::find($req->input('pid'));
        $product->pid=$req->input('pid');
        $product->product_name=$req->input('productname');
        $product->product_quantity=$req->input('productquantity');
        $product->update();
        return redirect()->route('product-list');
    }
}
