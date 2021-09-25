<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function store(Request $request)
    {
        $request->validate(['name'=>'required|max:191',
        'email'=>'required|max:191',
        'mobile'=>'required|max:191']);
        $product= new Product;
        $product->name=$request->name;
        $product->email=$request->email;
        $product->mobile=$request->mobile;
        $product->save();
        return response()->json(['message'=>'Product added successfully'],200);
    }
    public function index()
    {
        $products = Product::all();
        return response()->json(['products'=>$products],200);
    }
    public function Update(Request $request,$id)
    {
        $request->validate(['name'=>'required|max:191',
        'email'=>'required|max:191',
        'mobile'=>'required|max:191']);
        $product= Product::find($id);
        if($product)
        {
        $product->name=$request->name;
        $product->email=$request->email;
        $product->mobile=$request->mobile;
        $product->update();
        return response()->json(['message'=>'Product update sucessfully'],200);
        }
        else
        {
        return response()->json(['message'=>'No Product found'],400);
        }
    }
}
