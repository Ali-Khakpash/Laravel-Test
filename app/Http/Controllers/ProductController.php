<?php

namespace App\Http\Controllers;

use App\Product;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;


use DB;




class ProductController extends Controller{



public function createProduct(Request $request){

    $product = Product::create($request->all());

    return response()->json($product);

}

public function updateProduct(Request $request, $id){



    $product  = DB::table('products')->where('id',$request->input('id'))->get();

       $product->name = $request->input('name');

       $product->price = $request->input('price');

       $product->description = $request->input('description');

       $product->save();

       $response["products"] = $product;

       $response["success"] = 1;

    return response()->json($response);

}  



public function deleteProduct($id){

    $product  = DB::table('products')->where('id',$request->input('id'))->get();

    $product->delete();

    return response()->json('Removed successfully.');

}



public function index(){

    $products  = Product::all();

       $response["products"] = $products;
    
       $response["error"] = 'false';

       $response["success"] = 1;

    return response()->json($response);

}

}

?>