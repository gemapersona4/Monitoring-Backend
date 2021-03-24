<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
	function post(request $request) 
	{
		$product = new Product;
		$product->name = $request->name;
		$product->price = $request->price;
		$product->quantity = $request->quantity;
		$product->active = $request->active;
		$product->description = $request->description;
		
		$product->save();
		
    return response()->json(
        [
            "message" => "Success",
						"data" => $product 
        ]
    );
	}
	
	function get() 
	{
		$data = Product::all();

    return response()->json(
        [
            "message" => "Success",
						"data" => $data
				]
    );
	}
	
	function getById($id) 
	{
		$data = Product::where('id', $id)->get();

    return response()->json(
        [
            "message" => "Success",
						"data" => $data
				]
    );
	}
	
	function put($id, Request $request) 
	{
		$product = Product::where('id', $id)->first();
		if($product){
			$product->name = $request->name ? $request->name : $product->name;
			$product->price = $request->price ? $request->price : $product->price;
			$product->quantity = $request->quantity ? $request->quantity : $product->quantity; 
			$product->active = $request->active ? $request->active : $product->active;
			$product->description = $request->description ? $request->description : $product->description;
			
			$product->save();
			return response()->json(
					[
							"message" => "PUT Method Success ",
							"data" => $product
					]
			);
		}else{
			return response()->json(
					[
							"message" => "Product with id " . $id . " not found"
					], 400
			);
		}
	}
	
	function delete($id) 
	{
		$product = Product::where('id', $id)->first();
		if($product){
			$product->delete();
			return response()->json(
					[
							"message" => "DELETE Product id " . $id . " Success"
					]
			);
		}else{
			return response()->json(
					[
						"message" => "Product with id " . $id . " not found"
					], 400
			);
		}
	}

}
