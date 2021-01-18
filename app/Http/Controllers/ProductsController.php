<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Products;
use App\Comments;

class ProductsController extends Controller
{
    public function index()
    {
      	$products=Products::get();
      	return view("products.index",["products"=>$products]);
    }

    public function create()
    {
    	return view("products.create");
    }

    public function show($id)
    {
    	$result=Products::where("id",$id)->firstOrFail(); 
        $comments=Comments::where("product_id",$id)->get();
    	return view("products.show",["result"=>$result,"comments"=>$comments]);

    }

    public function store(Request $request)
    {
    	Products::create([
    		"title"=>$request->input('title'),
    		"description"=>$request->input('description'),
            "price"=>$request->input('price')
    	]);
    	return redirect()->route("Adminindex");
    }

    public function edit($id)
    {
    	$result=Products::where("id",$id)->firstOrFail(); 
        return view("products.edit",["result"=>$result]);

    }

    public function update(Request $request)
    {
        Products::where("id",$request->input("id"))->update([
            "title"=>$request->input('title'),
            "description"=>$request->input('description'),
            "price"=>$request->input('price')

        ]);
        return redirect()->route("Adminindex");
    }

    public function delete(Request $request)
    {
    	Products::where("id",$request->input("id"))->delete();
    	return redirect()->back();
    }

    public function store_comment(Request $request)
    {
        Comments::create([
            "comments"=>$request->input("comments"),
            "product_id"=>$request->input("id"),
            "price"=>$request->input('price')

        ]);
    }
}

