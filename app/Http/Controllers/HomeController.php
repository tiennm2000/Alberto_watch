<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Product;
class HomeController extends Controller
{
    //
    public function index()
    {
        $products = Product::with(['images' => function ($query) {
            $query->limit(1); // Chỉ lấy một ảnh
        }])->get();
        $categories = Category::all();
        $latestProducts = Product::with(['images' => function ($query) {
            $query->limit(1); // Chỉ lấy một ảnh
        }])->where('created_at', '>=', Carbon::now()->subDays(7))->get();

        return view('welcome', compact('products','categories','latestProducts'));
    }

}
