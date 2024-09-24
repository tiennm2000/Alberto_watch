<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Technology;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index(){
        $products = Product::with(['images' => function ($query) {
            $query->limit(1); // Chỉ lấy một ảnh
        }])->get();
        $brands = Brand::all();
        $categories = Category::all();
        $technologies = Technology::all();
        return view('product',compact('products','brands','categories','technologies'));
    }
}
