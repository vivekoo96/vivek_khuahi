<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function category_product(Request $request){
        // dd($request->slug);
        $categorey = Category::where('slug',$request->slug)->first();
        $products = Product::where('id',$categorey->id)->get();
        // dd($products);
            return view('category_product',compact('products','categorey'));
    }

    public function brand_product(Request $request){
        $brand = Brand::where('slug',$request->slug)->first();
        $products = Product::where('id',$brand->id)->get();
        // dd($products);
            return view('category_product',compact('products','brand'));
    }

    public function product(Request $request){
         $product = Product::where('slug',$request->slug)->first();
         return view('product_details',compact('product'));
    }
}
